@extends('layouts.app')

@section('content')
    <div class=" container">
        <h1 class="text-5xl pb-[10px]">Личные ланные</h1>
        <div class="grid grid-cols-2 w-full">
            <img src="{{$userPhoto}}" alt="">
            <div class="w-full flex flex-col gap-2">
                <span>Имя : {{$name}}</span>
                <span>Фамилия :{{$family}}</span>
                <span>Отчество :{{$surname}}</span>
                <span>Позывной :{{$nickName}}</span>
                <span>Номер :R-{{$number}}</span>
                <span>Водительские права:{{$driverLicense}}</span>
                <span>Контактный номер телефона:{{$tel}}</span>
                <?= $auto == true ? '<span>имеется автомобиль</span>' : ''?>
                <span>Дата рождения :{{$burthday}}</span>
                <div class="">
                    <span>Противопоказания:</span>
                    <p>{{$contraindications}}</p>
                </div>
                <div class="">
                    <span>Аллергии:</span>
                    <p>{{$allergies}}</p>
                </div>
                <div class="">
                    <span>Экстренные контакты:</span>
                    <p>{{$extraContacts}}</p>
                </div>
                <div class="">
                    <span>Дополнительная информация:</span>
                    <p>{{$about}}</p>
                </div>

                <span></span>
            </div>
        </div>
    </div>
@endsection