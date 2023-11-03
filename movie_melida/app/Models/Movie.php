<?php

namespace App\Models;

class Movie
{

    private static $movieData = [
        [
            'id' => 'tt12345678',
            'judul' => 'The Little Mermaid',
            'sinopsis' => 'Plot Ariel is a mermaid princess and the youngest daughter of King Triton, ruler of the merpeople of Atlantica',
            'tahun' => 2023,
            'pemain' => ['Halle Bailey', 'Jonah Hauer-King', 'Melissa McCarthy'],
            'foto_sampul' => 'littlemermaid.jpg',
        ],
        [
            'id' => 'tt1745564',
            'judul' => 'Openheimer',
            'sinopsis' => 'The story of American scientist, J. Robert Oppenheimer, and his role in the development of the atomic bomb.',
            'tahun' => 2023,
            'pemain' => ['	Cillian Murphy', 'Emily Blunt', 'Robert Downey Jr.'],
            'foto_sampul' => 'openheimer.jpg',
        ],
        [
            'id' => 'tt2567856',
            'judul' => 'Mission: Impossible',
            'sinopsis' => 'Ethan Hunt and his IMF team must track down a dangerous weapon before it falls into the wrong hands',
            'tahun' => 2023,
            'pemain' => ['Tom Cruise', 'Hayley Atwell', 'Ving Rhames'],
            'foto_sampul' => 'mission-imposible.jpg',
        ],
        [
            'id' => 'tt1746067',
            'judul' => 'Crater',
            'sinopsis' => ' Crater is a 2023 American science fiction adventure film directed by Kyle Patrick Alvarez and written by John Griffin, Billy Barratt',
            'tahun' => 2023,
            'pemain' => ['Isaiah Russell-Bailey','Billy Barratt','Mckenna Grace'],
            'foto_sampul' => 'crater.jpg',
        ],
        [
            'id' => 'tt1745960',
            'judul' => 'Top Gun: Maverick',
            'sinopsis' => 'After thirty years, Maverick is still pushing the envelope as a top naval aviator, but must confront ghosts of his past when he leads TOP GUNs elite graduates on a mission that demands',
            'tahun' => 2022,
            'pemain' => ['Tom Cruise', 'Jennifer Connelly', 'Miles Teller'],
            'foto_sampul' => 'top-gun.jpg',
        ],
        [
            'id' => 'tt1746077',
            'judul' => 'Elemental',
            'sinopsis' => 'Her fiery outburst breaks a water pipe which floods the basement and provides an entrance for Wade Ripple (Mamoudou Athie), a water element and city inspector',
            'tahun' => 2023,
            'pemain' => ['Mamoudou Athie','Leah Lewis'],
            'foto_sampul' => 'Elemental.png',
        ],

        [
            'id' => 'tt1746001',
            'judul' => 'Jungle Cruise',
            'sinopsis' => 'Jingle Cruise, the holiday overlay edition of the Jungle Cruise, opens November 3 for the 2023 holiday season at Walt Disney Worlds Magic Kingdom',
            'tahun' => 2023,
            'pemain' => ['Dwayne Johnson','Emily Blunt','Edgar Ramirez'],
            'foto_sampul' => 'jugle.jpg',
        ],
        [
            'id' => 'tt1746090',
            'judul' => 'Equalizer 3',
            'sinopsis' => 'Robert McCall finds himself at home in Southern Italy but he discovers his friends are under the control of local crime bosses. As events turn deadly.',
            'tahun' => 2023,
            'pemain' => ['Denzel Washington', 'Dakota Fanning', 'Eugenio Mastrandrea'],
            'foto_sampul' => 'equalizer.jpg',
        ],


    ];

    public static function all(){
        // pakai method collection
        return collect(self::$movieData);
    }

    public static function find($id){
        // panggil method all()
        $movie = static::all();
        return $movie->firstWhere('id', $id);
    }
}
