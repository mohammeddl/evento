@extends('layouts.appp')
@section('title') Home @endsection

@section('content')

@include('components.alert')
<div class="relative">
    <img src="{{asset('images/'. $event->image)}}" class="object-cover object-center  w-full h-[82vh]" alt="" />
    <p class="absolute top-28 left-[47%] py-2 px-9 bg-indigo-600 rounded-2xl text-white text-[14px] font-semibold uppercase">{{$event->category->category_name}}</p>
    <p class="absolute bottom-[58%] w-full text-center text-white text-3xl font-bold">{{$event->title}}</p>
        <span class="absolute text-gray-600 py-1"><svg xmlns="http://www.w3.org/2000/svg" class="mt-[6px]" height="12" width="10.5" viewBox="0 0 448 512"><path fill="#5353c6" d="M128 0c17.7 0 32 14.3 32 32V64H288V32c0-17.7 14.3-32 32-32s32 14.3 32 32V64h48c26.5 0 48 21.5 48 48v48H0V112C0 85.5 21.5 64 48 64H96V32c0-17.7 14.3-32 32-32zM0 192H448V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V192zm64 80v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm128 0v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H208c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V272c0-8.8-7.2-16-16-16H336zM64 400v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H80c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H208zm112 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V400c0-8.8-7.2-16-16-16H336c-8.8 0-16 7.2-16 16z"/></svg>{{$event->date}}</span>
        <span class="absolute text-gray-600 py-1"><svg xmlns="http://www.w3.org/2000/svg " class="mt-[6px]" height="14" width="10.5" viewBox="0 0 384 512"><path fill="#5353c6" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/></svg>{{$event->location}}</span>
    <div class="absolute bottom-[44%] left-1/3 text-center">
        <div class="absolute right-0 md:left-0 md:w-44  px-2 pb-[2px] rounded-2xl text-center border-solid border-2 hover:bg-indigo-800">
            <a href="{{route('event.show',[$event->id])}}" class="text-white text-[14px] md:text-1xl  font-semibold uppercase "><p class="py-2">Learn more</p></a>
        </div>
        <div class="absolute left-32 md:left-80 md:w-44 border-solid border-2 border-gray-100 px-2 pb-[2px] rounded-2xl hover:bg-indigo-800 text-center">
            <form action="{{route('reserver')}}" method="POST">
                @csrf
                <input type="hidden" name="idEvent" value="{{$event->id}}">
                <button class="text-white text-[14px] md:text-1xl py-2 font-semibold uppercase">Take a Ticket</button>
            </form>
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
@include('components.faq')
@endsection
