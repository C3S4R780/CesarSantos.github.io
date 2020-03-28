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
  <h1>Este site está disponivel apenas para computadores ...</h1>
  <p>Por enquanto!</p>
</div>
<!--***Inicio Hero image***-->
<section class="hero" id="section_home">
  <div class="hero-title">
    <h1>Olá! Meu nome é <span>Cesar Santos</span></h1>
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
      <p>Sou desenvolvedor e programador a <?php echo date('Y') - 2017; ?> anos, comecei aprendendo HTML por diversão e acabei me interessando mais
      por criação e manutenção de sites!</p>
      <p>Embora eu não seja muito criativo quanto a designs, tento fazer um site que corresponda com o tipo de conteudo sem irritar ou
        atrapalhar o usuario e sua navegação!</p>
      <p>Mas isso não me impede de criar designs e layouts complexos! Se tiver a ideia, eu posso transformá-la em um site!</p>
      <p>Atualmente trabalhando como Estagiario na
        <a href="https://paprica.ag" target="_blank" rel="noopener noreferrer">
          <img src="<?php bloginfo('template_url'); ?>/_assets/imgs/logo-paprica.svg" width="170px" style="vertical-align: top;" alt="">
        </a>
      </p>
    </div>
  </div>
</section>
<!--***Fim Sobre***-->

<!--***Inicio Skills***-->
<section id="section_skills" style="width:100%; height:100vh; display:flex; justify-content:center; align-items:center; border:1px solid #bbb">
  <h1 style="font-size: 50px; color:#fff; text-align:center;">WIP</h1>
</section>
<!--***Fim Skills***-->

<!--***Inicio Contato***-->
<section id="section_contato">
  <div class="contato_content">
    <div class="contato_title">
      <h1>Entre em contato:</h1>
    </div>
    <div class="contato_description">
      <p>Caso possa ajuda-lo(a) em alguma coisa, não exite em entra em contato!</p>
    </div>
    <div class="contato_metodos">
      <p>Alem do formulário ao lado, você pode entrar em contato comigo pelas seguintes formas:</p>
      <ul class="contato_list">
        <li class="contato_whatsapp"><i class="fab fa-whatsapp"></i><br /><a href="https://wa.me/+5541987611116">Whatsapp</a></li>
        <li class="contato_linkedin"><a href="#">Linked<i class="fab fa-linkedin"></i></a></li>
        <li class="contato_phone">Ou pelo telefone:<br /><a href="tel:+5541987611116"><i class="fas fa-phone-alt"></i>(41) 98761-1116</a></li>
      </ul>
    </div>
  </div>
  <?php echo do_shortcode('[contact-form-7 id="144" title="Form Geral"]') ?>
</section>
<!--***Fim Contato***-->

<?php
get_footer();
