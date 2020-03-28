<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
  <title>CS - <?php echo $wp_query->post->post_title; ?></title>
</head>

<style>
html, body {
  transition: all 300ms ease;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #EEEEEE;
  font-family: 'Noto Sans', sans-serif;
}
.dark {
  background-color: #303030 !important;
  color: #EEEEEE !important;
}
main {
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 2;
  display: flex;
  justify-content: center;
  align-items: center;
}
.dark-switcher {
  transition: all 300ms ease;
  position: fixed;
  z-index: 100;
  right: 5%;
  bottom: 5%;
  color: #222;
  font-size: 40px;
  cursor: pointer;
}
.dark-switcher-active {
  color: #EEEEEE;
  transform: rotateY(180deg);
}
.music-player {
  transition: all 300ms ease;
  position: relative;
  display: flex;
  align-items: center;
}
@media (max-width:400px) {
  .music-player{
    width: 75%;
  }
}
#rll {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 1;
  cursor: pointer;
  opacity: 0;
  top: 0;
  left: 0;
}
#input-label {
  position: absolute;
  z-index: 1;
  background-color: rgba(238, 238, 238, 0.8);
  color: #333 !important;
  display: flex;
  justify-content: center;
  text-align: center;
  height: 100%;
  width: 100%;
  border-radius: 20px;
  align-items: center;
  font-size: 24px;
  font-weight: 900;
}
.player-img {
  position: relative;
  border-radius: 20px;
}
.player-img img {
  display: block;
  width: 100%;
  height: 100%;
  min-width: 350px;
  max-width: 350px;
  min-height: 350px;
  max-height: 350px;
  background-color: #EEEEEE;
  border-radius: 20px;
}
.music-info {
  color: #EEEEEE;
  text-shadow: -1px -1px 5px black;
  border-radius: 20px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
}
@media (max-width:400px) {
  .music-info {
    font-size: 14px;
  }
}
#music-info-name, #music-info-artist{
  padding: 0 20px;
  margin: 10px 0;
  text-transform: capitalize;
}
#music-album-text{
  padding: 0px 20px 15px;
  margin: 0;
}
.player-controls {
  transition: all 300ms ease;
  border-radius: 20px;
  position: absolute;
  width: 100%;
  top: 70%;
  left: 0;
  transform: translateY(100%);
}
.player-progress {
  transition: all 300ms ease;
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin: 15px 0;
  border-radius: 20px;
  background-color: rgba(0,0,0,0.2);
  padding: 10px;
  color: #fff;
  text-shadow: 1px 2px 2px black;
}
.progress-bar {
  width: 100%;
  display: inline-flex;
  margin: 0 15px;
}
.progress-bar-fill {
  display: block;
  background-color: green;
  height: 10px;
  border-radius: 20px;
  box-shadow: inset 0px 0px 4px black, 0px 0px 10px lime;
}
.player-buttons {
  display: flex;
  align-items: center;
  justify-content: space-evenly;
}
.player-buttons i {
  transition: all 300ms ease;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 45px;
  height: 45px;
  margin: 0 5px;
  background-color: #EEEEEE;
  border-radius: 50%;
  cursor: pointer;
  box-shadow:
  4px  4px 4px rgba(0,0,0,0.2),
  inset 2px 2px 4px rgba(0,0,0,0.2)
}
#background-song-cover {
  position: absolute;
  top: 50%;
  left: 50%;
  width: 100vw;
  height: 100vh;
  object-fit: cover;
  transform: translate(-50%,-50%) scale(1.05);
  filter: blur(5px) brightness(50%);
  animation: moveAround 15s linear alternate infinite;
}
@keyframes moveAround {
  0%{
    top:52%;
    left:48%;
  }
  20%{
    top:48%;
    left:52%;
  }
  40%{
    top:52%;
    left:52%;
  }
  60%{
    top:48%;
    left:48%;
  }
  80%{
    top:52%;
    left:48%;
  }
  100%{
    top:50%;
    left:50%;
  }
}
progress[value] {
  /* Reset the default appearance */
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;

  /* Get rid of default border in Firefox. */
  border: none;
  width: 100%;
  border-radius: 20px;
  box-shadow: inset 0px 0px 5px 1px black;
  cursor: pointer;
}
progress[value]::-webkit-progress-value {
  background-color: green;
  box-shadow: inset 0px 0px 4px black, 0px 0px 10px lime;
  border-radius: 20px;
}
progress[value]::-moz-progress-bar {
  background-color: green;
  box-shadow: inset 0px 0px 4px black, 0px 0px 10px lime;
  border-radius: 20px;
}
progress[value]::-webkit-progress-bar {
  background-color: #eee;
  border-radius: 20px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25) inset;
}
#canvas {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}
.hide, #trp-floater-ls {
  display: none !important;
}
</style>

