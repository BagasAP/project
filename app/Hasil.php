<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{

    //
     public function users()
    {
    	return $this->belongsTo('App\User' , 'id_users');
    }

    public function gurus()
    {
    	return $this->belongsTo('App\Guru', 'id_gurus');
    }

    public function penilaians()
    {
    	return $this->belongsTo('App\Penilaian', 'id_penilaians');
    }

    public function sekolahs()
    {
    	return $this->belongsTo('App\Sekolah', 'id_sekolahs');
    }
}
