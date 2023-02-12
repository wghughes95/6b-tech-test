<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Valets') }}
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
                    <table class="table-auto border border-slate-500 text-center">
                        <thead>
                            <tr class="bg-black text-white">
                                <th class="w-60 border border-slate-600">Name</th>
                                <th class="w-60 border border-slate-600">Email</th>
                                <th class="w-60 border border-slate-600">Contact Number</th>
                                <th class="w-60 border border-slate-600">Booking Date</th>
                                <th class="w-60 border border-slate-600">Flexibility</th>
                                <th class="w-60 border border-slate-600">Vehicle Size</th>
                                <th class="w-10 border border-slate-600">Edit</th>
                                <th class="w-10 border border-slate-600">Show</th>
                                <th class="w-10 border border-slate-600">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($valets as $valet)
                                <tr class="{{ $valet->approve ? 'bg-green-400' : 'bg-white' }}">
                                    <td class="border border-slate-600">{{ $valet->name }}</td>
                                    <td class="border border-slate-600">{{ $valet->email }}</td>
                                    <td class="border border-slate-600">{{ $valet->contact_no }}</td>
                                    <td class="border border-slate-600">{{ $valet->booking_date }}</td>
                                    <td class="border border-slate-600">{{ $valet->flexibility->name }}</td>
                                    <td class="border border-slate-600">{{ $valet->size->name }}</td>
                                    <td class="border border-slate-600">
                                        <a href="{{ route('valets.edit', [$valet->id]) }}"
                                            class="inline-flex justify-center rounded-md border border-transparent bg-yellow-600 p-2 text-sm font-medium text-white shadow-sm hover:bg-yellow-700">
                                            Edit
                                        </a>
                                    </td>
                                    <td class="border border-slate-600">
                                        <a href="{{ route('valets.show', [$valet->id]) }}"
                                            class="inline-flex justify-center rounded-md border border-transparent bg-green-600 p-2 text-sm font-medium text-white shadow-sm hover:bg-green-700">
                                            Show
                                        </a>
                                    </td>
                                    <td class="border border-slate-600">
                                        <form action="{{ route('valets.destroy', [$valet->id]) }}" method="POST">
                                            @method('DELETE')
                                            @csrf

                                            <x-primary-button
                                                class="inline-flex justify-center rounded-md border border-transparent bg-red-600 p-2 text-sm font-medium text-white shadow-sm hover:bg-red-700">
                                                {{ __('Delete') }}
                                            </x-primary-button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
