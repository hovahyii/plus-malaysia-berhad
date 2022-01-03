<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update Staff') }}
        </h2>
    </x-slot>
            

            <div class="flex justify-center  sm:px-6 lg:px-8 py-10 px-24">

                <form action="/staffs/{{ $staff->id }}" method="POST" class=" text-center">
                    @csrf
                    @method('PUT')
                    <div class="block pt-4">
                        <h1>Name</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="name"
                        value="{{ $staff->name }}">
                    </div>

                

                    <div class="block pt-4">
                        <h1>Email</h1>
                        <input type="email" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="email"
                        value="{{ $staff->email }}">
                    </div>

                    <div class="block pt-4">
                        <h1>Team</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2  w-80 placeholder-gray-400"
                        name="team"
                        value="{{ $staff->current_team_id }}">
                    </div>

                    <div class="block pt-4">
                        <h1>Profile Picture</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80  placeholder-gray-400"
                        name="profile"
                        value="{{ $staff->profile_photo_path }}">
                    </div>

                    <button type="submit" class="bg-violet-600 w-full justify-center text-white block shadow-5xl uppercase border-2 shadow-xl p-2 font-bold">
                        Submit
                    </button>

                </form>
          </div>
   

</x-app-layout>
