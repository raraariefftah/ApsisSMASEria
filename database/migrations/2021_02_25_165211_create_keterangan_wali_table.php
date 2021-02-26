<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganWaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_wali', function (Blueprint $table) {
                $table->increments('id_wali');
                $table->string('nama_wali');
                $table->string('Hubungan');
                $table->text('alamat_wali');
                $table->string('nomor_telepon_rumah');
                $table->string('nomor_hp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keterangan_wali');
    }
}
