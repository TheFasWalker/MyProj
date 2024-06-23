@extends('layouts.app')


@section('content')

    <div class="container">

        <h1 class="text-5xl pb-10">Полигоны</h1>
        @if (count($data))
            <div class="">
                <div class="grid grid-cols-[300px_300px_1fr_300px] bg-slate-300 sticky top-0">
                    <span class="flex items-center justify-center border-r-2 border-r-slate-900">Название полигона</span>
                    <span class="flex items-center justify-center border-r-2 border-r-slate-900">Координаты</span>
                    <span class="flex items-center justify-center border-r-2 border-r-slate-900">Адрес</span>
                    <span class="flex items-center justify-center">Действия</span>
                </div>
                @foreach ($data as $dataElem )
                    <div class="odd:bg-white even:bg-slate-50 ">
                        <div class="grid grid-cols-[300px_300px_1fr_300px] ">
                            <span class="flex items-center justify-center border-r-2 border-r-slate-900 py-3">{{$dataElem->name}}</span>
                            <span class="flex items-center justify-center border-r-2 border-r-slate-900 py-3">{{$dataElem->coordX}} , {{$dataElem->coordY}}</span>
                            <span class="flex items-center justify-center border-r-2 border-r-slate-900 py-3">{{$dataElem->adress}}</span>
                            <span class="flex items-center justify-around py-3">
                                <button class="js-location-show-more p-3 bg-cyan-400 rounded-2xl hover:bg-cyan-800 hover:text-white">Показать описание</button>
                                <a class="editlink" href="{{route('EditLocation', $dataElem->id)}}">
                                    <img src="{{asset('img/icons/edit.png')}}" alt="">
                                </a>
                                <button class="trashButton" form='delete'>
                                    <img src="{{asset('img/icons/trash.png')}}" alt="">
                                </button>
                                <form action="{{route('DeleteLocation', $dataElem->id)}}" id='delete' method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </span>
                        </div>
                        <div class="p-5 hidden js-show-mire-info">
                            <p>{{$dataElem->description}}</p>
                        </div>

                    </div>
                @endforeach

            </div>
        @else
        <h2>Список пуст</h2>
        @endif


    </div>
@endsection
