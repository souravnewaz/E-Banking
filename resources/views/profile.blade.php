@extends('layouts.navbar')
@section('title')
<title>Profile | E-Banking</title>
@endsection


@section('content')
<div class=" mt-32">
    <div class="grid grid-cols-1  gap-4 justify-items-center">
        <div  class="h-20 w-20 object-none object-right">
            <img src="/images/avatar.jpg" alt="image loading">
        </div>
        <div class="bg-white h-32 w-64 border-2 border-gray-200 text-center text-sm text-gray-500 rounded-lg p-2 ">
            <ul>
                <li>Name: Rakibul Newaz Sourav</li>
                <li>Account Type: Student</li>
                <li>Account No: 123456789</li>
                <li>Valid Till: 10/2/2023</li>
                <li>Phone: 12345678911</li>
            </ul>
        </div>
        <div class="bg-white w-24 border-2 border-gray-200 text-center text-sm text-gray-500 rounded-lg p-1 ">
            <p>5000.00</p>
        </div>
        <div class="bg-white w-20 border-2 border-gray-200 rounded-md text-center">
            <button id="play-pause">
                <svg class="w-12 h-12" fill="none" stroke="black" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </button>
        </div>
        <audio id="track" autoplay>
            <source src="/audio/profile.mp3" type="audio/mpeg" />
        </audio>
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