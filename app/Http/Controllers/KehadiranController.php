<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    public function index(Request $request)
    {
        //$kehadirans = Kehadiran::all();
        $search = $request->input('search');

        $kehadirans = Kehadiran::when($search, function ($query, $search) {
            return $query->whereHas('pekerja', function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%");
            })->orWhere('waktu_masuk', 'like', "%{$search}%")
              ->orWhere('waktu_keluar', 'like', "%{$search}%");
        })->paginate(15);

        //$kehadirans = Kehadiran::paginate(15); // Fetch 15 records per page
        //return view('kehadirans.index', compact('kehadirans'));
        return view('kehadirans.index', compact('kehadirans', 'search'));
    }

    public function create()
    {
        $pekerjas = Pekerja::all();
        return view('kehadirans.create', compact('pekerjas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pekerja' => 'required|exists:pekerjas,id',
            'pilihan_jam' => 'required|string',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'required|date_format:H:i',
            'catatan' => 'nullable|string',
        ]);

        Kehadiran::create($request->all());

        return redirect()->route('kehadirans.index')->with('success', 'Kehadiran created successfully.');
    }

    public function show(Kehadiran $kehadiran)
    {
        return view('kehadirans.show', compact('kehadiran'));
    }
    public function edit(Kehadiran $kehadiran)
    {
        $pekerjas = Pekerja::all();
        return view('kehadirans.edit', compact('kehadiran', 'pekerjas'));
    }

    public function update(Request $request, Kehadiran $kehadiran)
    {
        $request->validate([
            'id_pekerja' => 'required|exists:pekerjas,id',
            'pilihan_jam' => 'required|string',
            'waktu_masuk' => 'required|date_format:H:i',
            'waktu_keluar' => 'required|date_format:H:i',
            'catatan' => 'nullable|string',
        ]);

        $kehadiran->update($request->all());

        return redirect()->route('kehadirans.index')->with('success', 'Kehadiran updated successfully.');
    }

    public function destroy(Kehadiran $kehadiran)
    {
        $kehadiran->delete();

        return redirect()->route('kehadirans.index')->with('success', 'Kehadiran deleted successfully.');
    }   
}