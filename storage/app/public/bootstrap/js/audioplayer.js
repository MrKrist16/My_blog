// AJAX REQUEST

let musicList = [];

function length(obj) {
	return Object.keys(obj).length;
}

function removeMp3(obj) {
	return obj.substring(0, obj.length - 4);
}

$.ajax({
	url: "/storage/bootstrap/php/audioplayer.php",
	success: function(data) {
		var data1 = JSON.parse(data);
		for(var i = 0; i <= Object.keys(data1).length; i++){
			musicList.push(data1[i]);
		}
		musicList.splice(0, 1);
	}
})

// MUSIC PLAYER	

let songTitle = document.getElementById("songTitle");
let fillBar = document.getElementById("fill");

let song = new Audio();
let currentSong = 0;

function playSong() {
	song.src = "/storage/music/" + musicList[currentSong];

	songTitle.textContent = removeMp3(musicList[currentSong]);

	song.play();
}

function playOrPauseSong() {
	if(song.src == ''){
		song.src = "/storage/music/" + musicList[currentSong];

		songTitle.textContent = removeMp3(musicList[currentSong]);

		$('#play').attr('id', 'pause')

		song.play();
	}

	else {
		if (song.paused) {
			$('#play').attr('id', 'pause')
			song.play();
		}
		else{
			$('#pause').attr('id', 'play')
			song.pause();
		}
	}
}

song.addEventListener('timeupdate', function(){
	let position = song.currentTime / song.duration;
	fillBar.style.width = position * 100 + '%';
});


function next() {
	currentSong++;

	if(currentSong > musicList.length - 1){
		currentSong = 0;
	}

	if (song.paused) {
		$('#play').attr('id', 'pause')
		playSong();
	}
	else{
		playSong();
	}
}

function pre() {
	currentSong--;

	if (currentSong < 0) {
		currentSong = musicList.length - 1;
	}

	if (song.paused) {
		$('#play').attr('id', 'pause')
		playSong();
	}
	else{
		playSong();
	}
}