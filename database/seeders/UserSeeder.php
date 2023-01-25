<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $users=[
            [
            'name'=>'oussemajjjj',
            'email'=>'12389jjj@gmail.com',
            'password'=>'$2y$10$pmf174KDKQwMmYGMa0iDbenKiD/uzaqj9O72WDKNv0mfOBFEkeidi'
            ],
          
            ];
            User::insert($users);
    }
}
