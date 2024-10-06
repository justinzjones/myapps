<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <link href="{{ asset('css/checkout.css') }}" rel="stylesheet"> -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <script defer src="{{ asset('js/app.js') }}"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script src="{{ asset('js/checkout.js') }}" defer></script>
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
  <div class="bg-white">


    <main class="max-w-7xl sm:px-6 lg:px-8 px-4 pt-16 pb-24 mx-auto">
      
      <div class="lg:max-w-none max-w-2xl mx-auto">
        <h1 class="sr-only">Checkout</h1>


        <!-- Display a payment form -->
        <form id="payment-form">
          <div id="payment-element">
            <!--Stripe.js injects the Payment Element-->
          </div>
          <button id="submit">
            <div class="spinner hidden" id="spinner"></div>
            <span id="button-text">Pay now</span>
          </button>
          <div id="payment-message" class="hidden"></div>
        </form>
      </div>
    </main>

    <footer aria-labelledby="footer-heading" class="bg-white border-t border-gray-200">
      <h2 id="footer-heading" class="sr-only">Footer</h2>
      <div class="max-w-7xl sm:px-6 lg:px-8 px-4 mx-auto">
        <div class="py-20">
          <div class="md:grid-cols-12 md:grid-flow-col md:gap-x-8 md:gap-y-16 md:auto-rows-min grid grid-cols-1">
            <!-- Image section -->
            <div class="md:col-span-2 lg:row-start-1 lg:col-start-1 col-span-1">
              <img src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="" class="w-auto h-8">
            </div>

            <!-- Sitemap sections -->
            <div class="sm:grid-cols-3 md:mt-0 md:row-start-1 md:col-start-3 md:col-span-8 lg:col-start-2 lg:col-span-6 grid grid-cols-2 col-span-6 gap-8 mt-10">
              <div class="gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8 grid grid-cols-1">
                <div>
                  <h3 class="text-sm font-medium text-gray-900">
                    Products
                  </h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Bags
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Tees
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Objects
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Home Goods
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Accessories
                      </a>
                    </li>
                  </ul>
                </div>
                <div>
                  <h3 class="text-sm font-medium text-gray-900">
                    Company
                  </h3>
                  <ul role="list" class="mt-6 space-y-6">
                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Who we are
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Sustainability
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Press
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Careers
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Terms &amp; Conditions
                      </a>
                    </li>

                    <li class="text-sm">
                      <a href="#" class="hover:text-gray-600 text-gray-500">
                        Privacy
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div>
                <h3 class="text-sm font-medium text-gray-900">
                  Customer Service
                </h3>
                <ul role="list" class="mt-6 space-y-6">
                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Contact
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Shipping
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Returns
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Warranty
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Secure Payments
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      FAQ
                    </a>
                  </li>

                  <li class="text-sm">
                    <a href="#" class="hover:text-gray-600 text-gray-500">
                      Find a store
                    </a>
                  </li>
                </ul>
              </div>
            </div>

            <!-- Newsletter section -->
            <div class="md:mt-0 md:row-start-2 md:col-start-3 md:col-span-8 lg:row-start-1 lg:col-start-9 lg:col-span-4 mt-12">
              <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>
              <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>
              <form class="sm:max-w-md flex mt-2">
                <label for="newsletter-email-address" class="sr-only">Email address</label>
                <input id="newsletter-email-address" type="text" autocomplete="email" required class="focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 w-full min-w-0 px-4 py-2 text-base text-gray-900 placeholder-gray-500 bg-white border border-gray-300 rounded-md shadow-sm appearance-none">
                <div class="flex-shrink-0 ml-4">
                  <button type="submit" class="hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm">
                    Sign up
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

        <div class="py-10 text-center border-t border-gray-100">
          <p class="text-sm text-gray-500">&copy; 2021 Workflow, Inc. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </div>

  </div>

</body>


</html>