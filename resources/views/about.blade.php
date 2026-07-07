@extends('layouts.app')

@section('content')
    <div style="max-width: 800px; margin-bottom: 4rem;">
        <h1>Software Engineer</h1>
        <p style="font-size: 1.25rem; color: var(--text-primary);">I engineer robust web architectures and intelligent systems. Based in Indonesia, specializing in Laravel, PostgreSQL, and scalable API design.</p>
    </div>

    <h2>Recent Activity</h2>
    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        <div class="card" data-tilt>
            <div class="card-inner">
                <h3>Relations & Sponsorship Committee</h3>
                <p style="font-family: monospace; color: var(--text-muted); margin-bottom: 1rem;">INSEVENT 2025 &bull; Mar 2025 - Dec 2025</p>
                <p>Served on the Public Relations and Sponsorship committee. Managed external communications, secured financial sponsorships, and established critical media partnerships.</p>
            </div>
        </div>
        
        <div class="card" data-tilt>
            <div class="card-inner">
                <h3>Advocacy & Student Welfare</h3>
                <p style="font-family: monospace; color: var(--text-muted); margin-bottom: 1rem;">INFORSA &bull; Feb 2025 - Dec 2025</p>
                <p>Acted as the primary liaison between the Information Systems student body and university administration, ensuring students' academic rights and welfare were heavily prioritized.</p>
            </div>
        </div>
    </div>
@endsection
