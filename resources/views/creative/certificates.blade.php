@extends('layouts.creative')

@section('content')
    <h1>Certificates</h1>
    <p style="opacity: 0.7; margin-bottom: 2rem;">> Loading credentials...</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
        <div class="card" style="margin-bottom: 0;">
            <h3 style="overflow-wrap: break-word; word-break: break-word;">INFORSA Certification</h3>
            <div style="overflow: hidden; border-radius: 8px; margin-top: 1rem; border: 1px solid rgba(255,255,255,0.1);">
                <img src="/images/certs/cert-inforsa.png" alt="INFORSA Certificate" style="width: 100%; height: auto; display: block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
        </div>

        <div class="card" style="margin-bottom: 0;">
            <h3 style="overflow-wrap: break-word; word-break: break-word;">Professional Achievement</h3>
            <div style="overflow: hidden; border-radius: 8px; margin-top: 1rem; border: 1px solid rgba(255,255,255,0.1);">
                <img src="/images/certs/download.png" alt="Certificate" style="width: 100%; height: auto; display: block; transition: transform 0.4s ease;" onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
            </div>
        </div>
    </div>
@endsection
