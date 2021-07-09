@extends('layouts.blank')
@section('title')
<title>Tansfer Confirmation | E-Banking</title>
@endsection


@section('content')
<div class="mt-4">
    <div class="grid grid-cols-1  gap-3 justify-items-center">
        <div>
            <button id="play-pause" href="">
                <svg class="w-12 h-12" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
              </button id="play-pause">
              <audio id="track" autoplay>
                  <source src="/audio/transfer-pattern.mp3" type="audio/mpeg" />
              </audio>
        </div>
        <div class="flex flex-col">
            <div class="w-full flex justify-center">
                <div class="h-12 w-12 rounded ">
                    <img src="/images/people/1.jpg" alt="" class="rounded-lg">
                </div>
            </div>
            
            <div class="bg-white h-20 w-48 border-2 border-gray-200 text-center text-sm text-gray-500 rounded-lg p-2 mt-2">
                <p class="">Rakibul Newaz Sourav</p>
                <p class="">01234567891</p>
                <p class="">5000.00</p>
            </div>
        </div>
        <div class="text-center mt-5">
            <a href="/success">
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