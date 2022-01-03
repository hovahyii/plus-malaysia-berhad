<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staffs') }}
        </h2>
    </x-slot>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10  py-8">
            <a href="staffs/create" class="border-2 bg-indigo-600 p-2 text-center border-solid text-white rounded-2xl pr-4	 pl-4">
                Add a new staff &rarr;    
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
                                    <div class="font-semibold text-left">Profile Picture</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                 <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Username</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Email</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">Team</div>
                                </th>
                                 <th class="p-2 whitespace-nowrap">
                                   
                                </th>
                                   <th class="p-2 whitespace-nowrap">
                                   
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($staffs as $staff)
                            <tr>
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $staff->id }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="rounded-full" src="/storage/{{ $staff->profile_photo_path }}" width="40" height="40" alt={{ $staff->name }}>
                                    </div>
                                </td>
                                 <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $staff->name }}</div>
                                    </div>
                                </td>
                                  <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{ $staff->username }}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{ $staff->email }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-gray-800">{{ $staff->current_team_id }}</div>
                                </td>
                               <td class="p-2 whitespace-nowrap">
                                    <a class="text-blue-500" href="staffs/{{ $staff->id }}/edit">
                                    <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                <form action="staffs/{{ $staff->id }}" method="POST" class="p-2 whitespace-nowrap">
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
