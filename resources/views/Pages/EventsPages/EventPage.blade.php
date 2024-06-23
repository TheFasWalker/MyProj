@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class=" mb-4">Название мероприятия : {{ $eventData->name }}</h1>


    <div class="grid gap-10 grid-cols-[400px_400px_1fr]">
        <div>
            <img src="<?= isset($eventData->previewPhoto) ?  asset('storage/' . $eventData->previewPhoto) :  asset('img/noImage.jpg')?>" alt="">
        </div>
        <div class="flex flex-col ">
            <h2 class="mx-auto mb-4">Особенности мероприятия:</h2>
            <ul class="mb-10">
                <?= isset($eventData->organizator_id) ? '<li>Организатор : <a href="' . route('ShowOrganizer', $eventData->organizator_id ). '"> ' . $eventData->orgName->orgGroupName . '</a> </li>' : ''?>
                <?= isset($eventData->timeStart) ? '<li>Старт мероприятия : ' . $eventData->dateStart . ' '. $eventData->timeStart . '</li>' : ''?>
                <?= isset($eventData->timeStart) ? '<li>Конец мероприятия : ' . $eventData->dateStop . ' '. $eventData->timeStop . '</li>' : ''?>
                <?= isset($eventData->location) ? '<li> полигон : <a href="'. route('locations') .'">' . $eventData->location->name . '</a></li>' : '' ?>
            </ul>
            <h2 class="mx-auto mb-4">Механики мероприятия:</h2>
            <ul>

                @if (count($eventData->mechanics))
                    @foreach ($eventData->mechanics as $eventMechanics)
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
                <?=$eventData->descriptionShort?>
            </div>
        </div>
    </div>
    <div class="p-3">
        <h3>Сценарий</h3>
        <div >
        <?= $eventData->script?>
        </div>
    </div>
</div>

@endsection
