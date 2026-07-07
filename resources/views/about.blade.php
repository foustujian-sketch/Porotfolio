@extends('layouts.app')

@section('content')
    <!-- High-End Interactive 3D Avatar Section -->
    <div style="display: flex; align-items: center; gap: 3rem; margin-bottom: 5rem; flex-wrap: wrap;">
        
        <!-- Spline 3D Viewer -->
        <!-- Replace the URL in the 'url' attribute with your own custom Spline 3D character scene -->
        <div style="width: 300px; height: 350px; border-radius: 20px; overflow: hidden; border: 1px solid var(--border-color); box-shadow: 0 10px 40px rgba(0, 229, 255, 0.15); background: var(--bg-panel); position: relative;">
            <spline-viewer url="https://prod.spline.design/6Wq1Q7YGyM-iab9i/scene.splinecode"></spline-viewer>
        </div>

        <div style="flex: 1; min-width: 300px;">
            <div style="display: inline-block; padding: 0.5rem 1rem; background: rgba(66, 165, 245, 0.1); border: 1px solid var(--accent-blue); color: var(--accent-cyan); border-radius: 20px; font-weight: 500; font-size: 0.9rem; width: fit-content; margin-bottom: 1rem; letter-spacing: 1px;">
                DART &amp; FLUTTER SPECIALIST
            </div>
            <h1 style="border-left: none; padding-left: 0;">Software Engineer</h1>
            <p style="font-size: 1.25rem; max-width: 800px; color: var(--text-primary); line-height: 1.7;">
                I engineer highly fluid, cross-platform applications and robust backend systems. Based in Indonesia, specializing in Dart, Flutter, Laravel, and scalable API architecture.
            </p>
        </div>
    </div>

    <h2>Professional Experience</h2>
    <div style="display: flex; flex-direction: column; gap: 2rem;">
        <div class="card" data-tilt>
            <div class="card-inner">
                <h3 style="color: var(--text-primary);">Relations & Sponsorship Committee</h3>
                <p style="font-family: monospace; color: var(--accent-cyan); margin-bottom: 1rem;">INSEVENT 2025 &bull; Mar 2025 - Dec 2025</p>
                <p>Served on the Public Relations and Sponsorship committee. Managed external communications, secured financial sponsorships, and established critical media partnerships.</p>
            </div>
        </div>
        
        <div class="card" data-tilt>
            <div class="card-inner">
                <h3 style="color: var(--text-primary);">Advocacy & Student Welfare</h3>
                <p style="font-family: monospace; color: var(--accent-cyan); margin-bottom: 1rem;">INFORSA &bull; Feb 2025 - Dec 2025</p>
                <p>Acted as the primary liaison between the Information Systems student body and university administration, ensuring students' academic rights and welfare were heavily prioritized.</p>
            </div>
        </div>
    </div>
@endsection
