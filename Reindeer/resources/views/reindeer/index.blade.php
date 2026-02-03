<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karácsonyi Rénszarvasok</title>
    <link href="https://fonts.googleapis.com/css2?family=Snowburst+One&family=Nunito:wght@300;600&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-family: 'Nunito', sans-serif;
            background: linear-gradient(#d60000, #7a0000);
            background-attachment: fixed;
            color: white;
            text-align: center;
        }

        header {
            padding: 60px 20px;
        }

        h1 {
            font-family: 'Snowburst One', cursive;
            font-size: 4rem;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.3rem;
        }

        .btn {
            display: inline-block;
            margin-top: 30px;
            padding: 15px 30px;
            background: #ffffff;
            color: #b30000;
            font-weight: bold;
            border-radius: 12px;
            text-decoration: none;
            font-size: 1.2rem;
            transition: 0.3s;
        }

        .btn:hover {
            background: #ffe3e3;
        }

        .snow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1000;
            background-image: url('https://i.imgur.com/7b1rjX0.png');
            animation: snowfall 10s linear infinite;
        }

        @keyframes snowfall {
            from {
                background-position: 0 0;
            }

            to {
                background-position: 0 1000px;
            }
        }
    </style>
</head>

<body>
    <div class="snow"></div>
    <header>
        <h1>Rénszarvasok</h1>
        <p>
            Itt megtalálod az összes rénszarvast<br>
        </p>
        @foreach ($reindeers as $reindeer )
        <div class="max-w-sm mx-auto bg-red-50 border-2 border-red-400 rounded-2xl shadow-lg p-6 text-center" 
        style=
        "background-color: green;
        width: 30%;
        justify-content: center;
        "
        >
            {{-- Név --}}
            <h2 class="text-2xl font-bold text-red-800 mb-4">
                {{ $reindeer->name }} 🦌🎄
            </h2>

            {{-- Részletek --}}
            <div class="text-left text-gray-700 space-y-2 ">
                <strong>Repülési sebesség:</strong> {{ $reindeer->flight_speed }} mérföld
                <strong>Súly:</strong> {{ $reindeer->weight }} kg
                <strong>Szín:</strong> {{ $reindeer->color }}
                <strong>Étrend:</strong> {{ $reindeer->diet }}
            </div>

            {{-- Lábléc --}}
            <div class="mt-4 text-red-600 font-semibold">Boldog Karácsonyt! 🎅✨</div>
        </div>

        </div>
        @endforeach

    </header>
</body>

</html>