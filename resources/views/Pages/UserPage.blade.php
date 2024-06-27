@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-5xl">Страница пользователя {{$nickName}} </h1>
        <div class="grid grid-cols-2 gap-3 pt-4">
            <div class="">
                <h3>Личные данные</h3>
                <ul>
                    <li>Имя:{{$name}} </li>
                    <li>Фамилия :{{$surname}}</li>
                    <li>Отчество:{{$family}}</li>
                    <li>Дата рождения:{{$birthday}}</li>
                    <li>Права:{{$driverLicense}} </li>
                    <?=(isset($auto) && $auto == true) ? '<li>Имеется авто</li>' : ''?>
                </ul>
            </div>
            <div class=" flex gap-3 flex-col">
                <h2>Медицинские данные</h2>
                <div class="">
                    <h4>Противопоказания:</h4>
                    <p>{{$contraindications}}</p>
                </div>
                <div class="">
                    <h4>Аллергии:</h4>
                    <p>{{$allergies}}</p>
                </div>
                <div class="">
                    <h4>Экстренные контакты:</h4>
                    <p>{{$extraContacts}}</p>
                </div>
            </div>

        </div>
        <div class=" mt-5">
            <h3 class="text">Дополнительная информация</h3>
            <div class="">
                {{$about}}
            </div>
        </div>

    </div>
@endsection

