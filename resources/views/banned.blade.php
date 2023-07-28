@extends('template.main')


@section('content')

<div class="container d-flex justify-content-center align-content-center align-items-center" style="width: 100%; height:900px">
    <div class="konten">
        <a href="/login" style="color: black"> <h1>YOU'RE ACCOUNT HAS BEEN BANNED BY ADMIN !!!!</h1></a>
    </div>
</div>

<style>
    .konten h1:hover{
        color: red;
        cursor: pointer;
    }
</style>

@endsection