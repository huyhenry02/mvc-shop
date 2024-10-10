<?php

namespace Database\Seeders;

use JsonException;
use App\Models\User;
use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws JsonException
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/seed_data/brand.json'));
        $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($data as $item) {

            Brand::create([
                'name' => $item->name,
                'description' => $item->description,
            ]);
        }
    }
}
