<?php
namespace App\Models;

class Movie {
    public function getAllContent(): array {
        return [
            // --- Movies ---
            [
                'id' => 1,
                'title' => 'Avengers: Endgame',
                'type' => 'movie',
                'rating' => '8.4',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'After the devastating events of Infinity War, the Avengers assemble once more to reverse Thanos actions.'
            ],
            [
                'id' => 2,
                'title' => 'We Live in Time',
                'type' => 'movie',
                'rating' => '7.0',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'An encouraging chef and a recent divorcée find their lives changed forever after a chance encounter.'
            ],
            [
                'id' => 3,
                'title' => 'The Town',
                'type' => 'movie',
                'rating' => '7.5',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'A proficient group of thieves rob a bank and hold the assistant manager hostage.'
            ],
            [
                'id' => 4,
                'title' => 'Obsession',
                'type' => 'movie',
                'rating' => '6.1',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'A respected London surgeon’s affair with his son’s fiancée turns into an erotic obsession.'
            ],
            [
                'id' => 5,
                'title' => 'The Dark Knight',
                'type' => 'movie',
                'rating' => '9.0',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'When the menace known as the Joker wreaks havoc on Gotham, Batman must accept his greatest test.'
            ],

            // --- TV Shows ---
            [
                'id' => 6,
                'title' => 'Game of Thrones',
                'type' => 'show',
                'rating' => '9.2',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'Nine noble families fight for control over the lands of Westeros, while an ancient enemy returns.'
            ],
            [
                'id' => 7,
                'title' => 'House of the Dragon',
                'type' => 'show',
                'rating' => '8.4',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'An internal succession war within House Targaryen at the height of its power.'
            ],
            [
                'id' => 8,
                'title' => 'A Knight of the Seven Kingdoms',
                'type' => 'show',
                'rating' => '8.5',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'The adventures of Ser Duncan the Tall and a young Aegon V Targaryen.'
            ],
            [
                'id' => 9,
                'title' => 'Breaking Bad',
                'type' => 'show',
                'rating' => '9.5',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'A chemistry teacher diagnosed with inoperable lung cancer turns to manufacturing methamphetamine.'
            ],
            [
                'id' => 10,
                'title' => 'Band of Brothers',
                'type' => 'show',
                'rating' => '9.4',
                'poster' => 'https://dummyimage.com/400x300/cccccc/000000&text=Test',
                'description' => 'The story of Easy Company of the U.S. Army 101st Airborne Division during World War II.'
            ],
        ];
    }
}