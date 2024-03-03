@extends('layouts.appp')
@section('title') Home @endsection

@section('content')

<div class="relative">
    <img src="https://images.pexels.com/photos/2408666/pexels-photo-2408666.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=2&amp;w=500" class="object-cover object-center  w-full h-[82vh]" alt="" />
    <p class="absolute top-28 left-[47%] py-2 px-2 bg-indigo-600 rounded-2xl uppercase text-white text-sm font-medium">category</p>
    <p class="absolute bottom-[58%] left-1/4 text-center text-white text-3xl font-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    <div class="absolute bottom-[44%] left-1/3 text-center">
        <div class="absolute right-0 md:left-0 md:w-44 bg-white px-2 pb-[2px] rounded-2xl text-center">
            <p class="text-indigo-700 text-1xl md:text-1xl py-2 font-semibold uppercase ">Learn more</p>
        </div>
        <div class="absolute left-32 md:left-80 md:w-44 bg-indigo-600 px-2 pb-[2px] rounded-2xl text-center">
            <p class="text-white text-1xl md:text-1xl py-2 font-semibold uppercase">Take a Ticket</p>
        </div>
    </div>
</div>

@include('components.search')
<div class="py-12">
    <div class=" flex items-center justify-center  mx-auto max-w-7xl md:px-0 text-5xl font-semibold">
        <h3 class="text-gray-700">Upcoming </h3>
        <span class="text-indigo-700">  Events</span>
        </div>
        <p class="text-1xl pt-5 text-gray-600 text-center font-thin">Join us for thrilling events! Live music, workshops, art exhibits, and more! Mark your calendars and don't miss out!</p>
</div>
@include('components.filter')
@include('components.card')
@include('components.newsletter')
@endsection
