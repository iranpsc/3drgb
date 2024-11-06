<?php

namespace Tests\Unit;

use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Attribute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_creates_a_product()
    {
        $product = new Product([
            'category_id' => 1,
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'slug' => 'test-product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'stock_status' => true,
            'quantity' => 10,
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
            'customer_can_add_review' => true,
            'price' => 100,
            'sale_price' => 80,
            'published' => true,
            'meta_description' => 'Product meta description',
            'meta_keywords' => 'product, test',
        ]);
        $product->save();

        $this->assertDatabaseHas('products', ['name' => 'Test Product']);
    }

    public function test_it_calculates_discount()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
            'price' => 100,
            'sale_price' => 80,
        ]);

        $this->assertEquals(20, $product->discount);
    }

    public function test_it_gets_final_price()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
            'price' => 100,
            'sale_price' => 80,
        ]);

        $this->assertEquals(80, $product->final_price);

        $product->sale_price = 0;
        $this->assertEquals(100, $product->final_price);
    }

    public function test_it_checks_if_product_is_free()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
            'price' => 0,
        ]);

        $this->assertTrue($product->is_free);
    }

    public function test_it_has_a_url()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
        ]);

        $this->assertStringContainsString(route('products.show', $product->sku), $product->url);
    }

    public function test_it_belongs_to_category()
    {
        $category = Category::create(['name' => 'Test Category']);
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
            'category_id' => $category->id,
        ]);

        $this->assertInstanceOf(Category::class, $product->category);
    }

    public function test_it_has_tags()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
        ]);

        $tag = Tag::create(['name' => 'Test Tag']);
        $product->tags()->attach($tag);

        $this->assertTrue($product->tags->contains($tag));
    }

    public function test_it_has_attributes()
    {
        $product = Product::create([
            'sku' => 'SKU123',
            'name' => 'Test Product',
            'short_description' => 'Short description of product',
            'long_description' => 'Long description of product',  // مقداردهی long_description
            'delivery_time' => '2-4 days',  // مقداردهی delivery_time
        ]);

        $attribute = Attribute::create(['name' => 'Color']);
        $product->attributes()->attach($attribute, ['value' => 'Red']);

        $this->assertEquals('Red', $product->attributes->first()->pivot->value);
    }
}
