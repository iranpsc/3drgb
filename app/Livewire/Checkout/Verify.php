<?php

namespace App\Livewire\Checkout;

use Livewire\Component;
use App\Models\Transaction;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;

class Verify extends Component
{
    #[Url]
    public $Authority = '';

    #[Url]
    public $Status = '';

    public $transaction = null, $order = null;

    public function mount()
    {
        $this->transaction = Transaction::where('authority', $this->Authority)->with('order')->first();

        if (!$this->transaction || $this->transaction->status != 'pending') {
            session()->flash('error', 'تراکنش مورد نظر یافت نشد.');
            return;
        }

        $response = zarinpal()
            ->amount($this->transaction->amount)
            ->verification()
            ->authority($this->Authority)
            ->send();

        if (!$response->success()) {

            $this->transaction->update([
                'status' => $this->Status,
            ]);

            $this->transaction->order->update([
                'status' => $this->Status,
            ]);

            session()->flash('error', $response->error()->message());
        } else {

            $this->transaction->update([
                'reference_id' => $response->referenceId(),
                'card_hash' => $response->cardHash(),
                'card_pan' => $response->cardPan(),
                'fee_type' => $response->feeType(),
                'fee' => $response->fee(),
                'status' => $this->Status,
            ]);

            $this->order = $this->transaction->order;

            $this->order->update([
                'status' => $this->Status,
            ]);

            $user = $this->order->user;

            $user->products()->attach($this->order->orderItems->pluck('product_id'));
        }
    }

    #[Title('تایید پرداخت')]
    public function render()
    {
        return view('livewire.checkout.verify');
    }
}
