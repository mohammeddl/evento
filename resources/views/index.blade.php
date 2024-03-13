@extends('layouts.appp')
@section('title') Home @endsection

@section('content')

@include('components.alert')
<div class="relative">
    <img src="{{asset('images/'. $event->image)}}" class="object-cover object-center  w-full h-[82vh]" alt="" />
    <p class="absolute top-28 left-[38%] md:left-[47%] py-2 px-9 bg-indigo-600 rounded-2xl text-white text-[14px] font-semibold uppercase">{{$event->category->category_name}}</p>
    <p class="absolute bottom-[58%] w-full text-center text-white text-3xl font-bold">{{$event->title}}</p>
    <div class="absolute bottom-[44%] left-1/3 text-center">
    <div class="absolute w-24 right-0 md:left-0 md:w-44  px-2 pb-[2px] rounded-2xl text-center border-solid border-2 hover:bg-indigo-800">
            <a href="{{route('event.show',[$event->id])}}" class="text-white text-[10px] md:text-[14px] md:text-1xl  font-semibold uppercase "><p class="py-2">Learn more</p></a>
        </div>
        <div class="absolute w-24 left-32 md:left-80 md:w-44 border-solid border-2 border-gray-100 px-2 pb-[2px] rounded-2xl hover:bg-indigo-800 text-center">
            <form action="{{route('reserver')}}" method="POST">
                @csrf
                <input type="hidden" name="idEvent" value="{{$event->id}}">
                <button class="text-white text-[10px] md:text-[14px] md:text-1xl py-2 font-semibold uppercase">Take a Ticket</button>
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
