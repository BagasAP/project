<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Guru;
use App\Hasil;
use Session;
// use Illuminate\Foundation\Auth\RegistersUsers;
use App\Role;
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // use RegistersUsers;
    
    public function index()
    {
        //
        $guru= Guru::with('user')->get();
        return view('guru.index', compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $guru = User::all();
        return view('guru.create', compact('guru'));
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
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        $guruRole = Role::where('name', 'guru')->first();
        $user->attachRole($guruRole);

        $this->validate($request,[
            'nip'=>"required|unique:gurus,nip"]);
        
        $guru = new Guru();
        $guru->nip = $request->nip;
        $guru->status = $request->status;
        $guru->pendidikan = $request->pendidikan;
        $guru->jk = $request->jk;
        $guru->alamat = $request->alamat;
        $guru->ttl = $request->ttl;
        $guru->mulai_kerja = $request->mulai_kerja;
        $guru->no_telp = $request->no_telp;
        $guru->masa_mengajar = $request->masa_mengajar;
        $guru->kelas = $request->kelas;
        $guru->mapel = $request->mapel;
        $guru->user_id = $user->id;
        $guru->save();
        
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Menyimpan Data Guru"
            ]);
        return redirect()->route('guru.index');
        
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
        $guru = Guru::findOrFail($id);
        return view('guru.edit')->with(compact('guru','user'));
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

        $guru = Guru::findOrFail($id);
        $guru->nip = $request->nip;
        $guru->status = $request->status;
        $guru->pendidikan = $request->pendidikan;
        $guru->jk = $request->jk;
        $guru->alamat = $request->alamat;
        $guru->ttl = $request->ttl;
        $guru->mulai_kerja = $request->mulai_kerja;
        $guru->no_telp = $request->no_telp;
        $guru->masa_mengajar = $request->masa_mengajar;
        $guru->kelas = $request->kelas;
        // $guru->foto = $request->foto;
        $guru->mapel = $request->mapel;
        $guru->user_id = $request->user_id;
        $guru->save();
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Berhasil Merubah Data Guru"
            ]);
        return redirect()->route('guru.index');
        
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
         if (!Guru::destroy($id)) return redirect()->back(); 
        Session::flash("flash_notification",[
            "level"=>"success",
            "message"=>"Guru berhasil dihapus"
            ]);

        return redirect()->route('guru.index');
    }
}
