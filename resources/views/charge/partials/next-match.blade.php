<section id="matches" class="border-b border-white/[0.06] py-16 sm:py-24" aria-labelledby="next-match-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-charge-element">Next on the calendar</p>

        <article class="charge-glass relative mt-6 overflow-hidden rounded-2xl p-8 sm:p-10 lg:p-12">
            <div class="absolute -right-20 top-0 h-64 w-64 rounded-full bg-charge-element/10 blur-3xl" aria-hidden="true"></div>
            <div class="absolute -left-20 bottom-0 h-48 w-48 rounded-full bg-charge-fx/10 blur-3xl" aria-hidden="true"></div>

            <div class="relative max-w-2xl">
                <h2 id="next-match-title" class="text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">
                    FIVE·FIVE: Legends Farm
                </h2>
                <div class="mt-6 flex flex-wrap gap-5 text-sm text-zinc-400">
                    <span class="inline-flex items-center gap-2">
                        @include('charge.partials.icons', ['name' => 'map-pin', 'class' => 'h-4 w-4 text-charge-fx'])
                        Rayton, Gauteng
                    </span>
                    <span class="inline-flex items-center gap-2 font-mono">
                        @include('charge.partials.icons', ['name' => 'target', 'class' => 'h-4 w-4 text-charge-element'])
                        96 Stage Points
                    </span>
                </div>
                <p class="mt-4 max-w-md text-zinc-400">PRS-style barricade and positional stages.</p>
                <div class="mt-9 flex flex-wrap gap-3">
                    <a href="#" class="inline-flex rounded-lg bg-charge-element px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-charge-element/90">
                        Register Interest
                    </a>
                    <a href="#" class="inline-flex rounded-lg border border-white/15 px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-white/5">
                        View Match Details
                    </a>
                </div>
            </div>
        </article>
    </div>
</section>
