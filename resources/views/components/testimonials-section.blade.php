@php
$testimonials = \App\Models\Testimonial::active()->get();
@endphp

<section id="testimonials" class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-14">
            <span class="section-label">Client Reviews</span>
            <h2 class="section-title uppercase">What Our <span class="text-gold">Clients Say</span></h2>
            <div class="gold-divider"></div>
        </div>

    </div>
</section>
