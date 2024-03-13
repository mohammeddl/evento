<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body>
    <header class="hidden box-border relative md:block w-full py-4 leading-10 text-center text-indigo-900 bg-white md:py-6">
        <div class="w-full px-4 mx-auto leading-10 text-center md:px-4 lg:px-6 max-w-7xl">
            <div class="box-border flex flex-col flex-wrap items-center justify-between text-indigo-900 md:flex-row">
                <div class="relative z-10 flex items-center w-auto px-4 leading-10 lg:flex-grow-0 lg:flex-shrink-0 lg:text-left">
                    <a href="{{route('index')}}" class="box-border inline-block font-sans text-2xl font-bold text-left text-black no-underline bg-transparent cursor-pointer focus:no-underline">
                        Evento.
                    </a>
                </div>
                <div class="relative left-0 z-0 flex justify-center w-full px-4 mt-4 space-x-6 font-medium leading-10 md:mt-0 md:absolute lg:space-x-8 md:flex-grow-0 md:text-left lg:text-center">

                    <a href="{{route('index')}}" class="box-border inline-block text-center text-black no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Home
                    </a>
                    @auth
                    @if(Auth::user()->role == 'organizer')
                    <a href="{{route('dashboard')}}" class="box-border inline-block text-center text-black no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Dashboard
                    </a>
                    @else
                    @endif
                    @endauth
                </div>
                <div class="relative px-4 mt-2 font-medium leading-10 md:flex-grow-0 md:flex-shrink-0 md:mt-0 md:text-right lg:flex-grow-0 lg:flex-shrink-0">
                    @if(Auth::user())
                    <div class="box-border inline-flex items-center h-10 px-4 text-base text-center text-black no-underline align-middle bg-transparent border border-gray-300 rounded cursor-pointer select-none hover:bg-gray-50 hover:text-blue-700 focus:shadow-xs focus:no-underline">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
                </div>
                </div>
                    @else
                    <a href="{{route('login')}}" class="box-border inline-block mx-5 text-right text-black no-underline bg-transparent cursor-pointer hover:text-blue-700 focus:no-underline">
                        Login
                    </a>
                    <a href="{{route('register')}}" class="box-border inline-flex items-center h-10 px-4 text-base text-center text-black no-underline align-middle bg-transparent border border-gray-300 rounded cursor-pointer select-none hover:bg-gray-50 hover:text-blue-700 focus:shadow-xs focus:no-underline">
                        Sign Up
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </header>


@if(session()->has('success'))
<div class="flex w-full max-w-sm overflow-hidden m-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-center w-12 bg-emerald-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
        </svg>
    </div>
    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{session('success')}}</p>
        </div>
    </div>
</div>
@endif
@if(session()->has('pending'))
<div class="flex w-full max-w-sm overflow-hidden m-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
    <div class="flex items-center justify-center w-12 bg-emerald-500">
        <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
        </svg>
    </div>
    <div class="px-4 py-2 -mx-3">
        <div class="mx-3">
            <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
            <p class="text-sm text-gray-600 dark:text-gray-200">{{session('pending')}}</p>
        </div>
    </div>
</div>
@endif

@yield('content')
<section class="box-border pt-5 leading-7 text-gray-900 bg-white border-0 border-gray-200 border-solid pb-7">
    <div class="box-border px-4 mx-auto border-solid md:px-6 lg:px-8 max-w-7xl">
        <div class="relative flex flex-col items-start justify-between leading-7 text-gray-900 border-0 border-gray-200 md:flex-row md:items-center">
            <a href="#_" class="left-0 flex items-center justify-center order-first w-full mb-4 font-medium text-gray-900 md:justify-start md:absolute md:w-64 lg:order-none lg:w-auto title-font lg:items-center lg:justify-center md:mb-0">
                <span class="text-xl font-black leading-none text-gray-900 select-none logo">Evento<span class="text-indigo-600">.</span></span>
            </a>
            <ul class="box-border flex mx-auto my-6 space-x-6">
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="#_" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">Home</a>
                </li>
                <li class="relative mt-2 leading-7 text-left text-gray-900 border-0 border-gray-200 md:border-b-0 md:mt-0">
                    <a href="#_" class="box-border items-center block w-full px-4 text-base font-normal leading-normal text-gray-900 no-underline border-solid cursor-pointer hover:text-blue-600 focus-within:text-blue-700 sm:px-0 sm:text-left">About</a>
                </li>

            </ul>
            <div class="box-border right-0 flex justify-center w-full mt-4 space-x-3 border-solid md:w-auto md:justify-end md:absolute md:mt-0">
                <a href="#_" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M7 10v4h3v7h4v-7h3l1-4h-4V8a1 1 0 011-1h3V3h-3a5 5 0 00-5 5v2H7"></path></svg>
                </a>
                <a href="#_" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><path d="M9 19c-4.3 1.4-4.3-2.5-6-3m12 5v-3.5c0-1 .1-1.4-.5-2 2.8-.3 5.5-1.4 5.5-6a4.6 4.6 0 00-1.3-3.2 4.2 4.2 0 00-.1-3.2s-1.1-.3-3.5 1.3a12.3 12.3 0 00-6.2 0C6.5 2.8 5.4 3.1 5.4 3.1a4.2 4.2 0 00-.1 3.2A4.6 4.6 0 004 9.5c0 4.6 2.7 5.7 5.5 6-.6.6-.6 1.2-.5 2V21"></path></svg>
                </a>
                <a href="#_" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><circle cx="12" cy="12" r="9"></circle><path d="M9 3.6c5 6 7 10.5 7.5 16.2M6.4 19c3.5-3.5 6-6.5 14.5-6.4M3.1 10.75c5 0 9.814-.38 15.314-5"></path></svg>
                </a>
                <a href="#_" class="inline-flex items-center leading-7 text-gray-900 no-underline border-0 border-gray-200 cursor-pointer hover:text-blue-700 focus-within:text-blue-700">
                    <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path d="M0 0h24v24H0z" stroke="none"></path><rect x="4" y="4" width="16" height="16" rx="4"></rect><circle cx="12" cy="12" r="3"></circle><path d="M16.5 7.5v.001"></path></svg>
                </a>
            </div>
        </div>
        <div class="pt-4 mt-4 leading-7 text-center text-gray-600 border-t border-gray-200 md:mt-5 md:pt-5 md:mt-6 md:pt-6">
            <p class="box-border mt-0 text-sm border-0 border-solid">
                © 2024 Evento. All Rights Reserved.
            </p>
        </div>
    </div>
