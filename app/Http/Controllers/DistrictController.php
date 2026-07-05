<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $district = District::all();

        return view('district.index',compact('district'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('district.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $district = new District();

        $district->name = $request->name;
        $district->country = $request->country;
        $district->email = $request->email;

        $district->save();

        return redirect('/district');
    }

    /**
     * Display the specified resource.
     */
    public function show(District $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(District $district)
    {
        return view('district.edit',compact('district'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, District $district)
    {
         $district->name = $request->name;
        $district->country = $request->country;
        $district->email = $request->email;

        $district->save();

        return redirect('/district');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(District $district)
    {
        $district->delete();

        return redirect('/district');
    }
}
