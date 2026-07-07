@extends('layouts.app')

@section('content')
    <h1 style="font-size: clamp(3rem, 6vw, 5rem); letter-spacing: 0.1em; text-transform: uppercase; font-weight: 900; margin-bottom: 2rem;">Projects</h1>
    
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
        @if(empty($projects))
            <div class="card" style="grid-column: 1 / -1; text-align: center;">
                <p>Failed to initialize GitHub data stream.</p>
            </div>
        @else
            @foreach($projects as $project)
                <div class="card" style="display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; min-height: 350px;">
                    
                    <div class="card-title-wrap" style="width: 100%;">
                        <h3 class="title" style="font-size: 2rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1rem; color: #fff; word-break: break-word;">
                            <span class="copy-wrap">
                                {{ str_replace(['-', '_'], ' ', $project['name']) }}
                            </span>
                        </h3>
                        
                        <p style="margin-bottom: 2rem; max-width: 90%;">
                            {{ $project['description'] ?? 'No description provided.' }}
                        </p>
                        
                        <span style="color: #aaa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em; display: block; margin-bottom: 2rem;">
                            {{ $project['language'] ?? 'N/A' }}
                        </span>
                    </div>

                    <!-- The absolute centered button just like the user's codepen -->
                    <a href="{{ $project['html_url'] }}" target="_blank" class="btn">
                        View
                    </a>

                </div>
            @endforeach
        @endif
    </div>
@endsection
