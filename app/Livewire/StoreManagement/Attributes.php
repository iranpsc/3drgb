<?php

namespace App\Livewire\StoreManagement;

use App\Models\Attribute;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class Attributes extends Component
{
    use WithPagination;

    public $name, $slug;

    protected $rules = [
        'name' => 'required|string|max:255|unique:attributes,name',
        'slug' => 'required|string|max:255|unique:attributes,slug',
    ];

    public function save()
    {
        $this->validate();

        $this->authorize('create', Attribute::class);

        Attribute::create([
            'name' => $this->name,
            'slug' => $this->slug,
        ]);

        $this->reset();

        session()->flash('message', 'ویژگی جدید با موفقیت ایجاد شد.');
    }

    public function delete($id)
    {
        Attribute::destroy($id);

        session()->flash('message', 'ویژگی با موفقیت حذف شد.');
    }

    #[Title('ویژگی ها')]
    public function render()
    {
        return view('livewire.store-management.attributes')
            ->with('attributes', Attribute::paginate(10));
    }
}
