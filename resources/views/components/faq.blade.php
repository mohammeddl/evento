<section class="py-24 bg-black">
    <div class="max-w-3xl px-8 mx-auto lg:px-16">
        <h2 class="mb-2 text-xl font-bold text-white md:text-3xl">Frequently Asked Questions</h2>

        <div class="relative mt-2 mt-8">
            <!-- Question 1 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span> What is Evento?</span>
                    <svg class="w-6 h-6 text-indigo-500 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Evento is an innovative platform dedicated to managing and reserving event spaces. Our goal is to provide an optimal user experience for participants, organizers, and administrators.</p>
            </div>

            <!-- Question 2 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span>How does Evento work?</span>
                    <svg class="w-6 h-6 text-indigo-500 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Evento allows users to discover, reserve, and generate tickets for a wide range of events. Organizers can create and manage their own events through the platform.</p>
            </div>

            <!-- Question 3 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span>How do I create an account on Evento?</span>
                    <svg class="w-6 h-6 text-indigo-500 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">To create an account on Evento, simply navigate to the registration page and fill out the required information, including your first name, last name, email, and password. Once registered, you'll have access to all of Evento's features.</p>
            </div>

        </div>

    </div>
</section>
