@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-5xl">Редактирование механики </h1>
        <div class="pt-4">

        <form action="{{route ('UpdateMechanics',$data->id )}}" class="flex flex-col gap-3" method="POST" id='edit'>
            @csrf
            @method('PATCH')
            <div class="border p-3">
                <x-general.ui.input
                title="Краткое название механики"
                type='text'
                placeholder='Название механики'
                description='Название которое будет появляться в собитиях'
                name='name'
                :value='$data->name'
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
                :value='$data->description'
                />
                <span class="flex">Название которое будет появляться в собитиях при наведении на элемент или как доп поясняющий пункт"</span>
            </div>
        </form>
        <div class="w-full  grid grid-cols-2 gap-3 pt-5">
            <button type="submit" form='edit' class="customButton">Сохранить</button>
            <button type="submit" form="delete" class="customDangerButton">Удалить</button>
        </div>
        <form action="{{route('DeleteMechanics', $data->id)}}" id='delete' method="POST">
            @csrf
            @method('DELETE')
        </form>

            </div>
        </div>
    </div>
@endsection
