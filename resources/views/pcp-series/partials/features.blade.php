<section id="season" class="border-b border-white/10 py-16 sm:py-20" aria-labelledby="features-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-12 max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-zinc-500">Platform</p>
            <h2 id="features-heading" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Built For Shooters</h2>
        </div>

        <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
            @foreach ([
                ['icon' => 'bar-chart', 'title' => 'Track Your Season', 'desc' => 'Points, placements and progression across every round.'],
                ['icon' => 'target', 'title' => 'Match Results', 'desc' => 'Stage scores and match percentages as soon as they publish.'],
                ['icon' => 'user', 'title' => 'Shooter Profiles', 'desc' => 'Your competition history, divisions and season form.'],
                ['icon' => 'settings', 'title' => 'Equipment Setups', 'desc' => 'Rifle, optic and pellet configs tied to your results.'],
            ] as $card)
                <article class="pcp-glass group rounded-2xl p-6 transition hover:border-pcp-fx/30">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl border border-white/10 bg-black/30 text-pcp-fx transition group-hover:border-pcp-fx/40 group-hover:bg-pcp-fx/10">
                        @include('pcp-series.partials.icons', ['name' => $card['icon'], 'class' => 'h-5 w-5'])
                    </span>
                    <h3 class="mt-5 text-lg font-semibold text-white">{{ $card['title'] }}</h3>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-400">{{ $card['desc'] }}</p>
                </article>
            @endforeach
        </div>
    </div>
</section>
