<div class="relative">
    <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
      <div class="relative sm:py-12 lg:py-0">
        <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0  lg:w-screen">
          <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
          <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
            <defs>
              <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
              </pattern>
            </defs>
            <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)"></rect>
          </svg>
        </div>
        <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
          <!-- Testimonial card-->
          <div class="relative pt-64 pb-10 rounded-2xl shadow-xl overflow-hidden">
            <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('images/'. $item->image)}}" alt="">
            <div class="absolute inset-0 bg-gray-100 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-gray-800 via-gray-700 opacity-90"></div>
            <div class="relative px-8">
              <blockquote class="mt-8">
                <div class="relative text-lg font-medium text-white md:flex-grow">

                  <p class="relative h-40">
                    {{$item->title}}
                  </p>
                </div>

                <footer class="mt-4">
                  {{-- <p class="text-base font-semibold text-rose-200">{{$item->companie->user->name}}, CEO at {{$offers->companie->slogan}} </p> --}}
                </footer>
              </blockquote>
            </div>
          </div>
        </div>
      </div>

      <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
        <!-- Content area -->
        <div class="pt-12 sm:pt-16 lg:pt-20">
          <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
            {{$item->title}}
          </h2>
          <div class="mt-6 text-gray-500 space-y-6">
            <p class="text-lg h-40">
              {{$item->description}}
            </p>
          </div>
        </div>

        <!-- Stats section -->
        <div class="mt-10">
          <dl class="grid grid-cols-2 gap-x-4 gap-y-8">

              <div class="border-t-2 border-gray-100 pt-6">
                <dt class="text-base font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="60.5" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#585b5f" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg></dt>
                <dd class="text-2xl font-extrabold tracking-tight uppercase text-gray-900">{{$item->location}}</dd>
              </div>

              <div class="border-t-2 border-gray-100 pt-6 px-4">
                <dt class="text-base font-medium text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" height="20" width="60.5" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#575757" d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/></svg></dt>
                <dd class="text-2xl px-4 font-extrabold tracking-tight text-gray-900">{{$item->capacity}}</dd>
              </div>

             

                <form action="{{route('reserver')}}" method="POST" class="flex justify-center w-36 p-3 my-8 font-medium bg-gray-800 rounded-full hover:bg-gray-700 text-green-50">
                    @csrf
                <input type="hidden" name="idEvent" value="{{$item->id}}">
                    <button class="text-2xl">Reserver</button>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 mx-1"  width="12" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#8a8a8a" d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"/></svg>
                </form>
          </dl>
        </div>
      </div>
    </div>
  </div>
