@extends('layouts.app')
<?php
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
?>





@section('content')
    <div class="container">
        <h1 class="text-5xl">События</h1>
        <div class="grid grid-cols-3 gap-3 pt-4">
            @foreach ($eventList as $event)
                <x-HomePage.event-preview
                :data="$event"
                 />
            @endforeach

        </div>

    </div>
@endsection
