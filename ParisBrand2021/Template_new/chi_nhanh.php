<?php 
/* Template Name: Page Chi Nhánh
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
<section class="cate">
    <div class="container">
        <div class="cate__box">
            <?php the_field('chinhanh_new'); ?>
		</div>
	</div>
</section>

<?php the_field('code_form_regist','option'); ?>

<?php get_footer(); ?>