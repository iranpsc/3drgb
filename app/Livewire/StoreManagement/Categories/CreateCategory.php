<?php

namespace App\Livewire\StoreManagement\Categories;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;
use Livewire\Attributes\Title;

class CreateCategory extends Component
{
    use WithFileUploads;

    public $name, $slug, $parent_id, $description, $image;

    protected $listeners = ['categoryAdded' => '$refresh'];

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'slug' => 'required|min:3|max:255',
        'parent_id' => 'nullable|exists:categories,id',
        'description' => 'required|min:3|max:255',
        'image' => 'nullable|image|max:1024',
    ];

    public function save()
    {
        $this->validate();

        $this->authorize('create', Category::class);

        $category = Category::create([
            'name' => $this->name,
            'slug' => str_replace(' ', '-', trim($this->slug)),
            'parent_id' => $this->parent_id,
            'description' => $this->description,
        ]);

        if ($this->image) {
            $category->image()->create([
                'path' => $this->image->store('/categories', 'public'),
            ]);
        }

        $this->reset();

        session()->flash('message', 'دسته بندی با موفقیت ایجاد شد.');
    }

    #[Title('ایجاد دسته بندی جدید')]
    public function render()
    {
        return view('livewire.store-management.categories.create-category')
            ->with('categories', Category::all());
    }
}
