<?php

namespace App\Http\Controllers;

use App\language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{




    public function lang( Request $request)
    {
        $keyword = $request->keyword;

        $lang = language::where('guide_id', 'LIKE', "$keyword")->get();
        return response()->json($lang);
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
     * @param  \App\language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(language $language)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, language $language)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(language $language)
    {
        //
    }
}
