<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto">
            <div class="sm:rounded-lg overflow-hidden bg-white shadow-xl">
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
