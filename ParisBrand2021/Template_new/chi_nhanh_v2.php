<?php 
/* Template Name: Page Chi Nhánh NewCore
* Template Post Type: page
*/
get_header(); 

?> 
<!-- <div class="breadcrum">
    <div class="container">        
        <?php //if ( function_exists('yoast_breadcrumb') ) {
            //yoast_breadcrumb('<span id="breadcrumbs">','</span>');
        //} ?>
    </div>
</div> -->
<div class="cate_chinhanh">
<?php get_template_part('Module_v2/Category/breadcrumb_1_1_0/breadcrumb_1_1_0'); ?>
</div>

<?php get_template_part('Module_v2/module'); ?>

<?php //the_field('code_form_regist','option'); ?>
<?php get_template_part('Module_v2/Home/regist_6_1_0/regist_6_1_0'); ?>

<?php get_footer(); ?>

<style>
    .cate_chinhanh{
        margin-top: 60px;
    }
    .cate_chinhanh .breadcrumb_last{
        display: inline-block;
        color: #333;
        text-transform: uppercase;
        font-family: sans-serif;
        font-weight: 400;
    }
    @media screen and (max-width: 414px){
        .cate_chinhanh{
            margin-top: 20px;
        }
    }
</style>