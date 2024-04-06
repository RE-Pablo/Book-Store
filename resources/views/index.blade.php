<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore</title>
</head>
<body>
    <h1>Bienvenido a BookStore</h1>
    <!-- {{$books}}
    <br> -->

    <button><a href="{{ route ('book.create') }}">Add new Book</a></button>

    @foreach ($books as $book)
        <h2>Este es el objeto extraido en el foreach</h2>

        <div>Titulo: {{ $book->title }}</div>
        <div>Autor: {{ $book -> author_name }}</div>
        <div>ISBN: {{ $book -> isbn }}</div>
        <div>Año Publicación: {{ $book -> published_year }}</div>

        <button><a href="{{route('book.edit', $book->id)}}">Edit this Book</a></button>

        <form action="{{route('book.destroy', $book->id)}}" method="post">
            @method('DELETE')
            @csrf 

            <button type="submit">Delete</button>
        </form>
        
    @endforeach
</body>
</html>