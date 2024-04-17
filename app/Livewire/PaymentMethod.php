<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PaymentMethod extends Component
{
    // propiedad computada
    public function getDefaultPaymentMethodProperty()
    {
        return auth()->user()->defaultPaymentMethod();
    }

    public function addPaymentMethod($paymentMethod) 
    {
        auth()->user()->addPaymentMethod($paymentMethod);
    }

    public function deletePaymentMethod($paymentMethod)
    {

        auth()->user()->deletePaymentMethod($paymentMethod);
    }

    public function defaultPaymentMethod($paymentMethod)
    {
        // dd($paymentMethod);
        auth()->user()->updateDefaultPaymentMethod($paymentMethod);

    }


    public function render()
    {
        return view('livewire.payment-method',  [
            'intent' => auth()->user()->createSetupIntent(),
            'paymentMethods' => auth()->user()->paymentMethods(),
        ]);
    }
}
