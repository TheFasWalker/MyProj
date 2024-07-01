@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-5xl ">Участники</h1>
        <div class="flex gap-2 py-5 flex-col">
            @foreach ($data as $user)
            <x-UsersIndexPage.UsersPreview
                :data="$user"
            />
            @endforeach


        </div>

    </div>
@endsection