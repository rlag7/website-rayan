@extends('layouts.layout')

@section('title', 'GitHub Repositories')

@section('content')
    <div class="space-y-12">
        <h1 class="text-5xl font-extrabold text-indigo-500 text-center">My GitHub Repositories</h1>

        @if(session('error'))
            <div class="bg-red-500 text-white p-4 rounded shadow text-center">
                {{ session('error') }}
            </div>
        @endif

        @if(!empty($repos) && count($repos) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($repos as $repo)
                    <div class="bg-gray-800 p-6 rounded shadow-lg hover:shadow-xl transition">
                        <a href="{{ $repo->html_url }}" target="_blank" class="text-purple-400 font-bold text-lg">
                            {{ $repo->name }}
                        </a>
                        <p class="text-gray-300 mt-3">
                            {{ $repo->description ?? 'No description available.' }}
                        </p>
                        <p class="text-gray-400 mt-2 text-sm">
                            Language: {{ $repo->language ?? 'N/A' }}
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-400">No repositories found or unable to fetch repositories at the moment.</p>
        @endif
    </div>
@endsection