</section>

<script>
     $(document).ready(function() {
                $('#searchForm').submit(function(event) {
                    event.preventDefault();

                    var formData = $(this).serialize();

                    $.ajax({
                        type: 'POST',
                        url: '{{ route("search") }}',
                        data: formData,
                        success: function(response) {
                            updateSearchResults(response);
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });

                function updateSearchResults(results) {
    var resultContainer = $('#result');
    resultContainer.empty();

    var title = $('#title').val().trim();
        var location = $('#location').val().trim();

        if (title === '' && location === '') {
            $('#result').html('<div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800"><div class="flex items-center justify-center w-12 bg-gray-400"><svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" /></svg></div><div class="px-4 py-2 -mx-3"><div class="mx-3"><span class="font-semibold text-yellow-400 dark:text-yellow-300">Warning</span><p class="text-sm text-gray-600 dark:text-gray-200">Please enter at least one search criteria.</p></div></div></div>');
            return;
        }

    if (results.length > 0) {
        $.each(results, function(index, result) {
            console.log(results)
            var eventElement = $('<div>').addClass('"px-4 py-8 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-8');
            var imageElement = $('<div>').addClass('flex-shrink-0').html(
                '<img class="h-48 w-full object-cover" src="images/'+ result.image +'" alt="">'
            );
            var contentElement = $('<div>').addClass('flex-1 bg-white p-6 flex flex-col justify-between').html(
                '<div class="flex-1">' +
                '<p class="text-sm font-medium text-indigo-600">' +
                '<a href="#" class="hover:underline">' + result.location + '</a>' +
                '</p>' +
                '<a href="#" class="block mt-2">' +
                '<p class="text-xl font-semibold text-gray-900">' + result.title + '</p>' +
                '<p class="mt-3 text-base text-gray-500">' + result.description + '</p>' +
                '</a>' +
                '</div>' +
                '<div class="mt-6 flex justify-between">' +
                '<div class="flex">' +
                '<div class="flex-shrink-0">' +
                '</div>' +
                '<div class="ml-3">' +
                '<p class="text-sm font-medium text-gray-900">' +
                '</p>' +
                '<div class="flex space-x-1 text-sm text-gray-500">' +
                '<time datetime="' + result.created_at + '">' + '</time>' +
                '<span>' + result.location + '</span>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '<a href="/event/'+result.id +'" class="inline-block mt-4 text-blue-500 underline hover:text-blue-400">Read more</a>' +
                '</div>'
            );
            eventElement.append(imageElement);
            eventElement.append(contentElement);
            resultContainer.append(eventElement);
        });
    } else {
        var noResultsMessage = $('<div>').addClass('flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800').html(
            '<div class="flex items-center justify-center w-12 bg-yellow-400">' +
            '<svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">' +
            '<path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />' +
            '</svg>' +
            '</div>' +
            '<div class="px-4 py-2 -mx-3">' +
            '<div class="mx-3">' +
            '<span class="font-semibold text-yellow-400 dark:text-yellow-300">Warning</span>' +
            '<p class="text-sm text-gray-600 dark:text-gray-200">No results found!</p>' +
            '</div>' +
            '</div>'
        );
        resultContainer.append(noResultsMessage);
    }
}
            });
</script>

</body>
</html>
