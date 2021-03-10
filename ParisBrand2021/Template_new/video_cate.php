<?php 
/* Template Name: Page Video Mới
* Template Post Type: page
*/
get_header(); 

?> 
<div class="breadcrum">
    <div class="container">        
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<span id="breadcrumbs">','</span>');
        } ?>
    </div>
</div>
<?php the_field('pagevideo_new'); ?>

<?php 
    get_template_part('Module/module');
    the_field('code_form_regist','option'); 
?>

<?php get_footer(); ?>