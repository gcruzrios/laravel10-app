@extends('layouts.app')
@section('content')
<title>Post de Prueba</title>
{{-- Esto es un comentario --}}
<h1>Crear Post<h1>  

@dump($errors->all())

<form action="{{ route('posts.store')}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" value="{{old('title')}}" required name="title" placeholder="title">
    @error('title') 
    {{$message}}
    @enderror
</div>
 
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" required value="{{old('content')}}" name="content" rows="3"></textarea>
    @error('content') 
    {{$message}}
    @enderror
  </div>
  <button type="submit" class="btn btn-secondary btn-fill">Enviar</button>
</form>



<a href="{{ route('posts.index') }}">Regresar</a>
@endsection