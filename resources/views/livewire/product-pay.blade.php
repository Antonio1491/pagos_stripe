<div>

    <div class="card">
        <div class="card-body">

            <div class="flex justify-between items-center mb-4">
                <h1 class="text-lg font-semibold text-gray-700">Método de pago</h1>
                <img class="h-8 " src="https://codersfree.com/img/payments/credit-cards.png" alt="">
            </div>

            <ul class="mb-4">
                @foreach ($paymentMethods as $paymentMethod)
                    
                <li>
                    <label >
                        <input wire:model="paymentMethodId" type="radio" name="paymentMethod" value="{{$paymentMethod->id}}">
                        {{$paymentMethod->billing_details->name}}
                    xxxx-{{$paymentMethod->card->last4}}

                        @if ($this->defaultPaymentMethod->id == $paymentMethod->id)
                                    
                            <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded ml-2">Default</span>

                        @endif

                    </label>
                </li>

                @endforeach
            </ul>

            <x-danger-button wire:click="purchase">
                Pagar
            </x-danger-button>

        </div>
    </div>

</div>