<body>
  <img width="100%" id="background-song-cover" src="https://scottishculture.org/themes/scottishculture/images/music_placeholder.png" alt="">
  <main>
    <div class="music-player">
      <div class="player-img">
        <label id="input-label" for="#rll">Click or Drag'n'Drop a music file here!</label>
        <input type="file" id="rll" title="Selecionar uma musica" drop multiple value="" accept="audio/*">
        <img id="song-cover" src="https://scottishculture.org/themes/scottishculture/images/music_placeholder.png" alt="">
      </div>
      <div class="player-content">
        <div class="music-info">
          <h1 id="music-info-name">Song Name</h1>
          <h2 id="music-info-artist">Artist</h2>
          <h4 id="music-album-text">Album</h4>
        </div>

        <div class="player-controls">
          <audio id="rllly" controls hidden>
            <source src="" id="rlly" />
          </audio>
          <div class="player-progress">
            <span id="song-currentTime"></span>
            <span class="progress-bar">
              <!-- <span class="progress-bar-fill"></span> -->
              <progress min="0" max="100" value="0"></progress>
            </span>
            <span id="song-length"></span>
          </div>
          <div class="player-buttons">
            <!-- <i title="Previous song" id="previous" class="fas fa-backward"></i> -->
            <i title="-10 seconds" id="backward" class="fas fa-fast-backward"></i>
            <i title="Play song" id="play" class="fas fa-play"></i>
            <i title="Pause song" id="pause" class="fas fa-pause hide"></i>
            <i title="+10 seconds" id="forward" class="fas fa-fast-forward"></i>
            <!-- <i title="Next song" id="next" class="fas fa-forward"></i> -->
          </div>
        </div>
      </div>
    </div>
  </main>
  <canvas id="canvas"></canvas>
</body>

<?php get_footer(); ?>

