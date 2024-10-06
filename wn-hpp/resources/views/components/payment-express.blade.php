<div class="mt-2">
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <div class="justify-center flex-auto h-20 px-4 py-5 mx-auto rounded-md sm:px-6 ring-1 ring-inset ring-gray-200">

        <div class="flex justify-center px-2 -mt-8">
            <h2 class="px-2 text-sm font-medium text-gray-500 bg-white">Express checkout</h2>
        </div>

        <div class="flex items-center justify-center m-3">

            <button type="button"
                class="mx-3 inline-flex items-center gap-x-2 rounded-md bg-yellow-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <div class="inline-flex mx-6">
                    <img src="{{ url('/images/PayPal_btn_logo.svg') }}" alt="" class="h-5 pr-1 rounded-sm">
                    <img src="{{ url('/images/PayPal_btn.svg') }}" alt="" class="h-5 rounded-sm">
                </div>
            </button>

            <button type="button"
                class="mx-3 inline-flex items-center gap-x-2 rounded-md  bg-black px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-800 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

                <div class="inline-flex mx-10">
                    <img src="{{ url('https://www.gstatic.com/instantbuy/svg/dark_gpay.svg') }}" alt=""
                        class="h-5 pr-1 rounded-sm">
                    <img src="" alt="" class="h-5 rounded-sm">
                </div>

            </button>

            <button type="button"
                class="mx-3 inline-flex items-center gap-x-2 rounded-md bg-yellow-300 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-yellow-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">

                <div class="inline-flex mx-6">
                    <img src="{{ url('/images/Amazon_Pay_logo.svg') }}" alt="" class="h-5 pt-1 pr-1 rounded-sm">
                    {{-- <img src="{{ url('/images/PayPal_btn.svg') }}" alt="" class="h-5 rounded-sm"> --}}
                </div>

            </button>


        </div>

    </div>

    <div class="my-6"></div>




    <div class="relative mt-6">


        <div class="flex items-center mt-0">
            <span class="w-6/12 mr-2 border-b"></span>
            <a href="#" class="text-sm font-medium text-gray-500">Or</a>
            <span class="w-6/12 ml-2 border-b"></span>
        </div>

    </div>


</div>
