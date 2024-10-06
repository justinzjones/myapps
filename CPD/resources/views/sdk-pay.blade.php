<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SDK - Checkout</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/sdk.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/checkout.css') }}" rel="stylesheet"> -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <!-- <script src="https://websdk.dev.cpm.dev/sdk.js"></script> -->
  <script defer src="{{ asset('js/app.js') }}"></script>
  <script src="https://websdk.uat.cpm.dev/sdk.js" defer></script>
  
  <script src="{{ asset('js/cpd-sdk.js') }}" defer></script>

 


  <!-- <script src="{{ asset('js/checkoutb.js/?$client_secret') }}" defer></script> -->


</head>

<body class="h-full" x-data="{ open: false }" @keydown.window.escape="open = false">


  <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
  <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
  <!--
  This example requires Tailwind CSS v2.0+ 
  
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
  <div class="bg-gray-50">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
      

      <div class="fixed inset-0 flex z-40">
        <!--
        Off-canvas menu, show/hide based on off-canvas menu state.

        Entering: "transition ease-in-out duration-300 transform"
          From: "-translate-x-full"
          To: "translate-x-0"
        Leaving: "transition ease-in-out duration-300 transform"
          From: "translate-x-0"
          To: "-translate-x-full"
      -->

      </div>
    </div>

    <header class="relative">
      <nav aria-label="Top">
        <!-- Top navigation -->
        <div class="bg-gray-900">
          <div class="max-w-7xl mx-auto h-10 px-4 flex items-center justify-between sm:px-6 lg:px-8">
            <!-- Currency selector -->
            <form>
              <div>
                <label for="desktop-currency" class="sr-only">Currency</label>
                <div class="-ml-2 group relative bg-gray-900 border-transparent rounded-md focus-within:ring-2 focus-within:ring-white">
                  <select id="desktop-currency" name="currency" class="bg-none bg-gray-900 border-transparent rounded-md py-0.5 pl-2 pr-5 flex items-center text-sm font-medium text-white group-hover:text-gray-100 focus:outline-none focus:ring-0 focus:border-transparent">
                    <option>CAD</option>

                    <option>USD</option>

                    <option>AUD</option>

                    <option>EUR</option>

                    <option>GBP</option>
                  </select>
                  <div class="absolute right-0 inset-y-0 flex items-center pointer-events-none">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" class="w-5 h-5 text-gray-300">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 8l4 4 4-4" />
                    </svg>
                  </div>
                </div>
              </div>
            </form>

            <div class="flex items-center space-x-6">
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Sign in</a>
              <a href="#" class="text-sm font-medium text-white hover:text-gray-100">Create an account</a>
            </div>
          </div>
        </div>

        <!-- Secondary navigation -->
        <div class="bg-white shadow-sm">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="h-16 flex items-center justify-between">
              <!-- Logo (lg+) -->
              <div class="hidden lg:flex-1 lg:flex lg:items-center">
                <a href="#">
                  <span class="sr-only">Workflow</span>
                  <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="">
                </a>
              </div>

              <div class="hidden h-full lg:flex">
                <!-- Flyout menus -->
                <div class="px-4 bottom-0 inset-x-0">
                  <div class="h-full flex justify-center space-x-8">
                    <div class="flex">
                      <div class="relative flex">
                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                        <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px" aria-expanded="false">Women</button>
                      </div>

                      <!--
                      'Women' flyout menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                      <div class="absolute top-full inset-x-0 bg-white text-sm text-gray-500">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">
                          <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                          <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>
                        </div>


                      </div>
                    </div>

                    <div class="flex">
                      <div class="relative flex">
                        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
                        <button type="button" class="border-transparent text-gray-700 hover:text-gray-800 relative z-10 flex items-center transition-colors ease-out duration-200 text-sm font-medium border-b-2 -mb-px pt-px" aria-expanded="false">Men</button>
                      </div>

                      <!--
                      'Women' flyout menu, show/hide based on flyout menu state.

                      Entering: "transition ease-out duration-200"
                        From: "opacity-0"
                        To: "opacity-100"
                      Leaving: "transition ease-in duration-150"
                        From: "opacity-100"
                        To: "opacity-0"
                    -->
                      <div class="absolute top-full inset-x-0 bg-white text-sm text-gray-500">
                        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
                        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>
                        <!-- Fake border when menu is open -->
                        <div class="absolute inset-0 top-0 h-px max-w-7xl mx-auto px-8" aria-hidden="true">
                          <!-- Open: "bg-gray-200", Closed: "bg-transparent" -->
                          <div class="bg-transparent w-full h-px transition-colors ease-out duration-200"></div>
                        </div>


                      </div>
                    </div>

                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>

                    <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                  </div>
                </div>
              </div>

              <!-- Mobile menu and search (lg-) -->
              <div class="flex-1 flex items-center lg:hidden">
                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                <button type="button" class="-ml-2 bg-white p-2 rounded-md text-gray-400">
                  <span class="sr-only">Open menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>

                <!-- Search -->
                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Search</span>
                  <!-- Heroicon name: outline/search -->
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </a>
              </div>

              <!-- Logo (lg-) -->
              <a href="#" class="lg:hidden">
                <span class="sr-only">Workflow</span>
                <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
              </a>

              <div class="flex-1 flex items-center justify-end">
                <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block"> Search </a>

                <div class="flex items-center lg:ml-8">
                  <!-- Help -->
                  <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:hidden">
                    <span class="sr-only">Help</span>
                    <!-- Heroicon name: outline/question-mark-circle -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </a>
                  <a href="#" class="hidden text-sm font-medium text-gray-700 hover:text-gray-800 lg:block">Help</a>

                  <!-- Cart -->
                  <div class="ml-4 flow-root lg:ml-8">
                    <a href="#" class="group -m-2 p-2 flex items-center">
                      <!-- Heroicon name: outline/shopping-bag -->
                      <svg class="flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                      </svg>
                      <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                      <span class="sr-only">items in cart, view bag</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main class="max-w-7xl mx-auto pt-16 pb-24 px-4 sm:px-6 lg:px-8">
      <div class="max-w-2xl mx-auto lg:max-w-none">
        <h1 class="sr-only">Checkout</h1>
        <h1 class="pl-2 text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">Checkout</h1>

        <form class="lg:grid lg:grid-cols-2 lg:gap-x-12 xl:gap-x-16">
          @csrf

          <div>

            <!-- Payment -->
            
            <div class= " pt-8 pl-2">
              <h2 class="text-lg font-medium text-gray-900">Payment</h2>

              <fieldset class="mt-4">
                <legend class="sr-only">Payment type</legend>
                <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                  <div class="flex items-center">
                    <input id="credit-card" name="payment-type" type="radio" checked class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="credit-card" class="ml-3 block text-sm font-medium text-gray-700"> Credit card </label>
                  </div>

                  <div class="flex items-center">
                    <input id="paypal" name="payment-type" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="paypal" class="ml-3 block text-sm font-medium text-gray-700"> PayPal </label>
                  </div>

                  <div class="flex items-center">
                    <input id="etransfer" name="payment-type" type="radio" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300">
                    <label for="etransfer" class="ml-3 block text-sm font-medium text-gray-700"> eTransfer </label>
                  </div>
                </div>
              </fieldset>   
                       

              <!-- <div class="mt-6 grid grid-cols-4 gap-y-6 gap-x-4">
                <div class="col-span-4">
                  <label for="card-number-1" class="block text-sm font-medium text-gray-700">Card number</label>
                  <div class="mt-1">
                    <input type="text" id="card-number-1" name="card-number-1" autocomplete="off" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                </div>

                <div class="col-span-4">
                  <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                  <div class="mt-1">
                    <input type="text" id="name-on-card" name="name-on-card" autocomplete="off" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                </div>

                <div class="col-span-3">
                  <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
                  <div class="mt-1">
                    <input type="text" name="expiration-date" id="expiration-date" autocomplete="off" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                </div>

                <div>
                  <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                  <div class="mt-1">
                    <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                  </div>
                </div>
              </div> -->
            </div>

          <!-- iFrame start -->

          <div class=" mt-8 form-wrapper">
            <div class="init-demo-form" style="display:none" ></div>
            <div class="grid grid-cols-9 gap-y-6 gap-x-4">
            <div class="cc-form col-span-9" style="display: none;">
              <div class="cc-info" style="display:block"> </div>
              <div class="cc-error">Please check that the entered data is correct</div>
                <div class="col-span-10">
                  <label for="card-name" class="ml-2 block text-sm font-medium text-gray-700">Name on card</label>
                  <div class="field" id="card-name"> </div>
                </div>

                <div class="col-span-10">
                  <label for="card-number" class=" ml-2 block text-sm font-medium text-gray-700">Card number</label>
                  <div class="field" id="card-number"> </div>
                </div>

                <div class="col-span-1">
                  <label for="card-cvv" class=" ml-2 block text-sm font-medium text-gray-700">CVV</label>
                  <div class="field" id="card-cvv"> </div>
                </div>

                <div class="">
                  <label for="card-expiration-date" class=" ml-2 block text-sm font-medium text-gray-700">Expiry (MM/YY)</label>
                  <div class="field" id="card-expiration-date"> </div>
                </div>

                <div class="field" id="card-submit-btn"> </div>
            </div>
            </div>
          </div>


          <!-- iFrame end -->


          <!-- test -->
          
      <!-- test end -->
        <!-- <div x-data="{ 
        
            c_id: '{!!$init_pay['client_config']['id']!!}', 
            c_account: '{!!$init_pay['client_config']['account']!!}',

            t_id: '{!!$init_pay['transaction']['id']!!}', 
            t_symbol: '{!!$init_pay['transaction']['amount']['symbol']!!}', 
            t_value: '{!!$init_pay['transaction']['amount']['value']!!}', 
            t_decimal: '{!!$init_pay['transaction']['amount']['decimals']!!}', 
            t_currency: '{!!$init_pay['transaction']['amount']['currency']!!}', 
            t_country: '{!!$init_pay['transaction']['amount']['country']!!}' 
          }"
        > 

            <p x-text='c_id'></p>
            <p x-text='c_account'></p>

            <p x-text='t_id'></p>
            <p x-text='t_symbol'></p>
            <p x-text='t_value'></p>
            <p x-text='t_decimal'></p>
            <p x-text='t_currency'></p>
            <p x-text='t_country'></p>


          </div> -->




          </div>





          <!-- Order summary -->
          <div class="mt-10 lg:mt-0">
            <h2 class="pt-8 text-lg font-medium text-gray-900">Order summary</h2>

            <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
              <h3 class="sr-only">Items in your cart</h3>
              <ul role="list" class="divide-y divide-gray-200">
                <li class="flex py-6 px-4 sm:px-6">
                  <div class="flex-shrink-0">
                    <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                  </div>

                  <div class="ml-6 flex-1 flex flex-col">
                    <div class="flex">
                      <div class="min-w-0 flex-1">
                        <h4 class="text-sm">
                          <a href="#" class="font-medium text-gray-700 hover:text-gray-800"> Basic Tee </a>
                        </h4>
                        <p class="mt-1 text-sm text-gray-500">Black</p>
                        <p class="mt-1 text-sm text-gray-500">Large</p>
                      </div>

                      <div class="ml-4 flex-shrink-0 flow-root">
                        <button type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500">
                          <span class="sr-only">Remove</span>
                          <!-- Heroicon name: solid/trash -->
                          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                          </svg>
                        </button>
                      </div>
                    </div>

                    <div class="flex-1 pt-2 flex items-end justify-between">
                      <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>

                      <div class="ml-4">
                        <label for="quantity" class="sr-only">Quantity</label>
                        <select id="quantity" name="quantity" class="rounded-md border border-gray-300 text-base font-medium text-gray-700 text-left shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </li>

                <!-- More products... -->
              </ul>
              <dl class="border-t border-gray-200 py-6 px-4 space-y-6 sm:px-6">
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Subtotal</dt>
                  <dd class="text-sm font-medium text-gray-900">$32.00</dd>
                </div>
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Shipping</dt>
                  <dd class="text-sm font-medium text-gray-900">$5.00</dd>
                </div>
                <div class="flex items-center justify-between">
                  <dt class="text-sm">Taxes</dt>
                  <dd class="text-sm font-medium text-gray-900">$8.32</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-6">
                  <dt class="text-base font-medium">Total</dt>
                  <dd class="text-base font-medium text-gray-900">$45.32</dd>
                </div>
              </dl>

              <!-- <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-3 px-4 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Confirm order</button>
              </div> -->
            </div>
          </div>
        </form>
      </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-200">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-20">
          <div class="grid grid-cols-1 md:grid-cols-12 md:grid-flow-col md:gap-x-8 md:gap-y-16 md:auto-rows-min">
            <!-- Image section -->
            <div class="col-span-1 md:col-span-2 lg:row-start-1 lg:col-start-1">
              <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">
            </div>

            <!-- Sitemap sections -->
            <div class="mt-10 col-span-6 grid grid-cols-2 gap-8 sm:grid-cols-3 md:mt-0 md:row-start-1 md:col-start-3 md:col-span-8 lg:col-start-2 lg:col-span-6">
              <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Products</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Bags </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Tees </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Objects </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Home Goods </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Accessories </a>
                    </li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">Company</h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Who we are </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Sustainability </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Press </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Careers </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Terms &amp; Conditions </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="text-gray-500 hover:text-gray-600"> Privacy </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>
                <ul role="list" class="mt-6 space-y-6">
                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Contact </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Shipping </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Returns </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Warranty </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Secure Payments </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> FAQ </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="text-gray-500 hover:text-gray-600"> Find a store </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Newsletter section -->
            <div class="mt-12 md:mt-0 md:row-start-2 md:col-start-3 md:col-span-8 lg:row-start-1 lg:col-start-9 lg:col-span-4">
              <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
              <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
              <form class="mt-2 flex sm:max-w-md">
                <label for="newsletter-email-address" class="sr-only">Email address</label>
                <input id="newsletter-email-address" type="text" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                <div class="ml-4 flex-shrink-0">
                  <button type="submit" class="w-full bg-indigo-600 border border-transparent rounded-md shadow-sm py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="border-t border-gray-100 py-10 text-center">
          <p class="text-sm text-gray-500">&copy; 2021 Workflow, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>




