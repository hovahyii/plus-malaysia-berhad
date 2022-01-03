<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FireExtinguisher;
use App\Models\Branch;

class FireExtinguishersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fireExtinguishers = FireExtinguisher::all();

        return view('fire-extinguishers.index', [
            'fireExtinguishers' => $fireExtinguishers,
        
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = Branch::all(); 

        return view('fire-extinguishers.create', compact('branches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $fireExtinguisher = FireExtinguisher::create([
            'location' => $request->input('location'),
            'expiry_date' => $request->input('expiry_date'),
            'serial_numbers' => $request->input('serial_numbers'),
            'type' => $request->input('type'),
            'weight' => $request->input('weight'),
            'brand' => $request->input('brand'),  
        ]);


        return redirect('/fire-extinguishers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fireExtinguisher = FireExtinguisher::find($id);
        $branches = Branch::all(); 

        return view('fire-extinguishers.edit', compact('fireExtinguisher', 'branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $fireExtinguisher = FireExtinguisher::where('id', $id)
            ->update([
            'location' => $request->input('location'),
            'expiry_date' => $request->input('expiry_date'),
            'serial_numbers' => $request->input('serial_numbers'),
            'type' => $request->input('type'),
            'weight' => $request->input('weight'),
            'brand' => $request->input('brand'),  
        ]);


        return redirect('/fire-extinguishers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(FireExtinguisher $fireExtinguisher)
    {
        $fireExtinguisher->delete();
        return redirect('/fire-extinguishers');
    }
}
