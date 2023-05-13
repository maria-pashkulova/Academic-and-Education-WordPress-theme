<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?=bloginfo('name')?></title>
<!-- Stylesheets -->
<link href="<?php bloginfo('template_directory');?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/css/main.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory');?>/css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.png" type="image/x-icon">
<link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.png" type="image/x-icon">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Titillium+Web:wght@300;400;600;700;900&display=swap" rel="stylesheet">

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

	<?php
    wp_head();
    ?>
</head>

<body>

<div class="page-wrapper">
 	

    <!-- Main Header-->
    <header class="main-header header-style-one">
		
		<!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="clearfix">
				
					<!-- Top Left -->
                    <div class="top-left pull-left clearfix">
					
						<!-- Info List -->
                        <ul class="info-list">
							<li><span>Потърсете ни:</span><a href="tel:+359/ 0988 933 123"> +359/ 0988 933 123</a></li>
							<li><span>Пишете ни:</span><a href="mailto:hi@img-academy.com"> hi@img-academy.com</a></li>
						</ul>
						
                    </div>
					
					<!-- Top Right -->
					<div class="top-left pull-right clearfix">
						<div class="social-box top-social-box">
							<a href="https://www.facebook.com/it.academy.plovdiv" class="fa fa-facebook" target="_blank"></a>
							<a href="https://vimeo.com/itacademyplovdiv" class="fa fa-vimeo-square" target="_blank"></a>
							<a href="https://twitter.com/itacademypld" class="fa fa-twitter" target="_blank"></a>
							<a href="https://www.youtube.com/channel/UCtrCG3KE0Ntkd4p-rgSADEw" class="fa fa-youtube-play" target="_blank"></a>
							<a href="https://www.linkedin.com/profile/view?id=AAIAABpuGbIBHMI-fSFqmLxCgcPXHsbgI-DneFI&#038;trk=nav_responsive_tab_profile_pic" class="fa fa-linkedin-square" target="_blank"></a>
						</div>
					</div>
					
                </div>
            </div>
        </div>
		
    	<!-- Header Upper -->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-box">
                		<div class="logo logo-main-nav">
                		<?php 
                			if(function_exists('the_custom_logo')) {
                				the_custom_logo();
                			}
                		?>
                		</div>
                    </div>
                   	
                   	<div class="nav-outer clearfix">
						<!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
						<!-- Main Menu -->
						<nav class="main-menu show navbar-expand-md">
							<div class="navbar-header">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>

							<div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
								<?php 
									wp_nav_menu(array(
									'theme_location'  => 'top-menu',
									'menu'            => 'navigation',
									'container'       => '',
									'container_id'    => '',
									'container_class' => '',
									'menu_class'      => 'navigation clearfix',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								));
								?>



							</div>
							
						</nav>
						
					</div>
                   
                </div>
            </div>
        </div>
        <!-- End Header Upper -->
        
		<!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><?php 
                			if(function_exists('the_custom_logo')) {
                				the_custom_logo();
                			}
                		?></div>
                <div class="menu-outer">
					<!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
				</div>
            </nav>
        </div>
		<!-- End Mobile Menu -->
		
    </header>
    <!-- End Main Header -->
	
	