<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Berhasil — Komunitas Pelari Kalcer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }

        @keyframes pop-in {
            0%   { opacity: 0; transform: scale(0.75) translateY(20px); }
            70%  { transform: scale(1.05) translateY(-4px); }
            100% { opacity: 1; transform: scale(1) translateY(0); }
        }
        @keyframes fade-up {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }
        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50%       { transform: translateY(-8px); }
        }
        @keyframes bounce-confetti {
            0%   { transform: translateY(-20px) rotate(0deg);   opacity: 1; }
            100% { transform: translateY(20px)  rotate(180deg); opacity: 0.7; }
        }
        @keyframes confetti-fall {
            0%   { transform: translateY(-10px) rotate(var(--r)); opacity: 1; }
            100% { transform: translateY(30px)  rotate(calc(var(--r) + 180deg)); opacity: 0; }
        }

        .animate-pop    { animation: pop-in  0.6s cubic-bezier(.34,1.56,.64,1) both; }
        .animate-fade-1 { animation: fade-up 0.5s ease both; animation-delay: 0.45s; }
        .animate-fade-2 { animation: fade-up 0.5s ease both; animation-delay: 0.6s; }
        .animate-fade-3 { animation: fade-up 0.5s ease both; animation-delay: 0.75s; }
        .animate-fade-4 { animation: fade-up 0.5s ease both; animation-delay: 0.9s; }

        .sun-spin { animation: spin-slow 15s linear infinite; transform-origin: center; }
        .float    { animation: float 3s ease-in-out infinite; }

        /* Confetti pieces */
        .confetti { position: absolute; width: 8px; height: 8px; border-radius: 2px; animation: confetti-fall 2s ease-in-out infinite alternate; }
    </style>
