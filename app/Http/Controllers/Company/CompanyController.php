<?php

namespace App\Http\Controllers\Company;
use App\Company;


//use App\Http\Requests\companyrequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
    //
    public function addCompany(){
        return view('auth.Company.addCompany');

    }
    public function storeCompany(Request $request)
    {
       $request->validate([

       ]);

        $file_extension2 = $request ->logo -> getClientOriginalExtension();
        $file_name2 = time().'.'.$file_extension2;
        $path2 = 'image/Company';
        $request -> logo -> move($path2,$file_name2);

        Company::create([

            'address' => $request -> address,
            'rating' => $request->rating,
            'aboutus' => $request -> aboutus,
            'logo' => $file_name2,

        ]);

        return redirect('home');
    }

    public function comp(Request  $request)
    {

        $comp=   Company::create([


            'logo'=>$request['logo'],
            'aboutus'=>$request['aboutus'],
            'address'=>$request['address'] ,
            'rating'=>$request['rating'] ,
            'user_id'=>$request['user_id']
        ]);
        return response()->json($comp,201);
    }

}
