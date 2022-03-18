<x-app-layout>
    <x-slot name='header' class="text-center">
        {{ _('Build Your Profile') }}
        @livewireStyles
    </x-slot>
    @livewire('aboutform')

    @livewireScripts
</x-app-layout>
