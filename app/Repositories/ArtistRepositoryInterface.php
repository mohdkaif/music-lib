<?php

namespace App\Repositories;

interface ArtistRepositoryInterface 
{
    public function getArtistByIdWithAlbum($ArtistId);
   
}