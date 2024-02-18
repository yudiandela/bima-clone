<?php

use Livewire\Volt\Component;
use App\Models\Usulan;
use Illuminate\Database\Eloquent\Collection;
use App\Helper\Tahapan;

use function Livewire\Volt\{state, rules, on, computed, with, usesPagination};

usesPagination();

state(['search'])->url();
state(['selected' => 0]);
state(['ketua', 'judul', 'bidang_fokus', 'tahun_pelaksanaan', 'peran', 'type']);

rules([
    'ketua' => ['string'],
    'judul' => ['string'],
    'bidang_fokus' => ['string'],
    'tahun_pelaksanaan' => ['numeric'],
    'peran' => ['string'],
]);

/** Fetching data **/
$fetchUsulan = fn ($search = '') => Usulan::where(['status' => 'seleksi', 'type' => 'penelitian'])
    ->when($search, function($query) use ($search) {
        $query->where('ketua', 'like', "%$search%")
            ->orWhere('judul', 'like', "%$search%")
            ->orWhere('bidang_fokus', 'like', "%$search%")
            ->orWhere('tahun_pelaksanaan', 'like', "%$search%")
            ->orWhere('peran', 'like', "%$search%");
    })
    ->orderBy('id', 'DESC')
    ->paginate(10);

with(fn () => [
    'usulan' => $this->fetchUsulan()
]);

$usulan = computed(fn() => $this->fetchUsulan($this->search));

/** listeners **/
on([
    'usulan-stored' => fn() => $this->fetchUsulan(),
]);

$fetchDetailUsulan = function(int $id) {
    $detail = Usulan::findOrfail($id);

    $this->selected = $detail;
    $this->ketua = $detail->ketua;
    $this->judul = $detail->judul;
    $this->bidang_fokus = $detail->bidang_fokus;
    $this->tahun_pelaksanaan = $detail->tahun_pelaksanaan;
    $this->peran = $detail->peran;
    $this->type = $detail->type;
};

$submitUsulan = function() {
    $validated = $this->validate();

    $this->selected->update($validated);

    $this->reset('ketua', 'judul', 'bidang_fokus', 'tahun_pelaksanaan', 'peran');

    $this->dispatch('usulan-updated');
};
?>

@if ($this->usulan)
    @php
        $usulan = $this->usulan
    @endphp
@endif

<section class="space-y-6">
    <div class="flex justify-end">
        <div class="w-1/3">
            <x-text-input wire:model.live="search" id="search" name="search" type="text" class="w-full" placeholder="{{ __('Pencarian Ketua, Judul, Bidang Fokus, dll') }}"/>
        </div>
    </div>

    <table class="w-full text-sm">
        <thead>
            <tr class="font-semibold border-b">
                <td width="3%" class="py-3 text-center">No</td>
                <td width="15%" class="text-start">Ketua</td>
                <td width="35%" class="text-start">Judul</td>
                <td width="10%" class="text-start">Bidang Fokus</td>
                <td width="10%" class="text-center">Tahun Pelaksanaan</td>
                <td width="10%" class="text-center">Peran</td>
                <td width="10%" class="text-center">Status Usulan</td>
                <td width="7%" class="text-center">Aksi</td>
            </tr>
        </thead>
        <tbody>
            @forelse ($usulan as $data)
            <tr class="border-b" wire:key="{{ $data->id }}">
                <td class="py-3 text-center">{{ $loop->iteration }}</td>
                <td class="text-start">{{ $data->ketua }}</td>
                <td class="text-start">{{ $data->judul }}</td>
                <td class="text-start">{{ $data->bidang_fokus }}</td>
                <td class="text-center">{{ $data->tahun_pelaksanaan }}</td>
                <td class="text-center">{{ $data->peran }}</td>
                <td class="text-center">{{ Tahapan::get($data->status) }}</td>
                <td class="text-center">
                    <button wire:click="fetchDetailUsulan({{ $data->id }})" class="text-blue-600"
                        x-on:click.prevent="$dispatch('open-modal', 'edit-usulan')">
                        Edit
                    </button>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="8" class="py-4 text-center">Data tidak tersedia!</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{ $usulan->links() }}

    <x-modal name="edit-usulan" :show="$errors->isNotEmpty()" focusable>
        <form wire:submit="submitUsulan" class="p-6">

            <h2 class="text-lg font-medium text-gray-900">
                {{ __('Edit Usulan Penelitian') }}
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
                <x-action-message class="text-green-600 me-3" on="usulan-updated">{{ __('Usulan berhasil diupdate.') }}</x-action-message>
                <x-secondary-button x-on:click="$dispatch('close')">{{ __('Tutup') }}</x-secondary-button>
                <x-primary-button class="ms-3">{{ __('Ubah') }}</x-primary-button>
            </div>
        </form>
    </x-modal>
</section>
