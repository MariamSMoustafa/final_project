<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetBookTripController extends Controller
{
    //

    public function getbooktri( Request $request){

        $traveller=$request->keyword;


       $getbooktri =booking::

            join("travellers","travellers.traveller_id","bookings.traveller_id")
           ->join("users","users.id","travellers.user_id")
            ->join("trips","trips.trip_id","bookings.trip_id")
            ->where("travellers.traveller_id",$traveller)
           ->Select("trips.tripname","trips.description","trips.photos","trips.from","trips.to","trips.trip_id")
            ->get();
        return response()->json($getbooktri);
    }
    
    
    
   
}
//select * from `bookings` inner join `travellers` on `travellers`.`Traveller_ID` = `bookings`.`traveller_id` inner join `trips` on `trips`.`trip_id` = `bookings`.`trips_id` where `Traveller_ID` = 1