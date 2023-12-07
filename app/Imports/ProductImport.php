<?php

namespace App\Imports;

use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ProductImport implements ToArray, WithChunkReading, ShouldQueue
{

    public function array(array $array)
    {
        foreach ($array as $rowNumber => $row) {

            // skip the first row
            if ($rowNumber == 0) {
                continue;
            }

            $categories = explode(',', $row[11]);

            $categoriesIds = [];

            foreach ($categories as $index => $category) {
                $category = trim($category);

                $parent_id = $index > 0 ? $categoriesIds[$index - 1] : null;

                $category = \App\Models\Category::firstOrCreate([
                    'name' => $category,
                ], [
                    'slug' => str_replace(' ', '-', $category),
                    'parent_id' => $parent_id
                ]);

                $categoriesIds[] = $category->id;
            }

            $tags = explode(',', $row[12]);

            $tagsIds = [];

            foreach ($tags as $index => $tag) {
                $tag = trim($tag);

                $tag = \App\Models\Tag::firstOrCreate(
                    ['name' => $tag],
                    ['slug' => str_replace(' ', '-', $tag)]
                );

                $tagsIds[] = $tag->id;
            }

            $product = \App\Models\Product::updateOrCreate(
                ['sku' => $row[0]],
                [
                    'category_id' => $categoriesIds[count($categoriesIds) - 1],
                    'name' => $row[1],
                    'slug' => $row[1],
                    'published' => $row[2],
                    'short_description' => $row[3],
                    'long_description' => $row[4],
                    'stock_status' => $row[5],
                    'quantity' => $row[6],
                    'delivery_time' => $row[7],
                    'customer_can_add_review' => $row[8],
                    'sale_price' => $row[9],
                    'price' => $row[10],
                ]
            );

            $product->tags()->sync($tagsIds);

            // Iterate over $row[15] to $row[68] and create attributes
            for ($i = 15; $i <= 68; $i += 3) {
                if ($row[$i] != null) {
                    $attribute = \App\Models\Attribute::firstOrCreate(
                        ['name' => $row[$i]],
                        ['slug' => str_replace(' ', '-', $row[$i])]
                    );

                    $product->attributes()->attach($attribute->id, [
                        'value' => $row[$i + 1],
                        'display' => $row[$i + 2],
                    ]);
                }
            }

            $images = explode(',', $row[13]);

            foreach ($images as $image) {
                $image = trim($image);

                $image = $product->images()->create([
                    'path' => $image
                ]);
            }

            $product->file()->create([
                'path' => $row[14]
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
