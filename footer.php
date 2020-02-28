<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RegulGroup
 */

?>
  <footer class="footer">
    <div class="container">
      <div class="footer__inner">
        <div class="row">
          <div class="col-12 col-md-7">
            <nav class="menu-footer">
              <?php
               wp_nav_menu( array(
                 'menu'            => 'main_menu',
                 'menu_class'      => 'menu-footer__inner', 
               ) );
               ?>
            </nav>
            <div class="footer__supplier"></div>
            <div class="social">
              <a href="<?php echo get_option('site_FB'); ?>" class="social__item"><i class="fab fa-facebook-f"></i></a>
              <a href="<?php echo get_option('site_VK'); ?>" class="social__item"><i class="fab fa-vk"></i></a>
              <a href="<?php echo get_option('site_Inst'); ?>" class="social__item"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
          <div class="col-12 col-md-5">
            <div class="contacts">
              <div class="contacts__item">
                <strong>Адрес:</strong> 117419, город Москва, улица Цюрупы,
                дом 1а, строение 2, помещение 3.
              </div>
              <br>
              <a href="tel:<?php echo get_option('site_telephone_back'); ?>" class="contacts__phone"><strong>Тел.:</strong> <?php echo get_option('site_telephone'); ?></a><br>
              <a href="tel:<?php echo get_option('site_telephone_back_mob'); ?>" class="contacts__phone"><strong>Моб.:</strong> <?php echo get_option('site_telephone_mob'); ?></a>
              <br><br>

              <div class="contacts__item"><strong>Эл. почта:</strong> <?php echo get_option('site_email'); ?></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
	<div class="overlay js-overlay-campaign">
		<div class="popup js-popup-campaign">
        <h3 class="popup__header">Мы обязательно перезвоним вам</h3>
        <?php echo do_shortcode( '[contact-form-7 id="5" title="Контактная форма popup"]' ); ?>
				<div class="close-popup js-close-campaign"><i class="fa fa-times"></i></div>
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
