<?php

namespace App\Http\Controllers;

use App\CompanyReview;
use Illuminate\Http\Request;

class companyReviewController extends Controller
{
    //
    public function companyReview(){
        return view('auth.companyReview.companyReview');

    }
    public function storeCompanyReview(Request $request)
    {
        CompanyReview::create([
            'review' => $request->review,
            'rating' => $request -> rating,
        ]);

        return redirect('home');
    }
    protected function comprev(Request $request){

        $comprev=   CompanyReview::create([

            'review' => $request['review'],
            'rating' => $request['rating'],
            'traveller_id'=> $request['traveller_id'],
            'company_id'=> $request['company_id'],

        ]);
        return response()->json($comprev,201);
    }
}

