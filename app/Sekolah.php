<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    //
     protected $fillable = ['id',
        'nama_sekolah', 'nss', 'status', 'nama_kepsek','alamat'
    ];

    public function hasil()
    {
    	return $this->hasMany('App\Hasil');
    }


}
