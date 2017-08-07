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
            $table->integer('guruid')->unsigned();
            $table->foreign('guruid')->references('id')->on('gurus')
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
