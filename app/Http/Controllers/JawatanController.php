<?php

namespace App\Http\Controllers;

use App\Models\Jawatan;
use Illuminate\Http\Request;

class JawatanController extends Controller
{
    public function index()
    {
        // $jawatans = Jawatan::with(['department', 'bank'])->get();
        // return response()->json($jawatans);
        $jawatans = Jawatan::all(); // Ambil semua data jawatan
        return view('jawatans.index', compact('jawatans'));
    }

    public function create(Request $request)
    {
        $id_pekerja = $request->get('id_pekerja');
        //$departments = Department::all(); // Pastikan anda mempunyai model Department
        //$banks = Bank::all(); // Pastikan anda mempunyai model Bank
        //return view('jawatans.create', compact('id_pekerja', 'departments', 'banks'));
        return view('jawatans.create', compact('id_pekerja'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date_lapordiri' => 'required|date',
            'id_departments' => 'required|exists:departments,id',
            'jawatan' => 'required|string|max:255',
            'salary' => 'required|numeric|min:0',
            'id_banks' => 'required|exists:banks,id',
            'noakaun' => 'required|string|max:255',
            'jumlahcuti' => 'nullable|integer|min:0',
        ]);

        $jawatan = Jawatan::create($request->all());

        //return response()->json(['message' => 'Jawatan created successfully', 'data' => $jawatan], 201);
        return redirect()->route('pekerjas.index')->with('success', 'Jawatan berjaya didaftarkan.');
    }

    public function show($id)
    {
        $jawatan = Jawatan::with(['department', 'bank'])->findOrFail($id);
        return response()->json($jawatan);
    }

    public function edit($id_pekerja)
    {
        $jawatan = Jawatan::findOrFail($id_pekerja);
        return view('jawatans.edit', compact('jawatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'date_lapordiri' => 'nullable|date',
            'id_departments' => 'nullable|exists:departments,id',
            'jawatan' => 'nullable|string|max:255',
            'salary' => 'nullable|numeric|min:0',
            'id_banks' => 'nullable|exists:banks,id',
            'noakaun' => 'nullable|string|max:255',
            'jumlahcuti' => 'nullable|integer|min:0',
        ]);

        $jawatan = Jawatan::findOrFail($id);
        $jawatan->update($request->all());

        //return response()->json(['message' => 'Jawatan updated successfully', 'data' => $jawatan]);
        return redirect()->route('jawatans.index')->with('success', 'Jawatan berjaya dikemaskini.');
    }

    public function destroy($id)
    {
        $jawatan = Jawatan::findOrFail($id);
        $jawatan->delete();

        return response()->json(['message' => 'Jawatan deleted successfully']);
    }
}

