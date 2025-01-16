@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full max-h-screen overflow-y-auto bg-gray-50">

        <!-- Header Section -->
        <div class="flex items-center justify-between w-full px-6 py-4 bg-gradient-to-r from-red-500 to-yellow-400 text-white rounded-b-lg">
            <h1 class="text-3xl font-extrabold lg:text-4xl">Kategori</h1>
            <p class="hidden lg:block text-sm">Kelola kategori menu Anda secara efektif</p>
        </div>

        <!-- Divider -->
        <hr class="my-4 border-yellow-500">

        <!-- Form Section -->
        <div class="px-6">
            <form action="{{ route('category.store') }}" method="POST" class="space-y-6" enctype="multipart/form-data">
                @csrf

                <!-- Priority Field -->
                <div>
                    <label for="priority" class="block text-sm font-medium text-gray-700">Prioritas</label>
                    <input type="text" id="priority" name="priority" placeholder="Enter Priority"
                        class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500"
                        value="{{ old('priority') }}">
                    @error('priority')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Category Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama Kategori</label>
                    <input type="text" id="name" name="name" placeholder="Enter Category Name"
                        class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500"
                        value="{{ old('name') }}">
                    @error('name')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Photo Field -->
                <div>
                    <label for="photopath" class="block text-sm font-medium text-gray-700">Foto</label>
                    <input type="file" id="photopath" name="photopath"
                        class="w-full px-4 py-2 mt-1 border rounded-lg shadow-sm focus:ring-yellow-500 focus:border-yellow-500">
                    @error('photopath')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-center gap-4">
                    <button type="submit"
                        class="px-6 py-3 text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-400">
                        Tambah Kategori
                    </button>
                    <a href="{{ route('category.index') }}"
                        class="px-6 py-3 text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-2 focus:ring-red-400">
                        Keluar
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
