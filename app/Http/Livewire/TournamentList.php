<?php

namespace App\Http\Livewire;

use App\Models\Tournament;
use Carbon\Carbon;
use Livewire\Component;

class TournamentList extends Component
{
    public function render()
    {
        return view('livewire.tournament-list',[
            'tournaments' => Tournament::where('end_date', '>=', Carbon::today())
                ->orderby('start_date', 'ASC')
                ->get()
        ]);
    }
}
