<?php

use App\Models\Usulan;
use App\Helper\Tahapan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state};

if ( Auth::user()->role == 'pengaju') {
    $usulan = Usulan::where('pengaju', Auth::id())->orderBy('id', 'DESC')->first();
} else {
    $usulan = Usulan::orderBy('id', 'DESC')->first();
}

state([
    'usulan' => $usulan,
    'step' => Tahapan::step($usulan?->status),
 ]);
?>

<section class="bg-white shadow sm:rounded-lg">
    @if ($usulan)
    <div class="h-[208px] overflow-hidden font-semibold">
        <div class="px-16 py-5">
            <small>Usulan {{ Str::title($usulan->type) }} :</small> <br />
            {{ Str::of($usulan->judul)->title()->limit(80) }}
        </div>

        <ol class="flex items-center w-full px-16 mt-4">
            <li class="{{ $step > 1 ? 'after:border-blue-800' : 'after:border-gray-200' }} flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-blue-800 before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-blue-800 rounded-full shrink-0">
                    <svg class="w-3.5 h-3.5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <div class="absolute text-sm text-center text-black mt-28">
                        <div class="text-blue-800">Tahapan Seleksi/Usulan</div>
                        {{ $usulan->created_at->translatedFormat('d-m-Y') }}
                    </div>
                </span>
            </li>

            <li class="{{ $step > 1 ? 'before:border-blue-800' : 'before:border-gray-200' }} {{ $step > 2 ? 'after:border-blue-800' : 'after:border-gray-200' }} flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 {{ $step > 1 ? 'bg-blue-800' : 'bg-gray-200' }} rounded-full shrink-0">
                    <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <div class="absolute text-sm text-center {{ $step > 1 ? 'text-black' : 'text-gray-300' }} mt-28">
                        <div class="{{ $step > 1 ? 'text-blue-800' : 'text-gray-300' }}">Tahapan Pelaksanaan Kegiatan</div>
                        {{ $usulan->tanggal_pelaksanaan?->translatedFormat('d-m-Y') ?? '-' }}
                    </div>
                </span>
            </li>

            <li class="{{ $step > 2 ? 'before:border-blue-800' : 'before:border-gray-200' }} {{ $step > 3 ? 'after:border-blue-800' : 'after:border-gray-200' }} flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 {{ $step > 2 ? 'bg-blue-800' : 'bg-gray-200' }} rounded-full shrink-0">
                    <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <div class="absolute text-sm text-center {{ $step > 2 ? 'text-black' : 'text-gray-300' }} mt-28">
                        <div class="{{ $step > 2 ? 'text-blue-800' : 'text-gray-300' }}">Tahapan Seleksi Lanjutan</div>
                        {{ $usulan->tanggal_seleksi_lanjutan?->translatedFormat('d-m-Y') ?? '-' }}
                    </div>
                </span>
            </li>

            <li class="{{ $step > 3 ? 'before:border-blue-800' : 'before:border-gray-200' }} {{ $step > 3 ? 'after:border-blue-800' : 'after:border-gray-200' }} flex w-full items-center text-blue-600 before:content-[''] before:w-full before:h-1 before:border-b before:border-4 before:inline-block after:content-[''] after:w-full after:h-1 after:border-b after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 {{ $step > 3 ? 'bg-blue-800' : 'bg-gray-200' }} rounded-full shrink-0">
                    <svg class="w-3.5 h-3.5 text-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                    <div class="absolute text-sm text-center {{ $step > 3 ? 'text-black' : 'text-gray-300' }} mt-28">
                        <div class="{{ $step > 3 ? 'text-blue-800' : 'text-gray-300' }}">Tahapan Pasca Pelaksanaan Kegiatan</div>
                        {{ $usulan->tanggal_pasca_pelaksanaan?->translatedFormat('d-m-Y') ?? '-' }}
                    </div>
                </span>
            </li>
        </ol>
    </div>
    @else
    <div class="py-8 ">
        <div class="flex items-center justify-center h-full">
            <div>Belum ada usulan...</div>
        </div>
    </div>
    @endif
</section>
