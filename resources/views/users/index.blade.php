<!-- filepath: c:\Users\pradip bhatt\Desktop\Laravel-11-CRUD-system\resources\views\users\index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 11 CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- Include Header -->
    @include('layout.header')

    <div class="container mx-auto p-4">
        <!-- Navbar -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Users List</h1>
            <!-- Create User Button -->
            <a href="{{ route('users.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                Create User
            </a>
        </div>

        <!-- Card Container -->
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <!-- Body -->
            <div class="p-6">
                <!-- Success & Fail Message -->
                @if (Session::has('success'))
                    <div class="bg-green-100 text-green-700 px-4 py-2 rounded-md mb-4">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="bg-red-100 text-red-700 px-4 py-2 rounded-md mb-4">{{ Session::get('fail') }}</div>
                @endif

                <!-- Users Table -->
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                        <thead class="bg-gray-200">
                            <tr>
                                <th class="px-4 py-2 text-left text-gray-600">S/N</th>
                                <th class="px-4 py-2 text-left text-gray-600">Full Name</th>
                                <th class="px-4 py-2 text-left text-gray-600">Email</th>
                                <th class="px-4 py-2 text-left text-gray-600">Phone</th>
                                <th class="px-4 py-2 text-left text-gray-600">Registered</th>
                                <th class="px-4 py-2 text-left text-gray-600">Last Update</th>
                                <th class="px-4 py-2 text-center text-gray-600">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($all_users) > 0)
                                @foreach ($all_users as $item)
                                    <tr class="border-b hover:bg-gray-100">
                                        <td class="px-4 py-2">{{ $loop->iteration }}</td>
                                        <td class="px-4 py-2">{{ $item->name }}</td>
                                        <td class="px-4 py-2">{{ $item->email }}</td>
                                        <td class="px-4 py-2">{{ $item->phone_number ?? 'N/A' }}</td>
                                        <td class="px-4 py-2">{{ $item->created_at->format('d M, Y') }}</td>
                                        <td class="px-4 py-2">{{ $item->updated_at->format('d M, Y') }}</td>
                                        <td class="px-4 py-2 flex gap-2 justify-center">
                                            <!-- Edit & Delete Buttons -->
                                            <a href="{{ route('users.edit', $item->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition">Edit</a>
                                            <a href="{{ route('users.destroy', $item->id) }}" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 transition" 
                                               onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</a>

                                            <!-- Delete Form (hidden) -->
                                            <form id="delete-form-{{ $item->id }}" action="{{ route('users.destroy', $item->id) }}" method="POST" class="hidden">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>    
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="7" class="text-center py-4 text-gray-500">No Users Found!</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>
</html>