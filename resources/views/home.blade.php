<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komunitas Pelari Kalcer — Daftar Sekarang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }

        /* Navbar scroll */
        #navbar { transition: background 0.3s, box-shadow 0.3s; }
        #navbar.scrolled {
            background: rgba(255,255,255,0.97) !important;
            box-shadow: 0 2px 20px rgba(234,88,12,0.12);
        }
        #navbar.scrolled .nav-link { color: #78350f; }
        #navbar.scrolled .nav-link:hover { color: #ea580c; }
        #navbar.scrolled .logo-text { color: #92400e; }
        #navbar.scrolled .logo-accent { color: #ea580c; }

        /* Animated gradient border on form */
        @keyframes border-flow {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .grad-border {
            background: linear-gradient(270deg, #f97316, #fbbf24, #fb923c, #fcd34d, #f97316);
            background-size: 400% 400%;
            animation: border-flow 4s ease infinite;
        }

        /* Pulse dot */
        @keyframes pulse-dot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50%       { opacity: 0.5; transform: scale(1.6); }
        }
        .pulse-dot { animation: pulse-dot 1.5s ease-in-out infinite; }

        /* Fade in up */
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(28px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        .fade-up-1 { animation: fade-up 0.6s ease both; animation-delay: 0.05s; }
        .fade-up-2 { animation: fade-up 0.6s ease both; animation-delay: 0.2s; }
        .fade-up-3 { animation: fade-up 0.6s ease both; animation-delay: 0.35s; }
        .fade-up-4 { animation: fade-up 0.6s ease both; animation-delay: 0.5s; }

        /* Feature card hover */
        .feature-card {
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(234,88,12,0.15);
        }

        /* Radio level pill */
        .level-pill input:checked + .pill-box {
            border-color: #f97316;
            background: #fff7ed;
            box-shadow: 0 0 0 3px rgba(249,115,22,0.2);
        }
        .pill-box { transition: border-color 0.2s, background 0.2s, box-shadow 0.2s; }

        /* Select custom arrow */
        select {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3E%3Cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 1.25em;
            -webkit-appearance: none;
            appearance: none;
        }

        /* Bounce scroll indicator */
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50%       { transform: translateY(8px); }
        }
        .bounce-slow { animation: bounce-slow 2s ease-in-out infinite; }

        /* Ticker tape */
        @keyframes ticker {
            from { transform: translateX(0); }
            to   { transform: translateX(-50%); }
        }
        .ticker-inner { animation: ticker 20s linear infinite; width: max-content; }

        /* Sun rays */
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }
        .sun-rays { animation: spin-slow 20s linear infinite; transform-origin: center; }

        /* Floating badge pop */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-8px); }
        }
        .float-badge { animation: float 3s ease-in-out infinite; }

        /* Hero SVG shimmer */
        .hero-img-wrap { position: relative; }
        .hero-img-wrap::after {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 1rem;
            box-shadow: 0 0 60px rgba(251,191,36,0.3), 0 0 120px rgba(249,115,22,0.1);
            pointer-events: none;
        }
    </style>
