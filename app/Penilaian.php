<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    //
    protected $fillable = ['id','perangkat_pembelajaran', 'kedisiplinan', 'pelayanan_prima', 'ketuntasan_nilai','semester','tahun_ajaran','userid'
    ];

    public function users()
    {
    	return $this->belongsTo('App\User', 'userid');
    }

    public function hasil()
    {
    	return $this->hasMany('App\Hasil');
    }


}
