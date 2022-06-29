<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class GetCompanyController extends Controller
{
    //
    public function getcom( Request $request){

        $company_id=$request->keyword;

        $getcom=Company::where("company_id",$company_id)->join("users","users.id","companies.user_id")
            ->get();
        return response()->json($getcom);
    }
}
