<section id="rankings" class="border-b border-white/[0.06] py-16 sm:py-24" aria-labelledby="rankings-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 flex flex-col gap-2 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-charge-fx">Standings</p>
                <h2 id="rankings-title" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">Overall Leaderboard</h2>
            </div>
            <p class="font-mono text-xs text-zinc-500">After Match 4 of 6</p>
        </div>

        <div class="mb-5 flex flex-wrap items-center gap-2">
            <span class="rounded-full border border-charge-fx/35 bg-charge-fx/12 px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-charge-fx">Overall</span>
            <span class="rounded-full border border-white/12 bg-white/[0.03] px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-zinc-400">PCP</span>
            <span class="rounded-full border border-white/12 bg-white/[0.03] px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-zinc-400">Rimfire</span>
        </div>

        <div class="charge-glass overflow-hidden rounded-2xl">
            <div class="hidden grid-cols-[4rem_1fr_6rem_6rem_5rem_5rem] gap-4 border-b border-white/[0.06] px-6 py-3 font-mono text-[10px] font-semibold uppercase tracking-[0.2em] text-zinc-500 lg:grid">
                <span>Pos</span>
                <span>Shooter</span>
                <span>Class</span>
                <span class="text-right">Points</span>
                <span class="text-center">Move</span>
                <span class="text-right">Hit %</span>
            </div>

            <ul role="list">
                @foreach ($standings as $row)
                    <li class="charge-row-hover grid grid-cols-[3rem_1fr_auto] items-center gap-3 border-b border-white/[0.04] px-4 py-5 last:border-0 sm:px-6 lg:grid-cols-[4rem_1fr_6rem_6rem_5rem_5rem] lg:gap-4">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg border font-mono text-sm font-bold {{ $row['pos'] === 1 ? 'border-charge-fx/40 bg-charge-fx/10 text-charge-fx' : 'border-white/10 bg-black/40 text-zinc-400' }}">
                            {{ str_pad($row['pos'], 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <div>
                            <p class="text-base font-semibold text-white">{{ $row['name'] }}</p>
                            <p class="mt-0.5 font-mono text-xs text-zinc-500 lg:hidden">{{ $row['discipline'] }} <span class="mx-1">•</span> {{ $row['hit'] }}</p>
                        </div>
                        <p class="hidden lg:block font-mono text-xs text-zinc-400">{{ $row['discipline'] }}</p>
                        <p class="font-mono text-lg font-bold tabular-nums text-white lg:text-right">{{ $row['points'] }}</p>
                        <div class="hidden justify-center lg:flex">
                            @include('charge.partials.movement', ['dir' => $row['dir'], 'delta' => $row['delta']])
                        </div>
                        <p class="hidden font-mono text-sm tabular-nums text-zinc-300 lg:block lg:text-right">{{ $row['hit'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4 grid gap-3 lg:grid-cols-2">
            <article class="charge-glass rounded-xl p-4">
                <div class="mb-3 flex items-center justify-between">
                    <h3 class="text-sm font-bold text-white">PCP Leaderboard</h3>
                    <span class="rounded-full border border-white/15 bg-white/[0.03] px-2.5 py-1 font-mono text-[10px] uppercase tracking-wide text-zinc-400">PCP</span>
                </div>
                <ul class="space-y-2">
                    @foreach (array_slice($leaderboards['pcp'], 0, 3) as $row)
                        <li class="flex items-center justify-between rounded border border-white/[0.06] bg-black/25 px-3 py-2 text-sm">
                            <p class="text-zinc-300">{{ $row['pos'] }}. {{ $row['name'] }}</p>
                            <p class="font-mono text-zinc-400">{{ $row['points'] }} pts</p>
                        </li>
                    @endforeach
                </ul>
            </article>
            <article class="charge-glass rounded-xl p-4">
                <div class="mb-3 flex items-center justify-between">
                    <h3 class="text-sm font-bold text-white">Rimfire Leaderboard</h3>
                    <span class="rounded-full border border-white/15 bg-white/[0.03] px-2.5 py-1 font-mono text-[10px] uppercase tracking-wide text-zinc-400">Rimfire</span>
                </div>
                <ul class="space-y-2">
                    @foreach (array_slice($leaderboards['rimfire'], 0, 3) as $row)
                        <li class="flex items-center justify-between rounded border border-white/[0.06] bg-black/25 px-3 py-2 text-sm">
                            <p class="text-zinc-300">{{ $row['pos'] }}. {{ $row['name'] }}</p>
                            <p class="font-mono text-zinc-400">{{ $row['points'] }} pts</p>
                        </li>
                    @endforeach
                </ul>
            </article>
        </div>
    </div>
</section>
