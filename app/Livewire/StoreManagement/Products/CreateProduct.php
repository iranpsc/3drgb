<?php

namespace App\Livewire\StoreManagement\Products;

use App\Livewire\Forms\CreateProductForm;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Category;
use App\Models\Attribute;
use App\Models\Tag;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;
    
    public CreateProductForm $form;

    public function save()
    {
        $this->authorize('create', Product::class);
        
        $this->form->save();

        $this->redirectRoute('products.index');
    }


    #[Title('محصول جدید')]
    public function render()
    {
        return view('livewire.store-management.products.create-product')
            ->with('categories', Category::select('id', 'name')->get())
            ->with('tags', Tag::select('id', 'name')->get())
            ->with('attributes', Attribute::select('id', 'name')->get());
    }
}
