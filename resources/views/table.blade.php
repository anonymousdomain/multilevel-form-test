<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Users Table') }}
        </h2>
        @livewireStyles
    </x-slot>

    @livewire('data-table')

    @livewireScripts
</x-app-layout>
