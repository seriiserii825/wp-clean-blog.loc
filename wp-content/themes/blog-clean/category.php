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
          
            <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
              <div class="post_section">
                
                  <span class="comment">
                    <a href="blog_post.html">256</a>
                  </span>
              
                  <h2>
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                  </h2>
                  
                  December 24, 2048 | <strong>Author:</strong> Steve | <strong>Category:</strong>
                  <a href="#">Web Design</a>
	
	              <?php the_post_thumbnail('middle');?>
	
	              <p><?php the_field('excerpt');?></p>
                
                <a href="<?php the_permalink();?>">Continue reading...</a>
              
              </div>
            <?php endwhile; ?>
                <?php else:?>
            <?php endif; ?>
		</div>
  
  <div class="cleaner"></div>
  </div>
	<!-- end of templatemo_main -->

<?php get_footer(); ?>
