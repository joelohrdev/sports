<div class="grid gap-6 lg:grid-flow-col-dense lg:grid-cols-3">
    @forelse($tournaments as $t)
        <article class="mb-5 bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
            <div class="text-lg font-medium text-gray-900 flex justify-between items-end">
                {{ Str::limit($t->name, 20) }} @if($t->outcome == 'win')🥇@endif
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">{{ $t->team->name }}</span>
            </div>
            <ul class="divide-y divide-gray-200">
                @foreach($t->games as $id => $game)
                    <li class="py-4 flex justify-between items-center">
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ Carbon\Carbon::parse($game['date'])->format('M d, Y') }} - {{ Carbon\Carbon::parse($game['time'])->format('h:i A ') }}</p>
                            <p class="text-sm text-gray-500">vs. {{ $game['opponent'] }} | {{ $game['team_score'] }} - {{ $game['opponent_score'] }}</p>
                        </div>
                        <div>
                            @if($game['outcome'] == 'win')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800"> {{ ucfirst($game['outcome']) }} </span>
                            @elseif($game['outcome'] == 'lose')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"> {{ ucfirst($game['outcome']) }} </span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"> {{ ucfirst($game['outcome']) }} </span>
                            @endif
                        </div>
                    </li>
                @endforeach
            </ul>
        </article>
    @empty
        <p>No Tournaments</p>
    @endforelse
</div>
