<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use App\Models\Pekerja;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CutiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $cutis = Cuti::when($search, function ($query, $search) {
            return $query->whereHas('pekerja', function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%");
            })->orWhere('date_mulacuti', 'like', "%{$search}%")
            ->orWhere('date_tamatcuti', 'like', "%{$search}%");
        })->paginate(15);

        return view('cutis.index', compact('cutis', 'search'));
    }

    public function create()
    {
        $pekerjas = Pekerja::all();
        return view('cutis.create', compact('pekerjas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pekerjas' => 'required|exists:pekerjas,id',
            'tahun' => 'required|integer',
            'jenis_cuti' => 'required|string',
            'jum_cutibersalin' => 'required|integer',
            'date_mulacuti' => 'required|date',
            'date_tamatcuti' => 'required|date',
            'jumcuti' => 'required|integer',
            'bil_cutidipohon' => 'required|integer',
            'bakicuti' => 'required|integer',
            'bakikehadapan' => 'required|integer',
            'status_permohonan' => 'required|string',
            'dokumen' => 'nullable|string',
        ]);

        Cuti::create($request->all());

        return redirect()->route('cutis.index')->with('success', 'Cuti created successfully.');
    }

    public function show(Cuti $cuti)
    {
        return view('cutis.show', compact('cuti'));
    }

    public function edit(Cuti $cuti)
    {
        $pekerjas = Pekerja::all();
        return view('cutis.edit', compact('cuti', 'pekerjas'));
    }

    public function update(Request $request, Cuti $cuti)
    {
        $request->validate([
            'id_pekerjas' => 'required|exists:pekerjas,id',
            'tahun' => 'required|integer',
            'jenis_cuti' => 'required|string',
            'jum_cutibersalin' => 'required|integer',
            'date_mulacuti' => 'required|date',
            'date_tamatcuti' => 'required|date',
            'jumcuti' => 'required|integer',
            'bil_cutidipohon' => 'required|integer',
            'bakicuti' => 'required|integer',
            'bakikehadapan' => 'required|integer',
            'status_permohonan' => 'required|string',
            'dokumen' => 'nullable|file|mimes:pdf,doc,docx,jpg,png|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('dokumen')) {
            $file = $request->file('dokumen');
            $path = $file->store('dokumen', 'public');
            $data['dokumen'] = $path;
        }

        $cuti->update($data);

        return redirect()->route('cutis.index')->with('success', 'Cuti updated successfully.');
    }

    public function destroy(Cuti $cuti)
    {
        $cuti->delete();

        return redirect()->route('cutis.index')->with('success', 'Cuti deleted successfully.');
    }    
}