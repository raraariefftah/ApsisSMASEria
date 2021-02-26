<?php use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('home', function (Blueprint $table) {
                $table->increments('id_home');
                $table->text('kata_sambutan');
                $table->string('nama_kepala_sekolah');
                $table->text('visi');
                $table->text('misi');
                $table->text('tujuan');
                $table->text('fasilitas');
                $table->string('file_gambar');

                $table->string('nama_sekolah');
                $table->string('status_sekolah');
                $table->string('status_kepemilikan');
                $table->string('akreditasi');
                $table->string('npsn');
                $table->text('alamat_sekolah');
                $table->string('kelurahan_desa');
                $table->string('kecamatan');
                $table->string('kota');
                $table->string('provinsi');
                $table->string('kode_pos');
                $table->string('nomor_telepon');
                $table->string('kepala-sekolah');
            }

        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('home');
    }
}
