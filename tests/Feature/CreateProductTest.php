<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Tag;
use App\Models\Attribute;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Livewire\Livewire;
use Tests\TestCase;
use App\Livewire\StoreManagement\Products\CreateProduct;

class CreateProductTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_initializes_the_sku_correctly()
    {
        $category = Category::factory()->create();
        Product::factory()->create(['sku' => '3D-rgb-10001', 'category_id' => $category->id]);

        Livewire::test(CreateProduct::class)
            ->assertSet('form.sku', '3D-rgb-10002');
    }

    /** @test */
    public function it_authorizes_the_user_before_saving()
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        $category = Category::factory()->create();
        $tag = Tag::factory()->create();
        $attribute = Attribute::factory()->create();

        Livewire::test(CreateProduct::class)
            ->set('form.category_id', $category->id)
            ->set('form.name', 'Test Product')
            ->set('form.slug', 'test-product')
            ->set('form.short_description', 'This is a short description')
            ->set('form.long_description', 'This is a long description')
            ->set('form.stock_status', true)
            ->set('form.quantity', 10)
            ->set('form.delivery_time', 3)
            ->set('form.price', 1000)
            ->set('form.sale_price', 800)
            ->set('form.published', true)
            ->set('form.tags', [$tag->id])
            ->set('form.attributes', [['id' => $attribute->id, 'value' => 'Attribute Value']])
            ->set('form.fbx_file', UploadedFile::fake()->create('sample.fbx', 100, 'application/octet-stream'))
            ->call('save')
            ->assertHasNoErrors();
    }

    /** @test */
public function it_saves_the_product_correctly()
{
    $user = User::factory()->create();
    $this->actingAs($user);

    $category = Category::factory()->create();
    $tag = Tag::factory()->create();
    $attribute = Attribute::factory()->create();

    Livewire::test(CreateProduct::class)
        ->set('form.category_id', $category->id)
        ->set('form.name', 'Test Product')
        ->set('form.slug', 'test-product')
        ->set('form.short_description', 'This is a short description')
        ->set('form.long_description', 'This is a long description')
        ->set('form.stock_status', true)
        ->set('form.quantity', 10)
        ->set('form.delivery_time', 3)
        ->set('form.price', 1000)
        ->set('form.sale_price', 800)
        ->set('form.published', true)
        ->set('form.tags', [$tag->id])
        ->set('form.attributes', [['id' => $attribute->id, 'value' => 'Attribute Value']])
        ->set('form.fbx_file', UploadedFile::fake()->create('sample.fbx', 100, 'application/octet-stream'))
        ->call('save')
        ->assertHasNoErrors();

    // تأیید کنید که داده در دیتابیس ذخیره شده است
    $this->assertDatabaseHas('products', [
        'name' => 'Test Product',
        'slug' => 'test-product',
        'short_description' => 'This is a short description',
        'price' => 10000,
    ]);
}


    /** @test */
    public function it_renders_categories_tags_and_attributes()
    {
        Category::factory()->count(3)->create();
        Tag::factory()->count(2)->create();
        Attribute::factory()->count(2)->create();

        Livewire::test(CreateProduct::class)
            ->assertViewHas('categories')
            ->assertViewHas('tags')
            ->assertViewHas('attributes');
    }
}
