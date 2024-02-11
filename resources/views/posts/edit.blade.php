@extends('layouts.app')
@section('content')
<title>Post de Prueba</title>
{{-- Esto es un comentario --}}

{{--{{ route('posts.edit')}}--}}
<h1>Editar Post<h1>  


<form action="{{ route('posts.update',$post) }}" method="POST">
    @csrf @method('PATCH')
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{$post->title}}" required name="title" placeholder="title">
    @error('title') 
    {{$message}}
    @enderror
</div>
 
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" required  name="content" rows="3">{{$post->content}}</textarea>
    @error('content') 
    {{$message}}
    @enderror
  </div>
  <button type="submit" class="btn btn-secondary btn-fill">Enviar</button>
</form>

@endsection