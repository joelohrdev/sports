<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class PastGameList extends Component
{
    public function render()
    {
        return view('livewire.past-game-list', [
            'games' => Game::where('date', '<', Carbon::today())
                ->orderBy('date', 'DESC')
                ->orderBy('time', 'DESC')
                ->paginate(10)
        ]);
    }
}
