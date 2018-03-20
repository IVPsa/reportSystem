<?php

namespace App\Http\Controllers;
// MODELOS
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idUsuario = Auth::id();
        $tipoDeUsuario=user::where('id',$idUsuario)->value('USER_TPU_COD');

        return view('dashboard', compact('tipoDeUsuario'));
    }
}
