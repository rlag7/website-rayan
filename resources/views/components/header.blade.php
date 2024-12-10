<header id="navbar" class="bg-gray-800 rounded-full shadow-lg fixed top-0 left-1/2 transform -translate-x-1/2 z-50 transition-all duration-300 mt-4">
    <nav class="flex items-center justify-center px-8 py-3 space-x-6">
        <ul class="flex space-x-4">
            <li><a href="{{ route('home') }}" class="text-gray-300 hover:text-teal-400 transition">Home</a></li>
            <li><a href="{{ route('projects.index') }}" class="text-gray-300 hover:text-teal-400 transition">Projects</a></li>
            <li><a href="{{ route('github') }}" class="text-gray-300 hover:text-teal-400 transition">GitHub</a></li>
            <li><a href="{{ route('contact.form') }}" class="text-gray-300 hover:text-teal-400 transition">Contact</a></li>
        </ul>
        <div class="ml-4">
            <a href="/admin/login" class="text-2xl font-bold text-teal-400 hover:text-teal-500 transition">
                Rayan
            </a>
        </div>
    </nav>
</header>

<script>
    let lastScrollY = window.scrollY;
    const navbar = document.getElementById('navbar');

    window.addEventListener('scroll', () => {
        if (window.scrollY > lastScrollY) {

            navbar.classList.add('translate-y-[-150%]');
        } else {

            navbar.classList.remove('translate-y-[-150%]');
        }
        lastScrollY = window.scrollY;
    });
</script>
