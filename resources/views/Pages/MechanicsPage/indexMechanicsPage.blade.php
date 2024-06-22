@extends('layouts.app')


@section('content')

    <div class="container">

        <h1 class="text-5xl pb-10">Механики - особенности</h1>
        @if (count($data))
            <div class="">
                <div class="grid grid-cols-[300px_1fr_300px] bg-slate-300 sticky top-0">
                    <span class="flex items-center justify-center border-r-2 border-r-slate-900">Механика</span>
                    <span class="flex items-center justify-center border-r-2 border-r-slate-900">Описание</span>
                    <span class="flex items-center justify-center">Действия</span>
                </div>
                @foreach ($data as $dataElem )
                    <div class="grid grid-cols-[300px_1fr_300px] odd:bg-white even:bg-slate-50 ">
                        <span class="flex items-center justify-center border-r-2 border-r-slate-900 py-3">{{$dataElem->name}}</span>
                        <span class="flex items-center justify-center border-r-2 border-r-slate-900 py-3">{{$dataElem->description}}</span>
                        <span class="flex items-center justify-around py-3">
                            <a class="editlink" href="{{route('EditMechanics', $dataElem->id)}}">
                                <img src="{{asset('img/icons/edit.png')}}" alt="">
                            </a>
                            <button class="trashButton" form='delete'>
                                <img src="{{asset('img/icons/trash.png')}}" alt="">
                            </button>
                            <form action="{{route('DeleteMechanics', $dataElem->id)}}" id='delete' method="POST">
                                @csrf
                                @method('DELETE')
                            </form>
                        </span>
                    </div>
                @endforeach

            </div>
        @else
        <h2>Список пуст</h2>
        @endif


    </div>
@endsection
