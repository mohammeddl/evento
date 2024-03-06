<div class="bg-gray-50 py-10">
    <form id="searchForm" class="mx-auto  flex flex-col md:flex-row items-center justify-center gap-2">
        @csrf
        <input type="text" id="title" name="title" placeholder="Title" class="px-4 py-2 w-full md:w-auto rounded-md outline-none bg-white border border-gray-300 focus:border-gray-500">
        <input class="px-4 py-2 w-full md:w-auto rounded-md outline-none bg-white border border-gray-300 focus:border-gray-500" type="text" id="location" name="location" placeholder="Location">
        <button type="submit" id="searchBtn" class="px-6 py-2 bg-black text-white rounded-xl transition-all hover:bg-gray-800 focus:outline-none focus:bg-gray-800">
            Search
        </button>
    </form>
</div>

<div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
    <div id="result">

    </div>
</div>
