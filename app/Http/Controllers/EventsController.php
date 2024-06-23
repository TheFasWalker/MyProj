<?php




namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\Mechanics;
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
        $mechanics = Mechanics::all();
        $eventList = Event::all();
        return view('Pages.EventsPages.EventsIndexPage',compact('eventList', 'mechanics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mechanics = Mechanics::all();
        $orgs = Organizer::all();
        return view('Pages.EventsPages.CreateEventPage',compact('orgs', 'mechanics'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
    try {
        $data = $request->validated();
        $mechanicsIds = $data['mechanics'];
        unset($data['mechanics']);
        if(isset($data['previewPhoto'])){
            $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
            $photoLink =preg_replace("/public\//", "", $photoLink);
            $data['previewPhoto'] =$photoLink;

        }
        $event = Event::firstOrCreate($data);

        $event->mechanics()->attach($mechanicsIds);

    }catch (\Exception $exception){
        abort(404);
    }
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
        $mechanics = Mechanics::all();
        // dd($eventItem->mechanics);
        return view('Pages.EventsPages.EditEventPage', compact('eventItem','orgs','mechanics') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        try {
            $data = $request->validated();
            $mechanicsIds = $data['mechanics'];
            unset($data['mechanics']);
            if(isset($data['previewPhoto'])){
                $photoLink = Storage::disk('local')->put('public/images/events', $data['previewPhoto']);
                $photoLink =preg_replace("/public\//", "", $photoLink);
                $data['previewPhoto'] =$photoLink;

            }
            $event = Event::firstOrCreate($data);
            Event::find($id)->update($data);
            $event->mechanics()->sync($mechanicsIds);
            return redirect()->route('events');
        }catch (\Exception $exception){
            abort(404);
        }

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
