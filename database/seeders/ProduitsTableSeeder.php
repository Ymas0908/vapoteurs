<?php

namespace Database\Seeders;

use App\Models\Produit;
use Illuminate\Database\Seeder;
use App\Models\Produits;
use Faker\Factory as Faker;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i=0; $i < 20; $i++) {
            Produit::created([
                'nom' =>$faker->name(),
                'description' => $faker->text,
                'prix' => $faker->numberBetween(5000, 15000),
                'image'=> 'https://placehold.co/300x200',

            ]);
        }
    }
}
