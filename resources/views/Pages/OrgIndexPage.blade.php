@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="text-5xl">Организатор : {{$name}}</h1>
        <div class="grid grid-cols-[500px_1fr] gap-3 pt-4">
            <div class="">
                <span>Организатор: </span> <a href="{{$orgLink}}" target="_blank">{{$orgName}}</a>
                <img src="{{$eventPhoto}}" alt="">
            </div>
            <div class="flex flex-col gap-2">
                <span>Используемые механики</span>
                <ul>
                    <?= isset($cars) && $cars == true ? "<li>Игровая техника</li>" : ''?>
                    <?= isset($medicine) && $medicine == true ? "<li>медицина</li>" : ''?>
                    <?= isset($sqb) && $sqb == true ? "<li>sqb сценари</li>" : ''?>
                    <?= isset($engeneer) && $engeneer == true ? "<li>Использование инженерной подготовки</li>" : ''?>
                </ul>
                <div class="flex flex-col">
                    <span>Описание Орг группы</span>
                    <p>{{$description}}</p>
                </div>
                <div class="flex flex-col">
                    <a href="orgLink" target='_blank'>Организатор {{$orgName}}</a>
                    <a href="orgGroupGroupLink" target='_blank'>Паблик организаторов</a>
                </div>
            </div>
        </div>
    </div>
@endsection
