<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Clean Blog Template</title>
<meta name="keywords" content="clean blog template, html css layout" />
<meta name="description" content="Clean Blog Template is provided by templatemo.com" />
	
	<?php wp_head();?>

</head>
<body>

<div id="templatemo_wrapper">

	<div id="templatemo_menu">
		
		<?php wp_nav_menu([
			'theme_location'  => 'menu-top',
			'menu'            => '',
			'container'       => '',
			'container_class' => '',
			'menu_class'      => '',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		]);?>
    
    
    </div> <!-- end of templatemo_menu -->
