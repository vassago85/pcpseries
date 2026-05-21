<section id="matches" class="border-b border-white/10 py-16 sm:py-20" aria-labelledby="next-match-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="text-xs font-semibold uppercase tracking-[0.25em] text-pcp-element">Up next</p>
        <h2 id="next-match-heading" class="sr-only">Next match</h2>

        <article class="pcp-glass relative mt-6 overflow-hidden rounded-2xl p-8 sm:p-10 lg:p-12">
            <div class="absolute right-0 top-0 h-full w-1/3 bg-gradient-to-l from-pcp-fx/10 to-transparent" aria-hidden="true"></div>
            <div class="relative max-w-2xl">
                <h3 class="text-2xl font-bold tracking-tight text-white sm:text-3xl lg:text-4xl">
                    PARC: Legends Farm
                </h3>
                <div class="mt-6 flex flex-wrap gap-4 text-sm text-zinc-400">
                    <span class="inline-flex items-center gap-2">
                        @include('pcp-series.partials.icons', ['name' => 'map-pin', 'class' => 'h-4 w-4 text-pcp-fx'])
                        Rayton, Gauteng
                    </span>
                    <span class="inline-flex items-center gap-2 font-mono">
                        @include('pcp-series.partials.icons', ['name' => 'target', 'class' => 'h-4 w-4 text-pcp-element'])
                        96 Stage Points
                    </span>
                </div>
                <p class="mt-4 text-zinc-400">PRS-style barricade and positional stages.</p>
                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#" class="inline-flex rounded-lg bg-pcp-element px-6 py-3 text-sm font-semibold text-white transition hover:bg-pcp-element/90">
                        Enter Match
                    </a>
                    <a href="#" class="inline-flex rounded-lg border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:bg-white/10">
                        View Match Details
                    </a>
                </div>
            </div>
        </article>
    </div>
</section>
