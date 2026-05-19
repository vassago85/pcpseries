<section class="border-b border-white/10 bg-pcp-surface/50" aria-label="Series highlights">
    <div class="mx-auto grid max-w-7xl grid-cols-2 gap-px bg-white/10 md:grid-cols-4">
        @foreach ([
            ['label' => '2026 Season', 'value' => 'ACTIVE'],
            ['label' => '6 Match Series', 'value' => 'NATIONAL'],
            ['label' => 'PRS-Style Format', 'value' => 'BARRICADE'],
            ['label' => 'National Leaderboard', 'value' => 'OPEN FIELD'],
        ] as $stat)
            <div class="bg-pcp-bg px-6 py-8 text-center md:py-10">
                <p class="font-mono text-lg font-semibold tracking-tight text-white sm:text-xl">{{ $stat['value'] }}</p>
                <p class="mt-2 text-xs font-medium uppercase tracking-[0.2em] text-zinc-500">{{ $stat['label'] }}</p>
            </div>
        @endforeach
    </div>
</section>
