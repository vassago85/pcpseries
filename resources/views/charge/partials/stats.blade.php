<section class="border-b border-white/[0.06] py-12 sm:py-16" aria-label="Series overview">
    <div class="mx-auto grid max-w-7xl gap-3 px-4 sm:grid-cols-2 sm:px-6 lg:grid-cols-4 lg:px-8">
        @foreach ([
            ['title' => '2026 Season', 'sub' => 'National series'],
            ['title' => '6 Match Series', 'sub' => 'Full calendar'],
            ['title' => 'PRS Style Format', 'sub' => 'Barricade stages'],
            ['title' => 'National Rankings', 'sub' => 'Live standings'],
        ] as $stat)
            <article class="charge-glass charge-glass-hover rounded-xl px-6 py-8 text-center">
                <p class="text-lg font-bold tracking-tight text-white sm:text-xl">{{ $stat['title'] }}</p>
                <p class="mt-2 font-mono text-[10px] uppercase tracking-[0.25em] text-zinc-500">{{ $stat['sub'] }}</p>
            </article>
        @endforeach
    </div>
</section>
