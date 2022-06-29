<?php

namespace App\Http\Controllers;

use App\traveller;
use Illuminate\Http\Request;

class GetTravellerController extends Controller
{
    //
    public function gettrav( Request $request){

        $traveller_id=$request->keyword;

        $gettrav=traveller::where("Traveller_ID",$traveller_id)->join("users","users.id","travellers.user_id")
            ->get();
        return response()->json($gettrav);
    }
}
