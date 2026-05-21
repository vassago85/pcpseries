<section id="season" class="border-b border-white/[0.06] py-16 sm:py-24" aria-labelledby="features-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-zinc-500">PARC Platform</p>
        <h2 id="features-title" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Built For Shooters</h2>

        <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['icon' => 'bar-chart', 'title' => 'Track Season Performance', 'desc' => 'Points, form and progression across every round.'],
                ['icon' => 'trophy', 'title' => 'View Leaderboard', 'desc' => 'Overall, PCP and Rimfire standings after each match.'],
                ['icon' => 'user', 'title' => 'Shooter Profiles', 'desc' => 'Competition history across both disciplines.'],
                ['icon' => 'settings', 'title' => 'Equipment Setups', 'desc' => 'Rifle, optic and load data tied to results.'],
            ] as $card)
                <article class="charge-glass charge-glass-hover group rounded-xl p-6">
                    <span class="flex h-11 w-11 items-center justify-center rounded-lg border border-white/10 bg-black/40 text-charge-fx transition group-hover:border-charge-fx/30 group-hover:bg-charge-fx/10">
                        @include('charge.partials.icons', ['name' => $card['icon'], 'class' => 'h-5 w-5'])
                    </span>
                    <h3 class="mt-5 text-base font-bold text-white">{{ $card['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-500">{{ $card['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
