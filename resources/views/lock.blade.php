@extends('layouts.layout')
@section('title')
<title>Lock Screen</title>
@endsection


@section('content')

<div class="flex items-center justify-center h-screen  rounded shadow">
    <div class="bg-blue-600 text-white rounded-lg border-8 border-gray-800 shadow-lg p-10 h-3/5 w-80 relative">
        <div class="text-center ">
            <p class="text-xl">E-Banking</p>
        </div>

        <audio id="player" autoplay>
            <source src="audio/lock.mp3" type="audio/mp3">
        </audio>
        <div class="flex justify-center mt-5">
            <div>
                <a href="">
                  <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                </a>
            </div>
        </div>
    <a href="/home">
    <div class="bg-black absolute inset-x-0 bottom-0 border border-gray-300 h-64 m-5 rounded-lg p-4 text-center">
        <div class="grid grid-cols-3 justify-items-center gap-y-10">
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
            <div class="bg-black hover:bg-white w-12 h-12 rounded-full ">
                <button class="bg-white h-4 w-4 rounded-full " ></button>
            </div>
        </div>
        
        
    </div>
    </a>
</div>
    
</div>


@endsection