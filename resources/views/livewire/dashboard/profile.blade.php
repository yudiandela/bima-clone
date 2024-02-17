<?php

use App\Models\Usulan;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state};

state([
    'user' => Auth::user(),
    'count' => [
        'penelitian' => Usulan::where('pengaju', Auth::id())->where('type', 'penelitian')->count(),
        'pengabdian' => Usulan::where('pengaju', Auth::id())->where('type', 'pengabdian')->count(),
    ],
]);
?>

<div class="grid grid-cols-3 gap-5">
    <div class="h-[104px] bg-white shadow sm:rounded-lg">
        <div class="flex-row items-center justify-center p-4">
            <small class="block mb-2">Identitas</small>
            <div class="text-xl font-bold uppercase">{{ $user->name }}</div>
        </div>
    </div>
    <div class="h-[104px] bg-white shadow sm:rounded-lg">
        <div class="flex-row items-center justify-center p-4">
            <small class="block mb-2">Penelitian</small>
            <div class="text-xl font-bold">{{ $count['penelitian'] }}</div>
        </div>
    </div>
    <div class="h-[104px] bg-white shadow sm:rounded-lg">
        <div class="flex-row items-center justify-center p-4">
            <small class="block mb-2">Pengabdian</small>
            <div class="text-xl font-bold">{{ $count['pengabdian'] }}</div>
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
