<div class="min-h-full">
    <nav class="bg-sky-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-end h-16">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="flex items-baseline space-x-4">
                            <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                            <a href="/" class="{{ Request::is('/') ? 'bg-sky-700' : 'hover:bg-sky-500 hover:bg-opacity-75' }} text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>
                            <a href="/game-archive" class="{{ Request::is('game-archive') ? 'bg-sky-700' : 'hover:bg-sky-500 hover:bg-opacity-75' }} text-white hover:bg-sky-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Game Archive</a>
                            <a href="/tournament-archive" class="{{ Request::is('tournament-archive') ? 'bg-sky-700' : 'hover:bg-sky-500 hover:bg-opacity-75' }} text-white hover:bg-sky-500 hover:bg-opacity-75 px-3 py-2 rounded-md text-sm font-medium">Tournament Archive</a>
                        </div>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" class="bg-indigo-600 inline-flex items-center justify-center p-2 rounded-md text-indigo-200 hover:text-white hover:bg-indigo-500 hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!--
                          Heroicon name: outline/menu

                          Menu open: "hidden", Menu closed: "block"
                        -->
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <!--
                          Heroicon name: outline/x

                          Menu open: "block", Menu closed: "hidden"
                        -->
                        <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-indigo-700 text-white", Default: "text-white hover:bg-indigo-500 hover:bg-opacity-75" -->
                <a href="/" class="bg-indigo-700 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Dashboard</a>

                <a href="/game-archive" class="text-white hover:bg-sky-500 hover:bg-opacity-75 block px-3 py-2 rounded-md text-base font-medium">Game Archive</a>

                <a href="/tournament-archive" class="text-white hover:bg-sky-500 hover:bg-opacity-75 block px-3 py-2 rounded-md text-base font-medium">Tournament Archive</a>
            </div>
        </div>
    </nav>

</div>
