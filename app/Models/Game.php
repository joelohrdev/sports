<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id', 'date', 'time', 'field', 'opponent', 'location', 'notes', 'outcome', 'team_score', 'opponent_score'
    ];

    protected $dates = [
        'date' => 'date'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
