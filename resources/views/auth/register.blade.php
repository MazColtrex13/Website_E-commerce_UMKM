@extends('layouts.master')


@section('content')
    <div class="w-full max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-lg">
        <!-- Logo Section -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/logo.png') }}" alt="Kiddo Bazzar" class="object-contain w-20 h-20">
        </div>

        <h2 class="text-xl sm:text-xl font-bold text-[#051923] text-center mb-2">Pendaftaran</h2>
        <h2 class="text-xl sm:text-xl font-bold text-[#051923] text-center">Pemadam Kelaparan</h2>

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data" class="space-y-6">
            @csrf

            <!-- Full Name -->
            <div>
                <label for="name" class="block text-[#051923] font-medium mb-2">Nama Lengkap</label>
                <input id="name"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="text" name="name" :value="old('name')" required autofocus autocomplete="name"
                    placeholder="Masukkan Nama Lengkap Anda" />

                {{-- error throw --}}
                @error('name')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>

            <!-- Phone Number -->
            <div>
                <label for="phone" class="block text-[#051923] font-medium mb-2">Nomor Telepon</label>
                <input type="tel" id="phone" name="phone"
                    class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    placeholder="Masukkan Nomor Telepon Anda" required>
            </div>

            <!-- Email Address -->
            <div>
                <label for="email" class="block text-[#051923] font-medium mb-2">Email</label>

                <input id="email"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="email" name="email" :value="old('email')" required autocomplete="username"
                    placeholder="Masukkan Email Anda" />

                {{-- error throw --}}
                @error('email')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>

            <!-- Gender -->
            <div>
                <label class="block text-[#051923] font-medium mb-2">Jenis Kelamin</label>
                <div class="flex items-center space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="male" class="text-[#051923] focus:ring-[#051923]"
                            required>
                        <span class="ml-2 text-[#051923]">Laki-laki</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="gender" value="female" class="text-[#051923] focus:ring-[#051923]"
                            required>
                        <span class="ml-2 text-[#051923]">Perempuan</span>
                    </label>
                </div>
            </div>


            <!-- Address -->

            <div>
                <label for="address" class="block text-[#051923] font-medium mb-2">Alamat</label>
                <input id="address"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="text" name="address" required autocomplete="address" placeholder="Masukkan alamat Anda" />

                {{-- error throw --}}
                @error('address')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>


            <!-- Password -->
            <div>
                <label for="password" class="block text-[#051923] font-medium mb-2">Kata Sandi</label>

                <input id="password"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="password" name="password" required autocomplete="new-password"
                    placeholder="Masukkan kata sandi Anda" />


                {{-- error throw --}}
                @error('password')
                    <span class="text-red-500">{{ $message }}</span>
                @enderror

            </div>

            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" />
                <x-text-input id="password_confirmation"
                    class="block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#051923] text-[#051923]"
                    type="password" name="password_confirmation" required autocomplete="new-password"
                    placeholder="konfirmasi kata sandi Anda" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit" class="w-full py-2 text-white transition duration-300 bg-[#ff0000] rounded-md ">
                    Daftar
                </button>
            </div>
        </form>

        <!-- Login Link -->
        <p class="mt-4 text-center text-yellow-500">Sudah memiliki akun?
            <a href="{{ route('login') }}" class="text-[#051923] hover:underline">Masuk di sini</a>
        </p>
    </div>
@endsection
