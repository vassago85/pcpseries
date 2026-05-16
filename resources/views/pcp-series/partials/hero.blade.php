@php
    $leaders = [
        ['rank' => 1, 'name' => 'Johan Smith', 'points' => 482, 'score' => '94.2%', 'delta' => '+2', 'dir' => 'up'],
        ['rank' => 2, 'name' => 'Ryan van Wyk', 'points' => 468, 'score' => '91.8%', 'delta' => '−1', 'dir' => 'down'],
        ['rank' => 3, 'name' => 'Nico de Villiers', 'points' => 438, 'score' => '89.4%', 'delta' => '—', 'dir' => 'neutral'],
    ];
@endphp

<section class="relative overflow-hidden border-b border-white/10" aria-labelledby="hero-heading">
    <div class="pcp-crosshair pointer-events-none absolute inset-0 opacity-30" aria-hidden="true"></div>
    <div class="absolute -right-32 top-0 h-96 w-96 rounded-full bg-pcp-fx/10 blur-3xl" aria-hidden="true"></div>
    <div class="absolute -left-24 bottom-0 h-64 w-64 rounded-full bg-pcp-element/5 blur-3xl" aria-hidden="true"></div>

    <div class="relative mx-auto grid max-w-7xl gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.1fr_0.9fr] lg:gap-12 lg:px-8 lg:py-24">
        <div class="flex flex-col justify-center">
            <p class="mb-6 inline-flex w-fit items-center gap-2 rounded-full border border-white/10 bg-white/5 px-4 py-1.5 text-xs font-medium text-zinc-300">
                <span class="h-1.5 w-1.5 rounded-full bg-pcp-fx"></span>
                Official FX Airguns &amp; Element Optics Series Partner Showcase
            </p>
            <h1 id="hero-heading" class="text-4xl font-bold leading-[1.05] tracking-tight text-white sm:text-5xl lg:text-6xl">
                Precision.<br>
                <span class="text-zinc-400">Pressure.</span><br>
                Performance.
            </h1>
            <p class="mt-6 max-w-xl text-base leading-relaxed text-zinc-400 sm:text-lg">
                The home of PRS-style PCP competition in South Africa. Register for matches, follow rankings, track your season and compete against the country’s best shooters.
            </p>
            <div class="mt-8 flex flex-wrap gap-3">
                <a href="#matches" class="inline-flex items-center justify-center rounded-lg bg-pcp-fx px-6 py-3 text-sm font-semibold text-black transition hover:bg-pcp-fx/90">
                    View Matches
                </a>
                <a href="#rankings" class="inline-flex items-center justify-center rounded-lg border border-white/15 bg-white/5 px-6 py-3 text-sm font-semibold text-white transition hover:border-white/30 hover:bg-white/10">
                    View Rankings
                </a>
            </div>
        </div>

        <aside class="pcp-glass relative overflow-hidden rounded-2xl p-5 sm:p-6" aria-label="Current season race preview">
            <div class="absolute inset-0 bg-gradient-to-br from-white/[0.04] to-transparent" aria-hidden="true"></div>
            <div class="relative">
                <div class="mb-5 flex items-center justify-between gap-2 border-b border-white/10 pb-4">
                    <div>
                        <p class="text-[10px] font-semibold uppercase tracking-[0.25em] text-zinc-500">Live board</p>
                        <h2 class="text-lg font-semibold text-white">2026 Season Race</h2>
                    </div>
                    <span class="font-mono text-xs text-pcp-fx">ROUND 4 / 6</span>
                </div>

                <ul class="space-y-3" role="list">
                    @foreach ($leaders as $shooter)
                        <li class="flex items-center gap-3 rounded-xl border border-white/5 bg-black/20 px-3 py-3">
                            <span class="font-mono text-xs font-semibold text-zinc-500">#{{ str_pad($shooter['rank'], 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="min-w-0 flex-1">
                                <p class="truncate text-sm font-semibold text-white">{{ $shooter['name'] }}</p>
                                <p class="font-mono text-xs text-zinc-500">{{ $shooter['score'] }} match</p>
                            </div>
                            <div class="text-right">
                                <p class="font-mono text-sm font-semibold tabular-nums text-white">{{ $shooter['points'] }} <span class="text-[10px] font-normal text-zinc-500">pts</span></p>
                                @if ($shooter['dir'] === 'up')
                                    <p class="flex items-center justify-end gap-0.5 text-xs font-medium text-pcp-fx">
                                        @include('pcp-series.partials.icons', ['name' => 'trending-up', 'class' => 'h-3 w-3'])
                                        {{ $shooter['delta'] }}
                                    </p>
                                @elseif ($shooter['dir'] === 'down')
                                    <p class="flex items-center justify-end gap-0.5 text-xs font-medium text-pcp-element">
                                        @include('pcp-series.partials.icons', ['name' => 'trending-down', 'class' => 'h-3 w-3'])
                                        {{ $shooter['delta'] }}
                                    </p>
                                @else
                                    <p class="flex items-center justify-end gap-0.5 text-xs font-medium text-zinc-500">
                                        @include('pcp-series.partials.icons', ['name' => 'minus', 'class' => 'h-3 w-3'])
                                        {{ $shooter['delta'] }}
                                    </p>
                                @endif
                            </div>
                        </li>
                    @endforeach
                </ul>

                <div class="mt-5 rounded-xl border border-white/10 bg-black/30 px-4 py-3">
                    <p class="text-[10px] font-semibold uppercase tracking-wider text-zinc-500">Rifle setup</p>
                    <p class="mt-1 text-sm font-medium text-white">FX Panthera <span class="text-zinc-600">•</span> Element Theos</p>
                </div>

                <div class="mt-4 flex items-center justify-between rounded-lg border border-pcp-fx/20 bg-pcp-fx/5 px-3 py-2.5">
                    <div class="flex items-center gap-2 text-xs text-zinc-300">
                        @include('pcp-series.partials.icons', ['name' => 'calendar', 'class' => 'h-3.5 w-3.5 text-pcp-fx'])
                        <span>Next Match: <strong class="text-white">Legends Farm</strong></span>
                    </div>
                    <span class="font-mono text-[10px] text-pcp-fx">MAR 28</span>
                </div>
            </div>
        </aside>
    </div>
</section>
