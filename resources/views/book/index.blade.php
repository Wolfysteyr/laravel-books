<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book list</title>
</head>
<body>
    <h1>Index</h1>
    <a href="/create">Create new book</a>
    <ul>
        @foreach($books as $book)
        <li>
            {{$book->title}}, {{$book->release_date}}
            <a href="{{$book->id}}/edit">Edit</a>
            <a href="{{$book->id}}">View</a>
        </li>
        @endforeach
    </ul>
</body>
</html>
