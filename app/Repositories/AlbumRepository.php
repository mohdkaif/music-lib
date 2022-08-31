<?php

namespace App\Repositories;

use App\Repositories\AlbumRepositoryInterface;
use App\Models\Album;

class AlbumRepository implements AlbumRepositoryInterface 
{
    

    public function getAlbumByIdWithSong($AlbumId) 
    {
        return Album::with('song_data')->find($AlbumId);
    }

   
}
