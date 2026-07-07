<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al Farisy | Steam Theme</title>
    
    <!-- Premium Fonts (Using Outfit for readability, but styled sharply) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"></script>

    <style>
        :root {
            /* Steam Client Colors */
            --bg-base: #171a21;
            --bg-panel: #1b2838;
            --bg-nav: #171a21;
            --text-primary: #c6d4df;
            --text-muted: #8f98a0;
            --accent-blue: #66c0f4;
            --accent-blue-hover: #417a9b;
            --panel-accent: #2a475e;
            --steam-green: #5c7e10;
            --steam-green-hover: #739e15;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        
        body { 
            font-family: 'Outfit', sans-serif; 
            background-color: var(--bg-base); 
            color: var(--text-primary); 
            overflow-x: hidden;
            line-height: 1.5;
        }

        /* Steam Navbar */
        nav { 
            background-color: var(--bg-nav);
            padding: 1.5rem 6vw; 
            display: flex; 
            justify-content: space-between; 
            align-items: center;
            position: fixed; 
            top: 0; 
            width: 100%; 
            z-index: 100;
            border-bottom: 1px solid #000;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
        }
        
        .logo { 
            font-weight: 700; 
            font-size: 1.4rem; 
            text-transform: uppercase; 
            text-decoration: none; 
            color: #fff;
            letter-spacing: 1px;
        }

        .nav-links { display: flex; gap: 2rem; }
        .nav-links a { 
            color: var(--text-primary); 
            text-decoration: none; 
            font-weight: 500; 
            font-size: 1rem;
            text-transform: uppercase;
            padding-bottom: 5px;
            border-bottom: 3px solid transparent;
            transition: color 0.2s, border-color 0.2s; 
        }
        .nav-links a:hover { color: #fff; }
        .nav-links a.active { 
            color: var(--accent-blue);
            border-bottom-color: var(--accent-blue);
        }

        /* Main Content */
        .page-wrapper { 
            min-height: 100vh; 
            padding: 8rem 6vw 5rem 6vw; 
            max-width: 1400px;
            margin: 0 auto;
        }
        
        h1, h2, h3 { color: #fff; }

        h1 { 
            font-size: clamp(2.5rem, 5vw, 4rem); 
            font-weight: 700; 
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 1.5rem; 
            border-left: 4px solid var(--accent-blue);
            padding-left: 1rem;
        }
        
        h2 { font-size: 1.8rem; margin-bottom: 1.5rem; }

        p { color: var(--text-muted); font-size: 1.05rem; }

        /* Steam Styled Cards */
        .card { 
            background: var(--bg-panel);
            border-radius: 2px;
            padding: 1.5rem; 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
            border: 1px solid #000;
            transition: background 0.3s ease;
            position: relative;
            transform-style: preserve-3d; /* For Tilt */
        }
        
        .card:hover { 
            background: linear-gradient(135deg, var(--bg-panel) 0%, var(--panel-accent) 100%);
        }

        .card h3 { 
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--accent-blue);
        }

        .card-inner {
            transform: translateZ(20px);
        }

        /* Steam Green Button */
        .btn-steam {
            display: inline-block;
            background: linear-gradient(to right, #799905 5%, #536904 95%);
            color: #d2efa9;
            text-decoration: none;
            padding: 0.5rem 1.5rem;
            border-radius: 2px;
            font-weight: 400;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
            transition: filter 0.2s;
            border: none;
            cursor: pointer;
        }
        
        .btn-steam:hover {
            filter: brightness(1.2);
            color: #fff;
        }

        /* Transition Layer */
        .transition-layer { 
            position: fixed; 
            inset: 0; 
            background: var(--bg-base); 
            transform: scaleY(0); 
            transform-origin: top; 
            z-index: 1000; 
            pointer-events: none; 
        }
        
        /* Grid */
        .grid-layout {
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); 
            gap: 1.5rem;
        }

        /* Interactive Widget: Steam Chat / Points Tracker */
        .steam-widget {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 300px;
            background: var(--bg-panel);
            border: 1px solid var(--panel-accent);
            border-radius: 4px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.6);
            z-index: 999;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            cursor: grab;
        }

        .steam-widget-header {
            background: var(--bg-nav);
            padding: 10px;
            font-size: 0.9rem;
            font-weight: bold;
            color: var(--accent-blue);
            user-select: none;
            display: flex;
            justify-content: space-between;
        }
        
        .steam-widget-content {
            padding: 15px;
            text-align: center;
        }

        .steam-coin {
            font-size: 3rem;
            cursor: pointer;
            transition: transform 0.1s;
            user-select: none;
            margin-bottom: 10px;
        }
        .steam-coin:active { transform: scale(0.9); }
        .score-display { font-size: 1.2rem; color: #fff; font-weight: bold; }
    </style>
</head>
<body data-barba="wrapper">
    <div class="transition-layer"></div>
    
    <nav>
        <a href="/" class="logo">AF_Dev</a>
        <div class="nav-links">
            <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Store</a>
            <a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Library</a>
            <a href="/certificates" class="{{ request()->is('certificates') ? 'active' : '' }}">Community</a>
        </div>
    </nav>
    
    <main data-barba="container" data-barba-namespace="{{ request()->path() }}">
        <div class="page-wrapper">
            @yield('content')
        </div>
    </main>

    <!-- Interactive Steam Points Widget -->
    <div class="steam-widget" id="steam-widget">
        <div class="steam-widget-header" id="widget-header">
            <span>AF_Dev Interactive</span>
            <span style="color: var(--text-muted); cursor: pointer;" onclick="document.getElementById('steam-widget').style.display='none'">X</span>
        </div>
        <div class="steam-widget-content">
            <p style="margin-bottom: 10px; font-size: 0.85rem;">Click the token to earn Dev Points!</p>
            <div class="steam-coin" id="coin" onclick="addPoint()">🪙</div>
            <div class="score-display">Points: <span id="score">0</span></div>
        </div>
    </div>

    <script>
        // Interactive Widget Logic (Draggable & Clicker)
        let score = 0;
        function addPoint() {
            score++;
            document.getElementById('score').innerText = score;
            let coin = document.getElementById('coin');
            gsap.fromTo(coin, { y: 10 }, { y: 0, duration: 0.2, ease: "bounce.out" });
        }

        // Draggable Logic
        const widget = document.getElementById('steam-widget');
        const header = document.getElementById('widget-header');
        let isDragging = false, currentX, currentY, initialX, initialY, xOffset = 0, yOffset = 0;

        header.addEventListener('mousedown', dragStart);
        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('mousemove', drag);

        function dragStart(e) {
            initialX = e.clientX - xOffset;
            initialY = e.clientY - yOffset;
            if (e.target === header || e.target.parentNode === header) {
                isDragging = true;
                widget.style.cursor = 'grabbing';
            }
        }
        function dragEnd(e) {
            initialX = currentX;
            initialY = currentY;
            isDragging = false;
            widget.style.cursor = 'grab';
        }
        function drag(e) {
            if (isDragging) {
                e.preventDefault();
                currentX = e.clientX - initialX;
                currentY = e.clientY - initialY;
                xOffset = currentX;
                yOffset = currentY;
                setTranslate(currentX, currentY, widget);
            }
        }
        function setTranslate(xPos, yPos, el) {
            el.style.transform = "translate3d(" + xPos + "px, " + yPos + "px, 0)";
        }

        // Initialize Vanilla Tilt
        function initTilt() {
            VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
                max: 8,
                speed: 400,
                glare: true,
                "max-glare": 0.2,
                scale: 1.02
            });
        }
        document.addEventListener("DOMContentLoaded", initTilt);

        // Barba + GSAP Transitions
        barba.init({
            transitions: [{
                name: 'steam-transition',
                leave(data) {
                    return gsap.to('.transition-layer', {
                        scaleY: 1,
                        transformOrigin: 'bottom',
                        duration: 0.3,
                        ease: 'power2.inOut'
                    });
                },
                enter(data) {
                    // Update active nav link
                    document.querySelectorAll('.nav-links a').forEach(a => {
                        a.classList.remove('active');
                        let href = a.getAttribute('href');
                        let current = '/' + window.location.pathname.replace(/^\/|\/$/g, '');
                        if (href === current || (href === '/' && current === '/')) {
                            a.classList.add('active');
                        }
                    });

                    // Re-init tilt
                    initTilt();

                    // Slide out transition layer
                    gsap.to('.transition-layer', {
                        scaleY: 0,
                        transformOrigin: 'top',
                        duration: 0.3,
                        ease: 'power2.inOut'
                    });
                    
                    // Reveal content
                    return gsap.from(data.next.container.querySelector('.page-wrapper'), {
                        opacity: 0,
                        duration: 0.5,
                        delay: 0.1
                    });
                }
            }]
        });
    </script>
</body>
</html>
