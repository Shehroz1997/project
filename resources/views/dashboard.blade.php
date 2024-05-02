<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}


        </h2>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">

                        <!-- Buttons to navigate to index pages -->
                        <div class="mt-4">
                            <a href="{{ route('companies.index') }}" class="btn btn-blue">
                                View Companies
                            </a>
                            <a href="{{ route('employees.index') }}" class="btn btn-green">
                                View Employees
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>


</x-app-layout>
