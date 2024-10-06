<div class="max-w-4xl mx-auto">
  {{-- Because she competes with no one, no one can compete with her. --}}

  <div class="items-center justify-center w-full">

    <div class="sm:p-5">



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
      <div class="sm:mt-0 sm:block hidden mt-0">

        <!-- booking confirmation
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="bg-green-50 p-4 mb-4 rounded-md">
          <div class="flex">
            <div class="flex-shrink-0">
              <!-- Heroicon name: solid/check-circle -->
              <svg class="w-5 h-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
              </svg>
            </div>
            <div class="ml-3">
              <h3 class="text-sm font-medium text-green-800">
                Order complete
              </h3>
              <div class="my-2 text-sm text-green-700">
                <p>
                  You're all set. If you would like to add extras or amend your booking, please select 'Manage your Booking' from our homepage.
                  Thanks for booking with us!
                </p>
              </div>
              <!-- <div class="mt-4">
                <div class="-mx-2 -my-1.5 flex">
                  <button type="button" class="bg-green-50 px-2 py-1.5 rounded-md text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                    View status
                  </button>
                  <button type="button" class="ml-3 bg-green-50 px-2 py-1.5 rounded-md text-sm font-medium text-green-800 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-green-50 focus:ring-green-600">
                    Dismiss
                  </button>
                </div>
              </div> -->
            </div>
          </div>
        </div>



        <div class="md:grid md:grid-cols-3 md:gap-6">
          <div class="md:col-span-1">
            <div class="sm:px-0 px-0">
              <h3 class="text-lg font-medium leading-6 text-gray-900">{{ $txt_booking_details }}</h3>
              <p class="mt-1 text-sm text-gray-600">
                {{ $txt_review_booking }}
              </p>
            </div>
          </div>

          <!-- flight detail section -->
          <div class="md:mt-0 md:col-span-2 mt-5">

            <!-- flight panel new -->
            <div class="overflow-hidden rounded-md shadow">
              <div class="sm:p-6 px-6 py-5 bg-white">
                <div class="flex">
                  <!-- flights heading icon -->
                  <div class="sm:inline-block sm:align-top hidden w-1/12 h-full">

                    <div class="font-medium text-gray-500"><i class="fas fa-plane-departure justify-center text-lg text-gray-400 bg-white rounded-md"></i>
                    </div>

                  </div>
                  <!-- flights heading icon END-->

                  <!-- flights content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- flights heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="font-medium text-gray-500">{{ $txt_flights }}</div>
                        </div>

                      </div>
                      <!-- flights heading END-->


                      <div class="flex">

                        <div class="inline-flex w-full my-1 border-b border-gray-200"></div>
                      </div>
                    </div>




                    <!-- flights details -->

                    @foreach ($order_json['legs'] as $leg)

                    <div class="sm:mt-1 flex w-full my-2">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-24 text-xs font-semibold text-gray-500">{{ \Carbon\Carbon::parse($leg['departureDate'])->format('d M Y')}} </div>
                          <div class="inline-block w-20 mr-5 text-xs text-gray-500">{{ substr($leg['departureTime'],0,5) }} - {{ substr($leg['arrivalTime'],0,5) }}</div>
                          <div class="inline-block w-20 pr-1 text-xs text-gray-500 whitespace-no-wrap">{{ substr($leg['duration'],0,2) }}h {{ substr($leg['duration'],3,2) }}m</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block text-xs text-gray-500">{{ $leg['originLocationName'] }}, {{ $leg['originLocationCode'] }} <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                            {{ $leg['destinationLocationName'] }}, {{ $leg['destinationLocationCode'] }}</div>
                        </div>

                      </div>

                    </div>

                    @endforeach

                    <!-- flights details END-->

                  </div>
                  <!-- flights content END-->
                </div>

              </div>

            </div>
            <div class="h-3"></div>

            <!-- pax panel new -->
            <div class="overflow-hidden rounded-md shadow">
              <div class="sm:p-6 px-6 py-5 bg-white">
                <div class="flex">
                  <!-- flights heading icon -->
                  <div class="sm:inline-block sm:align-top hidden w-1/12 h-full">

                    <div class="font-medium text-gray-500"><i class="fas fa-user-friends justify-center text-lg text-gray-400 bg-white rounded-md"></i>
                    </div>

                  </div>
                  <!-- passengers heading icon END-->

                  <!-- passengers content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- passengers heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="font-medium text-gray-500">{{ $txt_passengers }}</div>
                        </div>

                      </div>
                      <!-- passengers heading END-->


                      <div class="flex">

                        <div class="inline-flex w-full my-1 border-b border-gray-200"></div>
                      </div>
                    </div>




                    @foreach ($order_json['travellers'] as $traveller)
                    <div class="sm:mt-1 flex w-full my-2">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-40 text-xs font-semibold text-gray-500">{{ $traveller['travelerTitle'] }} {{ $traveller['travelerFirstName'] }} {{ $traveller['travelerLastName'] }}</div>
                          <div class="pr-14 w-14 inline-block text-xs text-gray-500 whitespace-no-wrap border-b border-gray-400 border-dotted">{{$traveller['travelerBirthDay']}}.{{$traveller['travelerBirthMonth']}}.{{$traveller['travelerBirthYear']}}</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block text-xs text-gray-500"><i class="fas fa-passport justify-center text-xs text-gray-400 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> {{ $traveller['travelerDocsNumber'] }}, exp: {{ $traveller['travelerDocsMonth'] }}/{{ $traveller['travelerDocsYear'] }}</span></div>
                        </div>

                      </div>

                    </div>
                    @endforeach




                    <!-- flights details END-->

                  </div>
                  <!-- passengers content END-->
                </div>

              </div>

            </div>
            <div class="h-3"></div>





          </div>

        </div>

      </div>




          <!-- payment options section -->
              <!-- not needed for confirmation -->


        </div>
      </div>

      

    </div>

    </form>



    <!-- modal below here -->

    <!-- The menu can be opened from anywhere by dispatching an event -->

    <!-- view Booking details slide out below here -->

    <section x-data="slideout()" x-cloak @open-menu.window="open = $event.detail.open" @keydown.window.tab="usedKeyboard = true" @keydown.escape="open = false" x-init="init()">
      <div x-show.transition.opacity.duration.500="open" @click="open = false" class="fixed inset-0 bg-black bg-opacity-25"></div>
      <div class="fixed top-0 right-0 w-full h-screen max-w-sm overflow-y-scroll transition duration-500 transform bg-gray-100" :class="{'translate-x-full': !open}">
        <button @click="open = false" x-ref="closeButton" :class="{'focus:outline-none': !usedKeyboard}" class="absolute top-0 right-0 mt-3 mr-3">

          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>

        </button>
        <div class="h-full">

          <!-- new slide out details -->

          <div class="md:mt-0 md:col-span-2 mt-0 -mx-1">

            <title class="h-14 flex w-full px-5 py-4 font-semibold text-white bg-gray-500">{{ __('lang.payment_screen_title') }}</title>


            <!-- flight panel new -->
            <div class="md:col-span-2 mt-0">

              <!-- flight panel new -->
              <div class="overflow-hidden rounded-md shadow">
                <div class="sm:p-6 px-6 py-5 bg-white">
                  <div class="flex">
                    <!-- flights heading icon -->
                    <div class="sm:inline-block sm:align-top hidden w-1/12 h-full">

                      <div class="font-medium text-gray-500"><i class="fas fa-plane-departure justify-center text-lg text-gray-400 bg-white rounded-md"></i>
                      </div>

                    </div>
                    <!-- flights heading icon END-->

                    <!-- flights content -->
                    <div class="sm:ml-2 sm:inline-block w-full">
                      <div class="inline-block w-full">

                        <!-- flights heading -->
                        <div class="flex">

                          <div class="sm:w-11/12 inline-flex w-full">

                            <div class="font-medium text-gray-500">{{ __('lang.txt_flights') }}</div>
                          </div>

                        </div>
                        <!-- flights heading END-->


                        <div class="flex">

                          <div class="inline-flex w-full my-1 border-b border-gray-200"></div>
                        </div>
                      </div>


                      <!-- flights details -->

                      @foreach ($order_json['legs'] as $leg)

                      <div class="sm:mt-1 flex w-full my-2">

                        <div class="sm:flex sm:flex-wrap">

                          <div class="flex flex-no-wrap w-64">
                            <div class="inline-block w-24 text-xs font-semibold text-gray-500">{{ \Carbon\Carbon::parse($leg['departureDate'])->format('d M Y')}} </div>
                            <div class="inline-block w-20 mr-5 text-xs text-gray-500">{{ substr($leg['departureTime'],0,5) }} - {{ substr($leg['arrivalTime'],0,5) }}</div>
                            <div class="inline-block w-20 pr-1 text-xs text-gray-500 whitespace-no-wrap">{{ substr($leg['duration'],0,2) }}h {{ substr($leg['duration'],3,2) }}m</div>
                          </div>

                          <div class="flex-nowrap flex">

                            <div class="flex-nowrap inline-block text-xs text-gray-500">{{ $leg['originLocationName'] }}, {{ $leg['originLocationCode'] }} <span><i class="fa fa-long-arrow-right sm:mt-0 justify-center mx-1 mt-1 text-gray-400 bg-white rounded-md"></i></span>
                              {{ $leg['destinationLocationName'] }}, {{ $leg['destinationLocationCode'] }}</div>
                          </div>

                        </div>

                      </div>

                      @endforeach

                      <!-- flights details END-->



                    </div>
                    <!-- flights details END-->

                  </div>
                  <!-- flights content END-->
                </div>

              </div>

            </div>
            <div class="h-3"></div>

            <!-- pax panel new -->
            <div class="overflow-hidden rounded-md shadow">
              <div class="sm:p-6 px-6 py-5 bg-white">
                <div class="flex">
                  <!-- flights heading icon -->
                  <div class="sm:inline-block sm:align-top hidden w-1/12 h-full">

                    <div class="font-medium text-gray-500"><i class="fas fa-user-friends justify-center text-lg text-gray-400 bg-white rounded-md"></i>
                    </div>

                  </div>
                  <!-- passengers heading icon END-->

                  <!-- passengers content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- passengers heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="font-medium text-gray-500">{{ __('lang.txt_passengers') }}</div>
                        </div>

                      </div>
                      <!-- passengers heading END-->


                      <div class="flex">

                        <div class="inline-flex w-full my-1 border-b border-gray-200"></div>
                      </div>
                    </div>

                    @foreach ($order_json['travellers'] as $traveller)
                    <div class="sm:mt-1 flex w-full my-2">

                      <div class="sm:flex sm:flex-wrap">

                        <div class="flex flex-no-wrap w-64">
                          <div class="inline-block w-40 text-xs font-semibold text-gray-500">{{ $traveller['travelerTitle'] }} {{ $traveller['travelerFirstName'] }} {{ $traveller['travelerLastName'] }}</div>
                          <div class="pr-14 w-14 inline-block text-xs text-gray-500 whitespace-no-wrap border-b border-gray-400 border-dotted">{{$traveller['travelerBirthDay']}}.{{$traveller['travelerBirthMonth']}}.{{$traveller['travelerBirthYear']}}</div>
                        </div>

                        <div class="flex-nowrap flex">

                          <div class="flex-nowrap inline-block text-xs text-gray-500"><i class="fas fa-passport justify-center text-xs text-gray-400 bg-white rounded-md"></i> <span class="ml-1 border-b border-gray-400 border-dotted"> {{ $traveller['travelerDocsNumber'] }}, exp: {{ $traveller['travelerDocsMonth'] }}/{{ $traveller['travelerDocsYear'] }}</span></div>
                        </div>

                      </div>

                    </div>
                    @endforeach



                    <!-- flights details END-->

                  </div>
                  <!-- passengers content END-->
                </div>

              </div>

            </div>
            <div class="h-3"></div>


            <!-- price breakdown panel new -->
            <div class="overflow-hidden rounded-md shadow">
              <div class="sm:p-6 px-6 py-5 bg-white">
                <div class="flex">
                  <!-- price breakdown heading icon -->
                  <div class="sm:inline-block sm:align-top hidden w-1/12 h-full">

                    <div class="font-medium text-gray-500"><i class="fas fa-money-bill-wave-alt justify-center text-lg text-gray-400 bg-white rounded-md"></i>
                    </div>

                  </div>
                  <!-- price breakdown heading icon END-->

                  <!-- price breakdown content -->
                  <div class="sm:ml-2 sm:inline-block w-full">
                    <div class="inline-block w-full">

                      <!-- price breakdown heading -->
                      <div class="flex">

                        <div class="sm:w-11/12 inline-flex w-full">

                          <div class="font-medium text-gray-500">{{ __('lang.payment_screen_title') }}</div>
                        </div>

                      </div>
                      <!-- price breakdown heading END-->


                      <div class="flex">

                        <div class="inline-flex w-full my-1 border-b border-gray-200"></div>
                      </div>
                    </div>


                    <div class="grid grid-cols-12 gap-1">


                      @foreach ($order_json['products'] as $product)
                      <div class="col-span-12 mt-1"></div>

                      <div class="col-span-1 pl-1">
                        <div class="text-xs text-gray-500">{{ $product['quantity'] }}</div>
                      </div>
                      <div class="col-span-9">
                        <div class="text-xs text-gray-500">{{ $product['productName'] }}</div>
                      </div>
                      <div class="justify-end col-span-2">
                        <div class="text-xs text-right text-gray-500">{{ $product['priceSymbol'] }} {{ $product['priceValue'] }}</div>
                      </div>
                      @endforeach


                      <div class="col-span-1"></div>
                      <div class="col-span-12 mt-0 border-t border-gray-100"></div>

                      <div class="sm:col-span-1 sm:inline-block hidden"></div>
                      <div class="pl-1 text-sm font-semibold text-left text-gray-500">{{ $txt_total }}</div>
                      <div class="col-span-3">

                      </div>
                      <div class="col-span-5">
                        
                      </div>
                      <div class="justify-end col-span-3">
                        <div class="text-sm font-semibold text-right text-gray-500">{{ $order_json['Symbol'] }} {{ $order_json['Amount'] }}</div>
                      </div>


                    </div>
                    <!-- price breakdown details END-->

                  </div>
                  <!-- price breakdown content END-->
                </div>

              </div>

            </div>
            <div class="h-3"></div>

          </div>




          <!-- new slide out details END -->



        </div>

      </div>
  </div>
  </section>

  <!-- view booking details slide END -->


  <!-- add Card modal below here -->

  <section x-data="slideout()" x-cloak @open-addcard.window="open = $event.detail.open" @keydown.window.tab="usedKeyboard = true" @keydown.escape="open = false" x-init="init()">
    <div x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" @click="open = false" class="fixed inset-0 bg-black bg-opacity-25">
      <div class="fixed top-0 left-0 right-0 w-full h-screen overflow-y-scroll transition transform bg-gray-100" :class="{'translate-y-full': !open}">
        <button @click="open = false" x-ref="closeButton" :class="{'focus:outline-none': !usedKeyboard}" class="absolute top-0 right-0 mt-3 mr-3">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
            <line x1="18" y1="6" x2="6" y2="18"></line>
            <line x1="6" y1="6" x2="18" y2="18"></line>
          </svg>
        </button>
        <div class="h-full">
          <title class="h-14 flex w-full px-5 py-4 font-semibold text-white bg-gray-500">{{ __('lang.txt_add_new_card') }}</title>
          <div class="max-w-4xl pb-5 mx-auto">
            <div class=" m-3">
              <div class="mt-5">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1 mt-5">
                    <div class="sm:px-0 px-0">
                      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('lang.txt_card details') }}</h3>
                      <p class="mt-1 text-sm text-gray-600">
                        {{ __('lang.txt_fields_marked_with_*') }}
                      </p>
                    </div>
                  </div>


                  <div class="md:col-span-2 mt-5">
                    <form action="#" method="POST">
                      <div class="overflow-hidden rounded-md shadow">
                        <div class="sm:p-6 px-4 py-5 bg-white">
                          <div class="grid grid-cols-6 gap-6">
                            <div class="sm:col-span-4 col-span-6">
                              <label for="first_name" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_card_number') }}
                                *</label>
                              <input type="text" id="first_name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-2 col-span-6">
                              <label for="last_name" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_card_expiry') }}
                                *</label>
                              <input type="text" id="last_name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-2 col-span-3">
                              <label for="cvv" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_cvv') }} *</label>
                              <input type="text" id="email_address" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-2 col-span-3">
                              <div class="h-5"></div>
                              <p type="text" id="ccv_tool_tip" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full h-8 mt-1 -m-5 text-sm font-semibold text-blue-600 border-0 rounded-md">
                                <span><i class="fas fa-info-circle justify-center pr-1 text-lg text-blue-500 bg-white rounded-md"></i>
                                </span>{{ __('lang.txt_what_this') }}</p>
                            </div>


                            <div class="sm:col-span-4 col-span-6">
                              <label for="street_address" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_card_holder_name') }} *</label>
                              <input type="text" id="street_address" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>


                </div>
              </div>

              <div class="sm:mt-0 mt-10">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                  <div class="md:col-span-1">
                    <div class="sm:px-0 px-0 mt-10">
                      <h3 class="text-lg font-medium leading-6 text-gray-900">{{ __('lang.txt_billing_add') }}</h3>
                      <p class="mt-1 text-sm text-gray-600">
                        {{ __('lang.txt_fields_marked_with_*') }}
                      </p>
                    </div>
                  </div>
                  <div class="md:mt-10 md:col-span-2 mt-5">
                    <form action="#" method="POST">
                      <div class="overflow-hidden rounded-md shadow">
                        <div class="sm:p-6 px-4 py-5 bg-white">
                          <div class="grid grid-cols-6 gap-6">
                            <div class="sm:col-span-3 col-span-6">
                              <label for="first_name" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_billing_add_1') }} *</label>
                              <input type="text" id="first_name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-3 col-span-6">
                              <label for="last_name" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_billing_add_2') }}</label>
                              <input type="text" id="last_name" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-3 col-span-6">
                              <label for="email_address" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_billing_city') }} *</label>
                              <input type="text" id="email_address" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-2 col-span-6">
                              <label for="email_address" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_zip') }} *</label>
                              <input type="text" id="zip_code" class="focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full mt-1 border-gray-300 rounded-md">
                            </div>

                            <div class="sm:col-span-3 col-span-6">
                              <label for="country" class="block text-sm font-medium text-gray-700">{{ __('lang.txt_billing_add_country') }} *</label>
                              <select id="country" class="focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm block w-full px-3 py-2 mt-1 bg-white border border-gray-300 rounded-md shadow-sm">
                                <option>United States</option>
                                <option>Canada</option>
                                <option>Mexico</option>
                              </select>
                            </div>

                          </div>
                        </div>


                      </div>
                      <button type="submit" class="hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 justify-center float-right px-8 py-2 my-10 text-sm font-medium text-white bg-blue-500 border border-transparent rounded-md shadow-sm">
                        {{ __('lang.txt_save') }}
                      </button>



                  </div>

                  </form>
                </div>
              </div>
            </div>










          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- view booking details slide END -->










  <!-- Dev tools -->
  <!-- <div id="alpine-devtools" x-data="devtools('left')" x-show="alpines.length" x-init="start()">
  </div> -->