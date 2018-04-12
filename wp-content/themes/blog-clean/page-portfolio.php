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
          <h2>Portfolio of Web Templates</h2>
            <div id="gallery">
                <?php $portfolio_post = new WP_Query( [
	                'post_type'      => 'post',
	                'posts_per_page' => - 1,
	                'category__in'   => [ 6, 5, 4, 3 ],
                ] ) ?>
              <ul>
              <?php if ( $portfolio_post->have_posts() ) : while( $portfolio_post->have_posts() ) : $portfolio_post->the_post(); ?>
                <li>
                    <div class="left">
                        <a href="images/gallery/image_06_b.jpg" class="pirobox" title="Project 6">
                          <?php the_post_thumbnail('small');?>
                        </a>
                    </div>
                  
                    <div class="right">
                        <h5><?php the_title();?></h5>
                        <p><?php the_field('excerpt');?></p>
                        <div class="button"><a href="<?php the_permalink();?>">Visit site</a></div>
                    </div>
                    <div class="cleaner"></div>
                </li>
              <?php endwhile; ?>
              <?php else: ?>
              <?php endif; ?>
              </ul>
            </div>
        </div>
  
  <div class="cleaner"></div>
  </div>
	<!-- end of templatemo_main -->

<?php get_footer(); ?>
