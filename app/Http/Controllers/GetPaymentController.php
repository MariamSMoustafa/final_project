<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetPaymentController extends Controller
{
    public function getpay( Request $request){


        $traveller_id=$request->keyword;



        $results = DB::select( DB::raw("select payments.card_user_name from payments join travellers on payments.traveller_id = travellers.Traveller_ID where payments.traveller_id = $traveller_id") );


        return response()->json($results);
    }
}
