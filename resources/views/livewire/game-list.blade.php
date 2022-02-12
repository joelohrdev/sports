<div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
    <ol class="divide-y divide-gray-100 text-sm leading-6 lg:col-span-7 xl:col-span-8">
        @forelse($games as $game)
        <li class="relative flex space-x-6 py-6 xl:static">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-gray-700 via-gray-900 to-black"></div>
            <div class="flex-auto">
                <h3 class="pr-10 font-semibold text-gray-900 xl:pr-0">{{ $game->team->player->first_name }} | {{ $game->team->name }}</h3>
                <dl class="mt-2 flex flex-col text-gray-500 xl:flex-row">
                    <div class="flex items-start space-x-3">
                        <dt class="mt-0.5">
                            <span class="sr-only">Date</span>
                            <!-- Heroicon name: solid/calendar -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                        </dt>
                        <dd><time datetime="2022-01-10T17:00">{{ Carbon\Carbon::parse($game->date)->format('F d, Y') }} at {{ Carbon\Carbon::parse($game->time)->format('g:i A') }}</time></dd>
                    </div>
                    <div class="mt-2 flex items-start space-x-3 xl:mt-0 xl:ml-3.5 xl:border-l xl:border-gray-400 xl:border-opacity-50 xl:pl-3.5">
                        <dt class="mt-0.5">
                            <span class="sr-only">Location</span>
                            <!-- Heroicon name: solid/location-marker -->
                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                            </svg>
                        </dt>
                        <dd>{{ $game->location }}</dd>
                    </div>
                </dl>
            </div>
        </li>
        @empty
        <li>No Upcoming Games</li>
        @endforelse
    </ol>
    {{ $games->links() }}
</div>
