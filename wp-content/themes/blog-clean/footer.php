<div class="cleaner_h20"></div>
  
  	<div id="templatemo_footer">
   
		Copyright © 2048 <a href="#">Your Company Name</a> |
        <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
        
    </div>
  
    <div class="cleaner"></div>
</div> <!-- end of warpper -->

<?php wp_footer();?>

<?php if(is_page('Blog')):?>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#slider').s3Slider({
        timeOut: 1600
      });
    });
</script>
<?php endif;  ?>

<?php if(is_page('Portfolio')):?>
  <script type="text/javascript" src="<?php bloginfo('template_url');?>/assets/js/piroBox.1_2.js"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $().piroBox({
      my_speed: 600, //animation speed
      bg_alpha: 0.5, //background opacity
      radius: 4, //caption rounded corner
      scrollImage : false, // true == image follows the page, false == image remains in the same open position
      pirobox_next : 'piro_next', // Nav buttons -> piro_next == inside piroBox , piro_next_out == outside piroBox
      pirobox_prev : 'piro_prev',// Nav buttons -> piro_prev == inside piroBox , piro_prev_out == outside piroBox
      close_all : '.piro_close',// add class .piro_overlay(with comma)if you want overlay click close piroBox
      slideShow : 'slideshow', // just delete slideshow between '' if you don't want it.
      slideSpeed : 4 //slideshow duration in seconds(3 to 6 Recommended)
    });
  });
  </script>
    <!--////// END  \\\\\\\-->
<?php endif;  ?>

</body>
</html>


