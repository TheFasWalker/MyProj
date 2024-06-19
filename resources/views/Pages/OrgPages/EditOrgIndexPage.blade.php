@extends('layouts.app')


@section('content')
    <div class="container">
<form action="#">


</form>

        <form action="{{ route('updateOrganizer',$orgData->id ) }}" method="POST" class="pt-5 flex flex-col gap-7" id="edit" >
            @csrf
            @method('PATCH')
<h1 class="text-5xl pb-[10px]">Редактирование организатора</h1>
            <div class="grid grid-cols-[250px_370px_1fr] gap-5">
                <div class="flex flex-col">
                    <x-general.ui.input
                        title='Название организации'
                        type='text'
                        placeholder='Название'
                        description='Название орггруппы которое всем известно'
                        name='orgGroupName'
                        inputjsclass=''
                        :value='$orgData->orgGroupName'

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
                        :value='$orgData->orgGroupLink'
                        />
                    <x-general.ui.input
                        title='Главный орг'
                        type='text'
                        placeholder='Имя орга'
                        description='Основной представитель орггруппы'
                        name='orgName'
                        :value='$orgData->orgName'

                    />
                    <x-general.ui.input
                        title='Ссылка на главного орга'
                        type='text'
                        placeholder='ссылка на орга'
                        description='ссылка для связи с организатором'
                        name='orgLink'
                        :value='$orgData->orgLink'
                    />
                    <x-general.ui.input
                        title='ссылка на превью орггруппы'
                        type='text'
                        placeholder='ссылка на фото орггруппы'
                        description=''
                        name='orgphoto'
                        :value='$orgData->orgphoto'
                    />
                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">
                    <legend class="p-2">Используемые механики</legend>
                    <x-general.ui.inputCheckbox
                    description='Игравая техника для доставки игроков по полигону'
                    title="Дехника для ротации"
                    name="rotationTechnique"
                    :value='$orgData->rotationTechnique'
                    />

                    <x-general.ui.inputCheckbox
                    description='Боевая армейская техника'
                    title="Техника для усиления"
                    name="warTechnique"
                     :value='$orgData->warTechnique'
                    />
                    <x-general.ui.inputCheckbox
                    description='Личная игравая техника'
                    title="Использование игроками своей техники"
                    name="peoplesCars"
                     :value='$orgData->peoplesCars'
                    />
                    <x-general.ui.inputCheckbox
                    description='Игравая медицина'
                    title="Сценарии подразумевающие медицину"
                    name="medicine"
                    :value='$orgData->medicine'/>

                    <x-general.ui.inputCheckbox
                    description='Использование растяжек, дистанционных мин и прочей инженерной штуки'
                    title="Инженерная подготовка"
                    name="engeneer"
                    :value='$orgData->engeneer'/>
                </fieldset>
                <fieldset class="border p-4">
                    <legend class="p-2">Общее описание</legend>
                    <x-general.ui.inputTextfield
                        description='jgbcfybt'
                        name='description'
                        title=''
                        placeholder='Общее описание'
                        :value='$orgData->description'

                    />
                </fieldset>
            </div>
        </form>
            <div class="grid grid-cols-2 gap-5 pt-5">
            <button class="customButton" type="submit" form="edit"> сохранить</button>
            <button class="customDangerButton" type="submit" form="delete"> Удалить</button>
            <form action="{{ route ('deleteOrganizer', $orgData->id)}}" id='delete' method="POST">
                @csrf
                @method('DELETE')

            </form>


    </div>
@endsection
