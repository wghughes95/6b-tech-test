<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a New Valet Booking') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="md:col-span-1">
                            <div class="px-4 sm:px-0">
                                <h3 class="text-lg font-medium leading-6 text-gray-900">Add a New Valet Booking</h3>
                            </div>
                        </div>
                        <div class="mt-5 md:col-span-2 md:mt-0">
                            <form action="{{ route('valets.store') }}" method="POST">
                                @csrf

                                <div class="overflow-hidden shadow sm:rounded-md">
                                    <div class="bg-white px-4 py-5 sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6">
                                                <x-input-label for="name" :value="__('Name')" />

                                                <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                    name="name" autocomplete="name" />

                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>

                                            <div class="col-span-6">
                                                <x-input-label for="booking_date" :value="__('Booking Date')" />

                                                <x-text-input id="booking_date" class="block mt-1 w-full" type="text"
                                                    name="booking_date" autocomplete="booking_date" />

                                                <x-input-error :messages="$errors->get('booking_date')" class="mt-2" />
                                            </div>

                                            <div class="col-span-6">
                                                <x-input-label for="flexibility_id" :value="__('Flexibility')" />

                                                <select
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    name="flexibility_id" id="flexibility_id">
                                                    @foreach ($flexibilities as $flexibility)
                                                        <option value="{{ $flexibility->id }}">{{ $flexibility->name }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                                <x-input-error :messages="$errors->get('flexibility')" class="mt-2" />
                                            </div>

                                            <div class="col-span-6">
                                                <x-input-label for="size_id" :value="__('Vehicle Size')" />

                                                <select
                                                    class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                                    name="size_id" id="size_id">
                                                    @foreach ($sizes as $size)
                                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                                    @endforeach
                                                </select>

                                                <x-input-error :messages="$errors->get('flexibility')" class="mt-2" />
                                            </div>

                                            <div class="col-span-6">
                                                <x-input-label for="email" :value="__('Email')" />

                                                <x-text-input id="email" class="block mt-1 w-full" type="text"
                                                    name="email" autocomplete="email" />

                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>

                                            <div class="col-span-6">
                                                <x-input-label for="contact_no" :value="__('Contact Number')" />

                                                <x-text-input id="contact_no" class="block mt-1 w-full" type="text"
                                                    name="contact_no" autocomplete="contact_no" />

                                                <x-input-error :messages="$errors->get('contact_no')" class="mt-2" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                        <x-primary-button class="ml-4">
                                            {{ __('Add Booking') }}
                                        </x-primary-button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
