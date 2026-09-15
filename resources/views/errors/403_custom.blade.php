<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403 - Akses Ditolak</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-4">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-md w-full text-center">
        <div class="w-16 h-16 bg-red-100 text-red-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
            </svg>
        </div>

        <h1 class="text-3xl font-bold text-gray-800 mb-2">403 Forbidden</h1>
        <h2 class="text-lg font-semibold text-gray-700 mb-3">Akses Ditolak</h2>
        
        <p class="text-sm text-gray-600 mb-6">
            {{ $message ?? 'Anda tidak memiliki hak akses untuk membuka halaman ini.' }}
        </p>

        <div class="space-y-2">
            <a href="{{ url()->previous() }}" class="block w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 rounded-md transition">
                Kembali ke Halaman Sebelumnya
            </a>
            <a href="/login" class="block w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-2 rounded-md transition">
                Ke Halaman Utama
            </a>
        </div>
    </div>
</body>
</html>