</head>
<body class="min-h-screen flex flex-col antialiased" style="background: linear-gradient(160deg, #fef3c7 0%, #fed7aa 40%, #fde68a 100%);">

    {{-- ===== HEADER ===== --}}
    <header class="bg-white/70 backdrop-blur-sm border-b border-orange-100 shadow-sm">
        <div class="max-w-7xl mx-auto px-5 sm:px-8 h-16 flex items-center">
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group">
                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-orange-400 to-amber-500 flex items-center justify-center shadow-md shadow-orange-200 group-hover:scale-105 transition-transform">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="text-base font-extrabold tracking-tight text-amber-900">
                    Pelari<span class="text-orange-500">Kalcer</span>
                </span>
            </a>
        </div>
    </header>

    {{-- ===== MAIN ===== --}}
    <main class="flex-1 flex items-center justify-center py-16 px-4 relative overflow-hidden">

        {{-- Decorative sun top-right --}}
        <div class="absolute -top-24 -right-24 w-72 h-72 pointer-events-none">
            <div class="absolute inset-0 rounded-full bg-yellow-300/30 blur-[50px]"></div>
            <svg class="sun-spin absolute inset-0 w-full h-full" viewBox="0 0 288 288" fill="none">
                @for ($i = 0; $i < 12; $i++)
                    @php $angle = $i * 30; $rad = $angle * pi() / 180; $x1 = 144 + cos($rad) * 70; $y1 = 144 + sin($rad) * 70; $x2 = 144 + cos($rad) * 100; $y2 = 144 + sin($rad) * 100; @endphp
                    <line x1="{{ $x1 }}" y1="{{ $y1 }}" x2="{{ $x2 }}" y2="{{ $y2 }}"
                          stroke="#fde68a" stroke-width="{{ $i % 3 === 0 ? 3 : 1.5 }}" stroke-linecap="round" opacity="0.7"/>
                @endfor
                <circle cx="144" cy="144" r="50" fill="#fde68a" opacity="0.6"/>
            </svg>
        </div>

        {{-- Decorative blob bottom-left --}}
        <div class="absolute -bottom-20 -left-20 w-64 h-64 rounded-full bg-orange-200/40 blur-[50px] pointer-events-none"></div>

        {{-- Confetti decoration (static, CSS animated) --}}
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            @foreach([
                ['top'=>'10%','left'=>'12%','color'=>'bg-orange-400','r'=>'15deg','delay'=>'0s'],
                ['top'=>'15%','left'=>'80%','color'=>'bg-yellow-400','r'=>'-20deg','delay'=>'0.3s'],
                ['top'=>'25%','left'=>'5%','color'=>'bg-amber-300','r'=>'30deg','delay'=>'0.6s'],
                ['top'=>'30%','left'=>'90%','color'=>'bg-red-400','r'=>'-10deg','delay'=>'0.9s'],
                ['top'=>'5%','left'=>'50%','color'=>'bg-orange-300','r'=>'45deg','delay'=>'0.15s'],
                ['top'=>'8%','left'=>'65%','color'=>'bg-yellow-500','r'=>'-30deg','delay'=>'0.5s'],
                ['top'=>'20%','left'=>'35%','color'=>'bg-amber-400','r'=>'20deg','delay'=>'0.8s'],
            ] as $c)
            <div class="confetti {{ $c['color'] }}"
                 style="top:{{ $c['top'] }};left:{{ $c['left'] }};--r:{{ $c['r'] }};animation-delay:{{ $c['delay'] }};animation-duration:{{ rand(15,30)/10 }}s;"></div>
            @endforeach
        </div>

        <div class="relative w-full max-w-lg">

            {{-- ✅ Success Icon --}}
            <div class="flex justify-center mb-6 animate-pop">
                <div class="relative">
                    {{-- Outer glow ring --}}
                    <div class="absolute inset-0 rounded-full bg-green-300/40 blur-[16px] scale-125"></div>
                    {{-- Circle --}}
                    <div class="relative w-28 h-28 rounded-full bg-gradient-to-br from-green-400 to-emerald-500 flex items-center justify-center shadow-xl shadow-green-200">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/>
                        </svg>
                    </div>
                    {{-- Floating emoji badge --}}
                    <div class="float absolute -top-2 -right-2 w-9 h-9 rounded-full bg-white shadow-md flex items-center justify-center text-lg">🎉</div>
                </div>
            </div>

            {{-- Title --}}
            <div class="text-center mb-8 animate-fade-1">
                <h1 class="text-3xl sm:text-4xl font-extrabold text-amber-950 mb-3">
                    Pendaftaran Berhasil! 🎊
                </h1>
                <p class="text-amber-700 leading-relaxed">
                    Selamat bergabung, <strong class="text-orange-600">{{ $registration['name'] }}</strong>!<br>
                    Kamu resmi menjadi bagian dari keluarga besar Pelari Kalcer. 🏃‍♂️
                </p>
                <p class="text-sm text-amber-500 mt-2">
                    Email konfirmasi dikirim ke <strong class="text-orange-500">{{ $registration['email'] }}</strong>
                </p>
            </div>

            {{-- Achievement badges --}}
            <div class="animate-fade-1 flex flex-wrap justify-center gap-2 mb-6">
                <span class="inline-flex items-center gap-1.5 bg-green-100 text-green-700 border border-green-200 text-xs font-bold px-3 py-1.5 rounded-full">
                    ✅ Terdaftar Resmi
                </span>
                <span class="inline-flex items-center gap-1.5 bg-blue-100 text-blue-700 border border-blue-200 text-xs font-bold px-3 py-1.5 rounded-full">
                    📧 Konfirmasi Terkirim
                </span>
                <span class="inline-flex items-center gap-1.5 bg-orange-100 text-orange-700 border border-orange-200 text-xs font-bold px-3 py-1.5 rounded-full">
                    🏁 {{ $registration['kategori_lari'] }}
                </span>
            </div>

            {{-- Registration summary card --}}
            <div class="animate-fade-2 bg-white rounded-3xl shadow-lg shadow-orange-100 border border-orange-100 overflow-hidden mb-5">
                {{-- Card header --}}
                <div class="bg-gradient-to-r from-orange-400 to-amber-400 px-6 py-3.5 flex items-center gap-2">
                    <span class="text-lg">📋</span>
                    <p class="text-xs font-extrabold text-white uppercase tracking-widest">Ringkasan Pendaftaranmu</p>
                </div>
                {{-- Rows --}}
                <div class="divide-y divide-orange-50">
                    @foreach([
                        ['icon' => '👤', 'label' => 'Nama Lengkap',      'value' => $registration['name']],
                        ['icon' => '📧', 'label' => 'Email',              'value' => $registration['email']],
                        ['icon' => '📱', 'label' => 'No. Telepon',        'value' => $registration['phone']],
                        ['icon' => '🏁', 'label' => 'Kategori Lari',      'value' => $registration['kategori_lari']],
                        ['icon' => '⭐', 'label' => 'Level Pengalaman',   'value' => $registration['level_pengalaman']],
                    ] as $row)
                    <div class="flex items-center px-6 py-3.5 gap-3 hover:bg-amber-50/50 transition-colors">
                        <span class="text-xl w-7 flex-shrink-0">{{ $row['icon'] }}</span>
                        <span class="text-xs text-amber-500 font-semibold w-36 flex-shrink-0">{{ $row['label'] }}</span>
                        <span class="text-sm font-bold text-amber-950">{{ $row['value'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Next steps --}}
            <div class="animate-fade-3 bg-white rounded-3xl shadow-md shadow-orange-100 border border-orange-100 p-5 mb-5">
                <p class="text-xs font-extrabold text-amber-500 uppercase tracking-widest mb-4 flex items-center gap-2">
                    <span class="text-base">🗺️</span> Langkah Selanjutnya
                </p>
                <div class="space-y-3.5">
                    @foreach([
                        ['num' => '1', 'color' => 'bg-orange-400', 'title' => 'Cek WhatsApp kamu', 'body' => 'Tim kami akan menambahkanmu ke grup komunitas dalam 1×24 jam.'],
                        ['num' => '2', 'color' => 'bg-amber-400',  'title' => 'Simpan kontak admin', 'body' => 'Hubungi kami jika ada pertanyaan tentang jadwal atau event.'],
                        ['num' => '3', 'color' => 'bg-green-400',  'title' => 'Siapkan sepatumu!', 'body' => 'Jadwal lari perdana akan diumumkan melalui grup WhatsApp. Stay tuned!'],
                    ] as $step)
                    <div class="flex items-start gap-3">
                        <div class="w-7 h-7 rounded-full {{ $step['color'] }} text-white text-xs font-extrabold flex items-center justify-center flex-shrink-0 shadow-sm">
                            {{ $step['num'] }}
                        </div>
                        <div>
                            <p class="text-sm font-bold text-amber-900">{{ $step['title'] }}</p>
                            <p class="text-xs text-amber-600 leading-relaxed">{{ $step['body'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- Info note --}}
            <div class="animate-fade-3 bg-amber-100 border border-amber-200 rounded-2xl px-5 py-4 text-sm text-amber-800 flex items-start gap-3 mb-8">
                <span class="text-xl flex-shrink-0">💡</span>
                <p><strong>Tips:</strong> Tambahkan email kami ke kontakmu agar konfirmasi tidak masuk ke spam. Cek folder <em>Promotions</em> atau <em>Updates</em> juga ya!</p>
            </div>

            {{-- Action buttons --}}
            <div class="animate-fade-4 flex flex-col sm:flex-row gap-3">
                <a href="{{ route('home') }}"
                   class="flex-1 inline-flex items-center justify-center gap-2 bg-gradient-to-r from-orange-500 to-amber-500 hover:from-orange-600 hover:to-amber-600 text-white font-extrabold px-6 py-4 rounded-2xl transition-all shadow-lg shadow-orange-200 hover:shadow-orange-300 hover:scale-[1.02] text-sm">
                    ← Kembali ke Beranda
                </a>
                <a href="https://wa.me/"
                   class="flex-1 inline-flex items-center justify-center gap-2 bg-green-50 hover:bg-green-100 border-2 border-green-200 hover:border-green-300 text-green-700 font-bold px-6 py-4 rounded-2xl transition-all text-sm">
                    <span class="text-base">📲</span> Hubungi Admin
                </a>
            </div>

        </div>
    </main>

    {{-- ===== FOOTER ===== --}}
    <footer class="py-6 text-center border-t border-orange-100 bg-white/40">
        <p class="text-xs text-amber-500">
            &copy; {{ date('Y') }} Komunitas Pelari Kalcer — Setiap Langkah Berarti ❤️
        </p>
    </footer>

</body>
</html>
