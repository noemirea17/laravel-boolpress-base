@extends('layouts.app')

@section('title', 'posts')

@section('content')

<h1>sono la lista post</h1>



<button><a href="{{route('posts.create')}}">Scrivi qualcosa</a></button>

@foreach ($posts as $post)

<h1>{{$post['name']}}</h1>


<button><a href="{{route('posts.show', ['post' => $post -> id])}}">Visualizza</a></button>
<button><a href="{{route('posts.edit', ['post' => $post -> id])}}">Modifica</a></button>
<form action="{{route('posts.destroy', ['post' => $post -> id])}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">Elimina</button>
</form>

    
@endforeach
    
@endsection