</body>


<script>
    const config = {
      authToken: "{!!$token!!}", 
      txRef: {!!$init_pay['transaction']['id']!!},
      // framePath: "<http://localhost:9000/",> // optional parameter, mainly used for testing, ignore

      // requirement payment meta client_account $init_pay['client_config']['account']
      meta: {
        clientId: {!!$init_pay['client_config']['id']!!},
        account: {!!$init_pay['client_config']['account']!!},
        language: 'en', // two letter language code in lower case
        value: 3500,
        country: "SG",
        currency: "USD",
        // platform: "Web SDK",
        // version: "0.0.1",
      },
    
      // The amount + amount meta returned when initializing the payment
      amount: {
        value: {!!$init_pay['transaction']['amount']['value']!!},
        country: "{!!$init_pay['transaction']['amount']['country']!!}", // two letter country code in upper case
        currency: "{!!$init_pay['transaction']['amount']['currency']!!}", // 3 letter currency code capitalized
      },

      cardsMeta: {!!$cardsMeta!!},

      styles: {
        input: {
            
            color: "charcoal"
        },
        "::placeholder": {
          //style for all input elements on focus event
          color: "gray",
          fontSize: "1em",
          fontweight: "100",
          fontFamily: "Arial",
        },
      }

    }

  
  
    </script>




</html>