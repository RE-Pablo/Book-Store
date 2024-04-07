<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
    @extends('layout.app')
    <title>BookStore</title>
</head>
<body>
    <h1>Bienvenid@ a BookStore</h1>
    <!-- {{$books}} -->

    <main>
        @foreach ($books as $book)
            <div class="book-container">
                <h2>{{ $book->title }}</h2>

                <div> <label>Titulo:</label> {{ $book->title }}</div>
                <div> <label>Autor:</label> {{ $book -> author_name }}</div>
                <div> <label>ISBN:</label> {{ $book -> isbn }}</div>
                <div> <label>Año Publicación:</label> {{ $book -> published_year }}</div>

                <div class="btn-container">
                    <button class="btnEdit"><a href="{{route('book.edit', $book->id)}}">Editar libro <i class="fa-regular fa-pen-to-square"></i> </a></button>

                    <button class="btnAdd" ><a href="{{ route ('book.create') }}">Agregar libro nuevo</a></button>

                    <form action="{{route('book.destroy', $book->id)}}" method="post">
                        @method('DELETE')
                        @csrf 

                        <button class="btnDelete" type="submit">Eliminar <i class="fa-solid fa-trash"></i></button>
                    </form>
                </div>
            </div>
        @endforeach
    </main>
</body>
</html>