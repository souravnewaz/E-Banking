@extends('layouts.layout')
@section('title')
<title>Home | E-Banking</title>
@endsection


@section('content')

<div class="flex items-center justify-center h-screen  rounded shadow">
    <div class="bg-blue-600 text-white rounded-lg border-8 border-gray-800 shadow-lg  h-3/5 w-80 relative">
        <div class="bg-white p-1 mt-5 absolute top-0 left-2 rounded-full hover:shadow hover:border-4 hover:border-black border-2 border-white">
            <a href="">
                <svg class="w-6 h-6" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
            </a>
        </div>
        <div class="mt-6 ml-12">
            <p class="text-lg">E-Banking</p>
        </div>
        <div class="flex justify-center mt-5 absolute top-0 right-2">
            <div class="bg-white px-4 py-1 rounded hover:shadow hover:border-4 hover:border-black border-2 border-white">
                <a href="/lock">
                    <svg class="w-6 h-6" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                </a>
            </div>
        </div>
        <div class="grid grid-cols-2 grid-gap-10 justify-items-center gap-y-6 absolute inset-x-0 bottom-24">
            <div class="bg-white p-2 h-32 w-32 rounded-md hover:shadow hover:border-4 hover:border-black border-2 border-white">
                <a href="/profile">
                    <img src="/images/avatar.jpg" alt="image">
                </a>
            </div>
            <div class="bg-white p-2 h-32 w-32 rounded-md hover:shadow hover:border-4 hover:border-black border-2 border-white">
                <a href="/transfer">
                    <img src="/images/transfer.jpg" alt="image">
                </a>
            </div>
            <div class="bg-white p-2 h-32 w-32 rounded-md hover:shadow hover:border-4 hover:border-black border-2 border-white">
                <a href="/deposit">
                    <img src="/images/deposit.jpg" alt="image">
                </a>
            </div>
            <div class="bg-white p-2 h-32 w-32 rounded-md hover:shadow hover:border-4 hover:border-black border-2 border-white">
                <a href="/withdraw-qr">
                    <img src="/images/withdraw.jpg" alt="image">
                </a>
            </div>
        </div>
    
    </div>
    
</div>
@endsection