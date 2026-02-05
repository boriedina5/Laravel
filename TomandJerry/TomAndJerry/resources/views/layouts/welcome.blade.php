<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Tom & Jerry – Characters')</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 15px 30px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar h1 {
            margin: 0;
            font-size: 22px;
        }

        .navbar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        .navbar a:hover {
            text-decoration: underline;
        }

        main {
            padding: 30px;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #ddd;
            margin-top: 40px;
            font-size: 14px;
        }

            h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #34495e;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #2980b9;
            text-decoration: none;
            margin-right: 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c0392b;
        }

                form {
            max-width: 500px;
            background-color: white;
            padding: 25px;
            border: 1px solid #ccc;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }

        input[type="checkbox"] {
            margin-right: 8px;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #27ae60;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #1e8449;
        }

        .error {
            color: #e74c3c;
            font-size: 14px;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar">
        <h1>🐭 Tom & Jerry Characters 🐱</h1>
        <div>
            <a href="{{ route('characters.index') }}">Karakterek listája</a>
            <a href="{{ route('characters.create') }}">Új karakter</a>
        </div>
    </nav>
</header>

<main>
    Tartalom helye
</main>

<footer>
    Tom & Jerry CRUD feladat – Laravel
</footer>

</body>
</html>