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
                <div class="card" style="display: flex; flex-direction: column;">
                    <h3 style="font-size: 1.5rem; letter-spacing: 0.05em; text-transform: uppercase; margin-bottom: 1rem; word-break: break-word;">
                        {{ str_replace(['-', '_'], ' ', $project['name']) }}
                    </h3>
                    
                    <p style="flex-grow: 1; margin-bottom: 2rem;">
                        {{ $project['description'] ?? 'No description provided.' }}
                    </p>
                    
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-top: auto;">
                        <span style="color: #aaa; font-weight: 600; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 0.1em;">
                            {{ $project['language'] ?? 'N/A' }}
                        </span>
                        
                        <a href="{{ $project['html_url'] }}" target="_blank" class="btn" style="position: static; transform: none; box-shadow: none; padding: 8px 16px;">
                            View
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
