<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SERA' }} | SERA Clothing</title>
    <meta name="description" content="SERA Clothing - pakaian sehari-hari dengan karakter.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-[#f5f3ee] font-sans text-[#17201b] antialiased">
    <div class="flex min-h-screen flex-col">
        <nav class="border-b border-[#17201b]/15 bg-[#f5f3ee]" aria-label="Navigasi utama">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 lg:px-10">
                <a href="{{ route('home') }}" class="font-mono text-xl font-medium tracking-[-0.08em]" aria-label="SERA Clothing, beranda">SERA<span class="text-[#e05a3f]">.</span></a>
                <div class="hidden items-center gap-9 text-sm font-semibold md:flex">
                    <a href="{{ route('home') }}" class="transition-colors hover:text-[#e05a3f]">Home</a>
                    <a href="{{ route('about') }}" class="transition-colors hover:text-[#e05a3f]">About</a>
                    <a href="{{ route('contact') }}" class="transition-colors hover:text-[#e05a3f]">Contact</a>
                </div>
                <a href="#koleksi" class="rounded-full bg-[#17201b] px-5 py-2.5 text-xs font-bold uppercase tracking-[0.12em] text-white transition-transform hover:-translate-y-0.5">Check now <span aria-hidden="true">↗</span></a>
            </div>
        </nav>

        <main class="flex-1">@yield('content')</main>

        <footer class="border-t border-[#17201b]/15 bg-[#17201b] text-[#f5f3ee]">
            <div class="mx-auto flex max-w-7xl flex-col gap-8 px-6 py-10 lg:flex-row lg:items-end lg:justify-between lg:px-10">
                <div>
                    <p class="font-mono text-xl tracking-[-0.08em]">SERA<span class="text-[#e05a3f]">.</span></p>
                    <p class="mt-3 max-w-xs text-sm leading-6 text-[#f5f3ee]/65">Pakaian yang dibuat untuk bergerak, beristirahat, dan menjalani hari dengan caramu.</p>
                </div>
                <div class="flex flex-col gap-2 text-sm text-[#f5f3ee]/65 sm:flex-row sm:gap-8">
                    <span>© {{ date('Y') }} SERA Clothing</span>
                    <a href="mailto:hello@sera-clothing.test" class="transition-colors hover:text-[#e05a3f]">hello@sera-clothing.test</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>