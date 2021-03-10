<?php 
/* Template Name: Page Câu Chuyện
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
<!-- <section class="tieu_bieu">
	<div class="container">
		<div class="tieu_bieu__box">
            <?php //the_field('pagestory_new'); ?>
		</div>
	</div>
</section> -->

<?php 
    get_template_part('Module/module');
    the_field('code_form_regist','option'); 
?>

<?php get_footer(); ?>