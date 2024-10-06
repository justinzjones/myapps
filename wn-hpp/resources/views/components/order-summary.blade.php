<div class="mt-1 border-gray-200 rounded-lg bg-gray-50">
    <div class="p-6">
        <!-- Order your soul. Reduce your wants. - Augustine -->
        <section aria-labelledby="summary-heading"
            class="px-4 pt-0 pb-0 bg-gray-50 sm:px-6 lg:col-start-2 lg:row-start-1 lg:bg-transparent lg:px-0 lg:pb-0">
            <div class="max-w-lg mx-auto lg:max-w-none">
                {{-- <h2 id="summary-heading" class="text-base font-medium text-gray-700 ">Order summary</h2> --}}

                <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
                    <li class="flex items-start py-2 space-x-4">
                        {{-- <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg"
                            alt="flight DAL-ORD 25Jan-30Jan."
                            class="flex-none object-cover object-center w-10 h-10 rounded-md"> --}}
                        <i class="self-center fa-solid fa-plane" style="color: #233782;"></i>
                        <div class="flex-auto space-y-1">
                            <h3>Flights</h3>
                            <p class="text-xs text-gray-500">Dallas - DAL to Chicago - ORD</p>
                            <p class="text-xs text-gray-500">25 Jan - 30 Jan, 2 adults, 1 child</p>
                        </div>
                        <p class="flex-none pt-1 text-xs font-medium">$470.00</p>
                    </li>
                    <li class="flex items-start py-2 space-x-4">
                        {{-- <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg"
                            alt="flight DAL-ORD 25Jan-30Jan."
                            class="flex-none object-cover object-center w-10 h-10 rounded-md"> --}}
                        <i class="self-center fa-solid fa-hotel" style="color: #233782;"></i>
                        <div class="flex-auto space-y-1">
                            <h3>Hotel</h3>
                            <p class="text-xs text-gray-500">Silversmith Hotel Chicago Downtown</p>
                            <p class="text-xs text-gray-500">25 Jan - 30 Jan, 1 king</p>
                        </div>
                        <p class="flex-none pt-1 text-xs font-medium">$525.00</p>
                    </li>
                    <li class="flex items-start py-2 space-x-4">
                        {{-- <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg"
                            alt="flight DAL-ORD 25Jan-30Jan."
                            class="flex-none object-cover object-center w-10 h-10 rounded-md"> --}}
                        <i class="self-center fa-solid fa-car" style="color: #233782;"></i>
                        <div class="flex-auto space-y-1">
                            <h3>Car hire</h3>
                            <p class="text-xs text-gray-500">Chicago - ORD</p>
                            <p class="text-xs text-gray-500">25 Jan - 30 Jan, Compact</p>
                        </div>
                        <p class="flex-none pt-1 text-xs font-medium">$150.00</p>
                    </li>

                </ul>



                <dl class="hidden pt-6 space-y-2 text-sm font-medium text-gray-900 border-t border-gray-200 lg:block">

                    <form class="pb-6">
                        <label for="discount-code" class="block text-sm font-medium text-gray-700">Discount code</label>
                        <div class="flex mt-1 space-x-4">
                            <input type="text" id="discount-code" name="discount-code"
                                class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                            <button type="submit"
                                class="px-4 text-sm font-medium text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Apply</button>
                        </div>
                    </form>

                    <div class="flex items-center justify-between">
                        <dt class="text-gray-500">Subtotal</dt>
                        <dd>$1145.00</dd>
                    </div>

                    <div class="flex items-center justify-between">
                        <dt class="text-gray-500">Credits</dt>
                        <dd>-$80.00</dd>
                    </div>

                    <div class="flex items-center justify-between">
                        <dt class="text-gray-500">Taxes</dt>
                        <dd>$100.00</dd>
                    </div>

                    <div class="flex items-center justify-between pt-3 border-t border-gray-200">
                        <dt class="text-base">Total</dt>
                        <dd class="text-base">$1165.00</dd>
                    </div>
                </dl>

                <div class="fixed inset-x-0 bottom-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden"
                    x-data="Components.popover({ open: false, focus: false })" x-init="init()" @keydown.escape="onEscape"
                    @close-popover-group.window="onClosePopoverGroup">
                    <div class="relative z-10 px-4 bg-white border-t border-gray-200 sm:px-6">
                        <div class="max-w-lg mx-auto">
                            <button type="button" class="flex items-center w-full py-6 font-medium" @click="toggle"
                                @mousedown="if (open) $event.preventDefault()" aria-expanded="false"
                                :aria-expanded="open.toString()">
                                <span class="mr-auto text-base">Total</span>
                                <span class="mr-2 text-base">$361.80</span>
                                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                    </div>


                    <div>

                        <div x-show="open" x-transition:enter="transition-opacity ease-linear duration-300"
                            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                            x-transition:leave="transition-opacity ease-linear duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            x-description="Mobile summary overlay, show/hide based on mobile summary state."
                            class="fixed inset-0 bg-black bg-opacity-25" @click="toggle" aria-hidden="true"
                            style="display: none;"></div>



                        <div x-show="open" x-transition:enter="transition ease-in-out duration-300 transform"
                            x-transition:enter-start="translate-y-full" x-transition:enter-end="translate-y-0"
                            x-transition:leave="transition ease-in-out duration-300 transform"
                            x-transition:leave-start="translate-y-0" x-transition:leave-end="translate-y-full"
                            class="relative px-4 py-6 bg-white sm:px-6"
                            x-description="Mobile summary, show/hide based on mobile summary state." x-ref="panel"
                            @click.away="open = false" style="display: none;">
                            <dl class="max-w-lg mx-auto space-y-6">
                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Subtotal</dt>
                                    <dd>$320.00</dd>
                                </div>

                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Shipping</dt>
                                    <dd>$15.00</dd>
                                </div>

                                <div class="flex items-center justify-between">
                                    <dt class="text-gray-600">Taxes</dt>
                                    <dd>$26.80</dd>
                                </div>
                            </dl>
                        </div>

                    </div>

                </div>
            </div>
        </section>




    </div>
</div>
