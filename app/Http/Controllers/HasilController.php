<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hasil;
use App\Sekolah;
use App\Penilaian;
use App\Guru;
use App\User;
use DB;
use Auth;
class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $hasil = DB::table('users')
            ->join('gurus', 'users.id','=','gurus.user_id')
            ->join('sekolahs', 'sekolahs.id','=','sekolahs.id')
            ->join('penilaians', 'users.id','=', 'penilaians.userid')
            ->get();
        // $hasil= Hasil::with('user','sekolah','penilaian','guru')->get();
        // // $hasil= Hasil::where('id', Auth::user());
        return view('laporan.index', compact('hasil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }
}
