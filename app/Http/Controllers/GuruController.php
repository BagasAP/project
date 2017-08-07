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

     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(Request $request, Builder $htmlBuilder)
    {
        //
        if($request->ajax()){
            $guru = Guru::with('user');
            return Datatables::of($guru)
            ->addColumn('action', function($book){
                return view('datatable._action',[
                    'model' => $guru,
                    'form_url' => route('guru.destroy', $guru->id),
                    'edit_url' => route('guru.edit', $guru->id),
                    'confirm_message' => 'Yakin mau menghapus '.$guru->user_id .'?'
                    ]);
            })->make(true);
        }

      $html = $htmlBuilder
      ->addColumn(['data'=>'nip','name'=>'nip','title'=>'NIP'])
      ->addColumn(['data'=>'user.name','name'=>'user.name','title'=>'Nama']);

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
