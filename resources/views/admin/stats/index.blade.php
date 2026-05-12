@extends('layouts.admin')
@section('title','Company Stats')
@section('page-title','Manage Company Stats')

@section('content')
<div class="max-w-2xl">
    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100">
            <h2 class="font-heading font-bold text-navy">Global Statistics</h2>
            <p class="text-gray-400 text-xs mt-1">Displayed on the home page counter section</p>
        </div>
        <div class="divide-y divide-gray-50">
            @foreach($stats as $stat)
            <div class="px-6 py-6 hover:bg-gray-50 transition-colors">
                <form method="POST" action="{{ route('admin.stats.update', $stat) }}" class="flex items-end gap-4">
                    @csrf @method('PUT')
                    <div class="flex-1 grid grid-cols-2 gap-4">
                        <div>
                            <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Label</label>
                            <input type="text" name="label" value="{{ $stat->label }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                        </div>
                        <div>
                            <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Value (number)</label>
                            <input type="text" name="value" value="{{ $stat->value }}" class="w-full border border-gray-200 rounded-xl px-4 py-2 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold">
                        </div>
                    </div>
                    <button type="submit" class="bg-navy text-white text-xs font-bold px-4 py-2.5 rounded-xl hover:bg-navy-light transition-colors">Update</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
