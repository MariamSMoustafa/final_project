<?php

namespace App\Http\Controllers;

use App\traveller;
use Illuminate\Http\Request;



class TravellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function storeUser1(Request $request)
    {


        $request->validate([

            'gender' => 'required|string|max:255',
            'Traveller_ID' => 'required|string|max:16',
            'birthday' => 'required|string|max:20',

        ]);

        $file_extension = $request -> travellerimage -> getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'image/guide';
        $request -> travellerimage -> move($path,$file_name);

        traveller::create([

            'gender' => $request->gender,
            'Traveller_ID' =>$request->Guide_ID,
            'birthday' =>$request->birthday,
            'image'=>$request->$file_name,
        ]);

    }
    protected function trav(Request $request){

        $traveller=   traveller::create([

            'birthday' => $request['birthday'],
            'image' => $request['image'],
            'gender'=> $request['gender'],
            'user_id'=> $request['user_id'],

        ]);
        return response()->json($traveller,201);
    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\traveller  $traveller
     * @return \Illuminate\Http\Response
     */
    public function show(traveller $traveller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\traveller  $traveller
     * @return \Illuminate\Http\Response
     */
    public function edit(traveller $traveller)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\traveller  $traveller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, traveller $traveller)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\traveller  $traveller
     * @return \Illuminate\Http\Response
     */
    public function destroy(traveller $traveller)
    {
        //
    }


}
