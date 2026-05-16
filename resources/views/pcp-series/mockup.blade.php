@extends('layouts.pcp-mockup')

@section('title', 'PCP Series South Africa — Precision PCP Competition')

@section('content')
    @include('pcp-series.partials.nav')

    <main>
        @include('pcp-series.partials.hero')
        @include('pcp-series.partials.stats')
        @include('pcp-series.partials.leaderboard')
        @include('pcp-series.partials.next-match')
        @include('pcp-series.partials.features')
        @include('pcp-series.partials.admin-lifecycle')
        @include('pcp-series.partials.partners')
        @include('pcp-series.partials.cta')
    </main>

    @include('pcp-series.partials.footer')
@endsection
