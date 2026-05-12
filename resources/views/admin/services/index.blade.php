@extends('layouts.admin')
@section('title','Services')
@section('page-title','Manage Services')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
    {{-- Add Service form --}}
    <div>
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">
            <h2 class="font-heading font-bold text-navy mb-5">Add New Service</h2>
            <form method="POST" action="{{ route('admin.services.store') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Title *</label>
                    <input type="text" name="title" required class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Icon (emoji)</label>
                    <input type="text" name="icon" placeholder="🏢" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Category</label>
                    <select name="category" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                        <option value="quick">Quick Service</option>
                        <option value="visa">Visa Service</option>
                        <option value="corporate">Corporate</option>
                        <option value="document">Document</option>
                    </select>
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Description</label>
                    <textarea name="description" rows="2" class="w-full border border-gray-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold resize-none"></textarea>
                </div>
                <button type="submit" class="btn-gold w-full justify-center rounded-xl">Add Service</button>
            </form>
        </div>
    </div>

    {{-- Services List --}}
    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100">
            <h2 class="font-heading font-bold text-navy">All Services ({{ $services->count() }})</h2>
        </div>
        <div class="divide-y divide-gray-50">
            @forelse($services as $service)
            <div class="px-6 py-4 flex items-center justify-between hover:bg-gray-50 transition-colors">
                <div class="flex items-center gap-3">
                    <span class="text-xl">{{ $service->icon ?: '🔹' }}</span>
                    <div>
                        <div class="font-heading font-semibold text-navy text-sm">{{ $service->title }}</div>
                        <div class="text-gray-400 text-xs">{{ ucfirst($service->category) }}</div>
                    </div>
                </div>
                <div class="flex items-center gap-2">
                    <form method="POST" action="{{ route('admin.services.update', $service) }}">
                        @csrf @method('PUT')
                        <input type="hidden" name="title" value="{{ $service->title }}">
                        <input type="hidden" name="is_active" value="{{ $service->is_active ? '0' : '1' }}">
                        <button class="text-xs px-3 py-1.5 rounded-lg font-heading font-semibold transition-colors
                            {{ $service->is_active ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-gray-100 text-gray-500 hover:bg-gray-200' }}">
                            {{ $service->is_active ? 'Active' : 'Inactive' }}
                        </button>
                    </form>
                    <form method="POST" action="{{ route('admin.services.destroy', $service) }}" onsubmit="return confirm('Delete?')">
                        @csrf @method('DELETE')
                        <button class="text-xs bg-red-100 text-red-600 px-3 py-1.5 rounded-lg font-heading font-semibold hover:bg-red-200 transition-colors">Delete</button>
                    </form>
                </div>
            </div>
            @empty
            <div class="px-6 py-10 text-center text-gray-400">No services yet.</div>
            @endforelse
        </div>
    </div>
</div>
@endsection
