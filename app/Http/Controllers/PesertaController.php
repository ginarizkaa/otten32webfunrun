<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peserta;
use Illuminate\Support\Facades\Auth;

class PesertaController extends Controller
{
    public function postPeserta(Request $request)
    {
        $id = str_pad(Auth::user()->id, 4, '0', STR_PAD_LEFT);
        Peserta::create([
            'id' => $id,
            'id_user' => Auth::user()->id,
            'no_identitas' => $request->no_identitas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat_peserta' => $request->alamat_peserta,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gol_darah' => $request->gol_darah,
            'riwayat_kesehatan' => $request->riwayat_kesehatan,
            'riwayat_kesehatan_kel' => $request->riwayat_kesehatan_kel,
            'obat_pribadi' => $request->obat_pribadi,
            'size_chart' => $request->size_chart,
            'paid_flag' => 'N',
            'racepack_flag' => 'N',
            'total_bayar' => 300000,
        ]);

    }
}
