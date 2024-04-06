@extends('layout.app')

@section('title','Edit')

@section('content')

<h1>Este sera el formulario edit</h1>

<form action="{{ route('book.update', $book->id) }}" method="POST">

    @csrf

    @method('PUT')

    <label for="">Titulo</label>
    <input type="text" id="title" name="title" value="{{ $book->title }}">
    
    <label for="">Autor</label>
    <input type="text" id="author_name" name="author_name" value="{{ $book->author_name }}">
    
    <label for="">ISBN</label>
    <input type="text" id="isbn" name="isbn" value="{{ $book->isbn }}">

    <label for="">Año Publicación</label>
    <input type="number" id="published_year" name="published_year" value="{{ $book->published_year }}">

    <input type="submit" value="Update">
</form>