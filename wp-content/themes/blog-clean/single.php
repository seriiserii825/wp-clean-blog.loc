<?php get_header(); ?>

<div id="templatemo_left_column">
    
        <div id="templatemo_header">
        
            <div id="site_title">
                <h1>
                  <a href="<?php echo home_url(); ?>" target="_parent">Clean <strong>Blog</strong><span>Free HTML-CSS Template</span></a>
                </h1>
            </div><!-- end of site_title -->
            
        </div> <!-- end of header -->
	
	<?php get_sidebar(); ?>
  
      </div> <!-- end of templatemo_left_column -->
    
    <div id="templatemo_right_column">
        
        <div id="templatemo_main">
        
		     <div class="post_section">
	             <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
                 <span class="comment">
                    <a href="blog_post.html">256</a>
                  </span>

                 <h2>
                    <?php the_title(); ?>
                  </h2>
			
			        <?php the_post_thumbnail( 'large' ); ?>
			
			        
                 <p><?php the_content(); ?></p>
  
               <?php endwhile; ?>
               <?php else: ?>
               <?php endif; ?>
		     </div>
  
        
        </div>
  <div class="cleaner"></div>
  </div>
	<!-- end of templatemo_main -->

<?php get_footer(); ?>
