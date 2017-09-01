<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;
use Session;
class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sekolah = Sekolah::all();
        return view('sekolah.index', compact('sekolah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sekolah.create');
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
        $sekolah = new Sekolah();
        $sekolah->ns = $request->ns;
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->status = $request->status;
        $sekolah->nama_kepsek = $request->nama_kepsek;
        $sekolah->alamat = $request->alamat;
        $sekolah->telp = $request->telp;
        $sekolah->save();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data Sekolah"
            ]);
        return redirect()->route('sekolah.index');
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
         $sekolah = Sekolah::findOrFail($id);
        return view('sekolah.edit')->with(compact('sekolah'));
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
        $sekolah = Sekolah::findOrFail($id);
        $sekolah->ns = $request->ns;
        $sekolah->nama_sekolah = $request->nama_sekolah;
        $sekolah->status = $request->status;
        $sekolah->nama_kepsek = $request->nama_kepsek;
        $sekolah->alamat = $request->alamat;
        $sekolah->telp = $request->telp;
        $sekolah->save();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil menyimpan Data Sekolah"
            ]);
        return redirect()->route('sekolah.index');
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
        if (!Sekolah::destroy($id)) return redirect()->back(); 
        Session::flash("flash_notification",[
            "level"=>"danger",
            "message"=>"Sekolah berhasil dihapus"
            ]);

        return redirect()->route('sekolah.index');
    }
}
