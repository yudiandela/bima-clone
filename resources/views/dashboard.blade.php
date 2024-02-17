<x-app-layout>
    <div class="py-6">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <h1 class="mb-2 font-bold text-black">DASBOR PENGUSUL</h1>
            <div class="h-[208px] overflow-hidden font-semibold text-white shadow sm:rounded-lg" style="background-image: url('../../images/jumbotron-biru.svg')">
                <div class="p-16">
                    Anda dapat mengajukan usulan<br />
                    terkait dengan layanan berikut :
                </div>
            </div>

            <div class="flex justify-center gap-5 -mt-8">
                <a wire:navigate href="{{ route('penelitian.usulan-baru') }}" class="flex items-center gap-3 px-10 py-5 text-center text-black transition-all duration-300 bg-white rounded shadow hover:bg-blue-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>

                    {{ __('Penelitian') }}
                </a>
                <a wire:navigate href="{{ route('penelitian.usulan-baru') }}" class="flex items-center gap-3 px-10 py-5 text-center text-black transition-all duration-300 bg-white rounded shadow hover:bg-blue-800 hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>

                    {{ __('Pengabdian') }}
                </a>
            </div>

            <h4 class="mt-8 mb-2 text-blue-800 text-md">STATUS USULAN TERAKHIR</h4>
            <livewire:dashboard.status-usulan />

            <h4 class="mt-8 mb-2 text-blue-800 text-md">PROFIL ANDA</h4>
            <livewire:dashboard.profile />
        </div>
    </div>
</x-app-layout>
