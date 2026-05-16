<header class="sticky top-0 z-50 border-b border-white/10 bg-pcp-bg/80 backdrop-blur-xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ route('pcp-series.mockup') }}" class="group flex items-center gap-3">
            <span class="relative flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 bg-white/5">
                @include('pcp-series.partials.icons', ['name' => 'crosshair', 'class' => 'h-4 w-4 text-pcp-fx'])
            </span>
            <span class="flex flex-col leading-none">
                <span class="text-sm font-semibold tracking-wide text-white">PCP Series</span>
                <span class="text-[10px] font-medium uppercase tracking-[0.2em] text-zinc-500">South Africa</span>
            </span>
            <span class="hidden items-center gap-1 sm:flex" aria-hidden="true">
                <span class="h-1.5 w-1.5 rounded-full bg-pcp-fx"></span>
                <span class="h-1.5 w-1.5 rounded-full bg-pcp-element"></span>
            </span>
        </a>
        <nav class="hidden items-center gap-8 text-sm font-medium text-zinc-400 md:flex" aria-label="Primary">
            <a href="#matches" class="transition-colors hover:text-white">Matches</a>
            <a href="#rankings" class="transition-colors hover:text-white">Rankings</a>
            <a href="#season" class="transition-colors hover:text-white">Season</a>
        </nav>
        <a href="#matches" class="rounded-full border border-white/15 bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-white transition hover:border-pcp-fx/50 hover:bg-pcp-fx/10 sm:text-sm">
            View Matches
        </a>
    </div>
</header>
