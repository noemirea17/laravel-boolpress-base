@extends('layouts.app')

@section('title', 'posts')

@section('content')

<h1>pagina edit</h1>

<form action="{{route('posts.update', $post->id)}}" method="post">
    @csrf
    @method('PUT')
    <label for="name">EditNome</label>
    <input type="text" name="name" id="name" value="{{$post -> name}}" >
    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" value="{{$post -> email}}">
    <label for="date">Data</label>
    <input type="date" name="date" id="date" value="{{$post -> date}}" >
    <label for="text">Messaggio</label>
    <input type="textarea" name="text" id="text" value="{{$post -> text}}">

    <button type="submit">Invia</button>

</form>


    
@endsection