<?php 
/* Template Name: Post Check IP
*  Template Post Type: post
*/

	//FUNCTION CHECK IP
	function get_IP_address() {
		foreach (array('HTTP_CLIENT_IP',
	'HTTP_X_FORWARDED_FOR',
	'HTTP_X_FORWARDED',
	'HTTP_X_CLUSTER_CLIENT_IP',
	'HTTP_FORWARDED_FOR',
	'HTTP_FORWARDED',
	'REMOTE_ADDR') as $key) {
			if (array_key_exists($key, $_SERVER) === true) {
				foreach (explode(',', $_SERVER[$key]) as $IPaddress) {
					$IPaddress = trim($IPaddress); // Just to be safe

					if (filter_var($IPaddress, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false) {

						return $IPaddress;
					}
				}
			}
		}
	}

	get_header();
	//CHECK IP VOTE
	$ip = get_IP_address();
	$time = date("d/m/Y H:i:s");
	$link = get_permalink();
	
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
								';
								
								if( have_rows('adv','option') ) : 
									while ( have_rows('adv','option') ) : the_row();
										if( get_row_layout() == 'adv_post' ):
											echo '
												<a href="'.get_sub_field('adv_link').'" rel="nofollow">
													<picture>
														<source media="(max-width:600px)" srcset="'.get_sub_field('adv_mb').'" />
														<img src="'.get_sub_field('adv_pc').'" />
													</picture>
												</a>
											';
										endif;
									endwhile;
								endif;
										
							echo '
									</div>
								</div>
								';
						}else {
							echo'
								<div class="advtop">
									<div class="textwidget"> 
										<div>
											<a href="'.get_field('lbn','category_'.$id).'" rel="nofollow">
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
				
				<section class="content  ">
					<div class="chi-tiet scroll_check">
						<div class="post_info">
							<div class="post_author pc">
								Tác giả:
								<a rel="nofollow" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
									<?php echo the_author_nickname(); ?> 
								</a>
								* Tham vấn y khoa: 
								<?php 
									$tham_van_mac_dinh = get_field('tham_van_mac_dinh','option');
									$tham_van_mac_dinh_link = get_field('tham_van_mac_dinh_link','option');
									$tham_van = get_field('tham_van');
									$tham_van_link = get_field('tham_van_link');
									if($tham_van){
										echo '
											<a rel="nofollow" href="'.$tham_van_link.'">'.$tham_van.'</a>
										';
									} else {
										echo '
											<a rel="nofollow" href="'.$tham_van_mac_dinh_link.'">'.$tham_van_mac_dinh.'</a>
										';
									}
								?>
								
							</div>
							<div class="post_info_box">
								<p><i class="icon-calendar"></i> <?php echo get_post_modified_time('d/m/Y');?></p>
								<p><a href="#pcm" class="cmName"><i class="icon-chat-1"></i> <?php echo wp_count_comments( $post->ID )->approved; ?> comment</a></p>
							</div>
						</div>
						<?php the_content(); ?>
						<div class="post_info mb">
							<div class="post_author ">
								Tác giả:
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
									<?php echo the_author_nickname(); ?> 
								</a><br/>
								Tham vấn y khoa: 
								<?php 
									$tham_van_mac_dinh = get_field('tham_van_mac_dinh','option');
									$tham_van_mac_dinh_link = get_field('tham_van_mac_dinh_link','option');
									$tham_van = get_field('tham_van');
									$tham_van_link = get_field('tham_van_link');
									if($tham_van){
										echo '
											<a href="'.$tham_van_link.'">'.$tham_van.'</a> 
										';
									} else {
										echo '
											<a href="'.$tham_van_mac_dinh_link.'">'.$tham_van_mac_dinh.'</a>
										';
									}
								?>
								
							</div>
						</div>
					</div>
					<?php $cuoi_bai = get_post_meta(get_the_ID(), 'cuoi_bai', true);   ?>
					<?php echo $cuoi_bai; ?>
				</section>
			<?php endwhile; ?>
			
				<div class="more">
					<h2 class="chi-tiet-title">tìm hiểu thêm</h2>
					<div class="nd-more">
						<?php $post_other = get_field('post_other'); ?>
						<?php if($post_other) : ?>
						<?php echo $post_other; ?>
						<?php else : ?>

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
						<?php endif; ?>
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
										<div class="quang-cao">
											<div class="textwidget"> 
									';
									// Lay field trong option theme
									if( have_rows('adv','option') ) : 
										while ( have_rows('adv','option') ) : the_row();
											if( get_row_layout() == 'adv_post' ):
												echo '
													<a href="'.get_sub_field('adv_link').'"  rel="nofollow">
														<picture>
															<source media="(max-width:600px)" srcset="'.get_sub_field('adv_mb').'" />
															<img src="'.get_sub_field('adv_pc').'" />
														</picture>
													</a>
												';
											endif;
										endwhile;
									endif;
									// End

								echo '
											</div>
										</div>
									</div>
									';
							}else {
								echo'
									<div class="quang-cao">
									<div class="advtop">
										<div class="textwidget"> 
											<div>
												<a href="'.get_field('lbn','category_'.$id).'"  rel="nofollow">
													<img src="'.get_field('bncb','category_'.$id).'" class="aligncenter" />
												</a>
											</div>
										</div>
									</div>
									</div>
								';
							}
						?>
						<p class="bdx">Bạn đang xem: <span><a href="<?php echo get_permalink($post->ID); ?>"><?php echo get_the_title($post->ID); ?></a></span> trong <span><a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>"><?php echo   $categories[0]->name; ?></a></span></p>
						
			<?php } ?>

			</div>
		</div>
	</div>
</div>
<?php the_field('code_form_regist','option'); ?>
<?php get_footer(); ?>

<script>
	//Send to google sheet
	$.ajax({
		url: "https://docs.google.com/forms/u/0/d/e/1FAIpQLSe7AA0Iq-tnjHGF4WUzWegRtxsYfmNXbWu553bAVcbQ3znszg/formResponse",
		data: {
			"entry.908778517": "<?php echo $link; ?>",
			"entry.1745148963": "<?php echo $ip; ?>",				
		},
		type: "POST",
		dataType: "xml",
		statusCode: {
			0: function() {
				//form_set_default();
				//Success message
				console.log('Succcess');
			},
			200: function() {
				//form_set_default();
				//Success message
				console.log('Succcess');
			}
		}
	});
	
</script>
