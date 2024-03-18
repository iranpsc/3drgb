<?php

namespace App\Livewire\StoreManagement\Categories;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Category;

class EditCategory extends Component
{
    use WithFileUploads;

    public Category $category;

    public $name, $slug, $parent_id, $description, $image;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'slug' => 'required|min:3|max:255',
        'parent_id' => 'nullable|exists:categories,id',
        'description' => 'required|min:3|max:255',
        'image' => 'nullable|image|max:1024',
    ];

    public function mount()
    {
        $this->fill(
            $this->category->only([
                'name',
                'slug',
                'parent_id',
                'description'
            ])
        );
    }

    public function save()
    {
        $this->validate();

        $this->authorize('update', $this->category);

        $this->category->update([
            'name' => $this->name,
            'slug' => str_replace(' ', '-', trim($this->slug)),
            'parent_id' => $this->parent_id,
            'description' => $this->description,
        ]);

        if ($this->image) {
            $this->category->image()->delete();

            $this->category->image()->create([
                'path' => $this->image->store('/categories', 'public'),
            ]);
        }

        session()->flash('message', 'دسته بندی با موفقیت ویرایش شد.');
    }

    #[Title('ویرایش دسته بندی')]
    public function render()
    {
        return view('livewire.store-management.categories.edit-category')
            ->with('categories', Category::all());
    }
}
