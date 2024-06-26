<?php




namespace App\Http\Controllers;

use App\Http\Requests\Events\StoreRequest;
use App\Http\Requests\Events\UpdateRequest;
use App\Models\Event;
use App\Models\Location;
use App\Models\Mechanics;
use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\EventService;

class EventsController extends Controller
{
    private $eventService;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(EventService $eventService)
    {
        $this->middleware('auth');
        $this->eventService = $eventService;
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
        $locations = Location::all();
        $mechanics = Mechanics::all();
        $orgs = Organizer::all();
        return view('Pages.EventsPages.CreateEventPage',compact('orgs', 'mechanics', 'locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        $this->eventService->createEvent($data);
        return redirect()->route('events');

    }

    /**
     * Display the specified resource.
     */
    public function show(Event $id)
    {
        $eventData = Event::find($id);
        // dd($eventData[0]->name);
        return view('Pages.EventsPages.EventPage', compact('eventData'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $id)
    {
        $orgs= Organizer::all();
        $eventItem = Event::find($id);
        $mechanics = Mechanics::all();
        $locations = Location::all();
        // dd($eventItem->mechanics);

        return view('Pages.EventsPages.EditEventPage', compact('eventItem','orgs','mechanics','locations') );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {

        $data = $request->validated();

        $this->eventService->updateEvent($id, $data);
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
