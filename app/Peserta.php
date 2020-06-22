<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $table = "peserta";

    protected $fillable = [
        'id', 'id_user', 'no_identitas', 'jenis_kelamin', 
        'alamat_peserta', 'tanggal_lahir', 'tempat_lahir', 
        'riwayat_kesehatan', 'riwayat_kesehatan_kel', 'gol_darah',
        'obat_pribadi', 'size_chart', 'paid_flag', 'racepack_flag',
        'total_bayar' 
    ];
}
