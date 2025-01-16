<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Box Icons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(to bottom, #ff7a00, #ffc300);
            border-radius: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
    </style>
</head>

<body class="bg-gray-50">
    @include('layouts.alert')

    <!-- Toggle Button for Small Screens -->
    <button id="sidebarToggle" class="fixed top-4 left-4 z-50 p-2 bg-white rounded-full shadow-lg lg:hidden">
        <i class="bx bx-menu text-2xl text-gray-600"></i>
    </button>

    <div class="flex">

        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed lg:relative bg-gradient-to-r from-orange-600 to-yellow-500 w-60 h-full z-40 lg:block lg:translate-x-0 transform -translate-x-full transition-transform duration-300 ease-in-out text-white shadow-lg">
            <!-- Logo Section -->
            <div class="flex items-center justify-center py-6 border-b border-white">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-16 h-16">
                <h1 class="ml-3 text-lg font-bold">Admin Panel</h1>
            </div>

            <!-- Navigation Links -->
            <nav class="mt-11">
                <a href="{{ route('dashboard') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Dashboard</a>
                <a href="{{ route('category.index') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Kategori</a>
                <a href="{{ route('product.index') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Produk</a>
                <a href="{{ route('banner.index') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Banner</a>
                <a href="{{ route('order.index') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Order</a>
                <a href="{{ route('user.index') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">User</a>
                <a href="{{ route('report') }}"
                    class="block py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg">Report</a>

                <!-- Logout Button -->
                <form action="{{ route('logout') }}" method="POST" class="mt-8">
                    @csrf
                    <button type="submit" onclick="return confirm('Are you sure to logout?')"
                        class="w-full py-3 px-5 font-semibold hover:bg-white hover:text-orange-600 transition rounded-lg text-left">
                        Keluar
                    </button>
                </form>
            </nav>
        </div>

        <!-- Content -->
        <div class="flex-1 p-6 lg:ml-10">
            @yield('content')
        </div>
    </div>

    <!-- JavaScript for Toggle -->
    <script>
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebar = document.getElementById("sidebar");

        sidebarToggle.addEventListener("click", () => {
            sidebar.classList.toggle("-translate-x-full");
            sidebar.classList.toggle("translate-x-0");
        });
    </script>
</body>

</html>
