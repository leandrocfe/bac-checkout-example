<x-forms::modal id="cart" :slideOver="true">
    <x-slot name="heading">Cart</x-slot>
    <div>
        <div class="flex-1 px-4 py-6 overflow-y-auto sm:px-6">
            <div class="flow-root">
                <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <li class="flex py-6">
                        <div class="flex-shrink-0 w-24 h-24 overflow-hidden border border-gray-200 rounded-md">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                class="object-cover object-center w-full h-full">
                        </div>

                        <div class="flex flex-col flex-1 ml-4">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900 dark:text-white">
                                    <h3>
                                        <a href="#">Throwback Hip Bag</a>
                                    </h3>
                                    <p class="ml-4">$90.00</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Salmon</p>
                            </div>
                            <div class="flex items-end justify-between flex-1 text-sm">
                                <p class="text-gray-500 dark:text-gray-300">Qty 1</p>

                                <div class="flex">
                                    <button type="button"
                                        class="font-medium text-primary-600 hover:text-primary-500">Remove</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="flex py-6">
                        <div class="flex-shrink-0 w-24 h-24 overflow-hidden border border-gray-200 rounded-md">
                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                class="object-cover object-center w-full h-full">
                        </div>

                        <div class="flex flex-col flex-1 ml-4">
                            <div>
                                <div class="flex justify-between text-base font-medium text-gray-900 dark:text-white">
                                    <h3>
                                        <a href="#">Medium Stuff Satchel</a>
                                    </h3>
                                    <p class="ml-4">$32.00</p>
                                </div>
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">Blue</p>
                            </div>
                            <div class="flex items-end justify-between flex-1 text-sm">
                                <p class="text-gray-500 dark:text-gray-300">Qty 1</p>

                                <div class="flex">
                                    <button type="button"
                                        class="font-medium text-primary-600 hover:text-primary-500">Remove</button>
                                </div>
                            </div>
                        </div>
                    </li>

                    <!-- More products... -->
                </ul>
            </div>

        </div>

        <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
            <div class="flex justify-between text-base font-medium text-gray-900 dark:text-white">
                <p>Subtotal</p>
                <p>$262.00</p>
            </div>
            <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-300">Shipping and taxes calculated at checkout.
            </p>
            <div class="mt-6">
                <button type="button" wire:click='checkout'
                    class="flex items-center justify-center w-full px-6 py-3 text-base font-medium text-white border border-transparent rounded-md shadow-sm bg-primary-600 hover:bg-primary-700">
                    Checkout
                </button>
            </div>
            <div class="flex justify-center mt-6 text-sm text-center text-gray-500 dark:text-gray-300">
                <p>
                    or
                    <button type="button" class="font-medium text-primary-600 hover:text-primary-500">
                        Continue Shopping
                        <span aria-hidden="true"> &rarr;</span>
                    </button>
                </p>
            </div>
        </div>
    </div>
</x-forms::modal>
