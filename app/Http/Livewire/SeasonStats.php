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
    public $allTourGamesArray;
    public $allTourGamesFlat;
    public $tourGames;
    public $totalTourGames;
    public $totalUpcomingTourGames;
    public $totalPastTourGames;

    public function mount()
    {
//        $this->tourGames = Tournament::pluck('games')->toArray();
//        foreach($this->tourGames as $game) {
//            foreach ($game as $value) {
//                $singleArray[] = $value;
//            }
//        }

        $this->allTourGamesArray = Tournament::pluck('games')->toArray();
        $this->allTourGamesFlat = collect($this->allTourGamesArray)->flatten(1);
        $this->totalTourGames = $this->allTourGamesFlat->count();
        $this->totalUpcomingTourGames = $this->allTourGamesFlat->where('date', '>=', Carbon::now()->toDateString())->count();
        $this->totalPastTourGames = $this->allTourGamesFlat->where('date', '<', Carbon::now()->toDateString())->count();

        $this->totalGames = Game::count() + $this->totalTourGames;
        $this->totalGamesPlayed = Game::where('date', '<', Carbon::now())->count() + $this->totalPastTourGames;
        $this->totalUpcomingGames = Game::where('date', '>=', Carbon::now())->count() + $this->totalUpcomingTourGames;
    }

    public function render()
    {
        return view('livewire.season-stats');
    }
}
