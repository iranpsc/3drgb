<?php

namespace App\Livewire\StoreManagement;

use Livewire\Component;
use App\Models\Tag;
use Livewire\Attributes\Title;
use Livewire\WithPagination;

class Tags extends Component
{
    use WithPagination;

    public $name, $slug;

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'slug' => 'required|min:3|max:255|unique:tags,slug',
    ];

    public function save()
    {
        $this->validate();

        Tag::create([
            'name' => $this->name,
            'slug' => str_replace(' ', '-', trim($this->slug)),
        ]);

        $this->reset(['name', 'slug']);

        session()->flash('message', 'برچسب جدید با موفقیت ایجاد شد.');
    }

    public function delete($id)
    {
        Tag::destroy($id);

        session()->flash('message', 'برچسب با موفقیت حذف شد.');
    }
    
    #[Title('برچسب ها')]
    public function render()
    {
        return view('livewire.store-management.tags')
        ->with('tags', Tag::paginate(10));
    }
}
