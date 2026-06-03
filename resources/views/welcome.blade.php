<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Preserve your memories, your voice, and your legacy for the people you love. Legacy preservation services by Shalyce — professional interviews, films, and heirloom documentaries.">
    <title>Memories Are For Sharing | Legacy Preservation by Shalyce</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500&family=Jost:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- CSRF for contact form --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        /* ============================================================
           CSS CUSTOM PROPERTIES
        ============================================================ */
        :root {
            --navy:       #1a2744;
            --navy-light: #243260;
            --forest:     #3d5c3a;
            --forest-mid: #4e7549;
            --sage:       #7a9e76;
            --sage-light: #a8c4a4;
            --cream:      #f7f3ec;
            --parchment:  #ede8de;
            --warm-white: #faf8f4;
            --gold:       #b8955a;
            --gold-light: #d4af7a;
            --text-dark:  #1e1a14;
            --text-mid:   #3d3628;
            --text-soft:  #6b6254;

            --serif: 'Cormorant Garamond', Georgia, serif;
            --sans:  'Jost', system-ui, sans-serif;

            --section-pad: clamp(4rem, 8vw, 7rem);
            --container:   min(1180px, 92vw);
        }

        /* ============================================================
           RESET & BASE
        ============================================================ */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html { scroll-behavior: smooth; font-size: 16px; }

        body {
            font-family: var(--sans);
            background: var(--warm-white);
            color: var(--text-dark);
            overflow-x: hidden;
            line-height: 1.7;
        }

        img { display: block; max-width: 100%; }
        a { color: inherit; text-decoration: none; }

        .container {
            width: var(--container);
            margin-inline: auto;
        }

        /* ============================================================
           NAVIGATION
        ============================================================ */
        nav {
            position: fixed;
            top: 0; left: 0; right: 0;
            z-index: 100;
            background: rgba(26, 39, 68, 0.96);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid rgba(184, 149, 90, 0.25);
            transition: box-shadow 0.3s;
        }

        nav.scrolled { box-shadow: 0 4px 32px rgba(0,0,0,0.18); }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
            width: var(--container);
            margin-inline: auto;
        }

        .nav-logo {
            font-family: var(--serif);
            font-size: 1.2rem;
            font-weight: 500;
            color: var(--cream);
            letter-spacing: 0.03em;
            line-height: 1.2;
        }

        .nav-logo span {
            display: block;
            font-size: 0.65rem;
            font-family: var(--sans);
            font-weight: 400;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: var(--gold-light);
            margin-top: 1px;
        }

        .nav-links {
            display: flex;
            gap: 2.2rem;
            list-style: none;
        }

        .nav-links a {
            font-size: 0.78rem;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: rgba(247, 243, 236, 0.8);
            transition: color 0.2s;
            font-weight: 500;
        }

        .nav-links a:hover { color: var(--gold-light); }

        .nav-cta {
            background: var(--gold);
            color: var(--navy) !important;
            padding: 0.5rem 1.2rem;
            border-radius: 2px;
            font-weight: 600 !important;
            transition: background 0.2s !important;
        }

        .nav-cta:hover { background: var(--gold-light) !important; color: var(--navy) !important; }

        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
            padding: 4px;
        }

        .hamburger span {
            display: block;
            width: 24px;
            height: 2px;
            background: var(--cream);
            transition: all 0.3s;
        }

        /* ============================================================
           HERO
        ============================================================ */
        #hero {
            min-height: 100svh;
            background: var(--navy);
            position: relative;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero-bg-pattern {
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 80% 60% at 70% 50%, rgba(61, 92, 58, 0.22) 0%, transparent 70%),
                radial-gradient(ellipse 50% 80% at 20% 80%, rgba(184, 149, 90, 0.08) 0%, transparent 60%);
        }

        /* Decorative corner flourishes */
        .hero-bg-pattern::before {
            content: '';
            position: absolute;
            top: 0; right: 0;
            width: 55%;
            height: 100%;
            background: linear-gradient(135deg, transparent 40%, rgba(61,92,58,0.12) 100%);
            clip-path: polygon(30% 0%, 100% 0%, 100% 100%, 0% 100%);
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            width: var(--container);
            margin-inline: auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            padding-top: 80px;
        }

        .hero-text { animation: fadeUp 1s ease both; }

        .hero-eyebrow {
            font-family: var(--sans);
            font-size: 0.72rem;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 1.4rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .hero-eyebrow::before,
        .hero-eyebrow::after {
            content: '';
            display: block;
            height: 1px;
            width: 36px;
            background: var(--gold);
            opacity: 0.6;
        }

        .hero-headline {
            font-family: var(--serif);
            font-size: clamp(3rem, 5.5vw, 5.2rem);
            font-weight: 600;
            line-height: 1.05;
            color: var(--cream);
            margin-bottom: 0.4rem;
        }

        .hero-headline em {
            font-style: italic;
            font-weight: 300;
            color: var(--sage-light);
        }

        .hero-subhead {
            font-family: var(--serif);
            font-size: clamp(1.15rem, 2vw, 1.5rem);
            font-weight: 300;
            font-style: italic;
            color: var(--gold-light);
            margin-bottom: 2rem;
            letter-spacing: 0.02em;
        }

        .hero-body {
            color: rgba(247, 243, 236, 0.75);
            font-size: 1.05rem;
            max-width: 480px;
            margin-bottom: 2.8rem;
            line-height: 1.8;
        }

        .hero-actions {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--gold);
            color: var(--navy);
            font-family: var(--sans);
            font-size: 0.82rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.95rem 2rem;
            border-radius: 2px;
            border: none;
            cursor: pointer;
            transition: all 0.25s;
        }

        .btn-primary:hover {
            background: var(--gold-light);
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(184, 149, 90, 0.35);
        }

        .btn-outline {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: transparent;
            color: var(--cream);
            font-family: var(--sans);
            font-size: 0.82rem;
            font-weight: 500;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 0.95rem 2rem;
            border-radius: 2px;
            border: 1px solid rgba(247, 243, 236, 0.35);
            cursor: pointer;
            transition: all 0.25s;
            text-decoration: none;
        }

        .btn-outline:hover {
            border-color: var(--cream);
            background: rgba(247, 243, 236, 0.06);
        }

        .hero-visual {
            animation: fadeUp 1s 0.2s ease both;
            position: relative;
        }

        .hero-photo-frame {
            position: relative;
            border-radius: 4px;
            overflow: hidden;
            aspect-ratio: 4/5;
            background: var(--navy-light);
        }

        .hero-photo-frame img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            opacity: 0.88;
        }

        /* Decorative frame border */
        .hero-photo-frame::after {
            content: '';
            position: absolute;
            inset: 12px;
            border: 1px solid rgba(184, 149, 90, 0.4);
            border-radius: 2px;
            pointer-events: none;
        }

        .hero-photo-caption {
            position: absolute;
            bottom: 0; left: 0; right: 0;
            background: linear-gradient(transparent, rgba(26,39,68,0.9));
            padding: 3rem 1.5rem 1.5rem;
        }

        .hero-photo-caption p {
            font-family: var(--serif);
            font-style: italic;
            font-size: 1.1rem;
            color: var(--cream);
            text-align: center;
            opacity: 0.9;
        }

        /* Decorative offset accent box */
        .hero-accent-box {
            position: absolute;
            top: -16px; right: -16px;
            width: 120px;
            height: 120px;
            border: 2px solid rgba(184, 149, 90, 0.3);
            border-radius: 2px;
            z-index: -1;
        }

        .hero-stats {
            position: absolute;
            bottom: -24px;
            left: -24px;
            background: var(--forest);
            color: var(--cream);
            padding: 1.2rem 1.6rem;
            border-radius: 3px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.3);
        }

        .hero-stats strong {
            display: block;
            font-family: var(--serif);
            font-size: 2rem;
            font-weight: 600;
            line-height: 1;
        }

        .hero-stats span {
            font-size: 0.72rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            opacity: 0.8;
        }

        /* ============================================================
           VALUES STRIP
        ============================================================ */
        #values {
            background: var(--forest);
            padding: 2.5rem 0;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0;
        }

        .value-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1.5rem 1.5rem;
            border-right: 1px solid rgba(255,255,255,0.1);
            gap: 0.7rem;
        }

        .value-item:last-child { border-right: none; }

        .value-icon {
            width: 44px;
            height: 44px;
            border: 1px solid rgba(255,255,255,0.35);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--cream);
        }

        .value-icon svg { width: 20px; height: 20px; }

        .value-label {
            font-size: 0.82rem;
            color: rgba(255,255,255,0.85);
            font-weight: 400;
            letter-spacing: 0.03em;
            line-height: 1.4;
        }

        /* ============================================================
           ABOUT / INTRO
        ============================================================ */
        #about {
            padding: var(--section-pad) 0;
            background: var(--warm-white);
        }

        .about-inner {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: clamp(3rem, 6vw, 7rem);
            align-items: center;
        }

        .about-photo-wrap {
            position: relative;
        }

        .about-photo {
            width: 100%;
            aspect-ratio: 3/4;
            object-fit: cover;
            border-radius: 3px;
            box-shadow: 0 24px 60px rgba(0,0,0,0.14);
        }

        .about-photo-bg {
            position: absolute;
            inset: -16px -16px 16px 16px;
            background: var(--parchment);
            border-radius: 3px;
            z-index: -1;
        }

        .about-quote-card {
            position: absolute;
            bottom: -2rem;
            right: -2rem;
            background: var(--navy);
            color: var(--cream);
            padding: 1.4rem 1.6rem;
            border-radius: 3px;
            max-width: 200px;
            box-shadow: 0 16px 40px rgba(0,0,0,0.2);
        }

        .about-quote-card blockquote {
            font-family: var(--serif);
            font-style: italic;
            font-size: 1rem;
            line-height: 1.5;
            color: var(--cream);
        }

        .about-quote-card cite {
            display: block;
            margin-top: 0.6rem;
            font-size: 0.7rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--gold-light);
            font-style: normal;
        }

        .section-eyebrow {
            font-size: 0.72rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--forest-mid);
            font-weight: 600;
            margin-bottom: 0.8rem;
            display: flex;
            align-items: center;
            gap: 0.7rem;
        }

        .section-eyebrow::after {
            content: '';
            display: block;
            height: 1px;
            width: 32px;
            background: var(--sage);
        }

        .section-title {
            font-family: var(--serif);
            font-size: clamp(2.2rem, 4vw, 3.4rem);
            font-weight: 600;
            line-height: 1.1;
            color: var(--navy);
            margin-bottom: 1.2rem;
        }

        .section-title em {
            font-style: italic;
            font-weight: 400;
            color: var(--forest);
        }

        .section-body {
            color: var(--text-soft);
            font-size: 1.05rem;
            line-height: 1.85;
            margin-bottom: 1.4rem;
        }

        .ornament {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            margin: 1.8rem 0;
            color: var(--gold);
        }

        .ornament::before,
        .ornament::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(to right, transparent, var(--gold-light));
        }

        .ornament::after {
            background: linear-gradient(to left, transparent, var(--gold-light));
        }

        .ornament svg { width: 18px; height: 18px; flex-shrink: 0; }

        /* ============================================================
           PACKAGES / PRICING
        ============================================================ */
        #packages {
            padding: var(--section-pad) 0;
            background: var(--cream);
            position: relative;
            overflow: hidden;
        }

        #packages::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--navy), var(--forest), var(--gold));
        }

        .packages-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 4rem;
        }

        .packages-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            align-items: start;
        }

        .package-card {
            background: var(--warm-white);
            border-radius: 4px;
            overflow: hidden;
            box-shadow: 0 4px 24px rgba(0,0,0,0.07);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid rgba(0,0,0,0.06);
            position: relative;
        }

        .package-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 48px rgba(0,0,0,0.12);
        }

        .package-card.featured {
            border-color: var(--forest);
            box-shadow: 0 8px 40px rgba(61,92,58,0.18);
        }

        .package-badge {
            background: var(--forest);
            color: var(--cream);
            text-align: center;
            padding: 0.45rem 1rem;
            font-size: 0.68rem;
            font-weight: 600;
            letter-spacing: 0.18em;
            text-transform: uppercase;
        }

        .package-card:not(.featured) .package-badge {
            background: var(--navy);
        }

        .package-body {
            padding: 2rem 1.8rem 2.2rem;
        }

        .package-number {
            font-size: 0.68rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: var(--text-soft);
            margin-bottom: 0.4rem;
        }

        .package-name {
            font-family: var(--serif);
            font-size: 1.7rem;
            font-weight: 700;
            color: var(--navy);
            line-height: 1.1;
            margin-bottom: 0.6rem;
        }

        .package-divider {
            width: 32px;
            height: 2px;
            background: var(--gold);
            margin: 0.8rem 0;
        }

        .package-price {
            font-family: var(--serif);
            font-size: 2rem;
            font-weight: 600;
            color: var(--forest);
            margin-bottom: 1.4rem;
            line-height: 1;
        }

        .package-price span {
            font-size: 1rem;
            font-weight: 400;
            color: var(--text-soft);
        }

        .package-features {
            list-style: none;
            margin-bottom: 1.8rem;
        }

        .package-features li {
            display: flex;
            align-items: flex-start;
            gap: 0.7rem;
            font-size: 0.92rem;
            color: var(--text-mid);
            padding: 0.42rem 0;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            line-height: 1.5;
        }

        .package-features li:last-child { border-bottom: none; }

        .feature-check {
            color: var(--forest-mid);
            flex-shrink: 0;
            margin-top: 2px;
        }

        .package-tagline {
            text-align: center;
            font-family: var(--serif);
            font-style: italic;
            font-size: 0.95rem;
            color: var(--text-soft);
            padding-top: 1rem;
            border-top: 1px solid var(--parchment);
        }

        /* ============================================================
           HOW IT WORKS
        ============================================================ */
        #process {
            padding: var(--section-pad) 0;
            background: var(--navy);
            position: relative;
            overflow: hidden;
        }

        #process::after {
            content: '"';
            position: absolute;
            right: -2%;
            top: -10%;
            font-family: var(--serif);
            font-size: 40vw;
            color: rgba(255,255,255,0.02);
            line-height: 1;
            pointer-events: none;
            user-select: none;
        }

        .process-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 4rem;
        }

        .process-header .section-title { color: var(--cream); }
        .process-header .section-eyebrow { color: var(--gold-light); }
        .process-header .section-eyebrow::after { background: var(--gold); }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1px;
            background: rgba(255,255,255,0.08);
            border-radius: 4px;
            overflow: hidden;
        }

        .step {
            background: var(--navy);
            padding: 2.2rem 1.8rem;
            position: relative;
            transition: background 0.3s;
        }

        .step:hover { background: var(--navy-light); }

        .step-number {
            font-family: var(--serif);
            font-size: 3.5rem;
            font-weight: 700;
            color: rgba(184, 149, 90, 0.18);
            line-height: 1;
            margin-bottom: 0.8rem;
        }

        .step-title {
            font-family: var(--serif);
            font-size: 1.2rem;
            font-weight: 600;
            color: var(--cream);
            margin-bottom: 0.7rem;
        }

        .step-desc {
            font-size: 0.9rem;
            color: rgba(247, 243, 236, 0.6);
            line-height: 1.7;
        }

        /* ============================================================
           TESTIMONIAL / PULL QUOTE
        ============================================================ */
        #testimonials {
            padding: var(--section-pad) 0;
            background: var(--parchment);
        }

        .testimonials-header {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 3.5rem;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .testimonial-card {
            background: var(--warm-white);
            padding: 2rem;
            border-radius: 3px;
            border-left: 3px solid var(--forest);
            box-shadow: 0 2px 16px rgba(0,0,0,0.05);
        }

        .testimonial-quote {
            font-family: var(--serif);
            font-size: 1.08rem;
            font-style: italic;
            line-height: 1.7;
            color: var(--text-mid);
            margin-bottom: 1.2rem;
        }

        .testimonial-quote::before {
            content: '\201C';
            font-size: 2.5rem;
            line-height: 0;
            vertical-align: -0.5rem;
            color: var(--gold);
            margin-right: 0.2rem;
        }

        .testimonial-author {
            font-size: 0.78rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-soft);
            font-weight: 600;
        }

        /* ============================================================
           CONTACT
        ============================================================ */
        #contact {
            padding: var(--section-pad) 0;
            background: var(--warm-white);
        }

        .contact-inner {
            display: grid;
            grid-template-columns: 1fr 1.4fr;
            gap: clamp(3rem, 6vw, 6rem);
            align-items: start;
        }

        .contact-info .section-title { font-size: clamp(1.8rem, 3.2vw, 2.8rem); }

        .contact-detail {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 0;
            border-bottom: 1px solid var(--parchment);
            color: var(--text-mid);
            font-size: 0.98rem;
            transition: color 0.2s;
        }

        .contact-detail:hover { color: var(--forest); }

        .contact-detail:last-of-type { border-bottom: none; }

        .contact-icon {
            width: 42px;
            height: 42px;
            background: var(--parchment);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            color: var(--forest);
        }

        .contact-icon svg { width: 18px; height: 18px; }

        .contact-person {
            margin-top: 2rem;
            display: flex;
            align-items: center;
            gap: 1.2rem;
        }

        .contact-avatar {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--gold-light);
        }

        .contact-name {
            font-family: var(--serif);
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--navy);
        }

        .contact-title-text {
            font-size: 0.78rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-soft);
        }

        /* Form */
        .contact-form {
            background: var(--cream);
            padding: 2.5rem;
            border-radius: 4px;
            border: 1px solid rgba(0,0,0,0.06);
        }

        .form-title {
            font-family: var(--serif);
            font-size: 1.6rem;
            color: var(--navy);
            margin-bottom: 0.4rem;
        }

        .form-subtitle {
            font-size: 0.9rem;
            color: var(--text-soft);
            margin-bottom: 1.8rem;
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        label {
            display: block;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-mid);
            margin-bottom: 0.4rem;
        }

        input, select, textarea {
            width: 100%;
            padding: 0.78rem 1rem;
            background: var(--warm-white);
            border: 1px solid rgba(0,0,0,0.12);
            border-radius: 3px;
            font-family: var(--sans);
            font-size: 0.95rem;
            color: var(--text-dark);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            -webkit-appearance: none;
        }

        input:focus, select:focus, textarea:focus {
            border-color: var(--forest);
            box-shadow: 0 0 0 3px rgba(61, 92, 58, 0.1);
        }

        textarea { resize: vertical; min-height: 110px; }

        .form-success, .form-error {
            display: none;
            padding: 0.9rem 1.2rem;
            border-radius: 3px;
            font-size: 0.9rem;
            margin-top: 1rem;
        }

        .form-success {
            background: rgba(61, 92, 58, 0.1);
            border: 1px solid var(--forest);
            color: var(--forest);
        }

        .form-error {
            background: rgba(180, 60, 60, 0.08);
            border: 1px solid rgba(180, 60, 60, 0.4);
            color: #8b2c2c;
        }

        /* ============================================================
           FOOTER
        ============================================================ */
        footer {
            background: var(--navy);
            color: rgba(247, 243, 236, 0.6);
        }

        .footer-main {
            padding: 3.5rem 0 2.5rem;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr;
            gap: 3rem;
        }

        .footer-brand-name {
            font-family: var(--serif);
            font-size: 1.4rem;
            color: var(--cream);
            font-weight: 500;
            margin-bottom: 0.3rem;
        }

        .footer-brand-tag {
            font-size: 0.72rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--gold-light);
            margin-bottom: 1rem;
        }

        .footer-brand p {
            font-size: 0.9rem;
            line-height: 1.7;
            max-width: 280px;
        }

        .footer-heading {
            font-size: 0.72rem;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            color: var(--cream);
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .footer-links { list-style: none; }

        .footer-links li { margin-bottom: 0.55rem; }

        .footer-links a {
            font-size: 0.88rem;
            color: rgba(247, 243, 236, 0.6);
            transition: color 0.2s;
        }

        .footer-links a:hover { color: var(--gold-light); }

        .footer-contact-line {
            display: flex;
            align-items: center;
            gap: 0.6rem;
            font-size: 0.88rem;
            margin-bottom: 0.6rem;
        }

        .footer-contact-line svg { width: 14px; height: 14px; color: var(--gold); flex-shrink: 0; }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.08);
            padding: 1.4rem 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.78rem;
        }

        .footer-tagline {
            font-family: var(--serif);
            font-style: italic;
            color: var(--gold-light);
            font-size: 0.95rem;
        }

        /* ============================================================
           ANIMATIONS
        ============================================================ */
        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .reveal {
            opacity: 0;
            transform: translateY(24px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ============================================================
           RESPONSIVE
        ============================================================ */
        @media (max-width: 1024px) {
            .packages-grid { grid-template-columns: 1fr; max-width: 520px; margin-inline: auto; }
            .steps-grid { grid-template-columns: 1fr 1fr; }
            .testimonial-grid { grid-template-columns: 1fr; max-width: 520px; margin-inline: auto; }
        }

        @media (max-width: 860px) {
            .hero-inner { grid-template-columns: 1fr; }
            .hero-visual { display: none; }
            .about-inner { grid-template-columns: 1fr; }
            .about-photo-wrap { max-width: 380px; margin-inline: auto; }
            .contact-inner { grid-template-columns: 1fr; }
            .footer-main { grid-template-columns: 1fr; gap: 2rem; }
            .values-grid { grid-template-columns: repeat(2, 1fr); }
            .value-item { border-bottom: 1px solid rgba(255,255,255,0.1); }
            .value-item:nth-child(2) { border-right: none; }
            .value-item:nth-child(3) { border-bottom: none; border-right: none; }
            .value-item:nth-child(4) { border-right: none; border-bottom: none; }
        }

        @media (max-width: 640px) {
            .nav-links { display: none; }
            .nav-links.open {
                display: flex;
                flex-direction: column;
                position: absolute;
                top: 68px; left: 0; right: 0;
                background: rgba(26,39,68,0.98);
                padding: 1.5rem;
                gap: 1.2rem;
                z-index: 99;
            }
            .hamburger { display: flex; }
            .steps-grid { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
            .footer-bottom { flex-direction: column; gap: 0.6rem; text-align: center; }
        }

        /* ============================================================
           PLACEHOLDER PHOTO TREATMENT
           (replace background-image with actual photos)
        ============================================================ */
        .photo-placeholder {
            background: linear-gradient(135deg, var(--parchment) 0%, var(--sage-light) 60%, var(--forest) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255,255,255,0.5);
            font-family: var(--serif);
            font-size: 0.85rem;
            text-align: center;
            letter-spacing: 0.06em;
        }
    </style>
</head>
<body>

    {{-- ============================================================
         NAVIGATION
    ============================================================ --}}
    <nav id="main-nav">
        <div class="nav-inner">
            <a href="#hero" class="nav-logo">
                Memories Are For Sharing
                <span>Legacy Preservation</span>
            </a>

            <ul class="nav-links" id="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#packages">Packages</a></li>
                <li><a href="#process">Process</a></li>
                <li><a href="#contact" class="nav-cta">Get Started</a></li>
            </ul>

            <button class="hamburger" id="hamburger" aria-label="Toggle menu">
                <span></span><span></span><span></span>
            </button>
        </div>
    </nav>

    {{-- ============================================================
         HERO
    ============================================================ --}}
    <section id="hero">
        <div class="hero-bg-pattern"></div>
        <div class="hero-inner container">
            <div class="hero-text">
                <p class="hero-eyebrow">Legacy Preservation</p>
                <h1 class="hero-headline">
                    Your Life.<br>
                    Your Story.<br>
                    <em>Forever.</em>
                </h1>
                <p class="hero-subhead">A Legacy Worth Sharing.</p>
                <p class="hero-body">
                    Let's preserve your memories, your voice, and your legacy
                    for the people you love — captured in your own words,
                    beautifully filmed and delivered as a timeless family keepsake.
                </p>
                <div class="hero-actions">
                    <a href="#packages" class="btn-primary">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
                        View Packages
                    </a>
                    <a href="#contact" class="btn-outline">Start a Conversation</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-accent-box"></div>
                <div class="hero-photo-frame photo-placeholder" style="height:520px;">
                        <img src="{{ asset('images/Ladywithphotosfromyouth.png') }}" alt="An sweet old lady sharing their story">
                    <p style="padding:2rem;">Add your<br>hero photo here</p>
                </div>
                <div class="hero-stats">
                    <strong>Your</strong>
                    <span>Story Matters</span>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         VALUES STRIP
    ============================================================ --}}
    <section id="values">
        <div class="container">
            <div class="values-grid">
                <div class="value-item reveal">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <p class="value-label">Share your memories</p>
                </div>
                <div class="value-item reveal" style="transition-delay:0.1s">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/><path d="M19 10v2a7 7 0 0 1-14 0v-2"/><line x1="12" y1="19" x2="12" y2="23"/><line x1="8" y1="23" x2="16" y2="23"/></svg>
                    </div>
                    <p class="value-label">Be heard and remembered</p>
                </div>
                <div class="value-item reveal" style="transition-delay:0.2s">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                    </div>
                    <p class="value-label">A legacy for your loved ones</p>
                </div>
                <div class="value-item reveal" style="transition-delay:0.3s">
                    <div class="value-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/></svg>
                    </div>
                    <p class="value-label">A beautiful way to connect generations</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         ABOUT
    ============================================================ --}}
    <section id="about">
        <div class="container">
            <div class="about-inner">
                <div class="about-photo-wrap reveal">
                    <div class="about-photo-bg"></div>
                    <div class="photo-placeholder about-photo" style="height:460px; border-radius:3px;">
                        {{--
                            Replace with:
                            <img src="{{ asset('images/shalyce-portrait.jpg') }}"
                                 alt="Shalyce" class="about-photo">
                        --}}
                        <p style="padding:2rem;">Add Shalyce's<br>portrait here</p>
                    </div>
                    <div class="about-quote-card">
                        <blockquote>Every life is a story worth telling beautifully.</blockquote>
                        <cite>— Shalyce</cite>
                    </div>
                </div>

                <div class="about-text reveal" style="transition-delay:0.15s">
                    <p class="section-eyebrow">About Shalyce</p>
                    <h2 class="section-title">Preserving Stories <em>with Care & Heart</em></h2>
                    <p class="section-body">
                        Every person carries a world of stories — hard-won wisdom, tender memories,
                        and a voice that deserves to be heard by the people they love most. I created
                        Memories Are For Sharing because I believe those stories shouldn't fade.
                    </p>
                    <p class="section-body">
                        Through warm, unhurried interviews and professional video production,
                        I help you — or the person you love — share their life on their own terms.
                        The result is a beautifully crafted film your family will return to for
                        generations.
                    </p>

                    <div class="ornament">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.593c-5.63-5.539-11-10.297-11-14.402 0-3.791 3.068-5.191 5.281-5.191 1.312 0 4.151.501 5.719 4.457 1.59-3.968 4.464-4.447 5.726-4.447 2.54 0 5.274 1.621 5.274 5.181 0 4.069-5.136 8.625-11 14.402z"/></svg>
                    </div>

                    <p class="section-body">
                        Based in Utah and serving families near and far, I bring a gentle,
                        professional approach to every session — making the experience as meaningful
                        as the finished film itself.
                    </p>

                    <a href="#contact" class="btn-primary" style="margin-top:1.4rem;">
                        Let's Preserve Your Story
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         PACKAGES
    ============================================================ --}}
    <section id="packages">
        <div class="container">
            <div class="packages-header reveal">
                <p class="section-eyebrow" style="justify-content:center; margin-bottom:0.8rem;">Pricing & Packages</p>
                <h2 class="section-title" style="text-align:center;">Choose the Experience <em>That's Right for You</em></h2>
                <p class="section-body" style="text-align:center; max-width:520px; margin-inline:auto;">
                    Every family and every story is unique. Choose the package that fits your vision —
                    from a single legacy session to a full heirloom documentary.
                </p>
            </div>

            <div class="packages-grid">

                {{-- Package 1 --}}
                <div class="package-card reveal">
                    <div class="package-badge">Package 1</div>
                    <div class="package-body">
                        <p class="package-number">Option One</p>
                        <h3 class="package-name">Legacy Session</h3>
                        <div class="package-divider"></div>
                        <p class="package-price">$800 – $1,200</p>
                        <ul class="package-features">
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                3–4 hour interview
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Professional audio &amp; video recording
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Lightly edited full interview
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Organized into topic chapters
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Files delivered on a flash drive
                            </li>
                        </ul>
                        <a href="#contact" class="btn-outline" style="width:100%; justify-content:center;">Inquire About This Package</a>
                        <p class="package-tagline">A wonderful way to preserve your memories.</p>
                    </div>
                </div>

                {{-- Package 2 (Featured) --}}
                <div class="package-card featured reveal" style="transition-delay:0.12s">
                    <div class="package-badge">Most Popular — Package 2</div>
                    <div class="package-body">
                        <p class="package-number">Option Two</p>
                        <h3 class="package-name">Family Legacy Film</h3>
                        <div class="package-divider"></div>
                        <p class="package-price">$1,500 – $3,000</p>
                        <ul class="package-features">
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                2–3 interview days
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Pre-interview planning
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Professionally edited story chapters
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Photos &amp; memorabilia woven throughout
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Music, titles &amp; smooth transitions
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Files delivered on a flash drive
                            </li>
                        </ul>
                        <a href="#contact" class="btn-primary" style="width:100%; justify-content:center;">Inquire About This Package</a>
                        <p class="package-tagline">A lasting keepsake your family will treasure.</p>
                    </div>
                </div>

                {{-- Package 3 --}}
                <div class="package-card reveal" style="transition-delay:0.24s">
                    <div class="package-badge">Package 3</div>
                    <div class="package-body">
                        <p class="package-number">Option Three</p>
                        <h3 class="package-name">Heirloom Documentary</h3>
                        <div class="package-divider"></div>
                        <p class="package-price">$3,500 – $7,000</p>
                        <ul class="package-features">
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Multiple interview sessions
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Family members included
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                B-roll of home, places &amp; memories
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Integration of photos, documents &amp; cherished items
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Custom storytelling &amp; timeline
                            </li>
                            <li>
                                <svg class="feature-check" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                                Up to 10 flash drives for family members
                            </li>
                        </ul>
                        <a href="#contact" class="btn-outline" style="width:100%; justify-content:center;">Inquire About This Package</a>
                        <p class="package-tagline">A timeless legacy for generations to come.</p>
                    </div>
                </div>

            </div>

            <p style="text-align:center; margin-top:2.2rem; font-family:var(--serif); font-style:italic; color:var(--text-soft); font-size:1rem;">
                Not sure which package fits your story? Reach out — we'll figure it out together.
            </p>
        </div>
    </section>

    {{-- ============================================================
         PROCESS
    ============================================================ --}}
    <section id="process">
        <div class="container">
            <div class="process-header reveal">
                <p class="section-eyebrow">How It Works</p>
                <h2 class="section-title" style="color:var(--cream);">Simple, <em style="color:var(--sage-light);">Warm,</em> Meaningful</h2>
                <p class="section-body" style="color:rgba(247,243,236,0.65); text-align:center;">
                    From your first conversation to the finished film, every step is designed to feel effortless and personal.
                </p>
            </div>
            <div class="steps-grid reveal" style="transition-delay:0.1s">
                <div class="step">
                    <div class="step-number">01</div>
                    <h3 class="step-title">Connect &amp; Consult</h3>
                    <p class="step-desc">We start with a relaxed conversation to understand your story, your family, and what you'd like to preserve.</p>
                </div>
                <div class="step">
                    <div class="step-number">02</div>
                    <h3 class="step-title">Plan &amp; Prepare</h3>
                    <p class="step-desc">Together we craft thoughtful interview questions and a session plan so your subject feels completely at ease.</p>
                </div>
                <div class="step">
                    <div class="step-number">03</div>
                    <h3 class="step-title">Film Your Story</h3>
                    <p class="step-desc">A professional, comfortable recording session captures your voice, your memories, and the moments that matter most.</p>
                </div>
                <div class="step">
                    <div class="step-number">04</div>
                    <h3 class="step-title">Deliver the Keepsake</h3>
                    <p class="step-desc">Your beautifully edited film is delivered on a flash drive — a timeless family heirloom ready to be shared and cherished.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         TESTIMONIALS (placeholder — add real reviews when available)
    ============================================================ --}}
    <section id="testimonials">
        <div class="container">
            <div class="testimonials-header reveal">
                <p class="section-eyebrow" style="justify-content:center;">Families We've Served</p>
                <h2 class="section-title" style="text-align:center;">Stories That <em>Touched Hearts</em></h2>
            </div>
            <div class="testimonial-grid">
                <div class="testimonial-card reveal">
                    <p class="testimonial-quote">We had no idea how much my mother had to share. Shalyce made her feel so at ease — we now have something our grandchildren will treasure forever.</p>
                    <p class="testimonial-author">— The Henderson Family, Utah</p>
                </div>
                <div class="testimonial-card reveal" style="transition-delay:0.12s">
                    <p class="testimonial-quote">The film captured my grandfather exactly as we knew him. His laugh, his wisdom, his stories. We have watched it dozens of times. Worth every penny.</p>
                    <p class="testimonial-author">— The Marchetti Family</p>
                </div>
                <div class="testimonial-card reveal" style="transition-delay:0.24s">
                    <p class="testimonial-quote">Shalyce has a true gift for drawing out the stories people have carried quietly for decades. This was the best gift our family has ever given itself.</p>
                    <p class="testimonial-author">— The Kimball Family, Salt Lake City</p>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         CONTACT
    ============================================================ --}}
    <section id="contact">
        <div class="container">
            <div class="contact-inner">
                <div class="contact-info reveal">
                    <p class="section-eyebrow">Get in Touch</p>
                    <h2 class="section-title">Let's Preserve Your Story — <em>Together.</em></h2>
                    <p class="section-body">
                        Ready to get started, or just have questions? Reach out any time.
                        I'd love to hear about your family and what you're hoping to create.
                    </p>

                    <a href="tel:8016451948" class="contact-detail">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.44 2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.72rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-soft);margin-bottom:0.15rem;">Call or Text</p>
                            <p style="font-weight:600;color:var(--navy);">801.645.1948</p>
                        </div>
                    </a>

                    <a href="mailto:shalyce@memoriesareforsharing.com" class="contact-detail">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.72rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-soft);margin-bottom:0.15rem;">Email</p>
                            <p style="font-weight:600;color:var(--navy);">shalyce@memoriesareforsharing.com</p>
                        </div>
                    </a>

                    <a href="https://memoriesareforsharing.com" class="contact-detail">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        </div>
                        <div>
                            <p style="font-size:0.72rem;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-soft);margin-bottom:0.15rem;">Website</p>
                            <p style="font-weight:600;color:var(--navy);">memoriesareforsharing.com</p>
                        </div>
                    </a>

                    <div class="contact-person" style="margin-top:2.2rem;">
                        <div class="photo-placeholder contact-avatar" style="width:72px;height:72px;border-radius:50%;flex-shrink:0;font-size:0.65rem;text-align:center;padding:0.3rem;">
                            {{-- Replace with: <img src="{{ asset('images/shalyce-avatar.jpg') }}" ... class="contact-avatar"> --}}
                        </div>
                        <div>
                            <p class="contact-name">Shalyce</p>
                            <p class="contact-title-text">Legacy Preservation Specialist</p>
                        </div>
                    </div>
                </div>

                {{-- ============ CONTACT FORM ============ --}}
                <div class="contact-form reveal" style="transition-delay:0.15s">
                    <h3 class="form-title">Send a Message</h3>
                    <p class="form-subtitle">I'll get back to you within one business day.</p>

                    <div id="contact-form-wrap">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" placeholder="Jane" required>
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Smith">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" name="email" placeholder="jane@example.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="(801) 555-0100">
                        </div>
                        <div class="form-group">
                            <label for="package">Package of Interest</label>
                            <select id="package" name="package">
                                <option value="">— Select a package (optional) —</option>
                                <option value="Package 1 — Legacy Session ($800–$1,200)">Package 1 — Legacy Session ($800–$1,200)</option>
                                <option value="Package 2 — Family Legacy Film ($1,500–$3,000)">Package 2 — Family Legacy Film ($1,500–$3,000)</option>
                                <option value="Package 3 — Heirloom Documentary ($3,500–$7,000)">Package 3 — Heirloom Documentary ($3,500–$7,000)</option>
                                <option value="Not sure yet">Not sure yet — I'd love guidance</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Tell Me About Your Story</label>
                            <textarea id="message" name="message" placeholder="Who would you like to preserve? What feels most important to capture?"></textarea>
                        </div>

                        <button type="button" class="btn-primary" id="submit-btn" style="width:100%; justify-content:center; padding-top:1.1rem; padding-bottom:1.1rem;">
                            <span id="btn-text">Send My Message</span>
                        </button>

                        <div class="form-success" id="form-success">
                            ✓ &nbsp;Thank you! Your message has been sent. Shalyce will be in touch soon.
                        </div>
                        <div class="form-error" id="form-error">
                            Something went wrong. Please try again, or email directly at shalyce@memoriesareforsharing.com
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============================================================
         FOOTER
    ============================================================ --}}
    <footer>
        <div class="container">
            <div class="footer-main">
                <div class="footer-brand">
                    <p class="footer-brand-name">Memories Are For Sharing</p>
                    <p class="footer-brand-tag">Legacy Preservation</p>
                    <p>Capturing the voices, wisdom, and memories of those you love — preserved beautifully for the generations who will come after.</p>
                </div>
                <div>
                    <p class="footer-heading">Quick Links</p>
                    <ul class="footer-links">
                        <li><a href="#about">About Shalyce</a></li>
                        <li><a href="#packages">Packages &amp; Pricing</a></li>
                        <li><a href="#process">How It Works</a></li>
                        <li><a href="#contact">Get in Touch</a></li>
                    </ul>
                </div>
                <div>
                    <p class="footer-heading">Contact</p>
                    <div class="footer-contact-line">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.44 2 2 0 0 1 3.59 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 9.91a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                        <a href="tel:8016451948">801.645.1948</a>
                    </div>
                    <div class="footer-contact-line">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
                        <a href="mailto:shalyce@memoriesareforsharing.com">shalyce@memoriesareforsharing.com</a>
                    </div>
                    <div class="footer-contact-line" style="margin-top:1rem;">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                        <a href="https://memoriesareforsharing.com">memoriesareforsharing.com</a>
                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Memories Are For Sharing. All rights reserved.</p>
                <p class="footer-tagline">Your story matters. Today. Tomorrow. Forever.</p>
            </div>
        </div>
    </footer>

    {{-- ============================================================
         SCRIPTS
    ============================================================ --}}
    <script>
    // Nav scroll effect
    const nav = document.getElementById('main-nav');
    window.addEventListener('scroll', () => {
        nav.classList.toggle('scrolled', window.scrollY > 40);
    });

    // Hamburger menu
    const hamburger = document.getElementById('hamburger');
    const navLinks  = document.getElementById('nav-links');
    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('open');
    });
    navLinks.querySelectorAll('a').forEach(a => {
        a.addEventListener('click', () => navLinks.classList.remove('open'));
    });

    // Reveal on scroll
    const reveals = document.querySelectorAll('.reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => {
            if (e.isIntersecting) {
                e.target.classList.add('visible');
                observer.unobserve(e.target);
            }
        });
    }, { threshold: 0.12 });
    reveals.forEach(el => observer.observe(el));

    // Contact form AJAX
    document.getElementById('submit-btn').addEventListener('click', async function () {
        const btn     = this;
        const btnText = document.getElementById('btn-text');
        const success = document.getElementById('form-success');
        const error   = document.getElementById('form-error');

        const firstName = document.getElementById('first_name').value.trim();
        const email     = document.getElementById('email').value.trim();

        if (!firstName || !email) {
            error.style.display = 'block';
            error.textContent   = 'Please fill in your name and email address.';
            return;
        }

        btnText.textContent = 'Sending…';
        btn.disabled = true;
        success.style.display = 'none';
        error.style.display   = 'none';

        const payload = {
            first_name: firstName,
            last_name:  document.getElementById('last_name').value.trim(),
            email,
            phone:   document.getElementById('phone').value.trim(),
            package: document.getElementById('package').value,
            message: document.getElementById('message').value.trim(),
            _token:  document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        };

        try {
            const res = await fetch('/contact', {
                method:  'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': payload._token },
                body:    JSON.stringify(payload),
            });

            if (res.ok) {
                success.style.display = 'block';
                // Reset fields
                ['first_name','last_name','email','phone','package','message'].forEach(id => {
                    const el = document.getElementById(id);
                    if (el.tagName === 'SELECT') el.selectedIndex = 0;
                    else el.value = '';
                });
            } else {
                throw new Error('Server error');
            }
        } catch {
            error.style.display = 'block';
            error.textContent   = 'Something went wrong. Please try again, or email directly at shalyce@memoriesareforsharing.com';
        } finally {
            btnText.textContent = 'Send My Message';
            btn.disabled        = false;
        }
    });
    </script>

</body>
</html>
