@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full max-h-screen overflow-y-auto bg-gray-50">

    <!-- Header Section -->
    <div class="flex items-center justify-between w-full px-6 py-4 bg-gradient-to-r from-red-500 to-yellow-400 text-white rounded-b-lg">
        <h1 class="text-3xl font-extrabold lg:text-4xl">Users</h1>
        <p class="hidden lg:block text-sm">Manage and view all registered users</p>
    </div>

    <!-- Divider -->
    <hr class="my-4 border-yellow-500">

    <!-- Users Table -->
    <div class="px-6">
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs font-medium text-gray-900 uppercase bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">S.N</th>
                        <th class="px-4 py-3">Name</th>
                        <th class="px-4 py-3">Email</th>
                        <th class="px-4 py-3">Phone Number</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">Gender</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($users as $user)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 text-center">{{ $loop->iteration }}</td>
                        <td class="px-4 py-3">{{ $user->name }}</td>
                        <td class="px-4 py-3">{{ $user->email }}</td>
                        <td class="px-4 py-3">{{ $user->phone }}</td>
                        <td class="px-4 py-3">{{ $user->address }}</td>
                        <td class="px-4 py-3">{{ $user->gender }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
