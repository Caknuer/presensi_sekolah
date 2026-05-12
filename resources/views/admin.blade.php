<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="flex">

    {{-- Sidebar --}}
    <aside class="w-64 min-h-screen bg-indigo-600 text-white p-5">
        <h1 class="text-2xl font-bold mb-8">
            Presensi Sekolah
        </h1>

        <nav class="space-y-3">

            <a href="#" class="block hover:bg-indigo-500 p-2 rounded">
                Dashboard
            </a>

            <a href="#" class="block hover:bg-indigo-500 p-2 rounded">
                Tahun Ajaran
            </a>

            <a href="#" class="block hover:bg-indigo-500 p-2 rounded">
                Kelas
            </a>

            <a href="#" class="block hover:bg-indigo-500 p-2 rounded">
                Siswa
            </a>

            <a href="#" class="block hover:bg-indigo-500 p-2 rounded">
                Absensi
            </a>

        </nav>
    </aside>

    {{-- Content --}}
    <main class="flex-1 p-8">
        @yield('content')
    </main>

</div>

</body>
</html>