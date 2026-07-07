<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al Farisy | Portfolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Fira+Code:wght@400;700&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; height: 100vh; overflow: hidden; background: #0a0a0a; color: #fff; }
        .split-container { display: flex; height: 100vh; width: 100vw; flex-direction: column; }
        @media(min-width: 768px) { .split-container { flex-direction: row; } }
        
        .split-pane { flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; text-decoration: none; color: inherit; transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1); position: relative; overflow: hidden; }
        .split-pane::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.5); z-index: 1; transition: opacity 0.4s; }
        .split-pane:hover { flex: 1.2; }
        .split-pane:hover::before { opacity: 0; }
        
        /* Clean Theme */
        .pane-clean { background: #ffffff; color: #111; }
        .pane-clean .pane-title { font-size: 3.5rem; font-weight: 300; letter-spacing: -2px; margin-bottom: 1rem; }
        .pane-clean .pane-desc { font-size: 0.9rem; color: #888; font-weight: 400; letter-spacing: 2px; text-transform: uppercase; }
        
        /* Creative/Terminal Theme */
        .pane-creative { background: #050505; color: #00ff41; font-family: 'Fira Code', monospace; position: relative; }
        .pane-creative .pane-title { font-size: 3rem; font-weight: 700; margin-bottom: 1rem; text-shadow: 0 0 10px rgba(0, 255, 65, 0.5); }
        .pane-creative .pane-title::before { content: '~/ '; color: #444; }
        .pane-creative .pane-title::after { content: '_'; animation: blink 1s step-end infinite; }
        .pane-creative .pane-desc { font-size: 1rem; color: #00aa2b; font-weight: 400; }
        .pane-creative:hover { box-shadow: inset 0 0 100px rgba(0, 255, 65, 0.15); }
        
        @keyframes blink { 50% { opacity: 0; } }

        /* Grid Background for Creative side */
        .grid-bg { position: absolute; inset: 0; background-image: linear-gradient(rgba(0, 255, 65, 0.1) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 255, 65, 0.1) 1px, transparent 1px); background-size: 30px 30px; opacity: 0.3; z-index: 0; pointer-events: none; }

        .pane-content { z-index: 2; text-align: center; }
        .hero-text { position: absolute; top: 2rem; left: 50%; transform: translateX(-50%); z-index: 10; font-weight: 800; font-size: 1.2rem; text-transform: uppercase; letter-spacing: 4px; color: #fff; mix-blend-mode: difference; pointer-events: none; }
    </style>
</head>
<body>
    <div class="hero-text">Abdurrahman Al Farisy</div>
    <div class="split-container">
        <a href="/clean" class="split-pane pane-clean">
            <div class="pane-content">
                <h2 class="pane-title">Clean.</h2>
                <p class="pane-desc">Minimalist &bull; Semantic</p>
            </div>
        </a>
        <a href="/creative" class="split-pane pane-creative">
            <div class="grid-bg"></div>
            <div class="pane-content">
                <h2 class="pane-title">creative</h2>
                <p class="pane-desc">System.out.println("Striking Design");</p>
            </div>
        </a>
    </div>
</body>
</html>
