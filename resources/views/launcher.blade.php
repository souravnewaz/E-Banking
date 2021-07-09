@extends('layouts.layout')
@section('title')
<title>Launching Screen</title>
@endsection


@section('content')

<div class="flex items-center justify-center h-screen  rounded shadow">
    <div class="bg-blue-600 text-white rounded-lg border-8 border-gray-800 shadow-lg p-10 h-3/5 w-80 relative">
        <div class="text-center absolute inset-x-0 bottom-80">
            <p class="text-xl">E-Banking</p>
        </div>

        <!-- loader -->
        <div class="absolute inset-x-0 bottom-48 flex justify-center items-center">
            <div class="animate-spin rounded-full h-16 w-16 border-b-2 border-white"></div>
        </div>

        <!-- version -->
        <div class="absolute inset-x-0 bottom-0 h-10 m-5 rounded-lg p-4 text-center">
            <p class="text-sm">V 0.0.1</p>        
        </div>
      
    </div>
</div>

<script>
    setTimeout(function(){
       window.location.href = '/lock';
    }, 5000);
</script>

@endsection