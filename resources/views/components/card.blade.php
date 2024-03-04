<div class="px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8">
    <div class="grid gap-8 lg:grid-cols-3 sm:max-w-sm sm:mx-auto lg:max-w-full">
        @foreach ($eventFromDB as $item)
      <div class="overflow-hidden transition-shadow duration-300 bg-white rounded shadow-sm">
        <div>
            <div class="relative">
                <img src="{{asset('images/'. $item->image)}}" alt="img event" />
                <div class="absolute bottom-10 text-center">
                    <div class="absolute left-7 bg-white px-2 pb-[2px] rounded-2xl text-center">
                        <p class=" text-indigo-700 text-base font-semibold">{{$item->capacity}}</p>
                    </div>
                    <div class="absolute left-72 bg-indigo-700 px-2 pb-[2px] rounded-2xl text-center">
                        <p class="text-white text-base font-semibold">{{$item->status}}</p>
                    </div>
                </div>
            </div>
            </div>
        <div class="p-5 border border-t-0">
            <a href="/" aria-label="Category" title="Visit the East" class="inline-block mb-3 text-2xl font-bold leading-5 transition-colors duration-200 hover:text-deep-purple-accent-700">{{$item->title}}</a>
            <div class="flex justify-between pb-2">
              <p class="bg-indigo-700 text-1xl text-white rounded-3xl px-4 py-1 font-semibold" >{{$item->category}}</p>
              <span class="flex gap-1 text-gray-600 py-1"><svg xmlns="http://www.w3.org/2000/svg" class="mt-[6px]" height="12" width="10.5" viewBox="0 0 448 512"><path fill="#5353c6" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>{{$item->date}}</span>
              <span class="flex gap-1 text-gray-600 py-1"><svg xmlns="http://www.w3.org/2000/svg " class="mt-[6px]" height="14" width="10.5" viewBox="0 0 384 512"><path fill="#5353c6" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>{{$item->location}}</span>
            </div>
          <p class="mb-2 text-gray-700">
            {{$item->description}}
          </p>
          <div class="flex justify-between">
              <a href="{{route('event.show',[$item->id])}}" aria-label="" class="inline-flex items-center font-semibold transition-colors duration-200 text-deep-purple-accent-400 hover:text-deep-purple-800">Learn more</a>
                <form action="{{route('reserver')}}" method="POST">
                    @csrf
                    <input type="hidden" name="idEvent" value="{{$item->id}}">
                    <button>reserver</button>
                </form>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
