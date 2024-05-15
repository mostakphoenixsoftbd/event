<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events Page') }}
        </h2>
        <div>
            <a href="{{ route('events.create')}}" class="dark:text-white hover:text-slate-200"> New Event </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>This is Events Page.
            </h1>
            <h2>All events will go here...</h2>

        </div>
    </div>
</x-app-layout>
