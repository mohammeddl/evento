<div class="relative pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
    <div class="absolute inset-0">
        <div class="bg-white h-1/3 sm:h-2/3"></div>
    </div>
    <div class="relative max-w-7xl mx-auto">
      <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
        @foreach($events as $item)
          <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
            <div class="flex-shrink-0">
              <img class="h-48 w-full object-cover" src="{{asset('images/'. $item->image)}}">
            </div>
            <div class="flex-1 bg-white p-6 flex flex-col justify-between">
              <div class="flex-1">
                <p class="text-sm font-medium text-indigo-600">
                  <a href="#" class="hover:underline">
                    {{$item->category->category_name}}
                  </a>
                </p>
                <a href="#" class="block mt-2">
                  <p class="text-xl font-semibold text-gray-900">
                    {{$item->title}}
                  </p>
                  <p class="mt-3 text-base text-gray-500">
                    {{$item->description}}
                  </p>
                </a>
              </div>
              <div class="mt-6 flex items-center justify-between">
                <div class="flex gap-2">
                    <form action="{{route('event.destroy')}}" method="POST">
                        <input type="hidden" name="idEvent" value="{{$item->id}}" >
                        <button><svg xmlns="http://www.w3.org/2000/svg" height="12" width="10.5" viewBox="0 0 448 512"><path fill="#524582" d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>
                            </button>
                    </form>
                    <a href="{{route('event.edit',[$item->id])}}"><svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512"><path fill="#1c293f" d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z"/></svg></a>
                </div>
                <div class="ml-3">
                  <div class="flex space-x-1 text-sm text-gray-500">
                    <time datetime="2020-03-16">
                      {{$item->date}}
                    </time>
                  </div>
                </div>
                <button>test</button>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        {{$events->links()}}
    </div>
</div>
