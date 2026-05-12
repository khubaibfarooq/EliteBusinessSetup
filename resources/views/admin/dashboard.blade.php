@extends('layouts.admin')
@section('title','Dashboard')
@section('page-title','Dashboard')

@section('content')
{{-- Stats Cards --}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @foreach([
        ['Total Inquiries', $totalInquiries,   '📩', 'bg-blue-500'],
        ['New Inquiries',   $newInquiries,     '🔔', 'bg-gold'],
        ['Services',        $totalServices,    '🛠️', 'bg-navy'],
        ['Testimonials',    $totalTestimonials,'⭐', 'bg-emerald-500'],
    ] as $card)
    <div class="bg-white rounded-2xl shadow-sm p-6 flex items-center gap-5 border border-gray-100">
        <div class="w-14 h-14 {{ $card[3] }} rounded-2xl flex items-center justify-center text-2xl flex-shrink-0">{{ $card[2] }}</div>
        <div>
            <div class="text-3xl font-heading font-black text-navy">{{ $card[1] }}</div>
            <div class="text-gray-500 text-sm font-heading">{{ $card[0] }}</div>
        </div>
    </div>
    @endforeach
</div>

{{-- Quick Actions --}}
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <div class="lg:col-span-2 bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-100 flex items-center justify-between">
            <h2 class="font-heading font-bold text-navy">Recent Inquiries</h2>
            <a href="{{ route('admin.inquiries.index') }}" class="text-gold text-sm font-heading font-semibold hover:underline">View All →</a>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-sm">
                <thead><tr class="bg-gray-50">
                    <th class="text-left px-6 py-3 text-gray-500 font-heading font-semibold text-xs tracking-wide">Name</th>
                    <th class="text-left px-6 py-3 text-gray-500 font-heading font-semibold text-xs tracking-wide">Email</th>
                    <th class="text-left px-6 py-3 text-gray-500 font-heading font-semibold text-xs tracking-wide">Subject</th>
                    <th class="text-left px-6 py-3 text-gray-500 font-heading font-semibold text-xs tracking-wide">Status</th>
                    <th class="text-left px-6 py-3 text-gray-500 font-heading font-semibold text-xs tracking-wide">Date</th>
                </tr></thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($recentInquiries as $inq)
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="px-6 py-4 font-heading font-semibold text-navy text-sm">{{ $inq->first_name }} {{ $inq->last_name }}</td>
                        <td class="px-6 py-4 text-gray-500 text-sm">{{ $inq->email }}</td>
                        <td class="px-6 py-4 text-gray-600 text-sm">{{ $inq->subject ?: '—' }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2.5 py-1 rounded-full text-xs font-semibold
                                {{ $inq->status === 'new' ? 'bg-gold/20 text-gold-dark' : ($inq->status === 'read' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700') }}">
                                {{ ucfirst($inq->status) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-gray-400 text-xs">{{ $inq->created_at->diffForHumans() }}</td>
                    </tr>
                    @empty
                    <tr><td colspan="5" class="px-6 py-8 text-center text-gray-400">No inquiries yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="space-y-4">
        <div class="bg-navy rounded-2xl p-6 text-white">
            <h3 class="font-heading font-bold text-lg mb-4">Quick Actions</h3>
            <div class="space-y-3">
                <a href="{{ route('admin.settings.index') }}" class="flex items-center gap-3 bg-white/10 hover:bg-gold hover:text-navy rounded-xl px-4 py-3 text-sm font-heading font-medium transition-all">
                    ⚙️ Update Site Settings
                </a>
                <a href="{{ route('admin.inquiries.index') }}" class="flex items-center gap-3 bg-white/10 hover:bg-gold hover:text-navy rounded-xl px-4 py-3 text-sm font-heading font-medium transition-all">
                    📩 View All Inquiries
                </a>
                <a href="{{ route('admin.services.index') }}" class="flex items-center gap-3 bg-white/10 hover:bg-gold hover:text-navy rounded-xl px-4 py-3 text-sm font-heading font-medium transition-all">
                    🛠️ Manage Services
                </a>
                <a href="{{ url('/') }}" target="_blank" class="flex items-center gap-3 bg-gold/20 hover:bg-gold hover:text-navy rounded-xl px-4 py-3 text-sm font-heading font-medium transition-all text-gold">
                    🌐 View Live Website
                </a>
            </div>
        </div>

        <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm">
            <h3 class="font-heading font-bold text-navy mb-3">WhatsApp Quick Link</h3>
            <p class="text-gray-500 text-xs mb-3">Direct link for clients</p>
            <a href="https://wa.me/971528455102" target="_blank"
               class="flex items-center gap-2 bg-[#25D366] text-white rounded-xl px-4 py-3 text-sm font-heading font-bold hover:bg-[#1ebe5d] transition-colors">
                📲 +971 52 845 5102
            </a>
        </div>
    </div>
</div>
@endsection
