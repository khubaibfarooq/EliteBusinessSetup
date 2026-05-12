<section id="business-setup" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">Business Setup Options</span>
            <div class="gold-divider"></div>
            <p class="section-sub mx-auto mt-4">We help you choose the best option based on your business goals</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach([
                ['Mainland',  'mainland-card.jpg',  '🏙️',
                 'Trade freely across UAE with access to local markets and unlimited business opportunities.',
                 ['Trade anywhere in UAE','Local market access','Unlimited business activities','No profit repatriation limits']],
                ['Freezone',  'freezone-card.jpg',  '🌐',
                 '100% ownership with affordable packages and fast company setup, ideal for startups and international businesses.',
                 ['100% foreign ownership','Low cost setup','Fast approval process','Tax exemptions available']],
                ['Offshore',  'offshore-card.jpg',  '🌍',
                 'Perfect for international business operations with significant tax benefits and asset protection structures.',
                 ['International business structure','Tax benefits','Asset protection','Privacy & confidentiality']],
            ] as $card)
            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 group">
                {{-- Photo --}}
                <div class="relative h-52 overflow-hidden">
                    <img src="{{ asset('images/'.$card[1]) }}" alt="{{ $card[0] }}"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/30 to-transparent"></div>
                    {{-- Centered Icon --}}
                    <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-14 h-14 bg-navy border-4 border-white rounded-full flex items-center justify-center shadow-lg group-hover:bg-gold transition-colors duration-300">
                        <span class="text-2xl">{{ $card[2] }}</span>
                    </div>
                </div>

                <div class="pt-10 pb-7 px-7 text-center">
                    <h3 class="font-heading font-black text-navy text-xl tracking-widest uppercase mb-3">{{ $card[0] }}</h3>
                    <p class="text-gray-500 text-sm leading-relaxed mb-5">{{ $card[3] }}</p>
                    <ul class="text-left space-y-2.5 mb-6">
                        @foreach($card[4] as $feature)
                        <li class="flex items-center gap-2 text-gray-700 text-sm">
                            <span class="text-gold font-bold">✓</span> {{ $feature }}
                        </li>
                        @endforeach
                    </ul>
                    <a href="#contact" class="btn-gold w-full justify-center rounded-lg text-sm">Get Started</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

