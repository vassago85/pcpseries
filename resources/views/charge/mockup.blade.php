@extends('layouts.charge')

@section('title', 'FIVEFIVE — Air. Rimfire. Precision.')

@section('content')
    @include('charge.partials.nav')

    <main>
        @include('charge.partials.hero')
        @include('charge.partials.definition')
        @include('charge.partials.stats')
        @include('charge.partials.leaderboard')
        @include('charge.partials.next-match')
        @include('charge.partials.features')
        @include('charge.partials.admin-lifecycle')
        @include('charge.partials.partners')
        @include('charge.partials.cta')
    </main>

    @include('charge.partials.footer')
@endsection
