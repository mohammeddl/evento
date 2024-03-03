<section class="py-24 bg-gray-900">
    <div class="max-w-3xl px-8 mx-auto lg:px-16">
        <h2 class="mb-2 text-xl font-bold text-white md:text-3xl">Frequently Asked Questions</h2>

        <div class="relative mt-2 mt-8">
            <!-- Question 1 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span>Where do I go to upgrade my account?</span>
                    <svg class="w-6 h-6 text-green-400 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You can upgrade your account by visiting The Pro Upgrade Page. You will also gain access to many other applications and sections of the site.</p>
            </div>

            <!-- Question 2 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span>How do I use Tails in my project?</span>
                    <svg class="w-6 h-6 text-green-400 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">Implementation in your project is very simple. You can use the exported page as a starting point, or you can copy and paste the HTML into your own page.</p>
            </div>

            <!-- Question 3 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                    <span>How long will I have access to Tails?</span>
                    <svg class="w-6 h-6 text-green-400 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You will have unlimited access to all your pre-built pages; however, if you want to be able to download and export your pages, you'll need a pro account. Paddle for processing payments.</p>
            </div>


            <!-- Question 4 -->
            <div x-data="{ show: false }" class="relative overflow-hidden text-white select-none">
                <h4 @click="show=!show" class="flex items-center justify-between py-5 text-lg font-medium text-gray-100 cursor-pointer sm:text-xl hover:text-white">
                <span>What is the license on the pages?</span>
                    <svg class="w-6 h-6 text-green-400 transition-all duration-200 ease-out transform rotate-0 fill-current" :class="{ '-rotate-45' : show }" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                </h4>
                <p class="px-1 pt-0 mt-1 text-gray-300 sm:text-lg py-7" x-transition:enter="transition-all ease-out duration-300" x-transition:enter-start="opacity-0 transform -translate-y-4" x-transition:enter-end="opacity-100 transform -translate-y-0" x-transition:leave="transition-all ease-out hidden duration-200" x-transition:leave-start="opacity-100 transform -translate-y-0" x-transition:leave-end="opacity-0 transform -translate-y-4" x-show="show" x-cloak="">You have unlimited use to the templates used in Tails; however, you cannot re-use the templates to sell for others to use.</p>
            </div>


        </div>

    </div>
</section>
