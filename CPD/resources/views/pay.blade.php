@extends ('layouts/booking-flow-layout')


@section ('ibe-body')

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
    ]
  }
  ```
-->
<div class="min-h-screen bg-gray-100">
  <header class="bg-white shadow">
    <div class="max-w-7xl sm:px-4 lg:px-8 px-2 mx-auto">
      <div class="flex justify-between h-16">
        <div class="lg:px-0 flex px-2">
          <div class="flex items-center flex-shrink-0">
            <a href="#">
              <img class="w-auto h-12" src="{{ asset('images/cpd_logo.png') }}" alt="Workflow">
            </a>
            <div class="flex items-baseline ml-5 space-x-4">
              <h1 class="text-3xl font-semibold leading-tight text-gray-500">Checkout</h1>
            </div>
          </div>
          <div class="hidden">
            <nav aria-label="Global" class="lg:ml-6 lg:flex lg:items-center lg:space-x-4 hidden">
              <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
                Dashboard
              </a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
                Jobs
              </a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
                Applicants
              </a>
              <a href="#" class="px-3 py-2 text-sm font-medium text-gray-900">
                Company
              </a>
            </nav>
          </div>
        </div>
        <div class="hidden">
          <div class="lg:ml-6 lg:justify-end flex items-center justify-center flex-1 px-2">
            <div class="lg:max-w-xs w-full max-w-lg">
              <label for="search" class="sr-only">Search</label>
              <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                  <!-- Heroicon name: solid/search -->
                  <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                  </svg>
                </div>
                <input id="search" name="search" class="focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-600 focus:border-blue-600 sm:text-sm block w-full py-2 pl-10 pr-3 leading-5 placeholder-gray-500 bg-white border border-gray-300 rounded-md shadow-sm" placeholder="Search" type="search">
              </div>
            </div>
          </div>
        </div>
        <div class="lg:hidden flex items-center">
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
        <div class="lg:ml-4 lg:flex lg:items-center hidden">
          <p class=" hover:bg-gray-100 p-3 text-sm font-medium text-blue-700 rounded cursor-pointer">Return to cart</p>

          <div class="sm:p-4 sm:border-b-0 flex flex-wrap justify-between hidden px-4 py-2 pb-2 border-b-0 border-gray-200 border-solid">





            <!-- Profile dropdown -->
            <div class=" relative flex-shrink-0 hidden ml-4">
              <div>
                <button type="button" class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex text-sm bg-white rounded-full" id="user-menu" aria-haspopup="true">
                  <span class="sr-only">Open user menu</span>
                  <img class="w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
                </button>
              </div>
              <!--
              Profile dropdown panel, show/hide based on dropdown state.

              Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
              Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
            -->
              <div class="ring-1 ring-black ring-opacity-5 absolute right-0 hidden w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Your Profile</a>
                <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Settings</a>
                <a href="#" class="hover:bg-gray-100 block px-4 py-2 text-sm text-gray-700" role="menuitem">Sign out</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="max-w-7xl sm:px-6 hidden px-4 mx-auto">
        <div class="py-3 border-t border-gray-200">

          <!-- Nav removed from this section JJ -->

        </div>
      </div>

      <!--
      Mobile menu overlay, show/hide based on mobile menu state.

      Entering: "duration-150 ease-out"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "duration-150 ease-in"
        From: "opacity-100"
        To: "opacity-0"
    -->
      <div class="lg:hidden fixed inset-0 z-20 bg-black bg-opacity-25" aria-hidden="true"></div>

      <!--
      Mobile menu, show/hide based on mobile menu state.

      Entering: "duration-150 ease-out"
        From: "opacity-0 scale-95"
        To: "opacity-100 scale-100"
      Leaving: "duration-150 ease-in"
        From: "opacity-100 scale-100"
        To: "opacity-0 scale-95"
    -->
      <div class="max-w-none lg:hidden absolute top-0 right-0 z-30 w-full p-2 transition origin-top transform">
        <div class="ring-1 ring-black ring-opacity-5 bg-white divide-y divide-gray-200 rounded-lg shadow-lg">
          <div class="pt-3 pb-2">
            <div class="flex items-center justify-between px-4">
              <div>
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg" alt="Workflow">
              </div>
              <div class="-mr-2">
                <button type="button" class="hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="px-2 mt-3 space-y-1">
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Dashboard</a>
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Jobs</a>
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Applicants</a>
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Company</a>
            </div>
          </div>
          <div class="pt-4 pb-2">
            <div class="flex items-center px-5">
              <div class="flex-shrink-0">
                <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=256&h=256&q=80" alt="">
              </div>
              <div class="ml-3">
                <div class="text-base font-medium text-gray-800">Whitney Francis</div>
                <div class="text-sm font-medium text-gray-500">whitney@example.com</div>
              </div>
              <button class="hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 flex-shrink-0 p-1 ml-auto text-gray-400 bg-white rounded-full">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
              </button>
            </div>
            <div class="px-2 mt-3 space-y-1">
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Your Profile</a>
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Settings</a>
              <a href="#" class="hover:bg-gray-100 hover:text-gray-800 block px-3 py-2 text-base font-medium text-gray-900 rounded-md">Sign out</a>
            </div>
          </div>
        </div>
      </div>
  </header>

  <main class="py-5">
    <!-- Page header -->
    <div class="hidden">
      <div class="sm:px-6 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl lg:px-8 max-w-3xl px-4 mx-auto">
        <div class="flex items-center space-x-5">
          <div class="flex-shrink-0">
            <div class="relative">
              <img class="w-16 h-16 rounded-full" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
              <span class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></span>
            </div>
          </div>
          <div>
            <h1 class="text-2xl font-bold text-gray-900">Ricardo Cooper</h1>
            <p class="text-sm font-medium text-gray-500">Applied for <a href="#" class="text-gray-900">Front End Developer</a> on <time datetime="2020-08-25">August 25, 2020</time></p>
          </div>
        </div>
        <div class="justify-stretch sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3 flex flex-col-reverse mt-6 space-y-4 space-y-reverse">
          <button type="button" class="hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm">
            Disqualify
          </button>
          <button type="button" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
            Advance to offer
          </button>
        </div>
      </div>
    </div>

    <div class="sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3 grid max-w-3xl grid-cols-1 gap-6 mx-auto mt-8">
      <div class="lg:col-start-1 lg:col-span-2 space-y-6">
        <!-- Description list-->


        <!-- Flights-->
        <section aria-labelledby="notes-title">
          <div class="sm:rounded-lg sm:overflow-hidden bg-white shadow">
            <div class="">
              <div class="sm:px-6 px-4 py-5 border-b border-gray-200">
                <h2 id="notes-title" class="text-lg font-medium text-gray-900">Order Details</h2>
              </div>
              <div class="sm:px-6 px-4 py-6">
                <div class="flex">

                  <!-- flights heading icon END-->

                  <!-- flights content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- flights heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="mb-2 font-medium text-gray-500"><span class="pr-2"><i class="fas fa-plane-departure justify-center text-gray-500 bg-white rounded-md"></i></span>
                            Flights</div>
                        </div>

                      </div>
                      <!-- flights heading END-->

                      <div class="flex">

                        <!-- <div class="inline-flex w-full my-1 border-b border-gray-200"></div> -->
                      </div>
                    </div>

                    <!-- flights details -->

                    <div class="sm:mt-1 flex w-full my-0">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-24 text-sm text-gray-500">01 Feb 2021</div>
                          <div class="inline-block w-24 mr-5 text-sm text-gray-500">10:00 - 12:00</div>
                          <div class="inline-block w-16 pr-1 text-sm text-gray-500 whitespace-no-wrap">09h 55m</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block pl-4 text-sm text-gray-500">Bahrain, BAH<span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                            London, LHR</div>
                        </div>

                      </div>

                    </div>

                    <div class="sm:mt-1 flex w-full my-0">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-24 text-sm font-normal text-gray-500">01 Feb 2021</div>
                          <div class="inline-block w-24 mr-5 text-sm text-gray-500">10:00 - 12:00</div>
                          <div class="inline-block w-16 pr-1 text-sm text-gray-500 whitespace-no-wrap">09h 55m</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block pl-4 text-sm text-gray-500">Bahrain, BAH<span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                            London, LHR</div>
                        </div>

                      </div>

                    </div>

                    <!-- flights details END-->

                  </div>
                  <!-- flights content END-->
                </div>
              </div>
              <div class="sm:px-6 px-4 pb-6">
                <div class="flex">

                  <!-- flights content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- passengers heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="mb-2 font-medium text-gray-500"><span class="pr-2"><i class="fas fa-user-friends justify-center text-gray-500 bg-white rounded-md"></i></span>
                            Passengers</div>
                        </div>

                      </div>
                      <!-- passengers heading END-->


                      <div class="flex">

                        <!-- <div class="inline-flex w-full my-1 border-b border-gray-200"></div> -->
                      </div>
                    </div>

                    <!-- passenger details -->

                    <div class="sm:mt-1 flex w-full my-2">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-40 text-sm text-gray-500">Mr Lawrence Dallagio</div>
                          <div class="pr-14 w-14 inline-block text-sm text-gray-500 whitespace-no-wrap border-b border-gray-400 border-dotted">18.1.1962</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block text-sm text-gray-500"><i class="fas fa-passport justify-center text-sm text-gray-400 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> NZ856431584, exp: 12/2032</span></div>
                        </div>

                      </div>

                    </div>
                    <div class="sm:mt-1 flex w-full my-2">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-40 text-sm text-gray-500">Mr Johnny Wilkinson</div>
                          <div class="pr-14 w-14 inline-block text-sm text-gray-500 whitespace-no-wrap border-b border-gray-400 border-dotted">18.1.1962</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block text-sm text-gray-500"><i class="fas fa-passport justify-center text-sm text-gray-400 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> NZ856431584, exp: 12/2032</span></div>
                        </div>

                      </div>

                    </div>



                    <!-- flights details END-->

                  </div>
                  <!-- flights content END-->
                </div>
              </div>
            </div>

          </div>
        </section>

        <section aria-labelledby="notes-title">
          <div class="sm:rounded-lg sm:overflow-hidden bg-white shadow">
            <div class="divide-y divide-gray-200">
              <div class="sm:px-6 px-4 py-5">
                <h2 id="notes-title" class="text-lg font-medium text-gray-900">Payment</h2>
              </div>
              <div class="sm:px-6 px-4 py-6">

                <div class="sm:col-span-7 col-span-6 border rounded-md">
                  <div class="bg-gray-50 hover:-translate-y-1 hover:shadow-lg flex items-center flex-1 h-16 px-4 py-3 rounded-md cursor-pointer select-none">
                    <div class="flex-1 pl-1 mr-5">
                      <div class="font-medium text-blue-700">Visa <span class="text-sm">•••• 6278</span></div>
                      <div class="text-xs text-gray-600">12/21</div>
                      <!-- <div class="text-sm text-gray-600">200ml</div> -->
                    </div>
                    <div class="flex justify-center w-16">
                      <i class="fa fa-cc-visa justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
                    </div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

                    </label>
                  </div>
                </div>
                <div class="h-2"></div>
                <div class="sm:col-span-7 col-span-6 border rounded-md">
                  <div class="hover:-translate-y-1 hover:shadow-lg bg-gray-50 flex items-center flex-1 h-16 px-4 py-3 rounded-md cursor-pointer select-none" x-data="{usedKeyboard: false}" @keydown.window.tab="usedKeyboard = true" @click="$dispatch('open-addcard', { open: true })" :class="{'focus:outline-none': !usedKeyboard}">
                    <div class="flex-1 pl-1 mr-5">
                      <div class="font-medium text-blue-700">Add a new card</div>
                      <div class="text-xs text-gray-600">Credit card, debit card</div>
                      <!-- <div class="text-sm text-gray-600">200ml</div> -->
                    </div>
                    <div class="flex justify-center w-16">
                      <i class="far fa-credit-card justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
                    </div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

                    </label>
                  </div>
                </div>
                <div class="h-2"></div>
                <div class="sm:col-span-7 col-span-6 border rounded-md">
                  <div class="hover:-translate-y-1 hover:shadow-lg bg-gray-50 flex items-center flex-1 h-16 px-4 py-3 rounded-md cursor-pointer select-none">
                    <div class="flex-1 pl-1 mr-5">
                      <div class="font-medium text-blue-700">PayPal</div>
                      <div class="text-xs text-gray-600"></div>
                      <!-- <div class="text-sm text-gray-600">200ml</div> -->
                    </div>
                    <div class="flex justify-center w-16">
                      <i class="fab fa-paypal justify-center text-2xl text-gray-500 bg-white rounded-md"></i>
                    </div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

                    </label>
                  </div>
                </div>
                <div class="h-2"></div>
                <div class="sm:col-span-7 col-span-6 border rounded-md">
                  <div class="hover:-translate-y-1 hover:shadow-lg bg-gray-50 flex items-center flex-1 h-16 px-4 py-3 rounded-md cursor-pointer select-none">
                    <div class="flex-1 pl-1 mr-5">
                      <div class="font-medium text-blue-700">Google Pay</div>
                      <div class="text-xs text-gray-600"></div>
                      <!-- <div class="text-sm text-gray-600">200ml</div> -->
                    </div>
                    <div class="flex justify-center w-16">
                      <i class="fab fa-google-pay bg-gray-50 justify-center text-3xl text-gray-500 rounded-md"></i>
                    </div>
                    <label class="inline-flex items-center">
                      <input type="radio" class="form-radio w-6 h-6 text-blue-700" name="radio-sizes" value="2">

                    </label>
                  </div>
                </div>

              </div>
            </div>
            <div class="bg-gray-50 sm:px-6 px-4 py-6">
              <div class="flex space-x-3">

                <div class="flex-1 min-w-0">
                  <form action="#">

                    <div class="flex items-center justify-between mt-3">
                      <a href="#" class="group hover:text-gray-900 inline-flex items-start w-2/3 space-x-2 text-sm text-gray-500">
                        <!-- Heroicon name: solid/question-mark-circle -->
                        <input type="checkbox" class="form-checkbox w-6 h-6 border-gray-500 rounded-md">
                        <span>
                          By Clicking Pay now, I confirm that I have read and accept General Terms and Conditions of carriage, website Terms and Privacy statement.
                        </span>
                      </a>
                      <button type="submit" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
                        Pay now - $ 810.00
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
        <div class="sm:rounded-lg sm:px-6 px-4 py-5 bg-white shadow">
          <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Order summary</h2>

          <div class="grid grid-cols-12 gap-1 mt-3">

            <div class="col-span-12 mt-1"></div>

            <div class="col-span-1 pl-1">
              <div class="text-sm text-gray-500">2</div>
            </div>
            <div class="col-span-9">
              <div class="text-sm text-gray-500">Flights - BAH-LHR</div>
            </div>
            <div class="justify-end col-span-2">
              <div class="text-sm text-right text-gray-500">600.00</div>
            </div>

            <div class="col-span-1 pl-1">
              <div class="text-sm text-gray-500">1</div>
            </div>
            <div class="col-span-9">
              <div class="text-sm text-gray-500">Extras</div>
            </div>
            <div class="justify-end col-span-2">
              <div class="text-sm text-right text-gray-500">150.00</div>
            </div>

            <div class="col-span-8">
              <div class="pl-1 text-sm text-left text-gray-500">Subtotal</div>
            </div>
            <div class="justify-end col-span-4">
              <div class="text-sm text-right text-gray-500">750.00</div>
            </div>

            <div class="col-span-8">
              <div class="pl-1 text-sm text-left text-gray-500">Sales Tax</div>
            </div>
            <div class="justify-end col-span-4">
              <div class="text-sm text-right text-gray-500">60.00</div>
            </div>

            <div class="col-span-1"></div>
            <div class="col-span-12 mt-0 border-t border-gray-100"></div>

            <!-- <div class="sm:col-span-1 sm:inline-block hidden"></div> -->
            <div class="pl-1 text-sm font-semibold text-left text-gray-500">Total</div>
            <div class="col-span-3">

            </div>
            <div class="col-span-5">

            </div>
            <div class="justify-end col-span-3">
              <div class="text-sm font-semibold text-right text-gray-500">$ 810.00</div>
            </div>

          </div>

          <div class="justify-stretch flex flex-col hidden mt-6">
            <button type="button" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 inline-flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm">
              Advance to offer
            </button>
          </div>
        </div>
      </section>
    </div>
  </main>
</div>







@stop