@extends('layouts.app')

@section('content')
    <h1 style="font-size: clamp(3rem, 6vw, 5rem); letter-spacing: 0.1em; text-transform: uppercase; font-weight: 900; margin-bottom: 2rem;">Certs</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 2rem;">
        
        <div class="card">
            <h3 style="font-size: 1.25rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1.5rem;">INFORSA Certification</h3>
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <img src="/images/certs/cert-inforsa.png" alt="INFORSA Certificate" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

        <div class="card">
            <h3 style="font-size: 1.25rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1.5rem;">Professional Achievement</h3>
            <div style="border-radius: 8px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.5);">
                <img src="/images/certs/download.png" alt="Certificate" style="width: 100%; height: auto; display: block;">
            </div>
        </div>

    </div>
@endsection
