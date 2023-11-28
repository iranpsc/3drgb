<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Validation\Rule as ValidationRule;
use Livewire\WithFileUploads;
use Closure;

class UpdateProduct extends Form
{
    use WithFileUploads;

    public Product $product;

    public $category_id;
    public $sku;
    public $name;
    public $slug;
    public $short_description;
    public $long_description;
    public $stock_status = true;
    public $quantity;
    public $delivery_time;
    public $customer_can_add_review = true;
    public $price;
    public $sale_price;
    public $published = true;
    public $images;
    public $file;
    public $tags;
    public $attributes;

    public function rules()
    {
        return [
            'category_id' => ['required', ValidationRule::exists('categories', 'id')],
            'sku' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255'],
            'short_description' => ['required', 'string', 'max:500'],
            'long_description' => ['required', 'string', 'max:5000'],
            'stock_status' => ['required', 'boolean'],
            'quantity' => [
                'required', 'numeric', 'min:0', function (string $attribute, mixed $value, Closure $fail) {
                    if ((bool)$this->stock_status == false && $value > 0) {
                        $fail(__('The quantity must not be greater than 0 if the stock status is false.'));
                    }
                }, function (string $attribute, mixed $value, Closure $fail) {
                    if ((bool)$this->stock_status == true && $value <= 0) {
                        $fail(__('The quantity must be greater than 0 if the stock status is true.'));
                    }
                }
            ],
            'delivery_time' => ['required', 'numeric', 'min:0'],
            'customer_can_add_review' => ['required', 'boolean'],
            'price' => ['required', 'numeric', 'min:0'],
            'sale_price' => ['required', 'numeric', 'min:0', 'lte:form.price'],
            'published' => [
                'required', 'boolean', function (string $attribute, mixed $value, Closure $fail) {
                    if ((bool)$value == false && (bool)$this->published == true) {
                        $fail(__('The published must be true if the published is true.'));
                    }
                }
            ],
            'images' => ['nullable', 'array'],
            'images.*' => ['nullable', 'image', 'max:1024'],
            'file' => ['nullable', 'file', 'max:1024'],
            'tags' => ['nullable', 'array'],
            'tags.*' => ['nullable', 'string', 'max:255'],
            'attributes' => ['nullable', 'array'],
            'attributes.*.id' => ['nullable', 'string', 'max:255'],
        ];
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;

        $this->category_id = $product->category_id;
        $this->sku = $product->sku;
        $this->name = $product->name;
        $this->slug = $product->slug;
        $this->short_description = $product->short_description;
        $this->long_description = $product->long_description;
        $this->stock_status = $product->stock_status;
        $this->quantity = $product->quantity;
        $this->delivery_time = $product->delivery_time;
        $this->customer_can_add_review = $product->customer_can_add_review;
        $this->price = $product->price;
        $this->sale_price = $product->sale_price;
        $this->published = $product->published;
        $this->tags = $product->tags;
        $this->attributes = $product->attributes;
    }

    public function update()
    {
        $this->validate();

        $this->product->update([
            'category_id' => $this->category_id,
            'sku' => $this->sku,
            'name' => $this->name,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'long_description' => $this->long_description,
            'stock_status' => $this->stock_status,
            'quantity' => $this->quantity,
            'delivery_time' => $this->delivery_time,
            'customer_can_add_review' => $this->customer_can_add_review,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
            'published' => $this->published,
        ]);

        $this->product->tags()->sync($this->tags);

        foreach ($this->attributes as $attribute) {
            $this->product->attributes()->syncWithoutDetaching([
                $attribute['id'] => [
                    'value' => $attribute['value'],
                ],
            ]);
        }

        if ($this->images) {
            foreach ($this->images as $image) {
                $this->product->images()->create([
                    'url' => url('storage/' . $image->store('products', 'public')),
                ]);
            }
        }

        if ($this->file) {
            $this->product->file->create([
                'name' => $this->file->getClientOriginalName(),
                'path' => $this->file->storeAs('products', $this->file->getClientOriginalName()),
                'type' => $this->file->getMimeType(),
                'size' => $this->file->getSize(),
            ]);
        }
    }
}
