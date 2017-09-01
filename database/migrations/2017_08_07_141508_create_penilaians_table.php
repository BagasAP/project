<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenilaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penilaians', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('perangkat_pembelajaran');
            $table->integer('kedisiplinan');
            $table->integer('pelayanan_prima');
            $table->integer('ketuntasan_nilai');
            $table->integer('semester');
            $table->string('tahun_ajaran');
            $table->date('tgl_penilaian');
            $table->integer('total');
            $table->integer('userid')->unsigned();
            $table->foreign('userid')->references('id')->on('users')
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
        Schema::dropIfExists('penilaians');
    }
}
