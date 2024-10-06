<!DOCTYPE html>
<html class="h-full bg-gray-50" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HPP - Checkout</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/checkout.css') }}" rel="stylesheet"> -->

  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://kit.fontawesome.com/ed601ea99b.js" crossorigin="anonymous"></script>

  <script defer src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/myJs.js') }}"></script>

  <style>
    [x-cloak] {
      display: none;
    }
  </style>

  <!-- <script src="{{ asset('js/checkoutb.js/?$client_secret') }}" defer></script> -->


</head>

<body class=" h-full" x-data="{ open: false }" @keydown.window.escape="open = false">


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
  <div class="bg-white">
    <!--
    Mobile menu

    Off-canvas menu for mobile, show/hide based on off-canvas menu state.
  -->
    <!-- <div class="lg:hidden relative z-40" role="dialog" aria-modal="true">
      <!--
      Off-canvas menu backdrop, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->


      <!-- <div class="fixed inset-0 z-40 flex"> -->
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

  <header class="bg-white border-b border-gray-100 relative">

      <div class="sm:px-6 lg:px-3 flex items-center justify-center h-10 px-4 text-sm font-medium text-white bg-blue-600">
        <div class="max-w-7xl sm:px-4 lg:px-8 flex items-center justify-end flex-1 px-0">

        
          <div class="hidden lg:ml-4 flex items-center justify-start">
              <p class="hover:text-gray-200 hover:bg-gray-700 px-2 py-4 -ml-2 text-sm font-medium text-gray-100 rounded cursor-pointer">« Return to cart</p>
          </div>
          
          <div class="inline-flex">
            <a href="#" class=" hover:text-gray-800 flex items-center pr-4 text-gray-700">
              <img src="https://tailwindui.com/img/flags/flag-canada.svg" alt="" class="flex-shrink-0 block w-5 h-auto">
              <span class="block ml-3 text-sm font-medium text-white"> CAD </span>
              <span class="sr-only">, change currency</span>
            </a>


            <!-- Search -->
            <a href="#" class="hover:text-gray-400 lg:block hidden p-2 ml-6 text-gray-100">
              <span class="sr-only">Search</span>
              <!-- Heroicon name: outline/search -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </a>

            <!-- Account -->
            <a href="#" class="hover:text-gray-400 lg:ml-4 p-2 text-gray-100">
              <span class="sr-only">Account</span>
              <!-- Heroicon name: outline/user -->
              <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
              </svg>
            </a>

            <!-- Cart -->
            <div class="lg:ml-6 flex items-center pr-0 ml-4">
              <a href="#" class="group flex items-center p-2 -m-2">
                <!-- Heroicon name: outline/shopping-bag -->
                <svg class="hover:text-gray-400 flex-shrink-0 w-6 h-6 text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
                <span class="group-hover:text-gray-400 ml-2 text-sm font-medium text-gray-100">1</span>
                <span class="sr-only">items in cart, view bag</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <nav aria-label="Top" class="max-w-7xl sm:px-6 lg:px-8 px-0 mx-auto">

        <div class="flex justify-between h-16">
          <div class="lg:px-0 flex px-4">
            <div class="flex items-center flex-shrink-0">
              <a href="#">
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=blue&shade=600" alt="">
              </a>
              <div class="flex items-baseline ml-5 space-x-4">
                <h1 class="text-3xl font-semibold leading-tight text-gray-500">Checkout</h1>
              </div>
            </div>

          </div>

          <div class="hidden flex items-center">
            <!-- Mobile menu button -->
            <button type="button" class="hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 inline-flex items-center justify-center p-2 text-gray-400 rounded-md" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <!-- Icon when menu is closed. -->
              <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
              <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
              <!-- Icon when menu is open. -->
              <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
              <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>

          <button class="ml-4 flex items-center">
            <p class="hover:bg-gray-100 px-4 py-4 text-sm font-medium text-blue-600 rounded cursor-pointer">Return to cart</p>
          </button>
        </div>


        </div>


      </nav>

  </header>


  <main class="sm:px-6 lg:max-w-7xl lg:px-8 max-w-2xl px-4 py-8 mx-auto">

    <div x-cloak x-data="{ button: true, radio:false }">
      <h1 x-on:click="button = ! button; radio = ! radio" class=" sm:text-3xl md:text-4xl text-2xl font-extrabold tracking-tight text-gray-700">Please select your payment method</h1>


      <form class="lg:grid lg:grid-cols-12 lg:gap-x-12 lg:items-start xl:gap-x-16 mt-6" action="/sdk-pay" method="POST">
        @csrf

        <section aria-labelledby="cart-heading" class="lg:col-span-7">
          <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>

          <!-- This example requires Tailwind CSS v2.0+ -->

          <!-- Payment options controls -->


          <div x-show="button" class="">
            <fieldset>

              <div class="gap-y-hpp sm:grid-cols-3 sm:gap-x-4 grid grid-cols-1 mt-0">

                <label class="ring-2 ring-blue-500 hover:drop-shadow focus:outline-none relative flex p-4 bg-white border border-blue-500 rounded-lg shadow-sm cursor-pointer">
                  <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">
                  <span class="flex flex-1">
                    <span class="flex flex-col">

                      <div class="flex">
                        <div class="flex-shrink-0">

                          <!-- Heroicon name: solid/exclamation -->
                          <div class=" w-24">
                            <span class="bg-teal-50 ring-4 ring-white inline-flex text-teal-700 rounded-lg">
                              <!-- <i class="fa-brands fa-cc-paypal justify-center text-3xl text-gray-500 bg-white rounded-md"></i> -->
                              <i class="far fa-credit-card justify-center text-3xl text-gray-500 bg-white rounded-md"></i>
                            </span>
                          </div>

                          <div class="mt-4">
                            <h3 class=" text-base font-medium">
                              <a href="#" class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Card payment
                              </a>
                            </h3>

                          </div>

                        </div>

                      </div>

                    </span>
                  </span>

                  <svg class="w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>

                  <span class="-inset-px absolute border-2 rounded-lg pointer-events-none" aria-hidden="true"></span>
                </label>

                <label class="hover:drop-shadow focus:outline-none relative flex p-4 bg-white border rounded-lg shadow-sm cursor-pointer">
                  <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">
                  <span class="flex flex-1">
                    <span class="flex flex-col">

                      <div class="flex">
                        <div class="flex-shrink-0">

                          <!-- Heroicon name: solid/exclamation -->
                          <div class=" w-24">
                            <span class="bg-teal-50 ring-4 ring-white inline-flex text-teal-700 rounded-lg">
                              <!-- <i class="fa-brands fa-cc-paypal justify-center text-3xl text-gray-500 bg-white rounded-md"></i> -->
                              <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal" />
                            </span>
                          </div>

                          <div class="mt-4">
                            <h3 class=" text-base font-medium">
                              <a href="#" class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                PayPal
                              </a>
                            </h3>
                          </div>

                        </div>

                      </div>

                    </span>
                  </span>


                  <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>

                  <span class="-inset-px absolute border-2 rounded-lg pointer-events-none" aria-hidden="true"></span>
                </label>

                <label class="hover:drop-shadow focus:outline-none relative flex p-4 bg-white border rounded-lg shadow-sm cursor-pointer">
                  <input type="radio" name="project-type" value="Newsletter" class="sr-only" aria-labelledby="project-type-0-label" aria-describedby="project-type-0-description-0 project-type-0-description-1">
                  <span class="flex flex-1">
                    <span class="flex flex-col">

                      <div class="flex">
                        <div class="flex-shrink-0">

                          <!-- Heroicon name: solid/exclamation -->
                          <div class=" w-16">
                            <span class="bg-teal-50 ring-4 ring-white inline-flex text-teal-700 rounded-lg">
                              <img src="{{url('/images/GPay.png')}}" alt="Google Pay" />
                            </span>
                          </div>

                          <div class="mt-4">
                            <h3 class=" text-base font-medium">
                              <a href="#" class="focus:outline-none">
                                <!-- Extend touch target to entire panel -->
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                Google Pay
                              </a>
                            </h3>

                          </div>

                        </div>

                      </div>

                    </span>
                  </span>

                  <svg class="hidden w-5 h-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>

                  <span class="-inset-px absolute border-2 rounded-lg pointer-events-none" aria-hidden="true"></span>
                </label>

              </div>
            </fieldset>
          </div>


          <div x-show="radio" class="md:px-5 sm:relative relative px-5 -space-y-px bg-white border border-gray-300 rounded-md">
            <fieldset class="sm:mt-0">
              <div class="sm:flex sm:items-center sm:space-y-0 sm:space-x-10 justify-around space-y-0">
                <div class="sm:border-none hover:bg-white sm:hover:bg-white flex items-center py-4 border-b border-gray-100 cursor-pointer">
                  <input id="email" name="notification-method" type="radio" checked class="focus:ring-blue-500 w-4 h-4 text-blue-600 border-gray-300">
                  <label for="email" class="block ml-4 text-base font-bold text-gray-700"> Card payment </label>
                </div>

                <div class="sm:border-none flex items-center py-4 border-b border-gray-100">
                  <input id="sms" name="notification-method" type="radio" class="focus:ring-blue-500 w-4 h-4 text-blue-600 border-gray-300">
                  <!-- <label for="sms" class="block ml-3 text-sm font-medium text-gray-700"> PayPal </label> -->
                  <span class="bg-teal-50 ring-4 ring-white inline-flex h-6 ml-4 text-teal-700 rounded-lg">
                    <!-- <i class="fa-brands fa-cc-paypal justify-center text-3xl text-gray-500 bg-white rounded-md"></i> -->
                    <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/PP_logo_h_200x51.png" alt="PayPal" />
                  </span>
                </div>

                <div class="sm:border-none flex items-center py-4 border-b border-gray-100">
                  <input id="push" name="notification-method" type="radio" class="focus:ring-blue-500 w-4 h-4 text-blue-600 border-gray-300">
                  <!-- <label for="push" class="block ml-3 text-sm font-medium text-gray-700"> Google Pay </label> -->
                  <div class="w-16 ml-4">
                    <img src="{{url('/images/GPay.png')}}" alt="Google Pay" />
                  </div>
                </div>

                <div class="sm:border-none flex items-center py-4">
                  <input id="push" name="notification-method" type="radio" class="focus:ring-blue-500 w-4 h-4 text-blue-600 border-gray-300">
                  <!-- <label for="push" class="block ml-3 text-sm font-medium text-gray-700"> Google Pay </label> -->
                  <div class="w-14 ml-4">
                  <svg enable-background="new 0 0 165.52107 105.9651" version="1.1" viewBox="0 0 165.52 105.97" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
                      
                      <path d="m150.7 0h-135.87c-0.5659 0-1.1328 0-1.6977 0.0033-0.47751 0.0034-0.95391 0.0087-1.4303 0.0217-1.039 0.0281-2.0869 0.0894-3.1129 0.2738-1.0424 0.1876-2.0124 0.4936-2.9587 0.9754-0.9303 0.4731-1.782 1.0919-2.5201 1.8303-0.73841 0.7384-1.3572 1.5887-1.8302 2.52-0.4819 0.9463-0.7881 1.9166-0.9744 2.9598-0.18539 1.0263-0.2471 2.074-0.2751 3.1119-0.0128 0.4764-0.01829 0.9528-0.0214 1.4291-0.0033 0.5661-0.0022 1.1318-0.0022 1.6989v76.318c0 0.5671-0.0011 1.1318 0.0022 1.699 0.00311 0.4763 0.0086 0.9527 0.0214 1.4291 0.028 1.037 0.08971 2.0847 0.2751 3.1107 0.1863 1.0436 0.4925 2.0135 0.9744 2.9599 0.473 0.9313 1.0918 1.7827 1.8302 2.52 0.73809 0.7396 1.5898 1.3583 2.5201 1.8302 0.9463 0.4831 1.9163 0.7892 2.9587 0.9767 1.026 0.1832 2.0739 0.2456 3.1129 0.2737 0.4764 0.0108 0.9528 0.0172 1.4303 0.0194 0.56489 0.0044 1.1318 0.0044 1.6977 0.0044h135.87c0.5649 0 1.1318 0 1.6966-0.0044 0.47641-0.0022 0.95282-0.0086 1.4314-0.0194 1.0368-0.0281 2.0845-0.0905 3.113-0.2737 1.041-0.1875 2.0112-0.4936 2.9576-0.9767 0.9313-0.4719 1.7805-1.0906 2.5201-1.8302 0.7372-0.7373 1.356-1.5887 1.8302-2.52 0.48299-0.9464 0.78889-1.9163 0.97429-2.9599 0.1855-1.026 0.2457-2.0737 0.2738-3.1107 0.013-0.4764 0.01941-0.9528 0.02161-1.4291 0.00439-0.5672 0.00439-1.1319 0.00439-1.699v-76.318c0-0.5671 0-1.1328-0.00439-1.6989-0.0022-0.4763-0.00861-0.9527-0.02161-1.4291-0.02811-1.0379-0.0883-2.0856-0.2738-3.1119-0.18539-1.0432-0.4913-2.0135-0.97429-2.9598-0.47421-0.9313-1.093-1.7816-1.8302-2.52-0.73961-0.7384-1.5888-1.3572-2.5201-1.8303-0.9464-0.4818-1.9166-0.7878-2.9576-0.9754-1.0285-0.1844-2.0762-0.2457-3.113-0.2738-0.47858-0.013-0.95499-0.0183-1.4314-0.0217-0.56478-0.0033-1.1317-0.0033-1.6966-0.0033z"/>
                      <path d="m150.7 3.532 1.6715 0.0032c0.4528 0.0032 0.90561 0.0081 1.3609 0.0205 0.79201 0.0214 1.7185 0.0643 2.5821 0.2191 0.7507 0.1352 1.3803 0.3408 1.9845 0.6484 0.5965 0.3031 1.143 0.7003 1.6202 1.1768 0.479 0.4797 0.87671 1.0271 1.1838 1.6302 0.30589 0.5995 0.51019 1.2261 0.64459 1.9823 0.1544 0.8542 0.1971 1.7832 0.21881 2.5801 0.01219 0.4498 0.01819 0.8996 0.0204 1.3601 0.00429 0.5569 0.0042 1.1135 0.0042 1.6715v76.318c0 0.558 9e-5 1.1136-0.0043 1.6824-0.00211 0.4497-0.0081 0.8995-0.0204 1.3501-0.02161 0.7957-0.0643 1.7242-0.2206 2.5885-0.13251 0.7458-0.3367 1.3725-0.64429 1.975-0.30621 0.6016-0.70331 1.1484-1.1802 1.6251-0.47989 0.48-1.0246 0.876-1.6282 1.1819-0.5997 0.3061-1.2282 0.51151-1.9715 0.6453-0.88109 0.157-1.8464 0.2002-2.5734 0.2199-0.4574 0.0103-0.9126 0.01649-1.3789 0.0187-0.55571 0.0043-1.1134 0.0042-1.6692 0.0042h-135.87-0.0221c-0.5494 0-1.0999 0-1.6593-0.0043-0.4561-0.00211-0.9112-0.0082-1.3512-0.0182-0.7436-0.0201-1.7095-0.0632-2.5834-0.2193-0.74969-0.1348-1.3782-0.3402-1.9858-0.6503-0.59789-0.3032-1.1422-0.6988-1.6223-1.1797-0.4764-0.4756-0.8723-1.0207-1.1784-1.6232-0.3064-0.6019-0.5114-1.2305-0.64619-1.9852-0.15581-0.8626-0.19861-1.7874-0.22-2.5777-0.01221-0.4525-0.01731-0.9049-0.02021-1.3547l-0.0022-1.3279 1e-4 -0.3506v-76.318l-1e-4 -0.3506 0.0021-1.3251c3e-3 -0.4525 0.0081-0.9049 0.02031-1.357 0.02139-0.7911 0.06419-1.7163 0.22129-2.5861 0.1336-0.7479 0.3385-1.3765 0.6465-1.9814 0.3037-0.5979 0.7003-1.1437 1.1792-1.6225 0.477-0.4772 1.0231-0.8739 1.6248-1.1799 0.6011-0.3061 1.2308-0.5116 1.9805-0.6465 0.8638-0.1552 1.7909-0.198 2.5849-0.2195 0.4526-0.0123 0.9052-0.0172 1.3544-0.0203l1.6771-0.0033h135.87" fill="#fff"/>
                      
                        
                          <path d="m45.186 35.641c1.4172-1.7727 2.379-4.1528 2.1253-6.5851-2.0746 0.10316-4.6063 1.3687-6.0721 3.1428-1.3161 1.5192-2.4809 3.999-2.1772 6.3293 2.3289 0.20201 4.6556-1.1641 6.124-2.887"/>
                          <path d="m47.285 38.983c-3.3821-0.20146-6.2577 1.9195-7.8729 1.9195-1.616 0-4.0893-1.818-6.7644-1.769-3.4818 0.05114-6.7124 2.0198-8.4793 5.1508-3.6341 6.2636-0.95904 15.555 2.5749 20.656 1.7162 2.5238 3.7845 5.3027 6.5098 5.2029 2.5749-0.10104 3.5842-1.6673 6.7142-1.6673 3.1276 0 4.0368 1.6673 6.7625 1.6168 2.8266-0.05054 4.5938-2.5251 6.31-5.0513 1.9688-2.877 2.7747-5.655 2.8254-5.8075-0.0507-0.05051-5.4506-2.122-5.5006-8.3336-0.05098-5.201 4.2395-7.6749 4.4414-7.8283-2.4229-3.5834-6.2086-3.9875-7.521-4.089"/>
                        
                        
                          <path d="m76.734 31.944c7.351 0 12.47 5.0671 12.47 12.444 0 7.4036-5.2241 12.497-12.654 12.497h-8.1389v12.943h-5.8804v-37.885h14.204zm-8.3233 20.005h6.7473c5.1198 0 8.0336-2.7564 8.0336-7.5348 0-4.7779-2.9138-7.5084-8.0073-7.5084h-6.7736v15.043z"/>
                          <path d="m90.74 61.979c0-4.8311 3.7018-7.7976 10.266-8.1653l7.5606-0.44614v-2.1264c0-3.0718-2.0742-4.9096-5.539-4.9096-3.2825 0-5.3304 1.5749-5.8287 4.0431h-5.3557c0.31499-4.9886 4.5678-8.6641 11.394-8.6641 6.6947 0 10.974 3.5443 10.974 9.0839v19.034h-5.4347v-4.5419h-0.13065c-1.6012 3.0718-5.0934 5.0144-8.7162 5.0144-5.4084 0-9.1892-3.3605-9.1892-8.3222zm17.826-2.494v-2.179l-6.8 0.41981c-3.3868 0.23649-5.3031 1.7329-5.3031 4.0958 0 2.415 1.9952 3.9905 5.0408 3.9905 3.9641 0 7.0623-2.7305 7.0623-6.327z"/>
                          <path d="m119.34 79.989v-4.5946c0.4193 0.10483 1.3642 0.10483 1.8372 0.10483 2.6252 0 4.0431-1.1024 4.9091-3.9378 0-0.05267 0.49931-1.6802 0.49931-1.7066l-9.9762-27.646h6.1427l6.9843 22.474h0.10432l6.9843-22.474h5.9857l-10.345 29.063c-2.3619 6.6952-5.0924 8.8479-10.816 8.8479-0.47297 0-1.8909-0.05267-2.3102-0.13116z"/>

                  </svg>

                  </div>
                </div>


              </div>
            </fieldset>
          </div>



          <!-- Payment -->
          <div class="mt:8 sm:mt-10 sm:border-t pt-6 border-gray-100">
            <!-- <h2 class="text-lg font-medium text-gray-900">Card payment</h2> -->
            <div class="flex justify-between">
              <div class="">
                <h3 class="text-lg font-semibold leading-6 text-gray-900">Card details</h3>
                <p class="max-w-2xl mt-1 text-sm font-medium text-gray-500">Please provide your card information.</p>
              </div>

              <div class="sm:flex justify-end hidden">
                
                <dl class="grid grid-cols-1 gap-0">
                  <div class=" overflow-hidden bg-gray-50">
                    <img src="{{url('/images/cards2.png')}}" alt="" class="contrast-50 grayscale w-36">
                  </div>

                  <!-- <div class="px-2 py-5 overflow-hidden bg-white">
                    <img src="{{url('/images/mastercard.png')}}" alt="" class="h-5">
                  </div>

                  <div class="px-2 py-5 overflow-hidden bg-white">
                    <img src="{{url('/images/amex.png')}}" alt="" class="w-10">
                  </div> -->
                </dl>
              </div>
            </div>

            <div class="gap-y-6 gap-x-4 grid grid-cols-4 mt-5">
              <div class="md:col-span-2 col-span-4">
                <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                <div class="mt-1">
                  <input type="text" placeholder="xxxx xxxx xxxx xxxx" color="#111827" width="100%" id="card-number" name="card-number" autocomplete="cc-number" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="md:col-span-2 col-span-4">
                <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                <div class="mt-1">
                  <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="col-span-2">
                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date</label>
                <div class="mt-1">
                  <input type="text" name="expiration-date" placeholder="MM/YY" id="expiration-date" autocomplete="cc-exp" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="col-span-2">
                <label for="cvc" class="block text-sm font-medium text-gray-700">Security code</label>
                <div class="mt-1">
                  <input type="text" name="cvc" id="cvc" placeholder="CVC" autocomplete="csc" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <!-- <div class="sm:col-span-2">
          <label for="country" class="block text-sm font-medium text-gray-700"> Billing Country </label>
          <div class="mt-1">
            <select id="country" name="country" autocomplete="country-name" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              <option>United States</option>
              <option>Canada</option>
              <option>Mexico</option>
            </select>
          </div>
        </div> -->




            </div>

            <div class="mt-8">
              <h3 class="text-lg font-semibold leading-6 text-gray-900">Billing details</h3>
              <p class="max-w-2xl mt-1 text-sm font-medium text-gray-500">Please provide your card billing information.</p>
            </div>

            <div class="gap-y-6 gap-x-4 grid grid-cols-4 mt-5">
              <div class="sm:col-span-2 col-span-4 mt-0">
                <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
                <div class="mt-1">
                  <select id="country" name="country" autocomplete="country-name" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-2 col-span-4">
                <label for="cvc" class="block text-sm font-medium text-gray-700">Zip code</label>
                <div class="mt-1">
                  <input type="text" name="cvc" id="cvc" autocomplete="csc" class="focus:ring-blue-500 focus:border-blue-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>
            </div>

          </div>


          <!-- This example requires Tailwind CSS v2.0+ -->
          <div class="sm:rounded-lg bg-gray-100 mt-10 mb-10">
            <div class="sm:p-6 px-4 py-5">
              <!-- <h3 class="text-lg font-medium leading-6 text-gray-900">Terms and conditions</h3> -->
              <div class="sm:flex sm:items-start sm:justify-between mt-0">
                <div class="md:w-3/6 w-full max-w-xl text-xs text-gray-700">
                  <p>By submitting this payment you are agreeing to our Terms and conditions.
                  </p>
                  <div class="my-2"></div>
                  <p>You are also agreeing that the personal data which has
                    been provided in connection with this booking can be passed to authorities for security purposes.</p>
                </div>
                <div class="sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center mt-5">
                  <div>

                    <div class="mt-1">

                      <button type="button" class="px-14 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 md:text-lg sm:text-xl items-center block py-5 mx-auto mt-0 text-lg font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
                        Agree and pay now<p class="pt-2 text-lg font-semibold text-gray-200">$361.80 
                          <span class=" text-base text-gray-300">(USD)</span></p>
                      </button>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>









          <!-- <button type="submit" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-blue-500 w-full px-4 py-3 mt-10 text-base font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">Checkout</button> -->

        </section>


        <!-- Order summary -->
        <section aria-labelledby="summary-heading" class="hidden lg:block sm:p-6 lg:p-8 lg:mt-0 lg:col-span-5 bg-gray-100 px-4 py-6 mt-16 rounded-lg">
        <div class="lg:max-w-none max-w-lg mx-auto">
        <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summary</h2>

        <!-- <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
            <li class="flex items-start py-6 space-x-4">
              <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss blue canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="flex-none object-cover object-center w-20 h-20 rounded-md">
              <div class="flex-auto space-y-1">
                <h3>Micro Backpack</h3>
                <p class="text-gray-500">Moss</p>
                <p class="text-gray-500">5L</p>
              </div>
              <p class="flex-none text-base font-medium">$70.00</p>
            </li>

            <!-- More products... -->
        <!-- </ul> -->

        <dl class="lg:block hidden pt-6 space-y-6 text-sm font-medium text-gray-900">
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

          <div class="flex items-center justify-between pt-6 border-t border-gray-200">
            <dt class="text-base">Total</dt>
            <dd class="text-base">$361.80</dd>
          </div>
        </dl>


      </div>
        </section>
        <div 
          x-data="{ mobile_price: false }"
          class="lg:hidden fixed inset-x-0 bottom-0 flex flex-col-reverse text-sm font-medium text-gray-900">
          <div x-on:click="mobile_price = ! mobile_price" class="sm:px-6 relative z-10 px-4 bg-white border-t border-gray-200">
            <div class="max-w-lg mx-auto">
              <button type="button" class="flex items-center w-full py-6 font-medium" aria-expanded="false">
                <span class="mr-auto text-base">Total</span>
                <span class="mr-2 text-base">$361.80</span>
                <!-- Heroicon name: solid/chevron-up -->
                <svg class="w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd" />
                </svg>
              </button>
            </div>
          </div>

          
          <div x-show="mobile_price" 
            x-transition:enter="transition ease-in-out duration-300 transform" 
            x-transition:enter-start="translate-y-full" 
            x-transition:enter-end="translate-y-0" 
            x-transition:leave="transition ease-in-out duration-300 transform" 
            x-transition:leave-start="translate-y-0" 
            x-transition:leave-end="translate-y-full" 
            x-description="Mobile summary, show/hide based on mobile summary state." 
            x-ref="panel" >

          
          
            
                  <!-- Mobile summary overlay, show/hide based on mobile summary state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0" -->
               
            <div class="fixed inset-0 bg-black bg-opacity-25" aria-hidden="true"></div>

            <!--
                  Mobile summary, show/hide based on mobile summary state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "translate-y-full"
                    To: "translate-y-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-y-0"
                    To: "translate-y-full"
                -->
            <div class="sm:px-6 relative px-4 py-6 bg-white">
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
      </form>

    </div>
    </div>
    

  </main>

  <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-100">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl sm:px-6 lg:px-8 px-4 mx-auto">


      <div class=" py-10 text-center">
        <p class="text-sm text-gray-500">&copy; 2022 CellPoint Digital, All rights reserved.</p>
      </div>
    </div>
  </footer>
  </div>


</body>


</html>