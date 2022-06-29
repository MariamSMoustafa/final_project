<?php

namespace App\Http\Controllers;

use App\bookguide;
use Illuminate\Http\Request;

class GetBookGuideController extends Controller
{

    public function getbookgui( Request $request){

        $traveller=$request->keyword;


        $getbookgui =bookguide::

        join("travellers","travellers.traveller_id","bookguides.travellers_id")
            ->join("users","users.id","travellers.user_id")
            ->join("guides","guides.Guide_ID","bookguides.guide_id")
            ->where("travellers.traveller_id",$traveller)
            ->Select("guides.Guide_ID","guides.birthday","guides.price","guides.gender","guides.image","guides.about")
            ->get();
        return response()->json($getbookgui);
    }
}
