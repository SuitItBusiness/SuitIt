<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Clothes;
use App\Models\Event;
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
                'password' => 12345678,
                'role' => 'admin',
            ],
            [
                'name' => 'Jane',
                'surname' => 'Doe',
                'birthdate' => '1985-01-01',
                'occupation' => 'student',
                'personality' => 'reserved',
                'email' => 'user@example.com',
                'password' => 12345678,
                'role' => 'user',
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $categories = [
            [
                'name' => 'Camisetas-Camisas',
                'description' => 'Parte de arriba',
            ],
            [
                'name' => 'Pantalones',
                'description' => 'Distintos tipos de pantalones',
            ],
            [
                'name' => 'Abrigos',
                'description' => 'Sobrecamisetas o abrigos',
            ],
            [
                'name' => 'Zapatos',
                'description' => 'Distintos tipos de zapatos',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $events = [
            [
                'name' => 'Casual',
                'description' => 'Ropa informal para salir con los amigos.',
            ],
            [
                'name' => 'Oficina',
                'description' => 'Ropa formal para ir arreglado al trabajo.',
            ],
            [
                'name' => 'Deporte',
                'description' => 'Ropa cómoda para practicar deporte.',
            ],
            [
                'name' => 'Estar por casa',
                'description' => 'Ropa cómoda para estar en casa.',
            ],
            [
                'name' => 'Celebraciones',
                'description' => 'Ropa muy formal típica de bodas o comuniones.',
            ],
            [
                'name' => 'Playero',
                'description' => 'Perfecto para ir a la playa o la piscina.',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }

        $clothes = [
            [
                'name' => 'Camiseta Nike',
                'color' => 'red',
                'season' => 'all',
                'image' => 'https://example.com/clothes/red-nike',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Pantalón Adidas',
                'color' => 'black',
                'season' => 'all',
                'image' => 'https://example.com/clothes/blue-adidas',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Calzonas Puma',
                'color' => 'white',
                'season' => 'summer',
                'image' => 'https://example.com/clothes/white-puma',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Pantalón Levi',
                'color' => 'blue',
                'season' => 'all',
                'image' => 'https://example.com/clothes/blue-levi',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Converse',
                'color' => 'black',
                'season' => 'all',
                'image' => 'https://example.com/clothes/black-converse',
                'comfort_level' => 3,
                'general' => true,
                'category_id' => 4,
            ],
            [
                'name' => 'Camisa cuadros gruesa',
                'color' => 'red',
                'season' => 'winter',
                'image' => 'https://example.com/clothes/gray-hm',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 3,
            ],
            [
                'name' => 'Vans Classic Verde',
                'color' => 'green',
                'season' => 'all',
                'image' => 'https://example.com/clothes/green-vans',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 4,
            ],
        ];

        foreach ($clothes as $clothing) {
            Clothes::create($clothing);
        }
    }
}
