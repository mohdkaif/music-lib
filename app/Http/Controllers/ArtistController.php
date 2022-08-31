<?php

namespace App\Http\Controllers;

use App\Repositories\ArtistRepositoryInterface;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    private ArtistRepositoryInterface $artistRepository;

    public function __construct(ArtistRepositoryInterface $artistRepository) 
    {
        $this->artistRepository = $artistRepository;
    }
    
    public function index()
    {
        return response()->json([
            'data' => $this->artistRepository->getAllArtistWithAlbumAndSong()
        ]);
    }


    public function show($id)
    {
       // $artist_id = $request->route('id');

        return response()->json([
            'data' => $this->artistRepository->getArtistByIdWithAlbum($id)
        ]);
    }
}
