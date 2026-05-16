@php
    $dir = $dir ?? 'neutral';
    $delta = $delta ?? null;
@endphp

@if ($dir === 'up')
    <span class="inline-flex items-center gap-0.5 font-mono text-xs font-semibold text-charge-fx">
        <span aria-hidden="true">↑</span>{{ $delta }}
    </span>
@elseif ($dir === 'down')
    <span class="inline-flex items-center gap-0.5 font-mono text-xs font-semibold text-charge-element">
        <span aria-hidden="true">↓</span>{{ $delta }}
    </span>
@else
    <span class="inline-flex items-center font-mono text-xs font-semibold text-zinc-500">
        <span aria-hidden="true">→</span>
    </span>
@endif
