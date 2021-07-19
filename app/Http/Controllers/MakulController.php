<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::with(['user'])->get();
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }
    public function store(request $request)
    {
        makul::create($request->all());
        return redirect()->route('makul');
    }
    public function edit($id)
    {
       $makul = makul::find($id);
       return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $makul = makul::find($id);
        $makul->update($request->all());
        return redirect()->route('makul');

    }

    public function destroy($id)
    {
        $makul = makul::find($id);
        $makul->delete();
        return redirect()->route('makul');
    }

}


