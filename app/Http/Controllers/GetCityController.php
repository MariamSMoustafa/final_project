<?php

namespace App\Http\Controllers;

use App\city;
use Illuminate\Http\Request;

class GetCityController extends Controller
{
    //
    public function getcit( Request $request){

        //$trip_id=$request->keyword;

        $getcit=city::
        //join("cities","cities.city_id","trips.city_id")
            get();
        return response()->json($getcit);
    }
}