</head>
<body class="bg-amber-50 text-gray-900 antialiased">

    {{-- =========================================================
         NAVBAR
    ========================================================= --}}
    <nav id="navbar" class="fixed top-0 left-0 right-0 z-50 bg-transparent">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
            <div class="flex items-center justify-between h-16">
                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center shadow-md shadow-orange-200 group-hover:scale-105 transition-transform">
                        <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-base font-extrabold tracking-tight">
                        <span class="logo-text text-white">Pelari</span><span class="logo-accent text-amber-300">Kalcer</span>
                    </span>
                </a>

                {{-- Nav links --}}
                <div class="hidden md:flex items-center gap-1">
                    <a href="#tentang" class="nav-link text-white/80 hover:text-white px-3 py-1.5 rounded-lg hover:bg-white/10 text-sm font-medium transition-colors">Tentang</a>
                    <a href="#kategori" class="nav-link text-white/80 hover:text-white px-3 py-1.5 rounded-lg hover:bg-white/10 text-sm font-medium transition-colors">Kategori</a>
                    <a href="#daftar" class="ml-2 inline-flex items-center gap-1.5 bg-white text-orange-600 hover:bg-amber-50 text-sm font-bold px-4 py-2 rounded-xl transition-colors shadow-md shadow-orange-100">
                        Daftar Sekarang →
                    </a>
                </div>

                {{-- Mobile --}}
                <a href="#daftar" class="md:hidden inline-flex items-center bg-white text-orange-600 text-sm font-bold px-4 py-2 rounded-xl transition-colors shadow-md">
                    Daftar →
                </a>
            </div>
        </div>
    </nav>

    {{-- =========================================================
         HERO SECTION
    ========================================================= --}}
    <section class="relative min-h-screen flex flex-col overflow-hidden" style="background: linear-gradient(160deg, #fef3c7 0%, #fed7aa 30%, #fdba74 60%, #fb923c 100%);">

        {{-- Sun decoration --}}
        <div class="absolute top-[-80px] right-[-80px] w-[400px] h-[400px] pointer-events-none">
            {{-- Glow --}}
            <div class="absolute inset-0 rounded-full bg-yellow-300/40 blur-[60px]"></div>
            {{-- Sun circle --}}
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-36 h-36 rounded-full bg-gradient-to-br from-yellow-300 to-amber-400 shadow-[0_0_80px_rgba(251,191,36,0.7)]"></div>
            {{-- Rays --}}
            <svg class="sun-rays absolute inset-0 w-full h-full" viewBox="0 0 400 400" fill="none">
                @for ($i = 0; $i < 12; $i++)
                    @php $angle = $i * 30; $rad = $angle * pi() / 180; $x1 = 200 + cos($rad) * 90; $y1 = 200 + sin($rad) * 90; $x2 = 200 + cos($rad) * 130; $y2 = 200 + sin($rad) * 130; @endphp
                    <line x1="{{ $x1 }}" y1="{{ $y1 }}" x2="{{ $x2 }}" y2="{{ $y2 }}" stroke="#fde68a" stroke-width="{{ $i % 3 === 0 ? 4 : 2 }}" stroke-linecap="round" opacity="{{ $i % 3 === 0 ? 0.8 : 0.5 }}"/>
                @endfor
            </svg>
        </div>

        {{-- Decorative wave bottom --}}
        <div class="absolute bottom-0 left-0 right-0 pointer-events-none">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path d="M0,80 C360,140 1080,20 1440,80 L1440,120 L0,120 Z" fill="#fff7ed" opacity="0.7"/>
                <path d="M0,100 C480,40 960,140 1440,100 L1440,120 L0,120 Z" fill="#fef3c7" opacity="0.5"/>
            </svg>
        </div>

        {{-- Content --}}
        <div class="flex-1 flex flex-col justify-center max-w-7xl mx-auto w-full px-5 sm:px-8 lg:px-10 pt-28 pb-24">
            <div class="grid lg:grid-cols-2 gap-12 items-center">

                {{-- Left: Copy --}}
                <div class="order-2 lg:order-1">
                    {{-- Live badge --}}
                    <div class="fade-up-1 inline-flex items-center gap-2 bg-white/60 backdrop-blur-sm border border-orange-200 rounded-full px-4 py-1.5 mb-6 shadow-sm">
                        <span class="pulse-dot w-2 h-2 rounded-full bg-green-500 block"></span>
                        <span class="text-sm text-orange-900 font-semibold">Pendaftaran Anggota Baru Dibuka!</span>
                    </div>

                    <h1 class="fade-up-2 text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight tracking-tight text-amber-950 mb-5">
                        Berlari Lebih Jauh,<br>
                        <span class="relative inline-block">
                            <span class="relative z-10 text-orange-500">Bersama Kami.</span>
                            <span class="absolute -bottom-1 left-0 right-0 h-3 bg-yellow-300/60 -rotate-1 rounded z-0"></span>
                        </span>
                    </h1>

                    <p class="fade-up-3 text-amber-800 text-lg leading-relaxed max-w-lg mb-8">
                        Komunitas pelari Kalcer hadir untuk menggerakkan semangat lari kamu — dari 5K pertama hingga full marathon impianmu. Gabung sekarang, <span class="font-bold text-orange-600">gratis!</span>
                    </p>

                    {{-- CTA buttons --}}
                    <div class="fade-up-4 flex flex-wrap gap-3">
                        <a href="#daftar"
                           class="inline-flex items-center gap-2 bg-orange-500 hover:bg-orange-600 active:bg-orange-700 text-white font-bold px-7 py-3.5 rounded-2xl text-base transition-all shadow-lg shadow-orange-200 hover:scale-105 hover:shadow-orange-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Daftar Gratis Sekarang
                        </a>
                        <a href="#tentang"
                           class="inline-flex items-center gap-2 border-2 border-orange-300 text-orange-700 hover:bg-orange-50 font-semibold px-6 py-3.5 rounded-2xl text-base transition-all">
                            Pelajari Lebih Lanjut ↓
                        </a>
                    </div>

                    {{-- Stats --}}
                    <div class="fade-up-4 mt-10 grid grid-cols-3 gap-4 pt-8 border-t border-orange-200/60">
                        @foreach([
                            ['num' => '500+', 'label' => 'Anggota Aktif',   'emoji' => '🏃'],
                            ['num' => '50+',  'label' => 'Event / Tahun',   'emoji' => '🏅'],
                            ['num' => '4',    'label' => 'Kota',            'emoji' => '🌆'],
                        ] as $stat)
                        <div class="text-center lg:text-left">
                            <div class="text-2xl mb-0.5">{{ $stat['emoji'] }}</div>
                            <div class="text-2xl sm:text-3xl font-extrabold text-orange-600">{{ $stat['num'] }}</div>
                            <div class="text-amber-700 text-xs sm:text-sm font-medium mt-0.5">{{ $stat['label'] }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

                {{-- Right: Hero image --}}
                <div class="order-1 lg:order-2 fade-up-2">
                    <div class="hero-img-wrap relative">
                        <div class="rounded-2xl overflow-hidden shadow-2xl shadow-orange-200 border-4 border-white/80 aspect-[4/3] bg-amber-100">
                            <img src="{{ asset('images/hero.jpg') }}"
                                 alt="Komunitas Pelari Kalcer"
                                 class="w-full h-full object-cover">
                        </div>
                        {{-- Floating badge --}}
                        <div class="float-badge absolute -bottom-5 -left-5 bg-white border border-orange-100 rounded-2xl px-4 py-3 flex items-center gap-3 shadow-xl shadow-orange-100">
                            <div class="w-10 h-10 rounded-xl bg-amber-50 flex items-center justify-center text-xl">🏆</div>
                            <div>
                                <div class="text-xs text-amber-600 font-medium">Komunitas Terbaik</div>
                                <div class="text-sm font-extrabold text-amber-900">Kalcer Running 2026</div>
                            </div>
                        </div>
                        {{-- Members badge --}}
                        <div class="float-badge absolute -top-4 -right-4 bg-orange-500 text-white rounded-2xl px-4 py-2.5 shadow-lg shadow-orange-200" style="animation-delay: 1s;">
                            <div class="text-xs font-semibold opacity-80">Bergabung hari ini</div>
                            <div class="text-lg font-extrabold">+500 pelari 🎉</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- Scroll indicator --}}
        <div class="text-center pb-8">
            <a href="#tentang" class="inline-block bounce-slow text-orange-400 hover:text-orange-600 transition-colors">
                <svg class="w-6 h-6 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </a>
        </div>

    </section>

    {{-- =========================================================
         TICKER TAPE
    ========================================================= --}}
    <div class="bg-gradient-to-r from-orange-500 via-amber-500 to-orange-500 py-3 overflow-hidden">
        <div class="ticker-inner flex gap-16 whitespace-nowrap text-white text-sm font-bold uppercase tracking-wider">
            @php
                $items = ['🏃 5K Fun Run', '⚡ 10K Challenge', '🏅 Half Marathon', '🏆 Full Marathon', '🌅 Morning Run', '🌙 Night Run', '🤝 Run Club', '💪 Training Plan'];
                $repeated = array_merge($items, $items);
            @endphp
            @foreach($repeated as $item)
                <span>{{ $item }}</span>
                <span class="opacity-40">★</span>
            @endforeach
        </div>
    </div>

    {{-- =========================================================
         ABOUT SECTION
    ========================================================= --}}
    <section id="tentang" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="inline-block bg-amber-100 text-amber-700 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 border border-amber-200">✨ Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-amber-950 mb-4">
                    Lebih dari Sekadar Komunitas Lari
                </h2>
                <p class="text-amber-700 text-lg leading-relaxed">
                    Pelari Kalcer lahir dari semangat sederhana: berlari itu lebih menyenangkan ketika dilakukan bersama.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach([
                    ['icon' => '🏃', 'bg' => 'bg-orange-50',  'ring' => 'border-orange-100',  'dot' => 'bg-orange-400',  'title' => 'Latihan Rutin',       'desc' => 'Sesi lari bersama setiap akhir pekan. Dari pace santai hingga tempo cepat, semua disambut.'],
                    ['icon' => '📍', 'bg' => 'bg-amber-50',   'ring' => 'border-amber-100',   'dot' => 'bg-amber-400',   'title' => 'Rute Pilihan',        'desc' => 'Rute dipilih setiap minggu — taman kota, tepi sungai, hingga jalur pegunungan yang menakjubkan.'],
                    ['icon' => '🏅', 'bg' => 'bg-yellow-50',  'ring' => 'border-yellow-100',  'dot' => 'bg-yellow-400',  'title' => 'Event & Lomba',       'desc' => '50+ event per tahun. Fun run bulanan, race series, dan charity run yang bisa kamu ikuti.'],
                    ['icon' => '🤝', 'bg' => 'bg-green-50',   'ring' => 'border-green-100',   'dot' => 'bg-green-400',   'title' => 'Komunitas Inklusif',  'desc' => 'Pemula hingga veteran — semua punya tempat di sini. Tidak ada yang tertinggal sendirian.'],
                    ['icon' => '📊', 'bg' => 'bg-blue-50',    'ring' => 'border-blue-100',    'dot' => 'bg-blue-400',    'title' => 'Tracking & Progress', 'desc' => 'Grup WhatsApp, leaderboard, dan coaching tip mingguan dari pelatih berpengalaman.'],
                    ['icon' => '🌍', 'bg' => 'bg-rose-50',    'ring' => 'border-rose-100',    'dot' => 'bg-rose-400',    'title' => '4 Kota Aktif',        'desc' => 'Jakarta, Bandung, Surabaya, dan Yogyakarta. Berpindah kota? Komunitas tetap ada!'],
                ] as $card)
                <div class="feature-card {{ $card['bg'] }} border {{ $card['ring'] }} rounded-2xl p-6">
                    <div class="text-4xl mb-4">{{ $card['icon'] }}</div>
                    <h3 class="text-lg font-bold text-amber-950 mb-2 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full {{ $card['dot'] }} inline-block"></span>
                        {{ $card['title'] }}
                    </h3>
                    <p class="text-amber-800 text-sm leading-relaxed">{{ $card['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- =========================================================
         KATEGORI SECTION
    ========================================================= --}}
    <section id="kategori" class="py-24" style="background: linear-gradient(180deg, #fff7ed 0%, #fef3c7 100%);">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">

            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="inline-block bg-orange-100 text-orange-700 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 border border-orange-200">🏁 Kategori Lomba</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-amber-950 mb-4">Pilih Jarakmu, Buktikan Dirimu</h2>
                <p class="text-amber-700 text-lg">Tersedia empat kategori untuk semua level pelari.</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-5">
                @foreach([
                    ['dist' => '5K',  'emoji' => '🟢', 'color' => 'from-emerald-400 to-green-500',  'bg' => 'bg-emerald-50',  'ring' => 'border-emerald-200', 'level' => 'Pemula',   'desc' => 'Cocok untuk kamu yang baru mulai. Temukan ritme larimu!'],
                    ['dist' => '10K', 'emoji' => '🔵', 'color' => 'from-sky-400 to-blue-500',        'bg' => 'bg-sky-50',      'ring' => 'border-sky-200',     'level' => 'Menengah', 'desc' => 'Tingkatkan endurance dan kejar target waktu personalmu.'],
                    ['dist' => '21K', 'emoji' => '🟠', 'color' => 'from-orange-400 to-amber-500',    'bg' => 'bg-orange-50',   'ring' => 'border-orange-200',  'level' => 'Advanced', 'desc' => 'Half Marathon — setengah perjalanan, dua kali kebanggaan.'],
                    ['dist' => '42K', 'emoji' => '🔴', 'color' => 'from-red-400 to-rose-600',        'bg' => 'bg-rose-50',     'ring' => 'border-rose-200',    'level' => 'Elite',    'desc' => 'Full Marathon — puncak pencapaian seorang pelari sejati.'],
                ] as $cat)
                <div class="feature-card relative {{ $cat['bg'] }} border-2 {{ $cat['ring'] }} rounded-2xl p-6 flex flex-col items-center text-center overflow-hidden group">
                    <div class="absolute -top-5 -right-5 text-8xl font-black opacity-[0.04] select-none group-hover:opacity-[0.07] transition-opacity text-gray-800">
                        {{ $cat['dist'] }}
                    </div>
                    <div class="relative text-3xl mb-1">{{ $cat['emoji'] }}</div>
                    <div class="text-4xl font-black bg-gradient-to-br {{ $cat['color'] }} bg-clip-text text-transparent mb-1">
                        {{ $cat['dist'] }}
                    </div>
                    <div class="text-xs font-bold uppercase tracking-widest bg-gradient-to-br {{ $cat['color'] }} bg-clip-text text-transparent mb-3">
                        {{ $cat['level'] }}
                    </div>
                    <p class="text-gray-600 text-sm leading-relaxed">{{ $cat['desc'] }}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- =========================================================
         FORM SECTION
    ========================================================= --}}
    <section id="daftar" class="py-24 bg-white relative overflow-hidden">

        {{-- Sunburst background decoration --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[700px] h-[180px] rounded-full bg-amber-100/80 blur-[60px] pointer-events-none"></div>
        <div class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full bg-orange-100/60 blur-[40px] pointer-events-none"></div>
        <div class="absolute -bottom-20 -right-20 w-64 h-64 rounded-full bg-yellow-100/60 blur-[40px] pointer-events-none"></div>

        <div class="relative max-w-2xl mx-auto px-5 sm:px-8">

            <div class="text-center mb-10">
                <span class="inline-block bg-orange-100 text-orange-600 text-xs font-bold uppercase tracking-widest px-4 py-1.5 rounded-full mb-4 border border-orange-200">🚀 Bergabung Sekarang</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-amber-950 mb-3">
                    Siap Berlari Bersama? 🏃
                </h2>
                <p class="text-amber-700">Isi formulir di bawah. Konfirmasi langsung dikirim ke emailmu.</p>
            </div>

            {{-- Errors --}}
            @if ($errors->any())
                <div class="mb-6 bg-red-50 border border-red-200 text-red-700 rounded-2xl px-5 py-4">
                    <p class="font-bold text-sm mb-2 flex items-center gap-2">
                        <svg class="w-4 h-4 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                        </svg>
                        Harap perbaiki kesalahan berikut:
                    </p>
                    <ul class="list-disc list-inside text-sm space-y-1">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Form card with animated border --}}
            <div class="grad-border p-[2.5px] rounded-3xl shadow-xl shadow-orange-100">
                <div class="bg-white rounded-3xl p-7 sm:p-10">
                    <form action="{{ route('registration.store') }}" method="POST" class="space-y-6">
                        @csrf

                        {{-- Nama --}}
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required
                                placeholder="cth: Budi Santoso"
                                class="w-full bg-white border @error('name') border-red-400 ring-1 ring-red-300 @else border-gray-300 @enderror text-gray-900 placeholder-gray-400 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-all hover:border-gray-400 shadow-sm">
                            @error('name')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                placeholder="cth: budi@email.com"
                                class="w-full bg-white border @error('email') border-red-400 ring-1 ring-red-300 @else border-gray-300 @enderror text-gray-900 placeholder-gray-400 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-all hover:border-gray-400 shadow-sm">
                            @error('email')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Telepon --}}
                        <div>
                            <label for="phone" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Nomor WhatsApp / Telepon <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-base select-none leading-none">🇮🇩</span>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                                    placeholder="cth: 08123456789"
                                    class="w-full bg-white border @error('phone') border-red-400 ring-1 ring-red-300 @else border-gray-300 @enderror text-gray-900 placeholder-gray-400 rounded-xl pl-11 pr-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-all hover:border-gray-400 shadow-sm">
                            </div>
                            @error('phone')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Kategori Lari --}}
                        <div>
                            <label for="kategori_lari" class="block text-sm font-semibold text-gray-700 mb-1.5">
                                Kategori Lari Favoritmu <span class="text-red-500">*</span>
                            </label>
                            <select id="kategori_lari" name="kategori_lari" required
                                class="w-full bg-white border @error('kategori_lari') border-red-400 ring-1 ring-red-300 @else border-gray-300 @enderror text-gray-900 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition-all hover:border-gray-400 shadow-sm pr-10">
                                <option value="" disabled {{ old('kategori_lari') ? '' : 'selected' }} class="text-gray-400">— Pilih kategori —</option>
                                @foreach(['5K', '10K', 'Half Marathon (21K)', 'Full Marathon (42K)'] as $kategori)
                                    <option value="{{ $kategori }}" {{ old('kategori_lari') === $kategori ? 'selected' : '' }}>{{ $kategori }}</option>
                                @endforeach
                            </select>
                            @error('kategori_lari')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Level Pengalaman --}}
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-3">
                                Level Pengalamanmu <span class="text-red-500">*</span>
                            </label>
                            <div class="grid grid-cols-3 gap-3">
                                @foreach([
                                    ['value' => 'Pemula',        'icon' => '🌱', 'desc' => '< 1 tahun'],
                                    ['value' => 'Menengah',      'icon' => '🔥', 'desc' => '1–3 tahun'],
                                    ['value' => 'Berpengalaman', 'icon' => '🏆', 'desc' => '> 3 tahun'],
                                ] as $level)
                                <label class="level-pill cursor-pointer">
                                    <input type="radio" name="level_pengalaman" value="{{ $level['value'] }}"
                                        {{ old('level_pengalaman') === $level['value'] ? 'checked' : '' }}
                                        class="sr-only peer" required>
                                    <div class="pill-box flex flex-col items-center justify-center gap-1.5 p-3.5 rounded-xl border-2 border-gray-200 bg-white hover:border-orange-300 hover:bg-orange-50 transition-all text-center shadow-sm">
                                        <span class="text-2xl">{{ $level['icon'] }}</span>
                                        <span class="text-xs font-bold text-gray-800">{{ $level['value'] }}</span>
                                        <span class="text-xs text-gray-400">{{ $level['desc'] }}</span>
                                    </div>
                                </label>
                                @endforeach
                            </div>
                            @error('level_pengalaman')
                                <p class="mt-1.5 text-xs text-red-500 flex items-center gap-1">
                                    <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/></svg>
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        {{-- Privacy --}}
                        <div class="bg-gray-50 rounded-xl px-4 py-3 border border-gray-100 text-xs text-gray-500 text-center">
                            🔒 Data kamu aman bersama kami. Tidak ada spam, tidak ada jual-beli data.
                        </div>

                        {{-- Submit --}}
                        <button type="submit"
                            class="w-full bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-extrabold py-4 px-6 rounded-2xl text-base transition-all shadow-lg shadow-orange-200 hover:shadow-orange-300 hover:scale-[1.02] active:scale-100 focus:outline-none focus:ring-4 focus:ring-orange-300 flex items-center justify-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                            Daftar Sekarang — Gratis! 🎉
                        </button>

                    </form>
                </div>
            </div>

            {{-- Trust badges --}}
            <div class="mt-6 flex flex-wrap justify-center gap-x-6 gap-y-2 text-xs text-amber-600">
                <span class="flex items-center gap-1.5 font-medium"><span class="text-green-500 text-sm">✓</span> Pendaftaran Gratis</span>
                <span class="flex items-center gap-1.5 font-medium"><span class="text-green-500 text-sm">✓</span> Konfirmasi Email Instan</span>
                <span class="flex items-center gap-1.5 font-medium"><span class="text-green-500 text-sm">✓</span> Data Aman & Terenkripsi</span>
            </div>

        </div>
    </section>

    {{-- =========================================================
         FOOTER
    ========================================================= --}}
    <footer style="background: linear-gradient(135deg, #fef3c7 0%, #fed7aa 100%);" class="border-t border-orange-100 py-10">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 lg:px-10">
            <div class="flex flex-col md:flex-row items-center justify-between gap-5">

                <a href="{{ route('home') }}" class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center shadow-sm">
                        <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-sm font-extrabold text-amber-900">Pelari<span class="text-orange-500">Kalcer</span></span>
                </a>

                <p class="text-amber-700 text-sm text-center">
                    &copy; {{ date('Y') }} Komunitas Pelari Kalcer. Dibuat dengan ❤️ dan semangat lari.
                </p>

                <div class="flex items-center gap-3">
                    <a href="#" class="w-8 h-8 rounded-xl bg-white border border-orange-200 hover:bg-orange-50 hover:border-orange-300 flex items-center justify-center text-orange-500 font-bold text-xs transition-all shadow-sm">ig</a>
                    <a href="#" class="w-8 h-8 rounded-xl bg-white border border-orange-200 hover:bg-green-50 hover:border-green-300 flex items-center justify-center text-green-500 font-bold text-xs transition-all shadow-sm">wa</a>
                    <a href="#" class="w-8 h-8 rounded-xl bg-white border border-orange-200 hover:bg-sky-50 hover:border-sky-300 flex items-center justify-center text-sky-500 font-bold text-xs transition-all shadow-sm">tw</a>
                </div>

            </div>
        </div>
    </footer>

    {{-- Navbar scroll effect --}}
    <script>
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('scrolled', window.scrollY > 30);
        });
    </script>

</body>
</html>