<script>
function handleFiles(event) {
  const file = event.target.files[0];
  const fileUrl = URL.createObjectURL(file);
  console.log(fileUrl);
  const player = document.getElementById("rllly");

  document.getElementById("rlly").setAttribute("src", fileUrl);
  player.load();
  var context = new AudioContext();
  var src = context.createMediaElementSource(player);
  var analyser = context.createAnalyser();

  var canvas = document.getElementById("canvas");
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  var ctx = canvas.getContext("2d");

  src.connect(analyser);
  analyser.connect(context.destination);

  analyser.fftSize = 2048;

  var bufferLength = analyser.frequencyBinCount;

  var dataArray = new Uint8Array(bufferLength);

  var WIDTH = canvas.width;
  var HEIGHT = canvas.height;

  var barWidth = (WIDTH / bufferLength) * 2.5;
  var barHeight;
  var x = 0;

  function renderFrame() {
    requestAnimationFrame(renderFrame);

    x = 0;

    analyser.getByteFrequencyData(dataArray);

    ctx.fillStyle = "#000";
    ctx.clearRect(0, 0, WIDTH, HEIGHT);

    for (var i = 0; i < bufferLength; i++) {
      barHeight = dataArray[i]*1.2;

      var grd = ctx.createLinearGradient(0, barHeight*13, 0, 0);
      grd.addColorStop(0, "green");
      grd.addColorStop(0.4, "green");
      grd.addColorStop(0.49, "yellow");
      grd.addColorStop(0.69, "red");
      grd.addColorStop(1, "red");

      var r = barHeight + (25 * (i/bufferLength));
      var g = 250 * (i/bufferLength);
      var b = 50;
      ctx.fillStyle = grd;
      ctx.fillRect(x, HEIGHT - barHeight, barWidth, barHeight);

      x += barWidth + 1;
    }
  };

  player.play();
  var isPlaying = true;
  renderFrame();
  document.querySelector(".fa-pause").classList.toggle("hide");
  document.querySelector(".fa-play").classList.toggle("hide");
  document.querySelector(".player-controls").classList.remove("hide");

  jsmediatags.read(file, {
    onSuccess: function(tag) {
      console.log(tag.tags.title);
      document.getElementById("input-label").classList.add("hide");

      var picture = tag.tags.picture;
      if (picture) {
        var base64String = "";
        for (var i = 0; i < picture.data.length; i++) {
          base64String += String.fromCharCode(picture.data[i]);
        }
        var imageUri =
        "data:" + picture.format + ";base64," + window.btoa(base64String);
      } else {
        var imageUri =
        "https://scottishculture.org/themes/scottishculture/images/music_placeholder.png";
      }
      document.getElementById("song-cover").setAttribute("src", imageUri);
      document.getElementById("background-song-cover").setAttribute("src", imageUri);
      if (tag.tags.artist && tag.tags.title) {
        document.getElementById("music-info-name").innerHTML = tag.tags.title;
        document.getElementById("music-info-artist").innerHTML = tag.tags.artist;
      } else {
        document.getElementById("music-info-name").innerHTML =
        file.name.substr(0, file.name.lastIndexOf(".")) || file.name;
      }
      if (tag.tags.album) {
        document.getElementById("music-album-text").classList.remove("hide");
        document.getElementById("music-album-text").innerHTML = tag.tags.album;
      } else {
        document.getElementById("music-album-text").classList.add("hide");
      }

      player.addEventListener("timeupdate", function() {
        document.querySelector("progress").value = this.currentTime / this.duration * 100;

        let currentS = parseInt(player.currentTime % 60);
        let currentM = parseInt((player.currentTime / 60) % 60);


        let totalS = parseInt(player.duration % 60);
        let totalM = parseInt((player.duration / 60) % 60);

        if (currentS < 10) {
          currentS =
          "0" + parseInt(player.currentTime % 60);
        } else {
          currentS = parseInt(
            player.currentTime % 60
          );
        }
        if (totalS < 10) {
          totalS =
          "0" + parseInt(player.duration % 60);
        } else {
          totalS = parseInt(player.duration % 60);
        }

        let currentFull = currentM + ":" + currentS;
        let totalFull = totalM + ":" + totalS;
        document.getElementById("song-length").innerHTML = totalFull
        document.querySelector("#song-currentTime").innerHTML = currentFull;

        if (document.querySelector("progress").value == 100) {
          document.querySelector(".fa-pause").classList.toggle("hide");
          document.querySelector(".fa-play").classList.toggle("hide");
        }
      });
      document.querySelector("progress").addEventListener("click", seek);

      function seek(e) {
        var percent = e.offsetX / this.offsetWidth;
        player.currentTime = percent * player.duration;
        document.querySelector("progress").value = percent / 100;
      }
      if (document.querySelector("progress").value == 100) {
        console.log('acabo');
      }
      document.querySelectorAll(".player-buttons i").forEach(function(item) {
        item.addEventListener("click", () => {
          console.log(item.id);

          switch (item.id) {
            case "play":
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.play();
            isPlaying = true;
            break;
            case "pause":
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.pause();
            isPlaying = false;
            break;
            case "stop":
            if (document.querySelector('.fa-play').classList.contains('hide')) {
              document.querySelector('.fa-play').classList.toggle('hide');
              document.querySelector('.fa-pause').classList.toggle('hide');
            }
            player.pause();
            isPlaying = false;
            player.currentTime = 0;
            break;
            case "forward":
            player.currentTime =
            player.currentTime + 10;
            break;
            case "backward":
            player.currentTime =
            player.currentTime - 10;
            break;
            default:
            console.log("default");
          }
        });
      });
      document.addEventListener("keypress", (e) => {
        switch (e.keyCode) {
          case 32: case 107:
          if (isPlaying == true) {
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.pause();
            isPlaying = false;
          } else {
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.play();
            isPlaying = true;
          }
            break;
          default:
          return;
          break;
        }
      });
    },
    onError: function(error) {
      console.error("Music Player: " + error.info);
      document.getElementById("input-label").classList.add("hide");
      document.getElementById("music-info-name").innerHTML =
      file.name.substr(0, file.name.lastIndexOf(".")) || file.name;
      document.getElementById("music-album-text").remove();

      player.addEventListener("timeupdate", function() {
        document.querySelector("progress").value = this.currentTime / this.duration * 100;

        let currentS = parseInt(player.currentTime % 60);
        let currentM = parseInt((player.currentTime / 60) % 60);

        let totalS = parseInt(player.duration % 60);
        let totalM = parseInt((player.duration / 60) % 60);

        if (currentS < 10) {
          currentS =
          "0" + parseInt(player.currentTime % 60);
        } else {
          currentS = parseInt(
            player.currentTime % 60
          );
        }
        if (totalS < 10) {
          totalS =
          "0" + parseInt(player.duration % 60);
        } else {
          totalS = parseInt(player.duration % 60);
        }

        let currentFull = currentM + ":" + currentS;
        let totalFull = totalM + ":" + totalS;
        document.getElementById("song-length").innerHTML = totalFull
        document.querySelector("#song-currentTime").innerHTML = currentFull;

        if (currentFull === totalFull) {
          document.querySelector('.fa-play').classList.toggle('hide');
          document.querySelector('.fa-pause').classList.toggle('hide');
        }
      });
      document.querySelector("progress").addEventListener("click", seek);

      function seek(e) {
        var percent = e.offsetX / this.offsetWidth;
        player.currentTime = percent * player.duration;
        document.querySelector("progress").value = percent / 100;
      }
      document.querySelectorAll(".player-buttons i").forEach(function(item) {
        item.addEventListener("click", () => {
          switch (item.id) {
            case "play":
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.play();
            break;
            case "pause":
            document.querySelector(".fa-pause").classList.toggle("hide");
            document.querySelector(".fa-play").classList.toggle("hide");
            player.pause();
            break;
            case "stop":
            if (document.querySelector('.fa-play').classList.contains('hide')) {
              document.querySelector('.fa-play').classList.toggle('hide');
              document.querySelector('.fa-pause').classList.toggle('hide');
            }
            player.pause();
            player.currentTime = 0;
            break;
            case "forward":
            player.currentTime =
            player.currentTime + 10;
            break;
            case "backward":
            player.currentTime =
            player.currentTime - 10;
            break;
            default:
            console.log("default");
          }
        });
      });
    }
  });
}

document.getElementById("rll").addEventListener("change", handleFiles, false);
</script>

</html>
