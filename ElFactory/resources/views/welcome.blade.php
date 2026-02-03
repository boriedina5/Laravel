<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Elves of Santa Claus — Festive Landing</title>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    /* Palette */
    :root {
      --red: #c33b2e;
      --green: #0b7a4d;
      --dark-green: #075a3b;
      --white: #ffffff;
      --cream: #f7f6f2;
      --bg: linear-gradient(180deg, var(--red), #1a964e 60%);
      --card-shadow: 0 8px 30px rgba(3, 30, 12, 0.12);
    }

    /* Reset & layout */
    * {
      box-sizing: border-box
    }

    body {
      margin: 0;
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
      background: var(--bg);
      color: #063428;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
      padding: 2rem;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      /*egymás alatt legyenek a divek*/

    }

    /* Page container */
    .wrap {
      width: 100%;
      max-width: 1100px;
      background: linear-gradient(180deg, rgba(156, 189, 117, 0.9), rgba(255, 255, 255, 0.85));
      border-radius: 20px;
      padding: 28px;
      box-shadow: var(--card-shadow);
      position: relative;
      overflow: hidden;
      margin-top: 25px;
    }

    /* Header */
    header {
      display: flex;
      gap: 1rem;
      align-items: center;
      margin-bottom: 18px;
    }

    .logo {
      background: linear-gradient(90deg, var(--red), var(--green));
      color: var(--white);
      padding: 10px 14px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .logo h1 {
      margin: 0;
      font-family: 'Fredoka One';
      font-size: 1.05rem;
      letter-spacing: 0.5px
    }

    .tag {
      font-size: .9rem;
      color: var(--dark-green);
      opacity: 0.95
    }

    /* Hero */
    .hero {
      display: grid;
      grid-template-columns: 1fr 420px;
      gap: 22px;
      align-items: center;
    }

    .intro {
      padding: 14px 6px;
    }

    h2 {
      margin: 0 0 8px 0;
      font-family: 'Fredoka One';
      font-size: 2rem;
      color: var(--dark-green)
    }

    p.lead {
      margin: 0 0 16px 0;
      font-size: 1rem;
      color: #235a46
    }

    .cta-row {
      display: flex;
      gap: 12px;
      align-items: center
    }

    .btn {
      background: var(--green);
      color: var(--white);
      border: 0;
      padding: 12px 16px;
      border-radius: 12px;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 6px 14px rgba(7, 90, 59, 0.18);
    }

    .btn.alt {
      background: transparent;
      color: var(--dark-green);
      border: 2px solid rgba(7, 90, 59, 0.08)
    }

    /* Elf panel */
    .elf-panel {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 12px;
      margin-top: 18px;
    }

    .card {
      background: var(--white);
      border-radius: 14px;
      padding: 12px;
      text-align: center;
      box-shadow: var(--card-shadow);
      transition: transform .28s ease, box-shadow .28s ease;
      position: relative;
      overflow: visible;
    }

    .card:hover {
      transform: translateY(-8px);
      box-shadow: 0 18px 40px rgba(3, 30, 12, 0.16)
    }

    .elf-name {
      margin-top: 10px;
      font-weight: 600;
      color: var(--dark-green)
    }

    .elf-role {
      font-size: .85rem;
      color: #7b9d8b
    }

    /* Simple SVG avatars sized consistently */
    .avatar {
      width: 140px;
      height: 120px;
      margin: 0 auto;
      display: block
    }

    /* Snow (decorative) */
    .snow {
      pointer-events: none;
      position: absolute;
      inset: 0;
      z-index: 0
    }

    .snow::before,
    .snow::after {
      content: '';
      position: absolute;
      left: -10%;
      right: -10%;
      height: 600px;
      top: -20%;
      background-image: radial-gradient(circle at 20% 20%, rgba(255, 255, 255, 0.9) 2px, transparent 4px);
      opacity: 0.06;
      transform: translateY(0);
      animation: drift 18s linear infinite;
    }

    .snow::after {
      opacity: 0.03;
      animation-duration: 28s;
      animation-direction: reverse
    }

    @keyframes drift {
      from {
        transform: translateY(-10px)
      }

      to {
        transform: translateY(10px)
      }
    }

    /* Twinkling lights across the top */
    .lights {
      position: absolute;
      left: 0;
      right: 0;
      top: 4px;
      height: 46px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 6px;
      z-index: 2
    }

    .light {
      width: 14px;
      height: 14px;
      border-radius: 50%;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
      opacity: 0.95
    }

    .light:nth-child(odd) {
      background: var(--red)
    }

    .light:nth-child(even) {
      background: var(--green)
    }

    .light {
      animation: blink 2.6s infinite
    }

    .light:nth-child(2) {
      animation-delay: .2s
    }

    .light:nth-child(3) {
      animation-delay: .4s
    }

    .light:nth-child(4) {
      animation-delay: .6s
    }

    .light:nth-child(5) {
      animation-delay: .9s
    }

    .light:nth-child(6) {
      animation-delay: 1.2s
    }

    @keyframes blink {

      0%,
      100% {
        transform: scale(0.9);
        opacity: 0.7
      }

      50% {
        transform: scale(1.25);
        opacity: 1
      }
    }

    /* Footer */
    footer {
      margin-top: 18px;
      padding-top: 8px;
      border-top: 1px dashed rgba(7, 90, 59, 0.07);
      display: flex;
      justify-content: space-between;
      align-items: center
    }

    .credits {
      font-size: .85rem;
      color: #4b6a5c
    }

    /* Responsive */
    @media (max-width:900px) {
      .hero {
        grid-template-columns: 1fr
      }

      .elf-panel {
        grid-template-columns: repeat(2, 1fr)
      }
    }

    @media (max-width:520px) {
      .elf-panel {
        grid-template-columns: 1fr
      }

      .logo h1 {
        font-size: .95rem
      }

      h2 {
        font-size: 1.5rem
      }
    }

    /* Decorative ribbon */
    .ribbon {
      position: absolute;
      right: -80px;
      top: 20px;
      transform: rotate(18deg);
      background: linear-gradient(90deg, var(--red), var(--green));
      color: #fff;
      padding: 6px 40px;
      border-radius: 18px;
      font-weight: 700;
      box-shadow: 0 10px 30px rgba(195, 59, 46, 0.18)
    }

    /* little badge */
    .badge {
      display: inline-block;
      padding: 6px 10px;
      border-radius: 999px;
      background: linear-gradient(90deg, #ffefef, #fff);
      border: 1px solid rgba(195, 59, 46, 0.08);
      font-weight: 700;
      color: var(--red);
    }
    .input-container{
      display: flex;
      width: 100%;
      flex-direction: column;
      align-content: center;
      justify-content: center;
    }
    .input-container input{
      margin-bottom: 2px;
      border-color: var(--dark-green);
      border-width: .5px;
    }
    .input-container button{
      border-radius: 5px;
      background-color: var(--green);
      color: #f5faf6;
      box-shadow: none;
      border: none;
      cursor: pointer;
    }
     .input-container button:hover{
      background-color: var(--dark-green);
    }
  </style>

</head>

<body>
  <div class="wrap" role="main">

    <div class="lights" aria-hidden="true">
      <span class="light"></span>
      <span class="light"></span>
      <span class="light"></span>
      <span class="light"></span>
      <span class="light"></span>
      <span class="light"></span>
    </div>

    <header>
      <div class="logo" aria-hidden="true">
        <!-- simple hat icon -->
        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2 18c6-6 12-6 20 0" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" opacity="0.95" />
          <path d="M6 9c2-6 7-6 10 0" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <h1>Elves of Santa</h1>
      </div>
      <div class="tag">cheer, craft &amp; workshops</div>
      <div style="flex:1"></div>
      <div class="badge" aria-hidden="true">Holiday 2025</div>
    </header>

    <div class="hero">
      <div class="intro">
        <h2>Meet the Workshop Elves</h2>
        <p class="lead">A playful HTML + CSS landing page celebrating Santa's helpers — bright, festive, and fully responsive. No JavaScript — just styles, animations and SVGs.</p>

        <div class="cta-row">
          <button class="btn">See their stories</button>
          <button class="btn alt">Download card</button>
        </div>

        <div class="elf-panel" style="margin-top:18px">

          <!-- Elf card 1 -->
          <article class="card" aria-labelledby="elf1">
            <svg class="avatar" viewBox="0 0 200 170" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
              <!-- hat -->
              <defs>
                <linearGradient id="g1" x1="0" x2="1">
                  <stop offset="0" stop-color="#ff6b6b" />
                  <stop offset="1" stop-color="#d12f2f" />
                </linearGradient>
              </defs>
              <path d="M40 60 C70 10, 130 10, 170 60 L160 78 C140 36, 60 36, 40 78 Z" fill="url(#g1)" />
              <circle cx="150" cy="58" r="6" fill="#fff" />
              <!-- face -->
              <ellipse cx="100" cy="110" rx="46" ry="44" fill="#ffe8d6" />
              <circle cx="83" cy="105" r="6" fill="#2b2b2b" />
              <circle cx="117" cy="105" r="6" fill="#2b2b2b" />
              <path d="M82 126 Q100 138,118 126" stroke="#b14d3a" stroke-width="3" fill="none" stroke-linecap="round" />
              <!-- ears -->
              <ellipse cx="52" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <ellipse cx="148" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <!-- collar -->
              <path d="M54 142 C76 160,124 160,146 142 L146 150 C124 170,76 170,54 150 Z" fill="#0b7a4d" />
            </svg>
            <h3 id="elf1" class="elf-name">Pippin Merry</h3>
            <div class="elf-role">Toy Mechanic — Tinkerer</div>
          </article>

          <!-- Elf card 2 -->
          <article class="card" aria-labelledby="elf2">
            <svg class="avatar" viewBox="0 0 200 170" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
              <path d="M35 62 C70 18,130 18,165 62 L145 80 C128 46,72 46,55 80 Z" fill="#0b7a4d" />
              <circle cx="55" cy="58" r="5" fill="#fff" />
              <ellipse cx="100" cy="110" rx="46" ry="44" fill="#ffe8d6" />
              <circle cx="85" cy="105" r="6" fill="#2b2b2b" />
              <circle cx="115" cy="105" r="6" fill="#2b2b2b" />
              <path d="M88 128 Q100 136,112 128" stroke="#b14d3a" stroke-width="3" fill="none" stroke-linecap="round" />
              <ellipse cx="46" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <ellipse cx="154" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <path d="M50 144 C78 168,122 168,150 144 L150 150 C122 176,78 176,50 150 Z" fill="#c33b2e" />
            </svg>
            <h3 id="elf2" class="elf-name">Tilda Bright</h3>
            <div class="elf-role">Gift Wrapper — Design</div>
          </article>

          <!-- Elf card 3 -->
          <article class="card" aria-labelledby="elf3">
            <svg class="avatar" viewBox="0 0 200 170" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
              <path d="M45 58 C70 26,130 26,155 58 L138 76 C124 48,76 48,62 76 Z" fill="#ffd23f" />
              <circle cx="150" cy="62" r="5" fill="#fff" />
              <ellipse cx="100" cy="110" rx="46" ry="44" fill="#ffe8d6" />
              <circle cx="85" cy="105" r="6" fill="#2b2b2b" />
              <circle cx="115" cy="105" r="6" fill="#2b2b2b" />
              <path d="M82 126 Q100 138,118 126" stroke="#b14d3a" stroke-width="3" fill="none" stroke-linecap="round" />
              <ellipse cx="48" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <ellipse cx="152" cy="110" rx="8" ry="12" fill="#ffe8d6" />
              <path d="M54 142 C76 156,124 156,146 142 L146 150 C124 170,76 170,54 150 Z" fill="#0b7a4d" />
            </svg>
            <h3 id="elf3" class="elf-name">Holly Jink</h3>
            <div class="elf-role">Candy Supervisor — Sweets</div>
          </article>

        </div>

      </div>

      <!-- Right column: decorative panel -->
      <aside style="position:relative;z-index:1;padding:10px;">
        <div style="background:linear-gradient(180deg,#fff,#f6fff9);border-radius:12px;padding:16px;box-shadow:var(--card-shadow);text-align:center">
          <h3 style="margin:0 0 8px 0;color:var(--red);font-family:'Fredoka One'">Workshop Hours</h3>
          <p style="margin:0 0 12px 0;color:#386d53">Mon — Sat: 8am — 6pm<br>Closed: Christmas Eve</p>
          <div style="display:flex;gap:8px;justify-content:center">
            <div style="padding:8px 12px;border-radius:10px;background:linear-gradient(90deg,#fff,#f5faf6);border:1px solid rgba(7,90,59,0.06)">Tours</div>
            <div style="padding:8px 12px;border-radius:10px;background:linear-gradient(90deg,#fff,#fff6f6);border:1px solid rgba(195,59,46,0.06)">Workshops</div>
          </div>
        </div>

        <div class="ribbon" aria-hidden="true">Certified Cheer</div>
      </aside>

    </div>

    <footer>
      <div class="credits">Made with <strong style="color:var(--red)">❤</strong> by North Pole designers</div>
      <div style="font-size:.9rem;color:#6a8a73">Icons: SVG · Fonts: Google</div>
    </footer>

    <div class="snow" aria-hidden="true"></div>
  </div>

  <div class="wrap" role="main">
    <h1>Das ist der Elf</h1>
    <div class="elf-panel" style="margin-top:18px">

            <article class="card" aria-labelledby="elf1">
        <svg class="avatar" viewBox="0 0 200 170" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
          <!-- hat -->
          <defs>
            <linearGradient id="g1" x1="0" x2="1">
              <stop offset="0" stop-color="#ff6b6b" />
              <stop offset="1" stop-color="#d12f2f" />
            </linearGradient>
          </defs>
          <path d="M40 60 C70 10, 130 10, 170 60 L160 78 C140 36, 60 36, 40 78 Z" fill="#c33b2e" />{{--sapka szín--}}
          <circle cx="150" cy="58" r="6" fill="#fff" />{{--sapka pötty szín--}}
          <!-- face -->
          <ellipse cx="100" cy="110" rx="46" ry="44" fill="#ffe8d6" />
          <circle cx="83" cy="105" r="6" fill="#2b2b2b" />
          <circle cx="117" cy="105" r="6" fill="#2b2b2b" />
          <path d="M82 126 Q100 138,118 126" stroke="#b14d3a" stroke-width="3" fill="none" stroke-linecap="round" />
          <!-- ears -->
          <ellipse cx="52" cy="110" rx="8" ry="12" fill="#ffe8d6" />
          <ellipse cx="148" cy="110" rx="8" ry="12" fill="#ffe8d6" />
          <!-- collar -->
          <path d="M54 142 C76 160,124 160,146 142 L146 150 C124 170,76 170,54 150 Z" fill="#0b7a4d" />
        </svg>
        <h3 id="elf1" class="elf-name">Add elf to the self</h3>
        <form action="{{ route("elves.store") }}" method="post">
          @csrf{{--generál egy tokent --}}
          <div class="input-container">  
            <input type="text" name="name" id="name" placeholder="Enter the name">
            <input type="text" name="department" id="department" placeholder="Enter the department">
            <input type="text" name="job" id="job" placeholder="Enter the job">
            <button type="submit" name="submit">Add elf</button>
          </div>
        </form>
      </article>
      {{--Manók kiíratása--}}
      @foreach ($elves as $elf ) <!--$elf = $item-->

      <?php

      $hatColors = [
        "classic_red"      => "#c33b2e",
        "deep_red"         => "#a3241e",
        "bright_red"       => "#ff4a4a",

        "forest_green"     => "#0b7a4d",
        "pine_green"       => "#075a3b",
        "mint_green"       => "#4ccf8a",

        "snow_white"       => "#ffffff",
        "frost_white"      => "#f7f6f2",

        "gold"             => "#ffd23f",
        "warm_gold"        => "#f4c542",

        "candy_pink"       => "#ff9aa2",
        "berry_red"        => "#b02232"
      ];

      ?>

      <article class="card" aria-labelledby="elf1">
        <svg class="avatar" viewBox="0 0 200 170" xmlns="http://www.w3.org/2000/svg" role="img" aria-hidden="true">
          <!-- hat -->
          <defs>
            <linearGradient id="g1" x1="0" x2="1">
              <stop offset="0" stop-color="#ff6b6b" />
              <stop offset="1" stop-color="#d12f2f" />
            </linearGradient>
          </defs>
          <path d="M40 60 C70 10, 130 10, 170 60 L160 78 C140 36, 60 36, 40 78 Z" fill="{{$hatColors[array_rand($hatColors)] }}" />{{--sapka szín--}}
          <circle cx="150" cy="58" r="6" fill="#fff" />{{--sapka pötty szín--}}
          <!-- face -->
          <ellipse cx="100" cy="110" rx="46" ry="44" fill="#ffe8d6" />
          <circle cx="83" cy="105" r="6" fill="#2b2b2b" />
          <circle cx="117" cy="105" r="6" fill="#2b2b2b" />
          <path d="M82 126 Q100 138,118 126" stroke="#b14d3a" stroke-width="3" fill="none" stroke-linecap="round" />
          <!-- ears -->
          <ellipse cx="52" cy="110" rx="8" ry="12" fill="#ffe8d6" />
          <ellipse cx="148" cy="110" rx="8" ry="12" fill="#ffe8d6" />
          <!-- collar -->
          <path d="M54 142 C76 160,124 160,146 142 L146 150 C124 170,76 170,54 150 Z" fill="#0b7a4d" />
        </svg>
        <h3 id="elf1" class="elf-name">{{$elf->name }}</h3>
        <div class="elf-role">{{$elf->department}} - {{$elf->job}}</div>
      </article>
      @endforeach





    </div>
  </div>
</body>

</html>