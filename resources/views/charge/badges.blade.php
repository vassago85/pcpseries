@extends('layouts.charge')

@section('title', 'PLENUM Badges — Shooter Progression Identity')

@section('content')
    @php
        $categories = [
            [
                'title' => 'Match Performance',
                'icon' => 'target',
                'accent' => 'fx',
                'badges' => ['First Round Impact', 'Clean Stage', 'Perfect Stage', 'Stage Winner', 'Match Winner', 'Podium Finish', 'Top 10 Finish', 'Most Consistent'],
            ],
            [
                'title' => 'Progression',
                'icon' => 'trending-up',
                'accent' => 'fx',
                'badges' => ['Fast Climber', 'Moving Up', 'Breakthrough', 'Rising Shooter', 'Hot Streak', 'On The Charge'],
            ],
            [
                'title' => 'Competitive',
                'icon' => 'trophy',
                'accent' => 'element',
                'badges' => ['Head Hunter', 'King Slayer', 'Pressure Performer', 'Comeback Kid', 'Clutch Shot', 'Unstoppable'],
            ],
            [
                'title' => 'Participation',
                'icon' => 'calendar',
                'accent' => 'fx',
                'badges' => ['First Deployment', 'Season Regular', 'Road Warrior', 'Traveller', 'All Terrain', 'Never Late'],
            ],
            [
                'title' => 'Equipment & Profile',
                'icon' => 'settings',
                'accent' => 'element',
                'badges' => ['Gearhead', 'Profile Complete', 'Data Driven', 'Setup Verified', 'FX Shooter', 'Element Equipped'],
            ],
            [
                'title' => 'Elite Badges',
                'icon' => 'trophy',
                'accent' => 'element',
                'badges' => ['PLENUM Elite', 'Grand Champion', 'Division Champion', 'Hall of Fame', 'Legend Status'],
            ],
        ];

        $earned = ['Clean Stage', 'Top 10 Finish', 'Fast Climber', 'Gearhead', 'First Round Impact'];
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
                                <h2 class="text-lg font-bold text-white">Sample Shooter</h2>
                                <p class="mt-1 text-xs text-zinc-500">Open PCP Division</p>
                            </div>
                            <span class="rounded-full border border-charge-fx/35 bg-charge-fx/10 px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-charge-fx">
                                12 Badges Earned
                            </span>
                        </div>

                        <div class="mt-4 flex flex-wrap gap-2">
                            @foreach ($earned as $badge)
                                <span class="rounded-md border border-white/15 bg-white/[0.04] px-2.5 py-1 text-xs text-zinc-200">{{ $badge }}</span>
                            @endforeach
                        </div>

                        <div class="mt-5 grid gap-2 border-t border-white/[0.06] pt-4 text-sm">
                            <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">In Progress</p>
                            <p class="text-zinc-300">Hot Streak <span class="ml-2 font-mono text-zinc-500">2/5</span></p>
                            <p class="text-zinc-300">Head Hunter <span class="ml-2 font-mono text-zinc-500">8/10</span></p>
                        </div>

                        <p class="mt-4 text-xs text-zinc-500">Hidden: 6 undiscovered badges</p>
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
                        @endphp
                        <article class="charge-glass charge-glass-hover group rounded-xl p-5">
                            <div class="flex items-center justify-between gap-3">
                                <h3 class="text-base font-bold text-white">{{ $category['title'] }}</h3>
                                <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 bg-black/35 transition {{ $accentRing }} {{ $accentFill }} {{ $accentText }}">
                                    @include('charge.partials.icons', ['name' => $category['icon'], 'class' => 'h-4.5 w-4.5'])
                                </span>
                            </div>
                            <div class="mt-4 grid grid-cols-2 gap-2">
                                @foreach ($category['badges'] as $badge)
                                    <div class="rounded-md border border-white/10 bg-black/30 px-2.5 py-1.5 text-xs text-zinc-300 transition hover:border-white/20 hover:text-white">
                                        {{ $badge }}
                                    </div>
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
