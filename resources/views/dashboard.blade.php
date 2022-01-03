<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
 
    <div class="py-12">
     
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             
            <div class=" overflow-hidden sm:rounded-lg">

         
 

                <!-- Full-width fluid until the `md` breakpoint, then lock to container -->
         
                 
                <section class="grid md:grid-cols-2 gap-4 grid-cols-1 lg:grid-cols-3">
                   

                     <div class="flex items-center px-6 py-5  shadow-sm rounded-md border bg-white  ">
                        <div class="rounded  bg-orange-600 bg-opacity-75">
                          <i class="fas fa-store fa-2x p-6 text-white" aria-hidden="true"></i>

                        </div>

                        <div class="mx-5 p-6">
                            <h4 class="text-2xl font-semibold text-gray-700">{{ $branches }}</h4>
                            <div class="text-gray-500">Branches</div>
                        </div>
                    </div>

                    <div class="flex items-center px-6 py-5 shadow-sm rounded-md border bg-white">
                        <div class="rounded bg-red-600 bg-opacity-75">
                          <i class="fa fa-fire-extinguisher fa-2x p-6 text-white" aria-hidden="true"></i>

                        </div>

                        <div class="mx-5 p-6">
                            <h4 class="text-2xl font-semibold text-gray-700">{{ $fireExtinguishers }}</h4>
                            <div class="text-gray-500">Fire Extinguishers</div>
                        </div>
                    </div>

                     <div class="flex items-center px-6 py-5 shadow-sm rounded-md border bg-white  ">
                        <div class="rounded bg-indigo-600 bg-opacity-75">
                          <i class="fas fa-id-card-alt fa-2x p-6 text-white" aria-hidden="true"></i>

                        </div>

                        <div class="mx-5 p-6">
                            <h4 class="text-2xl font-semibold text-gray-700">{{ $staffs }}</h4>
                            <div class="text-gray-500">Staffs</div>
                        </div>
                    </div>

                   

                </section>
            </div>
        </div>
    </div>
</x-app-layout>
