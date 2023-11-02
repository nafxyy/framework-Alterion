@extends('layouts.global')
@section('title')
Dashboard - Staff
@endsection

@section('content')
<div class="w-full h-full flex">
    @include('components.sidebar')
    <div class="w-full h-screen flex gap-4 flex-col bg-slate-900">
        <div class="h-full mx-4 p-8 bg-white rounded-lg drop-shadow-md">
            <p class="text-7xl font-bold pl-80 pt-72">Coming Soon</p>
            <h2 class="pl-96 pt-16 ">Kali :)</h2>
        </div>
    </div>
</div>
@endsection
