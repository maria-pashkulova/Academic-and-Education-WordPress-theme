<?php
	get_header();
	$frontPageId = get_option('page_on_front');
?>

<!-- Banner Section -->
    <section class="banner-section">
		<div class="pattern-layer" style="background-image: url(<?php bloginfo('template_directory');?>/images/background/1.png)"></div>
		<div class="auto-container">

			<!-- Content Boxed -->
			<div class="content-boxed">
				<div class="inner-column">
					<h1>
						<?php the_field('greeting', $frontPageId); ?>
					 </h1>
					<div class="greeting-text">
						<?php the_field('greeting-info',$frontPageId); ?>
					</div>
					<div class="buttons-box">
						<a href="<?php echo site_url('/всички-курсове');?>" class="theme-btn btn-style-one"><span class="txt"> Да започваме! <i class="fa fa-angle-right"></i></span></a>
					</div>
				</div>
			</div>
			
			<!-- Image Boxed -->
			<div class="image titlt" data-tilt data-tilt-max="4">
				<a href="images/resource/banner.png" data-fancybox="banner" data-caption="" class=""><img src="<?php bloginfo('template_directory');?>/images/resource/banner.png" alt="" /></a>
			</div>
			
			
		</div>
	</section>
	<!-- End Banner Section -->

<!-- Courses Section -->
	<section class="courses-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.60" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(<?php bloginfo('template_directory');?>/images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.60" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(<?php bloginfo('template_directory');?>/images/icons/icon-2.png)"></div>
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2><?php the_field('courses-section-title', $frontPageId); ?></h2>
							<div class="text">
								<?php the_field('course-section-description', $frontPageId); ?>
							</div>
						</div>
						<a href="<?php echo site_url('/всички-курсове');?>" class="theme-btn btn-style-three" target="_blank"><span class="txt">Виж всички курсове <i class="fa fa-angle-right"></i></span></a>
					</div>
				</div>
				

				<!-- Cource Block -->
				<?php 
					//потребителят трябва да създаде категория с име Курсове
					$courseCatId = get_category_id('Курсове');
					$args = array(
                            	'post_type' => 'post' ,
                            	'cat'  => $courseCatId,
                            	'posts_per_page' => 5);
                    query_posts($args) ;
                ?>
				
				<?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
				<div class="cource-block col-lg-4 col-md-6 col-sm-12">
					<div class="inner-box">
						<div class="image course-image-div">
							<a href="<?php the_permalink()?>" target="_blank">

								<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							 ?>
      							
      						 </a>
						</div>
						<div class="lower-content">
							<div class="clearfix">
								<div class="pull-left">
									<h5><a href="<?php the_permalink()?>" target="_blank"><?php the_title() ?></a></h5>
								</div>
								<div class="pull-right">
									<div class="price"><?php the_field('price') ?></div>
								</div>
							</div>
							<div class="text"><?php the_content() ?></div>
							<div class="clearfix">
								<div class="pull-left">
									<div class="students"><?php the_field('students-count') ?></div>
								</div>
								<div class="pull-right">
									<a href="<?php the_permalink()?>" class="enroll" target="_blank">Запиши се</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php 
					endwhile;
					endif;
				?>

			</div>
		</div>
	</section>
	<!-- End Courses Section -->
	
	<!-- Education Section -->
	<section class="education-section">
		<!-- <div class="patern-layer-one paroller" data-paroller-factor="0.60" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.60" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div> -->
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Image Column -->
				<div class="image-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column parallax-scene-1">
						<div class="image parallax-layer" data-depth="0.30">
							<img src="<?php bloginfo('template_directory');?>/images/resource/education.png" alt="" />
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<h2>Нашата Философия</h2>
						<div class="text">Ние смятаме, че качествените знания трябва да бъдат достъпни за всеки. Ние искаме преди всичко да Ви НАУЧИМ, затова нашите курсове ще бъдат атрактивни, актуални и адаптивни.</div>
						<a href="<?php echo site_url('/всички-курсове');?>" class="theme-btn btn-style-two"><span class="txt" target="_blank">Научете повече <i class="fa fa-angle-right"></i></span></a>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Education Section -->
	
	
	
	<!-- Call To Action Section -->
	<section class="call-to-action-section">
		<div class="auto-container">
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<!-- Sec Title -->
						<div class="sec-title">
							<h2>Учете със собствено темпо и удоволствие!</h2>
							<div class="text">Изберете сферата, в която искате да се развиете, а ние ще ви подкрепим!</div>
						</div>
					</div>
				</div>
				
				<!-- Form Column -->
				<div class="form-column col-lg-6 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="help">Имам въпрос?</div>
						<div class="search-box">
							<form method="post" action="<?php echo site_url('/контакти');?>">
								<div class="form-group">
									<input type="search" name="search-field" value="" placeholder="Искам повече детайли за ..." required>
									<button type="submit"><span class="icon fa fa-search"></span></button>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Call To Action Section -->
	
	<!-- Achievement Section -->
	<section class="achievements-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>
					<?php the_field('achievements-title', $frontPageId); ?>
				</h2>
			</div>
			
			<!-- Fact Counter -->
			<div class="fact-counter">
				<div class="row clearfix">

					<?php 
						//потребителят трябва да създаде категория с име Постижения
						$achievementCatId = get_category_id('Постижения');
						query_posts('cat=' . $achievementCatId); 
					?>
					<?php if(have_posts() ) : while (have_posts()) : the_post(); ?>

					<!-- Column -->
					<div class="column counter-column col-lg-6 col-md-6 col-sm-12">
						<div class="inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
							<div class="content">
								<div class="icon-box">
									<span class="icon">
										<?php 
											$image = get_field('icon-achievements');
											if( !empty( $image ) ): 
										?>
    									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

										<?php endif; ?>
									</span>
								</div>
								<h4 class="counter-title"><?php the_title() ?></h4>
								<div class="count-outer count-box alternate">
									<span class="count-text" data-speed="1000" data-stop="<?php echo get_field('value-achievements') ?>"><?php the_field('value-achievements') ?></span>
								</div>
							</div>
						</div>
					</div>
					<?php 
						endwhile;
						endif;
					?>
						<div class="column counter-column col-lg-12 col-md-6 col-sm-12">
						<?php if( function_exists('photo_gallery') ) { photo_gallery(1); } ?>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Achievement Section -->
	
	<!-- Fluid Section One -->
    <section class="fluid-section-one">
		<div class="patern-layer-one paroller" data-paroller-factor="0.60" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(<?php bloginfo('template_directory');?>/images/icons/icon-1.png)"></div>
    	<div class="outer-container clearfix">
        	
			<!-- Image Column -->
            <div class="image-column" >
            	<?php 
						$image = get_field('upcoming-events-img',$frontPageId);
						if( !empty( $image ) ): 
				?>
    			<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

				<?php endif; ?>
            </div>
			
            <!-- Content Column -->
            <div class="content-column">
            	<div class="inner-column">
					<div class="clearfix">
						<div class="pull-left">
							<h2><?php the_field('upcoming-events-title', $frontPageId); ?></h2>
						</div>
					</div>
					
					<!-- Blocks Outer -->
					<div class="blocks-outer">
						<?php 
						//потребителят трябва да създаде категория с име Предстоящи събития
						$eventCatId = get_category_id('Предстоящи събития');
						$args = array(
                            	'post_type' => 'post' ,
                            	'cat'  => $eventCatId,
                            	'posts_per_page' => 3);
                    	query_posts($args) ;
                		?>
						<?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
						<!-- Event Block -->
						<div class="event-block">
							<div class="inner-box">
								<div class="clearfix">
									<!-- Event Date -->
									<div class="event-date clearfix"><span class="date"><?php the_field('date-number'); ?></span><?php the_field('month-and-year'); ?></div>
									<!-- Event List -->
									<ul class="event-list">
										<li><?php the_field('event-category-1'); ?></li>
										<li><?php the_field('event-category-2'); ?></li>
									</ul>
								</div>
								<h3><a href="<?php the_field('event-url');?>"><?php the_title(); ?></a></h3>
							</div>
						</div>
						<?php 
						endwhile;
						endif;
						?>
						
					</div>
					
				</div>
			</div>
			
		</div>
	</section>
	
	<!-- Testimonial Section -->
	<section class="testimonial-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<h2>Курсистите за нас</h2>
			</div>
			
			<div class="single-item-carousel owl-carousel owl-theme">
				
				<?php query_posts('cat=3'); ?>
				<?php if(have_posts() ) : while (have_posts()) : the_post(); ?>
				<!-- Testimonial Block Two -->
				<div class="testimonial-block">
					<div class="inner-box">
						<div class="image-box">
							<div class="quote-icon flaticon-quote-5"></div>
							<div class="image">

								<?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							 ?>
							</div>
						</div>
						<div class="text"><?php the_content() ?></div>
					</div>
				</div>
			<?php 
				endwhile;
				endif;
			?>		
			</div>
			
		</div>
	</section>
	<!-- End Testimonial Section -->

<?php
	get_footer();
?>		