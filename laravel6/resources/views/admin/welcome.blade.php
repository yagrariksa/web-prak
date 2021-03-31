@extends('admin.template.admin')

@section('title')
    welcome
@endsection

@section('page-title')
    Selamat Datang
@endsection

@section('head')
    <link rel="stylesheet" href="{{ url('assets/css/dahsboard-admin.css') }}">
@endsection

@section('content')
    <div class="row">
        <div class="col-max" onclick="location.href='{{ route('book.index') }}';">
            <img id="ico-game" src="{{ url('assets/image/ico/Vector-1.png') }}" alt="">
            <span class="text-dashboard">Game</span>
        </div>
        <div class="col-max" onclick="location.href='{{ route('book.index') }}';">
            <img id="ico-movie" src="{{ url('assets/image/ico/Vector-2.png') }}" alt="">
            <span class="text-dashboard">Movie</span>
        </div>
    </div>
    <div class="row">
        <div class="col-max" onclick="location.href='{{ route('book.index') }}';">
            <img id="ico-book" src="{{ url('assets/image/ico/Vector-3.png') }}" alt="">
            <span class="text-dashboard">Book</span>
        </div>
        <div class="col-max" onclick="location.href='{{ route('book.index') }}';">
            <img id="ico-music" src="{{ url('assets/image/ico/Vector.png') }}" alt="">
            <span class="text-dashboard">Music</span>
        </div>
    </div>
@endsection
