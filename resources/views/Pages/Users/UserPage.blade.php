@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-5xl ">Пользователь : {{$user->nick_name}}</h1>
        <div class="flex gap-2 py-5 flex-col">

    <ul>
        <li><span>Имя : {{$user->name}}</span></li>
        <li><span>Отчество : {{isset($user->surname) ? $user->surname : 'Не указано'}}</span></li>
        <li><span>Фамилия : {{isset($user->family) ? $user->family : 'Неуказана'}}</span></li>
        <li><span>Номер телефона : {{isset($user->tel) ? $user->tel : 'Не указан'}}</span></li>
        <li><span>ссылка VK : {{isset($user->link_vk) ? $user->link_vk : 'Неуказана'}}</span></li>
        <li><span>ссылка TG : {{isset($user->link_tg) ? $user->link_tg : 'Неуказана'}}</span></li>
        <li><span>Дата рождения : {{isset($user->birthday) ? isset($user->birthday) : 'Неуказана'}}</span></li>
        <li><span>Права : {{isset($user->driver_license) ? $user->driver_license : 'Данные отсутствуют'}}</span></li>
        <li><span>наличие авто : {{isset($user->auto) ? : 'Отсутствует'}}</span></li>
    </ul>


        </div>

    </div>
@endsection