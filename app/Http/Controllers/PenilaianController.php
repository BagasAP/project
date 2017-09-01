<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\Penilaian;
use Session;
use App\User;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

         $penilaian = Penilaian::all();
         
         return view('penilaian.index', compact('penilaian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $penilaian = User::all();
        return view('penilaian.create', compact('penilaian'));
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
        
        $penilaian = new Penilaian();
        $penilaian->perangkat_pembelajaran = $request->perangkat_pembelajaran;
        $penilaian->kedisiplinan = $request->kedisiplinan;
        $penilaian->pelayanan_prima = $request->pelayanan_prima;
        $penilaian->ketuntasan_nilai = $request->ketuntasan_nilai;
        $penilaian->semester = $request->semester;
        $penilaian->tgl_penilaian = $request->tgl_penilaian;
        $penilaian->tahun_ajaran = $request->tahun_ajaran;
        $penilaian->userid = $request->userid;
        $penilaian->total = $request->perangkat_pembelajaran + $request->kedisiplinan + $request->pelayanan_prima + $request->ketuntasan_nilai;
        $penilaian->save();
         Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data Penilaian"
            ]);
        return redirect()->route('penilaian.index');
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
        //
        $user = User::all();
        $penilaian = Penilaian::findOrFail($id);
        return view('penilaian.edit')->with(compact('penilaian','user')); 
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
        //
        $penilaian = Penilaian::findOrFail($id);
        $penilaian->perangkat_pembelajaran = $request->perangkat_pembelajaran;
        $penilaian->kedisiplinan = $request->kedisiplinan;
        $penilaian->pelayanan_prima = $request->pelayanan_prima;
        $penilaian->ketuntasan_nilai = $request->ketuntasan_nilai;
        $penilaian->semester = $request->semester;
        $penilaian->tahun_ajaran = $request->tahun_ajaran;
        $penilaian->tgl_penilaian = $request->tgl_penilaian;
        $penilaian->userid = $request->userid;
        $penilaian->save();
         Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil merubah Data Penilaian"
            ]);
        return redirect()->route('penilaian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if (!Penilaian::destroy($id)) return redirect()->back(); 
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Penilaian berhasil dihapus"
            ]);

        return redirect()->route('penilaian.index');
    }
}
