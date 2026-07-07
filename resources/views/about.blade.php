@extends('layouts.app')

@section('content')
    <h1 style="font-size: clamp(3rem, 6vw, 5rem); letter-spacing: 0.1em; text-transform: uppercase; font-weight: 900; margin-bottom: 2rem;">Abdurrahman<br>Al Farisy</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        
        <!-- Bio Card -->
        <div class="card" style="grid-column: 1 / -1; display: flex; gap: 2rem; align-items: center; flex-wrap: wrap;">
            <img src="https://avatars.githubusercontent.com/foustujian-sketch" alt="Abdurrahman Al Farisy" style="width: 150px; height: 150px; border-radius: 50%; border: 4px solid #fff; box-shadow: 0 10px 20px rgba(0,0,0,0.5); object-fit: cover;">
            <div style="flex: 1; min-width: 250px;">
                <h2 style="font-size: 1.5rem; letter-spacing: 0.1em; text-transform: uppercase;">Software Engineer</h2>
                <p>I am a Software Engineer and Information Systems student specializing in Backend Development and Database Optimization. I actively build full-scale web architectures and mobile applications that solve real-world problems.</p>
                <div style="margin-top: 1.5rem;">
                    <a href="https://github.com/foustujian-sketch" target="_blank" class="btn">GitHub</a>
                </div>
            </div>
        </div>

        <!-- Tech Stack Card -->
        <div class="card">
            <h2 style="letter-spacing: 0.1em; text-transform: uppercase;">Tech Stack</h2>
            <ul style="list-style: none; padding: 0; margin-top: 1rem;">
                <li style="margin-bottom: 1rem;">
                    <strong style="color: #fff; display: block; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Backend</strong>
                    <span style="color: #ddd;">Laravel, REST APIs, PostgreSQL</span>
                </li>
                <li style="margin-bottom: 1rem;">
                    <strong style="color: #fff; display: block; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Mobile / Frontend</strong>
                    <span style="color: #ddd;">Flutter, Dart, Full-Stack</span>
                </li>
                <li>
                    <strong style="color: #fff; display: block; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">Location</strong>
                    <span style="color: #ddd;">Samarinda, Indonesia</span>
                </li>
            </ul>
        </div>

        <!-- Experience Card -->
        <div class="card">
            <h2 style="letter-spacing: 0.1em; text-transform: uppercase;">Experience</h2>
            <div style="margin-top: 1rem;">
                <div style="margin-bottom: 2rem;">
                    <strong style="color: #fff; font-size: 1.1rem; display: block;">INSEVENT 2025</strong>
                    <span style="color: #aaa; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Relations and Sponsorship (10 mos)</span>
                    <p style="font-size: 0.95rem;">Managed external communications, secured financial sponsorships, and established critical media partnerships for a major 9-month organizational event.</p>
                </div>
                
                <div>
                    <strong style="color: #fff; font-size: 1.1rem; display: block;">INFORSA</strong>
                    <span style="color: #aaa; font-size: 0.9rem; display: block; margin-bottom: 0.5rem;">Advocacy & Student Welfare (11 mos)</span>
                    <p style="font-size: 0.95rem;">Acted as primary liaison ensuring students' academic rights. Managed grievance resolution and facilitated open dialogue forums.</p>
                </div>
            </div>
        </div>
        
    </div>
@endsection
