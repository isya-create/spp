<?php

namespace App\Http\Controllers;

use App\Models\Pekerja;
use App\Models\Agama;
use App\Models\Bangsa;
use App\Models\Gender;
use App\Models\Marital;
use App\Models\Status;
use App\Models\Pasangan;
use App\Models\Hubungan;
use Illuminate\Http\Request;

class PekerjaController extends Controller
{
    public function index()
    {
        $pekerjas = Pekerja::all();
       
        return view('pekerjas.index', compact('pekerjas'));
    }

    // public function create()
    // {
    //     return view('pekerjas.create');
    // }

    public function create()
    {
        $agamas = Agama::all();
        $bangsas = Bangsa::all();
        $genders = Gender::all();
        $maritals = Marital::all();
        $statuses = Status::all();
        $hubungans = Hubungan::all();
        return view('pekerjas.create', compact('agamas', 'bangsas', 'genders', 'maritals', 'statuses', 'hubungans'));        
    }

    public function store(Request $request)
    {
        $request->validate([
            'nric' => 'required',
            'employeeID' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jantina' => 'required',
            'tarikhlahir' => 'required|date',
            'agama' => 'required',
            'bangsa' => 'required',
            'kewarganegaraan' => 'required',
            'statusperkahwinan' => 'required',
            'notel' => 'required',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        Pekerja::create($request->all());

        return redirect()->route('pekerjas.index')->with('success', 'Pekerja created successfully.');
    }

    public function show(Pekerja $pekerja)
    {
        return view('pekerjas.show', compact('pekerja'));
    }

    // public function edit(Pekerja $pekerja)
    // {
    //     return view('pekerjas.edit', compact('pekerja'));
    // }

    public function edit($id)
    {
        $agamas = Agama::all();
        $bangsas = Bangsa::all();
        $genders = Gender::all();
        $maritals = Marital::all();
        $statuses = Status::all();
        $pekerja = Pekerja::find($id);
        $hubungans = Hubungan::all();
        $pasangan = Pasangan::where('id_pekerja', $pekerja->id)->first(); // Adjust this query as needed
        return view('pekerjas.edit', compact('pekerja', 'agamas', 'bangsas', 'genders', 'maritals', 'statuses', 'pasangan', 'hubungans'));
    }
    // public function edit($id)
    // {
    //     $pekerja = Pekerja::findOrFail($id);
    //     return view('pekerjas.edit', compact('pekerja'));
    // }

    public function update(Request $request, Pekerja $pekerja)
    {
        $request->validate([
            'nric' => 'required',
            'employeeID' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jantina' => 'required',
            'tarikhlahir' => 'required|date',
            'agama' => 'required',
            'bangsa' => 'required',
            'kewarganegaraan' => 'required',
            'statusperkahwinan' => 'required',
            'notel' => 'required',
            'email' => 'required|email',
            'status' => 'required',
        ]);

        $pekerja->update($request->all());

        return redirect()->route('pekerjas.index')->with('success', 'Pekerja updated successfully.');
    }

    public function destroy(Pekerja $pekerja)
    {
        $pekerja->delete();

        return redirect()->route('pekerjas.index')->with('success', 'Pekerja deleted successfully.');
    }

    // public function updatePasangan(Request $request, $id)
    // {
    //     $request->validate([
    //         'nricpasangan' => 'required',
    //         'namapasangan' => 'required',
    //         'hubungan' => 'required',
    //         'notel' => 'required',
    //     ]);

    //     $pekerja = Pekerja::find($id);
    //     $pekerja->update([
    //         'nricpasangan' => $request->nricpasangan,
    //         'namapasangan' => $request->namapasangan,
    //         'hubungan' => $request->hubungan,
    //         'notel' => $request->notel,
    //     ]);

    //     return redirect()->route('pekerjas.edit', $id)->with('success', 'Maklumat Pasangan updated successfully.');
    // }
}

