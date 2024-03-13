<div class="bg-white py-10">
    <div class="mx-auto max-w-7xl">

  <div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-gray-900">Acceptation</h1>
        <p class="mt-2 text-sm text-gray-700">Reservation <strong class="font-semibold text-gray-900">Events</strong> </p>
      </div>
    </div>
    <div class="-mx-4 mt-10 ring-1 ring-gray-300 sm:-mx-6 md:mx-0 md:rounded-lg">
      <table class="min-w-full divide-y divide-gray-300">
        <thead>
          <tr>
              <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Images</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Users</th>
              <th scope="col" class="hidden px-3 py-3.5 text-left text-sm font-semibold text-gray-900 lg:table-cell">Events</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
            </th>
          </tr>
        </thead>
        <tbody>

        @foreach ($reservation as $item)
            <tr>
              <td class="relative py-4 pl-4 sm:pl-6 pr-3 text-sm ">
                <div class="font-medium text-gray-900">
                    <img class="w-10 h-10 overflow-hidden bg-gray-100 rounded-full object-cover" src="{{asset('images/'.$item->user->image)}}">
                  </div>
                <div class="mt-1 flex flex-col text-gray-500 sm:block lg:hidden">
                  <span></span>
                </div>
                </td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell ">{{$item->user->name}}</td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell ">{{$item->event->title}}</td>
              <td class="hidden px-3 py-3.5 text-sm text-gray-500 lg:table-cell ">{{$item->event->price}}$</td>

              <td class="relative py-3.5 pl-3 pr-2 sm:pr-4 text-right text-sm font-medium ">
                <form action="{{route('reservation.update')}}" method="POST">
                    @csrf
                    @method("patch")
                    <input type="hidden" name="price" value="{{$item->event->price}}">
                    <input type="hidden" name="email" value="{{$item->user->email}}">
                    <input type="hidden" name="nameUser" value="{{$item->user->name}}">
                    <input type="hidden" name="idReservation" value="{{$item->id}}">
                    <button class="inline-flex items-center rounded-md border border-gray-300 bg-white px-3 py-2 text-sm font-medium leading-4 text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2">select</button>
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
