<?php

namespace App\Http\Controllers;

use App\Peserta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $exist = Peserta::where('id_user', Auth::user()->id)->count();
        $dataPeserta = Peserta::where('id_user', Auth::user()->id)->get();

        // return json_encode($dataPeserta);
        return view('home', ['exist' => $exist, 'dataPeserta' => $dataPeserta]);
    }
}
