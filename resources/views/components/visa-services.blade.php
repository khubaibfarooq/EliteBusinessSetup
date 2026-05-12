<section id="visa" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">


                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8">
                    @foreach([
                        ['🏠','2 Years UAE Residence Visa','Most popular – for business owners & investors'],
                        ['💼','Investor Visa','For company shareholders and investors'],
                        ['🎨','Freelance Visa','Work legally as a freelancer in UAE'],
                        ['👨‍👩‍👧','Family Visa','Sponsor your family members in UAE'],
                        ['🌟','Golden Visa','10-year long-term residency visa'],
                        ['🎓','Employment Visa','For company employee residency'],
                    ] as $visa)
                    <div class="flex items-start gap-3 bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <span class="text-2xl mt-0.5">{{ $visa[0] }}</span>
                        <div>
                            <div class="font-heading font-bold text-navy text-sm">{{ $visa[1] }}</div>
                            <div class="text-gray-500 text-xs mt-0.5">{{ $visa[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <a href="#contact" class="btn-gold rounded">Apply for Visa</a>
            </div>

            <div>
                {{-- Visa Image --}}
                <div class="relative mb-8 rounded-3xl overflow-hidden shadow-2xl">
                    <img src="{{ asset('images/visa-doc.jpg') }}" alt="UAE Visa Services" class="w-full h-72 object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-navy/50 to-transparent"></div>
                </div>

                {{-- Process includes --}}
                <div class="bg-navy rounded-2xl p-7">
                    <h3 class="font-heading font-bold text-white text-base mb-5">✅ Complete Visa Process Includes:</h3>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        @foreach(['E-Visa','Status Change','Medical Test','Biometrics','Emirates ID','Visa Stamping'] as $step)
                        <div class="flex items-center gap-2 text-white/80 text-sm">
                            <span class="text-gold font-bold">✓</span> {{ $step }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

