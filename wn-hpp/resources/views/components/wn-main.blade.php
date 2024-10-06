<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    @section('title', 'Review & Pay')

    <div x-data="status_x" class="max-w-6xl px-0 mx-auto mt-10 sm:px-6 lg:px-8">

        <header>
            <div class="px-4 pb-0 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold leading-tight tracking-tight text-gray-900">Review and pay</h1>
            </div>


        </header>

        <main>


            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <!-- Your content -->
            </div>

            <div class="max-w-4xl px-4 mx-auto mt-5 sm:px-6 lg:max-w-7xl lg:px-8">
                <h1 class="sr-only">Page title</h1>
                <!-- Main 3 column grid -->
                <div class="grid items-start grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-6">
                    <!-- Left column -->
                    <div class="grid grid-cols-1 gap-6 lg:col-span-2">

                        @if ($bookingSummary)
                            <x-booking-summary />
                        @endif

                        @if ($wnVoucher)
                            <x-wn-credits_and_vouchers />
                        @endif

                        @if ($paymentExpress)
                            <x-payment-express />
                        @endif


                        @if ($paymentComponent === 1)
                            {{-- <x-payment-options /> --}}
                            @livewire('payment-options')
                        @else
                            @livewire('payment-options2')
                        @endif


                    </div>

                    <!-- Right column -->
                    {{-- <x-price-summary /> --}}

                    @if ($summary === 1)
                        <x-order-summary />
                    @else
                        <x-price-summary />
                    @endif

                    {{-- <x-order-summary /> --}}
                    {{-- <x-order-summary_2 /> --}}



                </div>

            </div>

        </main>

    </div>

</div>
