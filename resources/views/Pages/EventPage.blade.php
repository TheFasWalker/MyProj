@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{$name}}</h1>
    <div class="grid gap-10 grid-cols-[400px_400px_1fr]">
        <div class=" flex flex-col gap-2">
            <h2>Используемые механики:</h2>
            <?= isset($cars) && $cars == true ? 'Игровая техника' : "" ?>
            <?= isset($medicine) && $medicine == true ? 'Игровая медицина' : "" ?>
            <?= isset($sqb) && $sqb == true ? 'сикуби' : "" ?>
            <?= isset($engeneer) && $engeneer == true ? 'Использование инженерки' : "" ?>
        </div>
        <div class=" flex flex-col gap-4">
            <h2>Особенности:</h2>
            <span>Длительность : <?= isset($length) ? $length : "не указано" ?></span>
            <span>Ответственный :
                <?= isset($responsiblePerson) ? '<a href=" users/'. $responsiblePersonLink . '"> ' . $responsiblePerson . '</a>' : "не указан" ?>
            </span>
        </div>
        <img class="" src=" {{$photoUrl}}" alt="">
    </div>
    <div class="flex flex-col gap-4 mt-10">
        <h2>Организационная информация</h2>
        <span>
            <?= isset($orgName) ? 'Организатор : <a href="' . $orgLink . '">' . $orgName . '</a>'  : 'Организатор не указан' ?>
        </span>
        <span>
            длительность игры : <?= isset($length) ? $length : 'не указана'?>
        </span>
            <?= isset($description) ?
            '<div class="">
                <h3>' . $description . '</h3>
            </div>'
            :
            'Описание отсутствует'
            ?>
    </div>
</div>

@endsection