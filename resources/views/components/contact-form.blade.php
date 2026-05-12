<section id="contact" class="py-20 bg-navy relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <img src="{{ asset('images/hero-bg.png') }}" class="w-full h-full object-cover" alt="">
    </div>
    <div class="absolute inset-0 bg-navy/90"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="block text-xs font-bold tracking-[3px] uppercase text-gold mb-2 font-heading">Get In Touch</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white font-heading uppercase">
                Start Your <span class="text-gold">UAE Journey</span> Today
            </h2>
            <p class="text-white/60 mt-4 max-w-xl mx-auto">Fill the form below or WhatsApp us directly. We respond within 1 hour.</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

            {{-- Contact Info --}}
            <div class="space-y-5">
                @foreach([
                    ['📍','Office Address', \App\Models\Setting::get('address','Business Bay, Dubai, UAE'), '#'],
                    ['📞','Phone / WhatsApp', \App\Models\Setting::get('phone','+971 52 845 5102'), 'tel:+971528455102'],
                    ['✉️','Email Us', \App\Models\Setting::get('email','info@elitebusiness.ae'), 'mailto:info@elitebusiness.ae'],
                    ['🕐','Working Hours', 'Mon–Sat: 9 AM – 7 PM', '#'],
                ] as $info)
                <div class="flex items-start gap-4 bg-white/5 border border-white/10 rounded-2xl p-5 group hover:border-gold transition-colors">
                    <div class="w-11 h-11 bg-gold rounded-xl flex items-center justify-center flex-shrink-0 text-xl group-hover:scale-110 transition-transform">{{ $info[0] }}</div>
                    <div>
                        <div class="font-heading font-bold text-white text-xs uppercase tracking-widest">{{ $info[1] }}</div>
                        <a href="{{ $info[3] }}" class="text-white/60 text-[13px] font-bold hover:text-gold transition-colors">{{ $info[2] }}</a>
                    </div>
                </div>
                @endforeach

                <a href="https://wa.me/{{ \App\Models\Setting::get('whatsapp','971528455102') }}" target="_blank"
                   class="bg-[#25D366] text-white flex items-center justify-center gap-3 w-full rounded-xl py-4 text-sm font-black tracking-widest uppercase hover:scale-[1.02] transition-all shadow-xl">
                    📲 WhatsApp Now
                </a>
            </div>

            {{-- Livewire Contact Form --}}
            <div class="lg:col-span-2 bg-white rounded-3xl p-8 shadow-2xl">
                <livewire:contact-form-component />
            </div>
        </div>
    </div>
</section>
