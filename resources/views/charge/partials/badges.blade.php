@php
    $badgeCategories = [
        [
            'title' => 'Match Performance',
            'accent' => 'fx',
            'icon' => 'target',
            'badges' => ['First Round Impact', 'Clean Stage', 'Perfect Stage', 'Stage Winner', 'Match Winner', 'Podium Finish', 'Top 10 Finish', 'Most Consistent'],
        ],
        [
            'title' => 'Progression',
            'accent' => 'fx',
            'icon' => 'trending-up',
            'badges' => ['Fast Climber', 'Moving Up', 'Breakthrough', 'Rising Shooter', 'Hot Streak', 'On The Charge'],
        ],
        [
            'title' => 'Competitive',
            'accent' => 'element',
            'icon' => 'trophy',
            'badges' => ['Head Hunter', 'King Slayer', 'Pressure Performer', 'Comeback Kid', 'Clutch Shot', 'Unstoppable'],
        ],
        [
            'title' => 'Participation',
            'accent' => 'fx',
            'icon' => 'calendar',
            'badges' => ['First Deployment', 'Season Regular', 'Road Warrior', 'Traveller', 'All Terrain', 'Never Late'],
        ],
        [
            'title' => 'Equipment & Profile',
            'accent' => 'element',
            'icon' => 'settings',
            'badges' => ['Gearhead', 'Profile Complete', 'Data Driven', 'Setup Verified', 'FX Shooter', 'Element Equipped'],
        ],
        [
            'title' => 'Elite Badges',
            'accent' => 'element',
            'icon' => 'trophy',
            'badges' => ['PLENUM Elite', 'Grand Champion', 'Division Champion', 'Hall of Fame', 'Legend Status'],
        ],
    ];
@endphp

<section class="border-b border-white/[0.06] py-16 sm:py-24" aria-labelledby="badges-showcase">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-zinc-500">Shooter Engagement</p>
        <h2 id="badges-showcase" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Performance Badges</h2>
        <p class="mt-3 max-w-3xl text-sm text-zinc-400 sm:text-base">
            Earned through match results, consistency, precision and progression.
        </p>

        <div class="mt-8 grid gap-4 lg:grid-cols-[1fr_20rem]">
            <article class="charge-glass rounded-xl p-5 sm:p-6">
                <p class="text-sm leading-relaxed text-zinc-400">
                    Badges are automatically earned from match data, rankings, shooter profiles and season performance. No manual admin work required.
                </p>
            </article>
            <article class="charge-glass rounded-xl p-5 sm:p-6">
                <div class="flex items-center justify-between gap-3">
                    <h3 class="text-lg font-bold text-white">Paul Charsley</h3>
                    <span class="rounded-full border border-charge-fx/30 bg-charge-fx/10 px-3 py-1 font-mono text-[10px] uppercase tracking-wider text-charge-fx">12 Badges Earned</span>
                </div>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach (['Clean Stage', 'Top 10 Finish', 'Fast Climber', 'Gearhead', 'First Round Impact'] as $earned)
                        <span class="rounded-md border border-white/10 bg-black/30 px-2.5 py-1 text-xs text-zinc-300">{{ $earned }}</span>
                    @endforeach
                </div>
                <div class="mt-5 border-t border-white/[0.06] pt-4">
                    <p class="font-mono text-[10px] uppercase tracking-wider text-zinc-500">In Progress</p>
                    <p class="mt-2 text-sm text-zinc-300">Hot Streak <span class="font-mono text-zinc-500">2/5</span></p>
                    <p class="text-sm text-zinc-300">Head Hunter <span class="font-mono text-zinc-500">8/10</span></p>
                </div>
                <p class="mt-4 text-xs text-zinc-500">Hidden: 6 undiscovered badges</p>
            </article>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
            @foreach ($badgeCategories as $category)
                @php
                    $isFx = $category['accent'] === 'fx';
                    $accentBorder = $isFx ? 'group-hover:border-charge-fx/40' : 'group-hover:border-charge-element/40';
                    $accentBg = $isFx ? 'group-hover:bg-charge-fx/10' : 'group-hover:bg-charge-element/10';
                    $accentText = $isFx ? 'text-charge-fx' : 'text-charge-element';
                @endphp
                <article class="charge-glass charge-glass-hover group rounded-xl p-5">
                    <div class="flex items-center justify-between gap-3">
                        <h3 class="text-base font-bold text-white">{{ $category['title'] }}</h3>
                        <span class="inline-flex h-9 w-9 items-center justify-center rounded-lg border border-white/10 bg-black/30 {{ $accentBorder }} {{ $accentBg }} {{ $accentText }} transition">
                            @include('charge.partials.icons', ['name' => $category['icon'], 'class' => 'h-4.5 w-4.5'])
                        </span>
                    </div>
                    <div class="mt-4 flex flex-wrap gap-2">
                        @foreach ($category['badges'] as $badge)
                            <span class="rounded-md border border-white/10 bg-black/25 px-2.5 py-1 text-xs text-zinc-300 transition hover:border-white/20 hover:text-white">
                                {{ $badge }}
                            </span>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
