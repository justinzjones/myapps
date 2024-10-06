<x-layouts.magellan>

    <x-wn-header />

    <x-wn-main :booking_summary="$bookingSummary" :payment_component="$paymentComponent" :payment_express=$paymentExpress :summary=$summary
        :wn_voucher=$wnVoucher />

    {{-- {{ $payment_component }} --}}
    {{-- <p class="text-2xl "> {{$payment_component}} </p> --}}

    <x-wn-footer />

</x-layouts.magellan>
