<?php

namespace App\Http\Controllers;

use App\Models\KendaraanMasuk;
use Illuminate\Http\Request;
use PDF;
class KendaraanMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kendaraanMasuks = KendaraanMasuk::paginate(5);
        return view('kendaraanMasuk.index', compact('kendaraanMasuks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kendaraanMasuk.create');
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
            'no_rangka' => 'required',
            'no_mesin' => 'required',
            'type' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'tahun_pembuatan' => 'required',
            'tanggal_masuk' => 'required'
        ]);
        $id = KendaraanMasuk::create($request->all())->id;
        $kdrs = KendaraanMasuk::find($id);
        $kdrs->gambar = $this->uploadFile($request,'gambar');
        $kdrs->update();
        return redirect()->route('kendaraanmasuk.index')-> with('success', 'Data Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KendaraanMasuk  $kendaraanMasuk
     * @return \Illuminate\Http\Response
     */
    public function show(KendaraanMasuk $kendaraanMasuk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KendaraanMasuk  $kendaraanMasuk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kendaraanMasuk = KendaraanMasuk::find($id);
        return view('kendaraanMasuk.edit', compact('kendaraanMasuk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KendaraanMasuk  $kendaraanMasuk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_rangka' => 'required',
            'no_mesin' => 'required',
            'type' => 'required',
            'jenis' => 'required',
            'warna' => 'required',
            'tahun_pembuatan' => 'required',
            'tanggal_masuk' => 'required'
        ]);

        KendaraanMasuk::find($id)->update($request->all());
        if($request->file('gambar')!=null)
        {
            $gambar = $this->uploadFile($request,'gambar');
        }else
        {
             $gambar = $request->gambar_old;
        }
        $kdrs = KendaraanMasuk::find($id);
        $kdrs->gambar = $gambar;
        $kdrs->update();
        return redirect()->route('kendaraanmasuk.index')-> with('success', 'Data Berhasil DiUpdate');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KendaraanMasuk  $kendaraanMasuk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KendaraanMasuk::find($id)->delete();
        return redirect()->route('kendaraanmasuk.index')-> with('success', 'Data Berhasil Dihapus');
    }

     public function uploadFile(Request $request,$oke)
    {
            $result ='';
            $file = $request->file($oke);
            $name = $file->getClientOriginalName();
            // $tmp_name = $file['tmp_name'];

            $extension = explode('.',$name);
            $extension = strtolower(end($extension));

            $key = rand().'-'.$oke;
            $tmp_file_name = "{$key}.{$extension}";
            $tmp_file_path = "images/kendaraan/";
            $file->move($tmp_file_path,$tmp_file_name);
            // if(move_uploaded_file($tmp_name, $tmp_file_path)){
            $result = url('images/kendaraan').'/'.$tmp_file_name;
            // }
        return $result;
    }

    public function exportPdf()
    {
           $data = KendaraanMasuk::all();
           $pdf = PDF::loadview('kendaraanMasuk.pdf',compact('data'));
           $pdf->setPaper('legal','landscape');
           return $pdf->download('DATA-KENDAARAAN-MASUK.pdf');
    }
}
