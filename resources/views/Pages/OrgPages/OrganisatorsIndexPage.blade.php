@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-5xl pb-[10px]">Организаторы</h1>
        @if (count($orgList))
        <div class="grid grid-cols-[250px_250px_250px_1fr_250px]  px-2 py-2 bg-gray-400 items-center">
            <span class="flex items-center ">OrgName</span>
            <span class="flex items-center ">OrgLink</span>
            <span class="flex items-center ">MainOrgLink</span>
            <span class="flex items-center ">OrgDescription</span>
            <span class="flex items-center ">showMore</span>
        </div>
        <div class="flex gap-2 py-5 flex-col max-h-[65vh] overflow-auto">
            @foreach ($orgList as $orgItem )
                <x-OrganisatorsIndex.orgPreview
                :orgItem="$orgItem"
                />

            @endforeach
        </div>
        @else
        <span class="text-5xl pb-[10px] w-full flex justify-center">список организаторов пуст</span>

        @endif


    </div>
@endsection
