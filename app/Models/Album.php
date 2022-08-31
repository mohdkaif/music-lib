<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Song;
use App\Models\Artist;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'artist_id',
    ];

    public function song()
    {
        return $this->hasMany(Song::class, 'songable_id', 'id');
    }

    public function artist()
    {
        return $this->hasOne(Artist::class, 'id', 'artist_id');
    }

    public function song_data()
    {
        return $this->song()->where('songable_type', '=', 'album');
    }
   
}
