<?php
    $userList = [
        [
        'name'=>'Сергей',
        'nickName'=>'KIR',
        'surname'=>'Сергеевич',
        'family'=>'Кирбицкий',
        'number'=>'01',
        'userId'=>'01'
        ]

    ]

?>

@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-5xl">Участники</h1>
        <div class="grid grid-cols-3 gap-3 pt-4">
            {{-- @foreach ($userList as $user)

            @endforeach --}}

        </div>

    </div>
@endsection