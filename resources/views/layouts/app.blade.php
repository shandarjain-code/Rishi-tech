<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
        $seoTitle = trim($__env->yieldContent('title')) ?: 'Rishi Jain | Full Stack Developer — Laravel, React & Mobile Apps';
        $seoDescription = trim($__env->yieldContent('description')) ?: 'Hire Rishi Jain: full stack developer (8+ years) for Laravel, React, Next.js, Node.js, Flutter apps, WordPress, and SaaS. Fast delivery, clients worldwide.';
        $seoCanonical = url()->current();
        $siteUrl = rtrim(config('app.url'), '/');
    @endphp
    <title>{{ $seoTitle }}</title>
    <meta name="description" content="{{ Str::limit(strip_tags($seoDescription), 160, '') }}">
    <meta name="robots" content="@yield('robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1')">
    <meta name="author" content="Rishi Jain">
    <meta name="theme-color" content="#000000">
    <link rel="canonical" href="{{ $seoCanonical }}">

    <meta property="og:type" content="@yield('og_type', 'website')">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="Rishi Jain — Full Stack Developer">
    <meta property="og:title" content="{{ Str::limit($seoTitle, 70, '') }}">
    <meta property="og:description" content="{{ Str::limit(strip_tags($seoDescription), 200, '') }}">
    <meta property="og:url" content="{{ $seoCanonical }}">
    @hasSection('og_image')
        <meta property="og:image" content="@yield('og_image')">
    @else
        <meta property="og:image" content="{{ $siteUrl }}/favicon.ico">
    @endif

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ Str::limit($seoTitle, 70, '') }}">
    <meta name="twitter:description" content="{{ Str::limit(strip_tags($seoDescription), 200, '') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=KoHo:wght@400;500;600;700&family=Lalezar&family=Leckerli+One&family=Lexend:wght@500;600;700&display=swap" rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['KoHo', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        intro: ['Lalezar', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                        stylish: ['"Leckerli One"', 'cursive'],
                        button: ['Lexend', 'ui-sans-serif', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        brand: '#2563EB',
                        ink: '#FFFFFF',
                        night: '#000000',
                    },
                },
            },
        };
    </script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/plyr@3.7.8/dist/plyr.css" crossorigin="anonymous">

    <style>
        [x-cloak] { display: none !important; }
        .gradient-text,
        .cta-band,
        .cta-band-dark {
            background: transparent;
        }
        :root {
            --ui-bg: #F8F7F3;
            --ui-text: #111111;
            --ui-accent: #2563EB;
            --ui-muted: rgba(17, 17, 17, 0.68);
            --ui-soft: rgba(37, 99, 235, 0.12);
            --ui-line: rgba(17, 17, 17, 0.12);
            --ui-card: rgba(255, 255, 255, 0.76);
            --ui-card-solid: rgba(255, 255, 255, 0.78);
            --ui-canvas: radial-gradient(circle at 78% 6%, rgba(37, 99, 235, 0.12), transparent 32%), linear-gradient(180deg, #FFFDF6 0%, #F7F4EE 42%, #FFFDF7 100%);
            --ui-radius: 18px;
            --ui-shadow: 0 22px 60px rgba(17, 17, 17, 0.1), 0 16px 40px rgba(37, 99, 235, 0.08);
        }
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 88px;
        }
        body {
            background: var(--ui-canvas);
            color: var(--ui-text);
            font-family: KoHo, ui-sans-serif, system-ui, sans-serif;
            font-size: 16px;
            letter-spacing: 0.015em;
            opacity: 1;
            transition: opacity 280ms ease, transform 280ms ease;
        }
        .font-medium, .font-semibold, .font-bold, .font-extrabold, .font-black, 
        h1, h2, h3, h4, h5, h6, strong, b, 
        label {
            letter-spacing: 0.035em;
        }
        body.page-exiting {
            opacity: 0;
            transform: translateX(-14px);
        }
        body::before {
            background-image:
                linear-gradient(rgba(17, 17, 17, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(17, 17, 17, 0.04) 1px, transparent 1px);
            background-size: 46px 46px;
            border-radius: 0;
            filter: none;
            inset: 0;
            opacity: 1;
            width: auto;
            height: auto;
        }
        body::before,
        body::after {
            content: "";
            position: fixed;
            pointer-events: none;
            z-index: -1;
        }
        body::after {
            right: -210px;
            bottom: 5vh;
            width: 520px;
            height: 520px;
            border-radius: 9999px;
            background: var(--ui-accent);
            opacity: 0.16;
            filter: blur(135px);
        }
        main, section, footer, nav { position: relative; }
        .ui-decor-circle {
            position: absolute;
            border-radius: 9999px;
            background: var(--ui-accent);
            opacity: 0.5;
            filter: blur(70px);
            pointer-events: none;
            z-index: 0;
        }
        .ui-section,
        .section-dark,
        .section-light,
        .section-soft {
            overflow: hidden;
            background: transparent;
            color: var(--ui-text);
        }
        .section-dark,
        .section-light {
            --ui-bg: #F8F7F3;
            --ui-text: #111111;
            --ui-muted: rgba(17, 17, 17, 0.68);
            --ui-line: rgba(17, 17, 17, 0.12);
            --ui-card-solid: rgba(255, 255, 255, 0.84);
        }
        .section-soft {
            --ui-bg: #F6F3EF;
            --ui-text: #111111;
            --ui-muted: rgba(17, 17, 17, 0.66);
            --ui-line: rgba(17, 17, 17, 0.11);
            --ui-card-solid: rgba(255, 255, 255, 0.78);
        }
        .ui-card {
            border: 1px solid var(--ui-line);
            background: var(--ui-card-solid);
            border-radius: var(--ui-radius);
            box-shadow: var(--ui-shadow);
            color: var(--ui-text);
            backdrop-filter: blur(18px);
        }
        .ui-eyebrow,
        label,
        .text-sm,
        .text-xs {
            font-family: Lalezar, ui-sans-serif, system-ui, sans-serif;
            letter-spacing: 0;
        }
        .ui-heading-main {
            font-family: Lalezar, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(46px, 7vw, 86px);
            line-height: 0.9;
            letter-spacing: 0;
        }
        .ui-heading-secondary,
        h2 {
            font-family: Lalezar, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(34px, 4.8vw, 58px);
            line-height: 1;
            letter-spacing: 0;
        }
        .ui-copy,
        p,
        li,
        blockquote {
            font-family: KoHo, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(16px, 1.8vw, 18px);
            line-height: 1.65;
            color: var(--ui-muted);
        }
        .ui-logo,
        .gradient-text {
            color: var(--ui-accent);
            font-family: "Leckerli One", cursive;
            -webkit-text-fill-color: currentColor;
            background: none;
        }
        .ui-btn,
        a[href*="start-project"],
        button[type="submit"],
        .cta-band a,
        .cta-band button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            background: var(--ui-accent) !important;
            color: #fff !important;
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(15px, 1.6vw, 17px);
            font-weight: 700;
            box-shadow: 0 14px 30px rgba(37, 99, 235, 0.28);
            transition: transform 180ms ease, box-shadow 180ms ease, filter 180ms ease;
        }
        .ui-btn:hover,
        a[href*="start-project"]:hover,
        button[type="submit"]:hover,
        .cta-band a:hover,
        .cta-band button:hover {
            transform: translateY(-2px);
            filter: brightness(1.08);
            box-shadow: 0 18px 42px rgba(37, 99, 235, 0.42);
        }
        .ui-btn-secondary {
            background: color-mix(in srgb, var(--ui-card-solid) 62%, transparent) !important;
            border: 1px solid var(--ui-line);
            color: var(--ui-text) !important;
        }
        .cta-band,
        .cta-band-dark {
            background: transparent;
            color: var(--ui-text);
        }
        section.bg-white,
        section.bg-rose-50\/50,
        section.bg-rose-50\/60,
        section.bg-rose-50\/40,
        section.bg-slate-50\/50,
        section.bg-slate-900,
        section.bg-slate-950 {
            background: transparent !important;
        }
        .bg-rose-100,
        .bg-rose-500,
        .bg-rose-600 {
            background-color: var(--ui-accent) !important;
        }
        .text-rose-600,
        .text-rose-700,
        .text-emerald-600,
        .text-green-600 {
            color: var(--ui-accent) !important;
        }
        .text-slate-900,
        .text-gray-700,
        .text-gray-800,
        .text-slate-800,
        .text-white {
            color: var(--ui-text) !important;
        }
        .ui-btn.text-white,
        .bg-rose-500.text-white,
        .bg-rose-600.text-white,
        button[type="submit"].text-white {
            color: #fff !important;
        }
        .text-slate-600,
        .text-gray-600,
        .text-gray-500,
        .text-slate-500,
        .text-slate-300 {
            color: var(--ui-muted) !important;
        }
        .border,
        .border-t,
        .border-b,
        .border-y,
        .border-2,
        .border-slate-200\/80,
        .border-rose-100\/80 {
            border-color: var(--ui-line) !important;
        }
        input,
        textarea {
            background: rgba(255, 255, 255, 0.06) !important;
            border-color: var(--ui-line) !important;
            color: var(--ui-text) !important;
            border-radius: 18px !important;
            font-family: KoHo, ui-sans-serif, system-ui, sans-serif;
        }
        input::placeholder,
        textarea::placeholder { color: rgba(255,255,255,0.45); }
        input[type="radio"] { accent-color: var(--ui-accent); }
        .rounded-xl,
        .rounded-2xl { border-radius: var(--ui-radius) !important; }
        .shadow-lg,
        .shadow-md,
        .shadow-xl { box-shadow: var(--ui-shadow) !important; }
        .section-kicker {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.08em;
            line-height: 1;
            text-transform: uppercase;
        }
        .section-kicker::before {
            content: "";
            width: 1.45rem;
            height: 1px;
            background: var(--ui-accent);
            box-shadow: 0 0 18px rgba(37, 99, 235, 0.7);
        }
        .nav-pill {
            border: 1px solid rgba(17, 17, 17, 0.1);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.58);
            padding: 0.28rem;
            box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.8), 0 12px 30px rgba(17, 17, 17, 0.06);
        }
        .nav-pill a {
            border-radius: 999px;
            padding: 0.62rem 0.92rem;
            color: rgba(17, 17, 17, 0.64);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.88rem;
            font-weight: 600;
            line-height: 1;
            transition: background 180ms ease, color 180ms ease;
        }
        .nav-pill a:hover {
            background: rgba(17, 17, 17, 0.055);
            color: #111;
        }
        .hero-section {
            isolation: isolate;
        }
        .hero-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(17, 17, 17, 0.045) 1px, transparent 1px),
                linear-gradient(90deg, rgba(17, 17, 17, 0.045) 1px, transparent 1px);
            background-size: 44px 44px;
            mask-image: linear-gradient(90deg, #000, transparent 82%);
            pointer-events: none;
        }
        .hero-shape {
            position: absolute;
            border: 1px solid rgba(37, 99, 235, 0.2);
            pointer-events: none;
        }
        .hero-shape-one {
            right: 11%;
            top: 15%;
            width: 18rem;
            height: 18rem;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.075);
        }
        .hero-shape-two {
            right: 2%;
            bottom: 12%;
            width: 10rem;
            height: 10rem;
            border-radius: 28px;
            transform: rotate(18deg);
            background: rgba(17, 17, 17, 0.04);
        }
        .hero-portrait-wrap {
            position: relative;
            min-height: 430px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .hero-portrait-card {
            position: relative;
            width: min(78vw, 360px);
            aspect-ratio: 1;
            overflow: hidden;
            border: 1px solid rgba(17, 17, 17, 0.16);
            border-radius: 999px;
            background: #fff;
            padding: 0.65rem;
            box-shadow: 0 32px 90px rgba(17, 17, 17, 0.18);
        }
        .hero-portrait-card img {
            width: 100%;
            height: 100%;
            border-radius: inherit;
            object-fit: cover;
            filter: saturate(0.92) contrast(1.02);
        }
        .hero-portrait-ring {
            position: absolute;
            width: min(84vw, 410px);
            aspect-ratio: 1;
            border: 1px solid rgba(17, 17, 17, 0.24);
            border-radius: 999px;
            transform: translate(18px, 8px);
        }
        .hero-floating-note {
            position: absolute;
            right: 0.5rem;
            bottom: 4.5rem;
            border: 1px solid rgba(17, 17, 17, 0.12);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.78);
            padding: 0.85rem 1rem;
            box-shadow: 0 18px 45px rgba(17, 17, 17, 0.12);
            backdrop-filter: blur(14px);
        }
        .hero-floating-note strong,
        .hero-floating-note span {
            display: block;
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            line-height: 1.2;
        }
        .hero-floating-note strong {
            color: var(--ui-text);
            font-size: 0.9rem;
        }
        .hero-floating-note span {
            margin-top: 0.2rem;
            color: var(--ui-muted);
            font-size: 0.78rem;
        }
        .hero-stat,
        .metric-card,
        .service-card,
        .skill-card,
        .project-card {
            border: 1px solid var(--ui-line);
            background: var(--ui-card-solid);
            box-shadow: var(--ui-shadow);
            backdrop-filter: blur(18px);
        }
        .hero-stat {
            border-radius: 16px;
            padding: 0.9rem 1rem;
        }
        .hero-stat strong {
            display: block;
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.08rem;
            line-height: 1;
        }
        .hero-stat span,
        .metric-card p {
            display: block;
            margin-top: 0.35rem;
            color: var(--ui-muted);
            font-size: 0.82rem;
            line-height: 1.2;
        }
        .about-section,
        .services-section,
        .skills-section {
            border-top: 1px solid rgba(17, 17, 17, 0.055);
        }
        .about-section::before,
        .services-section::before,
        .portfolio-section::before,
        .skills-section::before,
        .cta-band::before,
        footer::before {
            content: "";
            position: absolute;
            pointer-events: none;
            z-index: 0;
            border: 1px solid rgba(37, 99, 235, 0.22);
            background: rgba(255, 255, 255, 0.16);
            box-shadow: 0 24px 70px rgba(17, 17, 17, 0.08);
            backdrop-filter: blur(10px);
        }
        .about-section::before {
            right: max(2rem, 8vw);
            top: 4rem;
            width: 7.5rem;
            height: 7.5rem;
            border-radius: 28px;
            transform: rotate(16deg);
        }
        .services-section::before {
            left: 5vw;
            bottom: 4rem;
            width: 13rem;
            height: 13rem;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.07);
        }
        .portfolio-section::before {
            right: 4vw;
            top: 6rem;
            width: 9rem;
            height: 9rem;
            border-radius: 30px;
            transform: rotate(-14deg);
        }
        .skills-section::before {
            left: 8vw;
            top: 5rem;
            width: 10rem;
            height: 10rem;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.055);
        }
        .cta-band::before {
            right: 13vw;
            bottom: -2rem;
            width: 8rem;
            height: 8rem;
            border-radius: 26px;
            transform: rotate(18deg);
        }
        footer::before {
            left: 5vw;
            top: 2.5rem;
            width: 8rem;
            height: 8rem;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.05);
        }
        .metric-card {
            min-height: 98px;
            border-radius: 16px;
            padding: 1.1rem;
        }
        .metric-card h3 {
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1;
        }
        .about-more {
            max-width: 38rem;
            margin-top: -0.7rem;
            margin-bottom: 1.15rem;
        }
        .about-more p {
            color: var(--ui-muted);
            font-size: 1rem;
            line-height: 1.65;
        }
        .about-actions {
            margin: -0.25rem 0 1.35rem;
        }
        .social-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: 1.35rem;
        }
        .social-link {
            display: inline-flex;
            width: 2.8rem;
            height: 2.8rem;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            color: var(--ui-text);
            box-shadow: 0 14px 34px rgba(17, 17, 17, 0.08);
            transition: transform 180ms ease, box-shadow 180ms ease, color 180ms ease, background 180ms ease;
        }
        .social-link svg {
            width: 1.18rem;
            height: 1.18rem;
        }
        .social-link:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 44px rgba(17, 17, 17, 0.12);
        }
        .social-instagram:hover { background: linear-gradient(135deg, #F58529, #DD2A7B, #8134AF); color: #fff; }
        .social-facebook:hover { background: #1877F2; color: #fff; }
        .social-linkedin:hover { background: #0A66C2; color: #fff; }
        .social-whatsapp:hover { background: #25D366; color: #fff; }
        .social-freelancer {
            color: #29B2FE;
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-weight: 800;
        }
        .social-freelancer:hover { background: #29B2FE; color: #fff; }
        .profile-frame {
            width: min(100%, 340px);
            aspect-ratio: 1;
            border-radius: 34px !important;
            transform: rotate(3deg);
        }
        .profile-frame img {
            border-radius: 26px;
            transform: rotate(-3deg) scale(1.08);
        }
        .profile-orbit {
            position: absolute;
            inset: -18px 28px 26px -18px;
            border: 1px solid rgba(37, 99, 235, 0.34);
            border-radius: 38px;
            transform: rotate(-7deg);
        }
        .service-card {
            position: relative;
            display: flex;
            min-height: 318px;
            flex-direction: column;
            flex: 0 0 min(82vw, 340px);
            overflow: hidden;
            border-radius: 20px;
            padding: 1.35rem;
            scroll-snap-align: start;
            transition: border-color 180ms ease, transform 180ms ease, background 180ms ease;
        }
        .service-carousel {
            position: relative;
            z-index: 1;
        }
        .service-carousel__intro {
            position: relative;
            align-self: stretch;
            padding-top: 0.25rem;
        }
        .service-carousel__intro .ui-copy {
            margin-top: 0.9rem;
            max-width: 15rem;
        }
        .service-carousel__actions {
            display: flex;
            align-items: center;
            gap: 0.7rem;
            margin-top: 2rem;
        }
        .service-nav {
            display: inline-flex;
            width: 3rem;
            height: 3rem;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.68);
            color: var(--ui-muted);
            box-shadow: 0 16px 34px rgba(17, 17, 17, 0.08);
            transition: transform 180ms ease, background 180ms ease, color 180ms ease;
        }
        .service-nav span {
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.5rem;
            line-height: 1;
            transform: translateY(-1px);
        }
        .service-nav:hover,
        .service-nav-next {
            background: var(--ui-accent);
            color: #fff;
        }
        .service-nav:hover {
            transform: translateY(-2px);
        }
        .service-view-all {
            display: inline-flex;
            margin-top: 1.25rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.86rem;
            font-weight: 700;
        }
        .service-carousel__stage {
            position: relative;
            min-width: 0;
            overflow: hidden;
            padding: 0.2rem 3.2rem 1.25rem;
        }
        .service-track {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            padding: 0.1rem 0.2rem 1.6rem;
        }
        .service-track::-webkit-scrollbar {
            display: none;
        }
        .service-nav-side {
            position: absolute;
            top: 50%;
            z-index: 5;
            transform: translateY(-50%);
        }
        .service-nav-side:hover {
            transform: translateY(calc(-50% - 2px));
        }
        .service-nav-left {
            left: 0.3rem;
        }
        .service-nav-right {
            right: 0.3rem;
        }
        @media (min-width: 1024px) {
            .service-card {
                flex-basis: calc((100% - 3rem) / 3);
            }
        }
        .service-card::after {
            content: "";
            position: absolute;
            inset: auto 1.35rem 0 1.35rem;
            height: 3px;
            border-radius: 999px 999px 0 0;
            background: linear-gradient(90deg, var(--ui-accent), transparent);
            opacity: 0.72;
        }
        .service-card:hover,
        .skill-card:hover {
            transform: translateY(-4px);
            border-color: rgba(37, 99, 235, 0.38);
        }
        .service-card__top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 1.15rem;
        }
        .service-card__index {
            color: color-mix(in srgb, var(--ui-muted) 58%, transparent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.82rem;
            font-weight: 700;
        }
        .service-card__label,
        .read-more {
            border: 1px solid rgba(37, 99, 235, 0.28);
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.1);
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.72rem;
            font-weight: 700;
            line-height: 1;
        }
        .service-card__label {
            padding: 0.55rem 0.75rem;
        }
        .service-card__icon {
            display: inline-flex;
            width: 3.9rem;
            height: 3.9rem;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.35rem;
            border-radius: 999px;
            background:
                radial-gradient(circle at 30% 25%, rgba(255, 255, 255, 0.36), transparent 34%),
                linear-gradient(135deg, var(--service-icon-from, #2563EB), var(--service-icon-to, #FB7185));
            color: #fff;
            box-shadow:
                0 18px 42px color-mix(in srgb, var(--service-icon-from, #2563EB) 28%, transparent),
                inset 0 1px 0 rgba(255, 255, 255, 0.36);
            position: relative;
        }
        .service-card__icon::after {
            content: "";
            position: absolute;
            inset: -0.45rem;
            z-index: -1;
            border-radius: inherit;
            background: color-mix(in srgb, var(--service-icon-to, #FB7185) 18%, transparent);
            filter: blur(12px);
        }
        .service-card__icon svg {
            width: 1.75rem;
            height: 1.75rem;
            filter: drop-shadow(0 2px 3px rgba(0, 0, 0, 0.16));
        }
        .service-card h3,
        .skill-card h3 {
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.08rem;
            font-weight: 700;
            line-height: 1.25;
        }
        .about-expanded {
            max-width: 38rem;
        }
        .about-expanded .ui-copy {
            font-size: 1rem;
            line-height: 1.65;
        }
        .service-description {
            display: -webkit-box;
            margin-top: 0.9rem;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            font-size: 0.98rem;
            line-height: 1.65;
        }
        .read-more {
            margin-top: auto;
            width: max-content;
            padding: 0.55rem 0.8rem;
            text-decoration: none;
        }
        .project-card {
            display: flex;
            min-height: 100%;
            flex-direction: column;
            overflow: hidden;
            border-radius: 22px;
            transition: transform 200ms ease, box-shadow 200ms ease, border-color 200ms ease;
        }
        .project-card:hover {
            transform: translateY(-6px);
            border-color: rgba(37, 99, 235, 0.32);
            box-shadow: 0 26px 70px rgba(17, 17, 17, 0.16), 0 16px 40px rgba(37, 99, 235, 0.1);
        }
        .project-card .rounded-t-xl {
            border-radius: 22px 22px 0 0 !important;
        }
        .project-card__body {
            display: flex;
            flex: 1;
            flex-direction: column;
            padding: 1.3rem;
        }
        .project-card__body h3 {
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.08rem;
            font-weight: 700;
            line-height: 1.25;
        }
        .project-card__body p {
            display: -webkit-box;
            margin-top: 0.65rem;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 3;
            color: var(--ui-muted);
            font-size: 0.96rem;
            line-height: 1.55;
        }
        .project-badge {
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.1);
            padding: 0.3rem 0.62rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.7rem;
            font-weight: 700;
            line-height: 1;
        }
        .project-tech-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.45rem;
            margin-top: 1rem;
        }
        .project-tech-list span {
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: color-mix(in srgb, var(--ui-card-solid) 70%, transparent);
            padding: 0.38rem 0.62rem;
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.72rem;
            font-weight: 700;
            line-height: 1;
        }
        .project-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: auto;
            padding-top: 1.15rem;
        }
        .project-link {
            border: 1px solid rgba(37, 99, 235, 0.24);
            border-radius: 999px;
            padding: 0.55rem 0.8rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            line-height: 1;
            transition: background 180ms ease, color 180ms ease, transform 180ms ease;
        }
        .project-link:hover {
            background: var(--ui-accent);
            color: #fff;
            transform: translateY(-1px);
        }
        .project-link-muted {
            border-color: var(--ui-line);
            color: var(--ui-text);
        }
        .project-showcase {
            position: relative;
            z-index: 1;
            touch-action: auto;
            overscroll-behavior: auto;
        }
        .project-showcase__header {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 1.5rem;
            margin-bottom: 1.4rem;
        }
        .project-showcase__all {
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.64);
            padding: 0.75rem 1rem;
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.84rem;
            font-weight: 700;
            line-height: 1;
            transition: transform 180ms ease, border-color 180ms ease;
        }
        .project-showcase__all:hover {
            transform: translateY(-2px);
            border-color: rgba(37, 99, 235, 0.32);
        }
        .project-filters {
            display: flex;
            gap: 0.65rem;
            margin-bottom: 1.4rem;
            overflow-x: auto;
            padding-bottom: 0.3rem;
            scrollbar-width: thin;
        }
        .project-filters button {
            flex: 0 0 auto;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.62);
            padding: 0.72rem 0.95rem;
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.82rem;
            font-weight: 700;
            line-height: 1;
            transition: background 180ms ease, color 180ms ease, transform 180ms ease;
        }
        .project-filters button:hover,
        .project-filters button.is-active {
            background: var(--ui-text);
            color: #fff;
            transform: translateY(-1px);
        }
        .project-filter-dropdowns {
            display: grid;
            grid-template-columns: repeat(2, minmax(180px, 260px));
            align-items: end;
            overflow: visible;
            gap: 0.9rem;
            margin-bottom: 1.9rem;
            padding-bottom: 0;
        }
        .project-filter-dropdowns label {
            display: grid;
            gap: 0.45rem;
            min-width: 0;
        }
        .project-filter-dropdowns label > span {
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.74rem;
            font-weight: 700;
            line-height: 1;
            text-transform: uppercase;
        }
        .project-filter-dropdowns select {
            width: 100%;
            min-height: 48px;
            appearance: none;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background:
                linear-gradient(45deg, transparent 50%, var(--ui-muted) 50%) calc(100% - 20px) 50% / 6px 6px no-repeat,
                linear-gradient(135deg, var(--ui-muted) 50%, transparent 50%) calc(100% - 15px) 50% / 6px 6px no-repeat,
                rgba(255, 255, 255, 0.72);
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.86rem;
            font-weight: 700;
            padding: 0.72rem 2.45rem 0.72rem 1rem;
            box-shadow: 0 16px 35px rgba(17, 17, 17, 0.08);
            transition: border-color 180ms ease, box-shadow 180ms ease, transform 180ms ease;
        }
        .project-filter-dropdowns select:hover,
        .project-filter-dropdowns select:focus {
            border-color: rgba(37, 99, 235, 0.34);
            box-shadow: 0 18px 42px rgba(17, 17, 17, 0.1), 0 8px 28px rgba(37, 99, 235, 0.08);
            outline: none;
            transform: translateY(-1px);
        }
        .project-focus-shell {
            display: grid;
            grid-template-columns: auto minmax(0, 1fr) auto;
            align-items: center;
            gap: 1rem;
        }
        .project-slider-viewport {
            min-width: 0;
            overflow: hidden;
            border-radius: 28px;
        }
        .project-slider-track {
            display: flex;
            will-change: transform;
            transition: transform 560ms cubic-bezier(.22, 1, .36, 1);
        }
        .project-slide {
            flex: 0 0 100%;
            min-width: 0;
        }
        .project-focus-card {
            display: grid;
            grid-template-columns: minmax(0, 1.1fr) 1px minmax(320px, 0.9fr);
            min-height: 500px;
            overflow: hidden;
            border: 1px solid var(--ui-line);
            border-radius: 28px;
            background: color-mix(in srgb, var(--ui-card-solid) 88%, white);
            box-shadow: var(--ui-shadow);
            backdrop-filter: blur(18px);
        }
        .project-focus-card__media {
            position: relative;
            order: 3;
            min-height: 500px;
            overflow: hidden;
            background: transparent;
        }
        .project-focus-card__media img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: transform 500ms ease, filter 500ms ease;
        }
        .project-detail-hero__media img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top center;
            transition: transform 500ms ease, filter 500ms ease;
        }
        .project-focus-card:hover .project-focus-card__media img,
        .project-detail-hero__media:hover img {
            transform: scale(1.04);
            filter: saturate(1.04) contrast(1.03);
        }
        .project-focus-card__category {
            position: absolute;
            left: 1.4rem;
            top: 1.4rem;
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 999px;
            background: rgba(17, 17, 17, 0.62);
            padding: 0.55rem 0.8rem;
            color: #fff;
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.74rem;
            font-weight: 700;
            backdrop-filter: blur(12px);
        }
        .project-focus-card__body {
            display: flex;
            order: 1;
            flex-direction: column;
            justify-content: center;
            padding: clamp(1.5rem, 4vw, 3rem);
        }
        .project-focus-card__divider {
            position: relative;
            order: 2;
            display: block;
            min-height: 100%;
            background: linear-gradient(180deg, transparent, rgba(17, 17, 17, 0.14) 18%, rgba(37, 99, 235, 0.3) 50%, rgba(17, 17, 17, 0.14) 82%, transparent);
        }
        .project-focus-card__divider::before,
        .project-focus-card__divider::after {
            content: "";
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            pointer-events: none;
        }
        .project-focus-card__divider::before {
            top: 12%;
            width: 1px;
            height: 76%;
            background: linear-gradient(180deg, transparent, rgba(255, 255, 255, 0.86), transparent);
            box-shadow: 0 0 24px rgba(37, 99, 235, 0.24), 0 0 60px rgba(17, 17, 17, 0.1);
        }
        .project-focus-card__divider::after {
            top: 50%;
            width: 10px;
            height: 10px;
            border: 1px solid rgba(37, 99, 235, 0.28);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 0 8px rgba(37, 99, 235, 0.06), 0 0 28px rgba(37, 99, 235, 0.28);
        }
        .project-focus-card__count {
            display: flex;
            gap: 0.35rem;
            margin-bottom: 1.1rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.84rem;
            font-weight: 700;
        }
        .project-focus-card__body h3 {
            color: var(--ui-text);
            font-family: Lalezar, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(34px, 4vw, 52px);
            line-height: 0.95;
        }
        .project-focus-card__body p {
            margin-top: 1rem;
            max-width: 30rem;
        }
        .project-focus-nav {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 3rem;
            height: 3rem;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            color: var(--ui-text);
            box-shadow: 0 16px 35px rgba(17, 17, 17, 0.1);
            transition: transform 180ms ease, background 180ms ease;
        }
        .project-focus-nav:hover {
            background: var(--ui-text);
            color: #fff;
            transform: translateY(-2px);
        }
        .project-focus-nav span {
            font-size: 2rem;
            line-height: 1;
        }
        .project-empty-state,
        .case-panel,
        .faq-item {
            border: 1px solid var(--ui-line);
            background: var(--ui-card-solid);
            box-shadow: var(--ui-shadow);
            backdrop-filter: blur(18px);
        }
        .project-empty-state {
            border-radius: 22px;
            padding: 2rem;
            text-align: center;
        }
        .faq-section {
            border-top: 1px solid rgba(17, 17, 17, 0.055);
        }
        .faq-list {
            display: grid;
            gap: 0.8rem;
        }
        .faq-item {
            overflow: hidden;
            border-radius: 18px;
        }
        .faq-item button {
            display: flex;
            width: 100%;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1rem 1.15rem;
            text-align: left;
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-weight: 700;
        }
        .faq-item button span:last-child {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 1.8rem;
            height: 1.8rem;
            flex: 0 0 auto;
            border-radius: 999px;
            background: rgba(37, 99, 235, 0.1);
            color: var(--ui-accent);
            transition: transform 180ms ease;
        }
        .faq-item.is-open button span:last-child {
            transform: rotate(45deg);
        }
        .faq-item div {
            padding: 0 1.15rem 1.15rem;
        }
        .project-detail-hero {
            overflow: hidden;
            border-bottom: 1px solid rgba(17, 17, 17, 0.07);
        }
        .project-detail-breadcrumb {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-bottom: 1.4rem;
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.82rem;
            font-weight: 700;
        }
        .project-detail-breadcrumb a {
            color: var(--ui-muted);
            transition: color 180ms ease;
        }
        .project-detail-breadcrumb a:hover {
            color: var(--ui-accent);
        }
        .project-detail-hero__grid {
            display: grid;
            grid-template-columns: minmax(0, 0.9fr) minmax(420px, 1.1fr);
            align-items: center;
            gap: clamp(2rem, 5vw, 4.5rem);
        }
        .project-detail-hero__content {
            max-width: 660px;
        }
        .project-detail-hero__content .ui-heading-main {
            margin-bottom: 1.1rem;
            font-size: clamp(44px, 6vw, 78px);
        }
        .project-detail-hero__content .project-actions {
            margin-top: 1.8rem;
        }
        .project-detail-hero__media {
            aspect-ratio: 16 / 10;
            overflow: hidden;
            border: 1px solid var(--ui-line);
            border-radius: 28px;
            background: #111;
            box-shadow: var(--ui-shadow);
        }
        .project-detail-nav {
            display: flex;
            flex-wrap: wrap;
            gap: 0.65rem;
            margin-top: 2rem;
            border: 1px solid var(--ui-line);
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.62);
            padding: 0.45rem;
            width: fit-content;
            max-width: 100%;
            backdrop-filter: blur(16px);
            box-shadow: 0 16px 35px rgba(17, 17, 17, 0.08);
        }
        .project-detail-nav a,
        .sidebar-nav a {
            border-radius: 999px;
            color: var(--ui-muted);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.8rem;
            font-weight: 700;
            line-height: 1;
            transition: background 180ms ease, color 180ms ease, transform 180ms ease;
        }
        .project-detail-nav a {
            padding: 0.62rem 0.82rem;
        }
        .project-detail-nav a:hover,
        .sidebar-nav a:hover {
            background: var(--ui-text);
            color: #fff;
            transform: translateY(-1px);
        }
        .project-detail-main {
            display: grid;
            gap: 1.25rem;
            align-content: start;
        }
        .project-detail-main > [id] {
            scroll-margin-top: 6.5rem;
        }
        .case-panel {
            position: relative;
            border-radius: 24px;
            padding: clamp(1.35rem, 3vw, 2rem);
        }
        .case-panel--media {
            overflow: hidden;
            padding: 1rem;
        }
        .case-panel--compact {
            padding: 1.45rem;
        }
        .case-panel--cta {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.86), rgba(37, 99, 235, 0.05));
        }
        .case-panel h2 {
            color: var(--ui-text);
            font-family: Lalezar, ui-sans-serif, system-ui, sans-serif;
            font-size: clamp(28px, 3vw, 38px);
            line-height: 1;
        }
        .case-panel__header {
            margin-bottom: 1rem;
            max-width: 780px;
        }
        .case-panel__header span {
            display: inline-flex;
            margin-bottom: 0.55rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }
        .case-panel__header p {
            margin-top: 0.4rem;
            max-width: 42rem;
            font-size: 0.98rem;
        }
        .case-copy {
            max-width: 860px;
            color: var(--ui-muted);
            font-size: clamp(17px, 1.55vw, 20px);
            line-height: 1.8;
        }
        .project-video-frame {
            overflow: hidden;
            border: 1px solid rgba(17, 17, 17, 0.12);
            border-radius: 20px;
            background: #070707;
            box-shadow: 0 24px 70px rgba(17, 17, 17, 0.18);
        }
        .project-video-frame video,
        .project-video-frame .plyr {
            display: block;
            width: 100%;
            max-height: min(74vh, 720px);
            background: #070707;
        }
        .project-video-frame__fallback {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 0.8rem 1rem;
            color: rgba(255, 255, 255, 0.68);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
        }
        .project-video-frame__fallback a {
            color: #fff;
            text-decoration: underline;
            text-underline-offset: 3px;
        }
        .challenge-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.85rem;
        }
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 0.85rem;
        }
        .feature-pill,
        .challenge-grid > div {
            border: 1px solid var(--ui-line);
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.5);
            padding: 1rem;
        }
        .feature-pill {
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.92rem;
            font-weight: 700;
            line-height: 1.35;
        }
        .challenge-grid span {
            display: block;
            margin-bottom: 0.45rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
        }
        .project-detail-sidebar {
            display: flex;
            position: static;
            align-self: start;
            margin-top: 0;
            height: max-content;
            flex-direction: column;
            gap: 1rem;
        }
        .project-detail-sidebar .case-panel h2 {
            margin-bottom: 1rem;
            font-size: clamp(25px, 2.8vw, 34px);
        }
        .sidebar-nav {
            display: grid;
            gap: 0.5rem;
        }
        .sidebar-nav a {
            display: flex;
            border: 1px solid var(--ui-line);
            background: rgba(255, 255, 255, 0.48);
            padding: 0.72rem 0.85rem;
        }
        .link-stack {
            display: grid;
            gap: 0.75rem;
        }
        .link-stack a {
            border: 1px solid rgba(37, 99, 235, 0.24);
            border-radius: 999px;
            padding: 0.75rem 0.9rem;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.86rem;
            font-weight: 700;
            text-align: center;
            transition: background 180ms ease, color 180ms ease, transform 180ms ease;
        }
        .link-stack a:hover {
            background: var(--ui-accent);
            color: #fff;
            transform: translateY(-1px);
        }
        .testimonial-card {
            position: relative;
            display: flex;
            min-height: 260px;
            flex-direction: column;
            overflow: hidden;
            border: 1px solid var(--ui-line);
            border-radius: 22px;
            background: var(--ui-card-solid);
            padding: 1.45rem;
            box-shadow: var(--ui-shadow);
            backdrop-filter: blur(18px);
            transition: transform 180ms ease, border-color 180ms ease, box-shadow 180ms ease;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            border-color: rgba(37, 99, 235, 0.3);
            box-shadow: 0 26px 70px rgba(17, 17, 17, 0.14), 0 18px 44px rgba(37, 99, 235, 0.09);
        }
        .testimonial-card::after {
            content: "";
            position: absolute;
            inset: auto 1.4rem 0 1.4rem;
            height: 3px;
            border-radius: 999px 999px 0 0;
            background: linear-gradient(90deg, var(--ui-accent), transparent);
        }
        .testimonial-card__quote {
            position: absolute;
            right: 1.25rem;
            top: 0.65rem;
            color: rgba(37, 99, 235, 0.12);
            font-family: Georgia, serif;
            font-size: 5rem;
            line-height: 1;
        }
        .testimonial-avatar {
            position: relative;
            width: 3.7rem;
            height: 3.7rem;
            flex: 0 0 auto;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.82);
            border-radius: 999px;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.16), rgba(255, 255, 255, 0.8));
            box-shadow: 0 14px 30px rgba(17, 17, 17, 0.1);
        }
        .testimonial-avatar img,
        .testimonial-avatar span {
            width: 100%;
            height: 100%;
        }
        .testimonial-avatar span {
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--ui-accent);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1.1rem;
            font-weight: 800;
        }
        .testimonial-name {
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 1rem;
            font-weight: 700;
            line-height: 1.25;
        }
        .testimonial-stars {
            display: flex;
            align-items: center;
            gap: 0.15rem;
            margin-top: 0.35rem;
        }
        .testimonial-stars svg {
            width: 1rem;
            height: 1rem;
            color: rgba(17, 17, 17, 0.13);
        }
        .testimonial-stars svg.is-active {
            color: #F59E0B;
        }
        .testimonial-card blockquote {
            position: relative;
            flex: 1;
            margin-top: 0.35rem;
        }
        .testimonial-card blockquote p {
            color: var(--ui-muted);
            font-size: 1rem;
            line-height: 1.65;
        }
        .skill-card {
            display: flex;
            min-height: 300px;
            flex-direction: column;
            border-radius: 20px;
            padding: 1.35rem;
            transition: border-color 180ms ease, transform 180ms ease;
        }
        .skill-card__head {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            margin-bottom: 1.25rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--ui-line);
        }
        .skill-card__icon {
            display: inline-flex;
            width: 2.85rem;
            height: 2.85rem;
            flex: 0 0 auto;
            align-items: center;
            justify-content: center;
            border-radius: 14px;
            background: var(--ui-accent);
            color: #fff;
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.86rem;
            font-weight: 800;
        }
        .skill-card__head p {
            margin-top: 0.2rem;
            color: var(--ui-muted);
            font-size: 0.82rem;
            line-height: 1.2;
        }
        .skill-card ul {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 0.7rem;
        }
        .skill-card li,
        .skill-card span {
            min-width: 0;
        }
        .skill-card span {
            display: flex;
            min-height: 42px;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--ui-line);
            border-radius: 12px;
            background: color-mix(in srgb, var(--ui-card-solid) 70%, transparent);
            color: var(--ui-text);
            font-family: Lexend, ui-sans-serif, system-ui, sans-serif;
            font-size: 0.78rem;
            font-weight: 700;
            line-height: 1.15;
            text-align: center;
        }
        @media (max-width: 640px) {
            body { font-size: 16px;
            letter-spacing: 0.015em; }
            .hero-stat { padding: 0.75rem; }
            .hero-stat strong { font-size: 0.95rem; }
            .hero-portrait-wrap { min-height: 320px; }
            .hero-floating-note { right: 0; bottom: 1.5rem; }
            .service-carousel__intro {
                display: grid;
                grid-template-columns: 1fr auto;
                align-items: end;
                gap: 1rem;
            }
            .service-carousel__intro .ui-copy,
            .service-view-all {
                grid-column: 1 / -1;
            }
            .service-carousel__actions {
                margin-top: 0;
            }
            .service-carousel__stage {
                padding-left: 2.7rem;
                padding-right: 2.7rem;
            }
            .service-nav-left { left: 0; }
            .service-nav-right { right: 0; }
            .service-card {
                flex-basis: min(86vw, 330px);
            }
            .project-showcase__header {
                align-items: start;
                flex-direction: column;
            }
            .project-focus-shell {
                grid-template-columns: 1fr;
            }
            .project-focus-nav {
                display: none;
            }
            .project-focus-card {
                grid-template-columns: 1fr;
                min-height: auto;
                border-radius: 22px;
            }
            .project-slider-viewport {
                border-radius: 22px;
            }
            .project-filter-dropdowns {
                grid-template-columns: 1fr;
            }
            .project-focus-card__divider {
                width: 100%;
                height: 1px;
                min-height: 1px;
                background: linear-gradient(90deg, transparent, rgba(37, 99, 235, 0.24), rgba(17, 17, 17, 0.12), transparent);
            }
            .project-focus-card__divider::before {
                top: 50%;
                width: 78%;
                height: 1px;
                background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.95), transparent);
            }
            .project-focus-card__divider::after {
                display: none;
            }
            .project-focus-card__media {
                order: 3;
                min-height: 250px;
            }
            .project-focus-card__body {
                order: 1;
                padding: 1.25rem;
            }
            .project-detail-hero__grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }
            .project-detail-hero__content .ui-heading-main {
                font-size: clamp(40px, 13vw, 58px);
            }
            .project-detail-nav {
                width: 100%;
                border-radius: 18px;
            }
            .project-detail-nav a {
                flex: 1 1 auto;
                text-align: center;
            }
            .project-detail-main {
                gap: 1rem;
            }
            .project-detail-sidebar {
                position: static;
            }
            .case-panel,
            .case-panel--compact,
            .case-panel--media {
                border-radius: 20px;
                padding: 1rem;
            }
            .case-copy {
                font-size: 1rem;
                line-height: 1.75;
            }
            .project-video-frame {
                border-radius: 16px;
            }
            .project-video-frame__fallback {
                align-items: flex-start;
                flex-direction: column;
            }
            .feature-grid,
            .challenge-grid {
                grid-template-columns: 1fr;
            }
            .profile-frame { transform: none; }
            .profile-frame img { transform: scale(1.05); }
            .profile-orbit { display: none; }
            .skill-card ul { grid-template-columns: 1fr; }
        }
        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            body,
            .project-slider-track,
            .project-focus-card,
            .service-track,
            .project-focus-card__media img {
                animation: none !important;
                transition: none !important;
                transform: none !important;
            }
        }
        @media (min-width: 1024px) {
            .hero-section {
                min-height: min(calc(100svh - 4.5rem), 950px) !important;
            }
        }
    </style>
    @stack('styles')

    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'WebSite',
            'name' => 'Rishi Jain — Full Stack Developer',
            'url' => $siteUrl.'/',
            'description' => 'Full stack web and mobile development: Laravel, React, Flutter, Node.js, SaaS, WordPress. Hire for MVPs, apps, and scalable platforms.',
            'inLanguage' => 'en-US',
            'publisher' => [
                '@type' => 'Person',
                'name' => 'Rishi Jain',
            ],
        ],
        [
            '@type' => 'Person',
            'name' => 'Rishi Jain',
            'url' => $siteUrl.'/',
            'jobTitle' => 'Full Stack Developer',
            'description' => 'Building Laravel, React, Next.js, and Flutter applications for startups and businesses worldwide.',
            'knowsAbout' => [
                'Laravel', 'PHP', 'React', 'Next.js', 'Node.js', 'JavaScript', 'Flutter', 'WordPress',
                'Shopify', 'SaaS', 'Web Development', 'Mobile App Development', 'MySQL', 'MongoDB', 'PostgreSQL',
            ],
            'sameAs' => [
                'https://www.linkedin.com/in/rishi-jain-b14945262/',
                'https://www.freelancer.in/u/rishi9343?sb=t',
            ],
        ],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    @stack('jsonld')
