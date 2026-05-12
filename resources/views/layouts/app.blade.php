<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ \App\Models\Setting::get('meta_description', 'Elite Business Setup Consultancy – UAE business setup, visa services, trade license, and more.') }}">
    <title>@yield('title', 'Elite Business Setup Consultancy FZ-LLC | UAE Business Setup & Visa Services')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Poppins:wght@400;500;600;700;800;900&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>
<body class="text-gray-800 bg-white selection:bg-gold selection:text-navy font-body">

{{-- ===== NAVBAR ===== --}}
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-navy/95 backdrop-blur-md border-b border-gold/20 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-between h-16 md:h-20">

        {{-- Logo Area --}}
        <div class="flex items-center gap-3 h-full">
            <a href="{{ url('/') }}" class="relative group flex items-center h-full">
                {{-- Hanging Logo Container --}}
                <div class="relative z-20 w-18 h-18 md:w-28 md:h-28 bg-white rounded-full shadow-2xl border-4 border-navy flex items-center justify-center transition-all duration-300 group-hover:scale-105 overflow-hidden"
                     style="margin-top: 15px;">
                    <img src="{{ asset('images/logo.png') }}" alt="Elite Business Setup Logo" class="w-full h-full object-cover">
                </div>

                {{-- Logo Text --}}
                <div class="leading-none hidden sm:block ml-5">
                    <div class="flex items-baseline gap-1.5 mb-1">
                        <span class="text-white font-heading font-black text-xl md:text-2xl tracking-tight uppercase">Elite</span>
                        <span class="text-gold font-heading font-black text-[15px] md:text-[18px] tracking-tight uppercase">Business Setup</span>
                    </div>
                    <div class="text-white/40 text-[8px] md:text-[10px] tracking-[2px] uppercase font-heading font-bold">Consultancy FZE LLC</div>
                </div>
            </a>
        </div>

        {{-- Desktop Links --}}
        <ul id="navLinks" class="hidden lg:flex items-center gap-1 list-none">
            @foreach([['Home','/'],['About','/#about'],['Services','/#services'],['Business Setup','/#business-setup'],['Visa','/#visa'],['Contact','/#contact']] as $link)
            <li>
                <a href="{{ url($link[1]) }}"
                   class="text-white/80 hover:text-gold font-heading text-[13px] font-bold tracking-widest uppercase px-3.5 py-2 rounded transition-all duration-200 hover:bg-gold/10">
                    {{ $link[0] }}
                </a>
            </li>
            @endforeach
            <li>
                <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp','971528455102') }}" target="_blank"
                   class="bg-gold text-navy font-black text-[11px] tracking-widest uppercase px-6 py-2.5 rounded ml-2 hover:bg-gold-light transition-all shadow-lg shadow-gold/20">
                    📲 WhatsApp
                </a>
            </li>
        </ul>

        {{-- Mobile toggle --}}
        <button id="navToggle" class="lg:hidden flex flex-col gap-1.5 p-2 cursor-pointer" onclick="toggleNav()" aria-label="Menu">
            <span class="block w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
            <span class="block w-6 h-0.5 bg-white rounded transition-all duration-300"></span>
        </button>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobileMenu" class="hidden lg:hidden bg-navy border-t border-gold/20 px-4 py-4 flex flex-col gap-1">
        @foreach([['Home','/'],['About','/#about'],['Services','/#services'],['Business Setup','/#business-setup'],['Visa','/#visa'],['Contact','/#contact']] as $link)
        <a href="{{ url($link[1]) }}" onclick="toggleNav()"
           class="text-white/80 hover:text-gold font-heading text-sm font-bold tracking-widest uppercase px-3 py-2.5 rounded hover:bg-gold/10 transition-all">
            {{ $link[0] }}
        </a>
        @endforeach
        <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp','971528455102') }}" target="_blank"
           class="bg-gold text-navy text-center font-black text-xs tracking-widest uppercase py-3.5 rounded mt-2">📲 WhatsApp Now</a>
    </div>
</nav>

{{-- ===== PAGE CONTENT ===== --}}
<main>@yield('content')</main>

