<?php

namespace App\Http\Controllers;

use App\Models\Heir;
use App\Models\Pekerja;
use Illuminate\Http\Request;

class HeirsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heirs = Heir::all();
        return view('heirs.index', compact('heirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function create()
    // {
    //     return view('heirs.create');
    // }

    public function create(Request $request)
    {
        $id_pekerja = $request->get('id_pekerja');
        return view('heirs.create', compact('id_pekerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'id_pekerja' => 'required',
            'namawaris' => 'required',
            'alamat' => 'required',
            'hubungan' => 'required',
            'notel' => '',
        ]);

        Heir::create($request->all());

        return redirect()->route('heirs.index')
                          ->with('success', 'Heir created successfully.');
        
        // return redirect()->route('pekerjas.index')
        //                  ->with('success', 'Waris berjaya didaftarkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Heir  $heir
     * @return \Illuminate\Http\Response
     */
    public function show(Heir $heir)
    {
        return view('heirs.show', compact('heir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Heir  $heir
     * @return \Illuminate\Http\Response
     */

    // public function edit(Heir $heir)
    // {
    //     return view('heirs.edit', compact('heir'));
    // }

    public function edit($id)
    {
        $heir = Heir::find($id);   
        $pekerjas = Pekerja::all();
        //dd($pekerjas);
        //dd($heir);  
        return view('heirs.edit', compact('heir', 'pekerjas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Heir  $heir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Heir $heir)
    {
        $request->validate([
            'id_pekerja' => 'required',
            'namawaris' => 'required',
            'alamat' => 'required',
            'hubungan' => 'required',
            'notel' => 'required',
        ]);

        $heir->update($request->all());

        return redirect()->route('heirs.index')
                         ->with('success', 'Heir updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Heir  $heir
     * @return \Illuminate\Http\Response
     */
    public function destroy(Heir $heir)
    {
        $heir->delete();

        return redirect()->route('heirs.index')
                         ->with('success', 'Heir deleted successfully.');
    }
}