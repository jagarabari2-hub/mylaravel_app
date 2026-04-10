<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employs;
use App\Models\Depts;

class EmpdtlController extends Controller
{
    public function index()
    {
        $employs = Employs::all();
        return view('empdtl.index', compact('employs'));
    }

    public function show(Employs $employs, Depts $depts, $id) 
    {
        $employs = Employs::find($id);
        $depts = Depts::find($id);
        return view('empdtl.show', compact('employs', 'depts'));
    }

    public function edit($id) 
    {
        $employs = Employs::find($id);
        $depts = Depts::find($id);
        return view('empdtl.edit', compact('employs', 'depts'));
    }

    public function update(Request $request, Employs $employs, Depts $depts, $id) 
    {
        $employ = Employs::find($id);
        $depts = Depts::find($id);

        if (!$employ && !$depts) {
            return redirect()->back()->with('error', 'Record not found');
        }

        $employ->name = $request->name;
        $employ->depart = $request->depart;
        $employ->phone = $request->phone;
        $depts->position = $request->position;
        $depts->salary = $request->salary;

        $employ->save();
        $depts->save(); 

        return redirect()->route('empdtl.index')->with('success', 'Updated successfully');
    }
}
