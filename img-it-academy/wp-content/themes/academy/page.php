<?php
	get_header();
?>

		<!-- Page Title -->
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
    <!--End Page Title-->
	
		
	<!-- Topics Courses -->
	<section class="topics-section">
		<div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
		<div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
		<div class="auto-container">
				<h2><?php the_title(); ?></h2>
				<div class="text">
					<?php the_content(); ?>
				</div>
		</div>
	</section>
	<!-- End Topics Courses -->
	
	<!-- Popular Courses -->
	<section class="popular-courses-section">
		<div class="auto-container">
			<div class="sec-title centered">
				<h2>Популярни курсове</h2>
			</div>
			<div class="row clearfix">
				
				<!-- Cource Block -->
				<?php 
					//потребителят трябва да създаде категория с име Курсове
					$courseCatId = get_category_id('Курсове');
					$args = array(
                            	'post_type' => 'post' ,
                            	'cat'  => $courseCatId,
                            	'posts_per_page' => 3);
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
	<!-- End Popular Courses -->
	
<?php
	get_footer();
?>		