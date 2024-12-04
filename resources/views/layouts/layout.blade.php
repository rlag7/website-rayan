<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('projects') }}">Projects</a></li>
            <li><a href="{{ route('github') }}">GitHub</a></li>
            <li><a href="{{ route('contact.form') }}">Contact</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; {{ date('Y') }} rayan lagmouch. All rights reserved.</p>
</footer>
</body>
</html>
