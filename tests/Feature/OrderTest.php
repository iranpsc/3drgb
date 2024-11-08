<?php

namespace Tests\Feature;

use App\Models\File;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_an_order()
    {
        dump("Step 1: Creating a user...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        dump("Step 2: Creating an order...");
        $order = Order::create([
            'user_id' => $user->id,
            'status' => 0,
            'amount' => 1000,
        ]);

        dump("Step 3: Checking if order exists in the database...");
        $this->assertDatabaseHas('orders', [
            'id' => $order->id,
            'user_id' => $user->id,
        ]);
        dump("Order creation test passed.");
    }

    /** @test */
    public function it_has_order_items()
    {
        dump("Step 1: Creating a user...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        dump("Step 2: Creating an order and a product...");
        $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);
        $product = Product::create([
            'name' => 'Test Product',
            'price' => 1000,
            'sku' => '3d-1000',
            'short_description' => 'Sample short description',
            'long_description' => 'Sample long description'
        ]);

        dump("Step 3: Adding an item to the order...");
        $orderItem = OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => 1
        ]);

        dump("Step 4: Verifying order items...");
        $this->assertTrue($order->orderItems->contains($orderItem));
        $this->assertEquals(1, $order->orderItems->count());
        dump("Order items test passed.");
    }

    /** @test */
    public function it_has_a_user()
    {
        dump("Step 1: Creating a user and an order...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);

        dump("Step 2: Checking user relation with the order...");
        $this->assertEquals($user->id, $order->user->id);
        dump("User relation test passed.");
    }

    /** @test */
    public function it_has_a_transaction()
    {
        dump("Step 1: Creating a user and an order...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);

        dump("Step 2: Creating a transaction for the order...");
        $transaction = Transaction::create([
            'order_id' => $order->id,
            'amount' => 1000,
            'status' => 1,
            'token' => 'TRANS123'
        ]);

        dump("Step 3: Checking transaction relation with the order...");
        $this->assertEquals($transaction->id, $order->transaction->id);
        dump("Transaction relation test passed.");
    }

    /** @test */
    public function it_has_products_through_order_items()
    {
        dump("Step 1: Creating a user, an order, and a product...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);
        $product = Product::create([
            'name' => 'Test Product',
            'price' => 1000,
            'sku' => '3d-1000',
            'short_description' => 'Sample short description',
            'long_description' => 'Sample long description'
        ]);

        dump("Step 2: Adding product to the order through an order item...");
        OrderItem::create(['order_id' => $order->id, 'product_id' => $product->id, 'quantity' => 1]);

        dump("Step 3: Checking product relation through order items...");
        $this->assertTrue($order->products->contains($product));
        dump("Product relation test passed.");
    }

    /** @test */
    public function it_can_check_if_order_is_paid()
    {
        dump("Step 1: Creating a user and an order with paid status...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);

        dump("Step 2: Verifying paid status...");
        $this->assertTrue($order->isPaid());

        dump("Step 3: Creating an unpaid order and checking status...");
        $unpaidOrder = Order::create(['user_id' => $user->id, 'status' => 1, 'amount' => 1000]);
        $this->assertFalse($unpaidOrder->isPaid());
        dump("Paid status test passed.");
    }

    /** @test */
    public function it_has_default_status_of_minus_one()
    {
        dump("Step 1: Creating a user and an order with default status...");
        $user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $order = Order::create(['user_id' => $user->id, 'amount' => 1000]);

        dump("Step 2: Verifying default status of the order...");
        $this->assertEquals(-1, $order->status);
        dump("Default status test passed.");
    }

/** @test */
public function it_can_download_a_product_file()
{
    dump("Step 1: Setting up storage...");

    dump("Step 2: Creating a user, order, product, and file...");
    $user = User::create([
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => bcrypt('password')
    ]);

    $product = Product::create([
        'name' => 'Downloadable Product',
        'price' => 1000,
        'sku' => '3d-1000',
        'short_description' => 'Sample short description',
        'long_description' => 'Sample long description'
    ]);


    $file = File::create([
        'product_id' => $product->id,
        'name' => 'downloadable_product.txt',
        'path' => 'products/downloadable_product.txt',
        'type' => 'text/plain',
        'size' => 1024
    ]);


    Storage::disk('local')->put($file->path, 'Dummy content for testing');

    dump("Step 3: Creating an order and linking the product...");
    $order = Order::create(['user_id' => $user->id, 'status' => 0, 'amount' => 1000]);
    OrderItem::create([
        'order_id' => $order->id,
        'product_id' => $product->id,
        'quantity' => 1
    ]);

    dump("Step 4: Authenticating user and sending download request...");
    $this->actingAs($user);


    $response = $this->get($file->url);

    dump("Step 5: Checking download response...");
    $response->assertStatus(200);
    $response->assertHeader('Content-Type', 'text/plain; charset=UTF-8');
    $this->assertTrue(
        str_contains($response->headers->get('Content-Disposition'), 'attachment; filename=downloadable_product.txt'),
        'Content-Disposition header does not contain expected filename.'
    );

    dump("Product file download test passed.");
}

}
