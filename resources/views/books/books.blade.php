<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All Books | Admin</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <header>
        <ul>
            <li><span class="span">Admin |</span><a href={{ route('home') }}> Home</a></li>
            <li><a href="{{ route('users') }}">Users</a></li>
            <li><a href="{{ route('books')}}">Books</a></li>
        </ul>
    </header>
    {{--LOGS--}}
    @if (session('success'))
    <script>
    alert("{{ session('success') }}");
    </script>
    @endif
    <div class="container-01">
    <div class="tab-01">
        <h3>All Books</h3>
        <a href={{ route('newbook') }} class="link"><button class="button">New Book</button></a>
    </div>
        <table class="user-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Autor</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Available</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($books as $book)
        <tr class="pag-row">
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->genre }}</td>
            <td>{{ $book->year }}</td>
            @if($book->available == true)
            <td style="color: green;">Yes</td>
            @else
            <td style="color: red;">No</td>
            @endif
            <td>
                <a href="{{ route('book.edit.view', $book->id) }}" class="link"><button class="edit-btn">Edit</button></a>
                <a href="{{ route('book.edit.view', $book->id) }}" class="link"><button class="delete-btn">Delete</button></a>
            </td>
            @endforeach
        </tr>
    </tbody>
</table>
</div>
</body>
</html>