<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    use HasFactory;

    protected $fillable = [
        'team_id', 'name', 'field_name', 'address', 'city', 'state', 'zip_code', 'outcome', 'notes', 'games'
    ];

    protected $casts = [
        'games' => 'json'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
