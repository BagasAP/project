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
            $table->integer('id_gurus')->unsigned();
            $table->integer('id_sekolahs')->unsigned();
            $table->integer('id_penilaians')->unsigned();
            $table->integer('total');
            $table->timestamps();
            $table->foreign('id_gurus')->references('id')->on('gurus')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_sekolahs')->references('id')->on('sekolahs')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('id_penilaians')->references('id')->on('penilaians')
            ->onUpdate('cascade')->onDelete('cascade');
          

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
