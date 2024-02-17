<?php

use App\Models\Usulan;
use Livewire\Volt\Component;
use Illuminate\Support\Facades\Auth;

use function Livewire\Volt\{state, rules};

state(['ketua', 'judul', 'bidang_fokus', 'tahun_pelaksanaan', 'peran', 'type']);

rules([
    'ketua' => ['string'],
    'judul' => ['string'],
    'bidang_fokus' => ['string'],
    'tahun_pelaksanaan' => ['numeric'],
    'peran' => ['string'],
]);

$submitUsulan = function() {
    $validated = collect($this->validate())->merge(['pengaju' => Auth::id()])->toArray();

    Usulan::create($validated);

    $this->reset('ketua', 'judul', 'bidang_fokus', 'tahun_pelaksanaan', 'peran');

    $this->dispatch('usulan-stored');
}
?>

<div>
    <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'tambah-usulan')">
        {{ __('Tambah Penelitian') }}
    </x-primary-button>

    <x-modal name="tambah-usulan" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="submitUsulan" class="p-6">

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Tambah Usulan Penelitian Baru') }}
            </h2>

            <div class="mt-6">
                <x-input-label for="ketua" value="{{ __('Nama Ketua') }}" />
                <x-text-input wire:model="ketua" id="ketua" name="ketua" type="text" class="block w-full mt-1" placeholder="{{ __('Nama Ketua') }}"/>
                <x-input-error :messages="$errors->get('ketua')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="judul" value="{{ __('Judul Penelitian') }}" />
                <x-text-input wire:model="judul" id="judul" name="judul" type="text" class="block w-full mt-1" placeholder="{{ __('Judul Penelitian') }}"/>
                <x-input-error :messages="$errors->get('judul')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="bidang_fokus" value="{{ __('Bidang Fokus') }}" />
                <x-text-input wire:model="bidang_fokus" id="bidang_fokus" name="bidang_fokus" type="text" class="block w-full mt-1" placeholder="{{ __('Bidang Fokus') }}"/>
                <x-input-error :messages="$errors->get('bidang_fokus')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="tahun_pelaksanaan" value="{{ __('Tahun Pelaksanaan') }}" />
                <x-text-input wire:model="tahun_pelaksanaan" id="tahun_pelaksanaan" name="tahun_pelaksanaan" type="number" class="block w-full mt-1" placeholder="{{ __('Tahun Pelaksanaan') }}"/>
                <x-input-error :messages="$errors->get('tahun_pelaksanaan')" class="mt-2" />
            </div>

            <div class="mt-6">
                <x-input-label for="peran" value="{{ __('Peran') }}" />
                <x-text-input wire:model="peran" id="peran" name="peran" type="text" class="block w-full mt-1" placeholder="{{ __('Peran') }}"/>
                <x-input-error :messages="$errors->get('peran')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-action-message class="text-green-600 me-3" on="usulan-stored">{{ __('Usulan berhasil tersimpan.') }}</x-action-message>
                <x-secondary-button x-on:click="$dispatch('close')">{{ __('Tutup') }}</x-secondary-button>
                <x-primary-button class="ms-3">{{ __('Tambahkan') }}</x-primary-button>
            </div>
        </form>
    </x-modal>
</div>
