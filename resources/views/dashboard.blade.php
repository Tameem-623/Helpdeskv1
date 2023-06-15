<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

    <div class="container py-8">
        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
            <!-- Total Tickets Card -->
            <a href="{{ route('tickets.index') }}" class="card bg-orange-100 text-orange-500">
                <div class="card-body flex items-center">
                    <div class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 010 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 010-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">
                            Total tickets
                        </p>
                        <p class="text-lg font-semibold text-gray-700">
                            {{ $totalTickets }}
                        </p>
                    </div>
                </div>
            </a>

            <!-- Opened Tickets Card -->
            <a href="{{ route('tickets.index', ['status' => 'open']) }}" class="card bg-green-100 text-green-500">
                <div class="card-body flex items-center">
                    <div class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">
                            Open tickets
                        </p>
                        <p class="text-lg font-semibold text-gray-700">
                            {{ $openTickets }}
                        </p>
                    </div>
                </div>
            </a>

            <!-- Closed Tickets Card -->
            <a href="{{ route('tickets.index', ['status' => 'closed']) }}" class="card bg-blue-100 text-blue-500">
                <div class="card-body flex items-center">
                    <div class="mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-600">
                            Closed tickets
                        </p>
                        <p class="text-lg font-semibold text-gray-700">
                            {{ $closedTickets }}
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>