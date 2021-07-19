<?php

namespace App\Http\Controllers;

use App\Nilai;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai.index');
    }

    public function create()
    {
        return view('makul.nilai');
    }
    public function store(request $request)
    {
        nilai::create($request->all());
        return redirect()->route('nilai');
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


