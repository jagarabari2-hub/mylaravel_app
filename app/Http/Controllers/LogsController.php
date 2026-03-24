<?php

namespace App\Http\Controllers;

use App\Models\Logs;
use App\Models\Employs;
use App\Models\Depts;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Views\Views;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function normal_tables()
    {
        $logs = Logs::all();

        // Pass the logs and user count to the view
        return view('normal-tables', compact('logs'));
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function signup()
    {
        return view('logs.signup');
    }

    // Sign-up function
    public function signlog(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email|unique:logs,email', // Corrected unique validation
            'pass' => 'required|min:6' // Minimum length for password (optional)
        ]);

        // Create new user
        $user = new Logs();
        $user->email = $request->email;
        $user->pass = Hash::make($request->pass);

        // Save the user
        if ($user->save()) {
            return redirect()->route('welcome')->with('success', 'Sign Up Successful! You can now Sign In.');
        }

        // If something goes wrong, return to the signup page with error message
        return redirect()->route('signup')->with('error', 'Sign Up Failed! Please try again.');
    }

    // Sign-in function
    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'email' => 'required|email', // Validate email
            'pass' => 'required|min:6',  // Validate password (optional min length)
        ]);

        // Retrieve user by email
        $user = Logs::where('email', $request->email)->first();

        // If user is not found
        if (!$user) {
            return redirect()->route('signup')->with('error', 'Email Not Registered!');
        }

        // Check if the password matches
        if (!Hash::check($request->pass, $user->pass)) {
            return redirect()->route('welcome')->with('error', 'Incorrect Password!');
        }

        // Create session data
        session([
            'user_id' => $user->id,
            'user_email' => $user->email
        ]);

        // Redirect to dashboard after successful login
        return redirect()->route('index')->with('success', 'Welcome to your Dashboard!');
    }

    // Index route (Dashboard)
    public function index()
    {
        // Check if user is logged in (session exists)
        if (!session()->has('user_id')) {
            return redirect()->route('signup');
        }

        $userCount = Logs::count();
        $employCount = Employs::count();
        $deptsCount = Depts::count();
        // Return view for the dashboard
        return view('index', compact('userCount', 'employCount', 'deptsCount'));
    }

    // Logout function
    public function logout()
    {
        // Destroy session
        session()->flush();

        // Redirect to sign-up page after logout
        return redirect()->route('signup');
    }
}
