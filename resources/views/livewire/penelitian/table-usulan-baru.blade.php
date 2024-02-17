<?php

use Livewire\Volt\Component;
use App\Models\Usulan;
use Illuminate\Database\Eloquent\Collection;
use App\Helper\Tahapan;

use function Livewire\Volt\{state, on, computed, with, usesPagination};

usesPagination();

state(['search'])->url();

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
                    <a wire:navigate href="{{ route('penelitian.edit', $data->id) }}" class="text-blue-600">Edit</a>
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
</section>
