@include('charge.partials.data')

<section class="relative overflow-hidden border-b border-white/[0.06]" aria-labelledby="plenum-hero">
    <div class="charge-crosshair pointer-events-none absolute inset-0 opacity-40" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl gap-12 px-4 py-14 sm:px-6 lg:grid-cols-2 lg:items-center lg:gap-16 lg:px-8 lg:py-20">
        <div class="charge-animate-in">
            <p class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-[11px] font-medium uppercase tracking-[0.2em] text-zinc-400 charge-pill-fx">
                <span class="charge-live-dot h-1.5 w-1.5 rounded-full bg-charge-fx"></span>
                Powered by FX Airguns &amp; Element Optics
            </p>

            <h1 id="plenum-hero" class="charge-headline">PLENUM</h1>

            <p class="mt-4 text-xl font-medium italic tracking-tight text-zinc-200 sm:text-2xl">
                Stored pressure. Released with precision.
            </p>

            <p class="mt-5 max-w-lg text-base leading-relaxed text-zinc-400 sm:text-lg">
                South Africa's national PCP precision series. Follow rankings, compete across the calendar, and track your season on one platform.
            </p>

            <div class="mt-9 flex flex-wrap gap-3">
                <a href="#matches" class="inline-flex items-center justify-center rounded-lg bg-charge-fx px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-black transition hover:bg-charge-fx/90 hover:shadow-[0_0_24px_rgba(61,158,80,0.35)]">
                    View Matches
                </a>
                <a href="#rankings" class="inline-flex items-center justify-center rounded-lg border border-white/15 bg-transparent px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-white transition hover:border-white/30 hover:bg-white/5">
                    View Rankings
                </a>
            </div>
        </div>

        <aside class="charge-animate-in-delay-1 charge-glass relative overflow-hidden rounded-2xl p-1" aria-label="Season dashboard preview">
            <div class="rounded-xl bg-charge-elevated/80 p-5 sm:p-6">
                <div class="mb-5 flex items-center justify-between border-b border-white/[0.06] pb-4">
                    <div>
                        <p class="font-mono text-[10px] uppercase tracking-[0.3em] text-zinc-500">Live</p>
                        <h2 class="text-base font-semibold text-white">Current Season Race</h2>
                    </div>
                    <span class="rounded bg-charge-fx/15 px-2 py-0.5 font-mono text-[10px] text-charge-fx">R4/6</span>
                </div>

                <ul class="space-y-2.5" role="list">
                    @foreach (array_slice($standings, 0, 3) as $row)
                        <li class="flex items-center gap-3 rounded-lg border border-white/[0.04] bg-black/30 px-3 py-3 transition hover:border-white/10">
                            <span class="w-6 font-mono text-xs font-bold {{ $row['pos'] === 1 ? 'text-charge-fx' : 'text-zinc-500' }}">{{ $row['pos'] }}</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-semibold text-white">{{ $row['name'] }}</p>
                                <p class="mt-0.5 text-[11px] text-zinc-500">FX Panthera <span class="text-zinc-700">•</span> Element Theos</p>
                            </div>
                            <div class="text-right">
                                <p class="font-mono text-sm font-bold tabular-nums text-white">{{ $row['points'] }}<span class="text-[10px] font-normal text-zinc-500"> pts</span></p>
                                @include('charge.partials.movement', ['dir' => $row['dir'], 'delta' => $row['delta']])
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-4 flex items-center justify-between rounded-lg border border-charge-element/25 bg-charge-element/5 px-3 py-2.5">
                    <div>
                        <p class="text-[10px] font-semibold uppercase tracking-wider text-charge-element">Next Match</p>
                        <p class="text-sm font-semibold text-white">Legends Farm</p>
                    </div>
                    <p class="font-mono text-[10px] text-zinc-400">96 Round Match</p>
                </div>
            </div>
        </aside>
    </div>
</section>
