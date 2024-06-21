<?php




namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventsController extends Controller
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

        $eventList = Event::all();
        return view('Pages.EventsPages.EventsIndexPage',compact('eventList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orgs = Organizer::all();
        return view('Pages.EventsPages.CreateEventPage',compact('orgs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        $data = $request->validated();
        if(isset($data['previewPhoto'])){
            $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
            $photoLink =preg_replace("/public\//", "", $photoLink);
            $data['previewPhoto'] =$photoLink;

        }

        Event::firstOrCreate($data);
        return redirect()->route('events');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $eventData = Event::find($id);
        return view('Pages.EventsPages.EventPage', compact('eventData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orgs= Organizer::all();
        $eventItem = Event::find($id);
        return view('Pages.EventsPages.EditEventPage', compact('eventItem','orgs') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        $data = $request->validated();
        if(isset($data['previewPhoto'])){
            $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
            $photoLink =preg_replace("/public\//", "", $photoLink);
            $data['previewPhoto'] =$photoLink;
        }
        Event::find($id)->update($data);
        return redirect()->route('ShowEvent', $id );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $id)
    {
        $id->delete();
        return redirect()->route('events');

    }
}
