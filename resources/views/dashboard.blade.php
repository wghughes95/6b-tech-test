<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('valets.create') }}"
                        class="m-4 inline-flex justify-center rounded-md border border-transparent bg-green-600 p-2 text-sm font-medium text-white shadow-sm hover:bg-green-700">
                        Add a New Booking
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
