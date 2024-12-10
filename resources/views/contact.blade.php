@extends('layouts.layout')

@section('title', 'Contact Me')

@section('content')
    <div class="space-y-12">
        <h1 class="text-5xl font-extrabold text-indigo-500 text-center">Contact Me</h1>

        @if(session('success'))
            <p class="bg-green-500 text-white p-4 rounded shadow text-center">
                {{ session('success') }}
            </p>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" class="bg-gray-800 p-6 rounded shadow-lg max-w-2xl mx-auto">
            @csrf
            <div class="mb-6">
                <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}"
                       class="w-full p-3 rounded bg-gray-900 text-white border border-gray-700 focus:ring-purple-400 focus:outline-none"
                       required>
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       class="w-full p-3 rounded bg-gray-900 text-white border border-gray-700 focus:ring-purple-400 focus:outline-none"
                       required>
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message:</label>
                <textarea id="message" name="message" rows="5"
                          class="w-full p-3 rounded bg-gray-900 text-white border border-gray-700 focus:ring-purple-400 focus:outline-none"
                          required>{{ old('message') }}</textarea>
                @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-3 px-6 rounded shadow-lg transition">
                Send Message
            </button>
        </form>
    </div>
@endsection
