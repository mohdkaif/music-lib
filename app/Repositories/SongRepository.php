<?php

namespace App\Repositories;

use App\Repositories\SongRepositoryInterface;
use App\Models\Song;

class SongRepository implements SongRepositoryInterface
{
    public function getSongByIdWithArtistAlbum($SongId)
    {
        $song_data = Song::find($SongId);
        if($song_data->songable_type=='album'){
            return Song::with([
                'album' => function ($query) {
                    $query->select('id', 'name','year','artist_id')
                        ->with([
                            'artist' => function ($q) {
                                $q->select('id', 'name');
                            }
                        ]);
                }
            ])->where('songable_type','album')->find($SongId);
        }else{
            return Song::with([
                'album' => function ($query) {
                    $query->select('id', 'name','year','artist_id')
                        ->with([
                            'artist' => function ($q) {
                                $q->select('id', 'name');
                            }
                        ]);
                }
            ])->where('songable_type','artist')->find($SongId);
        }
       
    }

    public function getAllSongByParameter($para)
    {
        return Song::where('name', 'like', "%{$para}%")->get();
    }

}
