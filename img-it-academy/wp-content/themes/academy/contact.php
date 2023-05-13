<?php
 /** 
  * Template Name: Contact
  * 
  * @package WordPress 
  * @subpackage Twenty_Fourteen 
  * @since Twenty Fourteen 1.0 
  */
	get_header();
?>

<section class="page-title">
        <div class="auto-container">
        	<h1><?php the_title() ?></h1>
        	<!-- Search Boxed -->
			<div class="search-boxed">
				<div class="search-box">
					<form method="post" action="#">
						<div class="form-group">
							<input type="search" name="search-field" value="" placeholder="Искам повече детайли за ..." required>
							<button type="submit"><span class="icon fa fa-search"></span></button>
						</div>
					</form>
				</div>
			</div>
			
        </div>
</section>
<section class="contact-page-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="auto-container">
			<div class="inner-container">
				<!-- Sec Title -->
				<div class="sec-title centered">
					<h2>Свържете се с нас</h2>
				</div>
				<!-- Contact Form -->
				<div class="contact-form">
					<?php 
						echo do_shortcode('[contact-form-7 id="33" title="Contact form 1"]');
					?>

				</div>
			</div>
			<!-- Contact Info Section -->
			<div class="contact-info-section">
				<div class="title-box">
					<h2>Контактна информация</h2>
				</div>
				
				<div class="row clearfix">
					
					<!-- Info Column -->
					<div class="info-column col-lg-4 col-md-6 col-sm-12">
						<div class="info-inner">
							<div class="icon fa fa-phone"></div>
							<strong>Телефон</strong>
							<ul>
								<li><a href="<?php echo 'tel:'. get_field('phone');?>">
									<?php the_field('phone');?>
									</a></li>
							</ul>
						</div>
					</div>
					
					<!-- Info Column -->
					<div class="info-column col-lg-4 col-md-6 col-sm-12">
						<div class="info-inner">
							<div class="icon fa fa-envelope-o"></div>
							<strong>Имейл</strong>
							<ul>
								<li><a href="<?php echo 'mailto:' . get_field('email');?>"><?php the_field('email');?></a></li>
							</ul>
						</div>
					</div>
					
					<!-- Info Column -->
					<div class="info-column col-lg-4 col-md-6 col-sm-12">
						<div class="info-inner">
							<div class="icon fa fa-map-marker"></div>
							<strong>Адрес</strong>
							<ul>
								<li><?php the_field('address');?></li>
							</ul>
						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		<!-- Map Section -->
	<section class="map-section">
		<!-- Map Boxed -->
		<div class="map-boxed">
			<!--Map Outer-->
			<div class="map-outer">
				<?php dynamic_sidebar('bottom-widget');?>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
</section>
	

<?php
	get_footer();
?>		