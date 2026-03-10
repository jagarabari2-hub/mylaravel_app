<?php

namespace App\Http\Controllers;

use App\Models\Employs;
use Illuminate\Http\Request;

class EmploysController extends Controller
{
    /**
     * Show the requested page dynamically based on the URL.
     *
     * @param  string  $page
     * @return \Illuminate\Views\Views
     */
    public function showPage($page)
    {
        $employs = Employs::all();
        // Check if the view exists in resources/views
        if (view()->exists($page)) {
            return view($page, compact('employs')); // Render the page if the view exists
        }

        // If the view doesn't exist, show a 404 error page
        return view('404'); // Make sure you have a 404.blade.php in the resources/views/ directory
    }

    public function employ()
    {
        return view('employ.index');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd('Index method is being called');

        $employs = Employs::all();


        return view('index2', compact('employs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employ.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming data using $request->validate() directly
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'depart' => 'required|string|max:255',
            'phone' => 'required|regex:/^\d{10}$/'
        ]);

        // If validation passes, create and save the new resource
        Employs::create($validated); // Using mass-assignment


        // Return a response indicating success
        return redirect('index2')->with('success', 'Resource Successfully Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employs $employs, $id)
    {
        $employs = Employs::find($id);
        return view('employ.show', compact('employs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employs $employs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employs $employs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employs $employs)
    {
        //
    }
}
