<?php

namespace App\Livewire;

use Livewire\Component;

class PaymentMethod extends Component
{

    public $name;

    public function render()
    {
        return view('livewire.payment-method',  [
            'intent' => auth()->user()->createSetupIntent()
        ]);
    }
}
