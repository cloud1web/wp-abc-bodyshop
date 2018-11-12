<?php
/**
 * Template for Primary Header
 *
 * The header layout 2 for Astra Theme. ( No of sections - 1 [ Section 1 limit - 3 )
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @see https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     Astra
 * @author      Astra
 * @copyright   Copyright (c) 2018, Astra
 * @link        http://wpastra.com/
 * @since       Astra 1.0.0
 */

?>

<div class="main-header-bar-wrap">
	<div class="main-header-bar sticky">
		<?php astra_main_header_bar_top(); ?>
		<div class="ast-container">

			<div class="ast-flex main-header-container">
				<?php astra_masthead_content(); ?>
			</div><!-- Main Header Container -->
		</div><!-- ast-row -->
		<?php astra_main_header_bar_bottom(); ?>
	</div> <!-- Main Header Bar -->
</div> <!-- Main Header Bar Wrap -->
<div class="container-back-image">
<div class="first-section">
<h1>We Care About Your Car</h1>
	<h3>
		ABC Bodyshop & Exhaust personnel are committed to providing top notch services to our clients with guaranteed satisfaction and persistent perfection. Whether it's an accidental damage or just a scratch around the corner, ABC Personnel will take care of your car just like our own.  
	</h3><br>
	<div class="elementor-button-wrapper">
			<a href="#" class="elementor-animation-float" role="button">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-icon elementor-align-icon-right">
			</span>
						<span class="elementor-button-text home-btn quote-btn"><button class="quote-btn">				GET ESTIMATE <i class="fa fa-angle-double-right" aria-hidden="true"></i>
</button></span>
		</span>
					</a>
		</div>
	</div>	
<div class="second-section">
	
	</div>	
</div>

<?php if( is_home() || is_front_page() ) : ?>
<style>
   .container-back-image {
    background: url(http://www.orbitedgetech.com/wordpress/abc-bodyshop.com/wp-content/uploads/2018/08/wallpaper2you_306991.jpg);
    width: 100%;
    height: 717px;
    background-size: cover;
    background-position: bottom;
}
.first-section {
    width: 50%;
    padding: 50px;
	padding-top: 10%;
}
.first-section h1 {
    font-size: 46px;
    color: #ffffff;
    font-weight: 800;
}	
.first-section h3 {
    font-size: 17px;
    line-height: 29px;
    color: #fff;

     text-align: justify;
	    padding-top: 10px;
}	

.elementor-button.elementor-size-md {
    font-size: 16px;
    padding: 15px 30px;
    -webkit-border-radius: 4px;
    border-radius: 4px;
    margin-top: 18px;
    background-color: #e4494e;
}	
.container-back-image
	{
		display:block !important;
	}
</style>
<?php endif; ?>
