<?php

namespace App\Http\Controllers;

use App\Repositories\AlbumRepositoryInterface;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    private AlbumRepositoryInterface $albumRepository;

    public function __construct(AlbumRepositoryInterface $albumRepository) 
    {
        $this->albumRepository = $albumRepository;
    }
    
    public function index()
    {
    }


    public function show($id)
    {
       // $album_id = $request->route('id');

        return response()->json([
            'data' => $this->albumRepository->getAlbumByIdWithSong($id)
        ]);
    }
}
