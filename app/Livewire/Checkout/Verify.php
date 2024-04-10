<?php

namespace App\Livewire\Checkout;

use App\Models\Product;
use Livewire\Component;
use App\Models\Transaction;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Illuminate\Support\Facades\Auth;

class Verify extends Component
{
    #[Url]
    public $Authority = '';

    #[Url]
    public $Status = '';

    #[Locked]
    public $transaction = null;

    #[Locked]
    public $order = null;

    public function mount()
    {
        $this->transaction = Transaction::where('authority', $this->Authority)->with('order.orderItems')->first();

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

            $this->order->load('products');

            $this->order->update([
                'status' => $this->Status,
            ]);

            $user = $this->order->user;

            $user->products()->attach($this->getOrderItems());
        }
    }

    private function getOrderItems()
    {
        $orderItems = [];

        foreach ($this->order->orderItems as $item) {
            $orderItems[$item->product_id] = ['quantity' => $item->quantity];
        }

        return $orderItems;
    }

    public function download(Product $product)
    {
        $this->authorize('download', $product);

        $product->users()->updateExistingPivot(Auth::id(), [
            'download_count' => $product->users()->find(auth()->id())->pivot->download_count + 1,
            'downloaded_at' => now(),
        ]);

        return response()->download(storage_path('app/' . $product->file->path));
    }

    #[Title('تایید پرداخت')]
    public function render()
    {
        return view('livewire.checkout.verify');
    }
}
