<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Closure;
use Livewire\Form;
use Livewire\WithFileUploads;

class CreateProductForm extends Form
{
    use WithFileUploads;

    public $category_id;
    public $sku;
    public $name;
    public $slug;
    public $short_description;
    public $long_description;
    public $stock_status = 0;
    public $quantity = 0;
    public $delivery_time = 0;
    public $customer_can_add_review = 0;
    public $price;
    public $sale_price;
    public $published = 0;
    public $images = [];
    public $file;
    public $tags = [];
    public $attributes = [];
    public $meta_description;
    public $meta_keywords;

    public function rules()
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:products,slug',
            'short_description' => 'required|string|max:255',
            'long_description' => 'required|string|max:5000',
            'stock_status' => 'nullable|boolean',
            'quantity' => [
                'nullable', 'numeric', 'min:0', function (string $attribute, mixed $value, Closure $fail) {
                    if ((bool)$this->stock_status == false && $value > 0) {
                        $fail(__('The quantity must not be greater than 0 if the stock status is false.'));
                    }
                }, function (string $attribute, mixed $value, Closure $fail) {
                    if ((bool)$this->stock_status == true && $value <= 0) {
                        $fail(__('The quantity must be greater than 0 if the stock status is true.'));
                    }
                }
            ],
            'delivery_time' => 'nullable|numeric|min:0',
            'customer_can_add_review' => 'required|boolean',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lte:price',
            'published' => 'required|boolean',
            'images.*' => 'required|image|max:1024',
            'file' => 'required|file|max:100024',
            'tags' => 'required|array|min:1',
            'tags.*' => 'required|exists:tags,id',
            'attributes' => 'required|array|min:1',
            'attributes.*.id' => 'required|exists:attributes,id',
            'attributes.*.value' => 'required|string|max:255',
            'meta_description' => 'required|string|max:255',
            'meta_keywords' => 'required|string|max:255',
        ];
    }

    public function save()
    {
        $this->validate();

        $product = Product::create(
            $this->only([
                'category_id',
                'sku',
                'name',
                'slug',
                'short_description',
                'long_description',
                'stock_status',
                'quantity',
                'delivery_time',
                'customer_can_add_review',
                'price',
                'sale_price',
                'published',
                'meta_description',
                'meta_keywords',
            ])
        );

        foreach ($this->images as $image) {
            $product->images()->create([
                'path' => $image->store('products', 'public'),
            ]);
        }

        $product->file()->create([
            'name' => $this->file->getClientOriginalName(),
            'path' => $this->file->storeAs('products', $this->file->getClientOriginalName()),
            'type' => $this->file->getMimeType(),
            'size' => $this->file->getSize(),
        ]);

        $product->tags()->attach($this->tags);

        foreach ($this->attributes as $attribute) {
            $product->attributes()->attach($attribute['id'], [
                'value' => $attribute['value'],
            ]);
        }

        $this->reset();
    }
}
