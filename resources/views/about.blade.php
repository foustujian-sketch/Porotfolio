@extends('layouts.app')

@section('content')

    {{-- ======== HERO ======== --}}
    <section class="reveal" style="margin-bottom: 3rem;">
        <div class="flex gap-4 items-center" style="flex-wrap: wrap;">
            <img
                src="/images/avatar.png"
                alt="Abdurrahman Al Farisy"
                style="width: 110px; height: 110px; border-radius: 20px; object-fit: cover; border: 2px solid rgba(255,255,255,0.08); flex-shrink: 0;"
            >
            <div>
                <h1 class="heading-xl">
                    Abdurrahman<br>
                    <span class="heading-gradient">Al Farisy</span>
                </h1>
                <p class="text-muted mt-1" style="font-size: 1.05rem;">
                    Software Engineer · Backend &amp; Systems
                </p>
            </div>
        </div>
    </section>

    {{-- ======== TAGLINE ======== --}}
    <section class="reveal" style="margin-bottom: 3rem;">
        <p style="font-size: 1.15rem; line-height: 1.75; color: #a1a1aa; max-width: 680px;">
            I am an Information Systems student at <strong style="color: #e4e4e7;">Universitas Mulawarman</strong>, specializing in backend development and database optimization. I build full-scale web architectures with Laravel and PostgreSQL, and cross-platform mobile applications with Flutter.
        </p>
        <div class="flex gap-2 mt-3" style="flex-wrap: wrap;">
            <a href="https://github.com/foustujian-sketch" target="_blank" class="btn-primary">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                GitHub
            </a>
            <a href="mailto:foustujian@gmail.com" class="btn-ghost">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M22 7l-10 7L2 7"/></svg>
                Contact
            </a>
        </div>
    </section>

    <div class="divider reveal"></div>

    {{-- ======== BENTO GRID ======== --}}
    <div class="grid-2">

        {{-- Tech Stack --}}
        <div class="inner-card reveal">
            <div class="card-content">
                <h2 class="heading-md" style="margin-bottom: 1.25rem;">Technical Stack</h2>
                <div class="flex flex-col gap-3">
                    <div>
                        <span class="font-mono text-xs text-muted" style="text-transform: uppercase; letter-spacing: 0.1em;">Backend</span>
                        <p style="color: #e4e4e7; margin-top: 0.25rem; font-weight: 500;">Laravel · REST APIs · Relational Schema Design</p>
                    </div>
                    <div>
                        <span class="font-mono text-xs text-muted" style="text-transform: uppercase; letter-spacing: 0.1em;">Database</span>
                        <p style="color: #e4e4e7; margin-top: 0.25rem; font-weight: 500;">PostgreSQL · MySQL · Supabase</p>
                    </div>
                    <div>
                        <span class="font-mono text-xs text-muted" style="text-transform: uppercase; letter-spacing: 0.1em;">Mobile</span>
                        <p style="color: #e4e4e7; margin-top: 0.25rem; font-weight: 500;">Flutter · Dart</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Education --}}
        <div class="inner-card reveal">
            <div class="card-content">
                <h2 class="heading-md" style="margin-bottom: 1.25rem;">Education</h2>
                <div>
                    <p style="color: #fff; font-weight: 600; font-size: 1.05rem;">Universitas Mulawarman</p>
                    <p class="text-muted mt-1">Information Systems</p>
                    <span class="font-mono text-xs text-muted mt-1" style="display: block;">Sep 2024 — 2028</span>
                </div>
                <div style="margin-top: 1.5rem;">
                    <p class="text-muted text-sm">Samarinda, Kalimantan Timur, Indonesia</p>
                </div>
            </div>
        </div>

        {{-- Experience — full width --}}
        <div class="inner-card reveal grid-span-full">
            <div class="card-content">
                <h2 class="heading-md" style="margin-bottom: 1.5rem;">Experience</h2>

                <div class="flex flex-col gap-4">
                    {{-- INSEVENT --}}
                    <div style="padding-left: 1.25rem; border-left: 2px solid rgba(192, 132, 252, 0.4);">
                        <div class="flex items-center gap-2" style="flex-wrap: wrap;">
                            <p style="color: #fff; font-weight: 600; font-size: 1.05rem;">Relations &amp; Sponsorship Committee</p>
                            <span class="pill">INSEVENT 2025</span>
                        </div>
                        <span class="font-mono text-xs text-muted mt-1" style="display: block;">Mar 2025 — Dec 2025 · 10 months</span>
                        <p class="text-muted mt-2 text-sm" style="line-height: 1.7; max-width: 700px;">
                            Managed external communications and secured financial sponsorships for a major 9-month organizational event. Established media partnerships and negotiated with external stakeholders to ensure the event's promotional reach and financial targets were met.
                        </p>
                    </div>

                    {{-- INFORSA --}}
                    <div style="padding-left: 1.25rem; border-left: 2px solid rgba(96, 165, 250, 0.4);">
                        <div class="flex items-center gap-2" style="flex-wrap: wrap;">
                            <p style="color: #fff; font-weight: 600; font-size: 1.05rem;">Advocacy &amp; Student Welfare Staff</p>
                            <span class="pill">INFORSA</span>
                        </div>
                        <span class="font-mono text-xs text-muted mt-1" style="display: block;">Feb 2025 — Dec 2025 · 11 months</span>
                        <p class="text-muted mt-2 text-sm" style="line-height: 1.7; max-width: 700px;">
                            Primary liaison between the Information Systems student body and university administration. Managed grievance resolution, facilitated open dialogue forums, and coordinated welfare initiatives to maintain an inclusive academic environment.
                        </p>
                    </div>
                </div>

            </div>
        </div>

    </div>

@endsection
