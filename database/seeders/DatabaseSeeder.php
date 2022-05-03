<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "nom" => "yosra",
                "prenom" => "yosra",
                "email" => "yosra@gmail.com",
                "numtel" => "12345678",
                "date_naissance" => "1999-10-15",
                "genre" => "female",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ],
            [
                "nom" => "etudiant",
                "prenom" => "etudiant",
                "email" => "etudiant@gmail.com",
                "numtel" => "12345679",
                "date_naissance" => "1999-10-15",
                "genre" => "female",
                "role" => "admin",
                "password" => Hash::make("adminadmin"),
            ]
        ]);
        DB::table('categories')->insert([
            [
                "label" => "Dévélopement",
            ],
            [
                "label" => "Science de la vie",
            ],
            [
                "label" => "Mobile",
            ],
            [
                "label" => "Physique",
            ]
        ]); 
        DB::table('events')->insert([
            [
                "image" => "images/mBxahgq4d8I32teLMptYb4fZI9zNu9kM2JpN1pxR.jpg",
                "titre" => "lorem ipsum",
                "description" => "lorem ipsum",
                "date" => "2022-04-20",
                "categorie_id" => 1,
            ],
            [
                "image" => "images/knF3D6RiDZoct5kYZVMBEfE6XgyuEAf3yt2CIlFX.jpg",
                "titre" => "lorem ipsum",
                "description" => "lorem ipsum",
                "date" => "2022-04-20",
                "categorie_id" => 2,
            ],
            [
                "image" => "images/knF3D6RiDZoct5kYZVMBEfE6XgyuEAf3yt2CIlFX.jpg",
                "titre" => "lorem ipsum",
                "description" => "lorem ipsum",
                "date" => "2022-04-20",
                "categorie_id" => 3,
            ],
            [
                "image" => "images/knF3D6RiDZoct5kYZVMBEfE6XgyuEAf3yt2CIlFX.jpg",
                "titre" => "lorem ipsum",
                "description" => "lorem ipsum",
                "date" => "2022-04-20",
                "categorie_id" => 4,
            ],
        ]); 
    }
}
