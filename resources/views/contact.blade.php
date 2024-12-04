@extends('layouts.layout')

@section('title', 'Contact Me')

@section('content')
    <h1>Contact Me</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')<p style="color: red;">{{ $message }}</p>@enderror

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" required>
        @error('email')<p style="color: red;">{{ $message }}</p>@enderror

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
        @error('message')<p style="color: red;">{{ $message }}</p>@enderror

        <button type="submit">Send Message</button>
    </form>
@endsection
