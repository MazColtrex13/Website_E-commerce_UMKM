@extends('layouts.app')

@section('content')
<div class="flex flex-col w-full max-h-screen overflow-y-auto bg-gray-50">

    <!-- Header Section -->
    <div class="flex items-center justify-between w-full px-6 py-4 bg-gradient-to-r from-red-500 to-yellow-400 text-white rounded-b-lg">
        <h1 class="text-3xl font-extrabold lg:text-4xl">Orders</h1>
        <p class="hidden lg:block text-sm">Manage and track your orders efficiently</p>
    </div>

    <!-- Divider -->
    <hr class="my-4 border-yellow-500">

    <!-- Orders Table -->
    <div class="px-6">
        <div class="overflow-x-auto bg-white rounded-lg shadow-md">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs font-medium text-gray-900 uppercase bg-gray-100">
                    <tr>
                        <th class="px-4 py-3">Date</th>
                        <th class="px-4 py-3">Image</th>
                        <th class="px-4 py-3">Product</th>
                        <th class="px-4 py-3">Customer</th>
                        <th class="px-4 py-3">Phone</th>
                        <th class="px-4 py-3">Address</th>
                        <th class="px-4 py-3">Rate</th>
                        <th class="px-4 py-3">Quantity</th>
                        <th class="px-4 py-3">Total</th>
                        <th class="px-4 py-3">Payment</th>
                        <th class="px-4 py-3">Status</th>
                        <th class="px-4 py-3">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach ($orders as $order)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $order->created_at->format('Y-m-d') }}</td>
                        <td class="px-4 py-3">
                            <img src="{{ asset('images/products/' . $order->product->photopath) }}" alt="{{ $order->product->name }}" class="object-cover w-16 h-16 rounded-lg shadow-sm">
                        </td>
                        <td class="px-4 py-3">{{ $order->product->name }}</td>
                        <td class="px-4 py-3">{{ $order->name }}</td>
                        <td class="px-4 py-3">{{ $order->phone }}</td>
                        <td class="px-4 py-3">{{ $order->address }}</td>
                        <td class="px-4 py-3 text-right">${{ $order->price }}</td>
                        <td class="px-4 py-3 text-center">{{ $order->qty }}</td>
                        <td class="px-4 py-3 text-right font-semibold">${{ $order->qty * $order->price }}</td>
                        <td class="px-4 py-3">{{ $order->payment_method }}</td>
                        <td class="px-4 py-3">
                            <span class="px-2 py-1 text-xs font-semibold text-white rounded {{ $order->status === 'Pending' ? 'bg-yellow-500' : ($order->status === 'Processing' ? 'bg-blue-500' : ($order->status === 'Shipping' ? 'bg-amber-500' : 'bg-green-500')) }}">
                                {{ $order->status }}
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex flex-wrap gap-2">
                                <a href="{{ route('order.status', [$order->id, 'Pending']) }}" class="px-3 py-1 text-xs font-medium text-gray-800 bg-yellow-300 rounded hover:bg-yellow-400">Pending</a>
                                <a href="{{ route('order.status', [$order->id, 'Processing']) }}" class="px-3 py-1 text-xs font-medium text-white bg-blue-500 rounded hover:bg-blue-600">Processing</a>
                                <a href="{{ route('order.status', [$order->id, 'Shipping']) }}" class="px-3 py-1 text-xs font-medium text-white bg-amber-500 rounded hover:bg-amber-600">Shipping</a>
                                <a href="{{ route('order.status', [$order->id, 'Delivered']) }}" class="px-3 py-1 text-xs font-medium text-white bg-green-500 rounded hover:bg-green-600">Delivered</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
