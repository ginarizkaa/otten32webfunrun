<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta', function (Blueprint $table) {
            $table->string('id', 10)->unique();
            $table->foreignId('id_user');
            $table->string('no_identitas', 50);
            $table->string('jenis_kelamin', 1);
            $table->string('alamat_peserta', 255);
            $table->string('tempat_lahir', 50);
            $table->date('tanggal_lahir');
            $table->string('gol_darah', 2);
            $table->string('riwayat_kesehatan', 255);
            $table->string('riwayat_kesehatan_kel', 255);
            $table->string('obat_pribadi', 100);
            $table->string('size_chart', 5);
            $table->string('paid_flag', 1);
            $table->string('racepack_flag', 1);
            $table->integer('total_bayar');
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
        Schema::dropIfExists('peserta');
    }
}
