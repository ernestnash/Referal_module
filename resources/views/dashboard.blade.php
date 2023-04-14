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

    <div class=" p-6 row row-cols-1 row-cols-md-6 g-4">
        <div class="col">
            <a href="">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title p-6">search facilities</h5>
                    </div>
                  </div>
              </a>
        </div>
        <div class="col">
            <a href="">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title p-6">Medical Terms</h5>
                    </div>
                  </div>
              </a>
        </div>
        <div class="col">
          <a href="">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title p-6">Refer</h5>
                </div>
              </div>
          </a>
        </div>
    </div>


    <script>
        time = document.querySelector("#greetings");

        setTimeout(()=> {
            time.remove();
        }, 5000)
    </script>
</x-app-layout>
