<?php

namespace App\Http\Controllers;
use App\region;
use App\provincia;
use App\ciudad;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //
    public function getRegion()
    {
      return response()
        ->json(region::all(), 200);
    }

    public function getProvincia($region)
    {
      return response()
        ->json(provincia::where('REG_COD', '=', (int) $region)->get(), 200);
    }

    public function getCiudad($provincia)
    {
      return response()
        ->json(ciudad::where('PROV_COD', '=', (int) $provincia)->get(), 200);
    }
}
