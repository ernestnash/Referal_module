<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div id="greetings" class="p-6 text-gray-900">
                    {{__('Hello')}}
                    {{ Auth::user()->name }}
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    <script>
        time = document.querySelector("#greetings");

        setTimeout(()=> {
            time.remove();
        }, 5000)
    </script>
</x-app-layout>
