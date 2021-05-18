@extends('layouts.app')

@section('title', 'posts')

@section('content')

<h1>pagina create</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('posts.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="name">Nome</label>
    <input type="text" name="name" id="name">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email">
    <label for="date">Data</label>
    <input type="date" name="date" id="date">
    <label for="text">Messaggio</label>
    <input type="textarea" name="text" id="text">

    <button type="submit">Invia</button>

</form>


    
@endsection