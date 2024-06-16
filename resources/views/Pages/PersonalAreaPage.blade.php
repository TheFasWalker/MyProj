@extends('layouts.app')

@section('content')
    <div class=" container">
        <div class="grid grid-cols-2 w-full">
            <img src="{{$userPhoto}}" alt="">
            <div class="w-full flex flex-col">
                <span>Имя : {{$name}}</span>
                <span>Фамилия :{{$family}}</span>
                <span>Отчество :{{$surname}}</span>
                <span>Позывной :{{$nickName}}</span>
                <span>Номер :{{$number}}</span>
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