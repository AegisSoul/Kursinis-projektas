<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    protected $fillable = [
        'FirstName',
        'LastName',
        'Position',
        'Height',
        'Average',
        'team_id'
    ];

    public function stats() {
        return $this->hasOne(Stats::class, 'player_id');
    }

    public function Team() {
        return $this->belongsTo(Team::class);
    }
}
