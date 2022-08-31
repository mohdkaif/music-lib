<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function album()
    {
        return $this->hasMany(Album::class);
    }

    public function song()
    {
        return $this->hasMany(Song::class,'songable_id')->where('songable_type','artist');
    }

    
}
