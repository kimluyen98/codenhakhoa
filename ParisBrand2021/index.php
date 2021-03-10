<?php
get_header(); 
$myOptions = get_option('MyOptionsPC');
?>
<div style="position:relative">
<?php get_template_part('Module/Popup/popup_call_2_0_0/popup_call_2_0_0'); ?>
<div class="owl-carousel owl-theme homeSlideIntro">
	<?php 

		if( have_rows('slide_home','option') ):
			while ( have_rows('slide_home','option') ) : the_row();
				if( get_row_layout() == 'slide_home_content' ): 

					$slide_link = get_sub_field('slide_link');
					$slide_pc = get_sub_field('slide_pc');
					$slide_mb = get_sub_field('slide_mb');
					
					if( ($slide_pc) || ($slide_mb) ): 
						echo'
						<div class="item">
							<a href="'.$slide_link.'" rel="nofollow">
								<picture>
									<source media="(max-width:600px)" srcset="'.$slide_mb.'">
									<img class="full_image" data-src="'.$slide_pc.'" />
								</picture>
							</a>
						</div>
						';
					endif;
					
				endif;
			endwhile;
		endif;

	?>	
</div>
</div>


<section class="home home1">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div>
			<?php $b1_title = get_field('b1_title','option')?>
			<?php if($b1_title): ?>
				<div class="tit">
					<?php the_field('b1_title','option'); ?>
				</div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
		</h2>
		<div class="home1__box">

			<?php if( have_rows('b1_info','option') ): ?>
				<?php while( have_rows('b1_info','option') ) : the_row(); ?>
					<?php if( get_row_layout() == 'b1_info_box' ): ?>

						<?php $b1_info_img = get_sub_field('b1_info_img'); ?>	
						<?php $b1_info_tt = get_sub_field('b1_info_tt'); ?>	
						<?php $b1_info_link = get_sub_field('b1_info_link'); ?>	
						<?php if($b1_info_img || $tt):?>

							<div class="home1__item">
								<img  class="img__h1 full_image" data-src="<?php echo $b1_info_img; ?>" alt="">
								<a href="<?php echo $b1_info_link ?>" class="text__item">
									<?php echo $b1_info_tt; ?>
									<span>></span>
								</a>
							</div>

						<?php endif ?>
					<?php endif; ?>
				<?php endwhile;?>
			<?php else:?>
			<?php endif;?>
		</div>
	</div>
</section>
<section class="home home2">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
			<?php $b2_title = get_field('b2_title','option'); ?>
			<?php if($b2_title): ?>
				<div class="tit"><?php echo $b2_title; ?></div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
			<?php $b2_sub = get_field('b2_sub','option'); ?>
			<?php if($b2_sub): ?>
				<p class="note"><?php echo $b2_sub; ?></p>
			<?php endif; ?>

		</h2>
		<div class="home2__box">
			<div class="owl-carousel owl-theme carousel-thumb">

				<?php if( have_rows('b2_info','option') ): ?>
					<?php $i = 1 ?>
					<?php while ( have_rows('b2_info','option') ) : the_row(); ?>
						<?php if( get_row_layout() == 'b2_info_box' ): ?>

							<?php $b2_info_big = get_sub_field('b2_info_big') ?>
							<?php $b2_info_mb = get_sub_field('b2_info_mb') ?>
							
							<?php $b2_info_link = get_sub_field('b2_info_link') ?>
							<?php $array = get_field('b2_info','option'); ?>
							<?php if($b2_info_big || $b2_info_mb) : ?>

								<div class="item" data-hash="<?php echo $i; ?>">
									<picture>
										<source media="(max-width:600px)" srcset="<?php echo $b2_info_mb; ?>">
										<img src="<?php echo $b2_info_big; ?>" alt="">
									</picture>
									<?php if($b2_info_link) : ?>
										<div class="view-more">
											<a href="<?php echo $b2_info_link; ?>">Xem tiếp >></a>
										</div>
									<?php endif; ?>
								</div>
							<?php endif; ?>
							<?php $i++; ?>

						<?php endif; ?>
					<?php endwhile; ?>
				<?php else: ?>
				<?php endif; ?>
				
			</div>
			<div class="tabs">
				<?php if( have_rows('b2_info','option') ): ?>
					<?php $i = 1; ?>
					<?php while( have_rows('b2_info','option') ) : the_row(); ?>
						<?php if( get_row_layout() == 'b2_info_box' ) : ?>
							<?php $b2_info_sm = get_sub_field('b2_info_sm') ?>
							<?php if($b2_info_sm) : ?>
								<a class="tab" href="#<?php echo $i; ?>">
									<img class="active" src="<?php echo $b2_info_sm; ?>" alt="">
								</a>
							<?php endif; ?>

							<?php $i++ ?>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

	</div>
