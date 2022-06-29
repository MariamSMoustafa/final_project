<?php

namespace App\Http\Controllers;

use App\CompanyReview;
use Illuminate\Http\Request;

class companyReview2Controller extends Controller
{
    //
    public function comprev2( Request $request){

        $company_id=$request->keyword;

        $comprev2=CompanyReview::where("company_id",$company_id)->join("travellers","travellers.Traveller_ID","company-reviews.traveller_id")
            ->join("users","users.id","company-reviews.traveller_id")->Select("users.name","travellers.image","company-reviews.review","company-reviews.rating","company-reviews.id")
            ->get();
        return response()->json($comprev2);
    }
}
