<div x-data="{ open: false }" @keydown.window.escape="open = false">
    <!-- Mobile menu -->

    <div x-show="open" class="relative z-40 lg:hidden"
        x-description="Off-canvas menu for mobile, show/hide based on off-canvas menu state." x-ref="dialog"
        aria-modal="true" style="display: none;">

        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            x-description="Off-canvas menu backdrop, show/hide based on off-canvas menu state."
            class="fixed inset-0 bg-black bg-opacity-25" style="display: none;"></div>


        <div class="fixed inset-0 z-40 flex">

            <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0"
                x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
                x-description="Off-canvas menu, show/hide based on off-canvas menu state."
                class="relative flex flex-col w-full max-w-xs pb-12 overflow-y-auto bg-white shadow-xl"
                @click.away="open = false" style="display: none;">
                <div class="flex px-4 pt-5 pb-2">
                    <button type="button"
                        class="inline-flex items-center justify-center p-2 -m-2 text-gray-400 rounded-md"
                        @click="open = false">
                        <span class="sr-only">Close menu</span>
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2" x-data="Components.tabs()" @tab-click.window="onTabClick"
                    @tab-keydown.window="onTabKeydown">
                    <div class="border-b border-gray-200">
                        <div class="flex px-4 -mb-px space-x-8" aria-orientation="horizontal" role="tablist">
                            <button id="tabs-1-tab-1"
                                class="flex-1 px-1 py-4 text-base font-medium text-indigo-600 border-b-2 border-indigo-600 whitespace-nowrap"
                                x-state:on="Selected" x-state:off="Not Selected"
                                :class="{
                                    'border-indigo-600 text-indigo-600': selected,
                                    'border-transparent text-gray-900': !(
                                        selected)
                                }"
                                x-data="Components.tab(0)" aria-controls="tabs-1-panel-1" role="tab"
                                x-init="init()" @click="onClick" @keydown="onKeydown"
                                @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="0"
                                aria-selected="true">Womenz</button>
                            <button id="tabs-1-tab-2"
                                class="flex-1 px-1 py-4 text-base font-medium text-gray-900 border-b-2 border-transparent whitespace-nowrap"
                                x-state:on="Selected" x-state:off="Not Selected"
                                :class="{
                                    'border-indigo-600 text-indigo-600': selected,
                                    'border-transparent text-gray-900': !(
                                        selected)
                                }"
                                x-data="Components.tab(0)" aria-controls="tabs-1-panel-2" role="tab"
                                x-init="init()" @click="onClick" @keydown="onKeydown"
                                @tab-select.window="onTabSelect" :tabindex="selected ? 0 : -1"
                                :aria-selected="selected ? 'true' : 'false'" type="button" tabindex="-1"
                                aria-selected="false">Men</button>

                        </div>
                    </div>

                    <div id="tabs-1-panel-1" class="px-4 py-6 space-y-12"
                        x-description="'Womenq' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                        aria-labelledby="tabs-1-tab-1" x-init="init()" x-show="selected"
                        @tab-select.window="onTabSelect" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg"
                                        alt="Models sitting back to back, wearing Basic Tee in black and bone."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                                        alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-03.jpg"
                                        alt="Model wearing minimalist watch with black wristband and white watch face."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-04.jpg"
                                        alt="Model opening tan leather long wallet with credit card pockets and cash pouch."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Carry
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                        </div>
                    </div>
                    <div id="tabs-1-panel-2" class="px-4 py-6 space-y-12"
                        x-description="'Men' tab panel, show/hide based on tab state." x-data="Components.tabPanel(0)"
                        aria-labelledby="tabs-1-tab-2" x-init="init()" x-show="selected"
                        @tab-select.window="onTabSelect" role="tabpanel" tabindex="0" style="display: none;">
                        <div class="grid grid-cols-2 gap-x-4 gap-y-10">
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-01.jpg"
                                        alt="Hats and sweaters on wood shelves next to various colors of t-shirts on hangers."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-02.jpg"
                                        alt="Model wearing light heather gray t-shirt."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-03.jpg"
                                        alt="Grey 6-panel baseball hat with black brim, black mountain graphic on front, and light heather gray body."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Accessories
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>
                            <div class="relative group">
                                <div
                                    class="overflow-hidden bg-gray-100 rounded-md aspect-h-1 aspect-w-1 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-01-men-category-04.jpg"
                                        alt="Model putting folded cash into slim card holder olive leather wallet with hand stitching."
                                        class="object-cover object-center">
                                </div>
                                <a href="#" class="block mt-6 text-sm font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Carry
                                </a>
                                <p aria-hidden="true" class="mt-1 text-sm text-gray-500">Shop now</p>
                            </div>

                        </div>
                    </div>


                </div>

                <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Company</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Stores</a>
                    </div>

                </div>

                <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-gray-900">Create an account</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="block p-2 -m-2 font-medium text-white hover:text-gray-100">Sign
                            in</a>
                    </div>
                </div>

                <div class="px-4 py-6 space-y-6 border-t border-gray-200">
                    <!-- Currency selector -->
                    <form>
                        <div class="inline-block">
                            <label for="mobile-currency" class="sr-only">Currency</label>
                            <div
                                class="relative -ml-2 border-transparent rounded-md group focus-within:ring-2 focus-within:ring-white">
                                <select id="mobile-currency" name="currency"
                                    class="flex items-center rounded-md border-transparent bg-none py-0.5 pl-2 pr-5 text-sm font-medium text-gray-700 focus:border-transparent focus:outline-none focus:ring-0 group-hover:text-gray-800">
                                    <option>CAD</option>
                                    <option>USD</option>
                                    <option>AUD</option>
                                    <option>EUR</option>
                                    <option>GBP</option>

                                </select>
                                <div class="absolute inset-y-0 right-0 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <header class="relative">
        <nav aria-label="Top">
            <!-- Top navigation -->
            <div class="bg-bay-of-many-900">
                <div class="flex items-center justify-between h-10 px-2 mx-auto sm:px-6">
                    <!-- Currency selector -->
                    <div class="flex items-center mt-0 text-xs text-gray-400 cursor-pointer hover:text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                        </svg>


                        Back to cart

                    </div>





                    <div class="flex items-center space-x-6">




                        <div class="flex mt-1 sm:mt-0 sm:flex-row sm:flex-wrap sm:space-x-4">

                            <button
                                class="flex items-center p-2 mt-0 text-xs text-gray-400 cursor-pointer hover:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <p>Log in </p>
                            </button>

                            <button
                                class="flex items-center p-2 mt-0 text-xs text-gray-400 cursor-pointer hover:text-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mr-1">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                                <p>English </p>
                            </button>




                        </div>

                    </div>
                </div>
            </div>

            <!-- Secondary navigation -->
            <div class="shadow-sm bg-governor-bay-700">
                <div class="max-w-6xl px-4 mx-auto sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between h-16 max-w-4xl">
                        <!-- Logo (lg+) -->
                        <div class="flex flex-1 max-w-4xl px-0 pb-0 mx-auto lg:items-center sm:px-6 lg:px-8">



                            <img src="{{ url('https://www.southwest.com/swa-resources/images/globalnav/logos/swa_logo_light.svg') }}"
                                alt="" class="w-auto h-9">

                            {{-- <a class="actionable actionable_link actionable_light link header-booking--logo" href="/"><span class="actionable--text"><span class="link--text"><svg aria-label="Southwest" height="34" width="223" focusable="false" class="svg" role="img"><image alt="Southwest" height="34" role="presentation" src="{{url('/images/swa_logo_light.png')}}" width="223" xlink:href="{{url('/images/swa_logo_light.png')}}"></image></svg></span></span></a> --}}

                            <div>
                                <!-- Nothing worth having comes easy. - Theodore Roosevelt -->

                            </div>









                        </div>



                        <!-- Mobile menu and search (lg-) -->
                        <div class="flex justify-center flex-1 hidden">
                            <button type="button"
                                x-description="Mobile menu toggle, controls the 'mobileMenuOpen' state."
                                class="p-2 -ml-2 text-gray-400 bg-white rounded-md" @click="open = true">
                                <span class="sr-only">Open menu</span>
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                </svg>

                            </button>

                            <!-- Logo (lg-) -->
                            <a href="#" class="sm:hidden">
                                <span class="sr-only">Southwest Airlines</span>
                                <img src="{{ url('/images/swa_logo_heart.png') }}" alt=""
                                    class="w-auto h-24">


                            </a>




                        </div>




                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
