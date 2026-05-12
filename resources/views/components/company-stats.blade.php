@php
$stats = \App\Models\Stat::active()->get();
@endphp

<section id="stats" class="py-20 bg-navy relative overflow-hidden">
    {{-- Background decoration --}}
    <div class="absolute inset-0 opacity-5">
        <div class="absolute top-0 left-0 w-96 h-96 bg-gold rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-gold rounded-full translate-x-1/2 translate-y-1/2"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-14">
            <span class="block text-xs font-bold tracking-[3px] uppercase text-gold mb-2 font-heading">Our Track Record</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-white font-heading uppercase">Numbers That <span class="text-gold">Speak For Us</span></h2>
        </div>

    </div>
</section>

@push('scripts')
<script>
    (function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    observer.unobserve(el);
                }
            });
        }, { threshold: 0.4 });

        document.querySelectorAll('.stat-number').forEach(el => observer.observe(el));
    })();
</script>
@endpush
