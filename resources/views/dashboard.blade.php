<x-app-layout>
@include('components.formEvent')
<div class="bg-white flex w-full flex-row-reverse p-6">
    <button onclick="clickHidden()" class="  px-6 py-3 focus:outline-none mt-4  text-white bg-indigo-900 rounded-lg md:mt-0 md:mx-1 hover:bg-gray-600">
        <div class="flex items-center justify-center -mx-1">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
            <span class="mx-1 text-sm capitalize">Create new Category</span>
        </div>
    </button>
</div>
@include('components.statsOrganizer')
@include('components.cardDashboard')

</x-app-layout>
