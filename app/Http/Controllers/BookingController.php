<?php

namespace App\Http\Controllers;

use App\booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function tripBooking(){
        return view('auth.Booking.tripBooking');

    }

    public function storeBookTrip(Request $request)
    {

        $request->validate([


            'phone_num1' => 'required|string|max:11',
            'phone_num2' => 'required|string|max:11',
            'national_id' => 'required|string|max:14',

        ]);

        booking::create([
            'national_id' => $request->national_id,
            'phone_num1' => $request -> phone_num1,
            'phone_num2' => $request -> phone_num2,
            'num_of_seats' => $request -> num_of_seats,
        ]);

        return redirect('home');
    }
    protected function booktrip(Request $request){

        $booktrip=   booking::create([

            'national_id' => $request['national_id'],
            'phone_num1' => $request['phone_num1'],
            'phone_num2'=> $request['phone_num2'],
            'num_of_seats'=> $request['num_of_seats'],
            'traveller_id'=>$request['traveller_id'],
            'trip_id'=>$request['trip_id']

        ]);
        return response()->json($booktrip,201);
    }
}
