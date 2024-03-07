
<div class="flex items-center justify-center flex-wrap mx-auto max-w-7xl md:px-0 gap-4 ">
    <button class="bg-gray-900 hover:bg-indigo-700 text-white font-bold py-2 px-5 rounded-3xl ">
        ALL
    </button>
@foreach($categories as $category)
    <form action="{{route('filter')}}" method="POST">
        @csrf
        <input name="idCategory" type="hidden" value="{{$category->id}}">
        <button class="@if($category->id == $category->id) bg-gray-900 @else bg-indigo-700 @endif hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-3xl ">
            {{$category->category_name}}
        </button>
    </form>
@endforeach
</div>
