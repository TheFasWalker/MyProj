<?php

namespace App\Http\Controllers;

use App\Http\Requests\Locations\StoreRequest;
use App\Http\Requests\Locations\UpdateRequest;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data= Location::all();
        return view('Pages.LocationPages.IndexLocationsPage', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.LocationPages.CreateLocationPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
            $data= $request->validated();
            Location::firstOrCreate($data);
            return redirect()->route('locations');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Location::find($id);
        return view('Pages.LocationPages.EditLocationPage', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $data = $request->validated();
        Location::find($id)->update($data);
        return redirect()-> route('locations');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $id)
    {
        $id->delete();
        return redirect()-> route('locations');
    }
}
