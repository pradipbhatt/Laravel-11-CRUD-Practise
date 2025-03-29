<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Management</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-6 py-10">
        <h1 class="text-3xl font-bold text-center mb-6">Movies Management</h1>

        <!-- Add Movie Button -->
        <div class="text-right mb-4">
            <a href="{{ route('movies.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">
                Add New Movie
            </a>
        </div>

        <!-- Movies Table -->
        <div class="bg-white rounded-lg shadow overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr class="w-full bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">#</th>
                        <th class="py-3 px-6 text-left">Image</th> <!-- Add Image Column -->
                        <th class="py-3 px-6 text-left">Title</th>
                        <th class="py-3 px-6 text-left">Genre</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($movies as $movie)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $loop->iteration }}</td>

                            <!-- Display Movie Image -->
                            <td class="py-3 px-6">
                                @if ($movie->image)
                                    <img src="{{ asset('storage/' . $movie->image) }}" alt="Movie Image" class="w-16 h-16 rounded-full object-cover">
                                @else
                                    <span class="w-16 h-16 rounded-full bg-gray-300 flex items-center justify-center text-white">No Image</span>
                                @endif
                            </td>

                            <td class="py-3 px-6">{{ $movie->title }}</td>
                            <td class="py-3 px-6">{{ $movie->genre }}</td>
                            <td class="py-3 px-6 flex gap-2">
                                <a href="{{ route('movies.edit', $movie->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                    Edit
                                </a>
                                <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600"
                                        onclick="return confirm('Are you sure you want to delete this movie?')">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-3 px-6 text-center">No movies found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
