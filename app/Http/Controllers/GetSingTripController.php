<?php

namespace App\Http\Controllers;

use App\Trip;
use Illuminate\Http\Request;

class GetSingTripController extends Controller
{
    //
    public function getsingtri( Request $request){

        $trip_id=$request->keyword;

        $getsingtri=Trip::where("trip_id",$trip_id)->join("cities","cities.city_id","trips.city_id")
            ->get();
        return response()->json($getsingtri);
    }
}
