<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Create Account</title>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
    <div id="container">
    <h1 class="heads">Create Account</h1>
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
    
    <form action="{{ (route('user.store')) }}" method="post">
        @csrf
        <input type="text" name="name" id="name" class="input" placeholder="Name"><br><br>
        <input type="email" name="email" id="email" class="input" placeholder="E-mail"><br><br>
        <input type="password" name="password" id="password" class="input" placeholder="Password"><br><br>
        <input type="checkbox" id="show-password">Show password<br><br>
        <button type="submit" name="submit-register" class="button">Register</button><br>
        or <a href={{ route('home') }} class="link">Return</a>
    </form>
    </div>
    {{-- Commentario blade --}}
    <script src="/js/script.js"></script>
    </body>
</html>
