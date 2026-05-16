<header class="sticky top-0 z-50 border-b border-white/[0.06] bg-charge-bg/70 backdrop-blur-2xl">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
        <a href="{{ route(request()->routeIs('plenum') ? 'plenum' : 'charge') }}" class="group flex items-center gap-3">
            <span class="flex h-9 w-9 items-center justify-center rounded-lg border border-charge-fx/30 bg-charge-fx/10 font-mono text-xs font-bold text-charge-fx transition group-hover:bg-charge-fx/20">PL</span>
            <span class="flex flex-col leading-tight">
                <span class="text-lg font-bold tracking-[0.2em] text-white">PLENUM</span>
                <span class="hidden text-[9px] font-medium tracking-wide text-zinc-500 sm:block">Stored pressure. Released with precision.</span>
            </span>
        </a>
        <nav class="hidden items-center gap-8 text-sm font-medium text-zinc-400 md:flex" aria-label="Primary">
            <a href="#matches" class="transition hover:text-white">Matches</a>
            <a href="#rankings" class="transition hover:text-white">Rankings</a>
            <a href="#season" class="transition hover:text-white">Season</a>
        </nav>
        <a href="#matches" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs font-semibold uppercase tracking-wider text-white transition hover:border-charge-fx/40 hover:bg-charge-fx/10">
            Enter
        </a>
    </div>
</header>
