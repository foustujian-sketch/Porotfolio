<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al Farisy</title>
    <meta name="description" content="Software Engineer specializing in Laravel, PostgreSQL, and Flutter.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.82/build/spline-viewer.js"></script>

    <style>
        /* =============================================
           0. RESET & BASE
           ============================================= */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        html, body {
            height: 100%;
            overflow: hidden;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #e4e4e7;
            background: #050505;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* =============================================
           1. THE ANIMATED GRADIENT (visible frame)
           ============================================= */
        .gradient-frame {
            position: fixed;
            inset: 0;
            z-index: 0;
            background: linear-gradient(230deg, #a24bcf, #4b79cf, #4bc5cf, #a24bcf);
            background-size: 600% 600%;
            animation: gradient-shift 8s ease infinite;
        }

        @keyframes gradient-shift {
            0%   { background-position: 0% 50% }
            50%  { background-position: 100% 50% }
            100% { background-position: 0% 50% }
        }

        /* Noise texture overlay on gradient for depth */
        .gradient-frame::after {
            content: '';
            position: absolute;
            inset: 0;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
            opacity: 0.3;
            pointer-events: none;
        }

        /* =============================================
           2. THE SCALING CARD (the main viewport card)
           ============================================= */
        .scaling-card {
            position: fixed;
            inset: 0;
            z-index: 10;
            background: #0a0a0a;
            border-radius: 24px;
            overflow-y: auto;
            overflow-x: hidden;
            scrollbar-width: thin;
            scrollbar-color: #333 transparent;

            /* THE transition — starts scaled down, showing gradient frame */
            transform: scale(0.88);
            transform-origin: center center;
            transition: transform 0.9s cubic-bezier(0.16, 1, 0.3, 1),
                        border-radius 0.9s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: transform;
        }

        .scaling-card::-webkit-scrollbar { width: 6px; }
        .scaling-card::-webkit-scrollbar-track { background: transparent; }
        .scaling-card::-webkit-scrollbar-thumb { background: #333; border-radius: 3px; }

        /* When open — fills viewport */
        body.is-open .scaling-card {
            transform: scale(1);
            border-radius: 0;
        }

        /* =============================================
           3. NAVIGATION
           ============================================= */
        .site-nav {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1.25rem 3rem;
            background: rgba(10, 10, 10, 0.85);
            backdrop-filter: blur(20px) saturate(1.5);
            -webkit-backdrop-filter: blur(20px) saturate(1.5);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .nav-brand {
            font-weight: 700;
            font-size: 1rem;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
        }

        .nav-links { display: flex; gap: 0.25rem; }

        .nav-links a {
            color: #71717a;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: color 0.2s, background 0.2s;
        }

        .nav-links a:hover { color: #e4e4e7; background: rgba(255,255,255,0.05); }
        .nav-links a.active { color: #fff; background: rgba(255,255,255,0.08); }

        /* =============================================
           4. CONTENT AREA
           ============================================= */
        .page-content {
            padding: 3rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        /* =============================================
           5. INNER CARDS (with 3D parallax)
           ============================================= */
        .inner-card {
            background: #111;
            border: 1px solid rgba(255,255,255,0.06);
            border-radius: 16px;
            padding: 2rem;
            transition: border-color 0.4s ease, box-shadow 0.4s ease, transform 0.15s ease-out;
            transform-style: preserve-3d;
            will-change: transform;
            cursor: default;
        }

        .inner-card:hover {
            border-color: rgba(255,255,255,0.12);
            box-shadow: 0 20px 60px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.08);
        }

        .inner-card .card-content {
            transform: translateZ(40px);
            transition: transform 0.15s ease-out;
        }

        /* =============================================
           6. TYPOGRAPHY
           ============================================= */
        .heading-xl {
            font-size: clamp(2.5rem, 6vw, 4.5rem);
            font-weight: 900;
            letter-spacing: -0.03em;
            line-height: 1.05;
            color: #fff;
        }

        .heading-gradient {
            background: linear-gradient(135deg, #c084fc, #60a5fa, #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .heading-md {
            font-size: 1.25rem;
            font-weight: 600;
            color: #fff;
            letter-spacing: -0.01em;
        }

        .text-muted { color: #71717a; }
        .text-sm { font-size: 0.875rem; }
        .text-xs { font-size: 0.75rem; }

        .font-mono { font-family: 'JetBrains Mono', monospace; }

        /* =============================================
           7. PILLS / TAGS
           ============================================= */
        .pill {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 500;
            background: rgba(255,255,255,0.06);
            color: #a1a1aa;
            border: 1px solid rgba(255,255,255,0.08);
        }

        /* =============================================
           8. BUTTONS
           ============================================= */
        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 1.5rem;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 600;
            text-decoration: none;
            color: #0a0a0a;
            background: #fff;
            border: none;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
        }

        .btn-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 25px rgba(255,255,255,0.15);
        }

        .btn-ghost {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.65rem 1.5rem;
            border-radius: 10px;
            font-size: 0.85rem;
            font-weight: 500;
            text-decoration: none;
            color: #e4e4e7;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.1);
            cursor: pointer;
            transition: transform 0.2s, border-color 0.2s, background 0.2s;
        }

        .btn-ghost:hover {
            transform: translateY(-1px);
            border-color: rgba(255,255,255,0.25);
            background: rgba(255,255,255,0.04);
        }

        /* =============================================
           9. GRID
           ============================================= */
        .grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.25rem;
        }

        .grid-span-full { grid-column: 1 / -1; }

        /* =============================================
           10. UTILITIES
           ============================================= */
        .flex { display: flex; }
        .flex-col { flex-direction: column; }
        .items-center { align-items: center; }
        .gap-1 { gap: 0.5rem; }
        .gap-2 { gap: 1rem; }
        .gap-3 { gap: 1.5rem; }
        .gap-4 { gap: 2rem; }
        .mt-1 { margin-top: 0.5rem; }
        .mt-2 { margin-top: 1rem; }
        .mt-3 { margin-top: 1.5rem; }
        .mt-4 { margin-top: 2rem; }
        .mb-2 { margin-top: 1rem; }

        .divider {
            height: 1px;
            background: rgba(255,255,255,0.06);
            margin: 2rem 0;
        }

        /* Stagger animation targets — hidden by default */
        .reveal { opacity: 0; transform: translateY(20px); }

        /* =============================================
           11. TRANSITION OVERLAY (for page switches)
           ============================================= */
        .transition-overlay {
            position: fixed;
            inset: 0;
            z-index: 9999;
            pointer-events: none;
        }

        .transition-overlay .slice {
            position: absolute;
            width: 100%;
            height: 20%;
            background: #0a0a0a;
            transform: scaleX(0);
            transform-origin: left;
        }
        .transition-overlay .slice:nth-child(1) { top: 0%; }
        .transition-overlay .slice:nth-child(2) { top: 20%; }
        .transition-overlay .slice:nth-child(3) { top: 40%; }
        .transition-overlay .slice:nth-child(4) { top: 60%; }
        .transition-overlay .slice:nth-child(5) { top: 80%; }

        /* =============================================
           12. 3D AVATAR HERO
           ============================================= */
        .avatar-hero {
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 2rem;
            min-height: 420px;
            margin-bottom: 2rem;
        }

        .avatar-hero-text {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .avatar-3d-container {
            position: relative;
            width: 100%;
            height: 400px;
            border-radius: 20px;
            overflow: hidden;
            background: radial-gradient(ellipse at center, rgba(162, 75, 207, 0.15) 0%, transparent 70%);
        }

        .avatar-3d-container spline-viewer {
            width: 100%;
            height: 100%;
            border: none;
            --logo-color: transparent; /* hide spline logo */
        }

        .avatar-3d-fallback {
            position: absolute;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 1rem;
            z-index: -1;
        }

        .avatar-3d-fallback img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255,255,255,0.1);
            box-shadow: 0 0 60px rgba(162, 75, 207, 0.3);
        }

        /* =============================================
           13. RESPONSIVE
           ============================================= */
        @media (max-width: 768px) {
            .site-nav { padding: 1rem 1.5rem; }
            .page-content { padding: 2rem 1.5rem; }
            .scaling-card { transform: scale(0.92); border-radius: 16px; }
            .inner-card { padding: 1.5rem; }
            .avatar-hero {
                grid-template-columns: 1fr;
                min-height: auto;
            }
            .avatar-3d-container { height: 300px; }
        }

        @media (max-width: 480px) {
            .nav-links a { padding: 0.4rem 0.6rem; font-size: 0.8rem; }
            .avatar-3d-container { height: 250px; }
        }
    </style>
</head>
<body data-barba="wrapper">

    <!-- The gradient frame visible when card is scaled down -->
    <div class="gradient-frame"></div>

    <!-- Transition overlay (horizontal slices) -->
    <div class="transition-overlay">
        <div class="slice"></div>
        <div class="slice"></div>
        <div class="slice"></div>
        <div class="slice"></div>
        <div class="slice"></div>
    </div>

    <!-- THE scaling card -->
    <div class="scaling-card" id="scalingCard">

        <nav class="site-nav">
            <a href="/" class="nav-brand">Al Farisy</a>
            <div class="nav-links">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Profile</a>
                <a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                <a href="/certificates" class="{{ request()->is('certificates') ? 'active' : '' }}">Certs</a>
            </div>
        </nav>

        <main data-barba="container" data-barba-namespace="{{ request()->path() }}">
            <div class="page-content">
                @yield('content')
            </div>
        </main>

    </div>

    <script>
    (function() {
        const EASE_OUT = 'power4.out';
        const EASE_IN_OUT = 'power2.inOut';

        // ========================================
        // Initial Load — scale the card up
        // ========================================
        window.addEventListener('DOMContentLoaded', () => {
            // Small delay so the gradient frame is visible first
            gsap.to({}, {
                duration: 0.3,
                onComplete: () => {
                    document.body.classList.add('is-open');
                    // Stagger reveal all .reveal elements
                    revealContent();
                    // Init parallax on inner cards
                    initParallax();
                }
            });
        });

        // ========================================
        // Content Reveal (GSAP stagger)
        // ========================================
        function revealContent() {
            const els = document.querySelectorAll('.reveal');
            if (els.length === 0) return;

            gsap.fromTo(els,
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.7,
                    stagger: 0.08,
                    ease: EASE_OUT,
                    delay: 0.2
                }
            );
        }

        // ========================================
        // 3D Parallax (ONLY on .inner-card)
        // ========================================
        function initParallax() {
            document.querySelectorAll('.inner-card').forEach(card => {
                card.addEventListener('mousemove', function(e) {
                    const rect = this.getBoundingClientRect();
                    const halfW = rect.width / 2;
                    const halfH = rect.height / 2;
                    const coorX = halfW - (e.clientX - rect.left);
                    const coorY = halfH - (e.clientY - rect.top);
                    const degX = ((coorY / halfH) * 6) + 'deg';
                    const degY = ((coorX / halfW) * -6) + 'deg';

                    gsap.to(this, {
                        rotateX: degX,
                        rotateY: degY,
                        transformPerspective: 1200,
                        duration: 0.3,
                        ease: 'power1.out'
                    });

                    const content = this.querySelector('.card-content');
                    if (content) {
                        gsap.to(content, {
                            z: 40,
                            rotateX: degX,
                            rotateY: degY,
                            transformPerspective: 1200,
                            duration: 0.3,
                            ease: 'power1.out'
                        });
                    }
                });

                card.addEventListener('mouseleave', function() {
                    gsap.to(this, { rotateX: 0, rotateY: 0, duration: 0.5, ease: 'elastic.out(1, 0.5)' });
                    const content = this.querySelector('.card-content');
                    if (content) {
                        gsap.to(content, { z: 0, rotateX: 0, rotateY: 0, duration: 0.5, ease: 'elastic.out(1, 0.5)' });
                    }
                });
            });
        }

        // ========================================
        // Barba.js — Horizontal Slice Transition
        // ========================================
        barba.init({
            preventRunning: true,
            transitions: [{
                name: 'slice-transition',

                async leave(data) {
                    const done = this.async();
                    const slices = document.querySelectorAll('.transition-overlay .slice');
                    const card = document.getElementById('scalingCard');

                    // 1. Scale the card down slightly
                    gsap.to(card, {
                        scale: 0.92,
                        borderRadius: '20px',
                        duration: 0.5,
                        ease: EASE_IN_OUT
                    });

                    // 2. Slices sweep in from left to right (staggered)
                    gsap.fromTo(slices,
                        { scaleX: 0, transformOrigin: 'left center' },
                        {
                            scaleX: 1,
                            duration: 0.45,
                            stagger: 0.06,
                            ease: EASE_IN_OUT,
                            onComplete: done
                        }
                    );
                },

                enter(data) {
                    const slices = document.querySelectorAll('.transition-overlay .slice');
                    const card = document.getElementById('scalingCard');

                    // Update active nav
                    document.querySelectorAll('.nav-links a').forEach(a => {
                        a.classList.remove('active');
                        const href = a.getAttribute('href');
                        const current = '/' + window.location.pathname.replace(/^\/|\/$/g, '');
                        if (href === current || (href === '/' && current === '/')) {
                            a.classList.add('active');
                        }
                    });

                    // Scroll to top
                    card.scrollTo(0, 0);

                    // 3. Slices sweep out to the right
                    gsap.fromTo(slices,
                        { scaleX: 1, transformOrigin: 'right center' },
                        {
                            scaleX: 0,
                            duration: 0.45,
                            stagger: 0.06,
                            ease: EASE_IN_OUT,
                            delay: 0.1
                        }
                    );

                    // 4. Scale card back up
                    gsap.to(card, {
                        scale: 1,
                        borderRadius: '0px',
                        duration: 0.7,
                        ease: 'power3.out',
                        delay: 0.15
                    });

                    // 5. Reveal new content
                    setTimeout(() => {
                        revealContent();
                        initParallax();
                    }, 200);
                }
            }]
        });

    })();
    </script>

</body>
</html>
