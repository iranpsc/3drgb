<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_creates_a_product()
    {
        dump("Step 1: Creating a category...");

        $category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category'
        ]);

        dump("Step 2: Creating a product...");

        $product = Product::factory()->create([
            'category_id' => $category->id,
            'name' => 'Test Product',
            'sku' => '3D-rgb-10001',
            'price' => 50000,
            'sale_price' => 45000,
            'published' => true,
        ]);

        dump("Step 3: Verifying the product exists in the database...");
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Test Product',
            'sku' => '3D-rgb-10001',
            'price' => 50000,
            'sale_price' => 45000,
            'published' => true,
            'category_id' => $category->id,
        ]);

        dump("Product creation test passed.");
    }

    /** @test */
    public function it_retrieves_a_product()
    {
        dump("Step 1: Creating a category...");

        $category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category'
        ]);

        dump("Step 2: Creating a product to retrieve...");

        $product = Product::factory()->create([
            'category_id' => $category->id,
            'name' => 'Test Product',
            'sku' => '3D-rgb-10001',
            'short_description' => 'Sample short description',
            'long_description' => 'Sample long description',
            'stock_status' => true,
            'quantity' => 10,
            'delivery_time' => 5,
            'customer_can_add_review' => true,
            'price' => 50000,
            'sale_price' => 45000,
            'published' => true,
        ]);

        $retrievedProduct = Product::find($product->id);

        dump("Step 3: Displaying all retrieved product details...");
        foreach ($retrievedProduct->toArray() as $key => $value) {
            dump("{$key}: {$value}");
        }

        $this->assertNotNull($retrievedProduct);
        $this->assertEquals($product->id, $retrievedProduct->id);
        dump("Product retrieval test passed.");
    }

    /** @test */
    public function it_updates_a_product()
    {
        dump("Step 1: Creating a category...");

        $category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category'
        ]);

        dump("Step 2: Creating a product to update...");

        $product = Product::factory()->create([
            'category_id' => $category->id,
            'name' => 'Test Product',
            'sku' => '3D-rgb-10001',
            'short_description' => 'Sample short description',
            'long_description' => 'Sample long description',
            'stock_status' => true,
            'quantity' => 10,
            'delivery_time' => 5,
            'customer_can_add_review' => true,
            'price' => 50000,
            'sale_price' => 45000,
            'published' => true,
        ]);

        dump("Step 3: Updating the product details...");

        $product->update([
            'name' => 'Updated Product',
            'sku' => '3D-rgb-20002',
            'short_description' => 'Updated short description',
            'long_description' => 'Updated long description',
            'stock_status' => false,
            'quantity' => 20,
            'delivery_time' => 7,
            'customer_can_add_review' => false,
            'price' => 60000,
            'sale_price' => 55000,
            'published' => false,
        ]);

        dump("Step 4: Displaying all updated product details...");
        foreach ($product->fresh()->toArray() as $key => $value) {
            dump("{$key}: {$value}");
        }

        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Updated Product',
            'sku' => '3D-rgb-20002',
            'price' => 60000,
            'sale_price' => 55000,
            'published' => false,
            'category_id' => $category->id,
        ]);

        dump("Product update test passed.");
    }

    /** @test */
    public function it_deletes_a_product()
    {
        dump("Step 1: Creating a category...");

        $category = Category::create([
            'name' => 'Test Category',
            'slug' => 'test-category'
        ]);

        dump("Step 2: Creating a product to delete...");

        $product = Product::factory()->create([
            'category_id' => $category->id,
            'name' => 'Test Product',
        ]);

        dump("Step 3: Deleting the product...");
        $product->delete();

        dump("Step 4: Verifying the product no longer exists in the database...");
        $this->assertDatabaseMissing('products', [
            'id' => $product->id,
        ]);

        dump("Product deletion test passed.");
    }
    
 /** @test */
 public function it_calculates_discount_and_final_price_correctly()
 {
     dump("Step 1: Creating a category and product with price and sale price...");
     $category = Category::create(['name' => 'Test Category']);
     $product = Product::factory()->create([
         'category_id' => $category->id,
         'price' => 10000,
         'sale_price' => 8000,
     ]);

     $this->assertEquals(20, $product->discount);
     $this->assertEquals(8000, $product->final_price);
     dump("Discount and final price calculation test passed.");
 }

 /** @test */
 public function it_generates_correct_product_url()
 {
     dump("Step 1: Creating a category and product with specific SKU...");
     $category = Category::create(['name' => 'Test Category']);
     $product = Product::factory()->create(['category_id' => $category->id, 'sku' => '3D-rgb-10001']);

     $expectedUrl = route('products.show', '3D-rgb-10001');
     $this->assertEquals($expectedUrl, $product->url);
     dump("Product URL generation test passed.");
 }

 /** @test */
 public function it_filters_published_products()
 {
     dump("Step 1: Creating a category with published and unpublished products...");
     $category = Category::create(['name' => 'Test Category']);
     Product::factory()->create(['category_id' => $category->id, 'published' => true]);
     Product::factory()->create(['category_id' => $category->id, 'published' => false]);

     $publishedProducts = Product::published()->get();

     $this->assertCount(1, $publishedProducts);
     $this->assertTrue($publishedProducts->first()->published);
     dump("Published products filter test passed.");
 }

 /** @test */
 public function it_checks_product_stock_status()
 {
     dump("Step 1: Creating a category and products with stock status...");
     $category = Category::create(['name' => 'Test Category']);
     $productInStock = Product::factory()->create(['category_id' => $category->id, 'stock_status' => true, 'quantity' => 5]);
     $productOutOfStock = Product::factory()->create(['category_id' => $category->id, 'stock_status' => false, 'quantity' => 0]);

     $this->assertTrue($productInStock->stock_status);
     $this->assertFalse($productOutOfStock->stock_status);
     dump("Stock status check test passed.");
 }

 /** @test */
 public function it_checks_if_product_is_free()
 {
     dump("Step 1: Creating a category and free and paid products...");
     $category = Category::create(['name' => 'Test Category']);
     $freeProduct = Product::factory()->create(['category_id' => $category->id, 'price' => 0]);
     $paidProduct = Product::factory()->create(['category_id' => $category->id, 'price' => 1000]);

     $this->assertTrue($freeProduct->is_free);
     $this->assertFalse($paidProduct->is_free);
     dump("Free product check test passed.");
 }
}
