<?php 
	/* Template Name: Home New Core
	* Template Post Type: page
    */       

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
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">   -->
  <meta name="viewport" content="initial-scale=1, width=device-width, maximum-scale=1, minimum-scale=1, user-scalable=no">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
  <meta name="google-site-verification" content="bubOgTCixkMaL_iUrFCVV3GI16_DsHEEts_Ept_dy0c" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/core_v2/css/font.css" />
  <?php include(locate_template('core_v2/css/style.php')); ?>
</head>

<body id="prnew" itemscope="" itemtype="http://schema.org/WebPage">
<?php 
  get_template_part('Module_v2/module_header');
  get_template_part('Module_v2/filter_template');
  get_template_part('Module_v2/module_footer');
?>
<?php  wp_footer(); ?>
<?php //do_action( 'theme_js' ); ?>

</body>
