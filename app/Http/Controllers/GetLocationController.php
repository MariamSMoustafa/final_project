<?php

namespace App\Http\Controllers;

use App\location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetLocationController extends Controller
{
    //

    public function getlocat( Request $request){


        $city_id=$request->keyword;



        $results = DB::select( DB::raw("select locations.* ,cities.image as cityimage from locations join cities on locations.city_id = cities.city_id where locations.city_id = $city_id") );


        return response()->json($results);
    }
}
