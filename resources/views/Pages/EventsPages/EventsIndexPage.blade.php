@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-5xl">События</h1>
        @if (isset($eventList) && count($eventList))
            <div class="grid grid-cols-3 gap-3 pt-4">
                @foreach ($eventList as $event)
                    <x-HomePage.event-preview
                    :data="$event"
                    />
                @endforeach

            </div>
        @else
        <span class="flex w-full items-center text-5xl justify-center">
            Список событий пуст
        </span>
        @endif


    </div>
@endsection
