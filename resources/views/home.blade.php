@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <div class="space-y-32 px-4 py-2 max-w-7xl mx-auto">

        <!-- Hero Section -->
        <section class="text-center space-y-8 py-20 bg-gradient-to-r from-indigo-600 via-purple-500 to-pink-500 rounded-lg shadow-2xl relative mt-0">
            <div class="max-w-3xl mx-auto">
                <h1 class="text-6xl font-extrabold text-white leading-tight">
                    Welcome, I'm Rayan
                </h1>
                <p class="text-xl text-gray-100 mt-4">
                    A 17-year-old aspiring Software Developer at MBO Utrecht. Passionate about creating intuitive and impactful software solutions.
                </p>
            </div>
            <div class="mt-8">
                <a href="{{ route('projects.index') }}"
                   class="bg-white text-purple-700 font-bold py-4 px-10 rounded-full shadow-lg hover:bg-gray-100 transition transform hover:scale-105">
                    Explore My Portfolio
                </a>
            </div>
        </section>


        <!-- About Section -->
        <section class="space-y-10 text-center">
            <h2 class="text-5xl font-extrabold text-[#4F46E5]">About Me</h2>
            <p class="text-gray-700 text-lg max-w-4xl mx-auto">
                Currently studying Software Development at MBO Utrecht (Niveau 4). At <span class="dynamic-age"></span>, I’m honing my skills in web development, back-end systems, and creative problem-solving.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mt-10">
                <!-- Web Design -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">Web Design</h3>
                    <p class="text-gray-600 mt-3">Designing visually appealing and responsive websites.</p>
                </div>
                <!-- Back-End Systems -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">Back-End Systems</h3>
                    <p class="text-gray-600 mt-3">Building scalable and robust server-side applications.</p>
                </div>
                <!-- Front-End Development -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">Front-End Development</h3>
                    <p class="text-gray-600 mt-3">Creating interactive and user-friendly front-end experiences.</p>
                </div>
                <!-- No-Code Website Building -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-ban"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">No-Code Websites</h3>
                    <p class="text-gray-600 mt-3">Building websites without coding using no-code platforms.</p>
                </div>
                <!-- Problem Solving -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">Problem Solving</h3>
                    <p class="text-gray-600 mt-3">Creative solutions for complex technical challenges.</p>
                </div>
                <!-- Design -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <div class="text-4xl text-[#4F46E5] mb-4">
                        <i class="fas fa-pencil-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-black">Design</h3>
                    <p class="text-gray-600 mt-3">Crafting visually appealing and intuitive designs.</p>
                </div>
            </div>
        </section>


        <!-- Portfolio Section -->
        <section class="py-10">
            <h2 class="text-5xl font-extrabold text-indigo-600 text-center mb-12">Portfolio</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                @foreach ($projects as $project)
                    <div class="bg-gray-100 p-6 rounded-lg shadow-lg ">
                        <h3 class="text-2xl font-bold text-black">{{ $project->title }}</h3>
                        <p class="text-gray-600 mt-3">{{ Str::limit($project->description, 100) }}</p>
                        <a href="{{ route('projects.show', $project->slug) }}" class="text-indigo-600 hover:underline mt-4 inline-block">
                            Learn More
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-8">
                <a href="{{ route('projects.index') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition transform hover:scale-105">
                    See More Projects
                </a>
            </div>
        </section>



        <!-- Skills Section -->
        <section class="py-16 bg-gray-100 rounded-lg shadow-inner">
            <h2 class="text-5xl font-extrabold text-indigo-600 text-center mb-12">Skills</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                <div class="space-y-4">
                    <div class="text-indigo-600 text-6xl">&#128187;</div>
                    <h3 class="text-xl font-bold text-indigo-500">Programming</h3>
                    <p class="text-gray-600">Proficient in JavaScript, PHP, and Python.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-indigo-600 text-6xl">&#128421;</div>
                    <h3 class="text-xl font-bold text-indigo-500">Database Design</h3>
                    <p class="text-gray-600">Skilled in SQL and database optimization.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-indigo-600 text-6xl">&#127760;</div>
                    <h3 class="text-xl font-bold text-indigo-500">API Development</h3>
                    <p class="text-gray-600">Building RESTful APIs for seamless integrations.</p>
                </div>
                <div class="space-y-4">
                    <div class="text-indigo-600 text-6xl">&#128640;</div>
                    <h3 class="text-xl font-bold text-indigo-500">Creative Design</h3>
                    <p class="text-gray-600">Designing intuitive interfaces with a user-first approach.</p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="text-center py-20 bg-indigo-900 text-white rounded-lg shadow-xl">
            <h2 class="text-5xl font-extrabold">Let’s Collaborate</h2>
            <p class="text-lg text-gray-300 mt-6 max-w-2xl mx-auto">
                Ready to bring your ideas to life? Let’s discuss projects, internships, or collaborations.
            </p>
            <a href="{{ route('contact.form') }}" class="bg-purple-700 hover:bg-purple-800 font-bold py-4 px-12 rounded-full shadow-lg transition transform hover:scale-105 mt-6 inline-block">
                Contact Me
            </a>
        </section>
    </div>
@endsection
