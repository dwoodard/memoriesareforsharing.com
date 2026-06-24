<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Memories Are For Sharing — Heirloom Life-Story Recordings</title>
    <meta name="description" content="Heirloom audio and video recordings of the people you love — their stories, their voice, their words — kept for the generations who come after. Legacy preservation by Shalyce.">

    <meta property="og:type" content="website">
    <meta property="og:title" content="Memories are for Sharing">
    <meta property="og:url" content="https://memoriesareforsharing.com/">
    <meta property="og:image" content="https://memoriesareforsharing.com/images/Memories-OG-image.png">
    <meta property="og:description" content="Preserve the voices, stories, and memories of the people you love — captured with care and kept as an heirloom for the generations who come after.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500&family=EB+Garamond:ital,wght@0,400;0,500;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

    @verbatim
    <style>
        :root {
            --ink: #0d0a09;
            --ink-soft: #161010;
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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 90px;
        }

        body {
            font-family: 'EB Garamond', Georgia, serif;
            background: var(--paper);
            color: var(--text-dark);
            font-size: 19px;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
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

        h1, h2, h3, h4 {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 400;
            line-height: 1.06;
            letter-spacing: 0.01em;
        }

        .eyebrow {
            font-family: 'Jost', sans-serif;
            font-weight: 400;
            font-size: 12.5px;
            letter-spacing: 0.42em;
            text-transform: uppercase;
            color: var(--gold-deep);
        }

        .gold-rule {
            display: inline-flex;
            align-items: center;
            gap: 14px;
            color: var(--gold-deep);
        }

        .gold-rule::before,
        .gold-rule::after {
            content: "";
            width: 46px;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--gold));
        }

        .gold-rule::after {
            background: linear-gradient(90deg, var(--gold), transparent);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrap {
            width: min(1180px, 90vw);
            margin: 0 auto;
        }

        /* ---------- buttons ---------- */
        .btn {
            font-family: 'Jost', sans-serif;
            font-size: 13px;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            padding: 17px 38px;
            display: inline-block;
            cursor: pointer;
            border: 1px solid var(--gold);
            transition: all .4s ease;
            background: transparent;
            text-align: center;
        }

        .btn-gold {
            background: linear-gradient(135deg, var(--gold-bright), var(--gold) 55%, var(--gold-deep));
            color: var(--ink);
            border-color: transparent;
        }

        .btn-gold:hover {
            filter: brightness(1.08);
            transform: translateY(-2px);
            box-shadow: 0 14px 34px rgba(0,0,0,.28);
        }

        .btn-ghost {
            color: var(--cream);
            border-color: var(--line);
        }

        .btn-ghost:hover {
            border-color: var(--gold);
            color: var(--gold-bright);
            transform: translateY(-2px);
        }

        .btn-dark {
            color: var(--burgundy);
            border-color: var(--burgundy);
        }

        .btn-dark:hover {
            background: var(--burgundy);
            color: var(--cream);
            transform: translateY(-2px);
        }

        /* ---------- nav ---------- */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 26px 0;
            transition: all .45s ease;
            background: linear-gradient(to bottom, rgba(13, 10, 9, 0.58), transparent);
        }

        nav.scrolled {
            padding: 16px 0;
            background: rgba(13, 10, 9, 0.92);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line);
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .brand {
            font-family: 'Cormorant Garamond', serif;
            color: var(--cream);
            font-size: 23px;
            letter-spacing: 0.04em;
            line-height: 1;
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
            gap: 34px;
        }

        .nav-links a {
            font-family: 'Jost', sans-serif;
            font-size: 12.5px;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--cream-dim);
            transition: color .3s;
        }

        .nav-links a:hover {
            color: var(--gold-bright);
        }

        .nav-links .btn {
            color: var(--ink);
        }

        .nav-toggle {
            display: none;
        }

        /* ---------- hero ---------- */
        .hero {
            min-height: 100vh;
            position: relative;
            display: flex;
            align-items: center;
            color: var(--text-dark);
            overflow: hidden;
            background-color: var(--cream);
            background-image:(/images/memories-header-01.png)
                linear-gradient(90deg, rgba(246, 238, 221, 0.08) 0%, rgba(246, 238, 221, 0.30) 34%, rgba(246, 238, 221, 0.88) 58%, rgba(246, 238, 221, 0.98) 100%),
                var(--hero-image);
            background-size: cover, cover;
            background-position: center center, center center;
            background-repeat: no-repeat;
        }

        .hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                radial-gradient(90% 60% at 82% 48%, rgba(255,255,255,.34), transparent 70%),
                linear-gradient(to bottom, rgba(13,10,9,.18), transparent 18%, transparent 74%, rgba(58,14,24,.08));
            pointer-events: none;
            z-index: 1;
        }

        .hero-content {
            width: min(1180px, 90vw);
            margin: 0 auto;
            position: relative;
            z-index: 2;
            padding: 150px 0 170px;
            display: flex;
            justify-content: flex-end;
        }

        .hero-copy {
            width: min(600px, 100%);
            text-align: left;
        }

        .hero .eyebrow {
            color: var(--burgundy);
        }

        .hero h1 {
            font-size: clamp(48px, 6.4vw, 80px);
            font-weight: 300;
            margin: 26px 0 8px;
            color: var(--burgundy-deep);
        }

        .hero h1 em {
            font-style: italic;
            color: var(--gold-deep);
            font-weight: 400;
        }

        .hero-sub {
            font-size: clamp(18px, 2.1vw, 23px);
            color: var(--text-dark);
            max-width: 560px;
            margin: 26px 0 40px;
            font-weight: 400;
        }

        .hero-cta {
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
        }

        .hero .btn-ghost {
            color: var(--burgundy);
            border-color: rgba(90, 23, 38, 0.45);
        }

        .hero .btn-ghost:hover {
            color: var(--cream);
            background: var(--burgundy);
            border-color: var(--burgundy);
        }

        .hero-curve {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -1px;
            z-index: 4;
            height: 96px;
            color: var(--cream);
            pointer-events: none;
        }

        .hero-curve svg {
            display: block;
            width: 100%;
            height: 100%;
        }

        .scroll-hint {
            position: absolute;
            bottom: 82px;
            left: 50%;
            transform: translateX(-50%);
            font-family: 'Jost', sans-serif;
            font-size: 10px;
            letter-spacing: 0.4em;
            text-transform: uppercase;
            color: var(--burgundy);
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .scroll-hint .dot {
            width: 1px;
            height: 36px;
            background: linear-gradient(var(--burgundy), transparent);
            animation: drift 2.4s ease-in-out infinite;
        }

        .short-side {
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 18px;
}

.short-price-box {
    width: 100%;
}

.familysearch-mark {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    color: var(--burgundy);
    font-family: 'Jost', sans-serif;
    font-size: 11px;
    letter-spacing: 0.18em;
    text-transform: uppercase;
    text-align: center;
}

.familysearch-mark svg {
    width: 34px;
    height: 34px;
    flex: 0 0 auto;
    color: var(--gold-deep);
}

.familysearch-mark span {
    line-height: 1.45;
}

        /* ---------- reveal animation ---------- */
        .reveal {
            opacity: 0;
            transform: translateY(34px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .reveal.in {
            opacity: 1;
            transform: none;
        }

        [data-load] {
            opacity: 0;
            transform: translateY(26px);
            animation: rise 1.1s cubic-bezier(.2,.7,.2,1) forwards;
        }

        @keyframes rise {
            to {
                opacity: 1;
                transform: none;
            }
        }

        @keyframes drift {
            0%,100% {
                opacity: .3;
            }

            50% {
                opacity: 1;
            }
        }

        /* ---------- sections ---------- */
        section {
            position: relative;
        }

        .section-pad {
            padding: 50px 0;
        }

        .section-head {
            text-align: center;
            margin-bottom: 72px;
        }

        .section-head h2 {
            font-size: clamp(38px, 5.5vw, 62px);
            margin: 22px 0 0;
            color: var(--burgundy-deep);
        }

        .section-head .lede {
            max-width: 600px;
            margin: 22px auto 0;
            color: var(--text-muted);
            font-size: 20px;
        }

        /* intro / statement */
        .statement {
            background: var(--cream);
            text-align: center;
        }

        .statement .big {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(28px, 4.6vw, 52px);
            font-weight: 300;
            line-height: 1.32;
            color: var(--text-dark);
            max-width: 920px;
            margin: 36px auto 0;
        }

        .statement .big em {
            font-style: italic;
            color: var(--burgundy);
        }

       /* ---------- simple coupon short session ---------- */
.short-session {
    background: linear-gradient(180deg, var(--paper), var(--cream));
    padding: 78px 0;
}

.short-coupon {
    display: grid;
    grid-template-columns: 1fr 310px;
    align-items: stretch;
    border: 2px dashed rgba(194, 161, 78, 0.58);
    background: rgba(255, 255, 255, 0.38);
    box-shadow: 0 22px 55px rgba(58, 14, 24, 0.10);
    position: relative;
    overflow: hidden;
}

.short-coupon::before,
.short-coupon::after {
    content: "";
    position: absolute;
    top: 50%;
    width: 34px;
    height: 34px;
    border-radius: 999px;
    background: var(--cream);
    border: 2px dashed rgba(194, 161, 78, 0.58);
    transform: translateY(-50%);
    z-index: 2;
}

.short-coupon::before {
    left: -18px;
}

.short-coupon::after {
    right: -18px;
}

.short-coupon-copy {
    padding: clamp(32px, 5vw, 54px);
}

.coupon-kicker {
    font-family: 'Jost', sans-serif;
    font-size: 11px;
    letter-spacing: 0.26em;
    text-transform: uppercase;
    color: var(--gold-deep);
    margin-bottom: 16px;
}

.short-coupon h2 {
    font-size: clamp(36px, 5vw, 58px);
    color: var(--burgundy-deep);
    margin-bottom: 18px;
}

.short-coupon p {
    max-width: 650px;
    color: var(--text-muted);
    font-size: 20px;
    line-height: 1.55;
}

.coupon-note {
    margin-top: 16px;
    color: var(--text-dark);
}

.short-coupon-offer {
    border-left: 2px dashed rgba(194, 161, 78, 0.58);
    background: linear-gradient(160deg, var(--burgundy), var(--burgundy-deep));
    color: var(--cream);
    padding: 34px 28px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}

.coupon-label {
    font-family: 'Jost', sans-serif;
    font-size: 11px;
    letter-spacing: 0.24em;
    text-transform: uppercase;
    color: var(--gold-bright);
    margin-bottom: 16px;
}

.coupon-price-wrap {
    margin-bottom: 10px;
}

.coupon-old-price {
    display: inline-block;
    position: relative;
    color: rgba(246, 238, 221, 0.58);
    font-family: 'EB Garamond';
    font-size: 40px;
    line-height: 1;
    margin-bottom: 6px;
}

.coupon-old-price::after {
    content: "";
    position: absolute;
    left: -6px;
    right: -6px;
    top: 52%;
    height: 1.5px;
    background: var(--gold-bright);
    transform: rotate(-8deg);
}

.coupon-price {
    font-family: 'EB Garamond';
    font-size: 82px;
    line-height: 0.95;
    color: var(--cream);
}

.coupon-price small {
    font-size: 28px;
    color: var(--gold-bright);
    vertical-align: super;
    margin-right: 4px;
}

.coupon-code {
    margin: 18px 0 24px;
    padding: 10px 12px;
    border: 1px solid rgba(231, 203, 132, 0.36);
    color: var(--cream-dim);
    font-size: 15px;
}

.coupon-code strong {
    display: block;
    color: var(--gold-bright);
    font-family: 'Jost', sans-serif;
    font-size: 13px;
    letter-spacing: 0.15em;
    margin-top: 3px;
}

.short-coupon-offer .btn {
    width: 100%;
}

@media (max-width: 820px) {
    .short-coupon {
        grid-template-columns: 1fr;
    }

    .short-coupon-offer {
        border-left: 0;
        border-top: 2px dashed rgba(194, 161, 78, 0.58);
    }

    .short-coupon::before,
    .short-coupon::after {
        display: none;
    }
}

        /* process */
        .process {
            background: var(--paper);
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 12px;
        }

        .step {
            padding: 38px 26px;
            border-top: 1px solid var(--line);
            position: relative;
        }

        .step-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 58px;
            font-style: italic;
            font-weight: 400;
            color: var(--gold);
            line-height: 1;
            margin-bottom: 18px;
            background: linear-gradient(135deg, var(--gold-bright), var(--gold-deep));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .step h3 {
            font-size: 27px;
            color: var(--burgundy-deep);
            margin-bottom: 12px;
        }

        .step p {
            font-size: 17.5px;
            color: var(--text-muted);
        }

        /* packages */
        .packages {
            background: linear-gradient(165deg, #120c0b, #1f1014 60%, #0d0908);
            color: var(--cream);
        }

        .packages .section-head h2 {
            color: var(--cream);
        }

        .packages .section-head .lede {
            color: var(--cream-dim);
        }

        .pkg-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 22px;
            align-items: stretch;
        }

        .pkg {
            border: 1px solid var(--line);
            background: rgba(255,255,255,0.018);
            padding: 40px 30px 36px;
            display: flex;
            flex-direction: column;
            transition: transform .45s ease, border-color .45s ease, box-shadow .45s ease;
            position: relative;
        }

        .pkg:hover {
            transform: translateY(-8px);
            border-color: var(--gold);
            box-shadow: 0 26px 60px rgba(0,0,0,.5);
        }

        .pkg.featured {
            border-color: var(--gold);
            background: linear-gradient(180deg, rgba(194,161,78,0.10), rgba(90,23,38,0.18));
        }

        .pkg-tag {
            position: absolute;
            top: -13px;
            left: 50%;
            transform: translateX(-50%);
            background: linear-gradient(135deg, var(--gold-bright), var(--gold-deep));
            color: var(--ink);
            font-family: 'Jost', sans-serif;
            font-size: 10px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            padding: 7px 18px;
            white-space: nowrap;
        }

        .pkg-name {
            font-size: 32px;
            color: var(--gold-bright);
            margin-bottom: 4px;
        }

        .pkg-kind {
            font-family: 'Jost', sans-serif;
            font-size: 11px;
            letter-spacing: 0.24em;
            text-transform: uppercase;
            color: var(--cream-dim);
            margin-bottom: 24px;
        }

        .pkg-price {
            font-family: 'Cormorant Garamond', serif;
            font-size: 52px;
            color: var(--cream);
            line-height: 1;
        }

        .pkg-price small {
            font-size: 18px;
            color: var(--gold);
            vertical-align: super;
            margin-right: 2px;
        }

        .pkg-price .unit {
            display: block;
            font-family: 'Jost', sans-serif;
            font-size: 10.5px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-top: 8px;
        }

        .pkg ul {
            list-style: none;
            margin: 26px 0 30px;
            flex: 1;
        }

        .pkg li {
            font-size: 16.5px;
            color: var(--cream-dim);
            padding: 9px 0 9px 26px;
            position: relative;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }

        .pkg li::before {
            content: "✦";
            position: absolute;
            left: 0;
            color: var(--gold);
            font-size: 12px;
            top: 11px;
        }

        .pkg .btn {
            text-align: center;
            width: 100%;
        }

        /* keepsake / what you receive band */
        .receive {
            background: var(--burgundy-deep);
            color: var(--cream);
            text-align: center;
        }

        .receive .row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 40px;
            margin-top: 60px;
        }

        .receive .cell h3 {
            font-size: 27px;
            color: var(--gold-bright);
            margin-bottom: 10px;
        }

        .receive .cell p {
            color: var(--cream-dim);
            font-size: 17px;
        }

        .receive .section-head h2 {
            color: var(--cream);
        }

        /* about */
        .about {
            background: var(--cream);
        }

        .about-grid {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 70px;
            align-items: center;
        }

        .about-portrait {
            aspect-ratio: 4/5;
            background:
                radial-gradient(circle at 50% 40%, rgba(194,161,78,0.22), transparent 70%),
                linear-gradient(160deg, #2a1218, #140b0c);
            border: 1px solid var(--line);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--gold);
            font-family: 'Jost', sans-serif;
            font-size: 11px;
            letter-spacing: 0.3em;
            text-transform: uppercase;
            text-align: center;
            padding: 20px;
            overflow: hidden;
        }

        .about-portrait::after {
            content: "";
            position: absolute;
            inset: 14px;
            border: 1px solid var(--line);
            pointer-events: none;
        }

        .about-portrait img {
            width: 100%;
            max-width: 425px;
            height: auto;
            display: block;
        }

        .about h2 {
            font-size: clamp(34px, 4.8vw, 54px);
            color: var(--burgundy-deep);
            margin: 18px 0 24px;
        }

        .about p {
            color: var(--text-muted);
            margin-bottom: 18px;
        }

        .about .sig {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 30px;
            color: var(--burgundy);
            margin-top: 14px;
        }

        /* faq */
        .faq {
            background: var(--paper);
        }

        .faq-list {
            max-width: 820px;
            margin: 0 auto;
        }

        .faq-item {
            border-top: 1px solid var(--line);
        }

        .faq-item:last-child {
            border-bottom: 1px solid var(--line);
        }

        .faq-q {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            cursor: pointer;
            padding: 28px 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 25px;
            color: var(--burgundy-deep);
        }

        .faq-q .pm {
            color: var(--gold);
            font-size: 26px;
            transition: transform .4s ease;
            font-family: 'EB Garamond', serif;
        }

        .faq-item.open .faq-q .pm {
            transform: rotate(45deg);
        }

        .faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .5s ease;
        }

        .faq-a p {
            padding: 0 4px 28px;
            color: var(--text-muted);
            font-size: 18px;
        }

        /* contact */
        .contact {
            background: linear-gradient(160deg, #0d0a09, #1f0f14 60%, #0a0707);
            color: var(--cream);
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 70px;
            align-items: start;
        }

        .contact h2 {
            font-size: clamp(36px, 5vw, 58px);
            color: var(--cream);
            margin: 18px 0 22px;
        }

        .contact-intro p {
            color: var(--cream-dim);
            margin-bottom: 34px;
            max-width: 420px;
        }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 18px 0;
            border-top: 1px solid var(--line);
        }

        .contact-detail:last-child {
            border-bottom: 1px solid var(--line);
        }

        .contact-detail .lbl {
            font-family: 'Jost', sans-serif;
            font-size: 10.5px;
            letter-spacing: 0.26em;
            text-transform: uppercase;
            color: var(--gold);
            width: 70px;
        }

        .contact-detail .val {
            font-size: 19px;
            color: var(--cream);
        }

        .contact-detail a:hover {
            color: var(--gold-bright);
        }

        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .field {
            display: flex;
            flex-direction: column;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        .field label {
            font-family: 'Jost', sans-serif;
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 9px;
        }

        .field input,
        .field select,
        .field textarea {
            background: rgba(255,255,255,0.03);
            border: 1px solid var(--line);
            color: var(--cream);
            font-family: 'EB Garamond', serif;
            font-size: 18px;
            padding: 15px 16px;
            transition: border-color .3s, background .3s;
        }

        .field input:focus,
        .field select:focus,
        .field textarea:focus {
            outline: none;
            border-color: var(--gold);
            background: rgba(255,255,255,0.05);
        }

        .field select {
            appearance: none;
            cursor: pointer;
        }

        .field select option {
            background: var(--ink);
            color: var(--cream);
        }

        .field textarea {
            resize: vertical;
            min-height: 130px;
        }

        .field .err {
            color: #e08a8a;
            font-size: 14px;
            margin-top: 7px;
            font-family: 'Jost', sans-serif;
            letter-spacing: 0.04em;
        }

        .hp {
            position: absolute;
            left: -9999px;
            opacity: 0;
        }

        .form-note {
            grid-column: 1/-1;
            font-size: 14px;
            color: var(--text-muted);
        }

        .flash {
            grid-column: 1 / -1;
            border: 1px solid var(--gold);
            background: rgba(194,161,78,0.10);
            color: var(--gold-bright);
            padding: 18px 22px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .flash::before {
            content: "✦";
            color: var(--gold);
        }

        /* footer */
        footer {
            background: var(--ink);
            color: var(--cream-dim);
            padding: 64px 0 40px;
            text-align: center;
        }

        footer .brand {
            display: inline-block;
            margin-bottom: 22px;
        }

        footer .f-links {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 26px;
        }

        footer .f-links a {
            font-family: 'Jost', sans-serif;
            font-size: 12px;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--cream-dim);
            transition: color .3s;
        }

        footer .f-links a:hover {
            color: var(--gold-bright);
        }

        footer .copy {
            font-size: 13px;
            color: var(--text-muted);
            font-family: 'Jost', sans-serif;
            letter-spacing: 0.08em;
        }

        /* ---------- responsive ---------- */
        @media (max-width: 1080px) {
            .nav-links {
                gap: 24px;
            }

            .nav-links a {
                font-size: 11px;
            }
        }

        @media (max-width: 960px) {
            .hero {
                min-height: auto;
                align-items: flex-start;
                padding: 390px 0 90px;
                background-image:
                    linear-gradient(to bottom, rgba(246, 238, 221, 0.02) 0%, rgba(246, 238, 221, 0.10) 30%, rgba(246, 238, 221, 0.88) 48%, var(--cream) 62%, var(--cream) 100%),
                    var(--hero-image);
                background-size: cover, auto 470px;
                background-position: left top, 32% top;
            }

            .hero-content {
                padding: 0;
                justify-content: center;
            }

            .hero-copy {
                text-align: center;
                background: rgba(246, 238, 221, 0.92);
                border: 1px solid rgba(194,161,78,0.28);
                padding: 34px 28px;
                box-shadow: 0 18px 50px rgba(58,14,24,0.10);
            }

            .hero-sub {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-cta {
                justify-content: center;
            }

            .scroll-hint {
                display: none;
            }

            .steps {
                grid-template-columns: repeat(2, 1fr);
            }

            .pkg-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .short-card,
            .about-grid,
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 44px;
            }

            .receive .row {
                grid-template-columns: 1fr;
                gap: 28px;
            }

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
                background: rgba(13,10,9,0.97);
                padding: 32px 7vw 38px;
                align-items: flex-start;
                border-bottom: 1px solid var(--line);
            }

            .nav-toggle {
                display: block;
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
        }

        @media (max-width: 560px) {
            body {
                font-size: 18px;
            }

            .section-pad {
                padding: 55px 0;
            }

            .hero {
                padding: 370px 0 64px 0px;
                background-size: cover, auto 410px;
                background-position: left top, 30% top;
            }

            .hero-copy {
                padding: 28px 22px;
            }

            .hero-cta {
                flex-direction: column;
            }

            .hero-cta .btn,
            .short-price-box .btn {
                width: 100%;
            }

            .short-session {
                padding: 78px 0;
            }

            .short-card {
                padding: 30px 22px;
            }

            .short-card::before {
                inset: 10px;
            }

            .steps,
            .pkg-grid {
                grid-template-columns: 1fr;
            }

            form {
                grid-template-columns: 1fr;
            }

            .contact-detail {
                align-items: flex-start;
                flex-direction: column;
                gap: 4px;
            }

            .contact-detail .lbl {
                width: auto;
            }
        }
    </style>
    @endverbatim
</head>
<body>

    <!-- ============ NAV ============ -->
    <nav id="nav">
        <div class="wrap nav-inner">
            <a href="#top" class="brand">
                Memories <span>&amp;</span> Sharing
                <small>Legacy Preservation</small>
            </a>

            <div class="nav-links" id="navLinks">
               
                <a href="#short-session">30 Min Session</a>
                <a href="#process">Process</a>
                <a href="#packages">Packages</a>
                <a href="#about">About</a>
                <a href="#contact" class="btn btn-gold">Begin a Story</a>
            </div>

            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    <!-- ============ HERO ============ -->
    <header class="hero" id="top" style="background-image: url('{{ asset('/images/memories-header-01.png') }}');">
        

        <div class="hero-content">
            <div class="hero-copy">
                <div class="eyebrow" data-load style="animation-delay:.1s">Legacy Preservation</div>

                <h1 data-load style="animation-delay:.25s">
                    Every family has <br><em>stories worth saving.</em>
                </h1>

                <p class="hero-sub" data-load style="animation-delay:.5s">
                    Heirloom recordings of the people you love — in their own voice, in their own words —
                    kept for the generations who come after.
                </p>

                <div class="hero-cta" data-load style="animation-delay:.7s">
                    <a href="#contact" class="btn btn-gold">Begin a Story</a>
                    <a href="#short-session" class="btn btn-ghost">Start Small</a>
                </div>
            </div>
        </div>

        <div class="scroll-hint">
            <span>Scroll</span>
            <span class="dot"></span>
        </div>

        <div class="hero-curve" aria-hidden="true">
            <svg viewBox="0 0 1440 120" preserveAspectRatio="none">
                <path fill="currentColor" d="M0,62 C160,108 332,126 520,95 C705,65 815,12 1010,24 C1175,34 1300,76 1440,44 L1440,120 L0,120 Z"></path>
            </svg>
        </div>
    </header>

    <!-- ============ STATEMENT ============ -->
    <section class="statement section-pad" id="story">
        <div class="wrap reveal">
            <span class="gold-rule"><span class="eyebrow">Why It Matters</span></span>
            <p class="big">
                The stories we mean to ask about are often the ones we never do — until the chance is gone.
                I sit with the people who matter to you and capture <em>the laugh, the voice, the memory</em>,
                so it lives on long after the moment passes.
            </p>
        </div>
    </section>

   {{-- ============ SHORT SESSION / COUPON CTA ============ --}}
<section class="short-session" id="short-session">
    <div class="wrap">
        <div class="short-coupon reveal">
            <div class="short-coupon-copy">
                <span class="gold-rule"><span class="eyebrow" style="margin-bottom:10px">FamilySearch</span></span>
                

                <h2>A short &amp; sweet session for family memories.</h2>

                <p>
                    A simple 30-minute guided audio session to capture a handful of favorite memories,
                    family stories, words of love, testimony, recipe stories, or little details your family
                    will want to hear again.
                </p>

                <p class="coupon-note">
                    Easy, heartfelt, and low-pressure — a meaningful audio keepsake you can save,
                    share, and add to FamilySearch Memories when file requirements allow.
                </p>
                <div style="margin: auto; align-items: center; width: 280px; margin-top: 11px;">
                    <span class="gold-rule"><span class="eyebrow"><img src="https://edge.fscdn.org/assets/img/certification/FamilySearchLogo/FSMosaicTreeLogo-ea9718ee4daec6abe5ce7ac8cf6ff331.png" style="height: 40px; margin: auto; width: 154px;"></span></span>
    </div>
            </div>

             <div class="short-coupon-offer">
                <div class="coupon-label">30 Minute Session</div>

                <div class="coupon-price-wrap">
                    <div class="coupon-old-price">$150</div>

                    <div class="coupon-price">
                        <small>$</small>100
                    </div>
                </div>

                <div class="coupon-code">
                    Coupon Code:
                    <strong>FAMILIESAREFOREVER</strong>
                </div>

                <a
                    href="https://buy.stripe.com/test_00waEXfyHeIR0vc7bCcfK00?prefilled_promo_code=FAMILIESAREFOREVER"
                    class="btn btn-gold"
                >
                    Book This Session
                </a>
                {{-- =======<a
                    href="https://buy.stripe.com/7sY00jfGB3u20HjeQC8so00?prefilled_promo_code=FAMILIESAREFOREVER"
                    class="btn btn-gold"
                >
                    Book This Session
                </a> ======= --}}
            </div>
        </div>
    </div>
</section>

    <!-- ============ PROCESS ============ -->
    <section class="process section-pad" id="process">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">The Experience</span></span>
                <h2>How a story unfolds</h2>
                <p class="lede">
                    Gentle, unhurried, and built around the comfort of the person whose story we're keeping.
                </p>
            </div>

            <div class="steps">
                <div class="step reveal">
                    <div class="step-num">01</div>
                    <h3>We talk first</h3>
                    <p>A relaxed conversation to understand whose story we're keeping and what matters most to your family.</p>
                </div>

                <div class="step reveal" style="transition-delay:.1s">
                    <div class="step-num">02</div>
                    <h3>Thoughtful prompts</h3>
                    <p>Questions tailored to a life — so the moments that should never be forgotten are gently drawn out.</p>
                </div>

                <div class="step reveal" style="transition-delay:.2s">
                    <div class="step-num">03</div>
                    <h3>The recording</h3>
                    <p>In the comfort of home, we capture the voice, the stories, and the laughter — patiently, on their terms.</p>
                </div>

                <div class="step reveal" style="transition-delay:.3s">
                    <div class="step-num">04</div>
                    <h3>Your keepsake</h3>
                    <p>Beautifully edited and delivered as an heirloom your family can return to for generations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ PACKAGES ============ -->
    <section class="packages section-pad" id="packages">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">Keepsakes</span></span>
                <h2>Choose how a life is kept</h2>
                <p class="lede">
                    Each session is unhurried and guided. Every keepsake is professionally recorded, edited, and delivered to you.
                </p>
            </div>

            <div class="pkg-grid">

                <div class="pkg reveal">
                    <div class="pkg-name">The Keepsake</div>
                    <div class="pkg-kind">Audio Story</div>
                    <div class="pkg-price"><small>$</small>400<span class="unit">One 3-hour session</span></div>

                    <ul>
                        <li>A single 3-hour recording session</li>
                        <li>Professional audio interview</li>
                        <li>Guided, personalized story prompts</li>
                        <li>Their story on a keepsake flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/bJe3cv0LH1lU61DcIu8so01" class="btn btn-ghost" data-pkg="The Keepsake — Audio ($400)">
                        Choose Keepsake
                    </a>
                </div>

                <div class="pkg reveal" style="transition-delay:.1s">
                    <div class="pkg-name">The Portrait</div>
                    <div class="pkg-kind">Audio &amp; Video</div>
                    <div class="pkg-price"><small>$</small>800<span class="unit">One 4-hour session</span></div>

                    <ul>
                        <li>A single 4-hour recording session</li>
                        <li>Professional audio <em>and</em> video</li>
                        <li>Guided interview with gentle direction</li>
                        <li>Edited keepsake film on a flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/28E28r0LH5Ca9dP23Q8so02" class="btn btn-ghost" data-pkg="The Portrait — Audio & Video ($800)">
                        Choose Portrait
                    </a>
                </div>

                <div class="pkg featured reveal" style="transition-delay:.2s">
                    <div class="pkg-tag">Most Loved</div>
                    <div class="pkg-name">The Chronicle</div>
                    <div class="pkg-kind">Two Days &amp; Photo Restoration</div>
                    <div class="pkg-price"><small>$</small>1,200<span class="unit">Two days · up to 6 hours</span></div>

                    <ul>
                        <li>Two recording days, up to 6 hours total</li>
                        <li>Professional audio &amp; video</li>
                        <li>Photo restoration — cherished photos scanned &amp; restored</li>
                        <li>Edited film &amp; restored photos on a keepsake flash drive</li>
                    </ul>

                    <a href="https://buy.stripe.com/3cIdR9gKFfcK1Ln9wi8so03" class="btn btn-gold" data-pkg="The Chronicle — Two Days & Photo Restoration ($1,200)">
                        Choose Chronicle
                    </a>
                </div>

                <div class="pkg reveal" style="transition-delay:.3s">
                    <div class="pkg-name">The Heirloom</div>
                    <div class="pkg-kind">Family &amp; Photo Restoration</div>
                    <div class="pkg-price"><small>$</small>1,800<span class="unit">The complete keepsake</span></div>

                    <ul>
                        <li>Everything within The Chronicle</li>
                        <li>Multiple family members included</li>
                        <li>Extended, woven-together interviews</li>
                        <li>Photo restoration of treasured family photos</li>
                        <li>Plus 4 additional keepsake flash drives to share</li>
                    </ul>

                    <a href="https://buy.stripe.com/dRm8wPamhaWufCd23Q8so04" class="btn btn-ghost" data-pkg="The Heirloom — Family & Photo Restoration ($1,800)">
                        Choose Heirloom
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- ============ WHAT YOU RECEIVE ============ -->
    <section class="receive section-pad">
        <div class="wrap reveal">
            <div class="section-head" style="margin-bottom:0;">
                <span class="gold-rule"><span class="eyebrow" style="color:var(--gold-bright)">The Promise</span></span>
                <h2>More than a recording</h2>
            </div>

            <div class="row">
                <div class="cell">
                    <h3>Their true voice</h3>
                    <p>Not a transcript or a summary — the actual voice, told the way only they could tell it.</p>
                </div>

                <div class="cell">
                    <h3>Kept beautifully</h3>
                    <p>Professionally edited with care and delivered on a keepsake flash drive your family will treasure.</p>
                </div>

                <div class="cell">
                    <h3>Yours for generations</h3>
                    <p>A keepsake that children and grandchildren can return to long into the future.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ ABOUT ============ -->
    <section class="about section-pad" id="about">
        <div class="wrap about-grid">
            <div class="about-portrait reveal">
                <img src="{{ asset('images/Shalyce-Memories-Profile.jpg') }}" alt="Shalyce, founder of Memories Are For Sharing">
            </div>

            <div class="reveal">
                <span class="gold-rule"><span class="eyebrow">Your Storyteller</span></span>
                <h2>Hello, I'm Shalyce</h2>

                <p>
                    I believe the most precious things we own aren't things at all — they're people; and the stories
                    that get passed down at the dinner table, and far too often, lost.
                </p>

                <p>
                    I created Memories Are For Sharing to make sure those stories are kept. With patience and
                    real care, I sit with your loved ones and help them share the moments that made them who they
                    are — so your family can hold onto their voice for a lifetime.
                </p>

                <p>
                    Whether it's a grandparent's childhood, a parent's love story, or a whole family's history,
                    I'd be honored to help you keep it.
                </p>

                <p class="sig">— Shalyce</p>
            </div>
        </div>
    </section>

    <!-- ============ FAQ ============ -->
    <section class="faq section-pad">
        <div class="wrap">
            <div class="section-head reveal">
                <span class="gold-rule"><span class="eyebrow">Good To Know</span></span>
                <h2>Questions, answered</h2>
            </div>

            <div class="faq-list reveal">
                <div class="faq-item">
                    <button class="faq-q">Where do the recordings take place? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Most often in the comfort of your own home, where people feel most at ease and the stories come naturally. I'm happy to discuss the right setting for your family.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">Do I need to prepare questions? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Not at all. I prepare thoughtful, personalized prompts ahead of time and guide the conversation gently — though you're always welcome to suggest the topics that matter most to you.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">What if my loved one is elderly or unwell? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Sessions are paced entirely around their comfort, with as many breaks as needed. Capturing a story while there's still time is one of the most meaningful things I do, and I treat it with great care.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">How soon will we receive the finished keepsake? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Timelines vary by package, but I'll always share a clear estimate before we begin so you know exactly what to expect.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">What happens to our original photos? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Your originals are treated as the irreplaceable treasures they are. I scan them carefully, restore the digital copies, and return every original photo to you safe and unaltered — they never leave your family for good.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-q">Can we customize a package? <span class="pm">+</span></button>
                    <div class="faq-a">
                        <p>Absolutely. Every family is different — reach out and we'll shape something that fits your story and your budget.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============ CONTACT ============ -->
    <section class="contact section-pad" id="contact">
        <div class="wrap contact-grid">
            <div class="contact-intro reveal">
                <span class="gold-rule"><span class="eyebrow" style="color:var(--gold-bright)">Begin</span></span>
                <h2>Let's keep their story</h2>

                <p>
                    Tell me a little about the story you'd like to preserve, and I'll be in touch to talk through the details —
                    gently and with no pressure.
                </p>

                <div class="contact-detail">
                    <span class="lbl">Email</span>
                    <span class="val"><a href="mailto:shalyce@memoriesareforsharing.com">shalyce@memoriesareforsharing.com</a></span>
                </div>

                <div class="contact-detail">
                    <span class="lbl">Phone</span>
                    <span class="val"><a href="tel:+18016451948">(801) 645-1948</a></span>
                </div>
            </div>

            <div class="reveal">
                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    @if (session('success'))
                        <div class="flash">{{ session('success') }}</div>
                    @endif

                    <div class="hp" aria-hidden="true">
                        <label>HP Token</label>
                        <input type="text" name="hp_token" tabindex="-1" autocomplete="off">
                    </div>

                    <div class="field">
                        <label for="name">Your Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}">
                        @error('phone') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field">
                        <label for="package">Package of Interest</label>
                        <select id="package" name="package">
                            <option value="Not sure yet">Not sure yet — help me decide</option>

                            <option value="Short & Simple — 30 Minute Session ($150)" @selected(old('package')==='Short & Simple — 30 Minute Session ($150)')>
                                Short &amp; Simple — 30 Minute Session · $150
                            </option>

                            <option value="The Keepsake — Audio ($400)" @selected(old('package')==='The Keepsake — Audio ($400)')>
                                The Keepsake — Audio · $400
                            </option>

                            <option value="The Portrait — Audio & Video ($800)" @selected(old('package')==='The Portrait — Audio & Video ($800)')>
                                The Portrait — Audio &amp; Video · $800
                            </option>

                            <option value="The Chronicle — Two Days & Photo Restoration ($1,200)" @selected(old('package')==='The Chronicle — Two Days & Photo Restoration ($1,200)')>
                                The Chronicle — Two Days &amp; Photo Restoration · $1,200
                            </option>

                            <option value="The Heirloom — Family & Photo Restoration ($1,800)" @selected(old('package')==='The Heirloom — Family & Photo Restoration ($1,800)')>
                                The Heirloom — Family &amp; Photo Restoration · $1,800
                            </option>
                        </select>
                    </div>

                    <div class="field full">
                        <label for="message">Tell me about the story you'd like to keep</label>
                        <textarea id="message" name="message" required>{{ old('message') }}</textarea>
                        @error('message') <span class="err">{{ $message }}</span> @enderror
                    </div>

                    <div class="field full">
                        <button type="submit" class="btn btn-gold">Send My Inquiry</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ============ FOOTER ============ -->
    <footer>
        <div class="wrap">
            <a href="#top" class="brand">
                Memories <span>&amp;</span> Sharing
                <small>Legacy Preservation</small>
            </a>

            <div class="f-links">
                <a href="#short-session">30 Min Session</a>
                <a href="#process">Process</a>
                <a href="#packages">Packages</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>

            <p class="copy">&copy; {{ date('Y') }} Memories Are For Sharing · Recording life stories with care.</p>
        </div>
    </footer>

    @verbatim
    <script>
        const nav = document.getElementById('nav');
        const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);

        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });

        const toggle = document.getElementById('navToggle');
        const links = document.getElementById('navLinks');

        toggle.addEventListener('click', () => links.classList.toggle('show'));

        links.querySelectorAll('a').forEach(a => {
            a.addEventListener('click', () => links.classList.remove('show'));
        });

        const io = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('in');
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.14 });

        document.querySelectorAll('.reveal').forEach(el => io.observe(el));

        document.querySelectorAll('.faq-q').forEach(q => {
            q.addEventListener('click', () => {
                const item = q.parentElement;
                const open = item.classList.contains('open');

                document.querySelectorAll('.faq-item').forEach(i => {
                    i.classList.remove('open');
                    i.querySelector('.faq-a').style.maxHeight = null;
                });

                if (!open) {
                    item.classList.add('open');

                    const a = item.querySelector('.faq-a');
                    a.style.maxHeight = a.scrollHeight + 'px';
                }
            });
        });

        document.querySelectorAll('[data-pkg]').forEach(btn => {
            btn.addEventListener('click', () => {
                const want = btn.getAttribute('data-pkg').replace(/&amp;/g, '&');
                const sel = document.getElementById('package');

                if (!sel) return;

                [...sel.options].forEach(o => {
                    if (o.value === want) {
                        sel.value = want;
                    }
                });
            });
        });

        if (window.location.hash === '#contact') {
            setTimeout(() => {
                document.getElementById('contact').scrollIntoView({ behavior: 'smooth' });
            }, 300);
        }
    </script>
    @endverbatim
</body>
</html>