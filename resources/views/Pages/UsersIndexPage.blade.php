<?php
    $userList = [
        [
            'name'=>'Сергей',
            'nickName'=>'KIR',
            'surname'=>'Сергеевич',
            'family'=>'Кирбицкий',
            'number'=>'01',
            'userId'=>'01'
        ],
        [
                'name'=>'Виталий',
                'nickName'=>'Fast',
                'surname'=>'Александрович',
                'family'=>'Криницкий',
                'number'=>'13',
                'userId'=>'13'
        ],
        [
                'name'=>'Виктор',
                'nickName'=>'Borwin',
                'surname'=>'Викторович',
                'family'=>'Борисочкин',
                'number'=>'15',
                'userId'=>'15'
        ],


    ]

?>

@extends('layouts.app')
@section('content')
    <div class="container">
        <h1 class="text-5xl ">Участники</h1>
        <div class="flex gap-2 py-5 flex-col">
            @foreach ($userList as $user)
            <x-UsersIndexPage.UsersPreview
                :data="$user"
            />
            @endforeach


        </div>

    </div>
@endsection