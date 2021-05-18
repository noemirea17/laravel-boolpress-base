@extends('layouts.app')

@section('title', 'posts')

@section('content')

<h1>sono il dettaglio del post</h1>

<h1>{{$post['name']}}</h1>
<p>{{$post['email']." ".$post['date']}}</p>
<p>{{$post['text']}}</p>

    
@endsection