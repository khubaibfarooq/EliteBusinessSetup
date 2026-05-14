@php
$faqs = \App\Models\Faq::active()->get();
@endphp

<section id="faq" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">FAQ</span>
            <h2 class="section-title uppercase">Frequently Asked <span class="text-gold">Questions</span></h2>
            <div class="gold-divider"></div>
        </div>

        <div class="max-w-3xl mx-auto space-y-4" x-data="{ selected: null }">
            @forelse($faqs as $index => $faq)
                <div class="bg-gray-50 rounded-xl overflow-hidden border border-gray-100 hover:border-gold/30 transition-colors duration-300 shadow-sm">
                    <button @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null" 
                            class="w-full px-6 py-5 text-left flex justify-between items-center focus:outline-none">
                        <h3 class="font-heading font-bold text-navy pr-8" :class="{'text-gold': selected === {{ $index }}}">{{ $faq->question }}</h3>
                        <span class="text-gold font-bold text-2xl transition-transform duration-300" 
                              :class="{'rotate-45': selected === {{ $index }}}">+</span>
                    </button>
                    <div x-show="selected === {{ $index }}" 
                         x-transition:enter="transition ease-out duration-200"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         class="px-6 pb-5 text-sm text-gray-600 leading-relaxed" style="display: none;">
                        <div class="pt-4 border-t border-gray-200">
                            {{ $faq->answer }}
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">No FAQs available at the moment.</p>
            @endforelse
        </div>

        <div class="text-center mt-10">
            <p class="text-gray-500 text-sm mb-4">Still have questions? We're here to help.</p>
            <a href="#contact" class="btn-gold rounded uppercase font-black text-xs">Ask Our Experts</a>
        </div>
    </div>
</section>
