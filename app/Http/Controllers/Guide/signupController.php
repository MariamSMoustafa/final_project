<?php

namespace App\Http\Controllers\Guide;


use App\guide;
use App\Http\Controllers\Controller;
use App\Http\Requests\Registeration;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Hash;

class signupController extends Controller
{
    public function register1()
    {

        return view('auth.Guide.guide1');
    }
    public function storeUser1(Request $request)
    {



        $request->validate([

            'gender' => 'required|string|max:255',
            'Guide_ID' => 'required|string|max:16',
            'city' => 'required|string|max:20',
            'birthday' =>'required|string|max:20',

        ]);

        $file_extension = $request -> guideimage -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/guide';
        $request -> guideimage -> move($path,$file_name);

        Guide::create([

            'gender' => $request->gender,
            'Guide_ID' =>$request->Guide_ID,
            'city'=> $request->city,
            'birthday' =>$request->birthday,
            'price'=>$request->price,
            'image'=>$request->$file_name,
            'rating'=>$request->rating,

        ]);
        return redirect('register2');
    }

    protected function gui(Request $request){

        $guide=   Guide::create([

            'birthday' => $request['birthday'],
            'image' => $request['image'],
            'gender'=> $request['gender'],
            'user_id'=> $request['user_id'],
            'price'=> $request['price'],
            'about'=>$request['about']

        ]);
        return response()->json($guide,201);
    }


    /*protected function GuideRegister(GuideRegister $request){

        $guide=   Guide::create([

            'name' => $request['name'],
            'email' => $request['email'],
            'password' => \Illuminate\Support\Facades\Hash::make($request['password']),
            'phone'=> $request['phone'],
            'birthday'=>$request['birthday'],
            'gender' => $request['gender'],
            'city'=>$request['city'],
            'price'=>$request['price']

        ]);
        return response()->json($guide,201);
    }*/
  /*  public function login()
    {

        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }


    public function logout() {
        Auth::logout();

        return redirect('login');
    }

    public function home()
    {
        return view('home');
    }*/
}
