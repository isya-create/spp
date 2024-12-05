<?php

namespace App\Http\Controllers;

use App\Models\Pasangan;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class PasangansController extends Controller
{
    public function index()
    {
        $pasangans = Pasangan::all();
        $pekerjas = Pekerja::all(); // Fetch all pekerjas
        return view('pasangans.index', compact('pasangans', 'pekerjas'));
    }

    // public function create()
    // {
    //     return view('pasangans.create');
    // }

    public function create(Request $request)
    {
        $id_pekerja = $request->get('id_pekerja');
        return view('pasangans.create', compact('id_pekerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pekerja' => 'required',
            'nricpasangan' => 'required',
            'namapasangan' => 'required',
            'hubungan' => 'required',
            'notel' => 'required',
        ]);

        Pasangan::create($request->all());
        return redirect()->route('pasangans.index')->with('success', 'Pasangan created successfully.');
    }

    public function show(Pasangan $pasangan)
    {
        return view('pasangans.show', compact('pasangan'));
    }

    // public function edit(Pasangan $pasangan)
    // {
    //     return view('pasangans.edit', compact('pasangan'));
    // }

    public function edit($id)
    {
        $pasangan = Pasangan::find($id);
        $pekerjas = Pekerja::all(); // Fetch all pekerjas

        // Debugging statement
        dd($pekerjas);

        return view('pasangans.edit', compact('pasangan', 'pekerjas'));
    }

    public function update(Request $request, Pasangan $pasangan)
    {
        $request->validate([
            'id_pekerja' => 'required',
            'nricpasangan' => 'required',
            'namapasangan' => 'required',
            'hubungan' => 'required',
            'notel' => 'required',
        ]);

        $pasangan->update($request->all());
        return redirect()->route('pasangans.index')->with('success', 'Pasangan updated successfully.');
    }

    public function destroy(Pasangan $pasangan)
    {
        $pasangan->delete();
        return redirect()->route('pasangans.index')->with('success', 'Pasangan deleted successfully.');
    }
}