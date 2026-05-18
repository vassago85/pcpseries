<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="FIVEFIVE — Air. Rimfire. Precision. One leaderboard. Two disciplines. Unlimited competition. Powered by FX Airguns & Element Optics.">
    <title>@yield('title', 'FIVEFIVE — Air. Rimfire. Precision.')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen font-sans antialiased">
    <div class="pointer-events-none fixed inset-0 charge-grid-bg opacity-60" aria-hidden="true"></div>
    <div class="pointer-events-none fixed inset-0 charge-glow-fx" aria-hidden="true"></div>
    <div class="pointer-events-none fixed inset-0 charge-glow-element" aria-hidden="true"></div>
    @yield('content')
</body>
</html>
