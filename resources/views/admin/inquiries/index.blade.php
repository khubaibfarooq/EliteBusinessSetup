@extends('layouts.admin')
@section('title','Inquiries')
@section('page-title','Contact Inquiries')

@section('content')
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm">
            <thead><tr class="bg-gray-50 border-b border-gray-100">
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">#</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Name</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Email</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Phone</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Subject</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Status</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Date</th>
                <th class="text-left px-6 py-4 text-gray-500 font-heading font-semibold text-xs tracking-wide">Actions</th>
            </tr></thead>
            <tbody class="divide-y divide-gray-50">
                @forelse($inquiries as $inq)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4 text-gray-400 text-xs">{{ $inq->id }}</td>
                    <td class="px-6 py-4 font-heading font-semibold text-navy">{{ $inq->first_name }} {{ $inq->last_name }}</td>
                    <td class="px-6 py-4 text-gray-500">
                        <a href="mailto:{{ $inq->email }}" class="hover:text-gold">{{ $inq->email }}</a>
                    </td>
                    <td class="px-6 py-4 text-gray-500">{{ $inq->phone ?: '—' }}</td>
                    <td class="px-6 py-4 text-gray-600">{{ $inq->subject ?: '—' }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2.5 py-1 rounded-full text-xs font-semibold
                            {{ $inq->status === 'new' ? 'bg-amber-100 text-amber-700' : ($inq->status === 'read' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700') }}">
                            {{ ucfirst($inq->status) }}
                        </span>
                    </td>
                    <td class="px-6 py-4 text-gray-400 text-xs">{{ $inq->created_at->format('d M Y') }}</td>
                    <td class="px-6 py-4 flex items-center gap-2">
                        <a href="{{ route('admin.inquiries.show', $inq) }}" class="text-xs bg-navy text-white px-3 py-1.5 rounded-lg font-heading font-semibold hover:bg-navy-light transition-colors">View</a>
                        <form method="POST" action="{{ route('admin.inquiries.destroy', $inq) }}" onsubmit="return confirm('Delete?')">
                            @csrf @method('DELETE')
                            <button class="text-xs bg-red-100 text-red-600 px-3 py-1.5 rounded-lg font-heading font-semibold hover:bg-red-200 transition-colors">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr><td colspan="8" class="px-6 py-10 text-center text-gray-400">No inquiries yet.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t border-gray-100">{{ $inquiries->links() }}</div>
</div>
@endsection
