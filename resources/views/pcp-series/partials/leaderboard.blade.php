@php
    $standings = [
        ['rank' => 1, 'name' => 'Johan Smith', 'points' => 482, 'score' => '94.2%', 'delta' => '+2', 'dir' => 'up'],
        ['rank' => 2, 'name' => 'Ryan van Wyk', 'points' => 468, 'score' => '91.8%', 'delta' => '−1', 'dir' => 'down'],
        ['rank' => 3, 'name' => 'Nico de Villiers', 'points' => 438, 'score' => '89.4%', 'delta' => '—', 'dir' => 'neutral'],
    ];
@endphp

<section id="rankings" class="border-b border-white/10 py-16 sm:py-20" aria-labelledby="rankings-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="text-xs font-semibold uppercase tracking-[0.25em] text-pcp-fx">Standings</p>
                <h2 id="rankings-heading" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Overall Leaderboard</h2>
            </div>
            <p class="font-mono text-sm text-zinc-500">Updated after Match 4</p>
        </div>

        <div class="pcp-glass overflow-hidden rounded-2xl">
            <div class="hidden grid-cols-[auto_1fr_auto_auto_auto] gap-4 border-b border-white/10 px-6 py-3 text-[10px] font-semibold uppercase tracking-wider text-zinc-500 md:grid">
                <span>Pos</span>
                <span>Shooter</span>
                <span class="text-right">Last match</span>
                <span class="text-right">Move</span>
                <span class="text-right">Points</span>
            </div>
            <ul role="list">
                @foreach ($standings as $row)
                    <li class="grid grid-cols-[auto_1fr_auto] items-center gap-4 border-b border-white/5 px-4 py-5 last:border-0 md:grid-cols-[auto_1fr_auto_auto_auto] md:px-6">
                        <span class="flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-black/30 font-mono text-sm font-bold {{ $row['rank'] === 1 ? 'text-pcp-fx' : 'text-zinc-400' }}">
                            {{ $row['rank'] }}
                        </span>
                        <div>
                            <p class="text-base font-semibold text-white">{{ $row['name'] }}</p>
                            <p class="mt-0.5 font-mono text-xs text-zinc-500 md:hidden">{{ $row['score'] }}</p>
                        </div>
                        <p class="hidden font-mono text-sm text-zinc-400 md:block md:text-right">{{ $row['score'] }}</p>
                        <div class="hidden md:block md:text-right">
                            @if ($row['dir'] === 'up')
                                <span class="inline-flex items-center gap-1 text-sm font-medium text-pcp-fx">
                                    @include('pcp-series.partials.icons', ['name' => 'trending-up', 'class' => 'h-4 w-4'])
                                    {{ $row['delta'] }}
                                </span>
                            @elseif ($row['dir'] === 'down')
                                <span class="inline-flex items-center gap-1 text-sm font-medium text-pcp-element">
                                    @include('pcp-series.partials.icons', ['name' => 'trending-down', 'class' => 'h-4 w-4'])
                                    {{ $row['delta'] }}
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 text-sm font-medium text-zinc-500">
                                    @include('pcp-series.partials.icons', ['name' => 'minus', 'class' => 'h-4 w-4'])
                                    {{ $row['delta'] }}
                                </span>
                            @endif
                        </div>
                        <p class="font-mono text-lg font-semibold tabular-nums text-white md:text-right">{{ $row['points'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>
