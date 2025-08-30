<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        Car::create([
            'name' => 'Model T',
            'creator' => 'Henry Ford',
            'description' => 'The first mass-produced car that made automobiles affordable for the average American.'
        ]);

        Car::create([
            'name' => 'Volkswagen Beetle',
            'creator' => 'Ferdinand Porsche',
            'description' => 'An iconic compact car that became one of the best-selling vehicles in history.'
        ]);

        Car::create([
            'name' => 'Lamborghini Miura',
            'creator' => 'Ferruccio Lamborghini',
            'description' => 'Often considered the first supercar with its revolutionary mid-engine design.'
        ]);

        Car::create([
            'name' => 'Ferrari 250 GTO',
            'creator' => 'Enzo Ferrari',
            'description' => 'A legendary race car known for its performance, beauty, and extreme rarity.'
        ]);

        Car::create([
            'name' => 'Tesla Roadster',
            'creator' => 'Elon Musk',
            'description' => 'An electric sports car that showcased the potential of sustainable performance vehicles.'
        ]);
    }
}
