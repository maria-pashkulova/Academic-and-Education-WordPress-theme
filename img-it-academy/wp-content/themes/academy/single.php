<?php
	get_header();
?>

<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		?>
		
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h1>Въведение в курса</h1>
			
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
    <!--End Page Title-->
	
	<!-- Intro Courses -->
	<section class="intro-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="circle-one"></div>
		<div class="auto-container">
			<div class="sec-title">
				<h2><?php the_title() ?></h2>
			</div>
			
			<div class="inner-container">
				<div class="row clearfix">
					
					<!-- Content Column -->
					<div class="content-column col-lg-8 col-md-12 col-sm-12">
						<div class="inner-column">
							
							<!-- Intro Info Tabs-->
							<div class="intro-info-tabs">
								<!-- Intro Tabs-->
								<div class="intro-tabs tabs-box">
								
									<!--Tab Btns-->
									<ul class="tab-btns tab-buttons clearfix">
										<li data-tab="#prod-overview" class="tab-btn active-btn">Общ преглед</li>
										<li data-tab="#prod-curriculum" class="tab-btn">Програма</li>
										<!-- <li data-tab="#prod-announcement" class="tab-btn">Announcement</li>
										<li data-tab="#prod-faq" class="tab-btn">FAQ</li>
										<li data-tab="#prod-reviews" class="tab-btn">Reviews</li> -->
									</ul>
									
									<!--Tabs Container-->
									<div class="tabs-content">
										
										<!--Tab / Active Tab-->
										<div class="tab active-tab" id="prod-overview">
											<div class="content">
												<!-- Cource Overview -->
												<div class="course-overview">
													<div class="inner-box">
														<h4>За курса <?php the_title() ;?>:</h4>
															<p><?php the_content(); ?></p>
														<?php the_field('overview');?>
														<h3>Лектор</h3>
														
														<div class="row clearfix lecturer">
															
															<!-- Student Block -->
															<div class="student-block col-lg-6 col-md-6 col-sm-12">
																<div class="block-inner">
																		<?php 
																		$image = get_field('lecturer-picture');
																		if( !empty( $image ) ): ?>
																		<div class="image">
																		<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
																		</div>
																		<?php endif; ?>
																	
																	<h2><?php the_field('lecturer-name') ?></h2>
																	<div class="text"><?php the_field('lecturer-info') ?></div>
																</div>
															</div>
														</div>
														
													</div>
												</div>
												
											</div>
										</div>
										<!--End active Tab / Active Tab-->
										
										<!-- Tab -->
										<div class="tab" id="prod-curriculum">
											<div class="content">
												<div class="course-overview">
													<div class="inner-box">
														<?php the_field('schedule');?>
													</div>
												</div>
											</div>
										</div>
										<!--End Tab -->
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Video Column -->
					<div class="video-column col-lg-4 col-md-12 col-sm-12">
						<div class="inner-column sticky-top">
							
							<!-- Video Box -->
							<div class="intro-video ">
								<?=get_the_post_thumbnail()?>
							</div>
							<!-- End Video Box -->
							<div class="price">	
							<?php the_field('price') ?>
							</div>
							<div class="time-left">
								<?php the_field('payment-details')?>
							</div>
							
							<a href="<?php echo site_url('/контакти');?>" class="theme-btn btn-style-three"><span class="txt">Записване сега <i class="fa fa-angle-right"></i></span></a>
							<!-- <a href="#" class="theme-btn btn-style-two"><span class="txt">Buy Now <i class="fa fa-angle-right"></i></span></a> -->
						</div>
					</div>
					
				</div>
			</div>
		
		</div>
	</section>
	<!-- End intro Courses -->
<?php
	} 
}
?>

<?php
	get_footer();
?>		