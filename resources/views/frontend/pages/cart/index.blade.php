@extends('frontend.layouts.app')

@section('title')
    Cart Page ||MY - E-SHOP
@endsection

@section('contain')
    <!-- Start Hero Area -->
    <!-- Start New Aribles Area -->
    <section class="trending-product section" style="margin-top: 12px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Your Shopping Cart</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-7">
                    <section class="flex-grow bg-white rounded-lg shadow p-6">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="border-b border-gray-300">
                                    <th class="py-3 px-2 sm:px-4 text-gray-700 font-semibold">
                                        Product
                                    </th>
                                    <th class="py-3 px-2 sm:px-4 text-gray-700 font-semibold hidden sm:table-cell">
                                        Price
                                    </th>
                                    <th class="py-3 px-2 sm:px-4 text-gray-700 font-semibold">
                                        Quantity
                                    </th>
                                    <th class="py-3 px-2 sm:px-4 text-gray-700 font-semibold hidden sm:table-cell">
                                        Total
                                    </th>
                                    <th class="py-3 px-2 sm:px-4 text-gray-700 font-semibold text-center">
                                        Remove
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr>
                                    <td class="py-4 px-2 sm:px-4 flex items-center space-x-4">
                                        <img alt="Red sneakers with white sole and laces on a white background"
                                            class="w-20 h-20 object-cover rounded" height="80"
                                            src="https://storage.googleapis.com/a1aa/image/983e47a1-fb89-4eea-dd29-7bc4dc87b073.jpg"
                                            width="80" />
                                        <div>
                                            <h3 class="text-gray-900 font-semibold text-base">
                                                Red Sneakers
                                            </h3>
                                            <p class="text-gray-500 text-sm">
                                                Size: 9 | Color: Red
                                            </p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $79.99
                                    </td>
                                    <td class="py-4 px-2 sm:px-4">
                                        <div class="flex items-center max-w-[120px] border border-gray-300 rounded">
                                            <button aria-label="Decrease quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-minus">
                                                </i>
                                            </button>
                                            <input aria-label="Quantity of Red Sneakers"
                                                class="w-full text-center border-none focus:ring-0 focus:outline-none"
                                                min="1" type="number" value="2" />
                                            <button aria-label="Increase quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-plus">
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $159.98
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-center">
                                        <button aria-label="Remove Red Sneakers from cart"
                                            class="text-red-600 hover:text-red-800 focus:outline-none">
                                            <i class="fas fa-trash-alt fa-lg">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-2 sm:px-4 flex items-center space-x-4">
                                        <img alt="Blue denim jacket with buttons and collar on a white background"
                                            class="w-20 h-20 object-cover rounded" height="80"
                                            src="https://storage.googleapis.com/a1aa/image/d4d5e4e6-cfc3-4851-b916-0ec645218a79.jpg"
                                            width="80" />
                                        <div>
                                            <h3 class="text-gray-900 font-semibold text-base">
                                                Blue Denim Jacket
                                            </h3>
                                            <p class="text-gray-500 text-sm">
                                                Size: M | Color: Blue
                                            </p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $120.00
                                    </td>
                                    <td class="py-4 px-2 sm:px-4">
                                        <div class="flex items-center max-w-[120px] border border-gray-300 rounded">
                                            <button aria-label="Decrease quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-minus">
                                                </i>
                                            </button>
                                            <input aria-label="Quantity of Blue Denim Jacket"
                                                class="w-full text-center border-none focus:ring-0 focus:outline-none"
                                                min="1" type="number" value="1" />
                                            <button aria-label="Increase quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-plus">
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $120.00
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-center">
                                        <button aria-label="Remove Blue Denim Jacket from cart"
                                            class="text-red-600 hover:text-red-800 focus:outline-none">
                                            <i class="fas fa-trash-alt fa-lg">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-4 px-2 sm:px-4 flex items-center space-x-4">
                                        <img alt="Black wireless over-ear headphones with cushioned ear cups on a white background"
                                            class="w-20 h-20 object-cover rounded" height="80"
                                            src="https://storage.googleapis.com/a1aa/image/0c645e93-492e-4e6f-5bf3-147aec5ada6b.jpg"
                                            width="80" />
                                        <div>
                                            <h3 class="text-gray-900 font-semibold text-base">
                                                Wireless Headphones
                                            </h3>
                                            <p class="text-gray-500 text-sm">
                                                Color: Black
                                            </p>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $199.99
                                    </td>
                                    <td class="py-4 px-2 sm:px-4">
                                        <div class="flex items-center max-w-[120px] border border-gray-300 rounded">
                                            <button aria-label="Decrease quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-minus">
                                                </i>
                                            </button>
                                            <input aria-label="Quantity of Wireless Headphones"
                                                class="w-full text-center border-none focus:ring-0 focus:outline-none"
                                                min="1" type="number" value="1" />
                                            <button aria-label="Increase quantity"
                                                class="px-3 py-1 text-gray-600 hover:text-indigo-600 focus:outline-none">
                                                <i class="fas fa-plus">
                                                </i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 hidden sm:table-cell text-gray-900 font-semibold">
                                        $199.99
                                    </td>
                                    <td class="py-4 px-2 sm:px-4 text-center">
                                        <button aria-label="Remove Wireless Headphones from cart"
                                            class="text-red-600 hover:text-red-800 focus:outline-none">
                                            <i class="fas fa-trash-alt fa-lg">
                                            </i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </section>
                </div>
                <div class="col-5">
                    <div class="w-full lg:w-96 bg-white rounded-lg shadow p-6 flex flex-col">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">
                            Order Summary
                        </h2>
                        <div class="flex justify-between text-gray-700 mb-2">
                            <span>
                                Subtotal
                            </span>
                            <span class="font-semibold">
                                $479.97
                            </span>
                        </div>
                        <div class="flex justify-between text-gray-700 mb-2">
                            <span>
                                Shipping
                            </span>
                            <span class="font-semibold">
                                $15.00
                            </span>
                        </div>
                        <div class="flex justify-between text-gray-700 mb-6">
                            <span>
                                Tax (8%)
                            </span>
                            <span class="font-semibold">
                                $39.20
                            </span>
                        </div>
                        <div
                            class="flex justify-between text-indigo-900 text-lg font-bold mb-8 border-t border-gray-300 pt-4">
                            <span>
                                Total
                            </span>
                            <span>
                                $534.17
                            </span>
                        </div>
                        <button
                            class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 rounded shadow focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            type="button">
                            Proceed to Checkout
                        </button>
                        <button
                            class="mt-4 w-full border border-gray-300 text-gray-700 font-semibold py-3 rounded hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            type="button">
                            Continue Shopping
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End New Aribles Area -->
    <!-- End Hero Area -->
@endsection
