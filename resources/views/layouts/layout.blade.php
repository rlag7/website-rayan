<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio')</title>
    @vite('resources/css/app.css')
    <style>
        .fade-enter-active, .fade-leave-active {
            transition: opacity 0.5s ease-in-out;
        }
        .fade-enter, .fade-leave-to {
            opacity: 0;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-white text-[#282828] min-h-screen flex flex-col pt-20">

@include('components.header')

<main class="container mx-auto px-6 py-12 flex-grow ">
    @yield('content')
</main>

@include('components.footer')

<script>
    const calculateAge = (birthDate) => {
        const diff = new Date() - new Date(birthDate);
        return Math.floor(diff / (1000 * 60 * 60 * 24 * 365.25));
    };
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".dynamic-age").forEach(el => {
            el.textContent = calculateAge("2007-04-20");
        });
    });

    document.body.style.opacity = 0;
    window.onload = function() {
        document.body.style.transition = "opacity 0.5s ease-in-out";
        document.body.style.opacity = 1;
    };

    document.querySelectorAll("a").forEach(function (link) {
        link.addEventListener("click", function (e) {
            e.preventDefault();
            let href = this.getAttribute("href");

            document.body.style.opacity = 0;

            setTimeout(function () {
                window.location.href = href;
            }, 500);
        });
    });
</script>
</body>
</html>
