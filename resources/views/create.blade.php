@extends('layout.app')

@section('title','Create')

@section('content')

<h1>Este sera el formulario create</h1>

<form action="{{ route('book.store') }}" method="POST">

    @csrf

    <label for="">Titulo</label>
    <input type="text" id="title" name="title">
    
    <label for="">Autor</label>
    <input type="text" id="author_name" name="author_name">
    
    <label for="">ISBN</label>
    <input type="text" id="isbn" name="isbn">

    <label for="">Año Publicación</label>
    <input type="number" id="published_year" name="published_year">

    <input type="submit" value="Add Book">
</form>
@endsection