@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-5xl">Добавление механики </h1>
        <div class="pt-4">

        <form action="{{route ('StoreMechanics')}}" class="flex flex-col gap-3" method="POST">
            @csrf
            <div class="border p-3">
                <x-general.ui.input
                title="Краткое название механики"
                type='text'
                placeholder='Название механики'
                description='Название которое будет появляться в собитиях'
                name='name'
                />
                <span>Короткое название механики . что то типа "Сценарий с медициной"</span>

            </div>
            <div class="border p-3">
                <x-general.ui.input
                title="Описание механики"
                type='text'
                placeholder='Описание механики'
                description='Название которое будет появляться в собитиях при наведении на элемент или как доп поясняющий пункт'
                name='description'
                />
                <span>Название которое будет появляться в собитиях при наведении на элемент или как доп поясняющий пункт"</span>
            </div>
            <button type="submit" class="customButton">Сохранить</button>

        </form>
            </div>
        </div>
    </div>
@endsection
