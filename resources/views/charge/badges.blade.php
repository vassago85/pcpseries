@extends('layouts.charge')

@section('title', 'FIVE·FIVE Badges — Shooter Progression Identity')

@section('content')
    @php
        $categories = [
            [
                'title' => 'Match Performance',
                'icon' => 'target',
                'accent' => 'fx',
                'badges' => [
                    ['name' => 'First Round Impact', 'desc' => 'Strong opening match finish versus field median.', 'rule' => 'first_match.points_percentile >= 70', 'status' => 'earned'],
                    ['name' => 'Clean Stage', 'desc' => 'Complete a stage with zero misses.', 'rule' => 'stage.misses = 0', 'status' => 'earned'],
                    ['name' => 'Perfect Stage', 'desc' => 'Maximum available stage points.', 'rule' => 'stage.points = stage.max_points', 'status' => 'in_progress'],
                    ['name' => 'Stage Winner', 'desc' => 'Best score on any stage in a match.', 'rule' => 'stage.rank = 1', 'status' => 'in_progress'],
                    ['name' => 'Match Winner', 'desc' => 'Top overall placement in a scored match.', 'rule' => 'match.overall_rank = 1', 'status' => 'locked'],
                    ['name' => 'Podium Finish', 'desc' => 'Finish top 3 overall in a match.', 'rule' => 'match.overall_rank <= 3', 'status' => 'earned'],
                    ['name' => 'Top 10 Finish', 'desc' => 'Finish inside top 10 overall.', 'rule' => 'match.overall_rank <= 10', 'status' => 'earned'],
                    ['name' => 'Most Consistent', 'desc' => 'Low variance across all scored stages.', 'rule' => 'match.consistency_index >= threshold', 'status' => 'in_progress'],
                ],
            ],
            [
                'title' => 'Progression',
                'icon' => 'trending-up',
                'accent' => 'fx',
                'badges' => [
                    ['name' => 'Fast Climber', 'desc' => 'Rapid standings gain over consecutive matches.', 'rule' => 'season.rank_delta <= -3 over 3 matches', 'status' => 'earned'],
                    ['name' => 'Moving Up', 'desc' => 'Improve standings after back-to-back matches.', 'rule' => 'season.rank_delta < 0 in 2 straight matches', 'status' => 'earned'],
                    ['name' => 'Breakthrough', 'desc' => 'First top-5 finish in division.', 'rule' => 'first(match.overall_rank <= 5)', 'status' => 'in_progress'],
                    ['name' => 'Rising Shooter', 'desc' => 'Sustained upward trend in points per match.', 'rule' => 'ppm trend positive over 4 matches', 'status' => 'in_progress'],
                    ['name' => 'Hot Streak', 'desc' => 'Three high-scoring matches in a row.', 'rule' => 'streak.high_score_matches >= 3', 'status' => 'in_progress'],
                    ['name' => 'On The Rise', 'desc' => 'Gain 5+ standings positions in one season.', 'rule' => 'season.rank_delta_total <= -5', 'status' => 'locked'],
                ],
            ],
            [
                'title' => 'Competitive',
                'icon' => 'trophy',
                'accent' => 'element',
                'badges' => [
                    ['name' => 'Head Hunter', 'desc' => 'Beat higher-ranked shooters consistently.', 'rule' => 'wins_vs_higher_ranked >= 10', 'status' => 'in_progress'],
                    ['name' => 'King Slayer', 'desc' => 'Outscore current division leader in a match.', 'rule' => 'match.score > leader.match_score', 'status' => 'locked'],
                    ['name' => 'Pressure Performer', 'desc' => 'Above-average result in final stage block.', 'rule' => 'final_block_points_percentile >= 70', 'status' => 'in_progress'],
                    ['name' => 'Comeback Kid', 'desc' => 'Recover from mid-pack to top-10 in one match.', 'rule' => 'match.recovery_rank_delta >= 10', 'status' => 'locked'],
                    ['name' => 'Clutch Shot', 'desc' => 'Decisive hit on high-value final targets.', 'rule' => 'final_stage.critical_hits >= 1', 'status' => 'in_progress'],
                    ['name' => 'Unstoppable', 'desc' => 'Win consecutive matches.', 'rule' => 'match_win_streak >= 2', 'status' => 'locked'],
                ],
            ],
            [
                'title' => 'Participation',
                'icon' => 'calendar',
                'accent' => 'fx',
                'badges' => [
                    ['name' => 'First Deployment', 'desc' => 'Complete first scored FIVE·FIVE match.', 'rule' => 'match_count >= 1', 'status' => 'earned'],
                    ['name' => 'Season Regular', 'desc' => 'Compete in most scheduled matches.', 'rule' => 'season.attendance_rate >= 80%', 'status' => 'earned'],
                    ['name' => 'Road Warrior', 'desc' => 'Compete across multiple venues.', 'rule' => 'unique_venues >= 3', 'status' => 'earned'],
                    ['name' => 'Traveller', 'desc' => 'Match entries outside home province.', 'rule' => 'away_matches >= 2', 'status' => 'in_progress'],
                    ['name' => 'All Terrain', 'desc' => 'Score top-half across diverse stage types.', 'rule' => 'top_half_on_all_stage_types = true', 'status' => 'in_progress'],
                    ['name' => 'Never Late', 'desc' => 'Full season check-in compliance.', 'rule' => 'late_checkins = 0', 'status' => 'in_progress'],
                ],
            ],
            [
                'title' => 'Equipment & Profile',
                'icon' => 'settings',
                'accent' => 'element',
                'badges' => [
                    ['name' => 'Gearhead', 'desc' => 'Complete rifle, optic, ammo and tune fields.', 'rule' => 'setup_fields_complete = true', 'status' => 'earned'],
                    ['name' => 'Profile Complete', 'desc' => 'All core shooter profile data filled.', 'rule' => 'profile_completion = 100%', 'status' => 'earned'],
                    ['name' => 'Data Driven', 'desc' => 'Regularly log setup adjustments with outcomes.', 'rule' => 'tuning_logs >= 5', 'status' => 'in_progress'],
                    ['name' => 'Setup Verified', 'desc' => 'Match-validated setup used in official score.', 'rule' => 'verified_setup_matches >= 1', 'status' => 'in_progress'],
                    ['name' => 'FX Shooter', 'desc' => 'Active profile linked to FX platform.', 'rule' => 'setup.rifle_brand = FX', 'status' => 'earned'],
                    ['name' => 'Element Equipped', 'desc' => 'Active profile linked to Element optic.', 'rule' => 'setup.optic_brand = Element', 'status' => 'earned'],
                ],
            ],
            [
                'title' => 'Elite Badges',
                'icon' => 'trophy',
                'accent' => 'element',
                'badges' => [
                    ['name' => 'FIVE·FIVE Elite', 'desc' => 'Top-tier multi-match season performer.', 'rule' => 'season.overall_rank <= 5', 'status' => 'locked'],
                    ['name' => 'Grand Champion', 'desc' => 'Finish season as overall #1.', 'rule' => 'season.overall_rank = 1', 'status' => 'locked'],
                    ['name' => 'Division Champion', 'desc' => 'Finish season as division #1.', 'rule' => 'season.division_rank = 1', 'status' => 'locked'],
                    ['name' => 'Hall of Fame', 'desc' => 'Sustained elite finishes over multiple seasons.', 'rule' => 'elite_seasons >= 3', 'status' => 'locked'],
                    ['name' => 'Legend Status', 'desc' => 'Long-term top-tier FIVE·FIVE impact.', 'rule' => 'career.legend_score >= threshold', 'status' => 'locked'],
                ],
            ],
        ];

        $sampleShooter = [
            'name' => 'Ethan Kruger',
            'division' => 'PCP Discipline',
            'badges_earned' => 12,
            'earned' => ['Clean Stage', 'Top 10 Finish', 'Fast Climber', 'Gearhead', 'First Round Impact'],
            'in_progress' => [
                ['name' => 'Hot Streak', 'value' => 2, 'target' => 5],
                ['name' => 'Head Hunter', 'value' => 8, 'target' => 10],
            ],
            'hidden' => 6,
        ];

        $badgeHealth = [
            ['label' => 'Earned', 'value' => '12', 'note' => 'active this season'],
            ['label' => 'In Progress', 'value' => '7', 'note' => 'near completion'],
            ['label' => 'Locked', 'value' => '20', 'note' => 'requires milestone'],
            ['label' => 'Coverage', 'value' => '6/6', 'note' => 'all categories active'],
        ];
    @endphp

    @include('charge.partials.nav')

    <main class="pb-14 sm:pb-20">
        <section class="relative border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="badges-hero">
            <div class="charge-crosshair pointer-events-none absolute inset-0 opacity-25" aria-hidden="true"></div>
            <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-zinc-500">PRS Badge System</p>
                <h1 id="badges-hero" class="mt-2 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">Performance Badges</h1>
                <p class="mt-4 max-w-3xl text-base text-zinc-400 sm:text-lg">
                    Earned through match results, consistency, precision and progression.
                </p>

                <div class="mt-6 grid gap-3 sm:grid-cols-2 xl:grid-cols-4">
                    @foreach ($badgeHealth as $stat)
                        <article class="charge-glass rounded-xl p-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">{{ $stat['label'] }}</p>
                            <p class="mt-1 text-3xl font-bold text-white">{{ $stat['value'] }}</p>
                            <p class="mt-1 text-xs text-zinc-500">{{ $stat['note'] }}</p>
                        </article>
                    @endforeach
                </div>

                <div class="mt-8 grid gap-4 lg:grid-cols-[1fr_24rem]">
                    <article class="charge-glass rounded-2xl p-5 sm:p-6">
                        <p class="text-sm leading-relaxed text-zinc-300">
                            Badges are automatically earned from match data, standings, shooter profiles and season performance.
                            <span class="text-zinc-500">No manual admin work required.</span>
                        </p>
                    </article>

                    <article class="charge-glass rounded-2xl p-5 sm:p-6">
                        <div class="flex items-start justify-between gap-3">
                            <div>
                                <h2 class="text-lg font-bold text-white">{{ $sampleShooter['name'] }}</h2>
                                <p class="mt-1 text-xs text-zinc-500">{{ $sampleShooter['division'] }}</p>
                            </div>
                            <span class="rounded-full border border-charge-fx/35 bg-charge-fx/10 px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-charge-fx">
                                {{ $sampleShooter['badges_earned'] }} Badges Earned
                            </span>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($sampleShooter['earned'] as $badge)
                                <span class="rounded-md border border-white/15 bg-white/[0.04] px-2.5 py-1 text-xs text-zinc-200">{{ $badge }}</span>
                            @endforeach
                        </div>

                        <div class="mt-5 border-t border-white/[0.06] pt-4">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">In Progress</p>
                            <div class="mt-2 space-y-2">
                                @foreach ($sampleShooter['in_progress'] as $progress)
                                    @php
                                        $width = (int) (($progress['value'] / $progress['target']) * 100);
                                    @endphp
                                    <div>
                                        <div class="mb-1 flex items-center justify-between text-sm text-zinc-300">
                                            <span>{{ $progress['name'] }}</span>
                                            <span class="font-mono text-zinc-500">{{ $progress['value'] }}/{{ $progress['target'] }}</span>
                                        </div>
                                        <div class="h-2 overflow-hidden rounded-full bg-black/40">
                                            <div class="h-full rounded-full bg-charge-fx" style="width: {{ $width }}%"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <p class="mt-4 text-xs text-zinc-500">Hidden: {{ $sampleShooter['hidden'] }} undiscovered badges</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-10 sm:py-14" aria-labelledby="badge-categories">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="badge-categories" class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Badge Categories</h2>
                <div class="mt-6 grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($categories as $category)
                        @php
                            $isFx = $category['accent'] === 'fx';
                            $accentRing = $isFx ? 'group-hover:border-charge-fx/40' : 'group-hover:border-charge-element/40';
                            $accentFill = $isFx ? 'group-hover:bg-charge-fx/10' : 'group-hover:bg-charge-element/10';
                            $accentText = $isFx ? 'text-charge-fx' : 'text-charge-element';
                            $statusStyles = [
                                'earned' => 'border-charge-fx/30 bg-charge-fx/10 text-charge-fx',
                                'in_progress' => 'border-charge-element/30 bg-charge-element/10 text-charge-element',
                                'locked' => 'border-white/10 bg-black/30 text-zinc-400',
                            ];
                        @endphp
                        <article class="charge-glass charge-glass-hover group rounded-xl p-5">
                            <div class="flex items-center justify-between gap-3">
                                <h3 class="text-base font-bold text-white">{{ $category['title'] }}</h3>
                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 bg-black/35 transition {{ $accentRing }} {{ $accentFill }} {{ $accentText }}">
                                    @include('charge.partials.icons', ['name' => $category['icon'], 'class' => 'h-4.5 w-4.5'])
                                </span>
                            </div>
                            <div class="mt-4 space-y-2">
                                @foreach ($category['badges'] as $badge)
                                    <article class="rounded-lg border px-3 py-2 {{ $statusStyles[$badge['status']] ?? $statusStyles['locked'] }}">
                                        <div class="flex items-center justify-between gap-2">
                                            <p class="text-sm font-semibold">{{ $badge['name'] }}</p>
                                            <span class="font-mono text-[10px] uppercase tracking-wider">{{ str_replace('_', ' ', $badge['status']) }}</span>
                                        </div>
                                        <p class="mt-1 text-xs opacity-90">{{ $badge['desc'] }}</p>
                                        <p class="mt-1 font-mono text-[10px] uppercase tracking-wide opacity-80">Trigger: {{ $badge['rule'] }}</p>
                                    </article>
                                @endforeach
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    @include('charge.partials.footer')
@endsection
