<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //

    protected $fillable = ['id','nip', 'status', 'pendidikan', 'jk', 'alamat', 'ttl', 'mulai_kerja','no_telp','masa_mengajar', 'kelas', 'tahun_ajaran','user_id','foto'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function hasil()
    {
    	return $this->hasMany('App\Hasil');
    }

    
}

