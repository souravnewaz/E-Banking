@extends('layouts.navbar')
@section('title')
<title>Cash Withdraw | E-Banking</title>
@endsection


@section('content')
<div class="flex justify-center mt-36">
    <div>
        <button id="play-pause">
            <svg class="w-12 h-12" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
        </button>
</div>
<audio id="track"  autoplay>
    <source src="/audio/withdraw-qr.mp3" type="audio/mpeg" />
</audio>
<a href="/withdraw-agent">
    <div class="absolute inset-x-0 bottom-0  h-64 m-5 rounded-lg p-4 text-center">
        <img src="/images/qr.jpg" alt="qr-code">
    </div>
</a>
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