@extends('layouts.layout')

@section('title', $project->title)

@section('content')
    <div class="container mx-auto px-6 py-12 space-y-12">
        <h1 class="text-5xl font-extrabold text-indigo-600">{{ $project->title }}</h1>
        <p class="text-lg text-gray-600 mt-4">{{ $project->description }}</p>

        <div class="space-y-8">
            <div>
                <h2 class="text-3xl font-bold text-purple-600">About this Project</h2>
                <p class="text-gray-700 mt-2">{{ $project->long_description }}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700">Time Taken:</h3>
                <p class="text-gray-600">{{ $project->time_taken }}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700">Tools Used:</h3>
                <p class="text-gray-600">{{ $project->tools_used }}</p>
            </div>

            <div>
                <h3 class="font-bold text-gray-700">Key Features:</h3>
                <ul class="list-disc pl-6 text-gray-600">
                    @foreach (explode(',', $project->features) as $feature)
                        <li>{{ trim($feature) }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-6">
                @if($project->image_path)
                    <img src="{{ Storage::url($project->image_path) }}" alt="Project Image" class="w-full h-96 object-cover rounded-lg">
                @else
                    <img src="{{ asset('images/placeholder.png') }}" alt="Project Placeholder" class="w-full h-96 object-cover rounded-lg">
                @endif
            </div>

            <div class="mt-6">
                <a href="{{ $project->url }}" target="_blank" class="text-purple-600 hover:text-purple-800 underline">Visit the Project</a>
            </div>
        </div>
    </div>
@endsection
