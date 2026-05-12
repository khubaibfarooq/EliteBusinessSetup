<section id="licensing" class="py-20 bg-navy">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="block text-xs font-bold tracking-[3px] uppercase text-gold mb-2 font-heading">Licensing</span>
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-white leading-tight font-heading">
                Licensing <span class="text-gold">Services</span>
            </h2>
            <div class="w-14 h-0.5 bg-gold mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-5">
            @foreach([
                ['🏢','Trade License Issuance',  'Get your official UAE trade license quickly'],
                ['📄','Commercial License',       'For trading and commercial activities'],
                ['💻','Professional License',     'For service-based and professional businesses'],
                ['🏭','Industrial License',       'For manufacturing and industrial operations'],
                ['🔄','License Renewal',          'Hassle-free annual license renewal service'],
                ['✏️','License Modification',     'Update business activities or partner details'],
                ['❌','License Cancellation',     'Complete deregistration and wind-down support'],
                ['⚡','Express Processing',       'Fast-track service for urgent requirements'],
            ] as $item)
            <div class="bg-white/5 border border-white/10 rounded-2xl p-5 hover:bg-gold/10 hover:border-gold/30 transition-all duration-300 group cursor-pointer">
                <div class="text-3xl mb-4 group-hover:scale-110 transition-transform duration-200">{{ $item[0] }}</div>
                <h3 class="font-heading font-bold text-white text-sm mb-2">{{ $item[1] }}</h3>
                <p class="text-white/50 text-xs leading-relaxed">{{ $item[2] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>

