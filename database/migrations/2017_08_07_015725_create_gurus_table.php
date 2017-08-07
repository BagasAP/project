<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nip');
            $table->string('status');
            $table->string('jabatan');
            $table->string('pendidikan');
            $table->string('jk');
            $table->text('alamat');
            $table->date('ttl');
            $table->date('mulai_kerja');
            $table->string('mapel');
            $table->string('no_telp');
            $table->integer('masa_mengajar');
            $table->string('kelas');
            $table->string('tahun_ajaran');
            $table->integer('periode');            
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gurus');
    }
}
