<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class GSearchController extends Controller
{
    //
    public function search2( Request $request){
        $keyword = $request->keyword ;

        $user = User::where('type' , 'LIKE' , "%$keyword%" )->get() ;

        return response()->json($user,201) ;


    }

}
