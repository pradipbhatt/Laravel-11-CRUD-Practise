<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    // Display all Movies
    public function index()
    {
        // Fetch all movies and pass them to the view
        $movies = Movie::all();
        return view('movies.index', compact('movies')); // Make sure this view exists
    }

    // Show form to create a new Movie
    public function create()
    {
        // Display the create form
        return view('movies.create'); // Make sure this view exists
    }

    // Store a new Movie
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'released_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        // Initialize image path as null
        $imagePath = null;

        // Check if the image file is uploaded
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                // Store the image and get the file path
                $imagePath = $request->file('image')->store('movies_images', 'public');
            } else {
                return redirect()->route('movies.index')->with('error', 'Uploaded image is invalid.');
            }
        }

        // Create a new movie entry in the database
        Movie::create([
            'title' => $request->title,
            'genre' => $request->genre,
            'type' => $request->type,
            'released_date' => $request->released_date,
            'image' => $imagePath, // Save the image path in the database
        ]);

        // Redirect back to the movies index with a success message
        return redirect()->route('movies.index')->with('success', 'Movie added successfully.');
    }

    // Show a single movie
    public function show($id)
    {
        // Fetch the movie by ID
        $movie = Movie::findOrFail($id);
        return view('movies.show', compact('movie')); // Make sure this view exists
    }

    // Show form to edit a Movie
    public function edit($id)
    {
        // Fetch the movie by ID for editing
        $movie = Movie::findOrFail($id);
        return view('movies.edit', compact('movie')); // Make sure this view exists
    }

    // Update a Movie
    public function update(Request $request, $id)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'released_date' => 'required|date',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validate image
        ]);

        // Find the movie and update its details
        $movie = Movie::findOrFail($id);

        // Initialize the image path as the current image if no new image is uploaded
        $imagePath = $movie->image; // Default to the current image if no new one is uploaded

        // Check if a new image is uploaded
        if ($request->hasFile('image')) {
            // Check if the file is valid
            if ($request->file('image')->isValid()) {
                // If there is an old image, delete it
                if ($movie->image && Storage::exists('public/' . $movie->image)) {
                    Storage::delete('public/' . $movie->image);
                }

                // Store the new image and get the file path
                $imagePath = $request->file('image')->store('movies_images', 'public');
            } else {
                return redirect()->route('movies.index')->with('error', 'Uploaded image is invalid.');
            }
        }

        // Update the movie with new data
        $movie->update([
            'title' => $request->title,
            'genre' => $request->genre,
            'type' => $request->type,
            'released_date' => $request->released_date,
            'image' => $imagePath, // Save the new image path in the database
        ]);

        // Redirect to movies index with success message
        return redirect()->route('movies.index')->with('success', 'Movie updated successfully.');
    }

    // Delete a Movie
    public function destroy($id)
    {
        // Find the movie and delete it
        $movie = Movie::findOrFail($id);

        // Delete the image file if it exists
        if ($movie->image && Storage::exists('public/' . $movie->image)) {
            Storage::delete('public/' . $movie->image);
        }

        $movie->delete();

        // Redirect to movies index with success message
        return redirect()->route('movies.index')->with('success', 'Movie deleted successfully.');
    }
}
