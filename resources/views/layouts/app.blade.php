<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al Farisy - Portfolio</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Geist:wght@300;400;600;900&display=swap" rel="stylesheet">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://unpkg.com/@barba/core"></script>

    <style>
        * { box-sizing: border-box; }

        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #212121; /* Dark theme default */
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Geist", "Segoe UI", Helvetica, Arial, sans-serif;
            color: #fff;
            overflow-x: hidden;
        }

        /* The Animated Gradient Background */
        .party-bg {
            position: fixed;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(230deg, #a24bcf, #4b79cf, #4bc5cf);
            background-size: 400% 400%;
            animation: partytime 7s cubic-bezier(0.46, 0.03, 0.52, 0.96) infinite;
            z-index: -1;
        }

        @keyframes partytime { 
            0% { background-position: 83% 0% }
            50% { background-position: 18% 100% }
            100% { background-position: 83% 0% }
        }

        /* 3D Perspective Wrapper */
        .perspective-wrapper {
            perspective: 1600px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            will-change: transform;
        }

        /* Navigation */
        nav {
            padding: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 900;
            position: relative;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin-left: 1.5rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            transition: opacity 0.25s;
        }

        .nav-links a:hover, .nav-links a.active {
            opacity: 0.7;
        }

        .logo {
            font-weight: 900;
            font-size: 1.2rem;
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.2em;
        }

        /* The Card Container (Barba wrapper applies the scale) */
        .page-container {
            flex-grow: 1;
            padding: 2rem 4vw 6rem 4vw;
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            
            /* Scaling CSS Transition */
            transition: transform 1.25s cubic-bezier(0.215, 0.61, 0.355, 1), opacity 1.25s cubic-bezier(0.215, 0.61, 0.355, 1);
            transform: translate3d(0, 0, 0) scale(0.5);
            opacity: 0;
            will-change: transform, opacity;
        }

        /* When active, scale to 1 */
        .is-open .page-container {
            transform: scale(1);
            opacity: 1;
        }

        /* Inner Cards (Applying the mix-blend-mode hover from user CSS) */
        .card {
            background-color: #212121;
            color: #fff;
            padding: 2.5rem;
            border-radius: 12px;
            transition: box-shadow 0.5s ease, filter 0.5s ease, opacity 0.5s ease;
            position: relative;
            z-index: 400;
            margin-bottom: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .card:hover {
            box-shadow: 0 0 75px rgba(0, 0, 0, 0.20), 0 5px 20px rgba(0, 0, 0, 0.2);		
            mix-blend-mode: hard-light;
            filter: grayscale(100%);
            opacity: 0.8;
            cursor: pointer;
        }

        h1, h2, h3 { margin-top: 0; }
        p { line-height: 1.7; color: #ddd; }

        /* Buttons matching the user CSS */
        .btn {
            display: inline-block;
            transition: all .25s ease-in-out;
            border: 0;
            background-color: #000;
            padding: 12px 24px;
            color: white;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.2em;
            mix-blend-mode: overlay;
            box-shadow: 0 0 25px rgba(0,0,0,0.8) 0 4px 12px rgba(0,0,0,0.9);
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background-color: white;
            mix-blend-mode: normal;
            color: #212121;
        }
    </style>
</head>
<body data-barba="wrapper">
    <div class="party-bg"></div>
    
    <div class="perspective-wrapper">
        <nav>
            <a href="/" class="logo">Al Farisy</a>
            <div class="nav-links">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Profile</a>
                <a href="/projects" class="{{ request()->is('projects') ? 'active' : '' }}">Projects</a>
                <a href="/certificates" class="{{ request()->is('certificates') ? 'active' : '' }}">Certs</a>
            </div>
        </nav>
        
        <main data-barba="container" data-barba-namespace="{{ request()->path() }}">
            <div class="page-container">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        // Init the scale up on first load
        window.addEventListener('DOMContentLoaded', () => {
            requestAnimationFrame(() => {
                document.body.classList.add('is-open');
            });
        });

        // Barba.js with Scaling CSS Transition
        barba.init({
            transitions: [{
                name: 'scale-transition',
                async leave(data) {
                    const done = this.async();
                    
                    // Remove is-open to trigger the scale(0.5) transition
                    document.body.classList.remove('is-open');
                    
                    // Wait for CSS transition to finish (1.25s)
                    setTimeout(() => {
                        done();
                    }, 1250);
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

                    // Wait a tiny bit for DOM to settle, then add is-open to scale up
                    setTimeout(() => {
                        document.body.classList.add('is-open');
                    }, 50);
                }
            }]
        });
    </script>
</body>
</html>
