<?php

namespace App\Http\Livewire;

use App\Models\Game;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class GameList extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.game-list', [
            'games' => Game::where('date', '>=', Carbon::today())
                ->orderBy('date', 'ASC')
                ->orderBy('time', 'ASC')
                ->paginate(10)
        ]);
    }
}
