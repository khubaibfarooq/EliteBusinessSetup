@extends('layouts.admin')
@section('title','Free Zones')
@section('page-title','Manage Free Zones')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    <div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="font-heading font-bold text-navy mb-5">Add Free Zone</h2>
            <form method="POST" action="{{ route('admin.free-zones.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Name *</label>
                    <input type="text" name="name" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Abbreviation</label>
                    <input type="text" name="abbreviation" placeholder="DIFC" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Emirate</label>
                    <input type="text" name="emirate" placeholder="Dubai" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Description</label>
                    <textarea name="description" rows="3" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold resize-none"></textarea>
                </div>
                <button type="submit" class="btn-gold w-full justify-center rounded-xl">Add Free Zone</button>
            </form>
        </div>
    </div>

    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="divide-y divide-gray-50">
            @forelse($freeZones as $zone)
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-gold/10 rounded-lg flex items-center justify-center text-gold font-bold text-xs">{{ $zone->abbreviation ?: 'FZ' }}</div>
                    <div>
                        <div class="font-heading font-semibold text-navy text-sm">{{ $zone->name }}</div>
                        <div class="text-gray-400 text-xs">{{ $zone->emirate }}</div>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <form method="POST" action="{{ route('admin.free-zones.update', $zone) }}">
                        @csrf @method('PUT')
                        <input type="hidden" name="name" value="{{ $zone->name }}">
                        <input type="hidden" name="is_active" value="{{ $zone->is_active ? '0' : '1' }}">
                        <button class="text-xs px-3 py-1.5 rounded-lg font-heading font-semibold transition-colors
                            {{ $zone->is_active ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-gray-100 text-gray-500 hover:bg-gray-200' }}">
                            {{ $zone->is_active ? 'Active' : 'Inactive' }}
                        </button>
                    </form>
                    <form method="POST" action="{{ route('admin.free-zones.destroy', $zone) }}" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button class="text-xs bg-red-100 text-red-600 px-3 py-1.5 rounded-lg font-heading font-semibold hover:bg-red-200 transition-colors">Delete</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="px-6 py-10 text-center text-gray-400">No free zones yet.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
