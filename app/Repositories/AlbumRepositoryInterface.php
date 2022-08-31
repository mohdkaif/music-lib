<?php

namespace App\Repositories;

interface AlbumRepositoryInterface 
{
    public function getAlbumByIdWithSong($AlbumId);
    
}