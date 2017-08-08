<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //

    protected $fillable = ['id','nip', 'status', 'jabatan', 'pendidikan', 'jk', 'alamat', 'ttl', 'mulai_kerja','mapel','no_telp','masa_mengajar', 'kelas', 'tahun_ajaran', 'periode','user_id','foto'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}

