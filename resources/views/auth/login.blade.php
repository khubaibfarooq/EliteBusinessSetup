<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Elite Business Setup</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css'])
</head>
<body class="min-h-screen bg-navy flex items-center justify-center p-4">

    <div class="w-full max-w-md">
        {{-- Logo --}}
        <div class="text-center mb-8">
            <div class="w-20 h-20 bg-gold rounded-2xl flex flex-col items-center justify-center mx-auto mb-4 relative">
                <span class="text-navy text-[11px] font-heading font-black absolute top-2">♛</span>
                <span class="text-navy font-heading font-black text-3xl mt-3">EB</span>
            </div>
            <div class="text-white font-heading font-extrabold text-2xl">ELITE <span class="text-gold">ADMIN</span></div>
            <div class="text-white/40 text-xs tracking-widest uppercase mt-1">Admin Control Panel</div>
        </div>

        <div class="bg-white rounded-3xl shadow-2xl p-8">
            <h2 class="font-heading font-bold text-navy text-xl mb-6 text-center">Sign In</h2>

            @if($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-xl px-4 py-3 mb-5 text-red-600 text-sm">
                {{ $errors->first() }}
            </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Email Address</label>
                    <input type="email" name="email" value="{{ old('email') }}" required autofocus
                           placeholder="admin@elitebusiness.ae"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors">
                </div>
                <div>
                    <label class="block font-heading font-semibold text-gray-700 text-xs mb-1.5">Password</label>
                    <input type="password" name="password" required
                           placeholder="••••••••"
                           class="w-full border border-gray-200 rounded-xl px-4 py-3.5 text-sm focus:outline-none focus:border-gold focus:ring-1 focus:ring-gold transition-colors">
                </div>
                <button type="submit" class="btn-gold w-full justify-center rounded-xl py-4 text-base mt-2">
                    Sign In →
                </button>
            </form>

            <p class="text-center text-gray-400 text-xs mt-5">
                Default: admin@elitebusiness.ae / Admin@123
            </p>
        </div>

        <div class="text-center mt-6">
            <a href="{{ url('/') }}" class="text-white/50 hover:text-gold text-sm transition-colors">← Back to Website</a>
        </div>
    </div>
</body>
</html>
