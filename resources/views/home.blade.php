<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Komunitas Pelari Kalcer</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
    <div class="min-h-screen flex flex-col">
        <header class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <span class="text-xl font-bold text-indigo-600">Komunitas Pelari Kalcer</span>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Beranda</a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Tentang</a>
                            <a href="#" class="text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Kontak</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-1">
            <section class="bg-indigo-50">
                <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-center text-3xl font-bold text-indigo-800 mb-6">
                        Bergabunglah dengan Komunitas Pelari Kalcer!
                    </h1>
                    <p class="text-center text-lg text-gray-600 max-w-2xl mx-auto mb-8">
                        Komunitas running yang menyokong setiap langkah Anda menuju gaya hidup sehat dan semangat.
                    </p>
                    <!-- Image placeholder -->
                    <div class="relative h-64 w-full rounded-lg overflow-hidden shadow-md mb-8">
                        <!-- Using a placeholder image from placehold.co -->
                        <img src="/images/hero.svg" alt="Komunitas Pelari Kalcer" class="w-full h-full object-cover">
                    </div>
                </div>
            </section>

            <section class="py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-lg">
                        <div class="bg-white rounded-xl shadow-md p-6 space-y-6">
                            <h2 class="text-center text-2xl font-bold text-indigo-600">Formulir Pendaftaran</h2>
                            <form action="#" method="POST" class="space-y-4">
                                @csrf
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap</label>
                                    <input type="text" id="name" name="name" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                    <input type="email" id="email" name="email" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Telepon</label>
                                    <input type="tel" id="phone" name="phone" required
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <label for="distance" class="block text-sm font-medium text-gray-700 mb-1">Jarak yang Biasa Dilegakkan (km)</label>
                                    <input type="number" id="distance" name="distance" min="0"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                </div>
                                <div>
                                    <button type="submit"
                                        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus-ring-indigo-500 focus:ring-offset-2">
                                        Daftar Sekarang
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 flex flex-col items-center">
                <p class="text-center text-gray-500 text-sm">
                    &copy; {{ date('Y') }} Komunitas Pelari Kalcer. Hak Cipta Dilindungi.
                </p>
            </div>
        </footer>
    </div>
</body>
</html>