<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layouts</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>

<body>

    <header>
        
    </header>
    <nav class="navbar navbar-expand-lg" style="background-color: #ffda03;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/customers">Customers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/products">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/reviews">Reviews</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="mx-5 min-h-[50vh] my-5 flex items-center">
        <div class="min-w-full text-center">
            @yield('MainContent')<!--Main contetnt nevű szakasz, itt kapja a nevet. Itt lett egy szakasz ráhúzva, itt jelenek meg dolgok-> no összefolyás-->
        </div>
    </div>

</body>

</html>