<section id="why-us" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div>
                <span class="section-label">Why Choose Us</span>
                <h2 class="section-title mb-5">Why Thousands Choose<br><span class="text-gold">Elite Business Setup</span></h2>
                <p class="text-gray-500 leading-relaxed mb-8">
                    We are committed to delivering excellence in every service we provide, ensuring your success in the UAE.
                </p>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach([
                        ['⚡','Fast Processing',         'Quick turnaround on all applications'],
                        ['🛡️','100% Legal Work',         'Full compliance with UAE regulations'],
                        ['👨‍💼','Expert Team',            '15+ years of industry experience'],
                        ['🔄','End-to-End Service',      'From setup to banking, we handle it all'],
                        ['💰','Affordable Packages',     'Competitive pricing for every budget'],
                        ['🔍','Transparent Process',     'Clear communication at every step'],
                    ] as $item)
                    <div class="flex items-start gap-4 bg-gray-50 rounded-xl p-5 border border-gray-100 hover:border-gold hover:shadow-md transition-all duration-300 group">
                        <div class="w-11 h-11 bg-navy rounded-xl flex items-center justify-center flex-shrink-0 group-hover:bg-gold transition-colors duration-300">
                            <span class="text-xl">{{ $item[0] }}</span>
                        </div>
                        <div>
                            <div class="font-heading font-bold text-navy text-sm">{{ $item[1] }}</div>
                            <div class="text-gray-500 text-xs mt-0.5">{{ $item[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

