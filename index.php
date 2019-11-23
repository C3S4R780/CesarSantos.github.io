<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Custom_Theme_-_Cesar\'s_Portfolio
 */

get_header();
?>
<div class="screenBlock">
  <h1>Este site está disponivel apenas para desktop ...</h1>
  <p>Por enquanto!</p>
</div>
<!--***Inicio Hero image***-->
<section class="hero" id="section_home">
  <div class="hero-title">
    <h1 class="">Olá! Meu nome é <span>CesarSantos</span></h1>
    <h2>Sou <span>Desenvolvedor</span> e <span>Programador</span> WEB</h2>
  </div>
  <i class="next-section fas fa-angle-double-down"></i>
</section>
<!--***Fim Hero image***-->

<!--***Inicio Sobre***-->
<section id="section_sobre">
  <div class="selfie">
    <img class="selfie-img" src="http://graph.facebook.com/100005564222283/picture?type=large&redirect=true" alt="">
    <div class="selfie-name">
      <h1>Cesar Santos</h1>
    </div>
    <div class="selfie-description">
      <p>Descrição sobre mim!</p>
    </div>
  </div>
</section>

<section id="section_skills" style="width:100%; height:100vh; display:flex; justify-content:center; align-items:center; border:1px solid #bbb">
  <h1 style="font-size: 50px; color:#fff; text-align:center;">WIP</h1>
</section>

<section id="section_contato">
  <div class="contato_content">
    <div class="contato_title">
      <h1>Entre em contato:</h1>
    </div>
    <div class="contato_description">
      <p>Caso possa ajuda-lo(a) em alguma coisa, não exite em entra em contato!</p>
    </div>
  </div>
  <?php echo do_shortcode('[contact-form-7 id="5" title="Form Geral"]') ?>
</section>

<?php
get_footer();
