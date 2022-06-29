<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchEngine;
use App\trip;
use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //


    public function search( Request $request){
        $keyword = $request->keyword ;

        $trip = trip::where('tripname' , 'LIKE' , "%$keyword%" )->get() ;
        return response()->json($trip,201) ;

    }



}



