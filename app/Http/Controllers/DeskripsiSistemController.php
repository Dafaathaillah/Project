<?php

namespace App\Http\Controllers;

use App\Models\DeskripsiSistem;
use Illuminate\Http\Request;

class DeskripsiSistemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $desc = DeskripsiSistem::all();
        return view('deskripsiSistem.index', compact('desc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deskripsiSistem.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeskripsiSistem  $deskripsiSistem
     * @return \Illuminate\Http\Response
     */
    public function show(DeskripsiSistem $deskripsiSistem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeskripsiSistem  $deskripsiSistem
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $desc = DeskripsiSistem::find($id);
        return view('deskripsiSistem.edit', compact('desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DeskripsiSistem  $deskripsiSistem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'isi' => 'required'
        ]);

        DeskripsiSistem::find($id)->update($request->all());
        return redirect()->route('deskripsi.index')-> with('success', 'Deskripsi Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeskripsiSistem  $deskripsiSistem
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DeskripsiSistem::find($id)->delete();
        return redirect()->route('deskripsi.index')-> with('success', 'Deskripsi Berhasil Dihapus');
    }
}
