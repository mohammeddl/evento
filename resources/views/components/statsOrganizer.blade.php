<section class="grid grid-cols-1 gap-8  px-6 xl:grid-cols-2 2xl:grid-cols-2 md:grid-cols-2 m-12">
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
                <h3 class="text-2xl font-medium text-gray-800">{{$accepted}}</h3>
                <p class="mt-1 text-sm text-gray-500">Event accepted</p>
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
                <h3 class="text-2xl font-medium text-gray-800">{{$pending}}</h3>
                <p class="mt-1 text-sm text-gray-500">Event unacceptable Yet</p>
            </div>
        </div>
    </div>

    </section>
