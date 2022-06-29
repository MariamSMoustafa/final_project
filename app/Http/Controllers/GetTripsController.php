<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class GetTripsController extends Controller
{
    //
    public function gettri( Request $request){

        //$trip_id=$request->keyword;

        $gettri=Trip::join("cities","cities.city_id","trips.city_id")
            ->get();
        return response()->json($gettri);
    }
}
