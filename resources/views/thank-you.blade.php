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
            --paper: #f3ead7;
            --text-dark: #2c221c;
            --text-muted: #6c5d4f;
            --line: rgba(194, 161, 78, 0.32);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

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

        /* slim brand bar */
        .topbar {
            background: var(--burgundy-deep);
            border-bottom: 1px solid var(--line);
            text-align: center;
            padding: 22px 24px;
        }
        .brand {
            font-family: 'Cormorant Garamond', serif;
            color: var(--cream);
            font-size: 24px;
            letter-spacing: .5px;
        }
        .brand span { color: var(--gold-bright); font-style: italic; }

        /* main confirmation */
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 64px 24px;
        }
        .card {
            width: 100%;
            max-width: 640px;
            text-align: center;
        }

        /* gold seal */
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
        .seal svg { width: 38px; height: 38px; stroke: var(--gold-deep); }

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

        /* what happens next */
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
        .steps li:last-child { border-bottom: none; }
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
        .step-text { font-size: 18px; color: var(--text-dark); }

        /* button */
        .btn {
            display: inline-block;
            font-family: 'Jost', sans-serif;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 13px;
            text-decoration: none;
            padding: 15px 34px;
            margin-top: 44px;
            border: 1px solid var(--gold);
            background: linear-gradient(135deg, var(--gold-bright), var(--gold) 55%, var(--gold-deep));
            color: var(--ink);
            transition: transform .2s ease, box-shadow .2s ease;
        }
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 26px rgba(58, 14, 24, .18);
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
            padding: 20px 24px;
            font-family: 'Jost', sans-serif;
            font-size: 12px;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>
    <header class="topbar">
        <div class="brand">Memories Are <span>For Sharing</span></div>
    </header>

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

            <a href="{{ route('home') }}" class="btn">Return Home</a>

            @if (request()->filled('session_id'))
                <div class="reference">Order reference · {{ \Illuminate\Support\Str::upper(\Illuminate\Support\Str::substr(request()->query('session_id'), -10)) }}</div>
            @endif
        </div>
    </main>

    <footer>
        Memories Are For Sharing · Legacy preservation by Shalyce
    </footer>
</body>
</html>