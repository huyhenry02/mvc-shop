<?php

namespace Database\Seeders;

use JsonException;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws JsonException
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/seed_data/product.json'));
        $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($data as $item) {

            Product::create([
                'name' => $item->name,
                'brand_id' => $item->brand_id,
                'sale' => $item->sale,
                'price' => $item->price,
                'size' => $item->size,
                'description' => $item->description,
                'specification' => $item->specification,
                'image' => $item->image,
            ]);
        }
    }
}
