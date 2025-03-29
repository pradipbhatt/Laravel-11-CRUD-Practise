<!-- filepath: c:\Users\pradip bhatt\Desktop\Laravel-11-CRUD-system\resources\views\movies\show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Details</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <div class="container mx-auto px-6 py-12">
        <h1 class="text-4xl font-bold text-center mb-8">Movie Details</h1>

        <!-- Back to Movies Button -->
        <div class="text-right mb-6">
            <a href="{{ route('movies.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-lg hover:bg-gray-600 transition duration-300">
                Back to Movies
            </a>
        </div>

        <!-- Movie Details Card -->
        <div class="bg-white rounded-lg shadow-lg p-8">
            <!-- Movie Image -->
            @if ($movie->image)
                <div class="mb-6">
                    <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" class="w-full h-64 object-cover rounded-lg shadow-md">
                </div>
            @else
                <div class="mb-6">
                    <img src="https://via.placeholder.com/400x300?text=No+Image+Available" alt="No Image Available" class="w-full h-64 object-cover rounded-lg shadow-md">
                </div>
            @endif

            <!-- Movie Details -->
            <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $movie->title }}</h2>
            <p class="text-gray-600"><strong>Genre:</strong> {{ $movie->genre }}</p>
            <p class="text-gray-600"><strong>Release Year:</strong> {{ $movie->release_year }}</p>
            <p class="text-gray-600"><strong>Description:</strong> {{ $movie->description ?? 'No description available.' }}</p>
        </div>
    </div>
</body>
</html>