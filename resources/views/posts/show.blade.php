
@extends('layouts.app')
@section('content')
<title>Post de Prueba</title>
{{-- Esto es un comentario --}}
<h1>{{ $post->title }}<h1>  
<p>{{ $post->content }}</p>
<a href="{{ route('posts.index') }}">Regresar</a>
@endsection