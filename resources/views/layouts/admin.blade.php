<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Dashboard') | Elite Admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100 font-sans">

<div class="flex min-h-screen">
    {{-- SIDEBAR --}}
    <aside class="w-64 bg-navy flex flex-col flex-shrink-0 fixed inset-y-0 left-0 z-40">
        {{-- Logo --}}
        <div class="px-6 py-5 border-b border-white/10">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gold rounded-lg flex flex-col items-center justify-center relative">
                    <span class="text-navy text-[8px] font-heading font-black absolute top-1">♛</span>
                    <span class="text-navy font-heading font-black text-sm mt-2">EB</span>
                </div>
                <div>
                    <div class="text-white font-heading font-extrabold text-sm">ELITE <span class="text-gold">ADMIN</span></div>
                    <div class="text-white/40 text-[9px] tracking-widest uppercase">Control Panel</div>
                </div>
            </div>
        </div>

        {{-- Nav --}}
        <nav class="flex-1 px-3 py-5 space-y-1 overflow-y-auto">
            @php
            $links = [
                ['route'=>'admin.dashboard',  'label'=>'Dashboard',  'icon'=>'🏠'],
                ['route'=>'admin.settings.index','label'=>'Site Settings','icon'=>'⚙️'],
                ['route'=>'admin.services.index','label'=>'Services','icon'=>'🛠️'],
                ['route'=>'admin.inquiries.index','label'=>'Inquiries','icon'=>'📩'],
                ['route'=>'admin.free-zones.index','label'=>'Free Zones','icon'=>'🌐'],
                ['route'=>'admin.testimonials.index','label'=>'Testimonials','icon'=>'⭐'],
                ['route'=>'admin.stats.index','label'=>'Stats','icon'=>'📊'],
                ['route'=>'admin.faqs.index','label'=>'FAQs','icon'=>'❓'],
            ];
            @endphp
            @foreach($links as $link)
            <a href="{{ route($link['route']) }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl text-sm font-heading font-medium transition-all duration-200
                      {{ request()->routeIs($link['route'].'*') ? 'bg-gold text-navy font-semibold' : 'text-white/70 hover:bg-white/10 hover:text-white' }}">
                <span class="text-base">{{ $link['icon'] }}</span>
                {{ $link['label'] }}
            </a>
            @endforeach
        </nav>

        {{-- Footer --}}
        <div class="px-4 py-4 border-t border-white/10 mt-auto">
            @auth
            <div class="text-white/50 text-xs mb-3 px-2">Logged in as <span class="text-white">{{ auth()->user()->name }}</span></div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-left text-red-400 hover:text-red-300 text-xs font-heading font-medium px-2 py-1.5 rounded hover:bg-white/5 transition-colors">
                    🚪 Logout
                </button>
            </form>
            @endauth
            <a href="{{ url('/') }}" target="_blank" class="block mt-2 text-gold/70 hover:text-gold text-xs font-heading font-medium px-2 py-1.5 rounded hover:bg-white/5 transition-colors">
                🌐 View Website →
            </a>
        </div>
    </aside>

    {{-- MAIN CONTENT --}}
    <div class="ml-64 flex-1 flex flex-col min-h-screen">
        {{-- Top bar --}}
        <header class="bg-white border-b border-gray-200 px-8 py-4 flex items-center justify-between sticky top-0 z-30">
            <h1 class="font-heading font-bold text-navy text-lg">@yield('page-title','Dashboard')</h1>
            <div class="flex items-center gap-3">
                @if(session('success'))
                <span class="bg-green-100 text-green-700 text-xs font-semibold px-3 py-1.5 rounded-full">✓ {{ session('success') }}</span>
                @endif
                <a href="https://wa.me/971528455102" target="_blank" class="text-xs text-gray-500 hover:text-green-600">📲 WhatsApp Support</a>
            </div>
        </header>

        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
</div>

@livewireScripts
@stack('scripts')
</body>
</html>
