<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2> --}}
    </x-slot>
    <div class="main-container">       
       {{-- {{ $pekerjas->first()->nama }}       --}}
       @if($pekerjas)
            <p>Nama Pekerja: {{ $pekerjas->nama }}</p>
        @else
            <p>Tiada data pekerja.</p>
        @endif
    </div>
</x-app-layout>