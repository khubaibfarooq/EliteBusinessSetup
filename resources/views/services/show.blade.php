@extends('layouts.app')

@section('title', $service->title . ' | Elite Business Setup')

@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="Breadcrumb" class="bg-gray-50 py-4 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gold hover:text-navy transition">Home</a></li>
                <li class="text-gray-500">/</li>
                <li><a href="{{ route('home') }}#rakez-services" class="text-gold hover:text-navy transition">Services</a></li>
                <li class="text-gray-500">/</li>
                <li class="text-navy font-semibold">{{ $service->title }}</li>
            </ol>
        </div>
    </nav>

    {{-- Hero Section --}}
    <section class="py-16 md:py-20 bg-gradient-to-r from-navy to-navy/90">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-8">
                <div class="flex-shrink-0">
                    <div class="w-24 h-24 bg-gold rounded-2xl flex items-center justify-center">
                        <span class="text-5xl">{{ $service->icon ?? '📋' }}</span>
                    </div>
                </div>
                <div class="flex-1">
                    <span class="inline-block bg-gold text-navy px-4 py-2 rounded-full text-sm font-semibold mb-4 uppercase">
                        {{ $service->category }}
                    </span>
                    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $service->title }}</h1>
                    <p class="text-lg text-gray-100">{{ $service->description }}</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Main Content --}}
    <section class="py-16 md:py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                {{-- Main Content --}}
                <div class="lg:col-span-2">
                    {{-- Service Overview --}}
                    <div class="mb-12">
                        <h2 class="text-3xl font-bold text-navy mb-6">Service Overview</h2>
                        <div class="prose prose-lg text-gray-600 max-w-none">
                            <p class="mb-6">{{ $service->description }}</p>
                            
                            {{-- Service Features/Benefits --}}
                            <h3 class="text-2xl font-bold text-navy mt-8 mb-4">Key Benefits</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start gap-3">
                                    <span class="text-gold text-2xl flex-shrink-0">✓</span>
                                    <span class="text-gray-700">Professional and comprehensive service delivery</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-gold text-2xl flex-shrink-0">✓</span>
                                    <span class="text-gray-700">Expert assistance from qualified professionals</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-gold text-2xl flex-shrink-0">✓</span>
                                    <span class="text-gray-700">Fast and efficient processing</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-gold text-2xl flex-shrink-0">✓</span>
                                    <span class="text-gray-700">Competitive and transparent pricing</span>
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-gold text-2xl flex-shrink-0">✓</span>
                                    <span class="text-gray-700">Dedicated support throughout the process</span>
                                </li>
                            </ul>

                            {{-- Process Steps --}}
                            <h3 class="text-2xl font-bold text-navy mt-8 mb-4">How It Works</h3>
                            <div class="bg-gray-50 rounded-2xl p-8 mb-6">
                                <div class="space-y-6">
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gold text-white font-bold">1</div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-navy mb-1">Consultation</h4>
                                            <p class="text-gray-600">Discuss your requirements with our experts</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gold text-white font-bold">2</div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-navy mb-1">Documentation</h4>
                                            <p class="text-gray-600">Prepare and submit required documents</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gold text-white font-bold">3</div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-navy mb-1">Processing</h4>
                                            <p class="text-gray-600">We handle the application and follow-ups</p>
                                        </div>
                                    </div>
                                    <div class="flex gap-4">
                                        <div class="flex-shrink-0">
                                            <div class="flex items-center justify-center h-10 w-10 rounded-full bg-gold text-white font-bold">4</div>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-navy mb-1">Completion</h4>
                                            <p class="text-gray-600">Receive your approved documents and support</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CTA Section --}}
                    <div class="bg-gradient-to-r from-navy to-navy/90 rounded-2xl p-8 text-white">
                        <h3 class="text-2xl font-bold mb-2">Ready to Get Started?</h3>
                        <p class="text-gray-100 mb-6">Contact us today to discuss how we can assist you with {{ $service->title }}</p>
                        <a href="{{ route('home') }}#contact-form" class="btn-gold inline-block px-8 py-3 rounded-full font-semibold hover:scale-105 transition">
                            Get in Touch
                        </a>
                    </div>
                </div>

                {{-- Sidebar --}}
                <aside>
                    {{-- Quick Info Box --}}
                    <div class="bg-gray-50 rounded-2xl p-6 mb-8 border border-gray-200">
                        <h3 class="text-lg font-bold text-navy mb-4">Quick Info</h3>
                        <div class="space-y-4 text-sm">
                            <div>
                                <p class="text-gray-500 mb-1">Service Type</p>
                                <p class="font-semibold text-navy">{{ $service->category }}</p>
                            </div>
                            <div>
                                <p class="text-gray-500 mb-1">Availability</p>
                                <p class="font-semibold text-green-600">Available</p>
                            </div>
                            <div>
                                <p class="text-gray-500 mb-1">Processing Time</p>
                                <p class="font-semibold text-navy">5-10 Business Days</p>
                            </div>
                        </div>
                        <div class="mt-6 pt-6 border-t border-gray-200">
                            <a href="{{ route('home') }}#contact-form" class="block w-full bg-gold text-navy font-semibold py-3 rounded-lg text-center hover:bg-gold/90 transition">
                                Request Quote
                            </a>
                        </div>
                    </div>

                    {{-- FAQs for this Service --}}
                    <div class="bg-blue-50 rounded-2xl p-6 border border-blue-200">
                        <h3 class="text-lg font-bold text-navy mb-4">Common Questions</h3>
                        <div class="space-y-4 text-sm">
                            <details class="group">
                                <summary class="cursor-pointer font-semibold text-navy hover:text-gold">What documents do I need?</summary>
                                <p class="text-gray-600 mt-2 ml-4">Our team will provide you with a complete checklist of required documents during the consultation.</p>
                            </details>
                            <details class="group">
                                <summary class="cursor-pointer font-semibold text-navy hover:text-gold">What's the cost?</summary>
                                <p class="text-gray-600 mt-2 ml-4">Pricing varies based on service complexity. Contact us for a customized quote.</p>
                            </details>
                            <details class="group">
                                <summary class="cursor-pointer font-semibold text-navy hover:text-gold">How long does it take?</summary>
                                <p class="text-gray-600 mt-2 ml-4">Most services are processed within 5-10 business days, depending on the specific requirements.</p>
                            </details>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

    {{-- Related Services --}}
    @if($relatedServices->count() > 0)
        <section class="py-16 md:py-20 bg-gray-50 border-t border-gray-200">
            <div class="max-w-7xl mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-navy mb-2">Related Services</h2>
                    <p class="text-gray-600">Explore other services in the {{ $service->category }} category</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @foreach($relatedServices as $related)
                        <a href="{{ route('services.show', $related) }}" class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl hover:-translate-y-2 transition-all duration-300 border border-gray-100 group block">
                            <div class="w-16 h-16 bg-navy rounded-2xl flex items-center justify-center mb-4 group-hover:bg-gold transition-colors duration-300">
                                <span class="text-3xl">{{ $related->icon ?? '📋' }}</span>
                            </div>
                            <h3 class="font-bold text-navy mb-2 text-lg">{{ $related->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $related->description }}</p>
                            <span class="inline-flex items-center gap-1 text-gold font-semibold text-sm group-hover:gap-2 transition-all">
                                Learn More <span>→</span>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
