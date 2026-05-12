@php
$freeZones = \App\Models\FreeZone::active()->get();
@endphp

<section id="freezones" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

            <div>
                <span class="section-label">UAE Free Zones</span>
                <h2 class="section-title mb-4">Major <span class="text-gold">Free Zones</span> in UAE</h2>
                <div class="w-14 h-0.5 bg-gold mb-6 rounded-full"></div>
                <p class="text-gray-500 leading-relaxed mb-6 text-base">
                    We help you choose the best free zone based on your business activity, requirements, and budget.
                </p>
                <div class="bg-navy/5 border-l-4 border-gold rounded-xl p-5 mb-8">
                    <p class="text-navy font-heading font-semibold text-sm">
                        💡 Expert Guidance: Not sure which free zone is right for you? Our consultants will analyze your business activity and recommend the most cost-effective solution.
                    </p>
                </div>
                <a href="#contact" class="btn-gold rounded">Get Free Zone Advice</a>
            </div>

            <div class="space-y-3" x-data="{ openId: 0 }">
                @foreach($freeZones as $zone)
                <div class="border border-gray-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                    <button @click="openId = (openId === {{ $zone->id }} ? 0 : {{ $zone->id }})"
                            class="w-full flex items-center justify-between px-5 py-4 bg-white hover:bg-navy/3 transition-colors text-left">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 bg-gold/15 rounded-lg flex items-center justify-center flex-shrink-0">
                                <span class="text-gold font-heading font-black text-xs">{{ $zone->abbreviation }}</span>
                            </div>
                            <div>
                                <div class="font-heading font-bold text-navy text-sm uppercase">{{ $zone->name }}</div>
                                <div class="text-gray-400 text-xs">{{ $zone->emirate }}</div>
                            </div>
                        </div>
                        <span class="text-gold font-bold text-lg transition-transform duration-200" :class="openId === {{ $zone->id }} ? 'rotate-45' : ''">+</span>
                    </button>
                    <div x-show="openId === {{ $zone->id }}" class="px-5 pb-4 bg-navy/3 border-t border-gray-100" x-cloak>
                        <p class="text-gray-600 text-sm leading-relaxed pt-3">
                            {{ $zone->description ?? 'A leading free zone in '.$zone->emirate.' offering competitive packages and business-friendly regulations.' }}
                        </p>
                        <a href="#contact" class="inline-block mt-3 text-gold font-heading font-semibold text-xs hover:underline">
                            Inquire About {{ $zone->abbreviation }} →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
