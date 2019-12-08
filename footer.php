<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Custom_Theme_-_Cesar\'s_Portfolio
*/

?>
<!--Inicio Footer-->
<footer>

</footer>
<!--Fim Footer-->

<?php if (is_home()) {?>
  <iframe class="spotify_player" src="https://open.spotify.com/embed/playlist/1Ja9vabf9mX5pt3Blci5Ux" width="80" height="80" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
<?php } ?>
<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<script src="https://kit.fontawesome.com/4ff97d205b.js" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" integrity="sha256-+9YNuItWuR4sbqeaNiJOxG0BvptYz4fbUXbIZoH5Jwo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="<?php bloginfo("template_url"); ?>/_assets/js/main.js" charset="utf-8"></script>
</body>
<!-- (☞ﾟヮﾟ)☞ (U21hcnQgb25lLCBhcmVuJ3QgeW91ID8gSGVyZSdzIHlvdXIgcHJpemUNCg0KaHR0cHM6Ly95b3V0dS5iZS9kUXc0dzlXZ1hjUSAg) ☜(ﾟヮﾟ☜) -->
</html>
