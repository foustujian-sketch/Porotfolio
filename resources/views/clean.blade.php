<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abdurrahman Al-Farisy | Clean Portfolio</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap');
        :root { --bg: #fafafa; --text: #111; --gray: #666; --border: #eaeaea; }
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; background: var(--bg); color: var(--text); line-height: 1.6; }
        .container { max-width: 800px; margin: 0 auto; padding: 4rem 2rem; }
        header { margin-bottom: 4rem; border-bottom: 1px solid var(--border); padding-bottom: 2rem; }
        h1 { font-size: 2.5rem; font-weight: 600; letter-spacing: -0.5px; }
        h2 { font-size: 1.5rem; font-weight: 600; margin-top: 3rem; margin-bottom: 1.5rem; }
        .subtitle { color: var(--gray); font-size: 1.1rem; margin-top: 0.5rem; }
        .project { margin-bottom: 2rem; }
        .project-title { font-weight: 600; font-size: 1.2rem; }
        .project-desc { color: var(--gray); margin-top: 0.5rem; }
        .skills-list { list-style: none; display: flex; gap: 1rem; flex-wrap: wrap; margin-top: 1rem; }
        .skills-list li { background: #fff; border: 1px solid var(--border); padding: 0.5rem 1rem; border-radius: 4px; font-size: 0.9rem; }
        nav { display: flex; justify-content: space-between; margin-bottom: 3rem; }
        a { color: var(--text); text-decoration: none; border-bottom: 1px solid var(--text); }
        a:hover { color: var(--gray); border-color: var(--gray); }
        .back-link { border: none; font-weight: 600; }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="/" class="back-link">&larr; Back to Hub</a>
            <a href="/creative" class="back-link">View Creative &rarr;</a>
        </nav>
        <header>
            <h1>Abdurrahman Al-Farisy</h1>
            <p class="subtitle">Full Stack Developer. Building clean, scalable, and high-performance applications.</p>
        </header>
        <main>
            <section>
                <h2>Selected Projects</h2>
                <div class="project">
                    <div class="project-title">E-Commerce Platform</div>
                    <p class="project-desc">A highly scalable e-commerce solution built with Laravel and React. Optimized for performance and SEO, resulting in a 40% increase in conversion rate.</p>
                </div>
                <div class="project">
                    <div class="project-title">Analytics Dashboard</div>
                    <p class="project-desc">Real-time data visualization dashboard handling millions of records daily. Developed using Vue.js and a RESTful API backend.</p>
                </div>
            </section>
            <section>
                <h2>Core Skills</h2>
                <ul class="skills-list">
                    <li>PHP / Laravel</li>
                    <li>JavaScript / TypeScript</li>
                    <li>React / Vue.js</li>
                    <li>SQL / NoSQL</li>
                    <li>RESTful APIs</li>
                    <li>System Architecture</li>
                </ul>
            </section>
        </main>
    </div>
</body>
</html>
