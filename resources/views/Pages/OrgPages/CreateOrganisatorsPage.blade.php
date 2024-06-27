@extends('layouts.app')


@section('content')
    <div class="container">
<form action="#">


</form>

        <form action="{{ route('StoreOrganizer') }}" method="POST" class="pt-5 flex flex-col gap-7" enctype="multipart/form-data">
            @csrf

<h1 class="text-5xl pb-[10px]">Создание организатора</h1>
            <div class="grid grid-cols-[350px_1fr] gap-5">
                <div class="flex flex-col">
                    <x-general.ui.input
                        title='Название организации'
                        type='text'
                        placeholder='Название'
                        description='Название орггруппы которое всем известно'
                        name='org_group_name'
                        inputjsclass=''
                    />
                    @error('orgGroupName')
                    <span>обязательное поле</span>
                    @enderror
                    <x-general.ui.input
                        title='Ссылка на папблик'
                        type='text'
                        placeholder=''
                        description=''
                        name='org_group_link'

                        />
                    <x-general.ui.input
                        title='Главный орг'
                        type='text'
                        placeholder='Имя орга'
                        description='Основной представитель орггруппы'
                        name='org_name'

                    />
                    <x-general.ui.input
                        title='Ссылка на главного орга'
                        type='text'
                        placeholder='ссылка на орга'
                        description='ссылка для связи с организатором'
                        name='org_link'

                    />
                    <label >
                        <span>Фото</span>
                        <input name="org_group_photo" class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </label>

                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">

                <fieldset class="border p-4">
                    <legend class="p-2">Общее описание</legend>
                    <x-general.ui.inputTextfield
                        description='Описание организатора'
                        name='description'
                        title=''
                        placeholder='Общее описание'

                    />
                </fieldset>
            </div>
            <button class="customButton" type="submit"> сохранить</button>
        </form>
    </div>
@endsection
