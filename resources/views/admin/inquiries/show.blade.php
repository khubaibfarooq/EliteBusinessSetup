@extends('layouts.admin')
@section('title', 'Inquiry #'.$inquiry->id)
@section('page-title', 'Inquiry Details')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-8">
        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="font-heading font-bold text-navy text-xl">{{ $inquiry->first_name }} {{ $inquiry->last_name }}</h2>
                <p class="text-gray-500 text-sm">Submitted {{ $inquiry->created_at->format('d M Y, h:i A') }}</p>
            </div>
            <span class="px-3 py-1.5 rounded-full text-sm font-semibold bg-blue-100 text-blue-700">{{ ucfirst($inquiry->status) }}</span>
        </div>

        <div class="grid grid-cols-2 gap-4 mb-6">
            @foreach([['Email',$inquiry->email],['Phone',$inquiry->phone ?: '—'],['Subject',$inquiry->subject ?: '—']] as $f)
            <div class="{{ $loop->last ? 'col-span-2' : '' }} bg-gray-50 rounded-xl p-4">
                <div class="text-gray-400 text-xs font-heading font-semibold mb-1">{{ $f[0] }}</div>
                <div class="text-navy font-semibold text-sm">{{ $f[1] }}</div>
            </div>
            @endforeach
        </div>

        <div class="bg-gray-50 rounded-xl p-5 mb-6">
            <div class="text-gray-400 text-xs font-heading font-semibold mb-2">Message</div>
            <p class="text-gray-700 text-sm leading-relaxed">{{ $inquiry->message }}</p>
        </div>

        <div class="flex gap-3">
            <a href="mailto:{{ $inquiry->email }}" class="btn-gold rounded-xl px-6">✉️ Reply via Email</a>
            @if($inquiry->phone)
            <a href="https://wa.me/{{ preg_replace('/[^0-9]/','',$inquiry->phone) }}" target="_blank"
               class="inline-flex items-center gap-2 px-6 py-3 bg-[#25D366] text-white font-heading font-bold text-sm rounded-xl hover:bg-[#1ebe5d] transition-colors">📲 WhatsApp</a>
            @endif
            <a href="{{ route('admin.inquiries.index') }}" class="btn-outline-gold rounded-xl px-6">← Back</a>
        </div>
    </div>
</div>
@endsection
