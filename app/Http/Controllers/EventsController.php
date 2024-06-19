<?php




namespace App\Http\Controllers;

use Illuminate\Http\Request;






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
        $eventList = [
            [
                'name' => 'eventName',
                'orgName' => 'OrgName',
                'orgLink' => 'OrgLink',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => true,
                'medicine' => true,
                'sqb' => true,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => '',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => 'https://sun9-23.userapi.com/impg/5V41RLCJyZEmLrV-ASdR0Bp13GbCT8P2KnvDLQ/5BM3GMgWtMA.jpg?size=960x1280&quality=95&sign=343e4d59ef1b7b5e175e6e46bd718170&type=album',
                'eventLink' => '',
                'showMore'=>'01'
            ],
            [
                'name' => 'eventName2',
                'orgName' => 'OrgName2',
                'orgLink' => 'OrgLink2',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => false,
                'medicine' => true,
                'sqb' => true,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => 'UserName',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => '',
                'eventLink' => '#',
                'showMore'=>'#'
            ],
            [
                'name' => 'eventName2',
                'orgName' => 'OrgName2',
                'orgLink' => 'OrgLink2',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => false,
                'medicine' => false,
                'sqb' => true,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => 'UserName',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
                'eventLink' => '#',
                'showMore'=>'#'
            ],
            [
                'name' => 'eventName2',
                'orgName' => 'OrgName2',
                'orgLink' => 'OrgLink2',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => false,
                'medicine' => false,
                'sqb' => false,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => 'UserName',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
                'eventLink' => '#',
                'showMore'=>'#'
            ],
            [
                'name' => 'eventName2',
                'orgName' => 'OrgName2',
                'orgLink' => 'OrgLink2',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => false,
                'medicine' => false,
                'sqb' => false,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => 'UserName',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
                'eventLink' => '#',
                'showMore'=>'#'
            ],
            [
                'name' => 'eventName2',
                'orgName' => 'OrgName2',
                'orgLink' => 'OrgLink2',
                'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi architecto nam rerum sequi doloremque quaerat tenetur ipsa, eveniet quasi a!',
                'cars' => false,
                'medicine' => false,
                'sqb' => false,
                'engeneer'=>true,
                'length' => '8 часов',
                'responsiblePerson' => 'UserName',
                'responsiblePersonLink' => 'https://vk.com/feed',
                'photoUrl' => 'https://sun9-28.userapi.com/impg/qMgqn6VDh63uZg4pRuTYQ98T5seZvzZ65WfdLg/vvqpSt-eAKY.jpg?size=1280x960&quality=95&sign=7e19abdedc076c4a7860abfdaefeb837&type=album',
                'eventLink' => '#',
                'showMore'=>'#'
            ],
        ];
        return view('Pages.EventsPages.EventsIndexPage',compact('eventList'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
