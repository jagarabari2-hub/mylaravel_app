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
}
