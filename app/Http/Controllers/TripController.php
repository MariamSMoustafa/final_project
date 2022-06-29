<?php

namespace App\Http\Controllers;

use App\trip;
use Illuminate\Http\Request;

class TripController extends Controller
{


    public function addTrip()
    {
        return view('auth.Trip.addTrip');
    }

    public function storeTrip(Request $request)
    {
        $file_extension2 = $request ->photos -> getClientOriginalExtension();
        $file_name2 = time().'.'.$file_extension2;
        $path2 = 'image/Trip';
        $request -> photos -> move($path2,$file_name2);

        Trip::create([
            'tripname' => $request->tripname,
            'description' => $request -> description,
            'guideLines' => $request -> guideLines,
            'from' => $request -> from,
            'to' => $request -> to,
            'duration' => $request -> duration,
            'departureTime' => $request -> departureTime,
            'departurePlace' => $request -> departurePlace,
            'price' => $request -> price,
            'nofpeople' => $request -> nofpeople,
            'photos' => $file_name2,

        ]);

        return redirect('home');
    }

    protected function tri(Request $request){

        $trip=   Trip::create([

            'tripname' => $request['tripname'],
            'description' => $request['description'],
            'guideLines'=> $request['guideLines'],
            'nofpeople'=> $request['nofpeople'],
            'from'=> $request['from'],
            'to'=> $request['to'],
            'duration'=> $request['duration'],
            'departureTime'=> $request['departureTime'],
            'departurePlace'=> $request['departurePlace'],
            'price'=> $request['price'],
            'photos'=> $request['photos'],
            'company_id'=>$request['company_id'],
            'city_id'=>$request['city_id']

        ]);
        return response()->json($trip,201);
    }


}
