<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User | {{ $user->name }}</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
        {{--Header structure--}}
    <header>
        <ul>
            <li><span class="span">Admin |</span><a href={{ route('home') }}> Home</a></li>
            <li><a href={{ route('users') }}>Users</a></li>
            <li><a href={{ route('books') }}>Books</a></li>
        </ul>
    </header>
    {{--User list structure--}}
    <br><br>
    <div id="container">
    <div class="tab-01">
        <h3>Edit "{{ $user->name }}" user info</h3>
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
        <form action="{{ route('user.update', $user->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to edit info from this user?')">
            @csrf
            @method('PUT')
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" class="input" value="{{ $user->name }}"><br><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email" id="email" class="input" value="{{ $user->email }}"><br><br>
        <button type="submit" name="button" class="button">Save</button><br>or
        </form>
        <form action="{{ route('user.delete', $user->id) }}" method="POST"
        onsubmit="return confirm('Are you sure you want to delete this user?')">
            @csrf
            @method('DELETE')
            <button type="submit" name="button-delete" class="button">Delete</button>
        </form>
        </div>
        