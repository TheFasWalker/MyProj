@extends('layouts.app')


@section('content')
    <div class="container">
<form action="#">


</form>

        <form action="#" class="pt-5 flex flex-col gap-7" >
            <div class="grid grid-cols-[250px_350px_1fr] gap-5">
                <div class="flex flex-col">
                    <x-general.ui.input
                        title='Название организации'
                        type='text'
                        placeholder='Название'
                        description='Название орггруппы которое всем известно'
                        name='name'
                        :value='$name'
                    />
                    <x-general.ui.input
                    title='Ссылка на папблик'
                    type='text'
                    placeholder=''
                    description=''
                    name='orgGroupLink'
                    :value='$orgGroupGroupLink'
                    />
                    <x-general.ui.input
                        title='Главный орг'
                        type='text'
                        placeholder='Имя орга'
                        description='Основной представитель орггруппы'
                        name='orgName'
                        :value='$orgName'
                    />
                    <x-general.ui.input
                        title='Ссылка на главного орга'
                        type='text'
                        placeholder='ссылка на орга'
                        description='ссылка для связи с организатором'
                        name='orgLink'
                        :value='$orgLink'
                    />
                    <x-general.ui.input
                        title='ссылка на превью орггруппы'
                        type='text'
                        placeholder='ссылка на фото орггруппы'
                        description=''
                        name='orgphoto'
                        :value='$eventPhoto'
                    />
                    <x-general.ui.input
                        title='Название организатора'
                        type='text'
                        placeholder=''
                        description=''
                        name=''
                        :value='$name'
                    />

                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">
                    <legend class="p-2">Используемые механики</legend>
                    <x-general.ui.inputCheckbox
                    description='Игравая техника для доставки игроков по полигону'
                    title="Дехника для ротации"
                    name="rotationTechnique"
                    value=''/>
                    <x-general.ui.inputCheckbox
                    description='Боевая армейская техника'
                    title="Техника для усиления"
                    name="warTechnique"
                    value=''/>
                    <x-general.ui.inputCheckbox
                    description='Личная игравая техника'
                    title="Использование игроками своей техники"
                    name="peoplesCars"
                    value=''/>
                    <x-general.ui.inputCheckbox
                    description='Игравая медицина'
                    title="Сценарии подразумевающие медицину"
                    name="medicine"
                    value=''/>
                    <x-general.ui.inputCheckbox
                    description='Игравая медицина'
                    title="Медицина"
                    name="medicine"
                    value=''/>
                    <x-general.ui.inputCheckbox
                    description='Использование растяжек, дистанционных мин и прочей инженерной штуки'
                    title="Инженерная подготовка"
                    name="engeneer"
                    value=''/>
                </fieldset>
                <fieldset class="border p-4">
                    <legend class="p-2">Общее описание</legend>
                    <x-general.ui.inputTextfield
                    description=''
                    name=''
                    title=''
                    placeholder='Общее описание'
                    :value='$description'
                    />
                </fieldset>
            </div>
            <button class="customButton"> сохранить изменения</button>
        </form>
    </div>
@endsection
