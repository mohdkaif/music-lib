<?php

namespace App\Repositories;

use App\Repositories\ArtistRepositoryInterface;
use App\Models\Artist;

class ArtistRepository implements ArtistRepositoryInterface
{
    public function getArtistByIdWithAlbum($ArtistId)
    {
        return Artist::with('album', 'song')->find($ArtistId);
    }

    public function getAllArtistWithAlbumAndSong()
    {
        return Artist::withCount('album','song')->get();
    }
}
