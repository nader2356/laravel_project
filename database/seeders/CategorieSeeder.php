<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $name = array('Animalerie', 'Applis et Jeux', 'Beauté & parfums', 'Informatique', 'Sports & Loisirs');

        DB::table('categories')->insert([
            'name' => $name[array_rand($name, 1)],
        ]);

       
    }
}
