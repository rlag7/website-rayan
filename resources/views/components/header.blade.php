<header id="navbar" class="bg-gradient-to-r from-[#6B5FE2] via-[#7F73E6] to-[#9A88EA] via-[#B2A3F2] shadow-lg fixed top-0 left-1/2 transform -translate-x-1/2 z-50 w-full py-4 transition-all duration-300">
<nav class="container mx-auto flex items-center justify-between px-6 md:px-8">
        <!-- Logo (Left Side) -->
        <div class="text-2xl font-bold text-white hover:text-gray-400 transition duration-200">
            <a href="{{ route('home') }}" class="flex items-center space-x-2">
                <span>Rayan</span>
            </a>
        </div>

        <!-- Navigation Links (Desktop) -->
        <ul class="hidden md:flex space-x-8 text-lg text-white">
            <li><a href="{{ route('home') }}" class="hover:text-gray-200 transition">Home</a></li>
            <li><a href="{{ route('projects.index') }}" class="hover:text-gray-200 transition">Projects</a></li>
            <li><a href="{{ route('github') }}" class="hover:text-gray-200 transition">GitHub</a></li>
            <li><a href="{{ route('contact.form') }}" class="hover:text-gray-200 transition">Contact</a></li>
        </ul>

        <!-- Login Button (Right Side) -->
        <div class="ml-6 hidden md:block">
            <a href="/admin/login" class="text-xl font-semibold text-white hover:text-gray-200 transition duration-200">
                Login
            </a>
        </div>

        <!-- Mobile Menu Icon -->
        <div class="md:hidden flex items-center space-x-2">
            <button id="menu-toggle" class="text-white hover:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu (Hidden by default) -->
    <ul id="mobile-menu" class="hidden md:hidden bg-[#FBF7F2] text-center space-y-4 py-4">
        <li><a href="{{ route('home') }}" class="block py-2 text-[#282828] hover:text-gray-600">Home</a></li>
        <li><a href="{{ route('projects.index') }}" class="block py-2 text-[#282828] hover:text-gray-600">Projects</a></li>
        <li><a href="{{ route('github') }}" class="block py-2 text-[#282828] hover:text-gray-600">GitHub</a></li>
        <li><a href="{{ route('contact.form') }}" class="block py-2 text-[#282828] hover:text-gray-600">Contact</a></li>
    </ul>
</header>
