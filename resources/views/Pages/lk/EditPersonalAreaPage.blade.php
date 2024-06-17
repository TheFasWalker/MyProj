@extends('layouts.app')

@section('content')
    <div class=" container">
        <h1 class="text-5xl pb-[10px]">Личные ланные (редактирование)</h1>
        <div class="grid grid-cols-[250px_1fr] w-full">
            <img src="{{ $userPhoto }}" alt="">
            <form class="w-full flex flex-col gap-2">
                <fieldset class="border p-4 grid grid-cols-4">
                    <legend class="p-2">Личные данные</legend>
                    <x-general.ui.input title='Имя' placeholder='Имя' name='name' type="text"
                        value={{$name}} inputjsclass='' description="Ваше имя" />
                    <x-general.ui.input title='Фамилия' placeholder='Фамилия' name='family' type="text"
                        value={{$family}} inputjsclass='' description="Ваша фамилия" />
                    <x-general.ui.input title='Отчество' placeholder='Отчество' name='surname' type="text"
                        value={{$surname}} inputjsclass='' description="Ваше отчество" />
                    <x-general.ui.input title='Номер телефона' placeholder='номер телефона' name='usertel' type="tel"
                        value={{$tel}} inputjsclass='' description="Назначенный номер" />
                    <x-general.ui.input title='дата рождения' placeholder='дата рождения' name='burthday' type="date"
                        value='' inputjsclass='' description="Дата рождения" />
                    <x-general.ui.input title='Позывной' placeholder='Позывной' name='nickname' type="text"
                        value={{$nickName}} inputjsclass='' description="Ваш позывной"
                        />
                        <x-general.ui.inputTextfield
                        title="Экстренные контакты"
                        description='Контакты для экстренной связи на самый крайний случай'
                        value={{$extraContacts}}/>


                    </fieldset>
                <fieldset class="border p-4 grid grid-cols-4">
                    <legend class="p-2">Общие данные</legend>

                    <x-general.ui.input title='Порядковый номер' placeholder='Порядковый номер' name='usernumber' type="number"
                    value={{$number}} inputjsclass='' description="Назначенный номер" />


                    <x-general.ui.inputCheckbox title="Наличие авто" name="auto" :value='$auto'/>

                    <x-inputDriveSelect name='driverLicense' title='Водительские права' />
                </fieldset>

                <fieldset class="border p-4 grid grid-cols-2 gap-3">
                    <legend class="p-2">Здоровье</legend>
                    <x-general.ui.inputTextfield
                        title="Аллергии"
                        description='Разного рода четко выраженные аллергии'
                        :value=$allergies/>
                        <x-general.ui.inputTextfield
                        title="Противопоказания"
                        description='Разного рода четко выраженные противопоказания'
                        :value="$contraindications"/>
                </fieldset>
                <x-general.ui.inputTextfield
                title="Дополнительная информация"
                description='Разная инофрмация о вас которая может быть интересна другим'
                :value='$about'/>
                <button class="customButton">Сохранить</button>
        </div>
        </form>
    </div>
@endsection
