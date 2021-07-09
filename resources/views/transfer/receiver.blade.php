@extends('layouts.navbar')
@section('title')
<title>Receiver | E-Banking</title>
@endsection


@section('content')
<div class=" mt-32">
    <div class="grid grid-cols-1  gap-4 justify-items-center">
        <div>
            <button id="play-pause">
              <svg class="w-12 h-12" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
            </button>
        </div>
        <audio id="track"  autoplay>
            <source src="/audio/transfer-receiver.mp3" type="audio/mpeg" />
        </audio>
        
        <div  class="h-16 w-16 object-none object-right">
            <img src="/images/people/1.jpg" alt="image loading">
        </div>
        <div class="bg-white h-16 w-64 border-2 border-gray-200 text-center text-sm text-gray-500 rounded-lg p-2 ">
            <ul>
                <li>Receiver: Rakibul Newaz Sourav</li>              
                <li>Account No: 12345678911</li>
            </ul>
        </div>
        <div class="w-20  text-center mt-5">
            <a href="/transfer-amount" >
                <button  class="bg-green-400 hover:bg-green-500 px-4 py-2 rounded-full">
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