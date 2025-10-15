<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Andrea Hirata',
            'photo' => 'andrea_hirata.jpg',
            'bio' => 'Indonesian author best known for the novel Laskar Pelangi (The Rainbow Troops), depicting life in Belitung.'
        ]);

        Author::create([
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya_ananta_toer.jpg',
            'bio' => 'Renowned Indonesian author and humanist, famous for the Buru Quartet tetralogy.'
        ]);

        Author::create([
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Prolific Indonesian author known for inspirational and fantasy novels, including Rindu and Hujan.'
        ]);

        Author::create([
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'British author, best known for the Harry Potter series.'
        ]);

        Author::create([
            'name' => 'Leila S. Chudori',
            'photo' => 'leila_s_chudori.jpg',
            'bio' => 'Indonesian author and journalist known for Pulang and Laut Bercerita.'
        ]);
    }
}
