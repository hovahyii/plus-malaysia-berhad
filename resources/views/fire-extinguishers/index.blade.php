<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Fire Extinguishers') }}
        </h2>
    </x-slot>
 
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10  py-8">
            <a href="fire-extinguishers/create" class="border-2 bg-red-600 p-2 text-center border-solid text-white rounded-2xl pr-4	 pl-4">
                Add a Fire Extinguisher &rarr;    
            </a>
         </div>

    <div class="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

       
      

                <!-- Full-width fluid until the `md` breakpoint, then lock to container -->

            

            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr> 
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">ID</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Serial Numbers</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Location</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Expiry Date</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Type</div>
                                </th>
                                 <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Weight</div>
                                </th>
                                  <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Brand</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($fireExtinguishers as $fireExtinguisher)
                            <tr>
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $fireExtinguisher->id }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                   <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $fireExtinguisher->serial_numbers }}</div>
                                    </div>
                                </td>
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $fireExtinguisher->branch->branch_code }}</div>

                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $fireExtinguisher->expiry_date }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">{{ $fireExtinguisher->type }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">{{ $fireExtinguisher->weight }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">{{ $fireExtinguisher->brand }}</div>
                                </td>
                               <td class="p-2 whitespace-nowrap">
                                    <a class="text-blue-500" href="fire-extinguishers/{{ $fireExtinguisher->id }}/edit">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                <form action="fire-extinguishers/{{ $fireExtinguisher->id }}" method="POST" class="p-2 whitespace-nowrap">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="text-red-500"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                            </tr>
                                                            @endforeach
           
                        </tbody>
                    </table>
                </div>
            </div>
     
                    

            </div>
        </div>
    </div>
</x-app-layout>
