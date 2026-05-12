@extends('layouts.admin')
@section('title','Site Settings')
@section('page-title','Site Settings')

@section('content')
<div class="max-w-3xl">
    <form method="POST" action="{{ route('admin.settings.update') }}" class="space-y-6">
        @csrf

        {{-- Contact Info --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h2 class="font-heading font-bold text-navy">📞 Contact Information</h2>
            </div>
            <div class="p-6 grid grid-cols-1 sm:grid-cols-2 gap-5">
                @foreach([
                    ['phone','Phone Number','text','+971 52 845 5102'],
                    ['whatsapp','WhatsApp Number (no +)','text','971528455102'],
                    ['email','Email Address','email','info@elitebusiness.ae'],
                    ['address','Office Address','text','Business Bay, Dubai, UAE'],
                ] as $f)
                <div class="{{ $f[0] === 'address' ? 'sm:col-span-2' : '' }}">
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">{{ $f[1] }}</label>
                    <input type="{{ $f[2] }}" name="{{ $f[0] }}" value="{{ $settings[$f[0]] ?? '' }}"
                           placeholder="{{ $f[3] }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors">
                </div>
                @endforeach
            </div>
        </div>

        {{-- Hero Content --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h2 class="font-heading font-bold text-navy">🏠 Hero Section</h2>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Hero Title</label>
                    <input type="text" name="hero_title" value="{{ $settings['hero_title'] ?? '' }}"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Hero Subtitle</label>
                    <textarea name="hero_sub" rows="2"
                              class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors resize-none">{{ $settings['hero_sub'] ?? '' }}</textarea>
                </div>
            </div>
        </div>

        {{-- About Text --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 bg-gray-50">
                <h2 class="font-heading font-bold text-navy">🏢 About Us Text</h2>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">About Text</label>
                    <textarea name="about_text" rows="5"
                              class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors resize-none">{{ $settings['about_text'] ?? '' }}</textarea>
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">SEO Meta Description</label>
                    <textarea name="meta_description" rows="2"
                              class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors resize-none">{{ $settings['meta_description'] ?? '' }}</textarea>
                </div>
            </div>
        </div>

        <button type="submit" class="btn-gold rounded-xl px-10 py-3.5 text-base">
            💾 Save All Settings
        </button>
    </form>
</div>
@endsection
