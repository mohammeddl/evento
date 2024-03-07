<x-app-layout>
    <section>
        <div class="relative h-[120vh] lg:flex">
            <aside id="sidebar" :class="isOpen ? 'translate-x-0 ease-in' : '-translate-x-full ease-out'" class="fixed inset-y-0 left-0 z-30 flex flex-col w-[4.5rem] min-h-screen space-y-6 overflow-y-auto text-gray-100 transition duration-200 transform bg-indigo-950 lg:translate-x-0 lg:relative lg:inset-0">
                <div class="flex flex-col items-center flex-1 space-y-6">
                    <nav class="flex flex-col items-center space-y-6">
                        <a href="{{route('admin')}}" class="p-2  mt-6 transition-colors duration-300 rounded-lg group hover:bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </a>
                        <a href="#" class="p-3  transition-colors duration-300 bg-white rounded-lg">
                            <svg class="w-5 h-5 group-hover:stroke-blue-700 " xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#999999" d="M500.3 7.3C507.7 13.3 512 22.4 512 32V176c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V71L352 90.2V208c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V64c0-15.3 10.8-28.4 25.7-31.4l160-32c9.4-1.9 19.1 .6 26.6 6.6zM74.7 304l11.8-17.8c5.9-8.9 15.9-14.2 26.6-14.2h61.7c10.7 0 20.7 5.3 26.6 14.2L213.3 304H240c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V352c0-26.5 21.5-48 48-48H74.7zM192 408a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM478.7 278.3L440.3 368H496c6.7 0 12.6 4.1 15 10.4s.6 13.3-4.4 17.7l-128 112c-5.6 4.9-13.9 5.3-19.9 .9s-8.2-12.4-5.3-19.2L391.7 400H336c-6.7 0-12.6-4.1-15-10.4s-.6-13.3 4.4-17.7l128-112c5.6-4.9 13.9-5.3 19.9-.9s8.2 12.4 5.3 19.2zm-339-59.2c-6.5 6.5-17 6.5-23 0L19.9 119.2c-28-29-26.5-76.9 5-103.9c27-23.5 68.4-19 93.4 6.5l10 10.5 9.5-10.5c25-25.5 65.9-30 93.9-6.5c31 27 32.5 74.9 4.5 103.9l-96.4 99.9z"/></svg>
                        </a>
                    </nav>
                </div>
            </aside>
            <section class="flex flex-col w-full h-24 px-6 md:justify-between md:items-center md:flex-row">
                <div>
                    <h2 class="text-3xl font-medium text-gray-800">Dashboard</h2>
                    <p class="mt-2 text-sm text-gray-500">Mobile UX/UI Design Course</p>
                </div>
                <div class="flex flex-col mt-6 md:flex-row md:-mx-1 md:mt-0">

                    <button onclick="clickHiddenn()" class="px-6 py-3 focus:outline-none mt-4 text-white bg-indigo-900 rounded-lg md:mt-0 md:mx-1 hover:bg-blue-500">
                        <div class="flex items-center justify-center -mx-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                            <span class="mx-1 text-sm capitalize">Create new Category</span>
                        </div>
                    </button>
                </div>
                <div class="p-14 ">
                    <h2 class="text-gray-500 text-xs font-medium uppercase tracking-wide">Categorys</h2>
                    <ul role="list" class="mt-3  grid grid-cols-1 gap-5 sm:gap-6 sm:grid-cols-2 lg:grid-cols-2">
                        @foreach($categories as $category)
                            <li class="w-44 h-26 max-w-xs overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                                <div class="py-1 text-center">
                                    <p class="block text-xs font-bold text-gray-800 dark:text-white" id="name{{$category->id}}">{{$category->category_name}}</p>
                                    <input type="hidden" id="category{{$category->id}}" value="{{$category->id}}">
                                </div>
                                <div class=" flex justify-between p-3">
                                    <div class="cursor-pointer" onclick="clickHiddenTagg({{$category->id}})"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                            <path fill="#1e1b4b" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg></div>
                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" height="14" width="12" viewBox="0 0 448 512">
                                            <path fill="#1e1b4b" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" />
                                            </svg>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                    </ul>
                </div>
            </section>
            @include('components.formCategory')

        </div>
    </section>
    <script>
        function clickHiddenTagg(id) {
                        formHidden = document.getElementById("formHidden");
                        if (formHidden.style.display === 'none') {
                            formHidden.style.display = "block";
                        }

                        let idCategory = document.getElementById('category' + id).value;
                        let nameTag = document.getElementById('name' + id).innerText;

                        document.getElementById('id2').value = idCategory;
                        document.getElementById('nameCategory').value = nameTag;
                    }

                    function hidePopupEditt() {
                        formHidden = document.getElementById("formHidden");
                        if (formHidden.style.display === 'block') {
                            formHidden.style.display = "none";
                        }
                    }


                    function clickHiddenn() {
                        formHidden = document.getElementById("formHidden1");
                        if (formHidden.style.display === 'none') {
                            formHidden.style.display = "block";
                        }
                    }
                    function hidePopupp() {
                        formHidden = document.getElementById("formHidden1");
                        if (formHidden.style.display === 'block') {
                            formHidden.style.display = "none";
                        }
                    }
    </script>
    </x-app-layout>
