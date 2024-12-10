@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="space-y-24 px-6 py-16 max-w-7xl mx-auto">

        <!-- Hero Section -->
        <section class="text-center space-y-8 py-16 bg-gradient-to-r from-indigo-500 to-purple-600 rounded-lg shadow-xl">
            <h1 class="text-6xl font-extrabold text-white">Hi, I'm Rayan</h1>
            <p class="text-xl text-gray-100 max-w-2xl mx-auto">
                I'm a 17-year-old Software Developer in training at MBO Utrecht. Passionate about coding, designing, and building meaningful software solutions.
            </p>
            <a href="{{ route('projects.index') }}" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-3 px-8 rounded-full shadow-xl transition transform hover:scale-105">
                Explore My Work
            </a>
        </section>

        <!-- About Section -->
        <section class="space-y-6 text-center">
            <h2 class="text-5xl font-extrabold text-indigo-500">About Me</h2>
            <p class="text-gray-300 text-lg max-w-3xl mx-auto">
                I’m studying Software Development at MBO Utrecht (Niveau 4). At 17, I’m building skills in web development, backend systems, and problem-solving.
            </p>
            <p class="text-gray-400 text-md italic">
                Age: <span class="dynamic-age"></span> years
            </p>
        </section>

        <!-- Portfolio Section -->
        <section class="py-12">
            <h2 class="text-5xl font-extrabold text-indigo-500 text-center mb-12">Portfolio</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach ($projects as $project)
                    <div class="bg-gray-800 p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                        <h3 class="text-2xl font-bold text-purple-400">{{ $project->title }}</h3>
                        <p class="text-gray-400 mt-3">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}" class="text-indigo-300 hover:underline mt-4 inline-block">
                            Read More
                        </a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- Contact CTA -->
        <section class="text-center py-16 bg-indigo-900 rounded-lg shadow-xl">
            <h2 class="text-5xl font-extrabold text-white">Let’s Connect</h2>
            <p class="text-gray-300 text-lg mt-4 max-w-2xl mx-auto">
                I’m open to discussing projects, internships, or collaboration opportunities. Let’s bring ideas to life together!
            </p>
            <a href="{{ route('contact.form') }}" class="bg-purple-700 hover:bg-purple-800 text-white font-bold py-3 px-8 rounded-full shadow-lg transition transform hover:scale-105 mt-6 inline-block">
                Get in Touch
            </a>
        </section>
    </div>
@endsection
