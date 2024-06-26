@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class=" mb-4">Название мероприятия : {{ $eventData[0]->name }}</h1>


    <div class="grid gap-10 grid-cols-[400px_400px_1fr]">
        <div>
            <img src="<?= isset($eventData[0]->previewPhoto) ?  asset('storage/' . $eventData[0]->previewPhoto) :  asset('img/noImage.jpg')?>" alt="">
        </div>
        <div class="flex flex-col ">
            <h2 class="mx-auto mb-4">Особенности мероприятия:</h2>
            <ul class="mb-10">
                <?= isset($eventData[0]->organizator_id) ? '<li>Организатор : <a href="' . route('ShowOrganizer', $eventData[0]->organizator_id ). '"> ' . $eventData[0]->orgName->orgGroupName . '</a> </li>' : ''?>
                <?= isset($eventData[0]->timeStart) ? '<li>Старт мероприятия : ' . $eventData[0]->dateStart . ' '. $eventData[0]->timeStart . '</li>' : ''?>
                <?= isset($eventData[0]->timeStart) ? '<li>Конец мероприятия : ' . $eventData[0]->dateStop . ' '. $eventData[0]->timeStop . '</li>' : ''?>
                <?= isset($eventData[0]->location) ? '<li> полигон : <a href="'. route('locations') .'">' . $eventData[0]->location->name . '</a></li>' : '' ?>
            </ul>
            <h2 class="mx-auto mb-4">Механики мероприятия:</h2>
            <ul>

                @if (count($eventData[0]->mechanics))
                    @foreach ($eventData[0]->mechanics as $eventMechanics)
                    <li title="{{$eventMechanics->description}}">{{$eventMechanics->name}}</li>

                    @endforeach
                @else
                <span>Особые механики отсутствуют</span>
                @endif

        </ul>

        </div>
        <div class="w-full">
            <h3>Краткое описание:</h3>
            <div class=" text-output">
                <?=$eventData[0]->descriptionShort?>
            </div>
        </div>
    </div>
    <div class="p-3">
        <h3>Сценарий</h3>
        <div >
        <?= $eventData[0]->script?>
        </div>
    </div>
</div>

@endsection
