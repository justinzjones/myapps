<?php

namespace App\Livewire;

// use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Livewire\Forms\PaymentForm;


class PaymentOptions2 extends Component
{
    

    public $cardNumberField;


    public PaymentForm $form;
 
            
    public function save()
    {
        $this->validate();
       
    }
 
    public function render()
    {
        $myRules = (array) $this->form;
        return view('livewire.payment-options2', ['formRules' => $myRules['rules']]);
        
    }
    
}
