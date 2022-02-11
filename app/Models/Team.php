<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'year',
    ];

    public function player()
    {
        return $this->hasOne(Player::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }

    public function tournaments()
    {
        return $this->hasMany(Tournament::class);
    }
}
