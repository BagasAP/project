<?php

use Illuminate\Database\Seeder;
use App\Guru;
use App\User;
class GurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //sample guru inti
        $user1 = User::create(['name'=>'Bagas','email'=>'alvi@gmail.com','password'=>'bagasalvip']);

        //sample guru
        $guru1 = Guru::create(['nip'=>'1234','status'=>'guru inti','jabatan'=>'tidak ada','pendidikan'=>'sarjana','jk'=>'laki-laki','alamat'=>'cibaduyut','ttl'=>'1999-07-25','mulai_kerja'=>'2016-01-01','mapel'=>'mtk','no_telp'=>'089777777','masa_mengajar'=>'5','kelas'=>'X','tahun_ajaran'=>'2017','periode'=>'1','user_id'=>$user1->id,'foto'=>'']);
    }
}
