<?php 
	get_header();
?>

<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
            <h1>Курсове в категорията</h1>
            
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
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
        <div class="patern-layer-one paroller" data-paroller-factor="0.40" data-paroller-factor-lg="0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-1.png)"></div>
        <div class="patern-layer-two paroller" data-paroller-factor="0.40" data-paroller-factor-lg="-0.20" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url(images/icons/icon-2.png)"></div>
        <div class="circle-one"></div>
        <div class="circle-two"></div>
        <div class="auto-container">
            <div class="row clearfix">
                
                <!-- Content Side -->
                <div class="content-side col-lg-9 col-md-12 col-sm-12">
                    <div class="our-courses">
                        

                        <!-- Options View -->
                        <div class="options-view">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <h3><?php single_cat_title(); ?></h3>
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="row clearfix">
                            
                            <!-- Cource Block -->
                        <?php 
                            if ( have_posts() ) {
                             while ( have_posts() ) {
                             the_post(); 
                        ?>  

                            <div class="cource-block-two col-lg-4 col-md-6 col-sm-12">
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
                                        <h5><a href="<?php the_permalink()?>" target="_blank"><?php the_title() ?></a></h5>
                                        <div class="text"><?php the_content() ?></div>
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <div class="students"><?php the_field('price') ?></div>
                                            </div>
                                            <div class="pull-right">
                                                <div class="hours"><?php the_field('modules-count') ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <?php
                                } 
                            }
                        ?>
                        </div>
                        
                    </div>
                    
                </div> <!-- end content side -->
                
                <!-- Sidebar Side -->
                
                <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                    <div class="sidebar-inner">
                        <aside class="sidebar">
                            <!-- Filter Widget -->
                            <div class="filter-widget">
                                <h5>Детайли</h5>
                                <?php dynamic_sidebar('right-sidebar');?>
                            </div>
                            
                        </aside>
                    </div>
                </div> <!-- end sidebar side -->
                

            </div>
            
        </div>
    </div>
    

<?php
    get_footer();
?>          
