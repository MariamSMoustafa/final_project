<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {

        return view('auth.register');
    }

    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3|confirmed',
            'password_confirmation' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=> $request->phone,

        ]);

        return redirect('home');
    }

    public function Login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            error_log('iam here');
            $user = User::where('email', $request->email)->first(); // get user
            $user = Auth::loginUsingId($user->id);
            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = ['user' => $user, 'token' => $token];
            return $response;
        }
        return response()->json(["message" => "The user was not found or the password was incorrect."], 401);
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

        }

        return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        return response()->json(["message" => "Logout Sucessfully"], 200);
    }
    public function home()
    {
        return view('home');
    }
}
