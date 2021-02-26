<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganOrtuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keterangan_ortu', function (Blueprint $table) {
                $table->increments('id_org_tua');
                $table->string('nama_lengkap_ayah');
                $table->string('tempat_lahir_ayah');
                $table->date('tanggal_lahir_ayah');
                $table->enum('agama_ayah', ['Islam', 'Kristen Protestan', 'Khatolik', 'Hindu', 'Budha', 'Khonghucu']);
                $table->string('kewarganegaraan_ayah');
                $table->string('suku_ayah');
                $table->enum('pendidikan_ayah', ['SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 
                'D4', 'S1', 'S2', 'S3']);
                $table->string('pekerjaan_ayah');
                $table->string('penghasilan/bulan_ayah');
                $table->text('alamat_ayah');
                $table->string('nomor_telepon_ayah');
                $table->string('nomor_hp_ayah');
                $table->string('nama_lengkap_ibu');
                $table->string('tempat_lahir_ibu');
                $table->date('tanggal_lahir_ibu');
                $table->enum('agama_ibu', ['Islam', 'Kristen Protestan', 'Khatolik', 'Hindu', 'Budha', 'Khonghucu']);
                $table->string('kewarganegaraan_ibu');
                $table->string('suku_ibu');
                $table->enum('pendidikan_ibu', ['SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 
                'D4', 'S1', 'S2', 'S3']);
                $table->string('pekerjaan_ibu');
                $table->string('penghasilan_bulan_ibu');
                $table->text('alamat_ibu');
                $table->string('nomor_telepon_ibu');
                $table->string('nomor_hp_ibu');               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('keterangan_ortu');
    }
}
