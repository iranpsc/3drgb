<?php

namespace App\Livewire\Forms;

use App\Models\Product;
use Closure;
use Livewire\Attributes\Rule;
use Livewire\Form;
use Illuminate\Validation\Rule as ValidationRule;
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
    public $stock_status = true;
    public $quantity;
    public $delivery_time;
    public $customer_can_add_review = true;
    public $price;
    public $sale_price;
    public $published = true;
    public $images = [];
    public $file;
    public $tags = [];
    public $attributes = [];

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
                    if ($value && (bool)$this->stock_status == false) {
                        $fail(__('The stock status must be true if the product is published.'));
                    }
                }
            ],
            'images.*' => ['required', 'image', 'max:1024'],
            'file' => ['required', 'file', 'max:1024000'],
            'tags' => ['required', 'array', 'min:1'],
            'tags.*' => ['required', ValidationRule::exists('tags', 'id')],
            'attributes' => ['required', 'array', 'min:1'],
            'attributes.*.id' => ['required', ValidationRule::exists('attributes', 'id')],
        ];
    }

    public function save()
    {
        $this->validate();

        $product = Product::create([
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

        foreach ($this->images as $image) {
            $product->images()->create([
                'url' => url('storage/' . $image->store('products', 'public')),
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

        session()->flash('success', 'Product created successfully.');

        return redirect(route('products.index'));
    }
}
