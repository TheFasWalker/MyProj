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
            @if (isset($eventData->rotationTechnique) or isset($eventData->warTechnique) or isset($eventData->peoplesCars) or isset($eventData->medicine) or isset($eventData->engeneer) or isset($eventData->sqb) or isset($eventData->liveCamp))
                    <?= isset($eventData->rotationTechnique) ? '<li>Техника для ротации</li>' : ''?>
                    <?= isset($eventData->warTechnique) ? '<li>Военная техника</li>' : ''?>
                    <?= isset($eventData->peoplesCars) ? '<li>Использование техники участников</li>' : ''?>
                    <?= isset($eventData->medicine) ? '<li>Медицинские механики</li>' : ''?>
                    <?= isset($eventData->engeneer) ? '<li>Использование инженерки</li>' : ''?>
                    <?= isset($eventData->sqb) ? '<li>SQB сценарий</li>' : ''?>
                    <?= isset($eventData->liveCamp) ? '<li>Жилой штурмуемый лагерь</li>' : ''?>

            @else
                <li>Особые механики отсутствуют</li>
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
