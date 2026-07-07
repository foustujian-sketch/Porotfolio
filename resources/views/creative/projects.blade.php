@extends('layouts.creative')

@section('content')
    <h1>Projects</h1>
    <p style="opacity: 0.7; margin-bottom: 2rem;">> Fetching from GitHub API...</p>

    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 2rem;">
        @if(empty($projects))
            <p>Error loading API data.</p>
        @else
            @foreach($projects as $project)
                <div class="card" style="margin-bottom: 0; display: flex; flex-direction: column; overflow: hidden;">
                    <h3 style="overflow-wrap: break-word; word-break: break-word; line-height: 1.3;">{{ $project['name'] }}</h3>
                    <p style="color: #888; font-family: monospace; margin-bottom: 1rem; font-size: 0.9rem;">
                        [{{ $project['language'] ?? 'N/A' }}] // Stars: {{ $project['stargazers_count'] }}
                    </p>
                    <p style="margin-bottom: 1.5rem; flex-grow: 1;">{{ $project['description'] ?? 'No description.' }}</p>
                    <div style="margin-top: auto;">
                        <a href="{{ $project['html_url'] }}" target="_blank" style="display: inline-block;">View_Source</a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
@endsection
