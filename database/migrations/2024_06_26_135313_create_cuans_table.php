<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuans', function (Blueprint $table) {
            $table->id();
            $table->string('pengirim');
            $table->foreign('pengirim')->references('username')->on('users')->onDelete('cascade');
            $table->string('kabupaten_kota');
            $table->text('alamat');
            $table->string('foto_bukti');
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
        Schema::dropIfExists('cuans');
    }
}
