@extends('app')

@section('content')

<form method="POST" action="registrar">
        @csrf
        <label for="">name: </label>
        <input name="name" type="text" value="">
        <label for="">email: </label>
        <input name="email" type="text" value="">
        <label for="">pass: </label>
        <input name="password" type="text" value="">
        <label for="">email: </label>
        <input name="password_confirmation" type="text" value="">
        <input type="submit" value="enviar">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>

    <form method="put" action="registrar">
        @csrf
        <label for="">name: </label>
        <input name="name" type="text" value="">
        <label for="">email: </label>
        <input name="email" type="text" value="">
        <label for="">pass: </label>
        <input name="password" type="text" value="">
        <input type="submit" value="enviar">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </form>

    @endsection