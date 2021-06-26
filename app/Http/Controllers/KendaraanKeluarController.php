<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KendaraanKeluar;
use App\Models\KendaraanMasuk;

class KendaraanKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $KendaraanKeluar = KendaraanKeluar::with('KendaraanMasuk')->get();
        $paginate = KendaraanMasuk::orderBy('id', 'asc')->paginate(3);
        return view('KendaraanKeluar.index', ['KendaraanKeluar' => $KendaraanKeluar, 'paginate' => $paginate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $KendaraanMasuk = KendaraanMasuk::all();
        return view('KendaraanKeluar.create', ['KendaraanMasuk' => $KendaraanMasuk]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $KendaraanKeluar = new KendaraanKeluar;
        $KendaraanKeluar->penerima = $request->get('penerima');
        $KendaraanKeluar->kontak_penerima = $request->get('kontak_penerima');
        $KendaraanKeluar->tanggal_keluar = $request->get('tanggal_keluar');

        $KendaraanMasuk = new KendaraanMasuk;
        $KendaraanMasuk->id = $request->get('kendaraan_masuks');

        $KendaraanKeluar->KendaraanMasuk()->associate($KendaraanMasuk);
        $KendaraanKeluar->save();

        return redirect()->route('KendaraanKeluar.index')
            ->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $KendaraanKeluar = KendaraanKeluar::with('KendaraanMasuk')->where('id', $id)->first();
        $KendaraanMasuk = KendaraanMasuk::all();
        return view('KendaraanKeluar.edit', compact('KendaraanKeluar', 'KendaraanMasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $KendaraanKeluar = KendaraanKeluar::with('KendaraanMasuk')->where('id', $id)->first();
        $KendaraanKeluar->penerima = $request->get('penerima');
        $KendaraanKeluar->kontak_penerima = $request->get('kontak_penerima');
        $KendaraanKeluar->tanggal_keluar = $request->get('tanggal_keluar');

        $KendaraanMasuk = new KendaraanMasuk;
        $KendaraanMasuk->id = $request->get('kendaraan_masuks');

        $KendaraanKeluar->KendaraanMasuk()->associate($KendaraanMasuk);
        $KendaraanKeluar->save();

        return redirect()->route('KendaraanKeluar.index')
            ->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KendaraanKeluar::find($id)->delete();
        return redirect()->route('KendaraanKeluar.index')
            ->with('success', 'Data Berhasil Dihapus');
    }
}
