<x-app-layout title="Services">
    <div x-data="{ modalOpen: true }" @keydown.escape.window="modalOpen = false" class="relative z-50 w-auto h-auto">
        <livewire:services.index />
    </div>
</x-app-layout>