</section>	
<section class="home home3">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
			<?php $b3_title = get_field('b3_title','option'); ?>
			<?php if($b3_title): ?>
				<div class="tit"><?php echo $b3_title; ?></div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
		</h2>		
		<div class="home3__box">
			<?php if(isset($_GET['test'])): ?>	
				<?php the_field('b3_content','option'); ?>
			<?php else: ?>
				<?php
					// video covert ID
					// function getIDvideo($url) {
					// 	parse_str( parse_url( $url, PHP_URL_QUERY ), $my_array_of_vars );
					// 	return $my_array_of_vars['v'];  
					// } 
					// Lay field
					if ( have_rows('b3_info','option') ):

						while ( have_rows('b3_info','option') ) : the_row();
							if( get_row_layout() == 'b3_info_videoBN' ):

								$b3_info_link = get_sub_field('b3_info_link');
								echo '
									<div class="box-1">
										<a href="" class="note-vd modal-clip icon-clip" data-video-id="'.getIDvideo($b3_info_link).'">
											<img class="img-lazy" data-src="'.get_sub_field('b3_info_img')[url].'" alt="'.get_sub_field('b3_info_tt').'">
										</a>
									</div>
									<div class="box-2">
								';
							elseif( get_row_layout() == 'b3_info_videoBig'):
								
								$b3_info_link = get_sub_field('b3_info_link');
								echo '
									<div class="box-2-top">
										<a href="" class="note-vd modal-clip icon-clip" data-video-id="'.getIDvideo($b3_info_link).'">
											<img src="'.get_sub_field('b3_info_img')[url].'" alt="'.get_sub_field('b3_info_tt').'">
											<div class="title">
												<p>'.get_sub_field('b3_info_tt').' </p>
											</div>
										</a>
									</div>
									<div class="box-2-bot">
								';
							elseif( get_row_layout() == 'b3_info_videoSM'):
								
								$b3_info_link = get_sub_field('b3_info_link');
								echo '
									<div class="item-1">
										<a href="" class="note-vd modal-clip icon-clip" data-video-id="'.getIDvideo($b3_info_link).'">
										<img src="'.get_sub_field('b3_info_img')[url].'" alt="'.get_sub_field('b3_info_tt').'">
										<div class="title">
											<p>'.get_sub_field('b3_info_tt').'</p>
										</div>
										</a>
									</div>
								';

							else:
								echo '</div></div>';
							endif;
						endwhile;

					endif;
				?>

			<?php endif;?>
			
		</div>
	</div>
</section>	



<section class="home home4">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
			<?php $b4_title = get_field('b4_title','option'); ?>
			<?php if($b4_title): ?>
				<div class="tit"><?php echo $b4_title; ?></div>
				<div class="homeLine homeLine-left"></div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
		</h2>	

		<div class="home4__box">
			<div class="h4__img">
				<picture>
					<source media="(max-width:600px)" srcset="<?php the_field('b4_img_mb','option'); ?>">
					<img class="img-lazy" data-src="<?php the_field('b4_img_pc','option'); ?>" alt="">
				</picture>
			</div>
			<div class="h4__text">
				<?php the_field('b4_ct','option') ?>
				<a href="<?php the_field('b4_link','option'); ?>" class="h4__text-viewmore"> Đọc tiếp >> </a>
			</div>
		</div>
	</div>
