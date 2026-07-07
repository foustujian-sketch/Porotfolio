<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al-Farisy | Portfolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; height: 100vh; overflow: hidden; background: #0a0a0a; color: #fff; }
        .split-container { display: flex; height: 100vh; width: 100vw; flex-direction: column; }
        @media(min-width: 768px) { .split-container { flex-direction: row; } }
        .split-pane { flex: 1; display: flex; flex-direction: column; justify-content: center; align-items: center; text-decoration: none; color: inherit; transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1); position: relative; overflow: hidden; }
        .split-pane::before { content: ''; position: absolute; inset: 0; background: rgba(0,0,0,0.4); z-index: 1; transition: opacity 0.3s; }
        .split-pane:hover { flex: 1.2; }
        .split-pane:hover::before { opacity: 0; }
        .pane-clean { background: #f4f4f5; color: #18181b; }
        .pane-creative { background: #18181b; color: #fafafa; }
        .pane-content { z-index: 2; text-align: center; }
        .pane-title { font-size: 3rem; font-weight: 800; letter-spacing: -1px; margin-bottom: 1rem; }
        .pane-desc { font-size: 1.1rem; opacity: 0.8; font-weight: 300; }
        .hero-text { position: absolute; top: 2rem; left: 50%; transform: translateX(-50%); z-index: 10; font-weight: 600; font-size: 1.5rem; text-transform: uppercase; letter-spacing: 2px; color: #fff; mix-blend-mode: difference; pointer-events: none; }
    </style>
</head>
<body>
    <div class="hero-text">Abdurrahman Al-Farisy</div>
    <div class="split-container">
        <a href="/clean" class="split-pane pane-clean">
            <div class="pane-content">
                <h2 class="pane-title">Clean</h2>
                <p class="pane-desc">Minimalist, semantic, high-performance.</p>
            </div>
        </a>
        <a href="/creative" class="split-pane pane-creative">
            <div class="pane-content">
                <h2 class="pane-title">Creative</h2>
                <p class="pane-desc">Striking, kinetic, dynamic animations.</p>
            </div>
        </a>
    </div>
</body>
</html>
