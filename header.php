<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title()?></title>
	<?php wp_head()?>
</head>
<body>
<h1><a href="<?php echo home_url()?>"><?php bloginfo('name');?></a></h1>
<h1><?php bloginfo('description');?></h1>
<nav id="">
	 
	 <?php 

      $nav = array(
       'theme_location'=>'primaary'

      );
	 wp_nav_menu($nav);

	 ?>

</nav>
