@php
$services = \App\Models\Service::active()->byCategory('quick')->get();
$icons = [
    'Business Setup'       => ['🏢', 'Company formation & trade licenses'],
    'Visa Services'        => ['📜', 'Residence, investor & family visas'],
    'Bank Account Opening' => ['🏛️', 'Corporate & personal bank accounts'],
    'PRO Services'         => ['🤵', 'Government liaison & document clearing'],
    'Tax & VAT Services'   => ['🧾', 'VAT registration & corporate tax filing'],
    'Legal Services'       => ['⚖️', 'Legal advisory & contract drafting'],
    'Golden Visa'          => ['🌟', '10-year UAE golden residency visa'],
    'Documentation Services'=> ['📑', 'Attestation, translation & notary'],
];
@endphp

<section id="services" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">What We Offer</span>
            <h2 class="section-title">Our <span class="text-gold">Core Services</span></h2>
            <div class="gold-divider"></div>
            <p class="section-sub mx-auto mt-4">Complete UAE business and visa solutions under one roof</p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-5">
            @foreach($services as $service)
            @php $meta = $icons[$service->title] ?? ['🔹','Professional services']; @endphp
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group cursor-pointer text-center">
                <div class="w-16 h-16 bg-navy rounded-2xl flex items-center justify-center mx-auto mb-4 group-hover:bg-gold transition-colors duration-300">
                    <span class="text-2xl">{{ $meta[0] }}</span>
                </div>
                <h3 class="font-heading font-bold text-navy text-sm mb-2 uppercase">{{ $service->title }}</h3>
                <p class="text-gray-500 text-xs leading-relaxed">{{ $meta[1] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
