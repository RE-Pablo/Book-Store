@extends('layout.app')

@section('title','Create')

@section('content')

<link rel="stylesheet" href="{{asset('css/create.css')}}">

<h1>Formulario Create</h1>

<form action="{{ route('book.store') }}" method="POST" class="book-form">

    @csrf

    <div class="grupo-form">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" class="form-control">
    </div>
    
    <div class="grupo-form">
        <label for="author_name">Autor</label>
        <input type="text" id="author_name" name="author_name" class="form-control">
    </div>
    
    <div class="grupo-form">
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" class="form-control">
    </div>

    <div class="grupo-form">
        <label for="published_year">Año de Publicación</label>
        <input type="number" id="published_year" name="published_year" class="form-control">
    </div>

    <button type="submit" class="btnAdd">Agregar Libro</button>
</form>
@endsection