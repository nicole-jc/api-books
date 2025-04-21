<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>All users | Admin</title>
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
    @if (session('success'))
    <script>
    alert("{{ session('success') }}");
    </script>
    @endif
        {{--User list structure--}}
        <div class="container-01">
    <div class="tab-01">
        <h3>All users</h3>
        <a href={{ route('register') }} class="link"><button class="button">New User</button></a>
    </div>
        <table class="user-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Created at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr class="user-row">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at}}</td>
                    <td>
                        <a href="{{ route('user.edit.view', $user->id) }}" class="link"><button class="edit-btn">Edit</button></a>
                        <a href="{{ route('user.edit.view', $user->id) }}" class="link"><button class="delete-btn">Delete</button></a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>