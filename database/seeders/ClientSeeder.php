<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nom_client  = array('oussema', 'ryhab', 'ghassen','ahmed');
        $email = array ('oussama@gmail.com', 'ry@gmail.com', 'gh@gmail.com', 'ahmed@gmail.com');
        $adresse = array ('gafsa', 'gabes', 'sfax', 'Mahdia');
        DB::table('client')->insert([
            'nom_client' => $nom_client[array_rand($nom_client, 1)],
            'email' => $email[array_rand($email, 1)],
            'adresse' => $adresse[array_rand($adresse, 1)],
        ]);
    }
}
