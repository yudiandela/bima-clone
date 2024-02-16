<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <livewire:layout.navigation />

        <!-- Page Heading -->
        <header class="bg-blue-900 shadow">
            <div class="p-4 mx-auto leading-tight text-md max-w-7xl sm:px-6 lg:px-8">
                <!-- Navigation Links -->
                <div class="hidden space-x-12 sm:-my-px sm:flex">
                    <!-- Dashboard -->
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    <!-- Penelitian -->
                    <div class="relative flex items-center block gap-2 px-1 text-sm leading-5 text-white transition duration-150 ease-in-out cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>

                        {{ __('Penelitian') }}

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                        <div class="absolute top-0 left-0 hidden w-48 h-auto group-hover:block hover:block">
                            <div class="overflow-hidden translate-y-10 bg-white rounded shadow-lg">
                                <x-nav-link wire:navigate :href="route('penelitian.usulan-baru')" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Usulan Baru</x-nav-link>
                                <x-nav-link wire:navigate :href="route('penelitian.perbaikan-usulan')" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Perbaikan Usulan</x-nav-link>
                                <x-nav-link wire:navigate :href="route('penelitian.laporan-kemajuan')" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Kemajuan</x-nav-link>
                                <x-nav-link wire:navigate :href="route('penelitian.laporan-akhir')" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Akhir</x-nav-link>
                                <x-nav-link wire:navigate :href="route('penelitian.catatan-harian')" class="block px-3 py-3 text-black/60 hover:text-blue-800 hover:bg-gray-100">Catatan Harian</x-nav-link>
                            </div>
                        </div>
                    </div>

                    <!-- Pengabdian -->
                    <div class="relative flex items-center block gap-2 px-1 text-sm leading-5 text-white transition duration-150 ease-in-out cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                        </svg>

                        {{ __('Pengabdian') }}

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                        <div class="absolute top-0 left-0 hidden w-48 h-auto group-hover:block hover:block">
                            <div class="overflow-hidden translate-y-10 bg-white rounded shadow-lg">
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Usulan Baru</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Perbaikan Usulan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Kemajuan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Akhir</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 text-black/60 hover:text-blue-800 hover:bg-gray-100">Catatan Harian</x-nav-link>
                            </div>
                        </div>
                    </div>

                    <!-- Kosabangsa -->
                    <div class="relative flex items-center block gap-2 px-1 text-sm leading-5 text-white transition duration-150 ease-in-out cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                        </svg>

                        {{ __('Kosabangsa') }}

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                        <div class="absolute top-0 left-0 hidden w-48 h-auto group-hover:block hover:block">
                            <div class="overflow-hidden translate-y-10 bg-white rounded shadow-lg">
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Pendaftaran Pendamping</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Pendaftaran Pelaksana</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Usulan Kolaborasi</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Perbaikan Usulan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Kemajuan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Akhir</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 text-black/60 hover:text-blue-800 hover:bg-gray-100">Catatan Harian</x-nav-link>
                            </div>
                        </div>
                    </div>

                    <!-- Prototipe -->
                    <div class="relative flex items-center block gap-2 px-1 text-sm leading-5 text-white transition duration-150 ease-in-out cursor-pointer group">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 0 0 1.5-.189m-1.5.189a6.01 6.01 0 0 1-1.5-.189m3.75 7.478a12.06 12.06 0 0 1-4.5 0m3.75 2.383a14.406 14.406 0 0 1-3 0M14.25 18v-.192c0-.983.658-1.823 1.508-2.316a7.5 7.5 0 1 0-7.517 0c.85.493 1.509 1.333 1.509 2.316V18" />
                        </svg>

                        {{ __('Prototipe') }}

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                        <div class="absolute top-0 left-0 hidden w-48 h-auto group-hover:block hover:block">
                            <div class="overflow-hidden translate-y-10 bg-white rounded shadow-lg">
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Usulan Prototipe</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Perbaikan Usulan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Kemajuan</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 border-b text-black/60 hover:text-blue-800 hover:bg-gray-100">Laporan Akhir</x-nav-link>
                                <x-nav-link wire:navigate href="#" class="block px-3 py-3 text-black/60 hover:text-blue-800 hover:bg-gray-100">Catatan Harian</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>

        <footer class="bg-gray-200">
            <div class="p-4 mx-auto leading-tight text-md max-w-7xl sm:px-6 lg:px-8">
                {{ now()->format('Y') }} © Kemdikbudristek clone.
            </div>
        </footer>
    </div>
</body>

</html>
