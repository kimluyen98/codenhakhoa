<?php 
/* Template Name: Page Ảnh Trước Sau
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
<section class="before">
    <div class="container">
        <div class="before__box">
            <?php //the_field('album_new'); ?>
		</div>
	</div>
</section>

<?php 
    get_template_part('Module/module');
    the_field('code_form_regist','option'); 
?>
<style>
.peron_6_0_0 .container::before {display:none;}
.peron_6_0_0__title h2{padding-top:0}
</style>
<?php get_footer(); ?>