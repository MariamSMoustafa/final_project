<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GetAllGuideController extends Controller
{
    //
    public function getallgui( Request $request){

        //$trip_id=$request->keyword;

        $getallgui=Guide::join("users","users.id","guides.user_id")
            ->get();
        return response()->json($getallgui);
    }
}
