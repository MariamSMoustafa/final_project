<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GetCompTripController extends Controller
{
    //
    public function getcomptri( Request $request){

        $company_id=$request->keyword;
/*
        $getcomptri=Company::where("company_id",$company_id)
            ->join("trips","trips.trip_id","trips.company_id")
            ->Select("trips.trip_id","trips.photos")
            ->get();*/
        $results = DB::select( DB::raw("select trips.trip_id ,trips.photos from trips join companies on trips.company_id = companies.company_id where trips.company_id = $company_id") );
        return response()->json($results);
    }
}
