<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'year',
        'songable_type',
        'songable_id',
    ];

    public function album()
    {
        return $this->hasOne(Album::class, 'id', 'songable_id');
    }

    public function artist()
    {
        return $this->hasOne(Artist::class, 'id', 'songable_id');
    }

}
