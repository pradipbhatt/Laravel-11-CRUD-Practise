<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD System</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50 text-gray-800 font-sans">

    <!-- Include Header -->
    @include('layout.header')

    <!-- Hero Section -->
    <header class="bg-blue-600 text-white py-32">
        <div class="container mx-auto text-center px-6">
            <h1 class="text-5xl font-extrabold leading-tight">Welcome to the Laravel CRUD System</h1>
            <p class="mt-4 text-lg md:text-xl max-w-3xl mx-auto">Manage users and movies efficiently with our simple, secure, and intuitive interface. Start now!</p>
            <div class="mt-8">
                <a href="/users" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300 text-xl">View Users</a>
                <a href="/users/create" class="ml-4 px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300 text-xl">Add User</a>
            </div>
        </div>
    </header>

    <!-- Features Section -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-semibold text-center text-gray-800">Features</h2>
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800">User Management</h3>
                <p class="mt-4 text-gray-600">Easily add, edit, and delete users with our powerful CRUD system.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800">Secure Authentication</h3>
                <p class="mt-4 text-gray-600">Built-in authentication ensures your data is safe and secure.</p>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800">Responsive Design</h3>
                <p class="mt-4 text-gray-600">Access the system on any device with a fully responsive layout.</p>
            </div>
        </div>
    </section>

    <!-- Movies Section -->
    <section class="container mx-auto px-6 py-16">
        <h2 class="text-3xl font-semibold text-center text-gray-800">Movies</h2>
        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800">View Movies</h3>
                <p class="mt-4 text-gray-600">Explore the list of movies available in the system.</p>
                <a href="/movies" class="mt-4 inline-block px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition duration-300">View Movies</a>
            </div>
            <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition duration-300">
                <h3 class="text-2xl font-semibold text-gray-800">Add Movie</h3>
                <p class="mt-4 text-gray-600">Add new movies to the system effortlessly.</p>
                <a href="/movies/create" class="mt-4 inline-block px-6 py-3 bg-green-500 text-white rounded-lg hover:bg-green-600 transition duration-300">Add Movie</a>
            </div>
        </div>
    </section>

{{-- use the footer layout --}}
    @include('layout.footer')

    <!-- Footer -->

</body>
</html>
