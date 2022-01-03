<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Branches') }}
        </h2>
    </x-slot>
 
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10  py-8">
            <a href="branches/create" class="border-2 bg-orange-600 p-2 text-center border-solid text-white rounded-2xl pr-4	 pl-4">
                Add a Branch &rarr;    
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
                                    <div class="font-semibold text-left">Branch Code</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                  <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left"></div>
                                </th>
                                  <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left"></div>
                                </th>
                               
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($branches as $branch)
                            <tr>
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left font-medium text-gray-800">{{ $branch->id }}</div>
                                    </div>
                                </td>
                             
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="text-left font-medium text-gray-800">{{ $branch->branch_code }}</div>
                                    </div>
                                </td>
                           
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">{{ $branch->name }}</div>
                                </td>
                              
                               <td class="p-2 whitespace-nowrap">
                                    <a class="text-blue-500" href="branches/{{ $branch->id }}/edit">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                <form action="branches/{{ $branch->id }}" method="POST" class="p-2 whitespace-nowrap">
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
