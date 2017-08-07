<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guru_id')->unsigned();
            $table->integer('id_sekolah')->unsigned();
            $table->integer('total');
            $table->integer('id_penilaian')->unsigned();
            $table->foreign('guru_id')->references('id')->on('gurus')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sekolah')->references('id')->on('sekolahs')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penilaian')->references('id')->on('penilaians');
          
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
        Schema::dropIfExists('laporans');
    }
}
