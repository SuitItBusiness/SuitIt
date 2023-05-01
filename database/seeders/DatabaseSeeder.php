<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Clothes;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */

    public function run()
    {
        $users = [
            [
                'name' => 'admin',
                'surname' => 'admin',
                'birthdate' => '1980-01-01',
                'occupation' => 'worker',
                'personality' => 'boss',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Jane',
                'surname' => 'Doe',
                'birthdate' => '1985-01-01',
                'occupation' => 'student',
                'personality' => 'reserved',
                'email' => 'jane@example.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $categories = [
            [
                'name' => 'Camisetas',
                'description' => 'Camisetas de manga corta',
            ],
            [
                'name' => 'Pantalones',
                'description' => 'Distintos tipos de pantalones',
            ],
            [
                'name' => 'Camisas',
                'description' => 'Camisas de manga larga',
            ],
            [
                'name' => 'Calzonas',
                'description' => 'Distintos tipos de calzonas',
            ],
            [
                'name' => 'Zapatos',
                'description' => 'Distintos tipos de zapatos',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $clothes = [
            [
                'color' => 'red',
                'brand' => 'Nike',
                'season' => 'spring',
                'price' => 19.99,
                'url' => 'https://example.com/clothes/red-nike',
                'comfort_level' => 5,
                'category_id' => 1,
            ],
            [
                'color' => 'black',
                'brand' => 'Adidas',
                'season' => 'summer',
                'price' => 29.99,
                'url' => 'https://example.com/clothes/blue-adidas',
                'comfort_level' => 4,
                'category_id' => 2,
            ],
            [
                'color' => 'white',
                'brand' => 'Puma',
                'season' => 'summer',
                'price' => 24.99,
                'url' => 'https://example.com/clothes/white-puma',
                'comfort_level' => 5,
                'category_id' => 4,
            ],
            [
                'color' => 'blue',
                'brand' => 'Levi\'s',
                'season' => 'fall',
                'price' => 89.99,
                'url' => 'https://example.com/clothes/blue-levi',
                'comfort_level' => 4,
                'category_id' => 2,
            ],
            [
                'color' => 'black',
                'brand' => 'Converse',
                'season' => 'spring',
                'price' => 39.99,
                'url' => 'https://example.com/clothes/black-converse',
                'comfort_level' => 3,
                'category_id' => 5,
            ],
            [
                'color' => 'gray',
                'brand' => 'H&M',
                'season' => 'winter',
                'price' => 49.99,
                'url' => 'https://example.com/clothes/gray-hm',
                'comfort_level' => 4,
                'category_id' => 3,
            ],
            [
                'color' => 'green',
                'brand' => 'Vans',
                'season' => 'summer',
                'price' => 34.99,
                'url' => 'https://example.com/clothes/green-vans',
                'comfort_level' => 5,
                'category_id' => 5,
            ],
        ];

        foreach ($clothes as $clothing) {
            Clothes::create($clothing);
        }
    }
}
