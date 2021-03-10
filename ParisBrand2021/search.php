<?php get_header();

$cat = get_query_var('cat');?>
  
<div class="breadcrum">
    <div class="container">        
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<span id="breadcrumbs">','</span>');
        } ?>
    </div>
</div>
<div class="cauchuyen">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="tit">Bạn đang tìm kiếm với từ khóa <b style="color:#e1342e"><?php echo(get_search_query());?></b></div>
			<div class="homeLine homeLine-left"></div>
		</h2>
	</div>
</div>
<section class="cate_new">
        <div class="container">

            <div class="cate_new__box">
                <div id="tab-1" class="current ">
                    <div class="row post">
                       
						
						<?php
			if ( have_posts() ) : 
			
			while ( have_posts() ) : the_post();
				global $post; 
				$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');            
				$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
									
				echo '
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 post__item">
						<a href="'.get_permalink($post->ID).'">
							<img src="/rs/?w=270&h=270&src='.$img.'" class="">
							<p>'.get_the_title($post->ID).'...<span class="cate_new__more">Xem thêm ></span></p>
						</a>
					</div>
				';
			?>
			
			<?php
				endwhile;
		
			?>
		<?php else : ?>        
		<?php endif; ?>

                    </div>
                    <div class="line">
                        <hr>
                    </div>
                   
                </div>
            </div>
			<?php get_template_part('Module_v2/Category/pagination_1_0_0/pagination_1_0_0'); ?>
          
        </div>
    </section>

<!-- <div class="cau-chuyen-kh">
	<div class="container">
		<div class="box">

		<?php
			if ( have_posts() ) : 
			
			while ( have_posts() ) : the_post();
				global $post; 
				$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
				$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
									
				echo '
					<div class="box-item">
						<div class="box-item-11">
							<a href="'.get_permalink($post->ID).'"><img src="/rs/?w=94&h=94&src='.$img.'" class=""></a>
						</div>
						<div class="box-item-2">
							<a href="'.get_permalink($post->ID).'" class="dec">'.get_the_title($post->ID).'</a>
							<a href="'.get_permalink($post->ID).'" class="reply">xem thêm </a>
							<a href="'.get_permalink($post->ID).'" class="more">></a>
						</div>
					</div>
				';
			?>
			
			<?php
				endwhile;
		
			?>
		<?php else : ?>        
		<?php endif; ?>

			<div class="pages">
				<div class="wp-pagenavi">
				<?php wp_pagenavi('','','');?>
				</div>
			</div>
		</div>
	</div>
</div> -->


 
   
<?php get_footer(); ?>
<style>
@media (max-width: 414px){
	.cate_new .post__item img{
		width: 100%;
	}
	.cate_new .post__item{
		text-align: center;
	}
	.cate_new .post__item p{
		margin: 10px 0;
	}
}
</style>