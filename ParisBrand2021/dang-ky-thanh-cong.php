<?php 
/* Template Name: Đăng Ký Thành Công */
get_header();
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
			
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-6 post__right">
			<?php while ( have_posts() ) : the_post(); ?>	
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
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 post__left">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>
<?php //the_field('code_form_regist','option'); ?>
<?php get_footer(); ?>
