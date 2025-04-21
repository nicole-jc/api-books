<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Admin</title>
        <link rel="stylesheet" href="/css/style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
    <header>
        <ul>
            <li><span class="span">Admin |</span><a href={{ route('home') }}>Home</a></li>
            <li><a href={{ route('users') }}>Users</a></li>
            <li><a href={{ route('books') }}>Books</a></li>
        </ul>
    </header>
    <div class="main">
        <div class="gallery">
           <div class="desc">Register users</div>
           <span class="material-icons icon-ico">group_add</span>
           <br>
           <a href={{ route('register') }} style="text-decoration: none;">
           <button type="button" class="button">
            New User
           </button></a>
        </div>
        <div class="gallery">
            <div class="desc">Register books</div><br>
            <span class="material-icons icon-ico">library_add</span>
            <br>
            <a href={{ route('newbook') }} style="text-decoration: none;">
            <button type="button" class="button">
                New Book
            </button></a>
         </div>
         <div class="gallery">
            <div class="desc">List users</div>
            <span class="material-icons icon-ico">person_search</span>
            <br>
            <a href={{ route('users') }} style="text-decoration: none;">
            <button type="button" class="button">
            All Users
            </button></a>
         </div>
         <div class="gallery">
            <div class="desc">List books</div>
            <span class="material-icons icon-ico">local_library</span>
            <br>
            <a href={{ route('books') }} style="text-decoration: none;">
            <button type="button" class="button">
            All Books
            </button></a>
         </div>
    </div>