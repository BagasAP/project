<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHasilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_users')->unsigned();
            $table->integer('id_gurus')->unsigned();
            $table->integer('id_sekolahs')->unsigned();
            $table->integer('id_penilaians')->unsigned();
            $table->timestamps();
            $table->foreign('id_users')->references('id')->on('users')
            ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('hasils');
    }
}
