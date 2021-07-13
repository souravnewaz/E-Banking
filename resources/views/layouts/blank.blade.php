<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   @yield('title')
    
</head>
<body class="bg-white">
    <div class="flex items-center justify-center h-screen  rounded shadow">
        <div class="bg-gray-100 text-white rounded-lg border-8 border-gray-800 shadow-lg  h-3/5 w-80 relative">
            <div class="bg-blue-400 hover:bg-blue-500 p-1 mt-6 absolute top-0 left-2 rounded-full ">
                <a href={{ url()->previous() }} class=" ">
                    <svg class="w-6 h-6" fill="none" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
            </div>
            <div class="mt-6 ml-12">
                <a class="text-lg text-blue-500 font-bold" href="/home">E-Banking</a>
            </div>
            <div class="flex justify-center mt-5 absolute top-0 right-2 ">
                <div class="bg-white px-4 py-1 rounded  border-2 border-gray-300 mt-1">
                    <p class="text-gray-500 text-sm">5000.00</p>
                </div>
            </div>
            @yield('content')
        </div>
       
    
    </div>
</body>
</html>