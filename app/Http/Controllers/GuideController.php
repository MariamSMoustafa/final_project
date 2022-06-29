<?php

namespace App\Http\Controllers;

use App\Guide;
use Illuminate\Http\Request;

class GuideController extends Controller
{
    //
    public function getgui( Request $request){

        $guide_id=$request->keyword;

        $getgui=Guide::where("guide_id",$guide_id)->join("users","users.id","guides.user_id")
            ->get();
        return response()->json($getgui);
    }
}
