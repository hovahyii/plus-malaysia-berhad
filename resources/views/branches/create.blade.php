<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Branch') }}
        </h2>
    </x-slot>
            

            <div class="flex justify-center  sm:px-6 lg:px-8 py-10 px-24">

                <form action="/branches" method="POST" class=" text-center">
                      @csrf
                    <div class="block pt-4">
                        <h1>Branch Code</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="branch_code"
                        placeholder="PLUS C3">
                    </div>

                    <div class="block pt-4">
                        <h1>Name</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="name"
                        placeholder="Laybay Rawang">
                    </div>

                 
                    <button type="submit" class="bg-orange-600 w-full justify-center text-white block shadow-5xl uppercase border-2 shadow-xl p-2 font-bold">
                        Submit
                    </button>

                </form>
          </div>
   

</x-app-layout>
