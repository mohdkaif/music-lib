<?php

namespace App\Http\Controllers;

use App\Repositories\SongRepositoryInterface;
use Illuminate\Http\Request;

class SongController extends Controller
{
    private SongRepositoryInterface $songRepository;

    public function __construct(SongRepositoryInterface $songRepository)
    {
        $this->songRepository = $songRepository;
    }

    public function index(Request $request)
    {
        return response()->json([
            'data' => $this->songRepository->getAllSongByParameter($request->parameter)
        ]);
    }


    public function show($id)
    {
        // $song_id = $request->route('id');

        return response()->json([
            'data' => $this->songRepository->getSongByIdWithArtistAlbum($id)
        ]);
    }
}
