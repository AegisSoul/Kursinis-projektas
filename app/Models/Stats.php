<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    use HasFactory;
    protected $fillable = [
        'MinPoints',
        'MaxPoints',
        'GamesPlayed',
        'player_id'
    ];
}
