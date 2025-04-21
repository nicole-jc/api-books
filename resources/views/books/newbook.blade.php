<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Book | Admin</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        <div id="container">
            <h1 class="heads">New Book</h1>
            {{--LOGS--}}
            @if (session('success'))
            <p style="color: green">
            {{ session('success') }}
            </p>
        @endif
            @if ($errors->any())
        <p style="color: red">
            @foreach ($errors->all() as $error)
            {{ $error }}<br>
            @endforeach
        </p>
        @endif
            <form action="{{ route('book.store') }}" method="POST">
                @csrf
            <div class="row">
                <p>Title | Author</p>
                <div class="column">
                    <input type="text" name="title" id="title" class="input" placeholder="Title">
                    </div>
                <div class="column">
                    <input type="text" name="author" id="author" class="input" placeholder="Author">
                </div>
                <br><br>
                <p>Genre | Year</p>
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
                    <input type="number" name="year" id="year" class="input" placeholder="Year">
                </div>
                <br><br>
                <br>
                <button type="submit" name="submit" class="button">Procceed</button><br>
                or <a href="{{ route('home') }}" class="link">Return</a>
            </div>
        </form>
        </div>
    </body>
</html>