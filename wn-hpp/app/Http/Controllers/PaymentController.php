<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingSummary = config('payment_component.booking-summary');
        $paymentComponent = config('payment_component.payment-options');
        $paymentExpress = config('payment_component.payment-express');
        $summary = config('payment_component.summary');
        $wnVoucher = config('payment_component.wn-voucher');
        $discountField = config('payment_component.discount-field');
        // dd($paymentExpress);
        // $validationRules = [
        //     'card_name' => 'required|string|max:255',
        //     'number' => 'required|string|max:255',
        //     // Add more rules as needed for other fields
        // ];
        
        // dd($discountField);
        // return view('wn-hpp')->with('payment_component', $payment_component);
        return view('wn-hpp', ['bookingSummary' => $bookingSummary, 'paymentComponent' => $paymentComponent, 'paymentExpress' => $paymentExpress, 'summary' => $summary,
        'wnVoucher' => $wnVoucher, 'discountField' => $discountField]);
        // return view('wn-hpp', ['paymentComponent' => $paymentComponent, 'validationRules' => $validationRules]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
