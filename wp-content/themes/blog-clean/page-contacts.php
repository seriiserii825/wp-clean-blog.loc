/*
Template Name: Contacts
*/

<?php get_header();?>

    <div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1><a href="http://www.templatemo.com" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a></h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->
	
	    <?php get_sidebar();?>
    
    </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
    
    <div id="templatemo_main">
        
        	<h1>Contact Us</h1>
	
	          <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	            <?php the_content();?>
	          <?php endwhile; ?>
	              <?php else:?>
	          <?php endif; ?>

        
        </div> <!-- end of main -->
        <div class="cleaner"></div>
 	<div class="cleaner"></div>
  </div>
	<!-- end of right column -->
  <div class="cleaner_h20"></div>

<?php get_footer();?>
