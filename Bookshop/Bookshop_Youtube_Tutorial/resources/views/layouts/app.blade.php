<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bookshop</title>

    {{--Bootstrape--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>    

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
</head>

<body>
    <h1>Welcome to our Tiny Seaside Bookshop</h1>
    @yield('subtitle')
    <hr>
    <a href="{{ route("books.index") }}">List all books</a>
    @can('create', App\Models\Book::class)
    <a href="{{ route("books.create") }}">Create new book</a>
    @endcan
    <a href="{{ route("books.trashed") }}">Show deleted books</a>
    <div class="auth-actions">
        @guest
        {{--Amennyiben nincs bejelentkezve a felhasználó - if eljárás--}}
        <a href="{{route("login") }}">Login</a>
        <a href="{{route("register")  }}">Register</a>
        @endguest
        @auth
        {{--Amennyiben be van jelentkezve a felhasználó - if eljárás--}}
        <form action="{{route("logout")  }}" method="post">{{--csrf: visszavisz a kedzőlapra--}}
            @csrf 
            <button class="like-a-tag">Logout</button>
        </form>
        @endauth
    </div>


    <div class="app-container">
        @yield('content')
    </div>
</body>

</html>
