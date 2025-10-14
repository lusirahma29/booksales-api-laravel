<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
            [
                'name' => 'Fantasy',
                'description' => 'A genre featuring magical elements, mythical creatures, and imaginary worlds that do not exist in reality.'
            ],
            [
                'name' => 'Mystery',
                'description' => 'Stories centered around solving a crime or puzzle, typically involving a detective or investigator uncovering clues.'
            ],
            [
                'name' => 'Romance',
                'description' => 'Narratives focused on romantic relationships between characters, with emotional connections and love as the central theme.'
            ],
            [
                'name' => 'Historical Fiction',
                'description' => 'Stories set in the past that blend real historical events and figures with fictional characters and plotlines.'
            ],
            [
                'name' => 'Thriller',
                'description' => 'Fast-paced, suspenseful stories designed to keep readers on edge with tension, danger, and unexpected plot twists.'
                ]
        ];
            public function getGenres() {
        return $this->genres;
    }
}

