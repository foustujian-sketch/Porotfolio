@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 2rem;">Achievements</h1>

    <div class="grid-layout">
        <div class="card" data-tilt>
            <div class="card-inner">
                <h3 style="margin-bottom: 1rem;">INFORSA Certification</h3>
                <div style="border-radius: 2px; overflow: hidden; border: 1px solid #000; box-shadow: 0 4px 8px rgba(0,0,0,0.5);">
                    <img src="/images/certs/cert-inforsa.png" alt="INFORSA Certificate" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>

        <div class="card" data-tilt>
            <div class="card-inner">
                <h3 style="margin-bottom: 1rem;">Professional Achievement</h3>
                <div style="border-radius: 2px; overflow: hidden; border: 1px solid #000; box-shadow: 0 4px 8px rgba(0,0,0,0.5);">
                    <img src="/images/certs/download.png" alt="Certificate" style="width: 100%; height: auto; display: block;">
                </div>
            </div>
        </div>
    </div>
@endsection
