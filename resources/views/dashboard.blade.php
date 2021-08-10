<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-2">
                    <div class="p-10">
                        <h2 class="font-bold text-xl">Leads</h2>
                        <div class="p-10">
                            {!! $leads->container() !!}
                        </div>
                    </div>
                    <div class="p-10">
                        <h2 class="font-bold text-xl">Tareas</h2>
                        <div class="p-10">
                            {!! $tasks->container() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ $leads->cdn() }}"></script>
    {{ $leads->script() }}
    {{ $tasks->script() }}
</x-app-layout>
