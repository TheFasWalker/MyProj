@extends('layouts.app')


@section('content')
    <div class="container">
<form action="#">


</form>

        <form action="{{ route('updateOrganizer',$orgData->id ) }}" method="POST" class="pt-5 flex flex-col gap-7" id="edit" >
            @csrf
            @method('PATCH')
<h1 class="text-5xl pb-[10px]">Редактирование организатора</h1>
            <div class="grid grid-cols-[370px_1fr] gap-5">
                <div class="flex flex-col">
                    <x-general.ui.input
                        title='Название организации'
                        type='text'
                        placeholder='Название'
                        description='Название орггруппы которое всем известно'
                        name='org_group_name'
                        inputjsclass=''
                        :value='$orgData->org_group_name'

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
                        :value='$orgData->org_group_link'
                        />
                    <x-general.ui.input
                        title='Главный орг'
                        type='text'
                        placeholder='Имя орга'
                        description='Основной представитель орггруппы'
                        name='org_name'
                        :value='$orgData->org_name'

                    />
                    <x-general.ui.input
                        title='Ссылка на главного орга'
                        type='text'
                        placeholder='ссылка на орга'
                        description='ссылка для связи с организатором'
                        name='org_link'
                        :value='$orgData->org_link'
                    />
                    <x-general.ui.input
                        title='ссылка на превью орггруппы'
                        type='text'
                        placeholder='ссылка на фото орггруппы'
                        description=''
                        name='org_group_photo'
                        :value='$orgData->org_group_photo'
                    />
                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">
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
