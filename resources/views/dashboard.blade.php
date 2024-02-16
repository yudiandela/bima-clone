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
            <div class="h-[208px] overflow-hidden font-semibold bg-white shadow sm:rounded-lg">
                <div class="px-16 py-5">
                    <small>Usulan Penelitian :</small> <br />
                    Analisis Kinerja Content Delivery Network Menggunakan Metode Rateless...
                </div>

                <ol class="flex items-center w-full px-16 mt-4">
                    <li class="flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-blue-800 before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-4 after:inline-block">
                        <span class="flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full shrink-0">
                            <svg class="w-3.5 h-3.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <div class="absolute text-sm text-center text-black mt-28">
                                <div class="text-blue-800">Tahapan Seleksi/Usulan</div>
                                -
                            </div>
                        </span>
                    </li>

                    <li class="flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-gray-200 before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-4 after:inline-block">
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full shrink-0">
                            <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <div class="absolute text-sm text-center text-gray-300 mt-28">
                                <div class="text-gray-300">Tahapan Pelaksanaan Kegiatan</div>
                                -
                            </div>
                        </span>
                    </li>

                    <li class="flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-gray-200 before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-4 after:inline-block">
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full shrink-0">
                            <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <div class="absolute text-sm text-center text-gray-300 mt-28">
                                <div class="text-gray-300">Tahapan Seleksi Lanjutan</div>
                                -
                            </div>
                        </span>
                    </li>

                    <li class="flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-gray-200 before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-4 after:inline-block">
                        <span class="flex items-center justify-center w-8 h-8 bg-gray-200 rounded-full shrink-0">
                            <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                            </svg>
                            <div class="absolute text-sm text-center text-gray-300 mt-28">
                                <div class="text-gray-300">Tahapan Pasca Pelaksanaan Kegiatan</div>
                                -
                            </div>
                        </span>
                    </li>
                </ol>
            </div>

            <h4 class="mt-8 mb-2 text-blue-800 text-md">PROFIL ANDA</h4>
            <div class="grid grid-cols-3 gap-5">
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Identitas</small>
                        <div class="text-xl font-bold">SAHAT PARULIAN SITORUS</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Penelitian</small>
                        <div class="text-xl font-bold">1</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Pengabdian</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Artikel pada Jurnal Internasional Bereputasi</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Sinta Skor Overall</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">HKI</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Buku</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Sinta Skor 3Yr</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
                <div class="h-[104px] bg-white shadow sm:rounded-lg">
                    <div class="flex-row items-center justify-center p-4">
                        <small class="block mb-2">Scopus H-Index</small>
                        <div class="text-xl font-bold">0</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
