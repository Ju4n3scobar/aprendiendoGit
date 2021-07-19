<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\insertUser;
use Illuminate\Http\Request;

class pruebaAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\insertUser  $insertUser
     * @return \Illuminate\Http\Response
     */
    public function show(insertUser $insertUser)
    {
        $usuarios=insertUser::all();
        return $usuarios;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\insertUser  $insertUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, insertUser $insertUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\insertUser  $insertUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(insertUser $insertUser)
    {
        //
    }
}
