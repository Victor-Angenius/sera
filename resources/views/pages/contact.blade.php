@extends('layouts.app')

@section('content')
    <section class="mx-auto max-w-7xl px-6 py-14 lg:px-10 lg:py-24">
        <div class="grid gap-12 lg:grid-cols-[0.8fr_1.2fr] lg:items-start">
            <div>
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-[#e05a3f]">Get in touch</p>
                <h1 class="mt-6 max-w-3xl text-5xl font-extrabold leading-none tracking-[-0.06em] sm:text-7xl">Let’s talk<br><span class="text-[#e05a3f]">about style.</span></h1>
                <div class="mt-12 grid gap-8 border-t border-[#17201b]/15 pt-8">
                    <div><p class="font-mono text-xs uppercase tracking-[0.18em] text-[#17201b]/50">Email</p><a class="mt-3 block text-lg font-semibold hover:text-[#e05a3f]" href="mailto:hello@sera-clothing.test">hello@sera-clothing.test</a></div>
                    <div><p class="font-mono text-xs uppercase tracking-[0.18em] text-[#17201b]/50">Store hours</p><p class="mt-3 text-lg font-semibold">Mon - Sat, 09.00 - 18.00</p></div>
                </div>
            </div>

            <form action="{{ route('contact') }}" method="GET" class="border border-[#17201b]/15 bg-[#d5d9c8] p-6 sm:p-10">
                <div class="grid gap-6 sm:grid-cols-2">
                    <div class="grid gap-2">
                        <label for="name" class="font-mono text-xs font-medium uppercase tracking-[0.15em]">Nama</label>
                        <input id="name" name="name" type="text" required autocomplete="name" placeholder="Nama lengkap" class="w-full border border-[#17201b]/25 bg-[#f5f3ee] px-4 py-3 text-sm outline-none transition-colors placeholder:text-[#17201b]/40 hover:border-[#17201b]/50 focus:border-[#e05a3f] focus:ring-2 focus:ring-[#e05a3f]/25">
                    </div>
                    <div class="grid gap-2">
                        <label for="email" class="font-mono text-xs font-medium uppercase tracking-[0.15em]">Email</label>
                        <input id="email" name="email" type="email" required autocomplete="email" placeholder="nama@email.com" class="w-full border border-[#17201b]/25 bg-[#f5f3ee] px-4 py-3 text-sm outline-none transition-colors placeholder:text-[#17201b]/40 hover:border-[#17201b]/50 focus:border-[#e05a3f] focus:ring-2 focus:ring-[#e05a3f]/25">
                    </div>
                    <div class="grid gap-2 sm:col-span-2">
                        <label for="subject" class="font-mono text-xs font-medium uppercase tracking-[0.15em]">Subjek</label>
                        <input id="subject" name="subject" type="text" required placeholder="Tentang apa kamu ingin berbicara?" class="w-full border border-[#17201b]/25 bg-[#f5f3ee] px-4 py-3 text-sm outline-none transition-colors placeholder:text-[#17201b]/40 hover:border-[#17201b]/50 focus:border-[#e05a3f] focus:ring-2 focus:ring-[#e05a3f]/25">
                    </div>
                    <div class="grid gap-2 sm:col-span-2">
                        <label for="message" class="font-mono text-xs font-medium uppercase tracking-[0.15em]">Pesan</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Tulis pesanmu di sini..." class="w-full resize-y border border-[#17201b]/25 bg-[#f5f3ee] px-4 py-3 text-sm outline-none transition-colors placeholder:text-[#17201b]/40 hover:border-[#17201b]/50 focus:border-[#e05a3f] focus:ring-2 focus:ring-[#e05a3f]/25"></textarea>
                    </div>
                </div>
                <button type="submit" class="mt-8 inline-flex items-center gap-4 bg-[#17201b] px-6 py-3 text-sm font-bold uppercase tracking-[0.13em] text-[#f5f3ee] transition-colors hover:bg-[#e05a3f] focus:outline-none focus:ring-2 focus:ring-[#17201b] focus:ring-offset-2 focus:ring-offset-[#d5d9c8]">Kirim pesan <span aria-hidden="true">↗</span></button>
            </form>
        </div>
    </section>
@endsection