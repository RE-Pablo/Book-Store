@extends('layout.app')

@section('title','Edit')

@section('content')

<link rel="stylesheet" href="{{asset('css/edit.css')}}">

<h1>Formulario Edit</h1>

<form action="{{ route('book.update', $book->id) }}" method="POST" class="book-form">

    @csrf

    @method('PUT')

    <div class="grupo-form">
        <label for="title">Título</label>
        <input type="text" id="title" name="title" value="{{ $book->title }}" placeholder="{{ $book->title }}" >
    </div>
    
    <div class="grupo-form">
        <label for="author_name">Autor</label>
        <input type="text" id="author_name" name="author_name" value="{{ $book->author_name }}" placeholder="{{ $book->author_name }}" >
    </div>
    
    <div class="grupo-form">
        <label for="isbn">ISBN</label>
        <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}" placeholder="{{ $book->isbn }}">
    </div>

    <div class="grupo-form">
        <label for="published_year">Año de Publicación</label>
        <input type="number" id="published_year" name="published_year" value="{{ $book->published_year }}" placeholder="{{ $book->published_year }}">
    </div>

    <button type="submit" class="btnEdit">Actualizar</button>
</form>
@endsection