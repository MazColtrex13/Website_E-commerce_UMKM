@extends('layouts.master')
@section('content')
    <div class="px-4 md:px-16">
        <div class="pl-4 mt-5 mb-4 border-l-4 border-yellow-500">
            <h1 class="lg:text-3xl text-2xl font-bold text-[#ff0000]">Hasil Penelusuran</h1>
        </div>

        <div class="mx-3 mt-5">
            <!-- Responsive grid for all devices -->
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Product Loop -->
                @forelse ($products as $product)
                    <a href="{{ route('viewproduct', $product->id) }}" class="flex flex-col">
                        <!-- Product card with responsive design -->
                        <div
                            class="overflow-hidden transition-transform duration-200 border rounded-lg shadow-md hover:scale-105">
                            <img src="{{ asset('images/products/' . $product->photopath) }}" alt="{{ $product->name }}"
                                class="object-cover w-full h-64">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold">{{ Str::limit($product->name, 25) }}</h3>
                                <p class="text-sm text-gray-500">{{ Str::limit($product->description, 50) }}</p>
                                <div class="mt-3">
                                    <span class="text-lg font-bold text-gray-900">Rp {{ $product->price }}</span>
                                    @if ($product->discounted_price)
                                        <span class="ml-2 text-sm text-gray-400 line-through">Rp
                                            {{ $product->discounted_price }}</span>
                                        <span
                                            class="ml-1 text-sm font-bold text-red-500">({{ round((($product->discounted_price - $product->price) / $product->discounted_price) * 100) }}%
                                            OFF)</span>
                                    @endif
                                </div>
                                <div class="flex items-center mt-3">
                                    <div class="flex items-center">
                                        @php
                                            // Use the average rating calculated from the model
                                            $averageRating = $product->reviews_avg_rating ?? 0; // Use 0 if no reviews
                                            $fullStars = floor($averageRating);
                                            $halfStars = $averageRating - $fullStars >= 0.5 ? 1 : 0;
                                            $emptyStars = 5 - ($fullStars + $halfStars);
                                        @endphp

                                        {{-- Full stars --}}
                                        @for ($i = 0; $i < $fullStars; $i++)
                                            <i class='text-yellow-500 bx bxs-star'></i>
                                        @endfor

                                        {{-- Half star --}}
                                        @if ($halfStars)
                                            <i class='text-yellow-500 bx bxs-star-half'></i>
                                        @endif

                                        {{-- Empty stars --}}
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class='text-yellow-500 bx bx-star'></i>
                                        @endfor
                                    </div>

                                    <span class="ml-2 text-sm text-yellow-500">{{ number_format($averageRating, 1) }}</span>
                                    <span class="ml-2 text-sm text-gray-400">{{ $product->reviews->count() }} reviews</span>
                                </div>
                            </div>
                        </div>
                    </a>
                @empty
                    <div class="flex flex-col items-center justify-center h-full py-20 -mt-8">
                        <img src="{{ asset('images/noproduct.webp') }}" alt="No Products Found" class="w-40 h-40 mb-4">
                        <h1 class="text-2xl font-bold text-gray-900">Tidak ada produk yang ditemukan</h1>
                        <p class="text-gray-500">Coba sesuaikan pencarian untuk menemukan apa yang Anda cari.</p>
                        <a href="{{ route('home') }}"
                            class="px-4 py-2 mt-4 text-white bg-yellow-500 rounded hover:bg-yellow-600">Kembali ke halaman utama</a>
                    </div>
                @endforelse
            </div>

            <!-- Additional Grid Section -->
            <div class="mt-10 grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                <!-- Example of Additional Static Content -->
                <div class="flex flex-col items-center p-6 text-center bg-gray-50 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-[#B22222]">Promo Spesial</h2>
                    <p class="mt-2 text-sm text-gray-600">Dapatkan diskon hingga 10% untuk menu pilihan!</p>
                    <a href="#"
                        class="px-4 py-2 mt-4 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">Lihat Promo</a>
                </div>

                <div class="flex flex-col items-center p-6 text-center bg-gray-50 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-[#B22222]">Menu Terlaris</h2>
                    <p class="mt-2 text-sm text-gray-600">Jelajahi menu dengan rating terbaik dari pelanggan kami.</p>
                    <a href="#"
                        class="px-4 py-2 mt-4 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">Lihat Produk</a>
                </div>

                <div class="flex flex-col items-center p-6 text-center bg-gray-50 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-[#B22222]">Menu Baru</h2>
                    <p class="mt-2 text-sm text-gray-600">Temukan menu terbaru untuk kebutuhan Anda.</p>
                    <a href="#"
                        class="px-4 py-2 mt-4 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">Jelajahi</a>
                </div>

                <div class="flex flex-col items-center p-6 text-center bg-gray-50 rounded-lg shadow-md">
                    <h2 class="text-xl font-bold text-[#B22222]">Rekomendasi</h2>
                    <p class="mt-2 text-sm text-gray-600">Pilih menu rekomendasi khusus untuk Anda.</p>
                    <a href="#"
                        class="px-4 py-2 mt-4 text-sm text-white bg-yellow-500 rounded hover:bg-yellow-600">Lihat Rekomendasi</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination Links -->
    <div class="mt-10">
        {{ $products->links() }}
    </div>
@endsection
