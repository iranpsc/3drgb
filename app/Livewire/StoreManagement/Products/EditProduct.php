<?php

namespace App\Livewire\StoreManagement\Products;

use App\Livewire\Forms\UpdateProduct;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Product;
use App\Models\Tag;
use App\Models\Attribute;

class EditProduct extends Component
{
    public UpdateProduct $form;

    public function mount(Product $product)
    {
        $this->form->setProduct($product);
    }

    public function update()
    {
        $this->form->update();

        session()->flash('success', __('Product updated successfully.'));
    }

    #[Title('ویرایش محصول')]
    public function render()
    {
        return view('livewire.store-management.products.edit-product')
        ->with('categories', Category::select('id', 'name')->get())
        ->with('tags', Tag::all())
        ->with('attributes', Attribute::all());
    }
}
