<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Valet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="table-auto border border-slate-500 text-center">
                        <thead>
                            <tr class="bg-black text-white">
                                <th class="w-60 border border-slate-600">Name</th>
                                <th class="w-60 border border-slate-600">Email</th>
                                <th class="w-60 border border-slate-600">Contact Number</th>
                                <th class="w-60 border border-slate-600">Booking Date</th>
                                <th class="w-60 border border-slate-600">Flexibility</th>
                                <th class="w-60 border border-slate-600">Vehicle Size</th>
                                @auth
                                <th class="w-60 border border-slate-600">Approve</th>
                                @endauth
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="{{ $valet->approve ? 'bg-green-400' : 'bg-white' }}">
                                <td class="border border-slate-600">{{ $valet->name }}</td>
                                <td class="border border-slate-600">{{ $valet->email }}</td>
                                <td class="border border-slate-600">{{ $valet->contact_no }}</td>
                                <td class="border border-slate-600">{{ $valet->booking_date }}</td>
                                <td class="border border-slate-600">{{ $valet->flexibility->name }}</td>
                                <td class="border border-slate-600">{{ $valet->size->name }}</td>
                                @auth
                                    <td class="border border-slate-600">
                                    <form action="{{ route('valets.update', [$valet->id]) }}" method="POST">
                                        @method('PATCH')
                                        @csrf
                                        <input type="hidden" name="approve" value="{{ $valet->approve ? 'false' : 'true' }}">

                                        <input value="true" onChange="this.form.submit()" type="checkbox" name="checkbox" {{ $valet->approve ? 'checked' : '' }}>
                                    </form>
                                </td>
                                @endauth

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
