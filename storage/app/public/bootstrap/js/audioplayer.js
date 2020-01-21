// AJAX REQUEST

let musicList = [];
let musicListTwo = [];

function length(obj) {
	return Object.keys(obj).length;
}

function removeMp3(obj) {
	return obj.substring(0, obj.length - 4);
}

$.ajax({
	url: "/storage/bootstrap/php/audioplayer.php",
	success: function(data) {
		let data1 = JSON.parse(data);
		for(let i = 0; i <= Object.keys(data1).length; i++){
			musicList.push(data1[i]);
			musicListTwo.push(data1[i]);
		}
		musicList.splice(0, 1);
		musicListTwo.splice(0, 1);
		songTitle.textContent = removeMp3(musicList[currentSong]);
		song.src = "/storage/music/" + musicList[currentSong];

		setTimeout(returnTimeTotalTime, 200);
	}
})

// MUSIC PLAYER	

let songTitle = document.getElementById("songTitle");

let song = new Audio();
let currentSong = 0;
let replayBool = false;
let mixBool = false;
let mixMusicList;

function playSong() {
	if(mixBool === false){
		song.src = "/storage/music/" + musicList[currentSong];

		songTitle.textContent = removeMp3(musicList[currentSong]);
	}else if(mixBool === true){
		song.src = "/storage/music/" + mixMusicList[currentSong];

		songTitle.textContent = removeMp3(mixMusicList[currentSong]);
	}

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

function replay() {
	if (replayBool === false) {
		replayBool = true;
		$('#replay').attr('id', 'replay-on');
		if (song.duration === song.currentTime){
			song.play();
		}
	}else if (replayBool === true){
		replayBool = false;
		$('#replay-on').attr('id', 'replay');
	}
}

function mix() {
	if (mixBool === false) {
		mixBool = true;
		$('#mix').attr('id', 'mix-on');
		mixMusicList = shuffle(musicListTwo);
		if (song.duration === song.currentTime){
			song.play();
		}
	}else if (mixBool === true){
		mixBool = false;
		$('#mix-on').attr('id', 'mix');
	}
}

function calculateTotalValue(length) {
    let minutes = Math.floor(length / 60);
      let  seconds_int = length - minutes * 60;
  if(seconds_int < 10){
    //console.info("here");
    seconds_int = "0"+seconds_int;
    //console.info(seconds_int);
  }
      let seconds_str = seconds_int.toString();
       let  seconds = seconds_str.substr(0, 2);
        let time = minutes + ':' + seconds;
//console.info(seconds_int)
    return time;
}

function calculateCurrentValue(currentTime) {
    let current_hour = parseInt(currentTime / 3600) % 24,
        current_minute = parseInt(currentTime / 60) % 60,
        current_seconds_long = currentTime % 60,
        current_seconds = current_seconds_long.toFixed(),
        current_time = (current_minute < 10 ? current_minute : current_minute) + ":" + (current_seconds < 10 ? "0" + current_seconds : current_seconds);
    return current_time;
}

let fillBar = document.getElementById("fill");

let seekBar = document.getElementById("seek-bar");
let handle = document.getElementById("handle");
let seekBarWidth = seekBar.offsetWidth - handle.offsetWidth;

seekBar.addEventListener('click', function(){
	song.currentTime = song.duration * (event.clientX - seekBar.getBoundingClientRect().left) / seekBarWidth;
});

function returnTimeTotalTime() {
	timeTotalTime = calculateTotalValue(song.duration);
	return jQuery("#total-time").html(timeTotalTime);
}

song.addEventListener('timeupdate', function(){
	let position = song.currentTime / song.duration;
	let timeCurrentTime, timeTotalTime;
	fillBar.style.width = position * 100 + '%';

	timeCurrentTime = calculateCurrentValue(song.currentTime);
	jQuery("#current-time").html(timeCurrentTime);

	if (calculateTotalValue(song.duration) === "NaN:Na"){
		setTimeout(returnTimeTotalTime, 100);
	}else{
		let timeTotalTime = calculateTotalValue(song.duration);
		jQuery("#total-time").html(timeTotalTime);
	}

	if (song.duration === song.currentTime){
		if(replayBool === true && mixBool === true){
			song.play();
		}else if(replayBool === true){
			song.play();
		}else if(replayBool === false && mixBool === false){
			next();
		}
	}
	
});

function shuffle(array) {
  var currentIndex = array.length, temporaryValue, randomIndex;

  while (0 !== currentIndex) {

    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex -= 1;

    temporaryValue = array[currentIndex];
    array[currentIndex] = array[randomIndex];
    array[randomIndex] = temporaryValue;
  }

  return array;
}