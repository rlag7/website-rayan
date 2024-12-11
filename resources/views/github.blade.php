@extends('layouts.layout')

@section('title', 'GitHub Repositories')

@section('content')
    <div class="container mx-auto px-6 py-12 space-y-12">
        <h1 class="text-5xl font-extrabold text-[#4F46E5] text-center">My GitHub Repositories</h1>

        @if(session('error'))
            <div class="bg- red-500 text-white p-4 rounded-lg shadow-md text-center">
                {{ session('error') }}
            </div>
        @endif

        @if(!empty($repos) && count($repos) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($repos as $repo)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-xl hover:shadow-2xl transition-transform transform hover:scale-105">
                        <a href="{{ $repo->html_url }}" target="_blank" class="text-black font-semibold text-xl">
                            {{ $repo->name }}
                        </a>
                        <p class="text-gray-500 mt-3">{{ $repo->description ?? 'No description available.' }}</p>
                        <p class="text-gray-600 mt-2 text-sm">
                            Language: <span class="text-gray-500">{{ $repo->language ?? 'N/A' }}</span>
                        </p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center text-gray-400">No repositories found or unable to fetch repositories at the moment.</p>
        @endif
    </div>
@endsection
