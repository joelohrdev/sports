<div class="mb-5">
    <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Total Games
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $totalGames ?? '' }}
            </dd>
        </div>

        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Played Games
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $totalGamesPlayed }}
            </dd>
        </div>

        <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
            <dt class="text-sm font-medium text-gray-500 truncate">
                Total Upcoming Games
            </dt>
            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                {{ $totalUpcomingGames }}
            </dd>
        </div>
    </dl>
</div>
