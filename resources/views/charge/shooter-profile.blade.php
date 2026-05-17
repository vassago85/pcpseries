@extends('layouts.charge')

@section('title', 'PLENUM Shooter Profile — Competitor Identity')

@section('content')
    @php
        $performanceCards = [
            ['label' => 'Stage Wins', 'value' => '14', 'delta' => '+3', 'dir' => 'up', 'icon' => 'trophy'],
            ['label' => 'Clean Stages', 'value' => '9', 'delta' => '+2', 'dir' => 'up', 'icon' => 'target'],
            ['label' => 'Podium Finishes', 'value' => '4', 'delta' => null, 'dir' => 'neutral', 'icon' => 'bar-chart'],
            ['label' => 'Consistency Index', 'value' => '91.7', 'delta' => '-1', 'dir' => 'down', 'icon' => 'workflow'],
        ];

        $matchPositions = [
            ['match' => 'M1', 'position' => 5],
            ['match' => 'M2', 'position' => 4],
            ['match' => 'M3', 'position' => 3],
            ['match' => 'M4', 'position' => 2],
            ['match' => 'M5', 'position' => 2],
            ['match' => 'M6', 'position' => 1],
        ];

        $matchHistory = [
            ['name' => 'Legends Farm', 'type' => '96 Round', 'date' => '12 Jul 2026', 'place' => '2nd', 'points' => 86, 'hit' => '92.4%'],
            ['name' => 'Stone Ridge', 'type' => '84 Round', 'date' => '22 Jun 2026', 'place' => '3rd', 'points' => 78, 'hit' => '90.2%'],
            ['name' => 'Bushveld Precision', 'type' => '90 Round', 'date' => '02 Jun 2026', 'place' => '2nd', 'points' => 82, 'hit' => '91.1%'],
        ];

        $earnedBadges = [
            [
                'name' => 'Clean Stage',
                'icon' => 'target',
                'desc' => 'Completed a full stage with zero misses.',
                'rule' => 'stage.misses = 0',
            ],
            [
                'name' => 'Top 10 Finish',
                'icon' => 'trophy',
                'desc' => 'Finished inside the top 10 overall on a scored match day.',
                'rule' => 'match.overall_rank <= 10',
            ],
            [
                'name' => 'Fast Climber',
                'icon' => 'trending-up',
                'desc' => 'Gained rank quickly over consecutive matches in the same season.',
                'rule' => 'season.rank_delta <= -3 across last 3 matches',
            ],
            [
                'name' => 'Gearhead',
                'icon' => 'settings',
                'desc' => 'Profile includes complete rifle, optic, ammo and tune configuration.',
                'rule' => 'profile.setup_fields_complete = true',
            ],
            [
                'name' => 'First Round Impact',
                'icon' => 'bar-chart',
                'desc' => 'Strong first-match performance versus field median.',
                'rule' => 'first_match.points_percentile >= 70',
            ],
        ];

        $comparison = [
            ['metric' => 'Average Hit %', 'shooter' => 91.6, 'division' => 86.9],
            ['metric' => 'Points per Match', 'shooter' => 80.3, 'division' => 72.1],
            ['metric' => 'Stage Win Rate', 'shooter' => 38.0, 'division' => 25.0],
            ['metric' => 'First-Round Impact %', 'shooter' => 74.0, 'division' => 58.0],
        ];

        $activityFeed = [
            ['time' => '2h ago', 'text' => 'Match results published: Legends Farm (2nd overall)'],
            ['time' => '1d ago', 'text' => 'Equipment setup updated: Reg tuned to 140 bar'],
            ['time' => '3d ago', 'text' => 'Head-to-head moved above division average in 3 metrics'],
            ['time' => '6d ago', 'text' => 'Squad assignment confirmed for Kalahari Precision'],
        ];
    @endphp

    @include('charge.partials.nav')

    <main class="pb-14 sm:pb-20">
        <section class="relative border-b border-white/[0.06] pt-8 sm:pt-10" aria-labelledby="shooter-hero">
            <div class="charge-crosshair pointer-events-none absolute inset-0 opacity-25" aria-hidden="true"></div>
            <div class="relative mx-auto max-w-7xl px-4 pb-10 sm:px-6 lg:px-8 lg:pb-14">
                <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-zinc-500">Competitor Identity</p>
                <div class="mt-4 charge-glass overflow-hidden rounded-2xl p-5 sm:p-8">
                    <div class="grid gap-8 lg:grid-cols-[auto_1fr]">
                        <div class="mx-auto h-28 w-28 rounded-2xl border border-white/15 bg-gradient-to-br from-charge-fx/35 to-charge-element/20 p-1 sm:h-36 sm:w-36 lg:mx-0">
                            <div class="flex h-full w-full items-center justify-center rounded-xl bg-black/60 font-mono text-3xl font-bold text-white">
                                JVW
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-wrap items-center gap-3">
                                <h1 id="shooter-hero" class="text-4xl font-bold tracking-tight text-white sm:text-5xl">Johan van Wyk</h1>
                                <span class="rounded-full border border-charge-fx/40 bg-charge-fx/15 px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-charge-fx">
                                    Rank #1
                                </span>
                            </div>
                            <p class="mt-2 text-sm text-zinc-400">Open PCP Division <span class="mx-2 text-zinc-600">•</span> Gauteng</p>

                            <div class="mt-6 grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-6">
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Season Points</p>
                                    <p class="mt-1 text-xl font-bold text-white">482</p>
                                </article>
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Matches</p>
                                    <p class="mt-1 text-xl font-bold text-white">6</p>
                                </article>
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Avg Hit %</p>
                                    <p class="mt-1 text-xl font-bold text-white">91.6%</p>
                                </article>
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Rank Move</p>
                                    <p class="mt-1 text-xl font-bold text-charge-fx">+2</p>
                                </article>
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Province</p>
                                    <p class="mt-1 text-xl font-bold text-white">GP</p>
                                </article>
                                <article class="rounded-lg border border-white/[0.08] bg-black/30 p-3">
                                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Division</p>
                                    <p class="mt-1 text-xl font-bold text-white">Open</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="performance-cards">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="performance-cards" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Performance Cards</h2>
                <div class="mt-5 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ($performanceCards as $card)
                        <article class="charge-glass charge-glass-hover rounded-xl p-4">
                            <div class="flex items-center justify-between">
                                <span class="inline-flex h-10 w-10 items-center justify-center rounded-lg border border-white/10 bg-black/40 text-charge-fx">
                                    @include('charge.partials.icons', ['name' => $card['icon'], 'class' => 'h-5 w-5'])
                                </span>
                                @include('charge.partials.movement', ['dir' => $card['dir'], 'delta' => $card['delta']])
                            </div>
                            <p class="mt-4 text-3xl font-bold tracking-tight text-white">{{ $card['value'] }}</p>
                            <p class="mt-1 text-sm text-zinc-400">{{ $card['label'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="standings-chart">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="standings-chart" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Season Match Standings</h2>
                <div class="mt-5 charge-glass rounded-2xl p-5 sm:p-6">
                    <div class="grid grid-cols-6 gap-3">
                        @foreach ($matchPositions as $entry)
                            @php
                                $height = max(18, 100 - (($entry['position'] - 1) * 16));
                            @endphp
                            <div class="text-center">
                                <div class="mx-auto flex h-32 w-full max-w-14 items-end rounded-lg border border-white/[0.08] bg-black/30 p-1">
                                    <div class="w-full rounded-md bg-gradient-to-t from-charge-fx to-charge-fx/45" style="height: {{ $height }}%"></div>
                                </div>
                                <p class="mt-2 font-mono text-[11px] text-zinc-500">{{ $entry['match'] }}</p>
                                <p class="text-xs font-semibold text-white">P{{ $entry['position'] }}</p>
                            </div>
                        @endforeach
                    </div>
                    <p class="mt-4 text-xs text-zinc-500">Lower position number is better. Trend shows consistent climb toward P1.</p>
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="equipment-setup">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="equipment-setup" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Equipment Setup</h2>
                <article class="mt-5 charge-glass rounded-2xl p-5 sm:p-6">
                    <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="rounded-lg border border-white/[0.08] bg-black/30 p-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Rifle</p>
                            <p class="mt-1 text-base font-semibold text-white">FX Panthera</p>
                        </div>
                        <div class="rounded-lg border border-white/[0.08] bg-black/30 p-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Optic</p>
                            <p class="mt-1 text-base font-semibold text-white">Element Theos 6-36</p>
                        </div>
                        <div class="rounded-lg border border-white/[0.08] bg-black/30 p-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Pellet</p>
                            <p class="mt-1 text-base font-semibold text-white">.22 / 25.4gr</p>
                        </div>
                        <div class="rounded-lg border border-white/[0.08] bg-black/30 p-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Reg / FPS</p>
                            <p class="mt-1 text-base font-semibold text-white">140 bar / 930</p>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="match-history">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="match-history" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Match History</h2>
                <div class="mt-5 grid gap-3 lg:grid-cols-3">
                    @foreach ($matchHistory as $match)
                        <article class="charge-glass charge-glass-hover rounded-xl p-4">
                            <div class="flex items-start justify-between gap-3">
                                <div>
                                    <p class="text-base font-semibold text-white">{{ $match['name'] }}</p>
                                    <p class="mt-1 text-xs text-zinc-500">{{ $match['date'] }} <span class="mx-1 text-zinc-700">•</span> {{ $match['type'] }}</p>
                                </div>
                                <span class="rounded bg-charge-fx/15 px-2 py-1 font-mono text-[10px] text-charge-fx">{{ $match['place'] }}</span>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-2 text-sm">
                                <p class="rounded border border-white/[0.08] bg-black/30 px-3 py-2 text-zinc-300">Points: <span class="font-semibold text-white">{{ $match['points'] }}</span></p>
                                <p class="rounded border border-white/[0.08] bg-black/30 px-3 py-2 text-zinc-300">Hit: <span class="font-semibold text-white">{{ $match['hit'] }}</span></p>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="badges">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap items-end justify-between gap-3">
                    <h2 id="badges" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Badge Progression</h2>
                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Icons + descriptions + unlock logic</p>
                </div>
                <div class="mt-5 grid gap-3 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($earnedBadges as $badge)
                        <article class="charge-glass charge-glass-hover rounded-xl p-4">
                            <div class="flex items-start gap-3">
                                <span class="inline-flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-charge-fx/30 bg-charge-fx/10 text-charge-fx">
                                    @include('charge.partials.icons', ['name' => $badge['icon'], 'class' => 'h-5 w-5'])
                                </span>
                                <div>
                                    <h3 class="text-sm font-bold text-white">{{ $badge['name'] }}</h3>
                                    <p class="mt-1 text-xs leading-relaxed text-zinc-400">{{ $badge['desc'] }}</p>
                                </div>
                            </div>
                            <p class="mt-3 rounded border border-white/[0.08] bg-black/30 px-2.5 py-1.5 font-mono text-[10px] uppercase tracking-wide text-zinc-500">
                                Trigger: {{ $badge['rule'] }}
                            </p>
                        </article>
                    @endforeach
                </div>

                <div class="mt-4 grid gap-3 lg:grid-cols-3">
                    <article class="charge-glass rounded-xl p-4 lg:col-span-2">
                        <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">In Progress</p>
                        <div class="mt-3 space-y-3">
                            <div>
                                <div class="mb-1 flex items-center justify-between text-sm">
                                    <span class="text-zinc-300">Hot Streak</span>
                                    <span class="font-mono text-zinc-500">2/5 matches</span>
                                </div>
                                <div class="h-2.5 overflow-hidden rounded-full bg-black/40">
                                    <div class="h-full w-[40%] rounded-full bg-charge-fx"></div>
                                </div>
                            </div>
                            <div>
                                <div class="mb-1 flex items-center justify-between text-sm">
                                    <span class="text-zinc-300">Head Hunter</span>
                                    <span class="font-mono text-zinc-500">8/10 top-head targets</span>
                                </div>
                                <div class="h-2.5 overflow-hidden rounded-full bg-black/40">
                                    <div class="h-full w-[80%] rounded-full bg-charge-element"></div>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="charge-glass rounded-xl p-4">
                        <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">Hidden</p>
                        <p class="mt-3 text-2xl font-bold text-white">6</p>
                        <p class="mt-1 text-sm text-zinc-400">Undiscovered badges remain in this division.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-10 sm:py-12" aria-labelledby="head-to-head">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="head-to-head" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Head-to-Head vs Division Average</h2>
                <div class="mt-5 charge-glass rounded-2xl p-5 sm:p-6">
                    <div class="space-y-4">
                        @foreach ($comparison as $row)
                            @php
                                $max = max($row['shooter'], $row['division'], 1);
                                $shooterPct = ($row['shooter'] / $max) * 100;
                                $divisionPct = ($row['division'] / $max) * 100;
                            @endphp
                            <article>
                                <div class="mb-2 flex items-center justify-between text-sm">
                                    <p class="font-medium text-zinc-300">{{ $row['metric'] }}</p>
                                    <p class="font-mono text-xs text-zinc-500">You {{ $row['shooter'] }} <span class="mx-1">/</span> Div {{ $row['division'] }}</p>
                                </div>
                                <div class="grid gap-2 sm:grid-cols-2">
                                    <div class="h-2.5 overflow-hidden rounded-full bg-black/40">
                                        <div class="h-full rounded-full bg-charge-fx" style="width: {{ $shooterPct }}%"></div>
                                    </div>
                                    <div class="h-2.5 overflow-hidden rounded-full bg-black/40">
                                        <div class="h-full rounded-full bg-zinc-500/70" style="width: {{ $divisionPct }}%"></div>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="py-10 sm:py-12" aria-labelledby="activity-feed">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="activity-feed" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Activity Feed</h2>
                <div class="mt-5 charge-glass rounded-2xl p-5 sm:p-6">
                    <ul class="space-y-3" role="list">
                        @foreach ($activityFeed as $item)
                            <li class="flex gap-3 rounded-lg border border-white/[0.06] bg-black/30 px-4 py-3">
                                <span class="mt-0.5 h-2.5 w-2.5 rounded-full bg-charge-fx"></span>
                                <div class="min-w-0">
                                    <p class="text-sm text-zinc-300">{{ $item['text'] }}</p>
                                    <p class="mt-1 font-mono text-[10px] uppercase tracking-wider text-zinc-500">{{ $item['time'] }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </main>

    @include('charge.partials.footer')
@endsection
