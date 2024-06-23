@extends('layouts.app')


@section('content')

    <div class="container">
        <h1 class="text-5xl pb-10">Редактирвоание полигона</h1>
         <form action="{{route('UpdateLocation', $data->id)}}" class="flex flex-col gap-5" method="POST" id='edit'>
            @csrf
            @method('PATCH')
            <x-general.ui.input
                title="Название полигона"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='name'
                type="text"
                :value='$data->name'
            />
            <x-general.ui.input
                title="Название адрес"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='adress'
                type="text"
                :value='$data->adress'

            />
            <x-general.ui.inputTextfield
                title="Описание полигоня"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='description'
                type="text"
                :value='$data->description'
            />
            <div class=" ">
                <span>Координаты</span>
                <div class="grid grid-cols-2 gap-2">
                    <x-general.ui.input
                    title="Первая координата"
                    description="Название полигодна которое понятно всем"
                    placeholder="Название полигона"
                    name='coordX'
                    type="number"
                    step="any"
                     :value='$data->coordX'
                    />
                    <x-general.ui.input
                    title="Вторая координата"
                    description="Название полигодна которое понятно всем"
                    placeholder="Название полигона"
                    name='coordY'
                    type="number"
                    step="any"
                     :value='$data->coordY'
                    />
                </div>
            </div>



        </form>
<div class="grid grid-cols-2 gap-3 pt-8">
    <button class="customButton" type="submit" form='edit'>Обновить </button>
    <button class="customDangerButton" type="submit">Обновить </button>
</div>


    </div>
@endsection
