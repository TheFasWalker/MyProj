@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('UpdateEvent', $eventItem->id) }}" method="POST" class="pt-5 flex flex-col gap-7" id='edit' enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <h1 class="text-5xl pb-[10px]">Создание события</h1>
            <div class="grid grid-cols-[350px_350px_1fr] gap-5">
                <div class="flex flex-col gap-3">
                    <x-general.ui.input
                        title='Название мероприятия'
                        type='text'
                        placeholder='Название мероприятия'
                        description='Название будет видно всем'
                        name='name'
                        inputjsclass=''
                        :value='$eventItem->name'

                    />
                    @error('orgGroupName')
                        <span>обязательное поле</span>
                    @enderror
                    <x-general.ui.input
                        title='Ссылка на мероприятие'
                        type='text'
                        placeholder='Ссылка на мероприятие'
                        description='Ссылка на мероприятие на стороннем ресурсе'
                        name='eventLink'
                        :value='$eventItem->eventLink'
                    />
                    <div class="grid grid-cols-2 gap-8">
                        <div class="flex flex-col">
                            <span class="text-gray-900 dark:text-white">Начало</span>
                            <label  class="block mb-2  text-gray-900 dark:text-white">
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input
                                    type="time"
                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"

                                    value="{{$eventItem->timeStart}}"
                                    name='timeStart'
                                    />
                                </div>
                            </label>
                            <input
                            value="{{$eventItem->dateStart}}" type="date" name="dateStart" id="" class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        </div>
                        <div class="flex flex-col">
                            <span>Окончание</span>
                            <label  class="block mb-2  text-gray-900 dark:text-white">
                                <div class="relative">
                                    <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                        <svg class="w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </div>
                                    <input
                                    type="time"
                                    class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    value="{{$eventItem->timeStop}}"
                                    name='timeStop'
                                    />
                                </div>
                            </label>

                            <input value="{{$eventItem->dateStop}}" type="date" name="dateStop"  class="bg-gray-50 border leading-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" >
                        </div>


                    </div>
                    <label class="flex flex-col gap-3" >
                        <span>Организатор</span>
                    <select class="form-select" aria-label="Default select example" name="organizator_id">
                        <option selected >Не выбран</option>
                        @foreach ($orgs as $org )
                            <option
                            value="{{ $org->id }}"
                            {{$eventItem->organizator_id == $org->id ? 'selected' : '' }}
                            >
                            {{ $org->orgGroupName }}
                        </option>
                        @endforeach
                    </select>
                    </label>


                </div>

                <fieldset class="border p-4  flex flex-col gap-2 ">
                    <x-general.ui.inputCheckbox
                    description='Жилой лагерь - штурмуемый'
                    title="Штурмуемый Лагерь"
                    name="liveCamp"
                    :value='$eventItem->liveCamp'
                    />
                    <x-general.ui.inputCheckbox
                    description='Игровая техника для доставки игроков по полигону'
                    title="Дехника для ротации"
                    name="rotationTechnique"
                    :value='$eventItem->rotationTechnique'
                    />
                    <x-general.ui.inputCheckbox
                    description='Боевая армейская техника'
                    title="Техника для усиления"
                    name="warTechnique"
                    :value='$eventItem->warTechnique'
                    />
                    <x-general.ui.inputCheckbox
                    description='Личная игровая техника'
                    title="Использование игроками своей техники"
                    name="peoplesCars"
                    :value='$eventItem->peoplesCars'
                    />
                    <x-general.ui.inputCheckbox
                    description='Игравая медицина'
                    title="Сценарии подразумевающие медицину"
                    name="medicine"
                    :value='$eventItem->medicine'
                    />
                    <x-general.ui.inputCheckbox
                    description='Использование растяжек, дистанционных мин и прочей инженерной штуки'
                    title="Инженерная подготовка"
                    name="engeneer"
                    :value='$eventItem->engeneer'
                    />
                    <x-general.ui.inputCheckbox
                    description='Ограничения по тюнингу'
                    title="SQB"
                    name="sqb"
                    :value='$eventItem->sqb'
                    />
                </fieldset>
                <fieldset class="border p-4  flex flex-col gap-2 ">
                    <x-general.ui.inputFile
                    title="Заменить указанное фото"
                    name="previewPhoto"
                    :value='$eventItem->previewPhoto' />

                </fieldset>
            </div>
                <x-general.ui.inputTextfield
                    description='Краткое описание - превью'
                    name='descriptionShort'
                    title='Общее описание'
                    placeholder='Краткое описание'
                    id='shortDescription'
                    :value='$eventItem->descriptionShort'
                />
                <x-general.ui.inputTextfield
                    description='Сценарий'
                    name='script'
                    title='Сценарий'
                    placeholder='Сценарий мероприятия'
                    id='script'
                     :value='$eventItem->script'
                />
        </form>
        <div class="grid grid-cols-2 gap-3">
            <button class="customButton" type="submit" form="edit">Обновить</button>
            <button class="customDangerButton" type="submit" form="delete"> Удалить</button>
            <form action="{{ route ('DeleteEvent', $eventItem->id)}}" id='delete' method="POST">
                @csrf
                @method('DELETE')

            </form>
        </div>
    </div>
<script>
    $(document).ready(function() {
        $('#shortDescription').summernote({
            toolbar: [
            // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            height:250
        });
        $('#script').summernote({
            toolbar: [
            // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            height:250
        });
        $(function(){
            bsCustomFileInpput.init()
        })
    });
</script>
@endsection
