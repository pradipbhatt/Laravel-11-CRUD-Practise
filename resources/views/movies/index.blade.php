<!-- filepath: c:\Users\pradip bhatt\Desktop\Laravel-11-CRUD-system\resources\views\movies\index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Include Header -->
    @include('layout.header')

    <div class="container mx-auto px-6 py-10">
        <!-- Navbar -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-center">Movies List</h1>
            <!-- Add New Movie Button -->
            <a href="{{ route('movies.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                Add New Movie
            </a>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-200 text-green-800 p-4 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <!-- Movies Table -->
        <div class="bg-white shadow-lg rounded-lg p-6">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">Title</th>
                        <th class="border border-gray-300 px-4 py-2">Genre</th>
                        <th class="border border-gray-300 px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movies as $movie)
                        <tr>
                            <td class="border border-gray-300 px-4 py-2">{{ $movie->title }}</td>
                            <td class="border border-gray-300 px-4 py-2">{{ $movie->genre }}</td>
                            <td class="border border-gray-300 px-4 py-2">
                                <a href="{{ route('movies.show', $movie->id) }}" class="text-blue-500 hover:underline">View</a> |
                                <a href="{{ route('movies.edit', $movie->id) }}" class="text-yellow-500 hover:underline">Edit</a> |
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>