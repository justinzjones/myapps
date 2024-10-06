<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;


class PaymentForm extends Form
{
    #[Rule('required', message: 'Name on card is required')]
    #[Rule('min:3', message: 'Name on Card is too short')]
    public $cardName;
    
    
    #[Rule('required', message: 'Card number is required')]
    #[Rule('min:5', message: 'Card number is too short')]
    // #[Rule('regex:^\s*$^', message: 'Card number is blah')]
    public $cardNumber;
    

    public $rules = [
        'card_name' => [
            'required',
            'min:3',
            'message' => ['Name on card is required', 'Name on Card is too short']
        ],
        'card_number' => [
            'required',
            'min:5',
            'message' => ['Card number is required', 'Card number is too short']
        ],

    ];

}