</head>
<body class="font-sans antialiased">
    <div x-data="{ open: false }" class="sticky top-0 z-50">
        <nav class="border-b border-black/10 bg-white/62 shadow-sm backdrop-blur-2xl">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex h-[72px] items-center justify-between gap-4">
                    <div class="flex min-w-0 items-center">
                        <a href="{{ route('home') }}" class="truncate text-[32px] font-bold tracking-tight sm:text-[38px]">
                            <span class="ui-logo">Rishi Jain</span>
                        </a>
                    </div>

                    <div class="hidden items-center gap-3 md:flex">
                        <div class="nav-pill flex items-center gap-1">
                            <a href="{{ route('home') }}">Home</a>
                            <a href="{{ route('portfolio') }}">Portfolio</a>
                            <a href="{{ route('services') }}">Services</a>
                            <a href="{{ route('contact') }}">Contact</a>
                        </div>
                        <a href="{{ route('start-project') }}" class="ui-btn px-5 py-2.5">
                            Start Your Project
                        </a>
                    </div>

                    <div class="flex items-center md:hidden">
                        <button type="button" @click="open = !open" class="rounded-full p-2 text-black transition hover:bg-black/5" aria-label="Menu">
                            <svg x-show="!open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg x-show="open" class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </nav>

        <div x-show="open" x-cloak x-transition class="border-b border-black/10 bg-white/90 backdrop-blur-xl md:hidden">
            <div class="space-y-0.5 px-3 py-3">
                <a href="{{ route('home') }}" class="block rounded-full px-3 py-2.5 text-black/75 hover:bg-black/5 hover:text-black">Home</a>
                <a href="{{ route('portfolio') }}" class="block rounded-full px-3 py-2.5 text-black/75 hover:bg-black/5 hover:text-black">Portfolio</a>
                <a href="{{ route('services') }}" class="block rounded-full px-3 py-2.5 text-black/75 hover:bg-black/5 hover:text-black">Services</a>
                <a href="{{ route('contact') }}" class="block rounded-full px-3 py-2.5 text-black/75 hover:bg-black/5 hover:text-black">Contact</a>
                <a href="{{ route('start-project') }}" class="mt-2 ui-btn w-full px-3 py-3 text-center">Start Your Project</a>
            </div>
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="section-light border-t border-black/10 py-14">
        <span class="ui-decor-circle left-10 top-8 h-52 w-52" aria-hidden="true"></span>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-10 md:grid-cols-3 md:gap-8">
                <div class="relative z-10">
                    <h3 class="ui-logo mb-4 text-[42px]">Rishi Jain</h3>
                    <p class="ui-copy text-sm leading-relaxed">Full stack developer building polished web, mobile, and product platforms.</p>
                </div>

                <div class="relative z-10">
                    <h4 class="ui-eyebrow mb-4 text-2xl text-white">Quick Links</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="{{ route('home') }}" class="text-slate-300 transition hover:text-rose-200">Home</a></li>
                        <li><a href="{{ route('portfolio') }}" class="text-slate-300 transition hover:text-rose-200">Portfolio</a></li>
                        <li><a href="{{ route('services') }}" class="text-slate-300 transition hover:text-rose-200">Services</a></li>
                        <li><a href="{{ route('contact') }}" class="text-slate-300 transition hover:text-rose-200">Contact</a></li>
                    </ul>
                </div>

                <div class="relative z-10">
                    <h4 class="ui-eyebrow mb-4 text-2xl text-white">Contact Info</h4>
                    <ul class="space-y-2 text-sm text-slate-300">
                        <li>Phone/WhatsApp: +91 9522339343</li>
                        <li>Email: contact@rishijain.tech</li>
                        <li>Website: rishijain.tech</li>
                        <li>
                            <a href="{{ route('contact') }}#freelancer-profile" class="text-slate-300 underline decoration-slate-500 underline-offset-2 transition hover:text-rose-200 hover:decoration-rose-300">
                                Freelancer: @rishi9343
                            </a>
                        </li>
                    </ul>

                    <a
                        href="https://www.freelancer.in/u/rishi9343?sb=t"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="mt-5 ui-btn w-full gap-2 px-4 py-2.5 sm:w-auto"
                    >
                        Open Freelancer profile
                        <svg class="h-4 w-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                    </a>

                    <div class="mt-6 flex items-center gap-4">
                        <span class="text-xs font-medium uppercase tracking-wide text-slate-500">Social</span>
                        <a href="https://www.linkedin.com/in/rishi-jain-b14945262/" target="_blank" rel="noopener noreferrer" class="text-slate-400 transition hover:text-rose-200" aria-label="LinkedIn">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="mt-10 border-t border-slate-700/80 pt-8 text-center text-sm text-slate-500">
                <p>&copy; {{ date('Y') }} Rishi Jain. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <a href="https://wa.me/919522339343" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 rounded-full bg-[#2563EB] p-4 text-white shadow-lg transition hover:brightness-110" aria-label="WhatsApp">
        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.149-.67.149-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.querySelectorAll('a[href]').forEach(function (link) {
                link.addEventListener('click', function (event) {
                    const href = link.getAttribute('href') || '';
                    const target = link.getAttribute('target');
                    if (target === '_blank' || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:')) {
                        return;
                    }

                    let url;
                    try {
                        url = new URL(href, window.location.href);
                    } catch (e) {
                        return;
                    }

                    if (url.origin !== window.location.origin || url.href === window.location.href) {
                        return;
                    }

                    event.preventDefault();
                    document.body.classList.add('page-exiting');
                    window.setTimeout(function () {
                        window.location.href = url.href;
                    }, 180);
                });
            });

            if (typeof Plyr === 'undefined') {
                return;
            }
            document.querySelectorAll('video.js-plyr-video:not([data-plyr-ready])').forEach(function (el) {
                el.setAttribute('data-plyr-ready', '1');
                new Plyr(el, {
                    controls: [
                        'play-large', 'play', 'progress', 'current-time', 'duration',
                        'mute', 'volume', 'settings', 'fullscreen',
                    ],
                    settings: ['speed'],
                    speed: { selected: 1, options: [0.75, 1, 1.25, 1.5, 2] },
                    invertTime: false,
                });
            });
        });

        window.projectGallery = function (cfg) {
            return {
                slides: Array.isArray(cfg.slides) ? cfg.slides : [],
                title: cfg.title || '',
                active: 0,
                lightbox: false,
                touchStartX: null,
                get n() {
                    return this.slides.length;
                },
                onTouchStart(e) {
                    if (!e.changedTouches || !e.changedTouches.length) {
                        return;
                    }
                    this.touchStartX = e.changedTouches[0].screenX;
                },
                onTouchEnd(e) {
                    if (this.touchStartX === null || !e.changedTouches || !e.changedTouches.length) {
                        return;
                    }
                    const dx = e.changedTouches[0].screenX - this.touchStartX;
                    this.touchStartX = null;
                    if (this.n < 2) {
                        return;
                    }
                    if (dx < -48) {
                        this.next();
                    } else if (dx > 48) {
                        this.prev();
                    }
                },
                next(e) {
                    if (e) {
                        e.stopPropagation();
                    }
                    if (this.n) {
                        this.active = (this.active + 1) % this.n;
                    }
                },
                prev(e) {
                    if (e) {
                        e.stopPropagation();
                    }
                    if (this.n) {
                        this.active = (this.active - 1 + this.n) % this.n;
                    }
                },
                goTo(i) {
                    if (!this.n) {
                        return;
                    }
                    this.active = ((i % this.n) + this.n) % this.n;
                },
                openAt(i) {
                    this.goTo(i);
                    this.lightbox = true;
                    document.body.classList.add('overflow-hidden');
                },
                closeLightbox() {
                    this.lightbox = false;
                    document.body.classList.remove('overflow-hidden');
                },
            };
        };
    </script>
    @stack('scripts')
</body>
</html>
