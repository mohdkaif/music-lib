<?php

namespace App\Repositories;

interface SongRepositoryInterface 
{
    public function getSongByIdWithArtistAlbum($SongId);
    public function getAllSongByParameter($para);
    
}