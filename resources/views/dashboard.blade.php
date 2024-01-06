<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @role('Admin')
                <div class="p-6 bg-white border-b border-gray-200">
                    Hello Admin! Congratulations on your new Laravel project!
                </div>
                @else
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
                @endrole
            </div>
        </div>
    </div>
</x-app-layout>
