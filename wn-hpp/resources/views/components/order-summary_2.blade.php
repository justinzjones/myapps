<div grid grid-cols-1 gap-4>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <!-- Order summary -->
    <section aria-labelledby="summary-heading" class="flex-col hidden w-full max-w-md bg-gray-50 lg:flex">
        <h2 id="summary-heading" class="sr-only">Order summary</h2>

        <ul role="list" class="flex-auto px-6 overflow-y-auto divide-y divide-gray-200">
            <li class="flex py-6 space-x-6">
                <img src="https://tailwindui.com/img/ecommerce-images/checkout-form-04-product-01.jpg"
                    alt="Off-white t-shirt with circular dot illustration on the front of mountain ridges that fade."
                    class="flex-none object-cover object-center w-40 h-40 bg-gray-200 rounded-md">
                <div class="flex flex-col justify-between space-y-4">
                    <div class="space-y-1 text-sm font-medium">
                        <h3 class="text-gray-900">Mountain Mist Artwork Tee</h3>
                        <p class="text-gray-900">$36.00</p>
                        <p class="text-gray-500">Birch</p>
                        <p class="text-gray-500">L</p>
                    </div>
                    <div class="flex space-x-4">
                        <button type="button"
                            class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Edit</button>
                        <div class="flex pl-4 border-l border-gray-300">
                            <button type="button"
                                class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                        </div>
                    </div>
                </div>
            </li>

            <!-- More products... -->
        </ul>

        <div class="bottom-0 flex-none p-6 border-t border-gray-200 bg-gray-50">
            <form>
                <label for="discount-code" class="block text-sm font-medium text-gray-700">Discount code</label>
                <div class="flex mt-1 space-x-4">
                    <input type="text" id="discount-code" name="discount-code"
                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                    <button type="submit"
                        class="px-4 text-sm font-medium text-gray-600 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Apply</button>
                </div>
            </form>

            <dl class="mt-10 space-y-6 text-sm font-medium text-gray-500">
                <div class="flex justify-between">
                    <dt>Subtotal</dt>
                    <dd class="text-gray-900">$108.00</dd>
                </div>
                <div class="flex justify-between">
                    <dt class="flex">
                        Discount
                        <span
                            class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs tracking-wide text-gray-600">CHEAPSKATE</span>
                    </dt>
                    <dd class="text-gray-900">-$16.00</dd>
                </div>
                <div class="flex justify-between">
                    <dt>Taxes</dt>
                    <dd class="text-gray-900">$9.92</dd>
                </div>
                <div class="flex justify-between">
                    <dt>Shipping</dt>
                    <dd class="text-gray-900">$8.00</dd>
                </div>
                <div class="flex items-center justify-between pt-6 text-gray-900 border-t border-gray-200">
                    <dt>Total</dt>
                    <dd class="text-base">$141.92</dd>
                </div>
            </dl>
        </div>
    </section>
</div>
