<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:title" content="It's Mellody's 75th Birthday">
    <meta property="og:url" content="https://memoriesareforsharing.com/">
    <meta property="og:image" content="/OG-PartyImg2.PNG">
    <meta property="og:description"
        content="Come Celebrate Mellody's Birthday - May 2nd, 5:30-9pm, DON'T SPOIL THE SURPRISE">

    <title>Celebrating Mellody's 75th Birthday</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,600&family=Lato:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --cream: #FDF7EE;
            --cream-dark: #F5EDD8;
            --gold: #B8922A;
            --gold-light: #D4AE5C;
            --gold-pale: #F0E0B0;
            --fuchsia: #B5195A;
            --fuchsia-light: #D63478;
            --fuchsia-pale: #F9E8EF;
            --burgundy: #7B1A3A;
            --burgundy-deep: #5C0E28;
            --dark: #2A1A10;
            --text: #3A2518;
            --text-light: #7A5C4A;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Lato', sans-serif;
            background-color: var(--cream);
            color: var(--text);
            line-height: 1.7;
            overflow-x: hidden;
        }

        /* ── HERO ── */
        .hero {
            position: relative;
            background-color: var(--cream);
            padding: 1.5rem 1.5rem 3rem;
            text-align: center;
            overflow: visible;
        }

        .hero::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 60% 40% at 50% 0%, rgba(180, 146, 42, 0.13) 0%, transparent 70%),
                radial-gradient(ellipse 30% 20% at 10% 90%, rgba(181, 25, 90, 0.06) 0%, transparent 60%),
                radial-gradient(ellipse 30% 20% at 90% 90%, rgba(181, 25, 90, 0.06) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-top-border {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        .hero-top-border .line {
            height: 1px;
            width: 60px;
            background: var(--gold-light);
        }

        .hero-top-border .diamond {
            width: 8px;
            height: 8px;
            background: var(--gold);
            transform: rotate(45deg);
        }

        .hero-top-border .diamond-sm {
            width: 5px;
            height: 5px;
            background: var(--gold-light);
            transform: rotate(45deg);
        }

        .hero-surprise {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: clamp(0.85rem, 2vw, 1.1rem);
            letter-spacing: 0.25rem;
            text-transform: uppercase;
            color: var(--fuchsia);
            margin-bottom: 0.5rem;
        }

        .hero-eyebrow {
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            font-size: 0.75rem;
            letter-spacing: 0.35rem;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.75rem;
        }

        .hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-style: italic;
            font-size: clamp(3rem, 7vw, 5.5rem);
            color: var(--burgundy);
            line-height: 1;
            margin-bottom: 0.2rem;
        }

        .hero-subtitle {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 500;
            font-size: clamp(1rem, 2.5vw, 1.5rem);
            color: var(--text-light);
            letter-spacing: 0.15rem;
            text-transform: uppercase;
            margin-bottom: 2.5rem;
        }

        /* ── HERO CTA BUTTONS ── */
        .hero-cta-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 3rem;
            position: relative;
            z-index: 2;
        }

        .hero-cta-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: var(--burgundy);
            color: white;
            padding: 1rem 2.2rem;
            border-radius: 2px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            transition: background 0.2s, transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 20px rgba(123, 26, 58, 0.35);
        }

        .hero-cta-primary:hover {
            background: var(--fuchsia);
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(181, 25, 90, 0.4);
        }

        .hero-cta-secondary {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: transparent;
            color: var(--fuchsia);
            padding: 1rem 2.2rem;
            border-radius: 2px;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 900;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            border: 2px solid var(--fuchsia);
            transition: all 0.2s;
        }

        .hero-cta-secondary:hover {
            background: var(--fuchsia);
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 28px rgba(181, 25, 90, 0.3);
        }

        .hero-cta-label {
            font-size: 0.7rem;
            color: var(--text-light);
            letter-spacing: 0.05rem;
            margin-top: -0.5rem;
            margin-bottom: 0.5rem;
            font-style: italic;
            font-family: 'Cormorant Garamond', serif;
        }

        /* ── PHOTOS ── */
        .photos-stage {
            position: relative;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            height: 260px;
            margin: 0 auto;
            max-width: 680px;
        }

        @media (min-width: 768px) {
            .photos-stage {
                height: 360px;
                max-width: 900px;
            }
        }

        .photo-frame {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.4s ease;
        }

        .photo-frame img {
            display: block;
            object-fit: cover;
            border-radius: 3px;
        }

        /* Left — youngest photo */
        .photo-frame.past {
            left: 50%;
            bottom: 0;
            transform: translateX(-175%) rotate(-6deg);
            z-index: 1;
        }

        .photo-frame.past img {
            width: 155px;
            height: 200px;
            border: 6px solid white;
            box-shadow: -4px 6px 30px rgba(42, 26, 16, 0.22), 0 0 0 1px rgba(180, 146, 42, 0.2);
            filter: sepia(0.2);
        }

        .photo-frame.past:hover {
            transform: translateX(-175%) rotate(-4deg) scale(1.04);
            z-index: 4;
        }

        /* Center — front and tallest */
        .photo-frame.present {
            left: 50%;
            bottom: 0;
            transform: translateX(-50%) rotate(0deg);
            z-index: 3;
        }

        .photo-frame.present img {
            width: 195px;
            height: 255px;
            border: 6px solid white;
            box-shadow: 0 10px 40px rgba(42, 26, 16, 0.32), 0 0 0 1px rgba(180, 146, 42, 0.3);
        }

        .photo-frame.present:hover {
            transform: translateX(-50%) rotate(0deg) scale(1.04);
            z-index: 4;
        }

        /* Right — birthday photo */
        .photo-frame.recent {
            left: 50%;
            bottom: 0;
            transform: translateX(72%) rotate(5.5deg);
            z-index: 2;
        }

        .photo-frame.recent img {
            width: 155px;
            height: 200px;
            border: 6px solid white;
            box-shadow: 4px 6px 30px rgba(42, 26, 16, 0.22), 0 0 0 1px rgba(180, 146, 42, 0.2);
        }

        .photo-frame.recent:hover {
            transform: translateX(72%) rotate(3.5deg) scale(1.04);
            z-index: 4;
        }

        @media (min-width: 768px) {
            .photo-frame.past {
                transform: translateX(-185%) rotate(-7deg);
            }

            .photo-frame.past img {
                width: 180px;
                height: 230px;
                border-width: 8px;
            }

            .photo-frame.past:hover {
                transform: translateX(-185%) rotate(-5deg) scale(1.04);
            }

            .photo-frame.present {
                transform: translateX(-50%) rotate(0deg);
            }

            .photo-frame.present img {
                width: 220px;
                height: 285px;
                border-width: 8px;
            }

            .photo-frame.present:hover {
                transform: translateX(-50%) rotate(0deg) scale(1.04);
            }

            .photo-frame.recent {
                transform: translateX(82%) rotate(6deg);
            }

            .photo-frame.recent img {
                width: 180px;
                height: 230px;
                border-width: 8px;
            }

            .photo-frame.recent:hover {
                transform: translateX(82%) rotate(4deg) scale(1.04);
            }
        }

        .photo-caption {
            margin-top: 0.6rem;
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 0.82rem;
            color: var(--text-light);
            white-space: nowrap;
        }

        .photo-connector {
            position: absolute;
            bottom: 18px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, var(--gold-pale), var(--gold-light), var(--gold-pale));
            z-index: 0;
            border-radius: 1px;
        }

        /* ── DETAILS BAND ── */
        .details-band {
            position: relative;
            background: linear-gradient(160deg, #6A1030 0%, #7B1A3A 40%, #5C0E28 100%);
            color: white;
            padding: 5rem 1.5rem 4rem;
            text-align: center;
            margin-top: 80px;
            overflow: hidden;
        }

        .details-band::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 80% 50% at 50% 100%, rgba(212, 174, 92, 0.14) 0%, transparent 70%),
                radial-gradient(ellipse 30% 30% at 0% 0%, rgba(255, 255, 255, 0.04) 0%, transparent 50%);
            pointer-events: none;
        }

        .details-band::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold-light), var(--gold), var(--gold-light), transparent);
        }

        .band-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-style: italic;
            font-size: 1rem;
            color: var(--gold-pale);
            letter-spacing: 0.35rem;
            text-transform: uppercase;
            margin-bottom: 2.5rem;
            opacity: 0.9;
        }

        .details-grid {
            display: flex;
            justify-content: center;
            gap: 0;
            flex-wrap: wrap;
            max-width: 860px;
            margin: 0 auto 3rem;
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(212, 174, 92, 0.25);
            border-radius: 2px;
            overflow: hidden;
        }

        .detail-item {
            flex: 1;
            min-width: 220px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            padding: 2.5rem 1.5rem;
            position: relative;
            background: rgba(0, 0, 0, 0.1);
        }

        .detail-item+.detail-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 15%;
            bottom: 15%;
            width: 1px;
            background: rgba(212, 174, 92, 0.2);
        }

        .detail-icon {
            font-size: 1rem;
            color: var(--gold-light);
            margin-bottom: 0.2rem;
            opacity: 0.8;
        }

        .detail-label {
            font-size: 0.85rem;
            font-weight: 900;
            letter-spacing: 0.25rem;
            text-transform: uppercase;
            color: var(--gold-light);
            margin-bottom: 0.2rem;
        }

        .detail-value {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.6rem, 3vw, 2.2rem);
            font-weight: 500;
            color: white;
            line-height: 1.15;
        }

        .detail-sub {
            font-size: 0.85rem;
            color: var(--gold-pale);
            opacity: 0.85;
            letter-spacing: 0.05rem;
        }

        .arrive-diamonds {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .arrive-diamonds .d {
            width: 6px;
            height: 6px;
            background: var(--gold-light);
            transform: rotate(45deg);
            opacity: 0.7;
        }

        .arrive-diamonds .d.lg {
            width: 9px;
            height: 9px;
            opacity: 1;
        }

        .arrive-diamonds .line-g {
            height: 1px;
            width: 50px;
            background: linear-gradient(90deg, transparent, var(--gold-light));
        }

        .arrive-diamonds .line-g.r {
            background: linear-gradient(90deg, var(--gold-light), transparent);
        }

        .arrive-notice {
            position: relative;
            display: inline-block;
            padding: 1.6rem 3.5rem;
            background: linear-gradient(135deg, rgba(181, 25, 90, 0.55), rgba(181, 25, 90, 0.3));
            border: 1px solid var(--fuchsia-light);
            border-radius: 2px;
            overflow: hidden;
        }

        .arrive-notice::before {
            content: '';
            position: absolute;
            inset: 2px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 1px;
            pointer-events: none;
        }

        .arrive-notice-eyebrow {
            font-size: 0.6rem;
            letter-spacing: 0.35rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.65);
            margin-bottom: 0.4rem;
            font-weight: 700;
        }

        .arrive-notice-main {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.8rem, 4vw, 2.6rem);
            font-weight: 500;
            color: white;
            line-height: 1.1;
        }

        .arrive-notice-main em {
            font-style: normal;
            color: var(--gold-pale);
        }

        .arrive-notice-sub {
            margin-top: 0.4rem;
            font-size: 0.78rem;
            color: rgba(255, 255, 255, 0.65);
            letter-spacing: 0.15rem;
            text-transform: uppercase;
        }

        /* ── RSVP ── */
        .rsvp-box {
            margin-top: 0.5rem;
        }

        .rsvp-label {
            font-size: 0.6rem;
            letter-spacing: 0.35rem;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.65);
            font-weight: 700;
            margin-bottom: 0.4rem;
        }

        .rsvp-main {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(1.4rem, 3vw, 2rem);
            font-weight: 500;
            color: white;
            line-height: 1.2;
        }

        .rsvp-phone {
            color: var(--gold-pale);
            text-decoration: none;
            border-bottom: 1px solid rgba(240, 224, 176, 0.4);
        }

        .rsvp-phone:hover {
            color: white;
            border-bottom-color: white;
        }

        .rsvp-note {
            margin-top: 0.75rem;
            font-size: 0.82rem;
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.6;
            max-width: 380px;
            margin-left: auto;
            margin-right: auto;
        }

        /* ── INSPIRATION / PROMPTS ── */
        .prompts-section {
            max-width: 920px;
            margin: 0 auto;
            padding: 4rem 1.5rem 2rem;
        }

        .section-heading {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-style: italic;
            font-size: clamp(2rem, 4vw, 3rem);
            color: var(--burgundy);
            text-align: center;
            line-height: 1.15;
            margin-bottom: 0.5rem;
        }

        .section-sub {
            text-align: center;
            color: var(--text-light);
            font-size: 0.95rem;
            font-weight: 300;
            max-width: 580px;
            margin: 0 auto 2rem;
            line-height: 1.8;
        }

        .prompts-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 1rem;
            margin: 1.5rem 0;
        }

        .prompt-card {
            background: white;
            border: 1px solid var(--gold-pale);
            border-left: 3px solid var(--gold-light);
            border-radius: 2px;
            padding: 1.1rem 1.2rem 1.1rem 1.5rem;
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 1rem;
            color: var(--text);
            line-height: 1.6;
            position: relative;
            cursor: default;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .prompt-card:hover {
            border-left-color: var(--fuchsia);
            box-shadow: 0 2px 12px rgba(181, 25, 90, 0.08);
        }

        .prompt-card::before {
            content: '"';
            position: absolute;
            top: -0.3rem;
            left: 0.8rem;
            font-size: 2.5rem;
            color: var(--gold-pale);
            font-family: 'Cormorant Garamond', serif;
            line-height: 1;
        }

        /* ══════════════════════════════════════
   VIDEO SECTION
══════════════════════════════════════ */
        .video-section {
            position: relative;
            background: linear-gradient(150deg, #1A0A14 0%, #2C0E1E 50%, #1A0A14 100%);
            padding: 5rem 1.5rem;
            text-align: center;
            overflow: hidden;
        }

        .video-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 60% 50% at 50% 0%, rgba(212, 174, 92, 0.1) 0%, transparent 60%),
                radial-gradient(ellipse 40% 40% at 100% 100%, rgba(181, 25, 90, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .video-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, var(--gold-light), var(--gold), var(--gold-light), transparent);
        }

        .video-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: rgba(181, 25, 90, 0.3);
            color: var(--fuchsia-light);
            border: 1px solid rgba(181, 25, 90, 0.4);
            padding: 0.4rem 1.2rem;
            border-radius: 1px;
            font-size: 0.65rem;
            font-weight: 900;
            letter-spacing: 0.3rem;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .video-main-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-style: italic;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            color: white;
            line-height: 1.05;
            margin-bottom: 0.75rem;
        }

        .video-main-title em {
            font-style: normal;
            color: var(--gold-pale);
        }

        .video-sub {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.6);
            max-width: 560px;
            margin: 0 auto 3rem;
            line-height: 1.8;
        }

        .video-card {
            max-width: 720px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(212, 174, 92, 0.2);
            border-radius: 2px;
            padding: 3rem 2.5rem;
            box-shadow: 0 8px 60px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        @media (max-width: 600px) {
            .video-card {
                padding: 2rem 1.25rem;
            }
        }

        .video-icon-ring {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: rgba(181, 25, 90, 0.2);
            border: 2px solid rgba(181, 25, 90, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            margin: 0 auto 1.5rem;
            animation: pulse-ring 2.5s ease-in-out infinite;
        }

        @keyframes pulse-ring {

            0%,
            100% {
                box-shadow: 0 0 0 0 rgba(181, 25, 90, 0.3);
            }

            50% {
                box-shadow: 0 0 0 16px rgba(181, 25, 90, 0.0);
            }
        }

        .example-video-wrap {
            color: white;
            margin-bottom: 1.5rem;
        }

        .example-video-label {
            font-size: 0.7rem;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            color: var(--gold-light);
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .phone-frame {
            display: inline-block;
            border-radius: 12px;
            overflow: hidden;
            border: 3px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.5);
            margin-bottom: 0.75rem;
        }

        .phone-frame video {
            display: block;
            height: 350px;
            max-width: 100%;
            background: #000;
        }

        .video-placeholder-inner {
            height: 350px;
            width: 196px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.05);
        }

        .vp-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            opacity: 0.4;
        }

        .vp-text {
            font-size: 0.8rem;
            color: rgba(255, 255, 255, 0.4);
        }

        .example-video-caption {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.5);
        }

        .video-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .video-step {
            text-align: center;
        }

        .video-step-num {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(212, 174, 92, 0.15);
            border: 1px solid rgba(212, 174, 92, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.2rem;
            color: var(--gold-light);
            margin: 0 auto 0.6rem;
        }

        .video-step-text {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.65);
            line-height: 1.5;
        }

        .video-step-text strong {
            color: rgba(255, 255, 255, 0.9);
            display: block;
            margin-bottom: 0.2rem;
            font-size: 0.9rem;
        }

        .video-divider {
            height: 1px;
            background: rgba(212, 174, 92, 0.15);
            margin: 2rem 0;
        }

        /* ── VIDEO UPLOAD FORM ── */
        .video-upload-form {
            text-align: left;
        }

        .video-form-label {
            display: block;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            color: var(--gold-light);
            margin-bottom: 0.4rem;
        }

        .video-form-label span {
            color: var(--fuchsia-light);
        }

        .video-form-input {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1px solid rgba(212, 174, 92, 0.25);
            border-radius: 2px;
            background: rgba(255, 255, 255, 0.07);
            color: white;
            font-family: 'Lato', sans-serif;
            font-size: 0.95rem;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            margin-bottom: 1.25rem;
        }

        .video-form-input::placeholder {
            color: rgba(255, 255, 255, 0.3);
        }

        .video-form-input:focus {
            border-color: var(--gold-light);
            box-shadow: 0 0 0 3px rgba(180, 146, 42, 0.15);
        }

        .video-drop-area {
            position: relative;
            border: 2px dashed rgba(212, 174, 92, 0.35);
            border-radius: 2px;
            padding: 2.25rem 1.5rem;
            text-align: center;
            cursor: pointer;
            margin-bottom: 1.25rem;
            background: rgba(255, 255, 255, 0.03);
            transition: border-color 0.2s, background 0.2s;
        }

        .video-drop-area:hover,
        .video-drop-area.has-file {
            border-color: rgba(212, 174, 92, 0.7);
            background: rgba(255, 255, 255, 0.06);
        }

        .video-drop-area input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
            width: 100%;
            height: 100%;
            z-index: 2;
        }

        .vda-icon {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            opacity: 0.5;
        }

        .vda-text {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.5);
            line-height: 1.6;
        }

        .vda-text strong {
            color: rgba(255, 255, 255, 0.85);
            display: block;
            font-size: 1rem;
            margin-bottom: 0.25rem;
        }

        .vda-filename {
            display: none;
            font-size: 0.85rem;
            color: var(--gold-light);
            margin-top: 0.5rem;
            font-style: italic;
            word-break: break-all;
        }

        .v-progress-wrap {
            margin: 0.5rem 0 1rem;
            display: none;
        }

        .v-progress-track {
            height: 6px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 3px;
            overflow: hidden;
        }

        .v-progress-bar {
            height: 100%;
            width: 0%;
            background: linear-gradient(90deg, var(--fuchsia), var(--gold-light));
            border-radius: 3px;
            transition: width 0.15s;
        }

        .v-progress-text {
            font-size: 0.75rem;
            color: rgba(255, 255, 255, 0.45);
            text-align: center;
            margin-top: 0.4rem;
            letter-spacing: 0.05rem;
        }

        .btn-upload-video {
            width: 100%;
            padding: 1.15rem 2rem;
            background: linear-gradient(135deg, var(--fuchsia), #D63478);
            color: white;
            border: none;
            border-radius: 2px;
            font-family: 'Lato', sans-serif;
            font-size: 0.85rem;
            font-weight: 900;
            letter-spacing: 0.25rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 20px rgba(181, 25, 90, 0.5);
        }

        .btn-upload-video:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(181, 25, 90, 0.65);
        }

        .btn-upload-video:disabled {
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.3);
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .video-error {
            display: none;
            margin-top: 0.75rem;
            padding: 0.75rem 1rem;
            background: rgba(181, 25, 90, 0.2);
            border: 1px solid rgba(181, 25, 90, 0.45);
            border-radius: 2px;
            color: var(--fuchsia-light);
            font-size: 0.85rem;
            text-align: center;
        }

        .video-success {
            display: none;
            text-align: center;
            padding: 2.5rem 1.5rem;
        }

        .video-success .vs-icon {
            font-size: 3rem;
            margin-bottom: 0.75rem;
        }

        .video-success h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            color: var(--gold-pale);
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .video-success p {
            color: rgba(255, 255, 255, 0.55);
            font-size: 0.9rem;
            line-height: 1.7;
        }

        .btn-upload-another {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.75rem 2rem;
            background: rgba(181, 25, 90, 0.3);
            color: var(--fuchsia-light);
            border: 1px solid rgba(181, 25, 90, 0.5);
            font-size: 0.75rem;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 1px;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            transition: all 0.2s;
        }

        .btn-upload-another:hover {
            background: var(--fuchsia);
            color: white;
        }

        /* ══════════════════════════════════════
   SHARE A MEMORY
══════════════════════════════════════ */
        .memory-hero-section {
            position: relative;
            background: linear-gradient(150deg, #FDF7EE 0%, #F5EDD8 50%, #FDF7EE 100%);
            border-top: 3px solid var(--gold);
            border-bottom: 3px solid var(--gold);
            padding: 5rem 1.5rem 4rem;
            overflow: hidden;
        }

        .memory-hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                radial-gradient(ellipse 50% 60% at 0% 50%, rgba(123, 26, 58, 0.05) 0%, transparent 60%),
                radial-gradient(ellipse 50% 60% at 100% 50%, rgba(181, 25, 90, 0.04) 0%, transparent 60%);
            pointer-events: none;
        }

        .memory-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: var(--burgundy);
            color: var(--gold-pale);
            padding: 0.4rem 1.2rem;
            border-radius: 1px;
            font-size: 0.65rem;
            font-weight: 900;
            letter-spacing: 0.3rem;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .memory-hero-title {
            font-family: 'Cormorant Garamond', serif;
            font-weight: 300;
            font-style: italic;
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            color: var(--burgundy);
            line-height: 1.05;
            margin-bottom: 0.75rem;
        }

        .memory-hero-sub {
            font-size: 1rem;
            color: var(--text-light);
            max-width: 560px;
            margin: 0 auto 2.5rem;
            line-height: 1.8;
            font-weight: 300;
        }

        .memory-hero-accent {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .memory-hero-accent .pulse-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: var(--fuchsia);
            box-shadow: 0 0 0 4px rgba(181, 25, 90, 0.2);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                box-shadow: 0 0 0 4px rgba(181, 25, 90, 0.2);
            }

            50% {
                box-shadow: 0 0 0 10px rgba(181, 25, 90, 0.05);
            }
        }

        .memory-hero-accent .acc-line {
            height: 1px;
            width: 80px;
            background: linear-gradient(90deg, transparent, var(--gold-light));
        }

        .memory-hero-accent .acc-line.r {
            background: linear-gradient(90deg, var(--gold-light), transparent);
        }

        .memory-form-container {
            max-width: 820px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .form-card {
            background: white;
            border: 1px solid var(--gold-pale);
            border-top: 4px solid var(--burgundy);
            border-radius: 2px;
            padding: 3rem 2.5rem;
            box-shadow: 0 8px 60px rgba(42, 26, 16, 0.12), 0 2px 0 var(--gold-pale);
        }

        @media (max-width: 600px) {
            .form-card {
                padding: 2rem 1.25rem;
            }
        }

        .form-section-label {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-size: 0.65rem;
            font-weight: 900;
            letter-spacing: 0.3rem;
            text-transform: uppercase;
            color: var(--burgundy);
            margin-bottom: 1.5rem;
        }

        .form-section-label::after {
            content: '';
            flex: 1;
            height: 1px;
            background: var(--gold-pale);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            color: var(--gold);
            margin-bottom: 0.4rem;
        }

        .form-label span {
            color: var(--fuchsia);
        }

        .form-input,
        .form-select,
        .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #E8D8C0;
            border-radius: 2px;
            background: #FDFAF5;
            color: var(--text);
            font-family: 'Lato', sans-serif;
            font-size: 0.95rem;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            appearance: none;
        }

        .form-input:focus,
        .form-select:focus,
        .form-textarea:focus {
            border-color: var(--gold-light);
            box-shadow: 0 0 0 3px rgba(180, 146, 42, 0.1);
        }

        .form-textarea {
            min-height: 180px;
            resize: vertical;
            line-height: 1.7;
            font-size: 1rem;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }

        @media (max-width: 560px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .prompt-chips {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
        }

        .prompt-chip {
            background: var(--fuchsia-pale);
            border: 1px solid rgba(181, 25, 90, 0.2);
            border-radius: 1px;
            padding: 0.3rem 0.75rem;
            color: var(--burgundy);
            cursor: pointer;
            transition: all 0.15s;
            font-style: italic;
            font-family: 'Cormorant Garamond', serif;
            font-size: 0.9rem;
        }

        .prompt-chip:hover {
            background: var(--burgundy);
            color: var(--gold-pale);
            border-color: var(--burgundy);
        }

        .photo-upload-area {
            border: 2px dashed var(--gold-pale);
            border-radius: 2px;
            padding: 1.75rem;
            text-align: center;
            cursor: pointer;
            transition: border-color 0.2s, background 0.2s;
            background: #FDFAF5;
            position: relative;
        }

        .photo-upload-area:hover {
            border-color: var(--gold-light);
            background: white;
        }

        .photo-upload-area input[type="file"] {
            position: absolute;
            inset: 0;
            opacity: 0;
            cursor: pointer;
            width: 100%;
            height: 100%;
        }

        .upload-icon {
            font-size: 1.8rem;
            margin-bottom: 0.4rem;
            opacity: 0.45;
        }

        .upload-text {
            font-size: 0.82rem;
            color: var(--text-light);
        }

        .upload-preview {
            display: none;
            max-width: 100%;
            max-height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--gold-light);
            margin: 0.5rem auto 0;
        }

        .btn-submit {
            width: 100%;
            margin-top: 0.5rem;
            padding: 1.15rem 2rem;
            background: linear-gradient(135deg, var(--burgundy), #9B2248);
            color: white;
            border: none;
            border-radius: 2px;
            font-family: 'Lato', sans-serif;
            font-size: 0.85rem;
            font-weight: 900;
            letter-spacing: 0.25rem;
            text-transform: uppercase;
            cursor: pointer;
            transition: all 0.2s;
            box-shadow: 0 4px 20px rgba(123, 26, 58, 0.35);
        }

        .btn-submit:hover {
            background: linear-gradient(135deg, var(--fuchsia), #D63478);
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(181, 25, 90, 0.4);
        }

        .btn-submit:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        .add-another-teaser {
            text-align: center;
            margin-top: 1.25rem;
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .add-another-teaser a {
            color: var(--fuchsia);
            text-decoration: underline;
            text-underline-offset: 3px;
            cursor: pointer;
        }

        .form-error {
            display: none;
            margin-top: 1rem;
            padding: 0.75rem 1rem;
            background: #FFF0F3;
            border: 1px solid rgba(181, 25, 90, 0.3);
            border-radius: 2px;
            color: var(--fuchsia);
            font-size: 0.85rem;
            text-align: center;
        }

        .success-message {
            display: none;
            text-align: center;
            padding: 3rem 2rem;
        }

        .success-message .success-icon {
            font-size: 3.5rem;
            margin-bottom: 1rem;
        }

        .success-message h3 {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2.2rem;
            color: var(--burgundy);
            font-style: italic;
            margin-bottom: 0.5rem;
        }

        .success-message p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        .btn-another {
            display: inline-block;
            margin-top: 1.5rem;
            padding: 0.75rem 2rem;
            background: var(--burgundy);
            color: white;
            border: none;
            font-size: 0.75rem;
            letter-spacing: 0.2rem;
            text-transform: uppercase;
            cursor: pointer;
            border-radius: 1px;
            font-family: 'Lato', sans-serif;
            font-weight: 900;
            transition: all 0.2s;
        }

        .btn-another:hover {
            background: var(--fuchsia);
        }

        /* ── MEMORIES WALL ── */
        .memories-section {
            background: var(--cream-dark);
            padding: 5rem 1.5rem;
            border-top: 2px solid var(--gold-pale);
        }

        .memories-inner {
            max-width: 920px;
            margin: 0 auto;
        }

        .memories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 1.25rem;
            margin-top: 2.5rem;
        }

        .memory-card {
            background: white;
            border: 1px solid var(--gold-pale);
            border-radius: 2px;
            padding: 1.25rem;
            position: relative;
            transition: box-shadow 0.2s;
        }

        .memory-card:hover {
            box-shadow: 0 4px 20px rgba(42, 26, 16, 0.1);
        }

        .memory-card-header {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .memory-avatar {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid var(--gold-pale);
            flex-shrink: 0;
        }

        .memory-avatar-placeholder {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--gold-pale);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
            color: var(--gold);
            font-weight: 500;
            flex-shrink: 0;
        }

        .memory-name {
            font-weight: 700;
            font-size: 0.9rem;
            color: var(--text);
        }

        .memory-year {
            font-size: 0.75rem;
            color: var(--gold);
            letter-spacing: 0.05rem;
        }

        .memory-text {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1rem;
            line-height: 1.7;
            color: var(--text);
            font-style: italic;
        }

        .memory-corner {
            position: absolute;
            top: 0;
            right: 0;
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 20px 20px 0;
            border-color: transparent var(--gold-pale) transparent transparent;
        }

        .no-memories {
            text-align: center;
            padding: 3rem;
            color: var(--text-light);
            font-style: italic;
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.1rem;
        }

        /* ── FOOTER ── */
        footer {
            background: var(--dark);
            color: rgba(255, 255, 255, 0.55);
            text-align: center;
            padding: 2rem;
            font-size: 0.8rem;
        }

        footer .footer-title {
            font-family: 'Cormorant Garamond', serif;
            font-style: italic;
            font-size: 1.2rem;
            color: var(--gold-light);
            margin-bottom: 0.3rem;
        }

        /* ── ANIMATIONS ── */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero-eyebrow {
            animation: fadeInUp 0.6s ease both 0.1s;
        }

        .hero-title {
            animation: fadeInUp 0.7s ease both 0.25s;
        }

        .hero-subtitle {
            animation: fadeInUp 0.7s ease both 0.38s;
        }

        .hero-cta-row {
            animation: fadeInUp 0.7s ease both 0.5s;
        }

        .photos-stage {
            animation: fadeInUp 0.9s ease both 0.6s;
        }

        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: none;
        }
    </style>
</head>

<body>

    <!-- ═══ HERO ═══ -->
    <section class="hero">
        <div class="hero-top-border">
            <div class="line"></div>
            <div class="diamond-sm"></div>
            <div class="diamond"></div>
            <div class="diamond-sm"></div>
            <div class="line"></div>
        </div>
        <p class="hero-surprise">&#x1F389; Surprise Party &#x1F389;</p>
        <p class="hero-eyebrow">You are invited to celebrate</p>
        <h1 class="hero-title">Mellody</h1>
        <div class="hero-75-wrap">
            <img src="/75.png" alt="75" class="hero-75-img" style="width: 75px;">
        </div>
        <p class="hero-subtitle" style="margin-bottom:5px;">Beautiful Years</p>

        <p class="hero-cta-label">Help us make her birthday unforgettable</p>

        <div class="photos-stage">
            <div class="photo-connector"></div>
            <div class="photo-frame past">
                <img src="/Young-Mom.jpg" alt="Mellody as a little girl">
                <p class="photo-caption">Little Mellody</p>
            </div>
            <div class="photo-frame present">
                <img src="/Now-Mom.jpg" alt="Mellody today">
                <p class="photo-caption">Always Stunning</p>
            </div>
            <div class="photo-frame recent">
                <img src="/Mom-Now-75.PNG" alt="Mellody Now">
                <p class="photo-caption">Our Mellody</p>
            </div>
        </div>
        <div class="hero-cta-row" style="margin-top:10px;">
            <a href="#record-video" class="hero-cta-primary">
                &#9654; &nbsp; Send a Video
            </a>
            <a href="#share-memory" class="hero-cta-secondary">
                &#10022; &nbsp; Share a Memory
            </a>
        </div>
    </section>

    <!-- ═══ DETAILS BAND ═══ -->
    <div class="details-band">
        <p class="band-title">Join Us</p>
        <div class="details-grid">
            <div class="detail-item">
                <div class="detail-icon">&#10022;</div>
                <div class="detail-label">Date</div>
                <div class="detail-value">Friday, May 2nd</div>
                <div class="detail-sub">2026</div>
            </div>
            <div class="detail-item">
                <div class="detail-icon">&#10022;</div>
                <div class="detail-label">Time</div>
                <div class="detail-value">5:30 &ndash; 9:00 PM</div>
                <div class="detail-sub">Party begins at 6 PM</div>
            </div>
            <div class="detail-item">
                <div class="detail-icon">&#10022;</div>
                <div class="detail-label">Location</div>
                <div class="detail-value"><a
                        href="https://www.google.com/maps/dir/?api=1&destination=5500+S+1175+W+Ogden+UT+84405"
                        target="_blank" rel="noopener"
                        style="color:white;text-decoration:underline;text-underline-offset:3px;">5500 S 1175 W</a></div>
                <div class="detail-sub"><a
                        href="https://www.google.com/maps/dir/?api=1&destination=5500+S+1175+W+Ogden+UT+84405"
                        target="_blank" rel="noopener"
                        style="color:var(--gold-pale);opacity:0.85;text-decoration:underline;text-underline-offset:3px;">Ogden,
                        UT 84405 &#8599;</a></div>
            </div>
        </div>
        <div class="arrive-diamonds">
            <div class="line-g"></div>
            <div class="d"></div>
            <div class="d lg"></div>
            <div class="d"></div>
            <div class="line-g r"></div>
        </div>
        <div class="arrive-notice">
            <p class="arrive-notice-eyebrow">Important &mdash; it&rsquo;s a surprise!</p>
            <p class="arrive-notice-main">Please arrive by <em>5:30 PM</em></p>
            <p class="arrive-notice-sub">Mellody arrives at 6:00 &mdash; let&rsquo;s all be there first</p>

            <!-- RSVP -->
            <div style="margin-top:2.5rem;">
                <div class="arrive-diamonds" style="margin-bottom:1.25rem;">
                    <div class="line-g"></div>
                    <div class="d"></div>
                    <div class="d lg"></div>
                    <div class="d"></div>
                    <div class="line-g r"></div>
                </div>
                <div class="rsvp-box">
                    <p class="rsvp-label">Please RSVP</p>
                    <p class="rsvp-main">Shalyce &nbsp;&mdash;&nbsp;
                        <a href="tel:8016451948" class="rsvp-phone">801&#8209;645&#8209;1948</a>
                    </p>
                    <p class="rsvp-note">
                        We&rsquo;ll provide dinner &mdash; we just want to make sure we have enough for everyone! <br>
                        If you think you&rsquo;ll be there, please let us know.
                        We&rsquo;d rather have extra than not enough!&nbsp; &#128150;
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══ INSPIRATION / PROMPTS ═══ -->
    <div class="prompts-section">
        <div class="reveal">
            <h2 class="section-heading">Need a Little Inspiration?</h2>
            <p class="section-sub">Pick any one of these prompts and let it guide you. There are no wrong answers
                &mdash; every memory matters.</p>
        </div>
        <div class="reveal">
            <div class="prompts-grid">
                <div class="prompt-card">How has Mellody changed or blessed your life?</div>
                <div class="prompt-card">Tell a funny or embarassing story you&rsquo;ve had with Mellody?</div>
                <div class="prompt-card">Tell a story about a time she helped you when you needed it.</div>
                <div class="prompt-card">What&rsquo;s a moment you had with Mellody you&rsquo;ve never forgotten?</div>
                <div class="prompt-card">Share a story about school, some fun activity, a service project, or church
                    related!</div>
                <div class="prompt-card">What&rsquo;s something you&rsquo;ve learned from Mellody?</div>
            </div>
        </div>
        <div class="reveal" style="text-align:center;margin-top:2.5rem;">
            <a href="#record-video" class="hero-cta-primary" style="text-decoration:none;margin-right:0.75rem;">
                &#9654; &nbsp; Send a Video
            </a>
            <a href="#share-memory" class="hero-cta-secondary" style="text-decoration:none;">
                &#10022; &nbsp; Share a Memory
            </a>
        </div>
    </div>

    <!-- ═══════════════════════════════
   VIDEO SECTION  (above memory form)
═══════════════════════════════ -->
    <section id="record-video" class="video-section">
        <div style="position:relative;z-index:1;">
            <div class="reveal">
                <span class="video-badge">&#9654; &nbsp; Video Message &nbsp; &#9654;</span>
                <h2 class="video-main-title">Record a Video<br><em>for Mellody</em></h2>
                <p class="video-sub">
                    We&rsquo;ll be playing personal video messages at the party.
                    Imagine Mellody watching your face, hearing your voice, seeing your smile &mdash;
                    that&rsquo;s a gift that no printed word can replace.
                </p>
            </div>

            <div class="video-card reveal">
                <div class="video-icon-ring">&#127909;</div>

                <div class="example-video-wrap">
                    <p class="example-video-label">&#9654; &nbsp; Watch an Example &nbsp; &#9654;</p>
                    <div class="phone-frame">
                        <video style="height: 350px;" src="/Shelcee-Funny.MOV.mp4" controls playsinline
                            preload="metadata"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"></video>
                        <div class="video-placeholder-inner" style="display:none;">
                            <div class="vp-icon">&#127909;</div>
                            <p class="vp-text">Example video coming soon!</p>
                        </div>
                    </div>
                    <p class="example-video-caption">Yours doesn&rsquo;t have to be perfect &mdash; just from the heart
                    </p>
                </div>

                <div class="video-divider" style="margin-top:0;"></div>

                <div class="video-steps">
                    <div class="video-step">
                        <div class="video-step-num">1</div>
                        <div class="video-step-text"><strong>Open your camera</strong>Record a selfie video on your
                            phone or computer</div>
                    </div>
                    <div class="video-step">
                        <div class="video-step-num">2</div>
                        <div class="video-step-text"><strong>Speak from the heart</strong>Any length, any format
                            &mdash; we want to see <em style="color:var(--gold-light);">you</em></div>
                    </div>
                    <div class="video-step">
                        <div class="video-step-num">3</div>
                        <div class="video-step-text"><strong>Upload it below</strong>Enter your name, choose your
                            video, and tap Upload</div>
                    </div>
                </div>

                <div class="video-divider"></div>

                {{-- ── VIDEO UPLOAD FORM ── --}}
                <div id="video-form-wrap">
                    <div id="video-form-content">
                        <div class="video-upload-form">

                            <div style="margin-bottom:1.25rem;">
                                <label class="video-form-label" for="v-name">Your Name <span>*</span></label>
                                <input type="text" id="v-name" class="video-form-input"
                                    placeholder="First &amp; last name" autocomplete="name">
                            </div>

                            <div style="margin-bottom:1.25rem;">
                                <label class="video-form-label">Your Video <span>*</span></label>
                                <div class="video-drop-area" id="video-drop-area">
                                    <input type="file" id="v-file"
                                        accept="video/*,video/mp4,video/quicktime,video/x-msvideo,video/webm">
                                    <div class="vda-icon" id="vda-icon">&#127909;</div>
                                    <div class="vda-text" id="vda-text">
                                        <strong>Tap here to choose your video</strong>
                                        MP4, MOV, or any format &mdash; up to 500 MB
                                    </div>
                                    <div class="vda-filename" id="vda-filename"></div>
                                </div>
                            </div>

                            <div class="v-progress-wrap" id="v-progress-wrap">
                                <div class="v-progress-track">
                                    <div class="v-progress-bar" id="v-progress-bar"></div>
                                </div>
                                <p class="v-progress-text" id="v-progress-text">Uploading&hellip;</p>
                            </div>

                            <button class="btn-upload-video" id="v-submit-btn" type="button">
                                &#9654; &nbsp; Upload Video
                            </button>
                            <div class="video-error" id="video-error"></div>

                        </div>
                    </div>

                    <div class="video-success" id="video-success">
                        <div class="vs-icon">&#127881;</div>
                        <h3>Video received!</h3>
                        <p>Thank you so much. Your video will be treasured<br>and played for Mellody on her special day.
                        </p>
                        <p
                            style="margin-top:0.5rem;color:var(--gold-light);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.1rem;">
                            We can&rsquo;t wait to see you on May 2nd!</p>
                        <button class="btn-upload-another" onclick="resetVideoForm()">&#43; &nbsp; Upload Another
                            Video</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════
   SHARE A MEMORY — BIG SECTION
═══════════════════════════════ -->
    <section id="share-memory" class="memory-hero-section" style="margin-top:2rem;">
        <div style="text-align:center;position:relative;z-index:1;">
            <div class="reveal">
                <span class="memory-hero-badge">&#10022; &nbsp; The Memory Book &nbsp; &#10022;</span>
                <h2 class="memory-hero-title">Share a Memory<br>with Mellody</h2>
                <p class="memory-hero-sub">
                    Over the years the most treasured keepsakes Mom has kept have been the notes, cards, and memories
                    shared with her. The greatest gift we can give her is for her to know she made a lasting impact.
                    <br>Every story you share will be beautifully printed and bound into a keepsake book
                    presented to Mellody on her birthday. Don&rsquo;t hold back &mdash;
                    share as many memories as you&rsquo;d like!
                </p>
                <div class="memory-hero-accent">
                    <div class="acc-line"></div>
                    <div class="pulse-dot"></div>
                    <div class="acc-line r"></div>
                </div>
            </div>

            <div class="memory-form-container reveal">
                <div class="form-card">
                    <div id="form-content">
                        <form id="memory-form" novalidate>

                            <div class="form-section-label">About You</div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="f-name">Your Name <span>*</span></label>
                                    <input type="text" id="f-name" class="form-input"
                                        placeholder="First &amp; last name" required autocomplete="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="f-contact">Phone or Email <span>*</span></label>
                                    <input type="text" id="f-contact" class="form-input"
                                        placeholder="So we can reach you if needed" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group">
                                    <label class="form-label" for="f-year">Approximate Year of Memory</label>
                                    <select id="f-year" class="form-select">
                                        <option value="">Select a year or era...</option>
                                        <option>1950s</option>
                                        <option>1960s</option>
                                        <option>1970s</option>
                                        <option>1975</option>
                                        <option>1976</option>
                                        <option>1977</option>
                                        <option>1978</option>
                                        <option>1979</option>
                                        <option>1980</option>
                                        <option>1981</option>
                                        <option>1982</option>
                                        <option>1983</option>
                                        <option>1984</option>
                                        <option>1985</option>
                                        <option>1986</option>
                                        <option>1987</option>
                                        <option>1988</option>
                                        <option>1989</option>
                                        <option>1990</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option>2007</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="f-relation">Your Relationship to Mellody</label>
                                    <select id="f-relation" class="form-select">
                                        <option value="">Select...</option>
                                        <option>Family</option>
                                        <option>Close Friend</option>
                                        <option>Neighbor</option>
                                        <option>Church Friend</option>
                                        <option>Childhood Friend</option>
                                        <option>Coworker / Colleague</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-section-label" style="margin-top:0.5rem;">Your Story</div>
                            <div class="form-group">
                                <label class="form-label">Tap a prompt to use it, or write your own</label>
                                <div class="prompt-chips" id="prompt-chips">
                                    <div class="prompt-chip" onclick="usePrompt(this)">When you think of Mellody...
                                    </div>
                                    <div class="prompt-chip" onclick="usePrompt(this)">A time she helped me...</div>
                                    <div class="prompt-chip" onclick="usePrompt(this)">A moment I&rsquo;ll never
                                        forget...</div>
                                    <div class="prompt-chip" onclick="usePrompt(this)">Something funny she did...
                                    </div>
                                    <div class="prompt-chip" onclick="usePrompt(this)">What I learned from her...
                                    </div>
                                    <div class="prompt-chip" onclick="usePrompt(this)">How she blessed my life...
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="f-story">Your Memory <span>*</span></label>
                                <textarea id="f-story" class="form-textarea" required
                                    placeholder="Take your time... This is your gift to Mellody. Every word will be treasured.&#10;&#10;Feel free to share more than one story &mdash; just separate them with a line break!"></textarea>
                            </div>

                            <div class="form-section-label">Your Photo <span
                                    style="font-weight:400;letter-spacing:0;text-transform:none;font-size:0.7rem;color:var(--text-light);font-family:'Cormorant Garamond',serif;font-style:italic;">(Optional
                                    — appears next to your memory in the printed book)</span></div>
                            <div class="form-group">
                                <div class="photo-upload-area" id="upload-area">
                                    <input type="file" id="f-photo" accept="image/*">
                                    <div class="upload-icon">&#128247;</div>
                                    <p class="upload-text">Tap to upload a selfie or photo of yourself<br><small
                                            style="opacity:0.7;">Saved securely &mdash; not attached to any
                                            email</small></p>
                                    <img class="upload-preview" id="photo-preview" src="" alt="Preview">
                                </div>
                            </div>

                            <button type="submit" class="btn-submit" id="submit-btn">
                                &#10022; &nbsp; Submit My Memory &nbsp; &#10022;
                            </button>
                            <div class="form-error" id="form-error"></div>
                            <p class="add-another-teaser">
                                Have more than one story? <a onclick="void(0)">You can submit as many as you like!</a>
                                After submitting, you&rsquo;ll be able to add another.
                            </p>
                        </form>
                    </div>

                    <div class="success-message" id="success-msg">
                        <div class="success-icon">&#10024;</div>
                        <h3>Your memory has been received!</h3>
                        <p>Thank you so much. Your story will be treasured and printed in Mellody&rsquo;s keepsake book.
                        </p>
                        <p
                            style="margin-top:0.5rem;color:var(--gold);font-family:'Cormorant Garamond',serif;font-style:italic;font-size:1.1rem;">
                            We can&rsquo;t wait to see you on May 2nd!</p>
                        <button class="btn-another" onclick="resetForm()">&#43; &nbsp; Add Another Memory</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════
   MEMORIES WALL (hidden until ready)
═══════════════════════════════ -->
    <div class="memories-section" style="display:none;">
        <div class="memories-inner">
            <div class="reveal" style="text-align:center;">
                <h2 class="section-heading">Memories Already Shared</h2>
                <p class="section-sub">These beautiful stories are waiting to be read by Mellody on her special day.
                </p>
            </div>
            <div class="memories-grid" id="memories-grid">
                <p class="no-memories">Be the first to share a memory! &#10022;</p>
            </div>
            <div style="text-align:center;margin-top:3rem;" class="reveal">
                <a href="#share-memory" class="hero-cta-primary" style="text-decoration:none;">
                    &#10022; &nbsp; Share Your Memory
                </a>
            </div>
        </div>
    </div>

    <footer>
        <p class="footer-title">Celebrating 75 Years of Mellody</p>
        <p>May 2nd, 2026 &nbsp;&#10022;&nbsp; Ogden, Utah</p>
        <p style="margin-top:0.5rem;opacity:0.4;font-size:0.72rem;">Made with love &#9825;</p>
    </footer>

    <script>
        // ── Scroll-reveal ───────────────────────────────────────────────────
        const revealEls = document.querySelectorAll('.reveal');
        const obs = new IntersectionObserver(entries => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    obs.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.08
        });
        revealEls.forEach(el => obs.observe(el));

        // ── Photo preview ───────────────────────────────────────────────────
        document.getElementById('f-photo').addEventListener('change', function() {
            if (!this.files[0]) return;
            const reader = new FileReader();
            reader.onload = e => {
                document.getElementById('photo-preview').src = e.target.result;
                document.getElementById('photo-preview').style.display = 'block';
                document.querySelector('.upload-icon').style.display = 'none';
                document.querySelector('.upload-text').style.display = 'none';
            };
            reader.readAsDataURL(this.files[0]);
        });

        // ── Video file picker display ────────────────────────────────────────
        document.getElementById('v-file').addEventListener('change', function() {
            const file = this.files[0];
            const area = document.getElementById('video-drop-area');
            const fname = document.getElementById('vda-filename');
            const icon = document.getElementById('vda-icon');
            const text = document.getElementById('vda-text');
            if (file) {
                area.classList.add('has-file');
                fname.textContent = '✔ ' + file.name + ' (' + (file.size / (1024 * 1024)).toFixed(1) + ' MB)';
                fname.style.display = 'block';
                icon.textContent = '🎬';
                text.innerHTML = '<strong>Video selected!</strong>Tap Upload Video when you\'re ready';
            }
        });

        // ── Prompt chips ─────────────────────────────────────────────────────
        function usePrompt(el) {
            const ta = document.getElementById('f-story');
            const text = el.textContent.replace(/\u2019/g, "'").replace(/\u2018/g, "'");
            ta.value = text + ' ';
            ta.focus();
            ta.setSelectionRange(ta.value.length, ta.value.length);
        }

        // ── VIDEO UPLOAD ─────────────────────────────────────────────────────
        // Backend route: POST /upload-video → MemoryController@uploadVideo
        // Uploads file to DigitalOcean Spaces, returns { success: true }
        // Filename format: videos/{slug-name}_{timestamp}.{ext}
        // ─────────────────────────────────────────────────────────────────────
        document.getElementById('v-submit-btn').addEventListener('click', function() {
            const name = document.getElementById('v-name').value.trim();
            const file = document.getElementById('v-file').files[0];
            const errEl = document.getElementById('video-error');
            const btn = this;

            errEl.style.display = 'none';

            if (!name) {
                errEl.textContent = 'Please enter your name before uploading.';
                errEl.style.display = 'block';
                document.getElementById('v-name').focus();
                return;
            }
            if (!file) {
                errEl.textContent = 'Please choose a video file first.';
                errEl.style.display = 'block';
                return;
            }
            const MAX_MB = 1024; // 1 GB limit
            if (file.size > MAX_MB * 1024 * 1024) {
                errEl.textContent = 'Video is too large (max ' + MAX_MB +
                    ' MB). Try trimming it or text Shalyce at 801-645-1948.';
                errEl.style.display = 'block';
                return;
            }

            btn.disabled = true;
            btn.textContent = 'Uploading…';

            const progressWrap = document.getElementById('v-progress-wrap');
            const progressBar = document.getElementById('v-progress-bar');
            const progressText = document.getElementById('v-progress-text');
            progressWrap.style.display = 'block';
            progressBar.style.width = '0%';
            progressText.textContent = '0%';

            const formData = new FormData();
            formData.append('name', name);
            formData.append('video', file);

            const xhr = new XMLHttpRequest();
            xhr.open('POST', '/upload-video');
            xhr.setRequestHeader('X-CSRF-TOKEN', document.querySelector('meta[name="csrf-token"]').content);
            xhr.setRequestHeader('Accept', 'application/json');

            xhr.upload.addEventListener('progress', function(e) {
                if (e.lengthComputable) {
                    const pct = Math.round((e.loaded / e.total) * 100);
                    progressBar.style.width = pct + '%';
                    progressText.textContent = pct < 100 ? pct + '% uploaded…' : 'Processing…';
                }
            });

            xhr.onload = function() {
                try {
                    const data = JSON.parse(xhr.responseText);
                    if (xhr.status === 200 && data.success) {
                        document.getElementById('video-form-content').style.display = 'none';
                        document.getElementById('video-success').style.display = 'block';
                    } else {
                        throw new Error(data.message || 'Upload failed. Please try again.');
                    }
                } catch (err) {
                    progressWrap.style.display = 'none';
                    errEl.textContent = err.message ||
                        'Something went wrong. Please try again or text Shalyce at 801-645-1948.';
                    errEl.style.display = 'block';
                    btn.disabled = false;
                    btn.innerHTML = '&#9654; &nbsp; Upload Video';
                }
            };

            xhr.onerror = function() {
                progressWrap.style.display = 'none';
                errEl.textContent =
                    'Network error. Please check your connection and try again, or text Shalyce at 801-645-1948.';
                errEl.style.display = 'block';
                btn.disabled = false;
                btn.innerHTML = '&#9654; &nbsp; Upload Video';
            };

            xhr.send(formData);
        });

        function resetVideoForm() {
            document.getElementById('v-name').value = '';
            document.getElementById('v-file').value = '';
            document.getElementById('vda-filename').style.display = 'none';
            document.getElementById('vda-icon').textContent = '🎥';
            document.getElementById('vda-text').innerHTML =
                '<strong>Tap here to choose your video</strong>MP4, MOV, or any format — up to 1024 MB';
            document.getElementById('video-drop-area').classList.remove('has-file');
            document.getElementById('v-progress-wrap').style.display = 'none';
            document.getElementById('v-progress-bar').style.width = '0%';
            document.getElementById('video-error').style.display = 'none';
            const btn = document.getElementById('v-submit-btn');
            btn.disabled = false;
            btn.innerHTML = '&#9654; &nbsp; Upload Video';
            document.getElementById('video-form-content').style.display = 'block';
            document.getElementById('video-success').style.display = 'none';
        }

        // ── MEMORY / STORY FORM ──────────────────────────────────────────────
        // Backend route: POST /submit-memory → MemoryController@store
        // - Photo (if included) is uploaded to DO Spaces, URL saved to DB
        // - Email sent via Laravel SMTP contains only text fields + photo URL link
        // - No attachments are emailed
        // ─────────────────────────────────────────────────────────────────────
        document.getElementById('memory-form').addEventListener('submit', async function(e) {
            e.preventDefault();

            const name = document.getElementById('f-name').value.trim();
            const contact = document.getElementById('f-contact').value.trim();
            const story = document.getElementById('f-story').value.trim();
            const year = document.getElementById('f-year').value || 'Unknown';
            const relation = document.getElementById('f-relation').value || '';
            const errEl = document.getElementById('form-error');

            errEl.style.display = 'none';

            if (!name || !contact || !story) {
                errEl.textContent = 'Please fill in your name, contact info, and memory before submitting.';
                errEl.style.display = 'block';
                return;
            }

            const photoFile = document.getElementById('f-photo').files[0];

            const btn = document.getElementById('submit-btn');
            btn.disabled = true;
            btn.innerHTML = '&#10004; &nbsp; Sending&hellip;';

            const formData = new FormData();
            formData.append('name', name);
            formData.append('contact', contact);
            formData.append('story', story);
            formData.append('year', year);
            formData.append('relation', relation);
            if (photoFile) formData.append('photo', photoFile);

            try {
                const res = await fetch('/submit-memory', {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json',
                    },
                    body: formData,
                });

                const contentType = res.headers.get('content-type') || '';
                if (!contentType.includes('application/json')) {
                    if (res.status === 413) {
                        throw new Error('The photo is too large. Please try a smaller image.');
                    }
                    throw new Error('Something went wrong. Please try again or text Shalyce at 801-645-1948.');
                }

                const data = await res.json();
                if (res.ok && data.success) {
                    document.getElementById('form-content').style.display = 'none';
                    document.getElementById('success-msg').style.display = 'block';
                } else {
                    throw new Error(data.message || 'Something went wrong.');
                }
            } catch (err) {
                errEl.textContent = err.message || 'Something went wrong. Please try again.';
                errEl.style.display = 'block';
                btn.disabled = false;
                btn.innerHTML = '&#10022; &nbsp; Submit My Memory &nbsp; &#10022;';
            }
        });

        // ── Reset memory form for "Add Another Memory" ───────────────────────
        function resetForm() {
            document.getElementById('memory-form').reset();
            document.getElementById('photo-preview').style.display = 'none';
            document.querySelector('.upload-icon').style.display = 'block';
            document.querySelector('.upload-text').style.display = 'block';
            document.getElementById('form-error').style.display = 'none';
            const btn = document.getElementById('submit-btn');
            btn.disabled = false;
            btn.innerHTML = '&#10022; &nbsp; Submit My Memory &nbsp; &#10022;';
            document.getElementById('form-content').style.display = 'block';
            document.getElementById('success-msg').style.display = 'none';
        }
    </script>
</body>

</html>
