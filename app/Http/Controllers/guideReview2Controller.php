<?php

namespace App\Http\Controllers;

use App\GuideReview;
use Illuminate\Http\Request;

class guideReview2Controller extends Controller
{
    //
    public function guirev2( Request $request){

        $guide_id=$request->keyword;

        $guirev2=GuideReview::where("guide_id",$guide_id)->join("travellers","travellers.Traveller_ID","guide-reviews.traveller_id")
         ->join("users","users.id","guide-reviews.traveller_id")->Select("users.name","travellers.image","guide-reviews.review","guide-reviews.rating","guide-reviews.id")
            ->get();
        return response()->json($guirev2);
    }
}
