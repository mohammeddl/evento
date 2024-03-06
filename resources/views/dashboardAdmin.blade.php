<x-app-layout>
<section>
    <div class="relative h-[120vh] lg:flex">
        <aside id="sidebar" :class="isOpen ? 'translate-x-0 ease-in' : '-translate-x-full ease-out'" class="fixed inset-y-0 left-0 z-30 flex flex-col w-[4.5rem] min-h-screen space-y-6 overflow-y-auto text-gray-100 transition duration-200 transform bg-indigo-950 lg:translate-x-0 lg:relative lg:inset-0">
            <div class="flex flex-col items-center flex-1 space-y-6">
                <nav class="flex flex-col items-center space-y-6">
                    <a href="#" class="p-3 mt-6 transition-colors duration-300 bg-white rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-blue-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                        </svg>
                    </a>
                    <a href="{{route('category')}}" class="p-2 transition-colors duration-300 rounded-lg group hover:bg-white">
                        <svg class="w-5 h-5 group-hover:stroke-blue-700 " xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#999999" d="M500.3 7.3C507.7 13.3 512 22.4 512 32V176c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V71L352 90.2V208c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V64c0-15.3 10.8-28.4 25.7-31.4l160-32c9.4-1.9 19.1 .6 26.6 6.6zM74.7 304l11.8-17.8c5.9-8.9 15.9-14.2 26.6-14.2h61.7c10.7 0 20.7 5.3 26.6 14.2L213.3 304H240c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V352c0-26.5 21.5-48 48-48H74.7zM192 408a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM478.7 278.3L440.3 368H496c6.7 0 12.6 4.1 15 10.4s.6 13.3-4.4 17.7l-128 112c-5.6 4.9-13.9 5.3-19.9 .9s-8.2-12.4-5.3-19.2L391.7 400H336c-6.7 0-12.6-4.1-15-10.4s-.6-13.3 4.4-17.7l128-112c5.6-4.9 13.9-5.3 19.9-.9s8.2 12.4 5.3 19.2zm-339-59.2c-6.5 6.5-17 6.5-23 0L19.9 119.2c-28-29-26.5-76.9 5-103.9c27-23.5 68.4-19 93.4 6.5l10 10.5 9.5-10.5c25-25.5 65.9-30 93.9-6.5c31 27 32.5 74.9 4.5 103.9l-96.4 99.9z"/></svg>
                    </a>
                </nav>
            </div>
        </aside>
        <main id="content" class="flex-1 pb-12 space-y-6  bg-gray-100 lg:h-screen md:space-y-8">
            <section class="flex flex-col h-24 w-full px-6 md:justify-between md:items-center md:flex-row">
                <div>
                    <h2 class="text-3xl font-medium text-gray-800">Dashboard</h2>
                    <p class="mt-2 text-sm text-gray-500">Welcome Admin</p>
                </div>
            </section>

            <section class="grid grid-cols-1 gap-8 px-6 xl:grid-cols-3 2xl:grid-cols-4 md:grid-cols-2 ">
                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#713BDB" fill-opacity="0.05" />
                            <path d="M26 44C26 40.625 30.5 40.625 32.75 38.375C33.875 37.25 30.5 37.25 30.5 31.625C30.5 27.8754 31.9996 26 35 26C38.0004 26 39.5 27.8754 39.5 31.625C39.5 37.25 36.125 37.25 37.25 38.375C39.5 40.625 44 40.625 44 44" stroke="#6F52ED" stroke-width="2" stroke-linecap="square" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">{{$countUsers}}</h3>
                            <p class="mt-1 text-sm text-gray-500">Users</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#33D69F" fill-opacity="0.07" />
                            <path d="M26 39L31 34" stroke="#21B8C7" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M32 34C32.5523 34 33 33.5523 33 33C33 32.4477 32.5523 32 32 32C31.4477 32 31 32.4477 31 33C31 33.5523 31.4477 34 32 34Z"
                                stroke="#21B8C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M37 39C37.5523 39 38 38.5523 38 38C38 37.4477 37.5523 37 37 37C36.4477 37 36 37.4477 36 38C36 38.5523 36.4477 39 37 39Z"
                                stroke="#21B8C7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M38 37L44 31M33 34L36 37L33 34Z" stroke="#21B8C7" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">6.8</h3>
                            <p class="mt-1 text-sm text-gray-500">Average mark</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#FF4C61" fill-opacity="0.05" />
                            <path d="M26 32L32 38L36 34L43.405 41.405" stroke="#FF4C61" stroke-width="2"
                                stroke-linecap="square" />
                            <path d="M43.405 41.405L44 42" stroke="#FF4C61" stroke-width="2" stroke-linecap="round" />
                            <path d="M44 39V42H41" stroke="#FF4C61" stroke-width="2" stroke-linecap="square" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">9 <span class="text-xl text-gray-600">(14%)</span></h3>
                            <p class="mt-1 text-sm text-gray-500">Underperforming students</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#4CB8FF" fill-opacity="0.07" />
                            <path
                                d="M42 26V44H31C30.2044 44 29.4413 43.6839 28.8787 43.1213C28.3161 42.5587 28 41.7956 28 41V29C28 28.2044 28.3161 27.4413 28.8787 26.8787C29.4413 26.3161 30.2044 26 31 26H42Z"
                                stroke="#4CB8FF" stroke-width="2" stroke-linecap="square" />
                            <path d="M28 41C28 40.2044 28.3161 39.4413 28.8787 38.8787C29.4413 38.3161 30.2044 38 31 38H42"
                                stroke="#4CB8FF" stroke-width="2" stroke-linecap="square" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">92%</h3>
                            <p class="mt-1 text-sm text-gray-500">Finished homeworks</p>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col justify-center px-8 py-6 bg-white rounded-lg shadow-md shadow-gray-200 md:col-span-2 md:row-span-2 gap-y-4 gap-x-8 ">
                    <div class="sm:flex sm:items-center sm:justify-between">
                        <h2 class="font-medium text-gray-700">The Events </h2>
                        <div class="flex items-center mt-4 -mx-2 sm:mt-0">
                        </div>
                    </div>
                    @foreach($events as $event)
                    <div class="flex items-center justify-between ">
                        <div class="flex items-center">
                            <img class="w-10 h-10 overflow-hidden bg-gray-100 rounded-full object-cover" src="{{asset('images/'.$event->image)}}">
                            <span class="mx-3 text-gray-600">{{$event->title}}</span>
                            <span class="mx-3 text-gray-600">{{$event->category}}</span>
                            <span class="mx-3 text-gray-600">price</span>
                        </div>
                        <form action="{{route('event.accepation')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <input type="hidden" value="{{$event->id}}" name="id">
                            <button class=" transition-colors duration-300 rounded-lg group hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="17.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#19d29a" d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zM337 209L209 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L303 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/></svg></button>
                        </form>
                    </div>
                    @endforeach
                    <canvas class="max-w-3xl max-h-96" id="secondChart">
                    </canvas>
                </div>

                <div class="row-span-3 bg-white rounded-lg h-2/3 shadow-md shadow-gray-200">
                    <div class="px-6 py-5 border-b border-gray-100 sm:flex sm:items-center sm:justify-between">
                        <h2 class="font-medium text-gray-700">Users by average mark</h2>
                    </div>
                    <div class="p-6 space-y-6">
                        @foreach($users as $user)
                        <div class="flex items-center justify-between ">
                            <div class="flex items-center">
                                <img class="w-10 h-10 overflow-hidden bg-gray-100 rounded-full object-cover" src="{{asset('images/'.$user->image)}}">
                                <span class="mx-3 text-gray-600">{{$user->name}}</span>
                            </div>
                            <form action="{{route('user.destroy',[$user->id])}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class=" transition-colors duration-300 rounded-lg group hover:bg-gray-200"><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512"><path d="M367.2 412.5L99.5 144.8C77.1 176.1 64 214.5 64 256c0 106 86 192 192 192c41.5 0 79.9-13.1 111.2-35.5zm45.3-45.3C434.9 335.9 448 297.5 448 256c0-106-86-192-192-192c-41.5 0-79.9 13.1-111.2 35.5L412.5 367.2zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256z"/></svg></button>
                            </form>
                        </div>
                    @endforeach
                    </div>
                </div>

                <div class=" bg-white rounded-lg shadow-md shadow-gray-200 lg:row-span-2">
                    <div class="px-6 py-5 border-b border-gray-100">
                        <h2 class="font-medium text-gray-700">Students by type of studying</h2>
                    </div>

                    <div class="flex items-center p-8">
                        <canvas class="max-w-sm" id="myChart"> </canvas>
                    </div>
                </div>

                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#FFB800" fill-opacity="0.07" />
                            <path d="M30 44H40M29 25H41V34C41 37.3137 38.3137 40 35 40C31.6863 40 29 37.3137 29 34V25Z"
                                stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M35 40V44" stroke="#FFB800" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M29 28V34H28C26.3431 34 25 32.6569 25 31C25 29.3431 26.3431 28 28 28H29ZM41 34V28H42C43.6569 28 45 29.3431 45 31C45 32.6569 43.6569 34 42 34H41Z"
                                stroke="#FFB800" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">25</h3>
                            <p class="mt-1 text-sm text-gray-500">Lections left</p>
                        </div>
                    </div>
                </div>

                <div class="flex items-center px-6 py-8 bg-white rounded-lg shadow-md shadow-gray-200 ">
                    <div class="flex items-center -mx-2">
                        <svg class="mx-2" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="35" cy="35" r="35" fill="#4CB8FF" fill-opacity="0.07" />
                            <path
                                d="M35 45C40.5228 45 45 40.5228 45 35C45 29.4772 40.5228 25 35 25C29.4772 25 25 29.4772 25 35C25 40.5228 29.4772 45 35 45Z"
                                stroke="#4CB8FF" stroke-width="2" stroke-linecap="square" />
                            <path d="M35 28V35L39 39" stroke="#4CB8FF" stroke-width="2" stroke-linecap="square" />
                        </svg>

                        <div class="mx-2">
                            <h3 class="text-2xl font-medium text-gray-800">139</h3>
                            <p class="mt-1 text-sm text-gray-500">Hours spent on lections</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</section>
</x-app-layout>
