<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Staff') }}
        </h2>
    </x-slot>
            

            <div class="flex justify-center  sm:px-6 lg:px-8 py-10 px-24">

                <form action="/staffs" method="POST" class=" text-center">
                      @csrf
                    <div class="block pt-4">
                        <h1>Name</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="name"
                        placeholder="John Doe">
                    </div>

                    <div class="block pt-4">
                        <h1>Username</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="username"
                        placeholder="johndoe">
                    </div>

                    <div class="block pt-4">
                        <h1>Email</h1>
                        <input type="email" 
                        class="block shadow-5xl mb-10 p-2   w-80 placeholder-gray-400"
                        name="email"
                        placeholder="johndoe@gmail.com">
                    </div>

                    <div class="block pt-4">
                        <h1>Password</h1>
                        <input type="password" 
                        class="block shadow-5xl mb-10 p-2    w-80 placeholder-gray-400"
                        name="password"
                        placeholder="">
                    </div>

                    <div class="block pt-4">
                        <h1>Team</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2  w-80 placeholder-gray-400"
                        name="team"
                        placeholder="">
                    </div>

                    <div class="block pt-4">
                        <h1>Profile Picture</h1>
                        <input type="text" 
                        class="block shadow-5xl mb-10 p-2   w-80  placeholder-gray-400"
                        name="profile"
                        placeholder="">
                    </div>

                    <button type="submit" class="bg-violet-600 w-full justify-center text-white block shadow-5xl uppercase border-2 shadow-xl p-2 font-bold">
                        Submit
                    </button>

                </form>
          </div>
   

</x-app-layout>
