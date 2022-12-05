<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class WeatherLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $location = Location::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $location
        ];
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
        $request->validate([
            'location' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);
 
        $location = Blog::create($request->all());
        return [
            "status" => 1,
            "data" => $location
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return [
            "status" => 1,
            "data" =>$location
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $request->validate([
            'location' => 'required',
            'lat' => 'required',
            'lng' => 'required',
        ]);
 
        $location->update($request->all());
 
        return [
            "status" => 1,
            "data" => $blog,
            "msg" => "Blog updated successfully"
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $blog->location();
        return [
            "status" => 1,
            "data" => $location,
            "msg" => "Weather Location deleted successfully"
        ];
    }
}
