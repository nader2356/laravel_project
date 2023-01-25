<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $name  = array("lait", "gateau", "yaourt", "ordinateur","sac a main");
       $quantite = array("15","200", "500", "1000", "152", "7000");
       $prix = array("15","200", "500", "1000", "152", "7000");

       DB::table('produits')->insert([
        "name" =>$name[array_rand($name,1)],
        "quantite" =>$quantite[array_rand($quantite,1)],
        "prix" =>$prix[array_rand($prix,1)],
        "id_cat" => 1
       ]);
    }
}
