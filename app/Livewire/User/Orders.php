<?php

namespace App\Livewire\User;

use App\Models\Order;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Orders extends Component
{
    use WithPagination;

    public function pay(Order $order)
    {
        $this->authorize('pay', $order);

        $order->update([
            'status' => 'pending',
        ]);

        $response = zarinpal()
            ->amount($order->amount)
            ->request()
            ->description('transaction info')
            ->callbackUrl(route('verify'))
            ->send();

        if (!$response->success()) {
            session()->flash('error', $response->error()->message());
            return;
        }

        $order->transaction()->update([
            'authority' => $response->authority(),
            'status' => 'pending',
        ]);

        return redirect()->to($response->url());
    }

    #[Title('سفارشات')]
    public function render()
    {
        return view('livewire.user.orders')
            ->with([
                'orders' => Order::whereBelongsTo(auth()->user())
                    ->withSum('products as total_price', 'price')
                    ->orderByDesc('created_at')->paginate(15)
            ]);
    }
}
