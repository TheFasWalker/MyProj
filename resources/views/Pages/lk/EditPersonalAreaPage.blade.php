@extends('layouts.app')

@section('content')
    <div class=" container">
        <h1 class="text-5xl pb-[10px]">Личные ланные (редактирование)</h1>
        <div class="grid grid-cols-[250px_1fr] w-full">
            <div class="flex items-start">
                <img class="h-auto" src="{{ $userData['user_photo'] }}" alt="">
            </div>

            <form class="w-full flex flex-col gap-2">
                <fieldset class="border p-4 grid grid-cols-4">
                    <legend class="p-2">Личные данные</legend>
                    <x-general.ui.input
                        title='Имя'
                        placeholder='Имя'
                        name='name'
                        type="text"
                        :value='$userData->name'
                        inputjsclass=''
                        description="Ваше имя" />
                     <x-general.ui.input
                        title='Фамилия'
                        placeholder='Фамилия'
                        name='family'
                        type="text"
                        :value='$userData->family'
                        inputjsclass=''
                        description="Ваша фамилия"
                        />
                    <x-general.ui.input
                        title='Отчество'
                        placeholder='Отчество'
                        name='surname'
                        type="text"
                        :value='$userData->surname'
                        inputjsclass=''
                        description="Ваше отчество"
                        />
                    <x-general.ui.input
                        title='Номер телефона'
                        placeholder='номер телефона'
                        name='usertel'
                        type="tel"
                        :value='$userData->tel'
                        inputjsclass=''
                        description="Назначенный номер" />
                    <x-general.ui.input
                        title='дата рождения'
                        placeholder='дата рождения'
                        name='birthday'
                        type="date"
                        value='$userData->birthday'
                        inputjsclass=''
                        description="Дата рождения"
                        />
                    <x-general.ui.input
                        title='Позывной'
                        placeholder='Позывной'
                        name='nickname'
                        type="text"
                        :value='$userData->nickname'
                        inputjsclass=''
                        description="Ваш позывной"
                        />
                        <x-general.ui.inputTextfield
                        placeholder='Контакты на крайний случай'
                        title="Экстренные контакты"
                        description='Контакты для экстренной связи на самый крайний случай'
                        :value='$userData->extra_contacts'
                         name='extra_contacts'
                        />


                    </fieldset>
                <fieldset class="border p-4 grid grid-cols-4">
                    <legend class="p-2">Общие данные</legend>
                    <x-general.ui.input title='Порядковый номер' placeholder='Порядковый номер' name='number' type="number"
                    :value='$userData->number' inputjsclass='' description="Назначенный номер" />


                    <x-general.ui.inputCheckbox
                    title='Наличие авто'
                    name="car"
                    :value="$userData['auto']"
                    description='Наличие авто для общего понимания мобильности'
                    />

                    <x-inputDriveSelect name='driver_license' title='Водительские права' />
                </fieldset>


                <fieldset class="border p-4 grid grid-cols-2 gap-3">
                    <legend class="p-2">Здоровье</legend>
                    <x-general.ui.inputTextfield
                        title="Аллергии"
                        description='Разного рода четко выраженные аллергии'
                        :value='$userData["allergies"]'
                        placeholder='Аллергии'
                        name='123'

                        />
                        <x-general.ui.inputTextfield
                        title="Противопоказания"
                        description='Разного рода четко выраженные противопоказания'
                        placeholder='Разного рода четко выраженные противопоказания'
                        :value="$userData['contraindications']"
                        name='asdf'
                        />
                </fieldset>
                <x-general.ui.inputTextfield
                title="Дополнительная информация"
                description='Разная инофрмация о вас которая может быть интересна другим'
                :value="$userData['about']"
                placeholder='Дополнительная информация'
                name="asdf"
                />
                <button class="customButton" type="submit">Сохранить</button>
        </div>
        </form>
    </div>
@endsection
