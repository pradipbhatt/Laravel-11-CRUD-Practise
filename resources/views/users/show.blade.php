<!-- resources/views/users/show.blade.php -->

<h2>User Details</h2>
<p><strong>Full Name:</strong> {{ $user->name }}</p>
<p><strong>Email:</strong> {{ $user->email }}</p>
<p><strong>Phone Number:</strong> {{ $user->phone_number }}</p>

<a href="{{ route('users.index') }}">Back to Users List</a>
