<?php get_header(); ?>

<style>
  html, body {
    position: relative;
    font-family: 'Garden Grown US' !important;
    overflow: hidden;
    background-color: #fff;
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('<?php bloginfo('template_url'); ?>/_assets/imgs/mamae-bg.png');
    background-size: 500px;
    animation: bgScroll 20s linear infinite;
  }
  @keyframes bgScroll {
    from {
      background-position-y: 0px;
    }
    to {
      background-position-y: 500px
    }
  }
  h1 {
    margin: 0;
  }
  #trp-floater-ls, .loader{
    display: none;
  }
  .overlay {
    position: absolute;
    z-index: 99;
    transition: all 300ms ease;
    display: block;
    width: 100vw;
    height: 100vh;
    background-color: #222;
  }
  .emojis {
    position: absolute;
    z-index: 98;
    font-size: 30px;
  }
  .emoji {
    position: fixed;
  }
  .mae_title, .mae_message {
    position: absolute;
    z-index: 100;
    width: 100%;
    text-align: center;
    color: #fff;
    text-shadow: 0 0px 3px #000, 0px 4px 10px red, -1px -1px 5px red
  }
  .mae_title {
    top: -60px;
  }
  .mae_title h1{
    font-size: 50px;
  }
  .mae_letters {
    position: absolute;
    z-index: 10;
    color: #fff;
    font-weight: 100;
    animation: pulse 600ms ease-in alternate infinite;
    animation-delay: 5s;
    opacity: 0;
  }
  .mae_message {
    font-size: 25px;
  }
  .mae {
    position: relative;
    font-size: 50px;
    line-height: 0;
    text-shadow: -1px -1px 6px red, 0 2px 3px #000;
  }
  .heart {
    position: relative;
    z-index: 100;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100vw;
    height: 100vh;
  }
  .heart svg {
    width: 100%;
    height: 220px;
    animation: pulse 600ms ease-in alternate infinite;
    animation-delay: 5s;
  }
  @keyframes pulse {
    from{transform: scale(1);}
    to{transform: scale(1.1);}
  }
  .heart svg path {
    stroke-dasharray: 1000;
    stroke-dashoffset: 0;
    stroke: #E24D3C;
    stroke-width: 1px;
    animation: draw 2.5s ease-in-out;
  }
  @keyframes draw {
    0% {
      fill: rgba(0,0,0,0);
      stroke: #C03A2B;
      stroke-dashoffset: 1000;
    }
    85% {
      fill: rgba(0,0,0,0);
      stroke: #C03A2B;
    }
    100% {
      stroke-dashoffset: 840;
      fill:#C03A2B;
    }
  }

  path.fill {
    fill:#C03A2B;
  }

</style>

<span class="overlay"></span>

<div class="emojis">
  <?php
  $numOfEmojis = rand(15, 20);
  for ($i=1; $i <= $numOfEmojis; $i++) { ?>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">😍</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">💖</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">💝</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">❤️</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">💗</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">💓</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">💘</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">⭐</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">🌟</p>
    <p style="font-size: <?php echo rand(16, 32); ?>px;top:<?php echo rand(0, 100); ?>%;left:<?php echo rand(0, 100); ?>%;" class="emoji">✨</p>
  <?php } ?>
</div>

<div class="mae_title">
  <h1>Feliz Aniversário!</h1>
</div>
<div class="heart">
  <div class="mae_letters">
    <span class="mae">M</span>
    <span class="mae">ã</span>
    <span class="mae">e</span>
    <span class="mae">!</span>
  </div>
  <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
       viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
  <path class="fill" d="M24.85,10.126c2.018-4.783,6.628-8.125,11.99-8.125c7.223,0,12.425,6.179,13.079,13.543
  	c0,0,0.353,1.828-0.424,5.119c-1.058,4.482-3.545,8.464-6.898,11.503L24.85,48L7.402,32.165c-3.353-3.038-5.84-7.021-6.898-11.503
  	c-0.777-3.291-0.424-5.119-0.424-5.119C0.734,8.179,5.936,2,13.159,2C18.522,2,22.832,5.343,24.85,10.126z"/>
  </svg>
</div>
<div class="mae_message">
  <h1><span>Te</span> <span>amo <span>demais!</h1>
</div>

<?php get_footer(); ?>
<script>
window.addEventListener('DOMContentLoaded', function() {
  const mamaeTl = gsap.timeline({ defaults: { duration: 2 } });

 mamaeTl.fromTo(document.querySelector('.mae_title'), { top:-100 }, { ease: Elastic.easeOut.config( 1, 0.7), top:140 },'+=2.8')
        .to(document.querySelector('.overlay'), {opacity:0}, '-=1')
        .to(document.querySelector('.mae_letters'), {opacity:1}, '-=3')
        .from(document.querySelectorAll('span.mae'), { opacity:0, ease: Elastic.easeOut.config( 1, 0.8) ,top:-50, stagger:0.1 }, '-=2')
        .to(document.querySelector('.mae_message'), { ease: Elastic.easeOut.config( 1, 0.8) , bottom:135 }, '+=0.5')
        .from(document.querySelectorAll('.emoji'), { ease: Elastic.easeOut.config( 1, 0.5) , opacity:0 , y:-50, stagger:0.1 }, '-=0.5');
})
</script>
