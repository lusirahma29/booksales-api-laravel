<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
    [
        'name' => 'J.K. Rowling',
        'photo' => 'jk_rowling.jpg',
        'bio' => 'British author, best known for the Harry Potter series.'
    ],
    [
        'name' => 'George R.R. Martin',
        'photo' => 'george_rr_martin.jpg',
        'bio' => 'American novelist and short story writer, known for A Song of Ice and Fire.'
    ],
    [
        'name' => 'Isaac Asimov',
        'photo' => 'isaac_asimov.jpg',
        'bio' => 'American author and professor of biochemistry, known for his works in science fiction.'
    ],
    [
        'name' => 'Leila S. Chudori',
        'photo' => 'leila.jpg',
        'bio' => 'An Indonesian writer and film critic.'
    ],
    [
        'name' => 'Tere Liye',
        'photo' => 'tere_liye.jpg',
        'bio' => 'An Indonesian writer and accountant.'
        ]
    ];
    public function getAuthors() {
        return $this->authors;
    }
}
