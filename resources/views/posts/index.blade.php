@extends('layouts.app')

@section('title', 'posts')

@section('content')

<h1>sono la lista post</h1>

@dump($posts)

@foreach ($posts as $post)

<h1>{{$post['name']}}</h1>


<button><a href="{{route('posts.show', ['post' => $post -> id])}}">Visualizza</a></button>
    
@endforeach
    
@endsection