</section>

<section class="home home5">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
		</h2>
		<div class="home5__title">
			<?php $b5_title = get_field('b5_title','option'); ?>
			<?php if($b5_title): ?>
				<h4><?php echo $b5_title; ?></h4>
				<div class="home5-left">
					<img src="<?php echo get_template_directory_uri(); ?>/media/images/adm-beauty/home/home-line-left.png" alt="">
				</div>
				<div class="home5-center">
					<img src="<?php echo get_template_directory_uri(); ?>/media/images/adm-beauty/home/home-line-center.png" alt="">
				</div>
			<?php endif; ?>
			<?php $b5_sub = get_field('b5_sub','option'); ?>
			<?php if($b5_sub): ?>
				<p><?php echo $b5_sub; ?></p>
			<?php endif; ?>
		</div>
		<div class="home5__box">
			<picture>
				<source media="(max-width:600px)" class="imgSet-lazy" data-srcset="<?php the_field('b5_img_mb','option'); ?>">
				<img class="img-lazy" data-src="<?php the_field('b5_img_pc','option'); ?>" alt="">
			</picture>
		</div>	
	</div>
</section>

<section class="home home6">
	<div class="container">
	<div class="home6__box">
		<!-- <?php the_field('b6_boxct','option'); ?> -->
		<?php if( have_rows('b6_chi_nhanh','option') ) : ?>
			<ul class="tabs flex justify-content-center">
				<?php $i = 1 ?>
				<?php while( have_rows('b6_chi_nhanh','option') ) : the_row(); ?>
					<?php if( get_row_layout() ==  'b6_chi_nhanh_box' ) : ?>
						<?php $b6_chi_nhanh_title = get_sub_field('b6_chi_nhanh_title') ?>
						<li class="tab-link btn <?php if($i == 1): echo 'current'; endif; ?>" data-tab="tab-<?php echo $i ?>"><?php echo $b6_chi_nhanh_title; ?></li>
						<?php $i++ ?>
					<?php endif; ?>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
		<!-- end tab name -->
		<?php if( have_rows('b6_chi_nhanh','option') ) : ?>
			<?php while( have_rows('b6_chi_nhanh','option') ) : the_row(); ?>
				<?php if( get_row_layout() ==  'b6_chi_nhanh_box' ) : ?>

					<?php if( have_rows('b6_info','option')) : ?>
						<?php while( have_rows('b6_info','option') ) : the_row(); ?>
							<?php if( get_row_layout() == 'b6_info_box' ) : ?>
						
								<?php $b6_info_note = get_sub_field('b6_info_note'); ?>
								<?php $b6_info_name = get_sub_field('b6_info_name'); ?>
								<?php $b6_info_desc = get_sub_field('b6_info_desc'); ?>
								<?php $b6_info_num = get_sub_field('b6_info_num'); ?>
								<?php if($b6_info_note) : ?>
									<div class="modal" id="<?php echo $b6_info_num; ?>" style="display:none;">
										<div class="modal-bg"></div>
										<div class="modal-box animate-pop">
											<div class="modal-header">
												<div class="modal-title"><?php echo $b6_info_desc;?> <?php echo $b6_info_name; ?></div>
												<div class="modal-close">×</div>
											</div>
											<div class="modal-body">
												<?php echo $b6_info_note; ?>
											</div>
										</div>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						<?php endwhile; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- end tab pop -->
		<?php if( have_rows('b6_chi_nhanh','option') ) : ?>
			<?php $i = 1 ?>
			<?php while( have_rows('b6_chi_nhanh','option') ) : the_row(); ?>
				<?php if( get_row_layout() ==  'b6_chi_nhanh_box' ) : ?>
					<div id="tab-<?php echo $i; ?>" class="tab-content <?php if($i == 1): echo 'current'; endif; ?> ">
						<div class="owl-carousel owl-theme">

							<?php if( have_rows('b6_info','option')) : ?>
								<?php while( have_rows('b6_info','option') ) : the_row(); ?>
									<?php if( get_row_layout() == 'b6_info_box' ) : ?>
										<?php $b6_info_img = get_sub_field('b6_info_img'); ?>
										<?php $b6_info_name = get_sub_field('b6_info_name'); ?>
										<?php $b6_info_desc = get_sub_field('b6_info_desc'); ?>
										<?php $b6_info_note = get_sub_field('b6_info_note'); ?>
										<?php $b6_info_num = get_sub_field('b6_info_num'); ?>
										<div class="item">
											<?php if($b6_info_img) : ?>
												<img src="/rs/?w=173&h=173&src=<?php echo $b6_info_img; ?>" alt="">
											<?php endif; ?>
											<span><?php echo $b6_info_desc ?></span>
											<p><?php echo $b6_info_name ?></p>
											<a href="#" class="modal-btn" data-modal="<?php echo $b6_info_num; ?>">chi tiết >></a>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							<?php endif; ?>

						</div>
					</div>
					<?php $i++ ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		<!-- end tab content -->

		
	</div>
