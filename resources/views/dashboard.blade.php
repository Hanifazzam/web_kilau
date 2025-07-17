<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-xl font-bold mb-2">Halo, {{ Auth::user()->name }}!</h1>
                    <p>Anda login sebagai <span class="font-semibold">{{ Auth::user()->role }}</span>.</p>
                    
                    <div class="mt-4">
                        <p>Silakan pilih menu di atas untuk mulai bekerja.</p>
                        {{-- Nanti di sini bisa ditambah ringkasan statistik --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
