<?php get_header(); ?>

<main>
		<div class="slidepage">
			<img src="<?php echo get_template_directory_uri(); ?>/media/images/slidepage.jpg" alt="">
		</div>
		<div class="mainpage">
			<section class="mainbox">
				<div class="breadcrumb">
					<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="">','</p>');} ?>
				</div>

				<div class="detail">
					<p><img class="aligncenter" src="<?php echo get_template_directory_uri(); ?>/media/images/Detail_p1.jpg" alt=""></p>
					<section class="detailct cate">
						<?php
							if ( have_posts() ) : 
							$i=0;
							while ( have_posts() ) : the_post();
								global $post; 
								$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');            
								$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);
								if($i%2==0){echo '<div class="hd-row">';}							
								echo '
								
								 
									<div class="hd-col m6">
										<figure>
											<h2 class="ctt"><a href="'.get_permalink($post->ID).'"> '.get_the_title($post->ID).'</a></h2>
											<a href="'.get_permalink($post->ID).'"><img src="'.$img.'" alt="'.get_the_title($post->ID).'"></a>
											<figcaption>
												 '.get_the_excerpt($post->ID).'
												<p><a class="hd-btn more" href="'.get_permalink($post->ID).'">Đọc Thêm</a></p>
											</figcaption>
										</figure>
									</div>
									 
								
								 
								
								';
								if($i%2==1){echo '</div><hr class="line">';}
								$i++;
								?>
								
								
								<?php
							endwhile;
							if($i%2<1){echo '</div><hr class="line">';}
								?>
							<?php else : ?>        
							<?php endif; ?>
					 
						<div class="hd-center">
							<ul class="hd-pagination page_nav">
								<?php wp_pagenavi('','','');?>
							</ul>
						</div>
					</section>
				</div>

			</section>
		</div>
		 <?php get_sidebar(); ?>
	</main>

 <style>
.kangnam main {
    width: 100%;
    padding: 0px 0 0px !important;
    display: table;
}
.hd-col.m6 img {
		max-width: 100%;
	}	
	.breadcrumb_last{display:inherit  !important}
	.kangnam main .mainpage .mainbox .breadcrumb {
    background: #00597d;
    color: #fff;
    padding: 1px 23px !important;
    font-size: 13px;
}
</style>
<?php get_footer(); ?>
