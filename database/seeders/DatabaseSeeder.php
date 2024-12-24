<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'name' => 'Aglal',
            'email' => 'aglal@gmail.com',
            'password' => 'aglal123',
        ]);
        $data = [
            [ 'name' => 'Wortel', 'slug' => 'wortel', 'stock' => 29, 'price' => 34000.00, 'unit' => 'Kg', 'image' => 'wortel-img.png' ],
            [ 'name' => 'Kol', 'slug' => 'kol', 'stock' => 50, 'price' => 15000.00, 'unit' => 'Kg', 'image' => 'kol-img.png' ],
            [ 'name' => 'Brokoli', 'slug' => 'brokoli', 'stock' => 25, 'price' => 45000.00, 'unit' => 'Kg', 'image' => 'brokoli-img.png' ],
            [ 'name' => 'Timun', 'slug' => 'timun', 'stock' => 40, 'price' => 12000.00, 'unit' => 'Kg', 'image' => 'timun-img.png' ],
            [ 'name' => 'Kangkung', 'slug' => 'kangkung', 'stock' => 60, 'price' => 10000.00, 'unit' => 'Kg', 'image' => 'kangkung-img.png' ],
            [ 'name' => 'Tomat', 'slug' => 'tomat', 'stock' => 35, 'price' => 20000.00, 'unit' => 'Kg', 'image' => 'tomat-img.png' ],
            [ 'name' => 'Jagung', 'slug' => 'jagung', 'stock' => 20, 'price' => 18000.00, 'unit' => 'Kg', 'image' => 'jagung-img.png' ],
            [ 'name' => 'Bayam', 'slug' => 'bayam', 'stock' => 45, 'price' => 9000.00, 'unit' => 'Kg', 'image' => 'bayam-img.png' ],
        ];
        Product::insert($data);        
    }
}
