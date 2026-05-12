<section id="rakez-services" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">Partner Services</span>
            <h2 class="section-title">RAKEZ <span class="text-gold">E-Services</span></h2>
            <div class="gold-divider"></div>
            <p class="section-sub mx-auto mt-4">Seamless access to Ras Al Khaimah Economic Zone services</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach([
                ['Golden & Green Visa', '🌟', 'https://eservices.rakez.com/apex/RAKEZ_Page_Green_Golden_Visa'],
                ['Workers Protection', '🛡️', 'https://rakez.com/en/client-services/workers-protection-insurance-programme'],
                ['Employment Visa', '💼', 'https://eservices.rakez.com/apex/RAK_Employment_Visa'],
                ['Student Visa', '🎓', 'https://eservices.rakez.com/apex/RAK_Student_Visa'],
                ['Dependent Visa', '👨‍👩‍👧', 'https://eservices.rakez.com/apex/RAK_Dependent_Visa'],
                ['Tourist Visa', '✈️', 'https://eservices.rakez.com/apex/RAK_Tourist_Visa'],
                ['Employment Contract', '📝', 'https://eservices.rakez.com/apex/RAK_Employment_Contract'],
                ['Other Services', '⚙️', 'https://eservices.rakez.com/apex/RAK_Other_Services'],
            ] as $service)
            <a href="{{ $service[2] }}" target="_blank" rel="noopener noreferrer" class="bg-gray-50 rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group text-center block">
                <div class="w-16 h-16 bg-navy rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-gold transition-colors duration-300">
                    <span class="text-2xl">{{ $service[1] }}</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-[13px] md:text-sm uppercase">{{ $service[0] }}</h3>
            </a>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="https://eservices.rakez.com/apex/RAKFTZ_Page_Home" target="_blank" rel="noopener noreferrer" class="btn-gold rounded-full px-8 py-4 text-sm shadow-xl hover:scale-105 inline-flex items-center gap-2">
                <span>View Full RAKEZ Portal</span>
                <span>→</span>
            </a>
        </div>
    </div>
</section>
