<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HPP - Checkout</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/hppx.css') }}" rel="stylesheet">

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

<body>

  <!-- Background color split screen for large screens -->
  <div class="lg:block fixed top-0 left-0 hidden w-1/2 h-full bg-white" aria-hidden="true"></div>
  <div class="back-color back-image lg:block bg-gray-50 fixed top-0 right-0 hidden w-1/2 h-full" aria-hidden="true"></div>

  <header class="bg-gray-50 border-b border-gray-100 relative">

      <div class="sm:px-6 lg:px-3 flex items-center justify-center h-10 px-4 text-sm font-medium text-white bg-sky-600">
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
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=blue&shade=300" alt="">
              </a>
              <div class="flex items-baseline ml-5 space-x-4">
                <h1 class="text-3xl font-semibold leading-tight text-gray-500">Checkout</h1>
              </div>
            </div>

          </div>

          <div class="hidden flex items-center">
            <!-- Mobile menu button -->
            <button type="button" class="hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-sky-500 inline-flex items-center justify-center p-2 text-gray-400 rounded-md" aria-expanded="false">
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
            <p class="hover:bg-gray-100 px-4 py-4 text-sm font-medium text-sky-600 rounded cursor-pointer">Return to cart</p>
          </button>
        </div>


        </div>


      </nav>

  </header>

  <main class="gap-x-16 max-w-7xl lg:px-8 lg:grid-cols-2 xl:gap-x-48 relative grid grid-cols-1 mx-auto">
    <h1 class="sr-only">Order information</h1>

    <section aria-labelledby="summary-heading" class="bg-gray-50 hidden lg:block sm:px-6 lg:px-0 lg:pb-16 lg:bg-transparent lg:row-start-1 lg:col-start-2 px-4 pt-10 pb-10">

      <div class="lg:max-w-none max-w-lg mx-auto">
        <h2 id="summary-heading" class="text-lg font-medium text-gray-900">Order summaryz</h2>

        <!-- <ul role="list" class="text-sm font-medium text-gray-900 divide-y divide-gray-200">
            <li class="flex items-start py-6 space-x-4">
              <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-04-product-01.jpg" alt="Moss green canvas compact backpack with double top zipper, zipper front pouch, and matching carry handle and backpack straps." class="flex-none object-cover object-center w-20 h-20 rounded-md">
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
            <dt class="text-gray-600">Subtotalz</dt>
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



    <!-- Breadcrumbs -->
    <div x-cloak x-data="status_x" class="pb-36 sm:px-6 lg:pb-16 lg:px-0 lg:row-start-1 lg:col-start-1 px-4 pt-10">
      <div class="lg:max-w-none max-w-lg mx-auto">

        <!-- This example requires Tailwind CSS v2.0+ -->


        <!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="flex pb-10" aria-label="Breadcrumb">
          <ol role="list" class="flex items-center space-x-4">


            <li>
              <div class="flex items-center">
                <!-- Heroicon name: solid/chevron-right -->

                <a href="#" class=" text-sm" :class=" emailDisplay ? 'hover:text-sky-600 text-sky-500 font-semibold' : 'text-gray-500 hover:text-gray-700' ">Email
                </a>
              </div>
            </li>


            <li>
              <div class="flex items-center">
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="flex-shrink-0 w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <a href="#" class=" text-sm ml-4" :class=" locationDisplay ? 'hover:text-sky-600 text-sky-500 font-semibold' : 'text-gray-500 hover:text-gray-700' " aria-current="page">Address</a>
              </div>
            </li>

            <li>
              <div class="flex items-center">
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="flex-shrink-0 w-4 h-4 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
                <a href="#" class=" text-sm ml-4" :class=" buttonsDisplay || cardDisplay ? 'hover:text-sky-600 text-sky-500 font-semibold' : 'text-gray-500 hover:text-gray-700' " aria-current="page">Payment</a>
              </div>
            </li>
          </ol>
        </nav>



        <section aria-labelledby="contact-info-heading">
          <div class="hidden flex items-center justify-between">
            <h2 class="text-slate-900 text-lg font-semibold">Payment Details</h2>
            <p class="text-slate-600 lg:hidden text-sm font-medium leading-6">Step 1 of 3</p>
          </div>

          <p class="text-slate-700 mt-2 text-sm leading-6">Complete your purchase by providing your payment information.</p>

          <div x-transition:enter.duration.600ms x-show="emailDisplay" class="mt-6">
            <label for="email-address" class="block text-sm font-medium text-gray-700">Email</label>
            <div class="mt-1">
              <input type="email" id="email-address" name="email-address" autocomplete="email" class="focus:ring-sky-500 focus:border-sky-500 sm:text-md block w-full border-gray-300 rounded-md shadow-sm">
            </div>
          </div>
        </section>

        <section x-transition:enter.duration.600ms x-show="locationDisplay" aria-labelledby="address-details" class="mt-6">
          <h2 id="payment-heading" class=" text-base font-semibold text-gray-900">Where are you located?</h2>
          <p class="text-slate-700 mt-2 text-sm leading-6">Please enter your Country and ZIP / Post code below.
            We collect this information to help combat fraud, and to keep your payment secure.</p>

          <div class="sm:col-span-2 col-span-4 mt-3">
            <label for="country" class="block text-sm font-medium text-gray-700"> Country </label>
            <div class="mt-1">
              <select id="country" name="country" autocomplete="country-name" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                <option>United States</option>
                <option>Canada</option>
                <option>Mexico</option>
              </select>
            </div>
          </div>

          <div class="sm:grid-cols-4 gap-y-6 gap-x-4 grid grid-cols-3 mt-6">
            <div class="sm:col-span-4 col-span-3">
              <label for="name-on-card" class="block text-sm font-medium text-gray-700">Zip / Post code</label>
              <div class="mt-1">
                <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>
          </div>
        </section>

        <section x-transition:enter.duration.600ms x-show="buttonsDisplay" aria-labelledby="paymentOptions" class="mt-6">
          <h2 id="payment-heading" class=" text-base font-semibold text-gray-900">Payment options</h2>
          <p class="text-slate-700 mt-2 text-sm leading-6">Please select how you would like to pay.</p>

          <div class="sm:col-span-2 col-span-4 mt-3">

            <div class="mt-2">

              <button @click="card_selected()" type="button" class="inline-flex justify-center items-center w-full px-0 py-3 border border-transparent text-lg font-medium rounded-md shadow-sm text-white bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black-500">
                <i class="mr-3 far fa-credit-card items-center text-2xl text-gray-300 bg-gray-700 hover:bg-gray-700 rounded-md" aria-hidden="true"></i>Pay by Card</button>
            </div>

            <div class="mt-2">
              <button type="button" class="inline-flex items-center justify-center px-6 py-3 w-full border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-yellow-300 hover:bg-yellow-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: solid/mail -->
                <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1619 395" width="410" height="26">
                  <title>PayPal-svg</title>
                  <style>
                    tspan {
                      white-space: pre
                    }

                    .shp0 {
                      fill: #253b80
                    }

                    .shp1 {
                      fill: #179bd7
                    }

                    .shp2 {
                      fill: #222d65
                    }
                  </style>
                  <path id="Layer" fill-rule="evenodd" class="shp0" d="M670.5 111.21C682.09 124.82 685.93 144.26 681.92 169C673.03 225.56 638.98 254.09 579.98 254.09L551.62 254.09C545.51 254.09 540.28 258.55 539.34 264.61L529.57 326.53C528.61 332.59 523.4 337.04 517.27 337.04L474.51 337.04C469.91 337.04 466.4 332.95 467.12 328.42L503.35 98.85C504.3 92.8 509.52 88.35 515.65 88.35L605.22 88.35C635.19 88.35 657.77 96.26 670.5 111.21ZM611.2 147.25C603.32 138.03 588.06 138.03 571.88 138.03L565.69 138.03C562.02 138.03 558.88 140.7 558.32 144.33L548.83 204.32L562.35 204.32C586.09 204.32 610.65 204.32 615.55 172.2C617.34 160.91 615.9 152.74 611.2 147.25Z" />
                  <path id="Layer" fill-rule="evenodd" class="shp0" d="M880.3 179.78L857.12 326.51C856.15 332.57 850.96 337.03 844.82 337.03L806.19 337.03C801.61 337.03 798.1 332.94 798.82 328.39L800.74 316.47C800.74 316.47 779.56 341.02 741.37 341.02C719.12 341.02 700.42 334.6 687.34 319.21C673.1 302.47 667.27 278.46 671.37 253.35C679.25 203.01 719.73 167.13 767.13 167.13C787.8 167.13 808.5 171.63 817.79 185.11L820.79 189.45L822.69 177.46C823.25 173.83 826.41 171.16 830.06 171.16L872.95 171.16C877.54 171.16 881.03 175.26 880.3 179.78ZM805.91 224.27C799.39 216.64 789.49 212.6 777.31 212.6C752.88 212.6 733.11 229.58 729.24 253.86C727.22 265.77 729.63 276.47 735.97 283.98C742.36 291.55 752.32 295.54 764.77 295.54C789.58 295.54 809.03 279.1 813.17 254.61C815.04 242.74 812.45 231.98 805.91 224.27Z" />
                  <path id="Layer" class="shp0" d="M1101.39 171.16L1058.28 171.16C1054.17 171.16 1050.31 173.21 1047.98 176.62L988.53 264.15L963.33 180.04C961.75 174.78 956.89 171.16 951.39 171.16L909.03 171.16C903.89 171.16 900.31 176.19 901.95 181.03L949.42 320.3L904.79 383.28C901.28 388.24 904.82 395.06 910.88 395.06L953.93 395.06C958.02 395.06 961.84 393.07 964.16 389.72L1107.52 182.88C1110.95 177.93 1107.42 171.16 1101.39 171.16Z" />
                  <path id="Layer" fill-rule="evenodd" class="shp1" d="M1309.35 111.21C1320.94 124.82 1324.8 144.26 1320.78 169C1311.88 225.56 1277.84 254.09 1218.83 254.09L1190.48 254.09C1184.37 254.09 1179.14 258.55 1178.2 264.61L1167.92 329.68C1167.25 333.92 1163.6 337.04 1159.33 337.04L1113.36 337.04C1108.79 337.04 1105.28 332.95 1106 328.42L1142.22 98.85C1143.18 92.8 1148.39 88.35 1154.51 88.35L1244.09 88.35C1274.07 88.35 1296.63 96.26 1309.35 111.21ZM1250.09 147.25C1242.2 138.03 1226.93 138.03 1210.77 138.03L1204.58 138.03C1200.9 138.03 1197.78 140.7 1197.22 144.33L1187.72 204.32L1201.22 204.32C1224.98 204.32 1249.54 204.32 1254.42 172.2C1256.22 160.91 1254.79 152.74 1250.09 147.25Z" />
                  <path id="Layer" fill-rule="evenodd" class="shp1" d="M1519.21 179.78L1496.02 326.51C1495.06 332.57 1489.85 337.03 1483.73 337.03L1445.11 337.03C1440.51 337.03 1437 332.94 1437.72 328.39L1439.64 316.47C1439.64 316.47 1418.46 341.02 1380.27 341.02C1358.02 341.02 1339.34 334.6 1326.24 319.21C1312 302.47 1306.19 278.46 1310.28 253.35C1318.16 203.01 1358.63 167.13 1406.03 167.13C1426.7 167.13 1447.39 171.63 1456.68 185.11L1459.69 189.45L1461.59 177.46C1462.14 173.83 1465.27 171.16 1468.95 171.16L1511.81 171.16C1516.41 171.16 1519.92 175.26 1519.21 179.78ZM1444.77 224.27C1438.25 216.64 1428.35 212.6 1416.17 212.6C1391.74 212.6 1371.99 229.58 1368.1 253.86C1366.11 265.77 1368.5 276.47 1374.83 283.98C1381.23 291.55 1391.2 295.54 1403.63 295.54C1428.44 295.54 1447.91 279.1 1452.03 254.61C1453.93 242.74 1451.33 231.98 1444.77 224.27Z" />
                  <path id="Layer" class="shp1" d="M1562.38 94.65L1525.62 328.42C1524.9 332.95 1528.41 337.04 1532.98 337.04L1569.94 337.04C1576.08 337.04 1581.29 332.59 1582.23 326.53L1618.49 96.96C1619.21 92.43 1615.7 88.34 1611.13 88.34L1569.74 88.34C1566.09 88.35 1562.94 91.02 1562.38 94.65Z" />
                  <path id="Layer" class="shp0" d="M95.16 381.65L102.01 338.16L86.75 337.81L13.9 337.81L64.53 16.91C64.68 15.94 65.2 15.04 65.94 14.4C66.69 13.76 67.64 13.41 68.64 13.41L191.49 13.41C232.27 13.41 260.42 21.89 275.11 38.63C282 46.49 286.39 54.69 288.51 63.73C290.74 73.2 290.77 84.53 288.6 98.34L288.44 99.35L288.44 108.2L295.33 112.1C301.13 115.17 305.74 118.7 309.28 122.73C315.17 129.44 318.99 137.98 320.6 148.1C322.26 158.5 321.71 170.89 318.99 184.91C315.84 201.04 310.76 215.08 303.9 226.58C297.58 237.17 289.54 245.95 280 252.76C270.88 259.23 260.05 264.14 247.8 267.28C235.94 270.37 222.41 271.92 207.57 271.92L198.01 271.92C191.17 271.92 184.53 274.39 179.32 278.8C174.1 283.3 170.64 289.45 169.58 296.18L168.86 300.1L156.76 376.74L156.21 379.56C156.06 380.45 155.81 380.89 155.45 381.19C155.12 381.47 154.65 381.65 154.19 381.65L95.16 381.65Z" />
                  <path id="Layer" class="shp1" d="M301.85 100.37L301.85 100.37L301.85 100.37C301.49 102.71 301.07 105.11 300.6 107.57C284.4 190.71 228.97 219.43 158.18 219.43L122.14 219.43C113.48 219.43 106.19 225.71 104.84 234.25L104.84 234.25L104.84 234.25L86.39 351.23L81.16 384.39C80.28 389.99 84.61 395.04 90.26 395.04L154.19 395.04C161.76 395.04 168.19 389.55 169.38 382.08L170.01 378.84L182.05 302.49L182.82 298.3C184 290.81 190.44 285.32 198.01 285.32L207.57 285.32C269.51 285.32 317.99 260.18 332.16 187.45C338.08 157.06 335.02 131.69 319.35 113.85C314.61 108.47 308.73 104.01 301.85 100.37Z" />
                  <path id="Layer" class="shp2" d="M284.91 93.61C282.43 92.89 279.88 92.24 277.26 91.65C274.63 91.07 271.93 90.56 269.15 90.12C259.43 88.55 248.79 87.8 237.38 87.8L141.09 87.8C138.72 87.8 136.47 88.34 134.45 89.31C130.01 91.44 126.71 95.64 125.91 100.79L105.43 230.47L104.84 234.25C106.19 225.71 113.48 219.43 122.14 219.43L158.18 219.43C228.97 219.43 284.4 190.7 300.6 107.57C301.08 105.11 301.49 102.71 301.85 100.37C297.76 98.19 293.32 96.34 288.54 94.75C287.36 94.36 286.14 93.98 284.91 93.61Z" />
                  <path id="Layer" class="shp0" d="M125.91 100.79C126.71 95.64 130.01 91.44 134.45 89.32C136.48 88.35 138.72 87.81 141.09 87.81L237.38 87.81C248.79 87.81 259.43 88.56 269.15 90.13C271.93 90.58 274.63 91.09 277.26 91.66C279.88 92.25 282.43 92.91 284.91 93.63C286.14 93.99 287.36 94.37 288.55 94.75C293.33 96.34 297.77 98.21 301.87 100.37C306.69 69.64 301.83 48.72 285.21 29.78C266.89 8.93 233.82 0 191.5 0L68.65 0C60.01 0 52.64 6.28 51.3 14.83L0.13 339.03C-0.88 345.44 4.07 351.23 10.54 351.23L86.39 351.23L105.43 230.47L125.91 100.79Z" />
                </svg>
              </button>
            </div>

            <div class="mt-2">
              <button type="button" class="inline-flex items-center px-0 justify-center py-3 w-full border border-transparent border-gray-200 text-base font-medium rounded-md text-gray-100 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                <!-- Heroicon name: solid/mail -->

                <svg role="presentation" fill="#A1A1A1" class="main-header__logo-image" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 435.97 173.13" width="410" height="26">
                  <path d="M206.2,84.58v50.75H190.1V10h42.7a38.61,38.61,0,0,1,27.65,10.85A34.88,34.88,0,0,1,272,47.3a34.72,34.72,0,0,1-11.55,26.6q-11.2,10.68-27.65,10.67H206.2Zm0-59.15V69.18h27a21.28,21.28,0,0,0,15.93-6.48,21.36,21.36,0,0,0,0-30.63,21,21,0,0,0-15.93-6.65h-27Z" fill="#5f6368"></path>
                  <path d="M309.1,46.78q17.85,0,28.18,9.54T347.6,82.48v52.85H332.2v-11.9h-.7q-10,14.7-26.6,14.7-14.17,0-23.71-8.4a26.82,26.82,0,0,1-9.54-21q0-13.31,10.06-21.17t26.86-7.88q14.34,0,23.62,5.25V81.25A18.33,18.33,0,0,0,325.54,67,22.8,22.8,0,0,0,310,61.13q-13.49,0-21.35,11.38l-14.18-8.93Q286.17,46.78,309.1,46.78Zm-20.83,62.3a12.86,12.86,0,0,0,5.34,10.5,19.64,19.64,0,0,0,12.51,4.2,25.67,25.67,0,0,0,18.11-7.52q8-7.53,8-17.67-7.53-6-21-6-9.81,0-16.36,4.73C290.46,100.52,288.27,104.41,288.27,109.08Z" fill="#5f6368"></path>
                  <path d="M436,49.58,382.24,173.13H365.62l19.95-43.23L350.22,49.58h17.5l25.55,61.6h.35l24.85-61.6Z" fill="#5f6368"></path>
                  <path d="M141.14,73.64A85.79,85.79,0,0,0,139.9,59H72V86.73h38.89a33.33,33.33,0,0,1-14.38,21.88v18h23.21C133.31,114.08,141.14,95.55,141.14,73.64Z" fill="#4285f4"></path>
                  <path d="M72,144c19.43,0,35.79-6.38,47.72-17.38l-23.21-18C90.05,113,81.73,115.5,72,115.5c-18.78,0-34.72-12.66-40.42-29.72H7.67v18.55A72,72,0,0,0,72,144Z" fill="#34a853"></path>
                  <path d="M31.58,85.78a43.14,43.14,0,0,1,0-27.56V39.67H7.67a72,72,0,0,0,0,64.66Z" fill="#fbbc04"></path>
                  <path d="M72,28.5A39.09,39.09,0,0,1,99.62,39.3h0l20.55-20.55A69.18,69.18,0,0,0,72,0,72,72,0,0,0,7.67,39.67L31.58,58.22C37.28,41.16,53.22,28.5,72,28.5Z" fill="#ea4335"></path>
                </svg>
              </button>
            </div>

          </div>

        </section>

        <section x-transition:enter.duration.600ms x-show="cardDisplay" aria-labelledby="payment-heading" class="mt-6">
          <div class="mt:8 sm:mt-10 sm:border-t pt-6 border-gray-100">
            <!-- <h2 class="text-lg font-medium text-gray-900">Card payment</h2> -->
            <div class="flex justify-between">
              <div class="">
                <h3 class="text-lg font-semibold leading-6 text-gray-900">Card details</h3>
                <p class="max-w-2xl mt-1 text-sm font-medium text-gray-500">Please provide your card information.</p>
              </div>

              <div class="sm:flex justify-end hidden">

                <dl class="grid grid-cols-1 gap-0">
                  <div class=" overflow-hidden bg-white">
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
                  <input type="text" placeholder="xxxx xxxx xxxx xxxx" color="#111827" width="100%" id="card-number" name="card-number" autocomplete="cc-number" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="md:col-span-2 col-span-4">
                <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                <div class="mt-1">
                  <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="col-span-2">
                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date</label>
                <div class="mt-1">
                  <input type="text" name="expiration-date" placeholder="MM/YY" id="expiration-date" autocomplete="cc-exp" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <div class="col-span-2">
                <label for="cvc" class="block text-sm font-medium text-gray-700">Security code</label>
                <div class="mt-1">
                  <input type="text" name="cvc" id="cvc" placeholder="CVC" autocomplete="csc" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                </div>
              </div>

              <!-- <div class="sm:col-span-2">
                <label for="country" class="block text-sm font-medium text-gray-700"> Billing Country </label>
                <div class="mt-1">
                  <select id="country" name="country" autocomplete="country-name" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
              </div> -->

            </div>


          </div>


        </section>

        <section x-show="shipDisplay" aria-labelledby="shipping-heading" class="mt-6">
          <h2 id="shipping-heading" class="text-lg font-medium text-gray-900">Shipping address</h2>

          <div class="gap-y-6 gap-x-4 grid grid-cols-6 mt-6">

            <div class="sm:col-span-3 col-span-6">
              <label for="card-number" class="block text-sm font-medium text-gray-700">First name</label>
              <div class="mt-1">
                <input type="text" placeholder="xxxx xxxx xxxx xxxx" color="#111827" width="100%" id="card-number" name="card-number" autocomplete="cc-number" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

            <div class="md:col-span-3 col-span-6">
              <label for="name-on-card" class="block text-sm font-medium text-gray-700">Last name</label>
              <div class="mt-1">
                <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

            <div class="md:col-span-3 col-span-6">
              <label for="address" class="block text-sm font-medium text-gray-700">Address line 1</label>
              <div class="mt-1">
                <input type="text" id="address" name="address" autocomplete="street-address" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

            <div class="md:col-span-3 col-span-6">
              <label for="address" class="block text-sm font-medium text-gray-700">Address line 2</label>
              <div class="mt-1">
                <input type="text" id="address" name="address" autocomplete="street-address" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>


            <div class="sm:col-span-2">
              <label for="city" class="block text-sm font-medium text-gray-700">City</label>
              <div class="mt-1">
                <input type="text" id="city" name="city" autocomplete="address-level2" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
              <div class="mt-1">
                <input type="text" id="region" name="region" autocomplete="address-level1" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

            <div class="sm:col-span-2">
              <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal code</label>
              <div class="mt-1">
                <input type="text" id="postal-code" name="postal-code" autocomplete="postal-code" class="focus:ring-sky-500 focus:border-sky-500 sm:text-sm block w-full border-gray-300 rounded-md shadow-sm">
              </div>
            </div>

          </div>
        </section>

        

        <div class="" :class=" buttonsDisplay ? 'hidden' : ' ' ">
          <div class="sm:flex sm:items-center  mt-6" :class=" cardDisplay ? 'sm:justify-between' : 'sm:justify-end ' ">

          <button @click="back()" :class=" cardDisplay ? ' ' : 'hidden' " @click="back()" type="" class="block  focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-gray-500  sm:order-last sm:w-auto w-full justify-start py-2 px-2 text-sm font-semibold text-gray-700  border-transparent rounded-md ">
              <!-- <span x-text="state === 'card' ? 'Pay now $361.80' : 'Continue »'" ></span> -->
              <span>« Change Payment Method</span>
            </button>

            <button @click="proceed()" type="" class="hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-gray-500 sm:ml-6 sm:order-last sm:w-auto w-full px-6 py-2 text-base font-medium text-white bg-black border border-transparent rounded-md shadow-sm">
              <!-- <span x-text="state === 'card' ? 'Pay now $361.80' : 'Continue »'" ></span> -->
              <span x-html="state === 'card' ? '<span>Pay now, $361.80<span>(USD)</span></span>' : 'Continue »'" ></span>
            </button>



            <p :class=" locationDisplay ? ' ' : 'hidden' " class="sm:mt-0 sm:text-left mt-4 text-sm text-center text-gray-500">You won't be charged until the next step.</p>
          </div>





        </div>

        <div class="bg-gray-50 mt-10 p-6 mb-8 border border-gray-200 rounded">
        <div class="  w-full max-w-xl text-xs text-gray-700">
        <p>By submitting this payment you are agreeing to our Terms and conditions.
        </p>
        <div class="my-2"></div>
        <p>You are also agreeing that the personal data which has
          been provided in connection with this booking can be passed to authorities for security purposes.</p>
      </div>
    </div>



      </div>



    </div>

    <!-- <div class="bg-gray-50 p-6 mb-8 border border-gray-200 rounded">
      <div class="w-full max-w-xl text-xs text-gray-700">
        <p>By submitting this payment you are agreeing to our Terms and conditions.
        </p>
        <div class="my-2"></div>
        <p>You are also agreeing that the personal data which has
          been provided in connection with this booking can be passed to authorities for security purposes.</p>
      </div>
    </div> -->

  </main>

  <footer aria-labelledby="footer-heading" class="z-40 hidden lg:block absolute bottom-0 w-full mt-10 bg-white border-t border-gray-100">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl sm:px-6 lg:px-8 px-4 mx-auto">


      <div class=" py-10 text-center">
        <p class="text-sm text-gray-500">&copy; 2022 CellPoint Digital, All rights reserved.</p>
      </div>
    </div>
  </footer>




  <div 
          x-data="{ mobile_price: false }"
          class="z-50 fixed bottom-0 inset-x-0 flex flex-col-reverse text-sm font-medium text-gray-900 lg:hidden">
          <div x-on:click="mobile_price = ! mobile_price" class="relative z-10 bg-white border-t border-gray-200 px-4 sm:px-6">
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

</body>


</html>