<div class="bg-white dark:bg-gray-800">
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">
            <div
                class="relative flex flex-col w-full max-w-xs pb-12 overflow-y-auto bg-white shadow-xl dark:bg-gray-800">
                <div class="flex px-4 pt-5 pb-2">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 -m-2 text-gray-400 rounded-md dark:text-white">
                        <span class="sr-only">Close menu</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2">
                    <div class="border-b border-gray-200">
                        <div class="flex px-4 -mb-px space-x-8" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-1-tab-1"
                                class="flex-1 px-1 py-4 text-base font-medium text-gray-900 border-b-2 border-transparent dark:text-gray-100 whitespace-nowrap"
                                aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                            <button id="tabs-1-tab-2"
                                class="flex-1 px-1 py-4 text-base font-medium text-gray-900 border-b-2 border-transparent dark:text-gray-100 whitespace-nowrap"
                                aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                        </div>
                    </div>

                    <!-- 'Women' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-1" class="px-4 pt-10 pb-8 space-y-10" aria-labelledby="tabs-1-tab-1"
                        role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4">
                            <div class="relative text-sm group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-lg aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                        alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 font-medium text-gray-900 dark:text-gray-100">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                            <div class="relative text-sm group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-lg aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                        alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 font-medium text-gray-900 dark:text-gray-100">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                        </div>
                        <div>
                            <p id="women-clothing-heading-mobile" class="font-medium text-gray-900 dark:text-gray-100">
                                Clothing</p>
                            <ul role="list" aria-labelledby="women-clothing-heading-mobile"
                                class="flex flex-col mt-6 space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Tops</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Dresses</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Pants</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Denim</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Sweaters</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">T-Shirts</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Jackets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Activewear</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Browse
                                        All</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="women-accessories-heading-mobile"
                                class="font-medium text-gray-900 dark:text-gray-100">Accessories</p>
                            <ul role="list" aria-labelledby="women-accessories-heading-mobile"
                                class="flex flex-col mt-6 space-y-6">
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Watches</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Wallets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Bags</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Sunglasses</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Hats</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Belts</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="women-brands-heading-mobile" class="font-medium text-gray-900 dark:text-gray-100">
                                Brands</p>
                            <ul role="list" aria-labelledby="women-brands-heading-mobile"
                                class="flex flex-col mt-6 space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Full
                                        Nelson</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="block p-2 -m-2 text-gray-500 dark:text-gray-100">My
                                        Way</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Re-Arranged</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Counterfeit</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#"
                                        class="block p-2 -m-2 text-gray-500 dark:text-gray-100">Significant Other</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    <div class="flow-root">
                        <a href="#"
                            class="block p-2 -m-2 font-medium text-gray-900 dark:text-gray-100">Company</a>
                    </div>
                    <div class="flow-root">
                        <a href="#"
                            class="block p-2 -m-2 font-medium text-gray-900 dark:text-gray-100">Stores</a>
                    </div>
                </div>

                <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-gray-900 dark:text-gray-100">Sign
                            in</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-gray-900 dark:text-gray-100">Create
                            account</a>
                    </div>
                </div>

                <div class="px-4 py-6 border-t border-gray-200">
                    <a href="#" class="flex items-center p-2 -m-2">
                        <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                            class="flex-shrink-0 block w-5 h-auto">
                        <span class="block ml-3 text-base font-medium text-gray-900 dark:text-gray-100">CAD</span>
                        <span class="sr-only">, change currency</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <header class="relative bg-white dark:bg-gray-800">
        <p
            class="flex items-center justify-center h-10 px-4 text-sm font-medium text-white bg-primary-600 sm:px-6 lg:px-8">
            Get free delivery on orders over $100</p>

        <nav aria-label="Top" class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex items-center h-16">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button"
                        class="p-2 text-gray-400 bg-white rounded-md dark:text-white dark:bg-gray-800 lg:hidden">
                        <span class="sr-only">Open menu</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="flex ml-4 lg:ml-0">
                        <a href="#">
                            <span class="sr-only">Your Company</span>
                            <img class="w-auto h-8"
                                src="https://tailwindui.com/img/logos/mark.svg?color=gray&shade=400" alt="">
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <div class="flex">
                                <div class="relative flex">
                                    <!-- Item active: "border-primary-600 text-primary-600", Item inactive: "border-transparent text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400" -->
                                    <button type="button"
                                        class="relative z-10 flex items-center pt-px -mb-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out border-b-2 border-transparent dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400"
                                        aria-expanded="false">Women</button>
                                </div>

                                <div class="absolute inset-x-0 text-sm text-gray-500 dark:text-gray-100 top-full">
                                    <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                                    <div class="absolute inset-0 bg-white shadow dark:bg-gray-800 top-1/2"
                                        aria-hidden="true"></div>

                                    <div class="relative bg-white dark:bg-gray-800">
                                        <div class="px-8 mx-auto max-w-7xl">
                                            <div class="grid grid-cols-2 py-16 gap-x-8 gap-y-10">
                                                <div class="grid grid-cols-2 col-start-2 gap-x-8">
                                                    <div class="relative text-base group sm:text-sm">
                                                        <div
                                                            class="overflow-hidden bg-gray-100 rounded-lg aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                                                alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                                                class="object-cover object-center">
                                                        </div>
                                                        <a href="#"
                                                            class="block mt-6 font-medium text-gray-900 dark:text-gray-100">
                                                            <span class="absolute inset-0 z-10"
                                                                aria-hidden="true"></span>
                                                            New Arrivals
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                    </div>
                                                    <div class="relative text-base group sm:text-sm">
                                                        <div
                                                            class="overflow-hidden bg-gray-100 rounded-lg aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                                            <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                                                alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                                                class="object-cover object-center">
                                                        </div>
                                                        <a href="#"
                                                            class="block mt-6 font-medium text-gray-900 dark:text-gray-100">
                                                            <span class="absolute inset-0 z-10"
                                                                aria-hidden="true"></span>
                                                            Basic Tees
                                                        </a>
                                                        <p aria-hidden="true" class="mt-1">Shop now</p>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 row-start-1 text-sm gap-x-8 gap-y-10">
                                                    <div>
                                                        <p id="Clothing-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-100">
                                                            Clothing</p>
                                                        <ul role="list" aria-labelledby="Clothing-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Tops</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Dresses</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Pants</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Denim</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Sweaters</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">T-Shirts</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Jackets</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Activewear</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Browse
                                                                    All</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <p id="Accessories-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-100">
                                                            Accessories</p>
                                                        <ul role="list" aria-labelledby="Accessories-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Watches</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Wallets</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Bags</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Sunglasses</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Hats</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Belts</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div>
                                                        <p id="Brands-heading"
                                                            class="font-medium text-gray-900 dark:text-gray-100">
                                                            Brands</p>
                                                        <ul role="list" aria-labelledby="Brands-heading"
                                                            class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Full
                                                                    Nelson</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">My
                                                                    Way</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Re-Arranged</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Counterfeit</a>
                                                            </li>
                                                            <li class="flex">
                                                                <a href="#"
                                                                    class="hover:text-gray-800 dark:hover:text-gray-400">Significant
                                                                    Other</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400">Company</a>
                            <a href="#"
                                class="flex items-center text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400">Stores</a>
                        </div>
                    </div>

                    <div class="flex items-center ml-auto">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            <a href="#"
                                class="text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400">Sign
                                in</a>
                            <span class="w-px h-6 bg-gray-200" aria-hidden="true"></span>
                            <a href="#"
                                class="text-sm font-medium text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400">Create
                                account</a>
                        </div>

                        <div class="hidden lg:ml-8 lg:flex">
                            <a href="#"
                                class="flex items-center text-gray-700 dark:text-gray-200 hover:text-gray-800 dark:hover:text-gray-400">
                                <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt=""
                                    class="flex-shrink-0 block w-5 h-auto">
                                <span class="block ml-3 text-sm font-medium">CAD</span>
                                <span class="sr-only">, change currency</span>
                            </a>
                        </div>

                        <!-- Search -->
                        <div class="flex lg:ml-6">
                            <a href="#" @click="$store.darkMode.toggle()"
                                class="p-2 text-gray-400 hover:text-gray-500 dark:text-gray-100">
                                <span class="sr-only">Search</span>
                                <!-- sun-->
                                <svg x-cloak x-show="$store.darkMode.on" xmlns="http://www.w3.org/2000/svg"
                                    class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>

                                <!-- moon-->
                                <svg x-show="!$store.darkMode.on" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                                </svg>
                            </a>
                        </div>

                        <!-- Cart -->
                        <div class="flow-root ml-4 lg:ml-6">
                            <a href="#" @click="$dispatch('open-modal', {id: 'cart'})"
                                class="flex items-center p-2 -m-2 group">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-400 group-hover:text-gray-500 dark:text-gray-100"
                                    fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span
                                    class="ml-2 text-sm font-medium text-gray-700 dark:text-gray-200 group-hover:text-gray-800 dark:hover:text-gray-400 dark:group-hover:text-gray-100">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
