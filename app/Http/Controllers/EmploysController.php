<?php

namespace App\Http\Controllers;

use App\Models\Employs;
use App\Models\Depts;
use App\Models\Logs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmploysController extends Controller
{
    public function employ()
    {
        $employs = Employs::paginate(10);
        return view('employ.index', compact('employs'));
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
        return redirect()->route('employ.index')->with('success', 'Resource Successfully Created');
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
    public function edit(Employs $employs, $id)
    {
        // dd($employs);
        $employs = Employs::find($id);
        return view('employ.edit', compact('employs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employs $employs,$id)
    {
        $employ = Employs::find($id);

        if (!$employ) {
            return redirect()->back()->with('error', 'Record not found');
        }

        $employ->name = $request->name;
        $employ->depart = $request->depart;
        $employ->phone = $request->phone;

        $employ->save(); // ⚠️ MUST HAVE THIS

        return redirect()->route('employ.index')->with('success', 'Updated successfully');
    }   

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employs $employ)
    {
        $employ->delete();
    
        return redirect()->route('employ.index')
            ->with('success', 'Deleted successfully');
    }
}
