@extends('layouts.layout')

@section('title', 'Projects')

@section('content')
    <div class="container mx-auto px-6 py-12 space-y-12">
        <h1 class="text-5xl font-extrabold text-[#4F46E5] text-center">My No-Code Projects</h1>
        <p class="text-gray-700 text-lg max-w-4xl mx-auto">
            Currently studying Software Development at MBO Utrecht (Niveau 4). At <span class="dynamic-age"></span>, I’m honing my skills in web development, back-end systems, and creative problem-solving.
        </p>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach ($projects as $project)
                <div class="bg-gray-100 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105 p-6 cursor-pointer"
                     onclick="window.location='{{ route('projects.show', $project->slug) }}'">

                    <div class="mb-6">
                        <h2 class="text-3xl font-bold text-black">{{ $project->title }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($project->description, 120) }}</p>
                    </div>

                    <div class="mt-4">
                        <p class="text-sm text-gray-600"><strong>Tools Used:</strong> {{ $project->tools_used }}</p>
                    </div>

                    <div class="mt-6 relative">
                            <img src="{{ Storage::url($project->image_path) }}" alt="{{ $project->title }} image" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
