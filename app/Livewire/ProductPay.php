<?php

namespace App\Livewire;

use Livewire\Component;

class ProductPay extends Component
{

    public $product;
    public $paymentMethodId;

    public function mount(){
        if(auth()->user()->hasDefaultPaymentMethod())
        {
            $this->paymentMethodId = $this->defaultPaymentMethod->id;
        }
    }

    public function getDefaultPaymentMethodProperty()
    {
        return auth()->user()->defaultPaymentMethod();
    }

    public function purchase()
    {

        auth()->user()->charge($this->product->price * 100, $this->paymentMethodId, 
    [
        'return_url'=>route('gracias')
    ]);

    }

    public function render()
    {
        return view('livewire.product-pay',
        [
            'paymentMethods' => auth()->user()->paymentMethods()
        ]);
    }
}
