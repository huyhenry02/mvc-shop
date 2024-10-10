<?php

namespace Database\Seeders;

use JsonException;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws JsonException
     */
    public function run(): void
    {

        $json = file_get_contents(database_path('seeders/seed_data/user.json'));
        $data = json_decode($json, false, 512, JSON_THROW_ON_ERROR);

        foreach ($data as $item) {

            User::create([
                'name' => $item->name,
                'role_type' => $item->role_type,
                'phone' => $item->phone,
                'email' => $item->email,
                'password' => bcrypt($item->password),
            ]);
        }
    }
}
