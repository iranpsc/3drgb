<?php

namespace App\Livewire\StoreManagement\Products;

use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use  Maatwebsite\Excel\Facades\Excel;
use App\Imports\ProductImport;

class Import extends Component
{
    use WithFileUploads;

    public $file;

    protected $rules = [
        'file' => 'required|file|mimes:xlsx,xls,csv'
    ];

    public function import()
    {
        $this->validate();

        Excel::import(new ProductImport, $this->file);

        $this->file = null;

        session()->flash('success', 'محصولات با موفقیت درون ریزی شدند.');
    }

    #[Title('درون ریزی محصولات')]
    public function render()
    {
        return view('livewire.store-management.products.import');
    }
}
