@extends('admin.template.admin')

@section('title')
    game
@endsection

@section('page-title')
    List game
@endsection

@section('page-subtitle')
    daftar game yang akan dipasarkan
@endsection

@section('head')
    <link rel="stylesheet" href="{{url('assets/css-admin/list.css')}}">
@endsection

@section('content')
<div class="grid-system">
    <div class="card">
        <div class="card-img">
            <img src="{{url('assets/image/hujan.jpg')}}" alt="">
        </div>
        <div class="card-body">
            <span class="card-title">Title</span>
            <span class="card-desc">
                Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Repudiandae,
                esse.</span>
            <span class="card-auth">Author</span>
            <span class="card-price"></span>
            <span class="card-action">
                <a href="{{route('game.edit', 1)}}" class="btn-edit btn-badge">Edit</a>
                <a href="#" class="btn-delete btn-badge modal-btn-trigger"
                data-modal="#modal-delete" data-title="title">Delete</a>
            </span>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        document.querySelector('#game-list').classList.add('active');
    </script>

@endsection
