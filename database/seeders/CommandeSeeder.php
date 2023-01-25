<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Commande;

class CommandeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Commande = [
            [
                'total' => 'oussemajjjj',
                'date' => '12389jjj@gmail.com',
                
            ],
        ];
        Commande::insert($commande);
    }
}
