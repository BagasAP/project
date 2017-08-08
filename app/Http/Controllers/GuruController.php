<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guru;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if($request->ajax()){
            $guru = Guru::with('user');
            return Datatables::of($guru)->make(true);
        }

      $html = $htmlBuilder
      ->addColumn(['data'=>'id','name'=>'id','title'=>'No'])
      ->addColumn(['data'=>'nip','name'=>'nip','title'=>'NIP'])
      ->addColumn(['data'=>'user.name','name'=>'user.name','title'=>'Nama'])
      ->addColumn(['data'=>'status','name'=>'status','title'=>'Status'])
      ->addColumn(['data'=>'jabatan','name'=>'jabatan','title'=>'Jabatan'])
      ->addColumn(['data'=>'pendidikan','name'=>'pendidikan','title'=>'Pendidikan'])
      ->addColumn(['data'=>'jk','name'=>'jk','title'=>'Jenis Kelamin'])
      ->addColumn(['data'=>'alamat','name'=>'alamat','title'=>'Alamat'])
      ->addColumn(['data'=>'ttl','name'=>'ttl','title'=>'Tanggal Lahir'])
      ->addColumn(['data'=>'mulai_kerja','name'=>'mulai_kerja','title'=>'Mulai Kerja'])
      ->addColumn(['data'=>'mapel','name'=>'mapel','title'=>'MAPEL'])
;

      return view('guru.index')->with(compact('html'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('guru.create');
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
