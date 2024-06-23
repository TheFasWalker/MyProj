@extends('layouts.app')


@section('content')

    <div class="container">

        <h1 class="text-5xl pb-10">Добавление полигона</h1>
        <form action="{{route('StoreLocation')}}" class="flex flex-col gap-5" method="POST">
            @csrf
            <x-general.ui.input
                title="Название полигона"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='name'
                type="text"
            />
            <x-general.ui.input
                title="Название адрес"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='adress'
                type="name"
            />
            <x-general.ui.inputTextfield
                title="Описание полигоня"
                description="Название полигодна которое понятно всем"
                placeholder="Название полигона"
                name='description'
                type="text"
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
                    />
                    <x-general.ui.input
                    title="Вторая координата"
                    description="Название полигодна которое понятно всем"
                    placeholder="Название полигона"
                    name='coordY'
                    type="number"
                    step="any"
                    />
                </div>
            </div>


            <button class="customButton" type="submit"> Создать</button>
        </form>


    </div>
@endsection
