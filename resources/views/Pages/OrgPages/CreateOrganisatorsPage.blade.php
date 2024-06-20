@extends('layouts.app')


@section('content')
    <div class="container">
<form action="#">


</form>

        <form action="{{ route('StoreOrganizer') }}" method="POST" class="pt-5 flex flex-col gap-7" enctype="multipart/form-data">
            @csrf

<h1 class="text-5xl pb-[10px]">Создание организатора</h1>
            <div class="grid grid-cols-[250px_350px_1fr] gap-5">
                <div class="flex flex-col">
                    <x-general.ui.input
                        title='Название организации'
                        type='text'
                        placeholder='Название'
                        description='Название орггруппы которое всем известно'
                        name='orgGroupName'
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
                        name='orgGroupLink'

                        />
                    <x-general.ui.input
                        title='Главный орг'
                        type='text'
                        placeholder='Имя орга'
                        description='Основной представитель орггруппы'
                        name='orgName'

                    />
                    <x-general.ui.input
                        title='Ссылка на главного орга'
                        type='text'
                        placeholder='ссылка на орга'
                        description='ссылка для связи с организатором'
                        name='orgLink'

                    />
                    <label >
                        <span>Фото</span>
                        <input name="orgphoto" class=" block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file_input" type="file">
                    </label>

                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">
                    <legend class="p-2">Используемые механики</legend>
                    <x-general.ui.inputCheckbox
                    description='Игравая техника для доставки игроков по полигону'
                    title="Дехника для ротации"
                    name="rotationTechnique"

                    />
                    <x-general.ui.inputCheckbox
                    description='Боевая армейская техника'
                    title="Техника для усиления"
                    name="warTechnique"
                    />
                    <x-general.ui.inputCheckbox
                    description='Личная игравая техника'
                    title="Использование игроками своей техники"
                    name="peoplesCars"
                    />
                    <x-general.ui.inputCheckbox
                    description='Игравая медицина'
                    title="Сценарии подразумевающие медицину"
                    name="medicine"
                    />

                    <x-general.ui.inputCheckbox
                    description='Использование растяжек, дистанционных мин и прочей инженерной штуки'
                    title="Инженерная подготовка"
                    name="engeneer"
                    />
                </fieldset>
                <fieldset class="border p-4">
                    <legend class="p-2">Общее описание</legend>
                    <x-general.ui.inputTextfield
                        description='jgbcfybt'
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
