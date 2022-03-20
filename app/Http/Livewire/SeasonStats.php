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
    public $tourGames;
    public $totalTourGames;

    public function mount()
    {
        $this->tourGames = Tournament::pluck('games')->toArray();
        foreach($this->tourGames as $game) {
            foreach ($game as $value) {
                $singleArray[] = $value;
            }
        }

        $this->totalGames = Game::count() + $this->totalTourGames;
        $this->totalGamesPlayed = Game::where('date', '<', Carbon::now())->count() + $this->totalTourGames;
        $this->totalUpcomingGames = Game::where('date', '>=', Carbon::now())->count();
    }

    public function render()
    {
        return view('livewire.season-stats');
    }
}
