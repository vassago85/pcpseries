@extends('layouts.charge')

@section('title', 'PARC Proposal — Precision Airgun & Rimfire Challenge')

@section('content')
    @php
        $clientInputs = [
            'Final logo and brand assets',
            'Confirmed domain name',
            'Page structure',
            'Match registration workflow',
            'Scoring / leaderboard requirements',
            'Sponsor placement requirements',
            'Required content and wording',
            'Contact details and social links',
            'Payment gateway preference',
            'Email sending requirements',
        ];

        $scopeItems = [
            'Website design and development',
            'Homepage refinement based on existing demo',
            'About / format / rules / FAQ style content pages',
            'Match listing and match detail pages',
            'Shooter registration and entry flow',
            'Leaderboard and results display',
            'Sponsor showcase areas',
            'Contact forms',
            'Basic SEO setup',
            'Analytics setup',
            'Mobile responsive layout',
            'Deployment and hosting setup',
        ];

        $dnsItems = [
            'Website A records or CNAME records',
            'Verification records',
            'Mailgun sending records if Mailgun is used',
            'Payment gateway verification records where required',
            'Third-party service verification records',
        ];

        $emailTypes = [
            'Registration confirmations',
            'Match entry notifications',
            'Admin notifications',
            'Password reset emails if user accounts are added',
            'Platform system emails',
        ];

        $exclusions = [
            'Logo design',
            'Brand identity development',
            'Graphic design',
            'Advanced content writing',
            'Sponsor campaign management',
            'Email inbox hosting',
            'Email mailbox management',
            'Payment gateway fees',
            'Third-party software subscriptions',
            'Major custom feature development outside agreed scope',
            'Live scoring engine unless separately agreed',
            'Mobile app development',
            'Ongoing manual event admin unless separately agreed',
        ];

        $nextSteps = [
            'Approved scope',
            'Required launch features',
            'Domain arrangement',
            'Payment gateway preference',
            'Email sending requirements',
            'Content and branding assets',
            'Any exclusions that must be added back into scope',
        ];
    @endphp

    @include('charge.partials.nav')

    <main class="pb-14 sm:pb-20">
        <section class="relative overflow-hidden border-b border-white/[0.06]" aria-labelledby="proposal-hero">
            <div class="charge-crosshair pointer-events-none absolute inset-0 opacity-30" aria-hidden="true"></div>
            <div class="relative mx-auto max-w-7xl px-4 py-14 sm:px-6 lg:px-8 lg:py-20">
                <span class="inline-flex items-center rounded-full border border-charge-fx/30 bg-charge-fx/10 px-4 py-2 font-mono text-[11px] uppercase tracking-[0.15em] text-charge-fx">
                    Website - Match Registration - Leaderboards - Platform Support
                </span>
                <h1 id="proposal-hero" class="mt-6 text-4xl font-bold tracking-tight text-white sm:text-5xl lg:text-6xl">
                    PARC Website &amp; Digital Platform Proposal
                </h1>
                <p class="mt-4 max-w-3xl text-base text-zinc-300 sm:text-lg">
                    Prepared by Charsley Digital for the PARC - Precision Airgun &amp; Rimfire Challenge platform.
                </p>
                <article class="charge-glass mt-8 max-w-4xl rounded-xl border border-charge-element/25 bg-charge-element/5 p-5">
                    <p class="text-sm leading-relaxed text-zinc-300">
                        This proposal is based on the current PARC demo landing page and platform concept. Final scope, content, branding and functionality must be confirmed by PARC before development begins.
                    </p>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="client-input">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="client-input" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Important Client Input Required</h2>
                <p class="mt-4 max-w-4xl text-sm leading-relaxed text-zinc-300 sm:text-base">
                    To avoid assumptions, delays and unnecessary rework, PARC must confirm the required platform structure, pages, match workflow, content, branding assets and launch requirements before development begins.
                </p>
                <div class="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($clientInputs as $item)
                        <article class="charge-glass rounded-xl p-4">
                            <p class="text-sm font-medium text-zinc-200">{{ $item }}</p>
                        </article>
                    @endforeach
                </div>
                <article class="charge-glass mt-6 rounded-xl border border-charge-element/25 bg-black/30 p-5">
                    <p class="text-sm leading-relaxed text-zinc-300">
                        Charsley Digital will not design logos as part of this proposal. Logo design, brand identity development, graphic design and advanced content creation will be quoted separately if required.
                    </p>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="scope-work">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="scope-work" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Scope of Work</h2>
                <div class="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($scopeItems as $item)
                        <article class="charge-glass rounded-xl p-4">
                            <p class="text-sm font-medium text-zinc-200">{{ $item }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="platform-fee">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="platform-fee" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Platform Transaction Fee</h2>
                <article class="charge-glass mt-8 rounded-2xl p-6 sm:p-8">
                    <p class="text-base leading-relaxed text-zinc-200">
                        A 5% platform fee will apply to transactions processed through the PARC platform.
                    </p>
                    <p class="mt-4 text-sm text-zinc-300">For the initial scope, this fee applies only to:</p>
                    <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                        <li>- Match registrations</li>
                        <li>- Shooter entry fees</li>
                    </ul>
                    <p class="mt-5 text-sm leading-relaxed text-zinc-300">
                        The 5% platform fee is independent of and additional to any payment gateway or transaction processing charges levied by third-party payment providers.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-400">Payment gateway costs remain for the account of PARC.</p>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="domain-dns">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="domain-dns" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Domain, DNS &amp; Email Setup</h2>
                <div class="mt-8 grid gap-4 lg:grid-cols-2">
                    <article class="charge-glass rounded-xl p-5">
                        <p class="text-sm leading-relaxed text-zinc-300">
                            If PARC wants Charsley Digital to source, register and manage the domain, this can be done at <span class="font-semibold text-white">R300 per month</span>.
                        </p>
                        <p class="mt-4 text-sm text-zinc-300">This includes:</p>
                        <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                            <li>- Domain registration assistance</li>
                            <li>- Domain renewal management</li>
                            <li>- DNS record management</li>
                            <li>- General DNS support related to the website</li>
                        </ul>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <p class="text-sm leading-relaxed text-zinc-300">
                            If PARC already owns or manages their own domain, PARC must be able to set up the required DNS records or provide access to the DNS provider so the required records can be configured.
                        </p>
                        <p class="mt-4 text-sm text-zinc-300">Required DNS records may include:</p>
                        <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                            @foreach ($dnsItems as $item)
                                <li>- {{ $item }}</li>
                            @endforeach
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="mailgun-section">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="mailgun-section" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Email / Mailgun</h2>
                <article class="charge-glass mt-8 rounded-2xl p-6 sm:p-8">
                    <p class="text-sm leading-relaxed text-zinc-300">
                        Charsley Digital can assist with transactional email sending through Mailgun at <span class="font-semibold text-white">R1,000 per month</span>.
                    </p>
                    <p class="mt-4 text-sm text-zinc-300">This is for system email sending only, such as:</p>
                    <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                        @foreach ($emailTypes as $item)
                            <li>- {{ $item }}</li>
                        @endforeach
                    </ul>
                    <p class="mt-5 text-sm font-semibold text-white">This does not include email inbox hosting or mailbox management.</p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-300">
                        Charsley Digital will not create, manage or support user mailboxes such as info@, admin@, accounts@ or personal email accounts.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-300">
                        If PARC wants email inboxes, they should use a third-party mailbox provider such as Zoho, Google Workspace or Microsoft 365.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-400">
                        Charsley Digital can assist with the required DNS records for those third-party mailbox services, but mailbox setup, user account management, passwords, storage, billing and daily mailbox support remain the responsibility of PARC or the selected mailbox provider.
                    </p>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="exclusions">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="exclusions" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Exclusions</h2>
                <div class="mt-8 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($exclusions as $item)
                        <article class="charge-glass rounded-xl border border-charge-element/20 p-4">
                            <p class="text-sm font-medium text-zinc-200">{{ $item }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="pricing-summary">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="pricing-summary" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Pricing Summary</h2>
                <div class="mt-8 grid gap-4 md:grid-cols-2 xl:grid-cols-3">
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Initial Website / Platform Build</h3>
                        <p class="mt-3 text-sm text-zinc-300">Reduced upfront implementation fee</p>
                        <p class="mt-1 text-sm text-zinc-400">Final amount to be confirmed based on agreed scope.</p>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Platform Fee</h3>
                        <p class="mt-3 text-sm text-zinc-300">5% of match registration and shooter entry transactions processed through the platform.</p>
                        <p class="mt-1 text-sm text-zinc-400">Excludes payment gateway fees.</p>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Domain Management</h3>
                        <p class="mt-3 text-sm text-zinc-300">R300 per month if Charsley Digital registers and manages the PARC domain.</p>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Mailgun Transactional Email Management</h3>
                        <p class="mt-3 text-sm text-zinc-300">R1,000 per month.</p>
                        <p class="mt-1 text-sm text-zinc-300">System email sending only.</p>
                        <p class="mt-1 text-sm text-zinc-400">No mailbox hosting or mailbox support included.</p>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Additional Development</h3>
                        <p class="mt-3 text-sm text-zinc-300">R1,500 per hour or quoted separately.</p>
                    </article>
                </div>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="option-a">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="option-a" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Option A - Fixed Build + Platform Fee</h2>
                <article class="charge-glass mt-8 rounded-2xl p-6 sm:p-8">
                    <p class="text-sm text-zinc-300">Initial website/platform development: <span class="font-semibold text-white">R40,000 once-off</span></p>
                    <p class="mt-3 text-sm text-zinc-300">Payment terms:</p>
                    <ul class="mt-2 space-y-2 text-sm text-zinc-300">
                        <li>- 50% on commencement</li>
                        <li>- 50% on go-live</li>
                    </ul>
                    <p class="mt-4 text-sm leading-relaxed text-zinc-300">
                        Platform transaction fee: <span class="font-semibold text-white">7.5%</span> of all match registration and shooter entry transactions processed through the PARC platform.
                    </p>
                    <p class="mt-2 text-sm leading-relaxed text-zinc-300">
                        The 7.5% platform fee is independent of and additional to any payment gateway or transaction processing fees charged by third-party providers.
                    </p>
                    <p class="mt-2 text-sm text-zinc-400">Payment gateway fees remain for the account of PARC.</p>
                    <p class="mt-3 text-sm text-zinc-300">Monthly continuity fee: To be confirmed based on hosting, domain, DNS and email requirements.</p>
                    <p class="mt-4 text-sm text-zinc-300">Optional monthly services:</p>
                    <ul class="mt-2 space-y-2 text-sm text-zinc-300">
                        <li>- Domain management: R300 per month</li>
                        <li>- Mailgun transactional email management: R1,000 per month</li>
                        <li>- Additional development: R1,500 per hour or quoted separately</li>
                    </ul>
                </article>
            </div>
        </section>

        <section class="border-b border-white/[0.06] py-12 sm:py-16" aria-labelledby="ownership">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <h2 id="ownership" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Ownership</h2>
                <div class="mt-8 grid gap-4 lg:grid-cols-2">
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">PARC owns</h3>
                        <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                            <li>- Domain if registered in PARC's name</li>
                            <li>- Branding assets</li>
                            <li>- Website content</li>
                            <li>- Participant data</li>
                            <li>- Match data</li>
                        </ul>
                    </article>
                    <article class="charge-glass rounded-xl p-5">
                        <h3 class="text-base font-semibold text-white">Charsley Digital manages</h3>
                        <ul class="mt-3 space-y-2 text-sm text-zinc-300">
                            <li>- Website hosting</li>
                            <li>- Platform maintenance</li>
                            <li>- Technical support</li>
                            <li>- Backups</li>
                            <li>- Security monitoring</li>
                            <li>- DNS support where included</li>
                            <li>- Mailgun sending configuration where included</li>
                        </ul>
                    </article>
                </div>
            </div>
        </section>

        <section class="py-14 sm:py-20" aria-labelledby="acceptance">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <article class="charge-glass rounded-2xl p-6 sm:p-8 lg:p-10">
                    <h2 id="acceptance" class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Acceptance / Next Steps</h2>
                    <p class="mt-4 text-sm text-zinc-300">To proceed, PARC must confirm:</p>
                    <div class="mt-5 grid gap-3 sm:grid-cols-2">
                        @foreach ($nextSteps as $item)
                            <div class="rounded-lg border border-white/[0.08] bg-black/25 px-4 py-3 text-sm text-zinc-200">{{ $item }}</div>
                        @endforeach
                    </div>
                    <div class="mt-8 flex flex-wrap gap-3">
                        <a href="{{ route('charge') }}" class="inline-flex items-center justify-center rounded-lg bg-charge-fx px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-black transition hover:bg-charge-fx/90">
                            Back to Home
                        </a>
                        <a href="{{ route('charge') }}#matches" class="inline-flex items-center justify-center rounded-lg border border-white/15 px-7 py-3.5 text-sm font-bold uppercase tracking-wider text-white transition hover:bg-white/5">
                            View Matches
                        </a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    @include('charge.partials.footer')
@endsection
