<?php

namespace App\Http\Livewire;

use App\Models\Game;
use App\Models\Tournament;
use Carbon\Carbon;
use Livewire\Component;

class SeasonStats extends Component
{
    public $totalGames;
    public $totalGamesPlayed;
    public $totalUpcomingGames;
    public $tourgames;

    public function mount()
    {
        $this->totalGames = Game::count();
        $this->totalGamesPlayed = Game::where('date', '<', Carbon::now())->count();
        $this->totalUpcomingGames = Game::where('date', '>=', Carbon::now())->count();
    }

    public function render()
    {
        return view('livewire.season-stats');
    }
}
