<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Livewire\Form;
use Livewire\WithFileUploads;
use Closure;
use Illuminate\Validation\Rule;

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
    public $stock_status;
    public $quantity;
    public $delivery_time;
    public $customer_can_add_review;
    public $price;
    public $sale_price;
    public $published;
    public $images;
    public $file;
    public $tags;
    public $attributes;
    public $meta_description;
    public $meta_keywords;

    public function rules()
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'sku' => 'required|string|max:255|unique:products,sku,' . $this->product->id,
            'name' => 'required|string|max:255',
            'slug' => [
                'required', 'string', 'max:255', Rule::unique('products')->ignore($this->product->id), function (string $attribute, mixed $value, Closure $fail) {
                    if (str_contains($value, ' ')) {
                        $fail(__('The :attribute must not contain spaces.', ['attribute' => $attribute]));
                    }
                }
            ],
            'short_description' => 'required|string|max:500',
            'long_description' => 'required|string|max:5000',
            'stock_status' => 'required|boolean',
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
            'delivery_time' => 'required|numeric|min:0',
            'customer_can_add_review' => 'required|boolean',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'nullable|numeric|min:0|lte:price',
            'published' => 'required|boolean',
            'images' => 'nullable|array|max:3',
            'images.*' => 'nullable|image|max:1024',
            'file' => 'nullable|file|max:100024',
            'tags' => 'required|array|min:1',
            'tags.*' => 'required|exists:tags,id',
            'attributes' => 'required|array|min:1',
            'attributes.*.id' => 'required|exists:attributes,id',
            'meta_description' => 'required|string|max:500',
            'meta_keywords' => 'required|string|max:255',
        ];
    }

    public function setProduct(Product $product)
    {
        $this->product = $product;

        $this->fill(
            $this->product->only([
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

    }

    public function getProduct(): Product
    {
        return $this->product;
    }

    public function update()
    {
        $this->validate();

        $this->product->update(
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
                    'path' => $image->store('products', 'public'),
                ]);
            }
        }

        if ($this->file) {
            $this->product->file->update([
                'name' => $this->file->getClientOriginalName(),
                'path' => $this->file->storeAs('products', $this->file->getClientOriginalName()),
                'type' => $this->file->getMimeType(),
                'size' => $this->file->getSize(),
            ]);
        }
    }
}
