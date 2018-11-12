<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

?>
			<?php astra_content_bottom(); ?>

			</div> <!-- ast-container -->

		</div><!-- #content -->

		<?php astra_content_after(); ?>

		<?php astra_footer_before(); ?>

		<?php astra_footer(); ?>

		<?php astra_footer_after(); ?>

	</div><!-- #page -->

	<?php astra_body_bottom(); ?>

	<?php wp_footer(); ?>

	</body>
</html>


<script>
jQuery(window).scroll(function(){
  var sticky = jQuery('.sticky'),
      scroll = jQuery(window).scrollTop();
 
  if (scroll >= 300) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});
</script>

<style>

.fixed {
  position: fixed;
  top:0; left:0;
  width: 100%; }
</style>