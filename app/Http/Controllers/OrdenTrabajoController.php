<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth;
use App\ot_orden_trabajo;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Carbon\Carbon;

class OrdenTrabajoController extends Controller
{
      public function __construct()
      {
          $this->middleware('auth');
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          return view('OT.inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getCrearOt()
    {
        //
        return view('OT.crearOt');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ot_orden_trabajo  $ot_orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function show(ot_orden_trabajo $ot_orden_trabajo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ot_orden_trabajo  $ot_orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(ot_orden_trabajo $ot_orden_trabajo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ot_orden_trabajo  $ot_orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ot_orden_trabajo $ot_orden_trabajo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ot_orden_trabajo  $ot_orden_trabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ot_orden_trabajo $ot_orden_trabajo)
    {
        //
    }
}
