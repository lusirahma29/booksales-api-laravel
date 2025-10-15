<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Bumi Manusia',
            'description' => 'The first book in the Buru Quartet, a story set in the Dutch colonial period in Indonesia.',
            'price' => 85000,
            'stock' => 30,
            'cover_photo' => 'bumi_manusia.jpg',
            'genre_id' => 7,
            'author_id' => 5
        ]);

        Book::create([
            'title' => 'A Game of Thrones',
            'description' => 'The first book in A Song of Ice and Fire series, an epic fantasy tale of power and betrayal.',
            'price' => 120000,
            'stock' => 35,
            'cover_photo' => 'game_of_thrones.jpg',
            'genre_id' => 4,
            'author_id' => 2,
        ]);

        Book::create([
            'title' => 'Laskar Pelangi',
            'description' => 'A story about ten school children and their two inspiring teachers in Belitung Island.',
            'price' => 75000,
            'stock' => 45,
            'cover_photo' => 'laskar_pelangi.jpg',
            'genre_id' => 7,
            'author_id' => 4,
        ]);

        Book::create([
            'title' => 'Supernova: Ksatria, Puteri, dan Bintang Jatuh',
            'description' => 'A philosophical science fiction novel exploring love, life, and the universe.',
            'price' => 95000,
            'stock' => 25,
            'cover_photo' => 'supernova.jpg',
            'genre_id' => 3,
            'author_id' => 6,
        ]);

         Book::create([
            'title' => 'Cantik Itu Luka',
            'description' => 'An epic novel blending history, satire, and magical realism in Indonesian setting.',
            'price' => 100000,
            'stock' => 20,
            'cover_photo' => 'cantik_itu_luka.jpg',
            'genre_id' => 4,
            'author_id' => 8,
        ]);
    }
}
