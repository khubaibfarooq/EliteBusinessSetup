@extends('layouts.admin')
@section('title','FAQs')
@section('page-title','Manage FAQs')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="font-heading font-bold text-navy mb-5">Add FAQ</h2>
            <form method="POST" action="{{ route('admin.faqs.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Question *</label>
                    <input type="text" name="question" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Answer *</label>
                    <textarea name="answer" rows="5" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold resize-none"></textarea>
                </div>
                <button type="submit" class="btn-gold w-full justify-center rounded-xl">Add FAQ</button>
            </form>
        </div>
    </div>

    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="divide-y divide-gray-50">
            @forelse($faqs as $faq)
            <div class="px-6 py-5 hover:bg-gray-50 transition-colors">
                <div class="flex items-start justify-between mb-2">
                    <h3 class="font-heading font-bold text-navy text-sm pr-4">{{ $faq->question }}</h3>
                    <div class="flex items-center gap-2 flex-shrink-0">
                        <form method="POST" action="{{ route('admin.faqs.destroy', $faq) }}" onsubmit="return confirm('Delete?')">
                            @csrf @method('DELETE')
                            <button class="text-[10px] bg-red-100 text-red-600 px-2 py-1 rounded-lg font-bold">Delete</button>
                        </form>
                    </div>
                </div>
                <p class="text-gray-500 text-xs leading-relaxed">{{ $faq->answer }}</p>
            </div>
            @empty
            <div class="px-6 py-10 text-center text-gray-400">No FAQs yet.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
