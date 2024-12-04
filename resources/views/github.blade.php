@extends('layouts.layout')

@section('title', 'GitHub Repositories')

@section('content')
    <h1>My GitHub Repositories</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(!empty($repos) && count($repos) > 0)
        <ul>
            @foreach($repos as $repo)
                <li>
                    <a href="{{ $repo->html_url }}" target="_blank">{{ $repo->name }}</a>
                    <p>{{ $repo->description ?? 'No description' }}</p>
                </li>
            @endforeach
        </ul>
    @else
        <p>No repositories found or unable to fetch repositories.</p>
    @endif
@endsection
