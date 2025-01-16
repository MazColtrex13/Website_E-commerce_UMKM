@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full max-h-screen overflow-y-auto bg-gray-50">

        <!-- Header Section -->
        <div class="flex items-center justify-between w-full px-6 py-4 bg-gradient-to-r from-yellow-400 to-red-500 text-white rounded-b-lg">
            <h1 class="text-3xl font-extrabold lg:text-4xl">Kategori</h1>
            <a href="{{ route('category.create') }}"
                class="px-4 py-2 text-sm font-bold bg-white text-yellow-500 rounded-lg shadow hover:bg-yellow-50">
                Tambah Kategori
            </a>
        </div>

        <!-- Divider -->
        <hr class="my-4 border-yellow-500">

        <!-- Table Section -->
        <div class="container px-4 py-5 mx-auto text-gray-800">
            <div class="overflow-x-auto bg-white rounded-lg shadow">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase sm:text-sm">Prioritas</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase sm:text-sm">Nama</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase sm:text-sm">Foto</th>
                            <th class="px-6 py-3 text-xs font-bold text-left uppercase sm:text-sm">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr class="transition duration-300 bg-white border-b hover:bg-yellow-50">
                                <td class="px-6 py-4 text-sm">{{ $category->priority }}</td>
                                <td class="px-6 py-4 text-sm">{{ $category->name }}</td>
                                <td class="px-6 py-4">
                                    <img src="{{ asset('images/categories/' . $category->photopath) }}"
                                        alt="{{ $category->name }}"
                                        class="object-cover w-12 h-12 rounded shadow">
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('category.edit', $category->id) }}"
                                            class="px-4 py-2 text-xs font-bold text-white bg-yellow-500 rounded-lg hover:bg-yellow-600 sm:text-sm">
                                            Edit
                                        </a>
                                        <button onclick="showpopup({{ $category->id }})"
                                            class="px-4 py-2 text-xs font-bold text-white bg-red-500 rounded-lg hover:bg-red-600 sm:text-sm">
                                            Hapus
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Popup Modal -->
        <div class="fixed inset-0 flex items-center justify-center hidden bg-gray-800 bg-opacity-50 backdrop-blur-sm"
            id="popup">
            <form action="{{ route('category.destroy') }}" method="POST"
                class="w-full max-w-md px-6 py-6 bg-white rounded-lg shadow-lg">
                @csrf
                @method('DELETE')
                <h1 class="mb-4 text-xl font-semibold text-gray-800">Konfirmasi Penghapusan</h1>
                <p class="mb-6 text-gray-600">
                Apakah Anda yakin ingin menghapus kategori ini? <br>
                    <span class="text-red-500">Tindakan ini tidak dapat dibatalkan.</span>
                </p>
                <input type="hidden" name="dataid" id="category_id">
                <div class="flex justify-center space-x-4">
                    <button type="submit"
                        class="px-6 py-2 text-sm font-bold text-white bg-red-600 rounded-lg hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Ya, Hapus
                    </button>
                    <button type="button" onclick="hidepopup()"
                        class="px-6 py-2 text-sm font-bold text-gray-800 bg-gray-300 rounded-lg hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-400">
                        Batal
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

<script>
    function showpopup(category_id) {
        const popup = document.getElementById('popup');
        popup.classList.remove('hidden');
        popup.classList.add('flex');
        document.getElementById('category_id').value = category_id;
    }

    function hidepopup() {
        const popup = document.getElementById('popup');
        popup.classList.remove('flex');
        popup.classList.add('hidden');
    }
</script>
