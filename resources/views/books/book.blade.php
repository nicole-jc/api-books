<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book | {{ $book->title }}</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        {{--Header structure--}}
    <header>
        <ul>
            <li><span class="span">Admin |</span><a href="{{ route('home') }}"> Home</a></li>
            <li><a href="{{ route('users') }}">Users</a></li>
            <li><a href="{{ route('books') }}">Books</a></li>
        </ul>
    </header>
    {{--LOGS--}}
    <br><br>
    <div id="container">
    <div class="tab-01">
        <h3>Edit "{{ $book->title }}" book info</h3>
        </div>
        @if (session('success'))
    <p style="color: green">
        {{ session('success') }}
    </p>
    @endif

    @if (session('error'))
    <p style="color: red">
        {{ session('error') }}
    </p>
    @endif

    @if ($errors->any())
        <p style="color: red">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </p>
    @endif
    {{--EDIT BOOK INFO--}}
        <form action="{{ route('book.update', $book->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to edit info from this book?')">
            @csrf
            @method('PUT')
                <p>Title | Author</p>
                <div class="column">
                    <input type="text" name="title" id="title" class="input" value="{{ $book->title }}">
                    </div>
                <div class="column">
                    <input type="text" name="author" id="author" class="input" value="{{ $book->author }}">
                </div>
                <br><br>
                <p>Genre "{{ $book->genre }}" | Year</p>
                <div class="column">
                    <select name="genre" id="genre" class="input">
                        <option value="Action">Action</option>
                        <option value="Adventure">Adventure</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Crime">Crime</option>
                        <option value="Drama">Drama</option>
                        <option value="Fantasy">Fantasy</option>
                        <option value="Fiction">Fiction</option>
                        <option value="Horror">Horror</option>
                        <option value="Romance">Romance</option>
                    </select>
                </div>
                <div class="column">
                    <input type="number" name="year" id="year" class="input" value="{{ $book->year }}">
                </div>
                <br><br>
                <p>Available?</p>
                <select name="available" id="available" class="input">
                    <option value="1">yes</option>
                    <option value="0">no</option>
                </select>
                <br><br>
                <button type="submit" name="submit" class="button">Save</button><br>or
            </form>
            {{--DELETE BOOk--}}
                <form action="{{ route('book.delete', $book->id) }}" method="POST"
                onsubmit="return confirm('Are you sure you want to delete this book?')">
                    @csrf
                    @method('DELETE')
                <button type="submit" name="button-delete" class="button">Delete</button>
            </form>
            </div>
        </div>
<script>
    const genre = "{{ $book->genre }}";
        document.getElementById('genre').value = genre; 

    const avail = "{{ $book->available }}";
        document.getElementById('available').value = avail;
            
</script>
       