<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SetProductsCreatedBySeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::chunk(100, function ($products) {
            foreach ($products as $product) {
                $product->update(['created_by' => 'admin']);
            }
        });
    }
}
