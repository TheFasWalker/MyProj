<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Pages.EventPage',[
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
        ]);
    }
}
