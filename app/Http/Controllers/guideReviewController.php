<?php

namespace App\Http\Controllers;

use App\GuideReview;
use Illuminate\Http\Request;

class guideReviewController extends Controller
{
    //
    protected function guirev(Request $request){

        $guirev=   GuideReview::create([

            'review' => $request['review'],
            'rating' => $request['rating'],
            'traveller_id'=> $request['traveller_id'],
            'guide_id'=> $request['guide_id'],

        ]);

        return response()->json($guirev,201);
    }
}
