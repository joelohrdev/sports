<div class="grid grid-cols-3 gap-5">
    @forelse($tournaments as $t)
        <article class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
            <div class="text-lg font-medium text-gray-900 flex justify-between items-end">{{ $t->name }} <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">{{ $t->team->name }}</span></div>
            <ul class="divide-y divide-gray-200">
                @foreach($t->games as $id => $game)
                    <li class="py-4 flex">
                        <div>
                            <p class="text-sm font-medium text-gray-900">{{ Carbon\Carbon::parse($game['date'])->format('M d, Y') }} - {{ Carbon\Carbon::parse($game['time'])->format('h:i A ') }}</p>
                            <p class="text-sm text-gray-500">vs. {{ $game['opponent'] }}</p>
                        </div>
                    </li>
                @endforeach
            </ul>
        </article>
    @empty
        <p>No Tournaments</p>
    @endforelse
</div>
