<section id="corporate" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">Corporate & Documentation</span>
            <h2 class="section-title">Business <span class="text-gold">Support Services</span></h2>
            <div class="gold-divider"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
            {{-- Corporate Services --}}
            <div class="bg-navy rounded-3xl p-8">
                <h3 class="font-heading font-bold text-white text-xl mb-6 flex items-center gap-3">
                    <span class="w-10 h-10 bg-gold rounded-xl flex items-center justify-center text-navy font-black">💼</span>
                    Corporate Services
                </h3>
                <div class="space-y-3">
                    @foreach([
                        ['🏦','Bank Account Opening',     'UAE corporate & personal banking'],
                        ['🧾','VAT Registration',         'UAE FTA VAT registration & filing'],
                        ['📊','Corporate Tax Services',   'Corporate tax compliance & planning'],
                        ['📒','Accounting & Bookkeeping', 'Monthly accounts & financial reports'],
                        ['™️','Trademark Registration',   'Protect your brand in UAE & globally'],
                        ['⚖️','Legal Advisory',           'Contract review & legal consultation'],
                    ] as $item)
                    <div class="flex items-center gap-4 bg-white/5 rounded-xl p-4 hover:bg-gold/10 transition-colors group">
                        <span class="text-xl">{{ $item[0] }}</span>
                        <div>
                            <div class="font-heading font-semibold text-white text-sm">{{ $item[1] }}</div>
                            <div class="text-white/50 text-xs">{{ $item[2] }}</div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Documentation + Special Cases --}}
            <div class="space-y-6">
                <div class="bg-gray-50 rounded-3xl p-8 border border-gray-100">
                    <h3 class="font-heading font-bold text-navy text-xl mb-5 flex items-center gap-3">
                        <span class="w-10 h-10 bg-gold rounded-xl flex items-center justify-center text-navy font-black text-sm">📑</span>
                        Document Services
                    </h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach(['Attestation','Translation','NOC Letters','Salary Certificates','WPS Certificates','Notary Services'] as $doc)
                        <div class="flex items-center gap-2 text-gray-700 text-sm">
                            <span class="text-gold font-bold">✓</span> {{ $doc }}
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="bg-gold/10 border border-gold/30 rounded-3xl p-8">
                    <h3 class="font-heading font-bold text-navy text-xl mb-5 flex items-center gap-3">
                        <span class="w-10 h-10 bg-navy rounded-xl flex items-center justify-center text-gold font-black text-sm">⚖️</span>
                        Special Case Services
                    </h3>
                    <div class="space-y-2.5">
                        @foreach(['Absconding Removal','Fine Reduction','Visa Cancellation','Legal Case Assistance','PRO & Government Services','Ejari Services'] as $sp)
                        <div class="flex items-center gap-2 text-gray-700 text-sm">
                            <span class="text-gold font-bold">✓</span> {{ $sp }}
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

