<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank You — Memories Are For Sharing</title>
    <meta name="robots" content="noindex">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=EB+Garamond:ital,wght@0,400;0,500;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --ink: #0d0a09;
            --burgundy: #5a1726;
            --burgundy-deep: #3a0e18;
            --gold: #c2a14e;
            --gold-bright: #e7cb84;
            --gold-deep: #93752f;
            --cream: #f6eedd;
            --cream-dim: #ece0c8;
            --paper: #f3ead7;
            --text-dark: #2c221c;
            --text-muted: #6c5d4f;
            --line: rgba(194, 161, 78, 0.32);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'EB Garamond', Georgia, serif;
            background: var(--paper);
            color: var(--text-dark);
            font-size: 19px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        body::after {
            content: "";
            position: fixed;
            inset: 0;
            z-index: 9999;
            pointer-events: none;
            opacity: 0.035;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='180' height='180'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrap {
            width: min(1180px, 90vw);
            margin: 0 auto;
        }

        /* ---------- nav ---------- */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 18px 0;
            background: rgba(13, 10, 9, 0.94);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
        }

        .brand {
            font-family: 'Cormorant Garamond', serif;
            color: var(--cream);
            font-size: 23px;
            letter-spacing: 0.04em;
            line-height: 1;
            white-space: nowrap;
        }

        .brand span {
            color: var(--gold-bright);
            font-style: italic;
        }

        .brand small {
            display: block;
            font-family: 'Jost', sans-serif;
            font-size: 8.5px;
            letter-spacing: 0.46em;
            text-transform: uppercase;
            color: var(--gold);
            margin-top: 5px;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 28px;
        }

        .nav-links a {
            font-family: 'Jost', sans-serif;
            font-size: 12px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--cream-dim);
            transition: color .3s ease, transform .3s ease;
        }

        .nav-links a:hover {
            color: var(--gold-bright);
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            cursor: pointer;
            color: var(--gold);
            width: 30px;
            height: 22px;
            position: relative;
        }

        .nav-toggle span {
            position: absolute;
            left: 0;
            right: 0;
            height: 1.5px;
            background: var(--gold);
            transition: .3s;
        }

        .nav-toggle span:nth-child(1) {
            top: 0;
        }

        .nav-toggle span:nth-child(2) {
            top: 10px;
        }

        .nav-toggle span:nth-child(3) {
            top: 20px;
        }

        .nav-toggle.open span:nth-child(1) {
            top: 10px;
            transform: rotate(45deg);
        }

        .nav-toggle.open span:nth-child(2) {
            opacity: 0;
        }

        .nav-toggle.open span:nth-child(3) {
            top: 10px;
            transform: rotate(-45deg);
        }

        /* ---------- main confirmation ---------- */
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 148px 24px 72px;
        }

        .card {
            width: 100%;
            max-width: 640px;
            text-align: center;
        }

        .seal {
            width: 92px;
            height: 92px;
            margin: 0 auto 30px;
            border-radius: 50%;
            border: 1px solid var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .seal::after {
            content: "";
            position: absolute;
            inset: 7px;
            border-radius: 50%;
            border: 1px solid var(--line);
        }

        .seal svg {
            width: 38px;
            height: 38px;
            stroke: var(--gold-deep);
        }

        .eyebrow {
            font-family: 'Jost', sans-serif;
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 13px;
            font-weight: 400;
            color: var(--gold-deep);
            margin-bottom: 18px;
        }

        h1 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            font-size: clamp(34px, 6vw, 52px);
            line-height: 1.12;
            color: var(--burgundy-deep);
            margin-bottom: 22px;
        }

        .lede {
            font-size: 20px;
            color: var(--text-muted);
            max-width: 520px;
            margin: 0 auto 14px;
        }

        .gold-rule {
            width: 100%;
            max-width: 220px;
            height: 1px;
            margin: 40px auto;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
        }

        .next-title {
            font-family: 'Jost', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
            color: var(--gold-deep);
            margin-bottom: 26px;
        }

        .steps {
            list-style: none;
            text-align: left;
            max-width: 460px;
            margin: 0 auto;
        }

        .steps li {
            display: flex;
            gap: 18px;
            align-items: flex-start;
            padding: 14px 0;
            border-bottom: 1px solid var(--line);
        }

        .steps li:last-child {
            border-bottom: none;
        }

        .step-num {
            flex: none;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            border: 1px solid var(--gold);
            color: var(--gold-deep);
            font-family: 'Jost', sans-serif;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2px;
        }

        .step-text {
            font-size: 18px;
            color: var(--text-dark);
        }

        .actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 44px;
        }

        .btn {
            display: inline-block;
            font-family: 'Jost', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
            text-decoration: none;
            padding: 15px 34px;
            border: 1px solid var(--gold);
            transition: transform .2s ease, box-shadow .2s ease, background .2s ease, color .2s ease;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold-bright), var(--gold) 55%, var(--gold-deep));
            color: var(--ink);
            border-color: transparent;
        }

        .btn-outline {
            color: var(--burgundy);
            background: transparent;
            border-color: rgba(90, 23, 38, 0.45);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 26px rgba(58, 14, 24, .18);
        }

        .btn-outline:hover {
            background: var(--burgundy);
            border-color: var(--burgundy);
            color: var(--cream);
        }

        .reference {
            margin-top: 34px;
            font-family: 'Jost', sans-serif;
            font-size: 12px;
            letter-spacing: 1px;
            color: var(--text-muted);
            text-transform: uppercase;
        }

        footer {
            background: var(--ink);
            color: rgba(246, 238, 221, .5);
            text-align: center;
            padding: 26px 24px;
            font-family: 'Jost', sans-serif;
            font-size: 12px;
            letter-spacing: 1px;
        }

        @media (max-width: 960px) {
            .nav-links {
                display: none;
            }

            .nav-links.show {
                display: flex;
                flex-direction: column;
                gap: 22px;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(13, 10, 9, 0.98);
                padding: 32px 7vw 38px;
                align-items: flex-start;
                border-bottom: 1px solid var(--line);
            }

            .nav-toggle {
                display: block;
            }

            main {
                padding-top: 138px;
            }
        }

        @media (max-width: 560px) {
            body {
                font-size: 18px;
            }

            nav {
                padding: 16px 0;
            }

            .brand {
                font-size: 21px;
            }

            .brand small {
                font-size: 7.5px;
                letter-spacing: 0.38em;
            }

            main {
                padding: 124px 20px 56px;
                align-items: flex-start;
            }

            .seal {
                width: 82px;
                height: 82px;
                margin-bottom: 26px;
            }

            .lede {
                font-size: 19px;
            }

            .actions {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <nav id="nav">
        <div class="wrap nav-inner">
            <a href="{{ route('home') }}" class="brand">
                Memories <span>&amp;</span> Sharing
                <small>Legacy Preservation</small>
            </a>

            <div class="nav-links" id="navLinks">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('home') }}#short-session">30 Min Session</a>
                <a href="{{ route('home') }}#process">Process</a>
                <a href="{{ route('home') }}#packages">Packages</a>
                <a href="{{ route('home') }}#about">About</a>
                <a href="{{ route('home') }}#contact">Contact</a>
            </div>

            <button class="nav-toggle" id="navToggle" aria-label="Menu" type="button">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <main>
        <div class="card">
            <div class="seal" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M20 6 9 17l-5-5"></path>
                </svg>
            </div>

            <div class="eyebrow">Order Confirmed</div>

            <h1>Thank you — your keepsake is reserved.</h1>

            <p class="lede">
                Your order is complete, and a confirmation is on its way to your inbox.
                It's an honor to help you preserve the stories of the people you love.
            </p>

            <div class="gold-rule"></div>

            <div class="next-title">What happens next</div>

            <ul class="steps">
                <li>
                    <span class="step-num">1</span>
                    <span class="step-text">A confirmation and receipt will arrive in your email shortly.</span>
                </li>
                <li>
                    <span class="step-num">2</span>
                    <span class="step-text">Shalyce will reach out personally within a day or two to schedule your session and talk through every detail.</span>
                </li>
                <li>
                    <span class="step-num">3</span>
                    <span class="step-text">We'll capture the stories, then carefully edit and deliver your keepsake for the generations who come after.</span>
                </li>
            </ul>

            <div class="actions">
                <a href="{{ route('home') }}" class="btn btn-gold">Return Home</a>
                <a href="{{ route('home') }}#contact" class="btn btn-outline">Contact Shalyce</a>
            </div>

            @if (request()->filled('session_id'))
                <div class="reference">
                    Order reference · {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr(request()->query('session_id'), -10)) }}
                </div>
            @endif
        </div>
    </main>

    <footer>
        Memories Are For Sharing · Legacy preservation by Shalyce
    </footer>

    <script>
        const toggle = document.getElementById('navToggle');
        const links = document.getElementById('navLinks');

        toggle.addEventListener('click', () => {
            toggle.classList.toggle('open');
            links.classList.toggle('show');
        });

        links.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                toggle.classList.remove('open');
                links.classList.remove('show');
            });
        });
    </script>
</body>
</html>