<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">
  <title>Neumorphism - UI</title>
</head>

<style>
html, body {
  transition: all 300ms ease;
  margin: 0;
  padding: 0;
  background-color: #EEEEEE;
  font-family: 'Noto Sans', sans-serif;
}
.dark {
  background-color: #303030 !important;
  color: #EEEEEE !important;
}
.container {
  transition: all 300ms ease;
  position: relative;
  display: flex;
  align-items: center;
  width: 85%;
  height: 60px;
  border-radius: 20px;
  margin: 4vh auto 6vh;
  line-height: 15px;
  background-color: #EEEEEE;
  box-shadow:
    -4px -4px 4px 0 rgba(255, 255, 255, 1),
     4px  4px 4px 0 rgba(0, 0, 0, .1);
  text-align: center;
}
.container-dark, .player-dark {
  background-color: #303030 !important;
  color: #EEEEEE;
  box-shadow:
    -4px -4px 4px 0 rgb(65, 65, 65),
     4px  4px 4px 0 rgba(0, 0, 0, .2) !important;
}
.container h1 {
  margin: 0 auto;
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
main {
  display: flex;
  justify-content: space-evenly;
  width: 85%;
  margin: 5vh auto;
}
.news-section, .sidebar {
  transition: all 300ms ease;
  display: block;
  width: 65%;
  height: max-content;
  border-radius: 20px;
  padding: 10px 40px;
  background-color: #EEEEEE;
  box-shadow:
    -4px -4px 4px 0 rgba(255, 255, 255, 1),
     6px  6px 6px 0 rgba(0, 0, 0, .15);
}
.news-header {
  cursor: default;
}
.news-item {
  transition: all 300ms ease;
  display: flex;
  align-items: center;
  max-height: 155px;
  padding: 10px;
  box-shadow:
    inset -4px -4px 4px 0 rgb(255, 255, 255),
    inset  6px  6px 6px 0 rgba(0, 0, 0, .1);
  border-radius: 20px;
  margin: 30px 0;
  cursor: pointer;
}
.sidebar-item {
  transition: 300ms all ease;
  text-align: center;
  padding: 10px;
  box-shadow:
    -4px -4px 4px 0 rgb(255, 255, 255),
     6px  6px 6px 0 rgba(0, 0, 0, .1);
  border-radius: 20px;
  margin: 30px 0;
  cursor: pointer;
}
.sidebar-item:hover {
  box-shadow:
    inset -4px -4px 4px 0 rgb(255, 255, 255),
    inset  6px  6px 6px 0 rgba(0, 0, 0, .1);
}
.sidebar-item:hover h1{
  transform: scale(0.99);
}
.news-img {
  max-width: 250px;
  object-fit: cover;
  border-radius: 10px;
  margin: 5px 10px;
}
.news-content {
  padding: 0 20px;
}
.dark-news-item {
  box-shadow:
    inset -4px -4px 4px 0 rgb(60, 60, 60),
    inset  4px  4px 4px 0 rgb(40, 40, 40);
}
.dark-sidebar-item {
  box-shadow:
   -4px -4px 4px 0 rgb(60, 60, 60),
    4px  4px 4px 0 rgb(40, 40, 40);
}
.dark-sidebar-item:hover {
  box-shadow:
   inset -4px -4px 4px 0 rgb(60, 60, 60),
   inset  4px  4px 4px 0 rgb(40, 40, 40);
}
.sidebar {
  position: sticky;
  top: 3vh;
  width: 80%;
}
.circle, .circle-inner, .circle2, .circle-inner2, .square, .square2 {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 5vh auto;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background-color: #EEEEEE;
  box-shadow:
    -4px -4px 4px 0 rgba(255, 255, 255, 1),
     4px  4px 4px 0 rgba(0, 0, 0, .1);
}
.circle-inner, .circle-inner2, .square-inner, .square-inner2 {
  width: 200px;
  height: 200px;
  box-shadow:
    inset  4px  4px 4px 0 rgba(0, 0, 0, .1),
    inset -4px -4px 4px 0 rgba(255, 255, 255, 1);
}
.circle-inner2 {
  box-shadow:
     4px  4px 4px 0 rgba(0, 0, 0, .1),
    -4px -4px 4px 0 rgba(255, 255, 255, 1);
}
.square-inner2 {
  box-shadow:
     4px  4px 4px 0 rgba(0, 0, 0, .1),
    -4px -4px 4px 0 rgba(255, 255, 255, 1);
}
.square, .square2 {
  border-radius: 0%;
}
.hide, #trp-floater-ls {
  display: none !important;
}
</style>

<body>
  <i class="fas fa-adjust dark-switcher"></i>
  <div class="container">
    <h1>Neumorphism - UI</h1>
  </div>
  <main>
    <section class="news-section">
      <h1 class="news-header">Latest News</h1>
      <?php
      for ($i=1; $i <= 8; $i++) {?>
        <div class="news-item">
          <img class="news-img" src="http://lorempixel.com/1920/1080/city" alt="">
          <div class="news-content">
            <h1>News Title <?php echo $i ?></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
          </div>
        </div>
      <?php } ?>
    </section>
    <div class="sidebar-scroll">
      <section class="sidebar">
        <?php
        for ($i=1; $i <= 4; $i++) {?>
          <div class="sidebar-item">
            <h1>Sidebar Item <?php echo $i ?></h1>
          </div>
        <?php } ?>
      </section>
    </div>
  </main>
  <main>
    <div class="circle">
      <div class="circle-inner"></div>
    </div>
    <div class="circle2">
      <div class="circle-inner2"></div>
    </div>
  </main>
  <main>
    <div class="square">
      <div class="square-inner"></div>
    </div>
    <div class="square2">
      <div class="square-inner2"></div>
    </div>
  </main>
</body>
<?php get_footer(); ?>
<script type="text/javascript">
  var jsmediatags = window.jsmediatags;

  document.querySelector('.fa-adjust').addEventListener('click', () => {
    document.querySelector('.container').classList.toggle('container-dark');
    document.querySelector('html').classList.toggle('dark');
    document.querySelector('body').classList.toggle('dark');
    document.querySelector('.dark-switcher').classList.toggle('dark-switcher-active');
    document.querySelector('.news-section').classList.toggle('container-dark');
    document.querySelector('.sidebar').classList.toggle('container-dark');
    document.querySelector('.circle').classList.toggle('container-dark');
    document.querySelector('.circle-inner').classList.toggle('container-dark');
    document.querySelector('.circle2').classList.toggle('container-dark');
    document.querySelector('.circle-inner2').classList.toggle('container-dark');
    document.querySelector('.square').classList.toggle('container-dark');
    document.querySelector('.square-inner').classList.toggle('container-dark');
    document.querySelector('.square2').classList.toggle('container-dark');
    document.querySelector('.square-inner2').classList.toggle('container-dark');

    document.querySelectorAll('.news-item').forEach(function(item){
      item.classList.toggle('dark-news-item');
    });
    document.querySelectorAll('.sidebar-item').forEach(function(item){
      item.classList.toggle('dark-sidebar-item');
    });
    document.querySelectorAll('.player-buttons i').forEach(function(item){
      item.classList.toggle('player-dark');
    })
  })
</script>

</html>
