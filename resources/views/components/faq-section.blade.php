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


        <div class="text-center mt-10">
            <p class="text-gray-500 text-sm mb-4">Still have questions? We're here to help.</p>
            <a href="#contact" class="btn-gold rounded uppercase font-black text-xs">Ask Our Experts</a>
        </div>
    </div>
</section>
