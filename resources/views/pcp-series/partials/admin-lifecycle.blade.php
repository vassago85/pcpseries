<section class="border-b border-white/10 py-16 sm:py-20" aria-labelledby="admin-heading">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="mb-10 max-w-2xl">
            <p class="text-xs font-semibold uppercase tracking-[0.25em] text-zinc-500">Match operations</p>
            <h2 id="admin-heading" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Admin Experience</h2>
            <p class="mt-4 text-sm leading-relaxed text-zinc-400">
                Built around minimal admin steps, clean match setup, easy result publishing and future live scoring integration.
            </p>
        </div>

        <div class="overflow-x-auto pb-2 [-ms-overflow-style:none] [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
            <ol class="flex min-w-[640px] items-center gap-0 px-1" role="list">
                @foreach (['Draft', 'Registration', 'Squadding', 'Match Day', 'Results', 'Published'] as $index => $step)
                    <li class="flex flex-1 items-center">
                        <div class="flex flex-col items-center text-center">
                            <span class="flex h-10 w-10 items-center justify-center rounded-full border text-xs font-bold {{ $index === 5 ? 'border-pcp-fx bg-pcp-fx/20 text-pcp-fx' : 'border-white/15 bg-white/5 text-zinc-300' }}">
                                {{ $index + 1 }}
                            </span>
                            <span class="mt-3 whitespace-nowrap text-xs font-semibold uppercase tracking-wider text-zinc-400">{{ $step }}</span>
                        </div>
                        @if (! $loop->last)
                            <div class="mx-1 h-px flex-1 bg-gradient-to-r from-white/20 to-white/5" aria-hidden="true"></div>
                        @endif
                    </li>
                @endforeach
            </ol>
        </div>

        <p class="mt-8 flex items-start gap-2 text-xs text-zinc-500">
            @include('pcp-series.partials.icons', ['name' => 'workflow', 'class' => 'mt-0.5 h-4 w-4 shrink-0 text-zinc-600'])
            <span>Future-ready for DeadCenter and Impact Scoring live feeds — without changing your match-day workflow.</span>
        </p>
    </div>
</section>
