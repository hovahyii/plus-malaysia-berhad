<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Fire Extinguisher') }}
        </h2>
    </x-slot>
            

            <div class="flex justify-center  sm:px-6 lg:px-8 py-10 px-24">

                <form action="/fire-extinguishers/{{ $fireExtinguisher->id }}" method="POST" class=" text-center">
                    @csrf
                    @method('PUT')
                  <div class="block pt-4">
                       <h1 for="location">Choose a location:</h1>


                            <select  class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"  name="location" id="location">
                                <option disabled selected value> -- select an option -- </option>
                                 <option selected value="{{  $fireExtinguisher->location }}">{{  $fireExtinguisher->branch->branch_code }}</option>
                                @foreach ($branches as $branch) 
                                    <option value="{{ $branch->id }}">{{ $branch->branch_code }}</option>
                                @endforeach

                            </select>

                     

                       
                    </div>

                    <div class="block pt-4">
                        <h1>Expiry Date</h1>
                        <input type="date" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="expiry_date"
                        value={{  $fireExtinguisher->expiry_date }}>
                    </div>

                     <div class="block pt-4">
                        <h1>Serial Numbers</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="serial_numbers"
                        value={{  $fireExtinguisher->serial_numbers }}>
                    </div>

                    <div class="block pt-4">
                        <h1>Type</h1>
                       <select  class="block shadow-5xl mb-10 p-2 w-80 placeholder-gray-400"  name="type" id="type">
                               <option disabled selected value> -- select an option -- </option>
                                 <option selected value="{{  $fireExtinguisher->type }}">{{  $fireExtinguisher->type }}</option>

                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="E">E</option>
                        </select>
                    </div>

                    <div class="block pt-4">
                        <h1>Weight</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="weight"
                        value={{  $fireExtinguisher->weight }}>
                    </div>

                    <div class="block pt-4">
                        <h1>Brand</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="brand"
                        value={{  $fireExtinguisher->brand }}>
                    </div>

                 
                    <button type="submit" class="bg-red-600 w-full justify-center text-white block shadow-5xl uppercase border-2 shadow-xl p-2 font-bold">
                        Submit
                    </button>

                </form>
          </div>
   

</x-app-layout>
