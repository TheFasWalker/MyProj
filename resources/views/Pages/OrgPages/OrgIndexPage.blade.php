@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-5xl">Организатор : {{$orgData['orgGroupName']}}</h1>
        <div class="grid grid-cols-[500px_1fr] gap-3 pt-4">
            <div class="">
                <span>Организатор: </span> <a href="{{$orgData['orgGroupLink']}}" target="_blank">{{$orgData['orgGroupName']}}</a>
                <img src={{isset($orgData['orgphoto']) ? $orgData['orgphoto'] :  asset('img/noImage.jpg') }} alt="">

            </div>
            <div class="flex flex-col gap-2">
                <span>Используемые механики</span>

                <ul>
                     <?= isset($orgData['warTechnique']) && $orgData['warTechnique'] == true ? '<li>Техника для доставки по полигону</li>' : '' ?>
                    <?= isset($orgData['peoplesCars']) && $orgData['peoplesCars'] == true ? '<li>Использование техники игроков</li>' : '' ?>
                    <?= isset($orgData['medicine']) && $orgData['medicine'] == true ? '<li>Игравая медицина</li>'  : ''?>
                    <?= isset($orgData['engeneer']) && $orgData['engeneer'] == true ? '<li>Использование инженерных навыков</li>' : '' ?>
                </ul>
                <div class="flex flex-col">
                    <span>Описание Орг группы</span>
                    <p>{{$orgData['description']}}</p>
                </div>
                <div class="flex flex-col">
                    <?= isset($orgData['orgLink']) ? '<a href="' . $orgData['orgLink'] . '" target="_blank" >' . $orgData['orgName'] . '</a>': '<span>ссылка на оргов отсутствует</span>'?>

                </div>
            </div>
        </div>
    </div>
@endsection
