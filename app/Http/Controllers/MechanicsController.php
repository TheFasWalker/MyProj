<?php

namespace App\Http\Controllers;

use App\Http\Requests\Mechanics\StoreRequest;
use App\Http\Requests\Mechanics\UpdateRequest;
use App\Models\Mechanics;
use Illuminate\Http\Request;

class MechanicsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data= Mechanics::all();
        // dd($data);
        return view('Pages.MechanicsPage.indexMechanicsPage',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.MechanicsPage.CreateMechanicsPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request);
        $data= $request->validated();
        Mechanics::firstOrCreate($data);
        return redirect()->route('mechanics');
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
        $data = Mechanics::find($id);
        return view('Pages.MechanicsPage.EditMechanicsPage', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $data= $request->validated();
        Mechanics::find($id)->update($data);
        return redirect()->route('mechanics');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mechanics $id)
    {
        $id->delete();
        return redirect()->route('mechanics');
    }
}