{{-- ===== FOOTER ===== --}}
<footer class="bg-navy text-white/75 pt-20 pb-0 border-t border-gold/10 font-body">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            {{-- Brand & About --}}
            <div class="lg:col-span-1">
                <a href="{{ url('/') }}" class="flex items-center gap-4 no-underline mb-8 group">
                    <div class="w-20 h-20 rounded-full flex items-center justify-center overflow-hidden bg-white shadow-xl border-2 border-gold/20">
                        <img src="{{ asset('images/logo.png') }}" alt="Elite Business Setup Logo" class="w-full h-full object-cover">
                    </div>
                    <div class="leading-none">
                        <div class="text-white font-heading font-black text-2xl tracking-tight leading-none uppercase">Elite</div>
                        <div class="text-gold font-heading font-black text-[16px] tracking-tight leading-none mt-1 uppercase">Business Setup</div>
                    </div>
                </a>
                <p class="text-white/60 text-sm leading-relaxed mb-8">
                    Trusted experts in UAE company formation. We simplify the complexities of starting a business in Dubai, ensuring a smooth and hassle-free experience for entrepreneurs worldwide.
                </p>
                <div class="flex gap-3">
                    @foreach([
                        ['f', '#', 'Facebook'],
                        ['ig', '#', 'Instagram'],
                        ['in', '#', 'LinkedIn'],
                        ['yt', '#', 'YouTube']
                    ] as $social)
                    <a href="{{ $social[1] }}" title="{{ $social[2] }}" class="w-10 h-10 rounded-full border border-white/10 flex items-center justify-center text-white/60 text-xs hover:border-gold hover:text-gold hover:bg-gold/10 transition-all duration-300 uppercase font-black">
                        {{ $social[0] }}
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick Links --}}
            <div>
                <h4 class="font-heading font-black text-white text-[14px] tracking-widest uppercase mb-8 pb-2 border-b-2 border-gold w-fit">Quick Links</h4>
                <ul class="space-y-4 list-none">
                    @foreach([
                        ['Home', '/'],
                        ['About Us', '/#about'],
                        ['Services', '/#services'],
                        ['Business Setup', '/#business-setup'],
                        ['Visa Services', '/#visa'],
                        ['Contact Us', '/#contact']
                    ] as $l)
                    <li>
                        <a href="{{ url($l[1]) }}" class="text-white/60 hover:text-gold text-[14px] font-bold flex items-center gap-2 transition-all hover:translate-x-1 group">
                            <span class="text-gold opacity-0 group-hover:opacity-100 transition-opacity">›</span>{{ $l[0] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Legal & Support --}}
            <div>
                <h4 class="font-heading font-black text-white text-[14px] tracking-widest uppercase mb-8 pb-2 border-b-2 border-gold w-fit">Legal & Support</h4>
                <ul class="space-y-4 list-none">
                    @foreach([
                        ['Privacy Policy', '#'],
                        ['Terms & Conditions', '#'],
                        ['Refund Policy', '#'],
                        ['FAQ', '/#faq'],
                        ['Free Consultation', '/#contact']
                    ] as $l)
                    <li>
                        <a href="{{ $l[1] }}" class="text-white/60 hover:text-gold text-[14px] font-bold flex items-center gap-2 transition-all hover:translate-x-1 group">
                            <span class="text-gold opacity-0 group-hover:opacity-100 transition-opacity">›</span>{{ $l[0] }}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact Information --}}
            <div>
                <h4 class="font-heading font-black text-white text-[14px] tracking-widest uppercase mb-8 pb-2 border-b-2 border-gold w-fit">Contact Info</h4>
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center flex-shrink-0 text-lg border border-white/10 text-gold">📍</div>
                        <div>
                            <p class="text-white font-bold text-xs uppercase mb-1">Our Office</p>
                            <a href="https://goo.gl/maps/xyz" target="_blank" class="text-white/60 hover:text-gold text-[13px] font-bold leading-tight transition-colors italic">
                                {{ \App\Models\Setting::get('address','Business Bay, Dubai, UAE') }}
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-white/5 rounded-xl flex items-center justify-center flex-shrink-0 text-lg border border-white/10 text-gold">📞</div>
                        <div>
                            <p class="text-white font-bold text-xs uppercase mb-1">Call Us</p>
                            <a href="tel:{{ \App\Models\Setting::get('phone','+971528455102') }}" class="text-white/60 hover:text-gold text-[13px] font-bold leading-tight transition-colors italic">
                                {{ \App\Models\Setting::get('phone','+971 52 845 5102') }}
                            </a>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-[#25D366]/10 rounded-xl flex items-center justify-center flex-shrink-0 text-lg border border-[#25D366]/20 text-[#25D366]">💬</div>
                        <div>
                            <p class="text-white font-bold text-xs uppercase mb-1">WhatsApp</p>
                            <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp','971528455102') }}" target="_blank" class="text-white/60 hover:text-gold text-[13px] font-bold leading-tight transition-colors italic">
                                Click to Chat Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/5 py-10 flex flex-col md:flex-row items-center justify-between gap-6">
            <p class="text-white/30 text-[11px] font-bold tracking-[2px] uppercase text-center md:text-left">
                © {{ date('Y') }} Elite Business Setup Consultancy FZ-LLC. All Rights Reserved.
            </p>
            <div class="flex gap-6">
                <p class="text-white/30 text-[11px] font-bold tracking-[2px] uppercase">Dubai Business Excellence 🇦🇪</p>
            </div>
        </div>
    </div>
</footer>

{{-- ===== FLOATING WHATSAPP ===== --}}
<a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp','971528455102') }}"
   class="fixed bottom-7 right-7 z-[9999] w-15 h-15 bg-[#25D366] rounded-full flex items-center justify-center shadow-2xl animate-float-wa hover:scale-110 transition-transform duration-300"
   target="_blank" aria-label="WhatsApp">
    <svg class="w-8 h-8 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/>
    </svg>
</a>

@livewireScripts
<script>
    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const nav = document.getElementById('navbar');
        nav.classList.toggle('shadow-2xl', window.scrollY > 50);
        nav.classList.toggle('h-16', window.scrollY > 50);
        nav.classList.toggle('md:h-20', window.scrollY <= 50);
    });
    // Mobile nav
    function toggleNav() {
        document.getElementById('mobileMenu').classList.toggle('hidden');
    }
</script>
@stack('scripts')
</body>
</html>
