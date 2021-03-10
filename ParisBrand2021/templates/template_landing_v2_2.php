<?php 
  /* Template Name: Template Module Landing New Core 2
  * Template Post Type: post
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
  <!-- <meta name="robots" content="noindex, follow"> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_template_directory_uri(); ?>/core/css/style.css" /> -->
  <?php include(locate_template('core_v2/css/style.php')); ?>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
  <title><?php wp_title(''); ?></title>
  <?php wp_head(); ?>
  

</head>

<body itemscope="" itemtype="http://schema.org/WebPage">
<script src="<?php echo get_template_directory_uri(); ?>/core/dist/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/core_v2/js/lib-min.js"></script>
<?php 
 include(locate_template('core_v2/dist/lib.php'));
  // get_template_part('Module_v2/module_header_ld');
  include(locate_template('Module_v2/module_landing.php'));
  get_template_part('Module_v2/module_footer_ld');	
  get_template_part('Module_v2/Landing/popup_regist_1_0_1/popup_regist_1_0_1');	
  get_template_part('Module_v2/Landing/popup_call_1_1_0/popup_call_1_1_0');	

  
?>

<script>
  // add Img Lazy Demo
addImgDefault('img.lazy','src');
addImgDefault('source.lazy','srcset');

window.addEventListener("scroll", function () { 
    // Add Onscroll .menu a
    onScroll();
    // Add Lazy Screen LDP
    myLoad('section','loaded');
    myLoad('.slide_run','slide');
    myLazy('img.lazy','src');
    myLazy('source.lazy','srcset');
    myLazy('.lazy-bg','img-bg');
}); 
// Add Class : 1. Name Button / 2. Name Object / 3. Name Class Add
addClass('.siteHeaderNav','.siteHeaderMain','active');
addClass('.siteHeaderNav','.siteHeader-bg','active');

// Remove Class : 1. Name Button / 2. Name Object / 3. Name Class Add
removeClass('.siteHeader-bg','.siteHeaderMain','active');
removeClass('.siteHeader-bg','.siteHeader-bg','active');
removeClass('.siteHeader a','.siteHeaderMain','active');
removeClass('.siteHeader a','.siteHeader-bg','active');
</script>


<?php 
echo $css_inline;
// echo $js_inline;
?>
<?php 
  wp_footer(); 
  // get_template_part('Module_v2/module_sites');
  
?>
</body>