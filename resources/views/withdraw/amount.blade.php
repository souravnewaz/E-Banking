@extends('layouts.blank')
@section('title')
<title>Withdraw Amount | E-Banking</title>
@endsection


@section('content')
<div class=" mt-6">
    <div class="grid grid-cols-1  gap-4 justify-items-center">
        <div>
            <button id="play-pause" href="">
                <svg class="w-12 h-12" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
              </button id="play-pause">
              <audio id="track" autoplay>
                  <source src="/audio/transfer-amount.mp3" type="audio/mpeg" />
              </audio>
        </div>
        <div class="grid grid-cols-2 justify-items-center gap-3">
            <button class="bg-gray-400 hover:bg-green-500 focus:bg-green-500 border broder-gray-400 px-4 py-2 font-bold text-lg rounded-md">1000</button>
            <button class="bg-gray-400 hover:bg-green-500 focus:bg-green-500 border broder-gray-400 px-4 py-2 font-bold text-lg rounded-md">2000</button>
            <button class="bg-gray-400 hover:bg-green-500 focus:bg-green-500 border broder-gray-400 px-4 py-2 font-bold text-lg rounded-md">3000</button>
            <button class="bg-gray-400 hover:bg-green-500 focus:bg-green-500 border broder-gray-400 px-4 py-2 font-bold text-lg rounded-md">5000</button>
        </div>
        <div class="mt-5">
            <div class="bg-white py-1 rounded  border-2 border-gray-300 flex content-center">
                <form action="" class="text-center">
                    <input type="text" disabled value="5000.00" class="bg-white  text-gray-500 text-sm w-1/3">
                </form>
            </div>
        </div>
        <div class="w-20  text-center mt-5">
            <a href="/withdraw-pattern" >
                <button class="bg-green-400 hover:bg-green-500 px-4 py-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </button>                
            </a>
        </div>
    </div>
    
</div>
<script>
    var track = document.getElementById('track');

var controlBtn = document.getElementById('play-pause');

function playPause() {
    if (track.paused) {
        track.play();
        //controlBtn.textContent = "Pause";
        controlBtn.className = "pause";
    } else { 
        track.pause();
         //controlBtn.textContent = "Play";
        controlBtn.className = "play";
    }
}

controlBtn.addEventListener("click", playPause);
track.addEventListener("ended", function() {
  controlBtn.className = "play";
});
</script>
@endsection