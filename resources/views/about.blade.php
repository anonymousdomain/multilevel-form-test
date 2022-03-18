<x-app-layout>
    <x-slot name='header' class="d-flex justify-content-between">
        {{ _('Build Your Profile') }}
        <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
            {{ __('Log out') }}
        </x-jet-dropdown-link>
        <form method="POST" id="logout-form" action="{{ route('logout') }}">
            @csrf
        </form>
        @livewireStyles
    </x-slot>

    @livewire('aboutform')

    @livewireScripts
</x-app-layout>
