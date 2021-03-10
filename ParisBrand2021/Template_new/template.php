<?php 
	/* Template Name: Page Template
	   Template Post Type: page */       

//set headers to NOT cache a page
header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
header("Pragma: no-cache"); //HTTP 1.0
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

//or, if you DO want a file to cache, use:
header("Cache-Control: max-age=31557600"); //30days (60sec  60min  24hours * 30days)

?>
<!DOCTYPE html>
<html>

<head itemscope="" itemtype="http://schema.org/WebSite">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/media/css/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet preload">
  <?php wp_head(); ?>
  <?php if( have_rows('code_checking_hd','option') ):
		while ( have_rows('code_checking_hd','option') ) : the_row();
			if( get_row_layout() == 'textarea' ): 

				$textcode = get_sub_field('textcode');
				if($textcode) : 
					echo $textcode;
				endif;
				
			endif;
		endwhile;
	else :
		// no layouts found
	endif;
	?>
</head>

<body itemscope="" itemtype="http://schema.org/WebPage">
<?php get_template_part('Module/module'); ?>
<script src="<?php echo get_template_directory_uri(); ?>/media/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/media/dist/lib.js"></script>
<?php get_template_part('Module/Popup/messenger_1_0_0/messenger_1_0_0'); ?>
<?php get_template_part('Module/Popup/popup_person_1_0_0/popup_person_1_0_0'); ?>
<?php wp_footer(); ?>



