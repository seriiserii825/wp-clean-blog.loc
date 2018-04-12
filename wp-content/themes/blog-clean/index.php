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
    
    	<div id="featured_project">
            <div id="slider">
                <ul id="sliderContent">
                    <li class="sliderImage">
                        <a href=""><img src="<?php bloginfo( 'template_url' ) ?>/assets/images/slider/1.jpg" alt="1"/></a>
                        <span class="top"><strong>Project 1</strong><br/>Suspendisse turpis arcu, dignissim ac laoreet a, condimentum in massa.</span>
                    </li>
                    <li class="sliderImage">
                        <a href=""><img src="<?php bloginfo( 'template_url' ) ?>/assets/images/slider/2.jpg" alt="2"/></a>
                        <span class="bottom"><strong>Project 2</strong><br/>uisque eget elit quis augue pharetra feugiat.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/slider/3.jpg" alt="3"/>
                        <span class="left"><strong>Project 3</strong><br/>Sed et quam vitae ipsum vulputate varius vitae semper nunc.</span>
                    </li>
                    <li class="sliderImage">
                        <img src="<?php bloginfo( 'template_url' ) ?>/assets/images/slider/4.jpg" alt="4"/>
                        <span class="right"><strong>Project 4</strong><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                    </li>
                    <li class="clear sliderImage"></li>
                </ul>
            </div>
        </div>
        
        <div id="templatemo_main">
          
            <?php $index_posts = new WP_Query([
                    'category_name' => 'blog'
            ]);?>
        
            <?php if ( $index_posts->have_posts() ) :  while ( $index_posts->have_posts() ) : $index_posts->the_post(); ?>
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
