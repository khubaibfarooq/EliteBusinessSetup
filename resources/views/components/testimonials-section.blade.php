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

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($testimonials as $testimonial)
                <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow duration-300 relative group">
                    <div class="absolute -top-4 -right-4 text-gold opacity-10 group-hover:opacity-30 transition-opacity">
                        <svg class="w-24 h-24" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/></svg>
                    </div>
                    <div class="flex items-center gap-4 mb-6 relative z-10">
                        @if($testimonial->photo)
                            <img src="{{ Storage::url($testimonial->photo) }}" alt="{{ $testimonial->client_name }}" class="w-16 h-16 rounded-full object-cover border-2 border-gold/20">
                        @else
                            <div class="w-16 h-16 rounded-full bg-navy/5 text-gold flex items-center justify-center font-bold text-2xl border border-gold/20">{{ substr($testimonial->client_name, 0, 1) }}</div>
                        @endif
                        <div>
                            <h4 class="font-heading font-bold text-navy">{{ $testimonial->client_name }}</h4>
                            <p class="text-xs text-gray-500 uppercase tracking-wider mt-0.5">{{ $testimonial->client_role }} @if($testimonial->client_company) - <span class="font-semibold">{{ $testimonial->client_company }}</span> @endif</p>
                            <div class="flex text-gold text-[10px] mt-1.5 gap-0.5">
                                @for($i = 0; $i < ($testimonial->rating ?? 5); $i++) 
                                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                @endfor
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 text-[13px] leading-relaxed italic relative z-10">"{{ $testimonial->review }}"</p>
                </div>
            @empty
                <div class="col-span-full text-center text-gray-500">
                    No client reviews available at the moment.
                </div>
            @endforelse
        </div>
    </div>
</section>