</section>

<section class="home home7">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
			<?php $b7_title = get_field('b7_title','option'); ?>
			<?php if($b7_title): ?>
				<div class="tit"><?php echo $b7_title; ?></div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
		</h2>
		<div class="home7__box">
			<?php if(isset($_GET['test'])): ?>	
				<?php the_field('b7_boxct','option'); ?>
			<?php else: ?>
				<?php
					if ( have_rows('b7_info','option') ):

						while ( have_rows('b7_info','option') ) : the_row();
							if( get_row_layout() == 'b7_info_box' ):

								echo '
									<div class="h7__item">
										<picture>
											<source media="(max-width:600px)" srcset="/rs/?w=182&h=155&src='.get_sub_field('b7_info_img_mb').'">
											<img class="img-lazy" data-src="/rs/?w=586&h=289&src='.get_sub_field('b7_info_img').'" alt="">
										</picture>
										<div class="h7__item-text">
											<p>'.get_sub_field('b7_info_tt').'</p>
											<a href="'.get_sub_field('b7_info_link').'">>></a>
										</div>
									</div>
								';
							endif;
						endwhile;

					endif;
				?>
			<?php endif;?>

			
		</div>	
	</div>
</section>

<section class="home home8">
	<div class="container">
		<h2 class="homeTitle homeTitle-center">
			<div class="icon-title"></div> 
			<?php $b8_title = get_field('b8_title','option'); ?>
			<?php if($b8_title): ?>
				<div class="tit"><?php echo $b8_title; ?></div>
				<div class="homeLine homeLine-center"></div>
			<?php endif; ?>
		</h2>		

		<div class="home8__box">
			<div class="row">
				<?php if(isset($_GET['test'])): ?>	
					<?php the_field('b8_boxct','option'); ?>
				<?php else: ?>
				<?php
						// Lay field
						if ( have_rows('b8_info','option') ):

							while ( have_rows('b8_info','option') ) : the_row();
								if( get_row_layout() == 'b8_info_photo' ):

									echo '
										<div class="col-lg-6 item">
											<a href="'.get_sub_field('b8_info_link').'">
												<img class="img-lazy" data-src="/rs/?w=558&h=352&src='.get_sub_field('b8_info_img')[url].'" alt="'.get_sub_field('b8_info_tt').'">
											</a>
										</div>
										<div class="col-lg-6 item-h8">
        									<div class="owl-carousel owl-theme">
									';
								elseif( get_row_layout() == 'b8_info_event'):
									
									echo '
										<div class="item">
											<img src="/rs/?w=170&h=206&src='.get_sub_field('b8_info_img')[url].'" alt="'.get_sub_field('b8_info_tt').'">
											<a href="'.get_sub_field('b8_info_link').'" class="dec">'.get_sub_field('b8_info_tt').'</a>        <br>
											<a href="'.get_sub_field('b8_info_link').'" class="read-more">Đọc tiếp >></a>
										</div>		
									';
								
								else:
									echo '</div></div>';
								endif;
							endwhile;

						endif;
					?>
				<?php endif;?>
			</div>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
