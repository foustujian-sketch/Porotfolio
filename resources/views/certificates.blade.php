@extends('layouts.app')

@section('content')

    <section class="reveal" style="margin-bottom: 3rem;">
        <h1 class="heading-xl">
            <span class="heading-gradient">Credentials</span>
        </h1>
        <p class="text-muted mt-2" style="max-width: 500px;">
            Verified certifications and institutional achievements.
        </p>
    </section>

    <div class="grid-2">

        <div class="inner-card reveal">
            <div class="card-content">
                <div class="flex items-center gap-2" style="margin-bottom: 1.25rem;">
                    <h3 style="color: #fff; font-weight: 600; font-size: 1.1rem;">INFORSA Committee</h3>
                    <span class="pill">Certificate</span>
                </div>
                <div style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.06);">
                    <img src="/images/certs/cert-inforsa.png" alt="INFORSA Certificate" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>

        <div class="inner-card reveal">
            <div class="card-content">
                <div class="flex items-center gap-2" style="margin-bottom: 1.25rem;">
                    <h3 style="color: #fff; font-weight: 600; font-size: 1.1rem;">Professional Achievement</h3>
                    <span class="pill">Certificate</span>
                </div>
                <div style="border-radius: 12px; overflow: hidden; border: 1px solid rgba(255,255,255,0.06);">
                    <img src="/images/certs/download.png" alt="Certificate" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>

    </div>

@endsection
