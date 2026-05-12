@php
use App\Models\Setting;
$whatsapp = Setting::get('whatsapp', '971528455102');
@endphp

<section id="home" class="relative min-h-[90vh] lg:min-h-screen flex flex-col justify-end overflow-hidden font-heading">

    {{-- Background Image with Gradient Overlay --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('images/hero-bg.jpg') }}" alt="Dubai Skyline" class="w-full h-full object-cover object-center">
        {{-- Left-to-Right dark overlay to make text pop --}}
        <div class="absolute inset-0 bg-gradient-to-r from-navy/95 via-navy/60 to-transparent"></div>
        {{-- Bottom-up dark overlay for icon strip readability --}}
        <div class="absolute inset-0 bg-gradient-to-t from-navy/80 via-transparent to-navy/10"></div>
    </div>

    {{-- Main Content --}}
    <div class="relative z-10 container mx-auto px-6 lg:px-12 pb-24 pt-48 lg:pt-56">
        <div class="max-w-4xl text-center lg:text-left">
            {{-- Big Headline - Keeping the 3-span style as "Headings" --}}
            <h1 class="leading-[0.9] mb-10">
                <span class="block text-white text-2xl md:text-4xl lg:text-5xl font-semibold uppercase tracking-tight mb-3">Launch Your</span>
                <span class="block text-gold text-4xl md:text-7xl lg:text-[95px] font-black  font-extrabold uppercase  py-1">Business</span>
                <span class="block text-white text-2xl md:text-4xl lg:text-5xl font-semibold uppercase tracking-tight mt-3 text-white/90">In Dubai With Experts</span>
            </h1>

            {{-- Subtext --}}
            <p class="text-white/80 text-base md:text-xl font-medium leading-relaxed max-w-2xl mb-12 font-body mx-auto lg:mx-0">
                We make company formation in Dubai simple, fast, and hassle-free. Get end-to-end legal support, licensing, and visa services tailored to your success.
            </p>

            {{-- CTA Buttons --}}
            <div class="flex flex-col sm:flex-row items-center gap-5 justify-center lg:justify-start">
                <a href="#contact" class="btn-gold !px-12 !py-5 shadow-2xl scale-110">
                    Get Free Consultation
                </a>
                <a href="#services" class="btn-outline-white !px-12 !py-5">
                    Explore Our Services
                </a>
            </div>
        </div>
    </div>

</section>
