@extends('layouts.appp')
@section('title') Home @endsection

@section('content')

<section class="relative flex flex-col items-center justify-center w-full px-6 pb-6 bg-white bg-cover lg:pb-6 min-w-screen">
    <div class="flex flex-col items-center justify-center mx-auto sm:p-6 xl:px-8 lg:flex-row lg:max-w-6xl lg:px-0">
        <div class="container relative z-20 flex flex-col w-full px-5 pb-1 pr-12 mb-16 text-2xl text-gray-700 lg:w-1/2 sm:pr-0 md:pr-6 md:pl-0 lg:pl-5 xl:pr-10 sm:items-center lg:items-start lg:mb-0">
            <h1 class="relative z-20 text-5xl font-extrabold leading-none text-indigo-500 xl:text-6xl sm:text-center lg:text-left">
                Designed with<br>
                <span class="mt-1 text-gray-800 lg:mt-0">You in Mind</span>
            </h1>
            <p class="relative z-20 block mt-6 text-base text-gray-500 xl:text-xl sm:text-center lg:text-left">We've crafted the ultimate tool that helps you build the design of your dreams. Built with configuration in mind, you can fully customize every aspect.</p>
            <div class="relative flex mt-4">
                <a href="#_" class="flex items-center self-start justify-center px-5 py-2 mt-5 text-base font-medium leading-tight text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-full shadow lg:py-4 hover:bg-indigo-600 focus:outline-none focus:border-indigo-600 focus:shadow-outline-purple md:text-lg xl:text-xl md:px-5 xl:px-10">Get Started</a>
                <a href="#_" class="relative flex items-center self-start justify-center py-2 pl-10 pr-5 mt-5 ml-5 text-base font-medium leading-tight text-gray-400 transition duration-150 ease-in-out bg-gray-100 border-transparent rounded-full shadow-sm lg:py-4 md:pl-16 md:pr-5 xl:pr-10 hover:text-indigo-500 focus:outline-none md:text-lg xl:text-xl">
                    <svg class="absolute left-0 w-6 h-6 ml-3 md:w-10 md:h-10" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"></path></svg>
                    <span class="text-indigo-600">How It Works</span>
                </a>
            </div>
        </div>
        <div class="relative w-full px-5 rounded-lg cursor-pointer lg:w-1/2 group xl:px-0">
            <div class="absolute top-0 left-0 w-11/12 -mt-12 opacity-50">
                <svg class="w-full h-full ml-4 text-purple-100" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" d="M45,-78C58.3,-70.3,69,-58.2,75.2,-44.4C81.3,-30.7,82.9,-15.3,83.5,0.4C84.2,16,83.8,32.1,76.5,43.9C69.2,55.7,55.1,63.3,41.2,69.4C27.3,75.4,13.6,80,-0.7,81.2C-15.1,82.5,-30.1,80.3,-41.2,72.6C-52.2,64.9,-59.2,51.6,-67.1,38.5C-75.1,25.5,-83.9,12.8,-83.8,0C-83.8,-12.7,-74.9,-25.4,-65.8,-36.4C-56.7,-47.4,-47.4,-56.7,-36.4,-65.7C-25.4,-74.7,-12.7,-83.5,1.6,-86.2C15.9,-89,31.8,-85.7,45,-78Z" transform="translate(100 100)"></path></svg>
            </div>
            <div class="relative overflow-hidden rounded-md shadow-2xl cursor-pointer group">
                <section class=" dark:bg-gray-900">
                    <div class="container flex items-center justify-center  pb-6 px-6 mx-auto">

                        <form class="w-full max-w-md" method="POST" action="{{route('register.store')}}" enctype="multipart/form-data">
                            @csrf
                                <a href="#" class="flex items-center justify-center mt-10 text-gray-600 transition-colors duration-300 transform border rounded-lg dark:border-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <div class="px-4 py-2">
                                        <svg class="w-6 h-6" viewBox="0 0 40 40">
                                            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.045 27.2142 24.3525 30 20 30C14.4775 30 10 25.5225 10 20C10 14.4775 14.4775 9.99999 20 9.99999C22.5492 9.99999 24.8683 10.9617 26.6342 12.5325L31.3483 7.81833C28.3717 5.04416 24.39 3.33333 20 3.33333C10.7958 3.33333 3.33335 10.7958 3.33335 20C3.33335 29.2042 10.7958 36.6667 20 36.6667C29.2042 36.6667 36.6667 29.2042 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#FFC107" />
                                            <path d="M5.25497 12.2425L10.7308 16.2583C12.2125 12.59 15.8008 9.99999 20 9.99999C22.5491 9.99999 24.8683 10.9617 26.6341 12.5325L31.3483 7.81833C28.3716 5.04416 24.39 3.33333 20 3.33333C13.5983 3.33333 8.04663 6.94749 5.25497 12.2425Z" fill="#FF3D00" />
                                            <path d="M20 36.6667C24.305 36.6667 28.2167 35.0192 31.1742 32.34L26.0159 27.975C24.3425 29.2425 22.2625 30 20 30C15.665 30 11.9842 27.2359 10.5975 23.3784L5.16254 27.5659C7.92087 32.9634 13.5225 36.6667 20 36.6667Z" fill="#4CAF50" />
                                            <path d="M36.3425 16.7358H35V16.6667H20V23.3333H29.4192C28.7592 25.1975 27.56 26.805 26.0133 27.9758C26.0142 27.975 26.015 27.975 26.0158 27.9742L31.1742 32.3392C30.8092 32.6708 36.6667 28.3333 36.6667 20C36.6667 18.8825 36.5517 17.7917 36.3425 16.7358Z" fill="#1976D2" />
                                        </svg>
                                    </div>
                                    <span class="w-5/6 px-4 py-3 font-bold text-center">Sign in with Google</span>
                                </a>
                                <div class="flex items-center justify-between mt-4">
                                    <span class="w-1/5 border-b dark:border-gray-600 lg:w-1/4"></span>

                                    <a href="#" class="text-xs text-center text-gray-500 uppercase dark:text-gray-400 hover:underline">or login
                                        with email</a>

                                    <span class="w-1/5 border-b dark:border-gray-400 lg:w-1/4"></span>
                                </div>

                                <div class="mt-6">
                                    <h1 class="text-gray-500 dark:text-gray-300">Select type of account</h1>
                                    <div class="mt-3 md:flex md:items-center md:-mx-2">
                                        <select name="role" class="w-full px-6 py-3 text-indigo-500 border border-indigo-500 rounded-lg md:w-auto md:mx-2 dark:border-blue-400 dark:text-blue-400 focus:outline-none">
                                            <option value="user">User</option>
                                            <option value="organizer">Company</option>
                                        </select>
                                    </div>
                                </div>
                                <x-input-error :messages="$errors->get('role')" class="mt-2" />

                            <div class="relative flex items-center mt-8">
                                <span class="absolute">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                </span>
                                <input type="text" name="name" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Username">
                            </div>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            <label for="dropzone-file" class="flex items-center px-3 py-3 mx-auto mt-6 text-center bg-white border-2 border-dashed rounded-lg cursor-pointer dark:border-gray-600 dark:bg-gray-900">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                </svg>

                                <h2 class="mx-3 text-gray-400">Profile Photo</h2>

                                <input id="dropzone-file" name="image" type="file" class="hidden" />
                            </label>
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            <div class="relative flex items-center mt-6">
                                <span class="absolute">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </span>
                                <input type="email" name="email" class="block w-full py-3 text-gray-700 bg-white border rounded-lg px-11 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Email address">
                            </div>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <div class="relative flex items-center mt-4">
                                <span class="absolute">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-3 text-gray-300 dark:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                </span>
                                <input type="password" name="password" class="block w-full px-10 py-3 text-gray-700 bg-white border rounded-lg dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40" placeholder="Password">
                            </div>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <div class="mt-6">
                                <button class="w-full px-6 py-3 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-gray-800 rounded-lg hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                                    Sign Up
                                </button>

                                <div class="mt-6 text-center ">
                                    <a href="{{route('login')}}" class="text-sm text-gray-800 hover:underline dark:text-blue-400">
                                        Already have an account?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
@endsection
