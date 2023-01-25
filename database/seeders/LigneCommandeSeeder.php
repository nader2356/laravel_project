<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Ligne_Commande;

class LigneCommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ligne_commande')->insert([    
            'quantite'=> 50,
            'id_commande'=>1,
            'id_produit'=>1         
            ]);
        
    }
}
