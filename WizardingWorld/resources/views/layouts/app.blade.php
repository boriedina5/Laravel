<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>-->
    @vite(['resources/css/app.css', 
    'resources/js/app.js', 
    'resources/css/style.css]')
    <title>Harry Potter</title>
</head>
<body>
    <header><h1>Welcome in Roxfort!</h1></header>
    
    <nav class="navbar navbar-expand-lg" style="background-color: #dbdbdbfe;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('houses.index')  }}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/houses">Houses</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
    @yield('mainContent')
</body>
</html>