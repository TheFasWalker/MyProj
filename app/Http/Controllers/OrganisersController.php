<?php

namespace App\Http\Controllers;

use App\Http\Requests\Organizer\StoreRequest;
use App\Http\Requests\Organizer\UpdateRequest;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class OrganisersController extends Controller
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
        $orgList = Organizer::all();
        return view('Pages.OrgPages.OrganisatorsIndexPage',compact('orgList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Pages.OrgPages.CreateOrganisatorsPage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dd($request);
        $data = $request->validated();
        if(isset($data['orgphoto'])){
            $photoLink = Storage::disk('local')->put('public/images/orgs', $data['orgphoto']);
            $photoLink =preg_replace("/public\//", "", $photoLink);
            $data['orgphoto'] =$photoLink;
        }
        Organizer::create($data);
        return redirect()->route('organizers');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orgData = Organizer::find($id);
        return view('Pages.OrgPages.OrgIndexPage',compact('orgData'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $orgData = Organizer::find($id);
        return view('Pages.OrgPages.EditOrgIndexPage',compact('orgData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {

        $data = $request->validated();
        Organizer::find($id)->update($data);
        return redirect()-> route('ShowOrganizer', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Organizer $id)
    {
        $id->delete();

        return redirect()->route('organizers');
    }
}
