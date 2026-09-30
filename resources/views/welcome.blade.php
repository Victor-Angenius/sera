@extends('layouts.app')

@section('content')
    <section class="mx-auto grid max-w-7xl gap-10 px-6 py-14 lg:grid-cols-[1.05fr_0.95fr] lg:items-center lg:px-10 lg:py-24">
        <div class="animate-[fade-up_700ms_ease-out_both]">
            <p class="mb-7 font-mono text-xs font-medium uppercase tracking-[0.22em] text-[#e05a3f]">New season / 2026</p>
            <h1 class="max-w-3xl text-5xl font-extrabold leading-[0.95] tracking-[-0.06em] sm:text-7xl lg:text-[6.5rem]">Everyday<br><span class="text-[#e05a3f]">uniforms.</span></h1>
            <p class="mt-8 max-w-md text-base leading-7 text-[#17201b]/65">Essential pieces dengan potongan tegas dan bahan nyaman. Dirancang untuk menemani ritme harianmu.</p>
            <a href="#koleksi" class="mt-9 inline-flex items-center gap-4 border-b-2 border-[#17201b] pb-2 text-sm font-bold uppercase tracking-[0.13em] transition-colors hover:border-[#e05a3f] hover:text-[#e05a3f]">Lihat koleksi <span class="text-lg">→</span></a>
        </div>
        <div class="relative min-h-[430px] overflow-hidden bg-[#d5d9c8] lg:min-h-[570px]">
            <div class="absolute inset-0 bg-[linear-gradient(135deg,transparent_0%,transparent_48%,rgba(23,32,27,0.12)_48%,rgba(23,32,27,0.12)_50%,transparent_50%)]"></div>
            <div class="absolute bottom-8 left-8 right-8 top-8 border border-[#17201b]/25"></div>
            <div class="absolute bottom-10 left-10 max-w-[190px] font-mono text-xs uppercase leading-5 tracking-[0.16em] text-[#17201b]/70">Made for your<br>daily movement</div>
            <div class="absolute right-8 top-8 font-mono text-xs text-[#e05a3f]">01 / 03</div>
            <div class="absolute bottom-1/2 left-1/2 h-56 w-36 -translate-x-1/2 translate-y-1/2 rotate-6 border-[18px] border-[#17201b] bg-[#e05a3f] shadow-[18px_18px_0_#f5f3ee]"></div>
        </div>
    </section>

    <section id="koleksi" class="border-t border-[#17201b]/15 bg-[#e05a3f] px-6 py-12 lg:px-10">
        <div class="mx-auto flex max-w-7xl flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <p class="font-mono text-xs uppercase tracking-[0.18em] text-[#17201b]/65">The SERA approach</p>
            <p class="max-w-xl text-xl font-semibold leading-7 tracking-[-0.03em] sm:text-2xl">Pakaian sederhana. Detail yang dipikirkan. Ruang untuk menjadi dirimu sendiri.</p>
        </div>
    </section>
@endsection
