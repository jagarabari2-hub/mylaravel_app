<?php

namespace App\Http\Controllers;

use App\Models\Depts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeptsController extends Controller
{
    public function depts() 
    {
        $depts = Depts::paginate(10);
        return view('dep.index', compact('depts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dep.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'phone' => 'required|integer|min:10',
            'position' => 'required|string|max:200',
            'salary' => 'required|numeric'
        ]);

        Depts::create($validated);

        return redirect()->route('dep.index')->with('success', 'Department Created Successfully');  
    }

    /**
     * Display the specified resource.
     */
    public function show(Depts $depts, $id)
    {
        $depts = Depts::find($id);
        return view('dep.show', compact('depts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Depts $depts, $id)
    {
        $depts = Depts::find($id);
        return view('dep.edit', compact('depts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:200',
            'email' => 'required|email|max:200',
            'phone' => 'required|string|min:10|max:15',
            'position' => 'required|string|max:200',
            'salary' => 'required|numeric'
        ]);

        $depts = Depts::findOrFail($id); 
        $depts->update($validated);      

        return redirect()->route('dep.index')->with('success', 'Department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depts $depts, $id)
    {
        $depts->destroy($id);
        return redirect()->route('dep.index')->with('success', 'Department Delete Successfully');
    }
}
