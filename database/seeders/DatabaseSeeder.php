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
                'image' => 'fondocamisetas.png',

            ],
            [
                'name' => 'Pantalones',
                'description' => 'Distintos tipos de pantalones',
                'image' => 'fondopantalones.png',

            ],
            [
                'name' => 'Abrigos',
                'description' => 'Sobrecamisetas o abrigos',
                'image' => 'fondocamisas.png',

            ],
            [
                'name' => 'Zapatos',
                'description' => 'Distintos tipos de zapatos',
                'image' => 'fondozapatos.png',

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
                'name' => 'Camiseta Negra',
                'color' => 'black',
                'season' => 'all',
                'image' => 'image-1.jpg',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Pantalón Vaquero',
                'color' => 'blue',
                'season' => 'all',
                'image' => 'image-3.jpg',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Pantalón vaquero corto',
                'color' => 'black',
                'season' => 'summer',
                'image' => 'image-2.jpg',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Pantalón Deportivo',
                'color' => 'black',
                'season' => 'all',
                'image' => 'image-6.jpg',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Zapatillas deportivas',
                'color' => 'white',
                'season' => 'all',
                'image' => 'image-5.jpg',
                'comfort_level' => 3,
                'general' => true,
                'category_id' => 4,
            ],
            [
                'name' => 'Camisa blanca',
                'color' => 'white',
                'season' => 'all',
                'image' => 'image-7.jpg',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Zapatos de traje',
                'color' => 'black',
                'season' => 'all',
                'image' => 'image-8.jpg',
                'comfort_level' => 5,
                'general' => true,
                'category_id' => 4,
            ],
            [
                'name' => 'Sudadera',
                'color' => 'gray',
                'season' => 'winter',
                'image' => 'image-9.jpg',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 3,
            ],
            [
                'name' => 'Camiseta Blanca',
                'color' => 'negra',
                'season' => 'all',
                'image' => 'image-4.jpg',
                'comfort_level' => 3,
                'general' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Chaqueta de Cuero',
                'color' => 'brown',
                'season' => 'winter',
                'image' => 'image-10.jpg',
                'comfort_level' => 4,
                'general' => true,
                'category_id' => 3,
            ],
            [
                'name' => 'Bañador Azul',
                'color' => 'blue',
                'season' => 'summer',
                'image' => 'image-11.jpg',
                'comfort_level' => 3,
                'general' => true,
                'category_id' => 2,
            ],
            [
                'name' => 'Chanclas',
                'color' => 'black',
                'season' => 'summer',
                'image' => 'image-12.jpg',
                'comfort_level' => 3,
                'general' => true,
                'category_id' => 4,
            ],
            [
                'name' => 'Camiseta sin mangas',
                'color' => 'white',
                'season' => 'summer',
                'image' => 'image-13.jpg',
                'comfort_level' => 1,
                'general' => true,
                'category_id' => 1,
            ],
            [
                'name' => 'Chaqueta de traje',
                'color' => 'negra',
                'season' => 'all',
                'image' => 'image-14.jpg',
                'comfort_level' => 9,
                'general' => true,
                'category_id' => 3,
            ],
            
        ];

        foreach ($clothes as $clothing) {
            Clothes::create($clothing);
        }
    }
}
