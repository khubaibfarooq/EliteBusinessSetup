@extends('layouts.admin')
@section('title','Testimonials')
@section('page-title','Manage Testimonials')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="font-heading font-bold text-navy mb-5">Add Testimonial</h2>
            <form method="POST" action="{{ route('admin.testimonials.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Client Name *</label>
                    <input type="text" name="client_name" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Role</label>
                        <input type="text" name="client_role" placeholder="CEO" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                    </div>
                    <div>
                        <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Rating (1-5)</label>
                        <input type="number" name="rating" value="5" min="1" max="5" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                    </div>
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Review *</label>
                    <textarea name="review" rows="4" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold resize-none"></textarea>
                </div>
                <button type="submit" class="btn-gold w-full justify-center rounded-xl">Add Testimonial</button>
            </form>
        </div>
    </div>

    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="divide-y divide-gray-50">
            @forelse($testimonials as $t)
            <div class="px-6 py-5 hover:bg-gray-50 transition-colors">
                <div class="flex items-start justify-between mb-2">
                    <div>
                        <div class="font-heading font-bold text-navy text-sm">{{ $t->client_name }}</div>
                        <div class="text-gray-400 text-xs">{{ $t->client_role }}</div>
                    </div>
                    <div class="flex items-center gap-2">
                        <form method="POST" action="{{ route('admin.testimonials.update', $t) }}">
                            @csrf @method('PUT')
                            <input type="hidden" name="is_active" value="{{ $t->is_active ? '0' : '1' }}">
                            <button class="text-[10px] px-2 py-1 rounded-lg font-bold transition-colors
                                {{ $t->is_active ? 'bg-green-100 text-green-700' : 'bg-gray-100 text-gray-500' }}">
                                {{ $t->is_active ? 'Active' : 'Inactive' }}
                            </button>
                        </form>
                        <form method="POST" action="{{ route('admin.testimonials.destroy', $t) }}" onsubmit="return confirm('Delete?')">
                            @csrf @method('DELETE')
                            <button class="text-[10px] bg-red-100 text-red-600 px-2 py-1 rounded-lg font-bold">Delete</button>
                        </form>
                    </div>
                </div>
                <p class="text-gray-600 text-xs italic">"{{ $t->review }}"</p>
            </div>
            @empty
            <div class="px-6 py-10 text-center text-gray-400">No testimonials yet.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
