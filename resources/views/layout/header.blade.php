<!-- resources/views/layouts/header.blade.php -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <!-- Logo Section -->
        <a href="/" class="text-3xl font-bold text-gray-800 hover:text-blue-600 transition duration-300">
            Laravel CRUD System
        </a>

        <!-- Navigation Links Section -->
        <div class="md:flex space-x-8">
            <!-- Links for All Users -->
            {{-- <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Dashboard</a> --}}
            <a href="{{ url('/users') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Users</a>
            <a href="{{ url('/movies') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Movies</a>
            
            <!-- Login/Register Links for Guests -->
            @if (Route::has('login'))
                <div class="flex space-x-8">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="text-gray-800 hover:text-teal-600 transition duration-300 text-lg">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden">
            <button id="mobile-menu-button" class="text-gray-800 hover:text-teal-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden bg-white shadow-md hidden">
        <div class="px-6 py-4">
            <!-- Links for All Users in Mobile Menu -->
            <a href="{{ url('/dashboard') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Dashboard</a>
            <a href="{{ url('/users') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Users</a>
            <a href="{{ url('/movies') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Movies</a>

            <!-- Login/Register Links for Guests in Mobile Menu -->
            @if (Route::has('login'))
                <div class="space-y-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block text-gray-800 hover:text-teal-600 transition duration-300">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>

<!-- Add the following script to toggle the mobile menu visibility -->
<script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
