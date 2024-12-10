@extends('layouts.layout')

@section('title', 'Projects')

@section('content')
    <div class="container mx-auto px-6 py-12 space-y-8">
        <h1 class="text-4xl font-bold text-gray-800 text-center">My No-Code Projects</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($projects as $project)
                <div class="bg-white rounded-lg shadow-lg p-6 cursor-pointer"
                     onclick="window.location='{{ route('projects.show', $project->slug) }}'">
                    <h2 class="text-2xl font-bold text-teal-500">{{ $project->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ $project->description }}</p>

                    <div class="mt-4">
                        <p><strong>Tools Used:</strong> {{ $project->tools_used }}</p>
                    </div>

                    <div class="mt-4 relative">
                        @if($project->image_path)
                            <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }} image" class="w-full h-64 object-cover rounded-lg">
                        @else
                            <img src="{{ asset('images/placeholder.png') }}" alt="Project Placeholder" class="w-full h-64 object-cover rounded-lg">
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
