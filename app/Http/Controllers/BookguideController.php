<?php

namespace App\Http\Controllers;

use App\bookguide;
use Illuminate\Http\Request;

class BookguideController extends Controller
{
    public function guideBooking(){
        return view('auth.BookGuide.guideBooking');

    }

    public function storeBookGuide(Request $request)
    {

        $request->validate([


            'phone_num1' => 'required|string|max:11',
            'phone_num2' => 'required|string|max:11',
            'national_id' => 'required|string|max:14',

        ]);

        bookguide::create([
            'national_id' => $request->national_id,
            'phone_num1' => $request -> phone_num1,
            'phone_num2' => $request -> phone_num2,
            'from' => $request -> from,
            'to' => $request -> to,
            'num_of_days' => $request -> num_of_days,
            'message' => $request -> message,
        ]);

        return redirect('home');
    }

    protected function bookgui(Request $request){

        $bookgui=   bookguide::create([

            'national_id' => $request['national_id'],
            'phone_num1' => $request['phone_num1'],
            'phone_num2'=> $request['phone_num2'],
            'from'=> $request['from'],
            'to'=> $request['to'],
            'num_of_days'=> $request['num_of_days'],
            'message'=> $request['message'],
            'guide_id'=> $request['guide_id'],
            'travellers_id'=> $request['travellers_id'],

        ]);
        return response()->json($bookgui,201);
    }
}
