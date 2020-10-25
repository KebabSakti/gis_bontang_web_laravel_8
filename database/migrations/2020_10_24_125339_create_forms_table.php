<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('form_id');
            $table->text('kelurahan');
            $table->text('kecamatan');
            $table->text('kabupaten');
            $table->text('provinsi');
            $table->text('foto')->nullable();
            $table->text('nomor_urut')->nullable();
            $table->text('nama_lengkap')->nullable();
            $table->text('usia')->nullable();
            $table->text('pendidikan')->nullable();
            $table->text('jk')->nullable();
            $table->text('alamat')->nullable();
            $table->text('nik')->nullable();
            $table->text('pekerjaan')->nullable();
            $table->text('penghasilan')->nullable();
            $table->text('kepemilikan_tanah')->nullable();
            $table->text('kepemilikan_rumah')->nullable();
            $table->text('aset_rumah')->nullable();
            $table->text('aset_tanah')->nullable();
            $table->text('bantuan_perumahan')->nullable();
            $table->text('lokasi_rumah')->nullable();
            $table->text('pondasi')->nullable();
            $table->text('kolom_balok')->nullable();
            $table->text('konstruksi_atap')->nullable();
            $table->text('jendela')->nullable();
            $table->text('ventilasi')->nullable();
            $table->text('kamar_mandi')->nullable();
            $table->text('jarak_air')->nullable();
            $table->text('sumber_air')->nullable();
            $table->text('sumber_listrik')->nullable();
            $table->text('luas_rumah')->nullable();
            $table->text('jumlah_penghuni')->nullable();
            $table->text('material_atap')->nullable();
            $table->text('kondisi_atap')->nullable();
            $table->text('material_dinding')->nullable();
            $table->text('kondisi_dinding')->nullable();
            $table->text('material_lantai')->nullable();
            $table->text('kondisi_lantai')->nullable();
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
        Schema::dropIfExists('forms');
    }
}
