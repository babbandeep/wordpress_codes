<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Smart Cleaning
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<?php smartcleaning_header_cdn(); ?>
	<?php wp_head(); ?>
</head>
<body>

<div class="container-fluid no-padding main-header" id="scroll_top">
	<div class="container no-padding top-header main_banner_area">
		<div class="col-sm-2 n_p logo_wrp">
				<div class="logo">
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo the_field('logo','option'); ?>" alt="Fortress" class="img-responsive"></a>
				</div>
		</div>
		<div class="col-sm-10 n_p top-right top-contact">
			
			<span class="free_quote_btn">
			   <a href="<?php echo get_home_url(); ?>/contact-us/">Request a Free Quote >></a>
			</span>
			<span class="telephone_no">
			   Call us on : <a href="tel:<?php echo the_field('phone_number','option'); ?>" class="telephone"><?php echo the_field('phone_number','option'); ?></a>
			</span>
		</div>
	</div>
</div>

<div class="container-fluid no-padding header-wrapper">	
	<!-- Header -->
	<div class="container no-padding">
		<div class="col-sm-12 col-xs-12 n_p">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse menubar" id="bs-example-navbar-collapse-1">
				<?php if ( has_nav_menu( 'top' ) ) : ?>
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				<?php endif; ?>
			</div>
			
			<div class="top_social_link">
				<ul class="social-icons icon-circle"> 
					<?php 
				    if(have_rows('social','option')):?>
				    	<?php $social=0; while ( have_rows('social','option') ) : the_row();?>
							<li class="<?php the_sub_field('list_class','option') ?>"> <a href="<?php echo the_sub_field('social_link','option'); ?>" target="__blank"><?php the_sub_field('font_awesome_code','option') ?> </a></li>
						<?php $social++; endwhile; ?>
					<?php endif; ?>
				</ul>
		  	</div>
		</div>
	 </div>
	<!-- Header Ends -->	
 </div>

 <?php smartcleaning_page_banner(); ?>
