<section id="how-it-works" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">Simple Process</span>
            <h2 class="section-title">4 Simple Steps to <span class="text-gold">Start Your Business</span></h2>
            <div class="gold-divider"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            {{-- Connector line (desktop only) --}}
            <div class="hidden lg:block absolute top-12 left-[12.5%] right-[12.5%] h-0.5 bg-gradient-to-r from-gold via-gold to-gold/30 z-0"></div>

            @foreach([
                ['01','Choose Service','Choose your business activity, jurisdiction, and package based on your goals.','🎯'],
                ['02','Documentation','We prepare and process all required legal documents efficiently.','📋'],
                ['03','License & Visa','Complete license issuance and visa processing for you and your family.','🪪'],
                ['04','Bank Account','We assist in opening a secure corporate bank account.','🏦'],
            ] as $step)
            <div class="relative z-10 text-center group">
                {{-- Step number circle --}}
                <div class="w-24 h-24 mx-auto rounded-full bg-white border-4 border-gold shadow-lg flex flex-col items-center justify-center mb-5 group-hover:bg-gold group-hover:border-navy transition-all duration-300">
                    <span class="text-2xl mb-1">{{ $step[3] }}</span>
                    <span class="font-heading font-black text-gold group-hover:text-navy text-lg leading-none transition-colors">{{ $step[0] }}</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-base mb-2">{{ $step[1] }}</h3>
                <p class="text-gray-500 text-sm leading-relaxed">{{ $step[2] }}</p>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="#contact" class="btn-gold rounded-full px-10">Start Your Journey Today</a>
        </div>
    </div>
</section>

