<x-app-layout>
    <div class="py-6">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-2">
                <h1 class="font-bold text-black">USULAN PENELITIAN</h1>
                <livewire:penelitian.modal-tambah-usulan />
            </div>
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <livewire:penelitian.table-usulan-baru :status="$status" />
            </div>
        </div>
    </div>
</x-app-layout>
