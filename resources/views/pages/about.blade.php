@extends('layouts.app')

@section('content')
    <section class="mx-auto grid max-w-7xl gap-12 px-6 py-14 lg:grid-cols-[0.9fr_1.1fr] lg:items-center lg:px-10 lg:py-24">
        <div>
            <p class="font-mono text-xs uppercase tracking-[0.2em] text-[#e05a3f]">About SERA / 01</p>
            <h1 class="mt-6 max-w-4xl text-5xl font-extrabold leading-none tracking-[-0.06em] sm:text-7xl">Clothes with<br><span class="text-[#e05a3f]">room to live.</span></h1>
            <p class="mt-10 max-w-xl text-lg leading-8 text-[#17201b]/65">SERA adalah toko pakaian yang percaya bahwa gaya terbaik terasa natural. Kami membuat pakaian sehari-hari yang nyaman, kuat, dan punya karakter.</p>
        </div>
        <figure class="relative overflow-hidden bg-[#d5d9c8]">
            <img src="https://images.unsplash.com/photo-1529139574466-a303027c1d8b?auto=format&fit=crop&w=1200&q=85" alt="Koleksi pakaian SERA dengan gaya kasual modern" class="h-[430px] w-full object-cover sm:h-[540px]" loading="eager">
            <figcaption class="absolute bottom-5 left-5 bg-[#f5f3ee] px-4 py-2 font-mono text-xs uppercase tracking-[0.14em] text-[#17201b]">SERA studio / Jakarta</figcaption>
        </figure>
    </section>

    <section class="border-t border-[#17201b]/15 bg-[#17201b] px-6 py-14 text-[#f5f3ee] lg:px-10 lg:py-20">
        <div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[0.8fr_1.2fr]">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-[#e05a3f]">Our story / 02</p>
                <h2 class="mt-5 max-w-sm text-3xl font-extrabold leading-tight tracking-[-0.05em] sm:text-4xl">Dibuat untuk hidup yang nyata.</h2>
            </div>
            <div class="grid gap-8 text-base leading-7 text-[#f5f3ee]/70 sm:grid-cols-2">
                <p>SERA lahir dari keinginan untuk membuat pakaian yang tidak mendikte siapa kamu. Setiap koleksi dirancang sebagai fondasi gaya, agar mudah dipakai dan bebas kamu kembangkan.</p>
                <p>Kami memilih detail yang fungsional, warna yang bertahan lama, dan bahan yang terasa semakin personal setiap kali dipakai. Sederhana di awal, bermakna dalam keseharian.</p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-14 lg:px-10 lg:py-20" aria-labelledby="values-title">
        <div class="mb-10 flex flex-col gap-4 sm:flex-row sm:items-end sm:justify-between">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-[#e05a3f]">What we believe / 03</p>
                <h2 id="values-title" class="mt-4 text-3xl font-extrabold tracking-[-0.05em] sm:text-4xl">Nilai yang kami bawa.</h2>
            </div>
            <p class="max-w-sm text-sm leading-6 text-[#17201b]/65">Lebih sedikit keputusan yang rumit, lebih banyak ruang untuk menjalani hari.</p>
        </div>
        <div class="grid gap-px overflow-hidden border border-[#17201b]/15 bg-[#17201b]/15 md:grid-cols-3">
            <article class="bg-[#f5f3ee] p-7 sm:p-8">
                <span class="font-mono text-sm text-[#e05a3f]">01</span>
                <h3 class="mt-12 text-xl font-bold tracking-[-0.03em]">Intentional</h3>
                <p class="mt-3 text-sm leading-6 text-[#17201b]/65">Setiap jahitan dan siluet punya alasan, bukan sekadar mengikuti musim.</p>
            </article>
            <article class="bg-[#f5f3ee] p-7 sm:p-8">
                <span class="font-mono text-sm text-[#e05a3f]">02</span>
                <h3 class="mt-12 text-xl font-bold tracking-[-0.03em]">Approachable</h3>
                <p class="mt-3 text-sm leading-6 text-[#17201b]/65">Pakaian yang mudah dipakai, dipadukan, dan terasa seperti milikmu.</p>
            </article>
            <article class="bg-[#f5f3ee] p-7 sm:p-8">
                <span class="font-mono text-sm text-[#e05a3f]">03</span>
                <h3 class="mt-12 text-xl font-bold tracking-[-0.03em]">Built to last</h3>
                <p class="mt-3 text-sm leading-6 text-[#17201b]/65">Kualitas yang menemani lebih banyak hari, bukan hanya satu momen.</p>
            </article>
        </div>
    </section>
@endsection