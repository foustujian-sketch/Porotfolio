@extends('layouts.app')

@section('content')
    <h1 style="margin-bottom: 2rem;">All Software</h1>

    <div class="grid-layout">
        @if(empty($projects))
            <p>Error loading Library data.</p>
        @else
            @foreach($projects as $project)
                <div class="card" data-tilt style="display: flex; flex-direction: column;">
                    <div class="card-inner" style="display: flex; flex-direction: column; flex-grow: 1;">
                        <h3 style="overflow-wrap: break-word; word-break: break-word; line-height: 1.2; margin-bottom: 0.5rem;">{{ str_replace(['-', '_'], ' ', $project['name']) }}</h3>
                        
                        <div style="background: rgba(0,0,0,0.3); padding: 5px 10px; border-radius: 2px; margin-bottom: 1rem; display: inline-block;">
                            <span style="color: var(--text-muted); font-size: 0.8rem; text-transform: uppercase;">Language: </span>
                            <span style="color: var(--text-primary); font-size: 0.85rem; font-weight: bold;">{{ $project['language'] ?? 'N/A' }}</span>
                        </div>
                        
                        <p style="margin-bottom: 2rem; flex-grow: 1;">{{ $project['description'] ?? 'No description provided for this software.' }}</p>
                        
                        <div style="margin-top: auto; display: flex; justify-content: space-between; align-items: center;">
                            <span style="color: var(--text-muted); font-size: 0.8rem;">Stars: {{ $project['stargazers_count'] }}</span>
                            <a href="{{ $project['html_url'] }}" target="_blank" class="btn-steam">
                                Play / Source
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
