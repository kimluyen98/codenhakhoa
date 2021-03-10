<?php get_header();
$categories = get_the_category();
 ?>
<div class="breadcrum">
    <div class="container">        
        <?php if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('<span id="breadcrumbs">','</span>');
        } ?>
    </div>
</div>
<div class="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 post__left">
				<?php get_sidebar(); ?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 post__right">
				<div class="quang-cao">						
					<?php 
						$cate = get_the_category();
						$id= $cate[0]->cat_ID;
						if(get_field('bndb','category_'.$id)=='') {
							echo '
								<div class="advtop">
									<div class="textwidget"> 
										<div id="polyad_ads_zone3"></div>  
									</div>
								</div>
							';
						}else {
							echo'
								<div class="advtop">
									<div class="textwidget"> 
										<div>
											<a href="'.get_field('lbn','category_'.$id).'">
												<img src="'.get_field('bndb','category_'.$id).'" class="aligncenter" />
											</a>
										</div>
									</div>
								</div>
							';
						}
					?>
					
				</div>
				<!---END QC đầu bài viết--->
			<?php while ( have_posts() ) : the_post(); ?>	
				<h1 class="title-post"><?php the_title(); ?></h1>
				<div class="tac-gia">
					<p>
						<span>Tác giả:</span> Thu Phương * <span>Tham vấn y khoa: </span>Chuyên gia Nha Khoa Paris
					</p>
					<p>
						<i class="icon-calendar-1"></i> 
						<span><?php echo get_post_modified_time('d/m/Y');?></span> 
					</p>
					<p>
						<a href="#pcm" class="cmName">
							<i class="icon-chat"></i>
							<?php echo wp_count_comments( $post->ID )->approved; ?> comment
						</a>
					</p>
				</div>
				<section class="content scroll_content ">
					<?php if(get_field('sapo',$post->ID) !="") {?>
					<div class="sapo">
						<?php echo get_field('sapo',$post->ID); ?>
					</div>
					<?php }?>
					<div class="chi-tiet">
						<?php the_content(); ?>
					</div>
					<?php $cuoi_bai = get_post_meta(get_the_ID(), 'cuoi_bai', true);   ?>
					<?php echo $cuoi_bai; ?>
				</section>
			<?php endwhile; ?>
			
				<div class="more">
					<h2 class="chi-tiet-title">tìm hiểu thêm</h2>
					<div class="nd-more">
						<?php
							$catz = get_the_category($post->ID);
							$cat=$catz[0]->term_id;
							$i=0;
							$my_query = new WP_Query('cat=1&offset=0&showposts=2'); while ($my_query->have_posts()) : $my_query->the_post(); global $post;$do_not_duplicate[$post->ID] = $post->ID;
								$kim='';
								$i++;
								$kim = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'thumbnail');             							
								$img = ($kim[0]!='')?$kim[0]:catch_that_image($post->ID);							
								echo '<a href="'.get_permalink($post->ID).'">>> '.get_the_title($post->ID).'</a></br>';
								endwhile;
							wp_reset_query(); ?> 
					</div>
				</div>
				<?php //include "myComment.php"; ?>
				<?php comments_template(); ?>
					<?php if ( ! empty( $categories ) ) { ?>
						<?php 
							$cate = get_the_category();
							$id= $cate[0]->cat_ID;
							if(get_field('bndb','category_'.$id)=='') {
								echo '
									<div class="advtop">
										<div class="textwidget"> 
											<div id="polyad_ads_zone4"></div>  
										</div>
									</div>
								';
							}else {
								echo'
									<div class="advtop">
										<div class="textwidget"> 
											<div>
												<a href="'.get_field('lbn','category_'.$id).'">
													<img src="'.get_field('bncb','category_'.$id).'" class="aligncenter" />
												</a>
											</div>
										</div>
									</div>
								';
							}
						?>
						<p class="dangxem">Bạn đang xem: <a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a> trong <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo   $categories[0]->name; ?></a></p>
						
			<?php } ?>

			</div>
		</div>
	</div>
</div>
<?php the_field('code_form_regist','option'); ?>
<?php get_footer(); ?>
