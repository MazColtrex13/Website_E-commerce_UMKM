@extends('layouts.app')

@section('content')
    <div class="flex flex-col flex-1 bg-gray-50">
        <!-- Header Section -->
        <div class="mb-8 bg-gradient-to-r from-red-500 to-yellow-400 text-white p-6 rounded-lg shadow-lg">
            <h1 class="text-5xl font-extrabold text-center">Dashboard</h1>
            <p class="mt-2 text-center text-lg">Gambaran umum platform e-commerce Anda</p>
        </div>

        <!-- Dashboard Cards Section -->
        <div class="grid grid-cols-1 gap-6 px-4 lg:grid-cols-4 lg:px-0">
            @php
                $cards = [
                    ['icon' => 'bx bx-category', 'title' => 'Total Categories', 'value' => $categories],
                    ['icon' => 'bx bx-box', 'title' => 'Total Products', 'value' => $products],
                    ['icon' => 'bx bx-receipt', 'title' => 'Total Orders', 'value' => $order],
                    ['icon' => 'bx bx-user', 'title' => 'Total Users', 'value' => $users],
                    ['icon' => 'bx bx-hourglass', 'title' => 'Pending Orders', 'value' => $pending],
                    ['icon' => 'bx bx-loader', 'title' => 'Processing Orders', 'value' => $processing],
                    ['icon' => 'bx bx-truck', 'title' => 'Total Shipping', 'value' => $shipping],
                    ['icon' => 'bx bx-check-circle', 'title' => 'Completed Orders', 'value' => $completed],
                ];
            @endphp

            @foreach ($cards as $card)
                <div class="p-6 transition-all duration-300 bg-white rounded-lg shadow-md hover:shadow-xl hover:scale-105">
                    <div class="flex items-center space-x-4">
                        <i class="{{ $card['icon'] }} text-5xl text-red-600"></i>
                        <div class="flex flex-col text-center lg:text-left">
                            <h2 class="text-xl font-semibold text-gray-700">{{ $card['title'] }}</h2>
                            <p class="text-4xl font-bold text-gray-800">{{ $card['value'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
