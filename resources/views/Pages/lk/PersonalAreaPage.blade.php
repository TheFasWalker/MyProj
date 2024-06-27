@extends('layouts.app')

@section('content')
    <div class=" container">
        <div class="flex w-full justify-between">
            <h1 class="text-5xl pb-[10px]">Личные ланные</h1>
            <a class="editlink" href="{{route('EditLk')}}">
                <img src="{{asset('img/icons/edit.png')}}" alt="">
            </a>
        </div>
        <div class="grid grid-cols-2 w-full">
            @if (isset($userData->photo))
                <img src="{{$userData->photo}}" alt="">
            @endif

            <div class="w-full flex flex-col gap-2">
                <span>Имя : {{$userData->name}}</span>
                <span>Фамилия : {{isset($userData->family) ? $userData->family : 'неуказана'}}</span>
                <span>Отчество : {{isset($userData->surname) ? $userData->surname : 'неуказано'}}</span>
                <span>Позывной : {{isset($userData->nick_name) ? $userData->nick_name :  'неуказан'}}</span>
                <span>Номер : {{isset($userData->number) ? 'R-' . $userData->number :  'отсутствует'}}</span>
                <span>Водительские права : {{isset($userData->driver_license) ? $userData->driver-license : 'отсутствуют'}}</span>
                <span>Контактный номер телефона:{{isset($userData->tel) ? $userData->tel : 'не указан'}}</span>
                <span><?= isset($userData->auto) && $userData->auto != null ? '<span>Имеется автомобиль</span>' : 'Автотранспорт отсутствует'?></span>

                <span>Дата рождения : {{isset($userData->burthday) ? 'isset($userData->burthday)' : 'неуказана'}}</span>
                <div class="">
                    <span>Противопоказания:</span>
                    <p>{{isset($userData->contraindications) ? $userData->contraindications : 'Противопоказания не указаны или отсутствуют'}}</p>
                </div>
                <div class="">
                    <span>Аллергии:</span>
                    <p>{{isset($userData->allergies) ? $userData->allergies : 'Аллергии не указаны или отсутствуют'}}</p>
                </div>
                <div class="">
                    <span>Экстренные контакты:</span>
                    <p>{{isset($userData->extraContacts) ? $userData->extraContacts : 'Данные отсутствуют'}}</p>
                </div>
                @if (isset($userData->about))
                <div class="">
                    <span>Обомне:</span>
                    <p>{{ $userData->about}}</p>
                </div>
                @endif
                @if (isset($userData->additional))
                <div class="">
                    <span>Дополнительная информация:</span>
                    <p>{{ $userData->additional}}</p>
                </div>
                @endif


            </div>
        </div>
    </div>
@endsection