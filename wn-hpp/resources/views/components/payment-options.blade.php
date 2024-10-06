<section aria-labelledby="section-1-title">
    <div class="mx-auto max-w-none">
        <div class="overflow-hidden bg-gray-50 sm:rounded-lg sm:shadow">

            <div class="px-4 py-5 border-b border-gray-200 bg-gray-50 sm:px-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Pay with</h3>
            </div>

            <ul role="list" class="bg-white divide-y divide-gray-200">
                {{-- Credit/Debit card --}}

                <div x-show="cardDisplay">
                    <div :class="cardSelected ? 'bg-gray-50' : 'bg-white'">
                        <li @click.prevent="card_selected()"
                            class="relative flex justify-between px-4 py-5 gap-x-6 hover:bg-gray-50 sm:px-6">

                            <div class="flex min-w-0 gap-x-4">
                                {{-- <img class="flex-none w-12 h-12 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt=""> --}}
                                {{-- <i class="fa-brands fa-paypal" style="color: #304c94;"></i> --}}
                                <img class="flex-none rounded-full w-9 h-9 bg-gray-50"
                                    src="https://images.kiwi.com/booking/paymentMethodIcons/credit_card.svg"
                                    alt="">

                                <div class="self-center flex-auto min-w-0">
                                    <p class="text-sm font-semibold leading-6 text-governor-bay-700">
                                        <a href="#">
                                            <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                            Credit or debit card
                                        </a>
                                    </p>

                                </div>
                            </div>
                            <div class="flex items-center shrink-0 gap-x-4">
                                <div class="hidden sm:flex sm:flex-col sm:items-end">

                                    <div class="flex items-center h-6 ml-3">
                                        {{-- <input id="side-null" name="plan" type="radio" checked class="w-4 h-4 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700"> --}}
                                        <input id="account-savings" x-show="paypalDisplay"
                                            aria-describedby="account-savings-description" name="account" type="radio"
                                            class="w-6 h-6 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700">
                                        <div x-cloak x-show="cardSelected" class="flex items-center h-6 ml-3">
                                            <p class="text-sm font-semibold leading-6 text-governor-bay-700">
                                                <a href="#">
                                                    <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                                    Change
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </div>









                    <div :class="!cardSelected ? 'hidden' : ''" class="px-4 py-5 sm:px-6">

                        <form class="px-0 pb-0 sm:px-0 lg:col-start-1 lg:row-start-1 lg:px-0">

                            <div class="flex justify-between px-1">


                                <div class="font-medium text-gray-900">Saved cards</div>

                                {{-- comment ou this p tag when not needed --}}
                                {{-- <p>split is <span class="font-semibold " x-text="split"></span> </p> --}}

                                {{-- <p> split feature: <span x-text="split_feature"></span> --}}


                                <template {{-- x-data="status_x" --}} x-if="split_feature" class="flex"
                                    Enabled: "bg-governor-bay-600" , Not Enabled: "bg-gray-200" />
                                <div class="flex">
                                    <button type="button"
                                        class="relative inline-flex flex-shrink-0 h-6 mr-3 transition-colors duration-200 ease-in-out bg-gray-200 border-2 border-transparent rounded-full cursor-pointer w-11 focus:outline-none focus:ring-2 focus:ring-governor-bay-600 focus:ring-offset-2"
                                        role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled"
                                        :class="{ 'bg-governor-bay-600': split, 'bg-gray-200': !(split) }"
                                        aria-labelledby="availability-label" aria-describedby="availability-description"
                                        :aria-checked="split.toString()" @click="split = !split">

                                        <span aria-hidden="true"
                                            class="inline-block w-5 h-5 transition duration-200 ease-in-out transform translate-x-0 bg-white rounded-full shadow pointer-events-none ring-0"
                                            x-state:on="Enabled" x-state:off="Not Enabled"
                                            :class="{ 'translate-x-5': split, 'translate-x-0': !(split) }">
                                        </span>

                                    </button>

                                    <div id="split-toggle class="inline-flex text-sm" font-medium text-gray-900">Split
                                    </div>

                                    {{-- <span class="text-gray-500">(Save 10%)</span> --}}
                                </div>

                                </template>

                            </div>


                            <div class="">


                                <section aria-labelledby="payment-heading" class="mt-0">

                                    <fieldset class="mb-5 ">
                                        <legend class="sr-only">Stored cards</legend>
                                        <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-4 sm:gap-x-4">
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->
                                            <label
                                                class="relative flex col-span-3 p-4 rounded-lg shadow-sm cursor-pointer bg-gray-50 focus:outline-none">
                                                <input type="radio" name="project-type" value="Newsletter"
                                                    class="sr-only" aria-labelledby="project-type-0-label"
                                                    aria-describedby="project-type-0-description-0 project-type-0-description-1">
                                                <span class="flex flex-1">
                                                    <span class="flex flex-col self-center">
                                                        <img src="{{ url('/images/ccimage-hilton.png') }}"
                                                            alt="" class="h-8 mr-3 rounded-sm">
                                                    </span>
                                                    <span class="flex flex-col">
                                                        <span id="project-type-0-label"
                                                            class="block text-sm font-medium text-gray-900">Hilton
                                                            Honors card</span>
                                                        <span id="project-type-0-description-0"
                                                            class="flex items-center mt-1 text-sm text-gray-500">Credit
                                                            ••••0149</span>
                                                    </span>
                                                </span>
                                                <!-- Not Checked: "invisible" -->
                                                <svg :class="split ? 'hidden' : ''"
                                                    class="w-5 h-5 text-governor-bay-600" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd" />
                                                </svg>


                                                <span class="absolute border-2 rounded-lg pointer-events-none -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->


                                            <label :class="split ? 'border bg-gray-50' : 'bg-white'"
                                                class="relative flex items-center px-3 py-2 rounded-lg cursor-pointer border-1 focus:outline-none">
                                                <input type="radio" name="project-type" value="Trial Users"
                                                    class="sr-only" aria-labelledby="project-type-2-label"
                                                    aria-describedby="project-type-2-description-0 project-type-2-description-1">
                                                <span class="flex justify-center flex-1">
                                                    <span class="flex flex-col ">

                                                        <span id="project-type-2-label" :class="split ? 'hidden' : ''"
                                                            class="block text-sm font-medium text-gray-900">$2320.00
                                                        </span>

                                                        <div :class="split ? '' : 'hidden'" class="">

                                                            <label for="amount"
                                                                class="block text-xs font-medium text-gray-700">Amount
                                                            </label>
                                                            <div class="mt-1">
                                                                <input type="text" name="amount" id="amount"
                                                                    value="$1160.00" autocomplete="csc"
                                                                    class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700">
                                                            </div>

                                                        </div>

                                                    </span>
                                                </span>

                                                <span
                                                    class="absolute rounded-lg pointer-events-none border-1 -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                        </div>


                                        <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-4 sm:gap-x-4">
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->
                                            <label
                                                class="relative flex col-span-3 p-4 rounded-lg shadow-sm cursor-pointer bg-gray-50 focus:outline-none">
                                                <input type="radio" name="project-type" value="Newsletter"
                                                    class="sr-only" aria-labelledby="project-type-0-label"
                                                    aria-describedby="project-type-0-description-0 project-type-0-description-1">
                                                <span class="flex flex-1">
                                                    <span class="flex flex-col self-center">
                                                        <img src="{{ url('/images/ccimage-bofa.png') }}"
                                                            alt="" class="h-8 mr-3 rounded-sm">
                                                    </span>
                                                    <span class="flex flex-col">

                                                        <span id="project-type-0-label"
                                                            class="block text-sm font-medium text-gray-900">Bank of
                                                            America</span>
                                                        <span id="project-type-0-description-0"
                                                            class="flex items-center mt-1 text-sm text-gray-500">Credit
                                                            ••••6428</span>
                                                    </span>
                                                </span>
                                                <!-- Not Checked: "invisible" -->
                                                {{-- <svg :class="split ? 'hidden' : ''"
                                                    class="w-5 h-5 text-governor-bay-600" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                                                        clip-rule="evenodd" />
                                                </svg> --}}


                                                <span
                                                    class="absolute border-2 rounded-lg pointer-events-none -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->


                                            <label :class="split ? 'border bg-gray-50' : 'bg-white'"
                                                class="relative flex items-center px-3 py-2 rounded-lg cursor-pointer border-1 focus:outline-none">
                                                <input type="radio" name="project-type" value="Trial Users"
                                                    class="sr-only" aria-labelledby="project-type-2-label"
                                                    aria-describedby="project-type-2-description-0 project-type-2-description-1">
                                                <span class="flex justify-center flex-1">
                                                    <span class="flex flex-col ">

                                                        {{-- <span id="project-type-2-label" :class="split ? 'hidden' : ''"
                                                            class="block text-sm font-medium text-gray-900">$2320.00
                                                        </span> --}}

                                                        <div :class="split ? '' : 'hidden'" class="">

                                                            <label for="amount"
                                                                class="block text-xs font-medium text-gray-700">Amount
                                                            </label>
                                                            <div class="mt-1">
                                                                <input type="text" name="amount" id="amount"
                                                                    value="$1160.00" autocomplete="csc"
                                                                    class="block w-full text-sm border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700">
                                                            </div>

                                                        </div>

                                                    </span>
                                                </span>

                                                <span
                                                    class="absolute rounded-lg pointer-events-none border-1 -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                        </div>




                                        {{-- remaining div goes here --}}

                                        <div :class="split ? '' : 'hidden'"
                                            class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-4 sm:gap-x-4">
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->
                                            <label class="relative flex col-span-3 p-2 rounded-lg focus:outline-none">
                                                <input type="radio" name="project-type" value="Newsletter"
                                                    class="sr-only" aria-labelledby="" aria-describedby="">
                                                <span class="flex justify-end flex-1">
                                                    <span class="flex flex-col">
                                                        <span id="project-type-0-label"
                                                            class="block text-sm font-medium text-gray-900">Remaining
                                                        </span>

                                                    </span>
                                                </span>


                                                <span class="absolute rounded-lg pointer-events-none -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->


                                            <label
                                                class="relative flex items-center px-4 bg-white rounded-lg focus:outline-none">
                                                <input type="radio" name="project-type" value="Trial Users"
                                                    class="sr-only" aria-labelledby="project-type-2-label"
                                                    aria-describedby="project-type-2-description-0 project-type-2-description-1">
                                                <span class="flex justify-start flex-1 pl-3">

                                                    <span class="flex flex-col ">

                                                        <span id="project-type-2-label" :class="split ? 'hidden' : ''"
                                                            class="block text-sm font-medium text-gray-900">
                                                        </span>

                                                        <div :class="split ? '' : 'hidden'" class="">

                                                            <label for="amount"
                                                                class="block text-xs font-medium text-gray-700">
                                                            </label>
                                                            <div class="mt-1 text-base">

                                                                <p class="text-sm">$0.00</p>

                                                            </div>

                                                        </div>

                                                    </span>




                                                </span>

                                                <span
                                                    class="absolute rounded-lg pointer-events-none border-1 -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                        </div>





                                        <button @click="addCard_selected()" type="button"
                                            class="mt-4 inline-flex items-center gap-x-1.5 rounded-md bg-white px-0 py-2 text-sm font-semibold text-governor-bay-700 hover:text-bg-governor-bay-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-governor-bay-600">
                                            <div :class="addCardSelected ? 'hidden' : ''" class="-ml-0.5 h-5 w-5">
                                                <i class="fa-regular fa-plus" style="color: #304c94;"></i>
                                            </div>
                                            <div :class="!addCardSelected ? 'hidden' : ''" class="-ml-0.5 h-5 w-5">
                                                <i class="fa-regular fa-minus" style="color: #304c94;"></i>
                                            </div>
                                            Add credit or debit card
                                        </button>


                                        <div :class="!addCardSelected ? 'hidden' : ''"
                                            class="grid grid-cols-1 mt-2 gap-y-6 sm:grid-cols-4 sm:gap-x-4">
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->
                                            <label
                                                class="relative flex col-span-3 p-6 rounded-lg shadow-sm cursor-pointer bg-gray-50 focus:outline-none">
                                                <input type="radio" name="project-type" value="Newsletter"
                                                    class="sr-only" aria-labelledby="project-type-0-label"
                                                    aria-describedby="project-type-0-description-0 project-type-0-description-1">

                                                <span class="flex flex-1">
                                                    <span class="flex flex-col w-full">

                                                        <div class="grid grid-cols-4 mt-0 gap-x-4 gap-y-6 sm:grid-cols-4"
                                                            :class="!addCardSelected ? 'hidden' : ''">

                                                            <div class="flex justify-between col-span-4 sm:col-span-4">

                                                                <div class="mt-0">
                                                                    <h3
                                                                        class="text-lg font-semibold leading-6 text-gray-900">
                                                                        Card details</h3>
                                                                    <p
                                                                        class="max-w-2xl mt-1 text-sm font-medium text-gray-500">
                                                                        Please provide your card information.</p>
                                                                </div>


                                                                <div class="justify-end hidden sm:flex">

                                                                    <dl class="grid grid-cols-1 gap-0">
                                                                        <div class="overflow-hidden bg-gray-50">
                                                                            <img src="{{ url('/images/cards2.png') }}"
                                                                                alt=""
                                                                                class="contrast-50 grayscale w-36">
                                                                        </div>

                                                                        <!-- <div class="px-2 py-5 overflow-hidden bg-white">
                    <img src="{{ url('/images/mastercard.png') }}" alt="" class="h-5">
                  </div>

                  <div class="px-2 py-5 overflow-hidden bg-white">
                    <img src="{{ url('/images/amex.png') }}" alt="" class="w-10">
                  </div> -->
                                                                    </dl>
                                                                </div>

                                                            </div>



                                                            <div class="col-span-4 sm:col-span-4">
                                                                <label for="name-on-card"
                                                                    class="block text-sm font-medium text-gray-700">Name
                                                                    on card</label>
                                                                <div class="mt-1">
                                                                    <input type="text" id="name-on-card"
                                                                        name="name-on-card" autocomplete="cc-name"
                                                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700 sm:text-sm">
                                                                </div>
                                                            </div>

                                                            <div class="col-span-4 sm:col-span-4">
                                                                <label for="card-number"
                                                                    class="block text-sm font-medium text-gray-700">Card
                                                                    number</label>
                                                                <div class="mt-1">
                                                                    <input type="text" id="card-number"
                                                                        name="card-number" autocomplete="cc-number"
                                                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700 sm:text-sm">
                                                                </div>
                                                            </div>

                                                            <div class="col-span-2">
                                                                <label for="expiration-date"
                                                                    class="block text-sm font-medium text-gray-700">Expiration
                                                                    date (MM/YY)</label>
                                                                <div class="mt-1">
                                                                    <input type="text" name="expiration-date"
                                                                        id="expiration-date" autocomplete="cc-exp"
                                                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700 sm:text-sm">
                                                                </div>
                                                            </div>

                                                            <div class="col-span-2">
                                                                <label for="cvc"
                                                                    class="block text-sm font-medium text-gray-700">Security
                                                                    code</label>
                                                                <div class="mt-1">
                                                                    <input type="text" name="cvc"
                                                                        id="cvc" autocomplete="csc"
                                                                        class="block w-full border-gray-300 rounded-md shadow-sm focus:border-governor-bay-700 focus:ring-governor-bay-700 sm:text-sm">
                                                                </div>
                                                            </div>

                                                            <fieldset class="col-span-2 mb-2 sm:col-span-4">


                                                                <div class="relative pt-2 rounded-md bg-gray-50 ">
                                                                    <!-- Checked: "z-10 border-bay-of-many-200 bg-bay-of-many-50", Not Checked: "border-gray-200" -->
                                                                    <label
                                                                        class="relative flex flex-col p-3 bg-white border rounded-md cursor-pointer focus:outline-none md:grid md:grid-cols-1 md:pl-4 md:pr-6">
                                                                        <span class="flex items-center text-sm">
                                                                            <input type="checkbox"
                                                                                class="w-4 h-4 border-gray-300 text-bay-of-many-600 focus:ring-bay-of-many-600 active:ring-2 active:ring-offset-2 active:ring-bay-of-many-600"
                                                                                aria-labelledby="pricing-plans-0-label"
                                                                                aria-describedby="">
                                                                            <!-- Checked: "text-bay-of-many-900", Not Checked: "text-gray-900" -->
                                                                            <span id="pricing-plans-0-label"
                                                                                class="ml-5 font-medium">Save
                                                                                card</span>
                                                                        </span>

                                                                    </label>

                                                                </div>

                                                            </fieldset>
                                                        </div>
                                                    </span>
                                                </span>
                                                <!-- Not Checked: "invisible" -->


                                                <span
                                                    class="absolute border-2 rounded-lg pointer-events-none -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                            <!-- Active: "border-governor-bay-600 ring-2 ring-governor-bay-600", Not Active: "border-gray-300" -->


                                            <label
                                                class="relative flex items-center hidden p-4 bg-white rounded-lg cursor-pointer border-1 focus:outline-none">
                                                <input type="radio" name="project-type" value="Trial Users"
                                                    class="sr-only" aria-labelledby="project-type-2-label"
                                                    aria-describedby="project-type-2-description-0 project-type-2-description-1">
                                                <span class="flex justify-center flex-1">
                                                    <span class="flex flex-col ">
                                                        <span id="project-type-2-label"
                                                            class="block text-sm font-medium text-gray-900">$2320.00</span>

                                                    </span>
                                                </span>

                                                <span
                                                    class="absolute rounded-lg pointer-events-none border-1 -inset-px"
                                                    aria-hidden="true"></span>
                                            </label>
                                        </div>

                                </section>

                            </div>



                            <div class="relative pt-5 -space-y-px bg-white rounded-md ">
                                <!-- Checked: "z-10 border-bay-of-many-200 bg-bay-of-many-50", Not Checked: "border-gray-200" -->
                                <label
                                    class="relative flex flex-col p-3 pl-4 bg-white border rounded-md cursor-pointer focus:outline-none ">
                                    <span class="flex items-center text-sm">
                                        <input type="checkbox" name="pricing-plan" value="Startup"
                                            class="w-4 h-4 border-gray-300 text-bay-of-many-600 focus:ring-bay-of-many-600 active:ring-2 active:ring-offset-2 active:ring-bay-of-many-600"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-bay-of-many-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label" class="ml-5 text-xs font-medium">I have read
                                            and
                                            accept the Terms & Conditions, Southwest Airlines
                                            Guarantee rules, Refund & Cancellation Policy, and
                                            Privacy Policy, as well as the conditions of the
                                            carriers in my booking, and I acknowledge I can’t
                                            withdraw from this service agreement due to its
                                            immediate performance.</span>
                                    </span>

                                </label>

                            </div>

                            <div class="flex items-center mt-6 gap-x-6">

                                <div class="justify-between w-full pt-2 sm:flex sm:items-center">
                                    <button type="submit"
                                        class="w-full px-2 py-3 text-sm font-medium text-white border border-transparent rounded-md shadow-sm sm:ml-4 bg-governor-bay-600 hover:bg-governor-bay-700 focus:outline-none focus:ring-2 focus:ring-governor-bay-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:order-last sm:w-auto md:px-4">Pay
                                        $2320.00<span
                                            class="pl-1 text-xs font-light text-gray-200">(USD)</span></button>
                                    <div class="relative pl-6">
                                        <dt class="inline font-semibold text-gray-900">
                                            <svg class="absolute w-4 h-4 text-governor-bay-600 left-1 top-1"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                                    clip-rule="evenodd" />
                                            </svg>

                                        </dt>
                                        <dd class="inline text-xs">We keep your data safe with the
                                            latest payment encryption methods.</dd>
                                    </div>

                                </div>

                                {{-- <button type="submit"
                                    class="px-10 py-3 text-sm font-semibold text-white rounded-md shadow-sm bg-governor-bay-600 hover:bg-governor-bay-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-governor-bay-600">Pay
                                    $2320.00 <span
                                        class="font-light text-gray-200">(USD)</span></button> --}}
                            </div>

                        </form>

                    </div>


                </div>

                {{-- PayPal section --}}
                <div x-show="paypalDisplay">
                    <div :class="paypalSelected ? 'bg-gray-50' : 'bg-white'">
                        <li @click.prevent="paypal_selected()"
                            class="relative flex justify-between px-4 py-5 gap-x-6 hover:bg-gray-50 sm:px-6">

                            <div class="flex min-w-0 gap-x-4">
                                {{-- <img class="flex-none w-12 h-12 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt=""> --}}
                                {{-- <i class="fa-brands fa-paypal" style="color: #304c94;"></i> --}}
                                <img class="flex-none rounded-full w-9 h-9 bg-gray-50"
                                    src="https://images.kiwi.com/booking/paymentMethodIcons/paypal.svg"
                                    alt="">

                                <div class="self-center flex-auto min-w-0">
                                    <p class="text-sm font-semibold leading-6 text-governor-bay-700">
                                        <a href="#">
                                            <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                            PayPal
                                        </a>
                                    </p>

                                </div>
                            </div>
                            <div class="flex items-center shrink-0 gap-x-4">
                                <div class="hidden sm:flex sm:flex-col sm:items-end">

                                    <div class="flex items-center h-6 ml-3">
                                        {{-- <input id="side-null" name="plan" type="radio" checked class="w-4 h-4 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700"> --}}
                                        <input id="account-savings" x-show="!paypalSelected"
                                            aria-describedby="account-savings-description" name="account"
                                            type="radio"
                                            class="w-6 h-6 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700">
                                        <div x-cloak x-show="paypalSelected" class="flex items-center h-6 ml-3">
                                            <p class="text-sm font-semibold leading-6 text-governor-bay-700">
                                                <a href="#">
                                                    <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                                    Change
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </li>
                    </div>









                    <div :class="!paypalSelected ? 'hidden' : ''" class="px-4 py-5 sm:px-6">

                        <form class="px-0 pb-0 sm:px-0 lg:col-start-1 lg:row-start-1 lg:px-0">







                            <div class="relative pt-0 -space-y-px bg-white rounded-md ">
                                <!-- Checked: "z-10 border-bay-of-many-200 bg-bay-of-many-50", Not Checked: "border-gray-200" -->
                                <label
                                    class="relative flex flex-col p-3 pl-4 bg-white border rounded-md cursor-pointer focus:outline-none ">
                                    <span class="flex items-center text-sm">
                                        <input type="checkbox" name="pricing-plan" value="Startup"
                                            class="w-4 h-4 border-gray-300 text-bay-of-many-600 focus:ring-bay-of-many-600 active:ring-2 active:ring-offset-2 active:ring-bay-of-many-600"
                                            aria-labelledby="pricing-plans-0-label"
                                            aria-describedby="pricing-plans-0-description-0 pricing-plans-0-description-1">
                                        <!-- Checked: "text-bay-of-many-900", Not Checked: "text-gray-900" -->
                                        <span id="pricing-plans-0-label" class="ml-5 text-xs font-medium">I have read
                                            and
                                            accept the Terms & Conditions, Southwest Airlines
                                            Guarantee rules, Refund & Cancellation Policy, and
                                            Privacy Policy, as well as the conditions of the
                                            carriers in my booking, and I acknowledge I can’t
                                            withdraw from this service agreement due to its
                                            immediate performance.</span>
                                    </span>

                                </label>

                            </div>

                            <div class="flex items-center justify-end mt-0 gap-x-6">

                                {{-- <button type="submit"
                                    class="px-10 py-3 text-sm font-semibold text-white rounded-md shadow-sm bg-governor-bay-600 hover:bg-governor-bay-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-governor-bay-600">Pay
                                    $2320.00 <span
                                        class="font-light text-gray-200">(USD)</span></button> --}}


                                <!-- PayPal Logo -->
                                <table border="0" cellpadding="10" cellspacing="0" align="right">
                                    <tr>
                                        <td align="center"></td>
                                    </tr>
                                    <tr>
                                        <td align="center"><a
                                                href="https://www.paypal.com/c2/webapps/mpp/home?locale.x=en_C2"
                                                title="PayPal"
                                                onclick="javascript:window.open('https://www.paypal.com/c2/webapps/mpp/home?locale.x=en_C2','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img
                                                    src="https://www.paypalobjects.com/digitalassets/c/website/marketing/apac/C2/logos-buttons/optimize/44_Yellow_PayPal_Pill_Button.png"
                                                    alt="PayPal" /></a></td>
                                    </tr>
                                </table><!-- PayPal Logo -->







                            </div>

                        </form>



                    </div>


                </div>

                <div x-show="gpayDisplay"
                    class="relative flex justify-between px-4 py-5 gap-x-6 hover:bg-gray-50 sm:px-6">
                    <div class="flex min-w-0 gap-x-4">
                        {{-- <img class="flex-none w-12 h-12 rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt=""> --}}
                        {{-- <i class="fa-brands fa-paypal" style="color: #304c94;"></i> --}}
                        <img class="flex-none w-5 h-5 rounded-full bg-gray-50" {{-- src="{{url('/images/google-pay-mark_800.svg')}}" --}}
                            src="{{ url('/images/gpay.png') }}" alt="">

                        <div class="self-center flex-auto min-w-0 ml-4">
                            <p class="text-sm font-semibold leading-6 text-governor-bay-700">
                                <a href="#">
                                    <span class="absolute inset-x-0 bottom-0 -top-px"></span>
                                    Google Pay
                                </a>
                            </p>

                        </div>
                    </div>
                    <div class="flex items-center shrink-0 gap-x-4">
                        <div class="hidden sm:flex sm:flex-col sm:items-end">

                            <div class="flex items-center h-6 ml-3">
                                {{-- <input id="side-null" name="plan" type="radio" checked class="w-4 h-4 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700"> --}}
                                <input id="account-savings" aria-describedby="account-savings-description"
                                    name="account" type="radio"
                                    class="w-6 h-6 border-gray-300 text-governor-bay-700 focus:ring-governor-bay-700">
                            </div>
                        </div>
                    </div>


                </div>

</section>
