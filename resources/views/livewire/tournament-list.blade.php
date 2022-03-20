<div>
    @forelse($tournaments as $t)
        <article class="mb-5 bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
            <div class="text-lg font-medium text-gray-900 flex justify-between items-end">{{ $t->name }} <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">{{ $t->team->name }}</span></div>
            <ul class="divide-y divide-gray-200">
                @foreach($t->games as $id => $game)
                    <li class="py-4 flex justify-between">
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ Carbon\Carbon::parse($game['date'])->format('M d, Y') }} - {{ Carbon\Carbon::parse($game['time'])->format('h:i A ') }}</p>
                            <p class="text-sm text-gray-500">vs. {{ $game['opponent'] }}</p>
                        </div>
                        <div>
                            <p class="mt-2 flex items-center text-sm text-gray-500">
                                @if($game['outcome'] === 'win')
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" x-description="Heroicon name: solid/check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                                @endif
                                @if($game['team_score'])
                                {{ $game['team_score'] }} - {{ $game['opponent_score'] }}
                                    @endif
                            </p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </article>
    @empty
        <p>No Tournaments</p>
    @endforelse
</div>
