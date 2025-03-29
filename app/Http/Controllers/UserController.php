<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    // Show the welcome page
    public function welcome(){
        return view('welcome');  // Return the welcome view
    }

    // Display a listing of all users
    public function index(){
        $all_users = User::all();  // Fetch all users from the database
        return view('users.index', compact('all_users'));  // Pass users data to the index view
    }

    // Show the form for creating a new user
    public function create(){
        return view('users.create');  // Show the create user form
    }

    // Store a newly created user in storage
    public function store(Request $request){
        // Validate the request data
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required',
            'password' => 'required|confirmed|min:4|max:8',
        ]);

        try {
            // Create and save the new user
            $new_user = new User;
            $new_user->name = $request->full_name;
            $new_user->email = $request->email;
            $new_user->phone_number = $request->phone_number;
            $new_user->password = Hash::make($request->password);
            $new_user->save();

            // Redirect to users index page with success message
            return redirect('/users')->with('success', 'User Added Successfully');
        } catch (\Exception $e) {
            // If an error occurs, redirect back with the error message
            return redirect('/users/create')->with('fail', 'Error: ' . $e->getMessage());
        }
    }

    // Show the details of a specific user
    public function show($id){
        $user = User::find($id);  // Find the user by ID
        if (!$user) {
            return redirect('/users')->with('fail', 'User not found');  // Handle case where user is not found
        }
        return view('users.show', compact('user'));  // Pass the user data to the show view
    }

    // Show the form for editing an existing user
    public function edit($id){
        $user = User::find($id);  // Find the user by ID
        if (!$user) {
            return redirect('/users')->with('fail', 'User not found');  // Handle case where user is not found
        }
        return view('users.edit', compact('user'));  // Pass the user data to the edit view
    }

    // Update an existing user in storage
    public function update(Request $request, $id){
        // Validate the request data
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required',
        ]);

        try {
            // Update the user with the new data
            $update_user = User::where('id', $id)->update([
                'name' => $request->full_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
            ]);

            // Redirect to users index page with success message
            return redirect('/users')->with('success', 'User Updated Successfully');
        } catch (\Exception $e) {
            // If an error occurs, redirect back to the edit form with the error message
            return redirect('/users/'.$id.'/edit')->with('fail', 'Error: ' . $e->getMessage());
        }
    }

    // Remove the specified user from storage
    public function destroy($id){
        try {
            // Find and delete the user
            $user = User::find($id);
            if (!$user) {
                return redirect('/users')->with('fail', 'User not found');
            }
            $user->delete();  // Delete the user from the database

            // Redirect to users index page with success message
            return redirect('/users')->with('success', 'User Deleted Successfully');
        } catch (\Exception $e) {
            // If an error occurs, redirect to users index page with the error message
            return redirect('/users')->with('fail', 'Error: ' . $e->getMessage());
        }
    }
}
