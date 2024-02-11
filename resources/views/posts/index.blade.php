@extends('layouts.app')
@section('title','Blog')
@section('content')

@if(session('status'))
{{ session('status') }}
@endif

   <h1>Blog</h1>
<a href="{{ route('posts.create')}}">Create new post</a>

   @foreach($posts as $post)
   <h2><a href="{{ route('posts.show', $post->id)}}">{{ $post-> title }}</a></h2>
   <a href="{{ route('posts.edit', $post)}}">Editar</a>
   <a href="{{ route('posts.delete', $post)}}">Borrar</a>
   @endforeach
@endsection