<section class="border-b border-white/[0.06] py-16 sm:py-24" aria-labelledby="admin-title">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <p class="font-mono text-[10px] uppercase tracking-[0.35em] text-zinc-500">Operations</p>
        <h2 id="admin-title" class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Admin Experience</h2>
        <p class="mt-4 max-w-xl text-sm text-zinc-400">
            Built for FIVE·FIVE match control across air and rimfire disciplines with minimal steps, clean administration, and future scoring integrations.
        </p>

        <div class="mt-10 overflow-x-auto pb-2">
            <ol class="flex min-w-[700px] items-center lg:min-w-0" role="list">
                @foreach (['Draft', 'Registration', 'Squadding', 'Match Day', 'Results', 'Published'] as $i => $step)
                    <li class="flex flex-1 items-center">
                        <div class="flex flex-col items-center text-center">
                            <span class="flex h-11 w-11 items-center justify-center rounded-full border text-xs font-bold transition {{ $i === 5 ? 'border-charge-fx bg-charge-fx/15 text-charge-fx' : 'border-white/10 bg-white/5 text-zinc-400' }}">
                                {{ $i + 1 }}
                            </span>
                            <span class="mt-3 whitespace-nowrap text-[10px] font-semibold uppercase tracking-wider text-zinc-500">{{ $step }}</span>
                        </div>
                        @if (! $loop->last)
                            <span class="mx-1 text-zinc-600" aria-hidden="true">→</span>
                        @endif
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
</section>
