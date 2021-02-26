<?php use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeteranganSiswaTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('keterangan_siswa', function (Blueprint $table) {
                $table->increments('id_ket_siswa');
                $table->string('nomor_induk_siswa')->unique();
                $table->string('nomor_pendaftaran'); 
                $table->string('nama_lengkap');
                $table->enum('verifikasi', ['Terverfikasi', 'Belum Terverfikasi']);
                $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
                $table->string('nisn');
                $table->string('nik');
                $table->string('tempat_lahir');
                $table->date('tanggal_lahir');
                $table->enum('agama', ['Islam', 'Kristen Protestan', 'Khatolik', 'Hindu', 'Budha', 'Khonghucu']);
                $table->string('kewarganegaraan');
                $table->string('suku');
                $table->string('anak_ke');
                $table->string('dari_brp_saudara');
                $table->enum('status_siswa', ['Kandung', 'Yatim', 'Piatu', 'Yatim Piatu']);
                $table->enum('jenis_beasiswa', ['Siswa Berprestasi', 'Anak Miskin', 'Pendidikan', 'Unggulan']);
                $table->string('penyelenggara/sumber/pemberi_beasiswa');
                $table->date('tanggal_masuk');
                $table->date('tanggal_selesai');
                $table->enum('tahun_capres', ['2010', '2011', '2012', '2013', '2014',
                    '2015', '2016', '2017', '2018', '2019', '2020', '2021']);
                $table->string('lomba');
                $table->string('juara');
                $table->enum('jenis_lomba', ['Sains', 'Seni', 'Olahraga', 'Teknologi']);
                $table->enum('tingkat_lomba', ['Sekolah', 'Kecamatan', 'Provinsi', 'Nasional', 'Internasional']);
                $table->enum('jenis_tinggal', ['Bersama Orang Tua', 'Saudara/Wali', 'Asrama', 'Kost', 'Panti Asuhan']);
                $table->string('jarak_ke_sekolah');
                $table->enum('alat_transportasi_ke_sekolah', ['Jalan Kaki', 'Kendaraan Pribadi', 'Kendaraan Umum', 'Jemputan', 'Becak']);
                $table->enum('golongan_darah', ['A', 'B', 'AB', 'O', '-']);
                $table->string('tinggi');
                $table->string('berat');
                $table->string('lulusan_dari');
                $table->date('tanggal_lulus');
                $table->string('no_sttb');
                $table->string('kesenian');
                $table->string('olahraga');
                $table->string('organisasi/lainnya');
                $table->string('dari_sekolah');
                $table->text('alasan_pindah');
                $table->enum('di_kelas', ['X-1', 'X-2', 'X-3', 'X-4', 'XI IPA 1', 'XI IPA 2',
                    'XI IPA 3', 'XI IPA 4', 'XI IPA 5', 'XI IPA 6', 'XII IPA 1', 'XII IPA 2',
                    'XII IPA 3', 'XII IPA 4', 'XII IPA 5']);
                $table->date('tanggal_diterima');
                $table->text('alamat');
                $table->string('kelurahan_desa');
                $table->string('kecamatan');
                $table->string('kab_kota');
                $table->enum('provinsi', ['Sumatera Utara']);
                $table->string('kode_pos');
                $table->string('nomor_telepon');
                $table->string('nomor_hp');
            }

        );
    }

    /**
     * Reverse the migrations.
     *
     *  @return void
     */

    public function down() {
        Schema::dropIfExists('keterangan_siswa');
    }
}
