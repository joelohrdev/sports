<?php

namespace App\Http\Livewire;

use App\Models\Tournament;
use Carbon\Carbon;
use Livewire\Component;

class PastTournamentList extends Component
{
    public function render()
    {
        return view('livewire.past-tournament-list', [
            'tournaments' => Tournament::where('end_date', '<', Carbon::today())->get()
        ]);
    }
}
