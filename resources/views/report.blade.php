@extends('layouts.app')

@section('content')
    <div class="flex flex-col w-full max-h-screen px-6 py-4 overflow-y-auto bg-gray-50 sm:px-8">

        <!-- Header Section -->
        <div class="flex items-center justify-between w-full px-6 py-4 bg-gradient-to-r from-red-500 to-yellow-400 text-white rounded-b-lg">
            <h1 class="text-3xl font-extrabold lg:text-4xl">Report</h1>
            <p class="hidden lg:block text-sm">Memvisualisasikan dan menganalisis data pesanan Anda</p>
        </div>

        <!-- Divider -->
        <hr class="my-4 border-yellow-500">

        <!-- Charts Section -->
        <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Pie Chart -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="mb-4 text-lg font-bold text-center">Distribusi Status Pesanan</h2>
                <canvas id="pieChart"></canvas>
            </div>

            <!-- Bar Chart -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="mb-4 text-lg font-bold text-center">Ringkasan Status Pesanan</h2>
                <canvas id="barChart"></canvas>
            </div>

            <!-- Line Chart -->
            <div class="p-4 bg-white rounded-lg shadow-md">
                <h2 class="mb-4 text-lg font-bold text-center">Tren Pesanan dari Waktu ke Waktu</h2>
                <canvas id="lineChart"></canvas>
            </div>
        </div>

    </div>

    <!-- Required chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Pie Chart Data and Configuration
        const pieData = {
            labels: ["Pending", "Processing", "Shipping", "Completed"],
            datasets: [{
                label: "Order Status",
                data: [{{ $pending }}, {{ $processing }}, {{ $shipping }}, {{ $completed }}],
                backgroundColor: ["#5a32f1", "#658fc8", "#00c814", "#968f00"],
                hoverOffset: 4,
            }],
        };
        new Chart(document.getElementById("pieChart"), {
            type: "pie",
            data: pieData
        });

        // Bar Chart Data and Configuration
        const barData = {
            labels: ["Pending", "Processing", "Shipping", "Completed"],
            datasets: [{
                label: "Order Status",
                data: [{{ $pending }}, {{ $processing }}, {{ $shipping }}, {{ $completed }}],
                backgroundColor: ["rgba(90, 50, 241, 0.7)", "rgba(101, 143, 200, 0.7)", "rgba(0, 200, 20, 0.7)", "rgba(150, 143, 0, 0.7)"],
            }],
        };
        new Chart(document.getElementById("barChart"), {
            type: "bar",
            data: barData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
            },
        });

        // Line Chart Data and Configuration
        const lineData = {
            labels: ["Pending", "Processing", "Shipping", "Completed"],
            datasets: [{
                label: "Order Status",
                data: [{{ $pending }}, {{ $processing }}, {{ $shipping }}, {{ $completed }}],
                borderColor: "#4bc0c0",
                fill: false,
                tension: 0.4,
            }],
        };
        new Chart(document.getElementById("lineChart"), {
            type: "line",
            data: lineData,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                },
            },
        });
    </script>
@endsection
