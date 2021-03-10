<?php

/*

 Template Name: Video cate

 */

 get_header();
 $categories = get_the_category();
 ?>
<link rel="stylesheet" href="https://quangcao247.com.vn/nhakhoa/media/css/cate-video.css">


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
					<div class="advtop">
						<div id='polyad_ads_zone3'></div>
					</div>
						
				</div>
				<!---END QC đầu bài viết--->

				<?php 
				if(isset($_GET['test'])) {
					?>
						<div class="page__video">
							<div class="container">
								<div class="boxvideo__content">

				    		<?php 
								$listvideo = get_field('list_video_box');
								
								// var_dump($listvideo);
								$c = 1;
								foreach ($listvideo as $list) {
									// var_dump($list);
									//Tách layout
									$type= $list['acf_fc_layout'];
									if($type == "video_noi_bat_layout") {
										// if() {
										$i = 0;
										$t = $list['video_noi_bat'];
										echo '
											<div class="boxvideo__top">
												<div class="boxvideo__big">
													<a href="'.$t[0]['video_noi_bat_url'].'" class="boxvideo__pic boxvideo__pic-1 fancybox-media">
														<img src="'.$t[0]['video_noi_bat_thum']['url'].'" alt="'.$t[0]['video_noi_bat_title'].'">
														<div class="tt">'.$t[0]['video_noi_bat_title'].'</div>
													</a>
												</div>
											
											';
											?>
												<div class="boxvideo__small">
												<?php
												foreach ($list['video_noi_bat'] as  $lis) {
													// var_dump($lis);
													if($i > 0) {
														
														echo '
															<a href="'.$lis['video_noi_bat_url'].'" class="boxvideo__listver fancybox-media">
																<div  class="boxvideo__pic boxvideo__pic-2 ">
																	<img src="'.$lis['video_noi_bat_thum']['url'].'" alt="'.$lis['video_noi_bat_title'].'">
																</div>
																<div href="#" class="tt">'.$lis['video_noi_bat_title'].'</div>
															</a>


															
														';
														
													}
													$i++;
												}
												?>
												</div>
											</div>
										<?php	
												
									}
									else if($type=="danh_sach_video_layout"){
										?>
										<div class="boxvideo__listhor">
											<div  class="boxvideo__subtt">
												<div class="title-list-video">
													<a><?php echo $list['danh_sach_video_section_title']; ?></a>
												</div>
											</div>
											<div class="w3-row">
												<?php 
													foreach ($list['danh_sach_video'] as $key => $lis) {
														// var_dump($lis);
														// echo $lis['danh_sach_video_url'];
														$key<=7 ? $class='show' : $class='hide ';
														// echo $key;
														echo '

															<div class="w3-col m3 video-item '.$class.'">

																<a href="'.$lis['danh_sach_video_url'].'" class="fancybox-media ct">

																	<div class="boxvideo__pic boxvideo__pic-3 ">

																		<img src="'. $lis['danh_sach_video_thum']['url'].'" alt="'.$lis['danh_sach_video_title'].'">

																	</div>

																	<div class="tt">'.$lis['danh_sach_video_title'].'</div>

																</a>

															</div>
														';

													}
													if(count($list['danh_sach_video'])>8){
														echo '<div class="text-center">
															<a href="javascript:void(0)" onclick="loadmore();" class="btn btn-danger loadmore-btn">Xem thêm</a></div>
														';
													}
												?>
											</div>
										</div>	
										
										<?php
										
									}
									$c++;
								}
							
							?>
							</div>
						</div>
				<?php
					}
				?>
			    <div class="newslist">
			    	<div class="boxvideo__content">

						<div class="boxvideo__top">

							<?php 

								$videonb_txt = get_field('link-video-nb');

								$videonb = explode("\n", str_replace("\r", "", $videonb_txt));
								
								$titlenb_txt = get_field('title-nb');

								$titlenb = explode("\n", str_replace("\r", "", $titlenb_txt));

								$anhnb_txt = get_field('link-anh-nb');

								$anhnb = explode("\n", str_replace("\r", "", $anhnb_txt));

								$i = 1;

								$countvid = count(array_filter($videonb));

								foreach ($videonb as $video_l) {
									$url = $video_l;
									preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

									$idvideo= $matches[1];
									
									if ($i == 1 ){

										$key = $i -1 ;

										echo '<div class="boxvideo__big">

												<a href="'.$video_l.'" class="boxvideo__pic boxvideo__pic-1 fancybox-media">

													<img src="'.$anhnb[$key].'" alt="">

													<div class="tt">'.$titlenb[$key].'</div>

												</a>

											</div>';

									}else if( $i > 1 && $i <=4 && $video_l != ''){

										$key = $i -1 ;

											if($i == 2){

												echo '<div class="boxvideo__small">';	

											}

											echo '<a href="'.$video_l.'" class="boxvideo__listver fancybox-media">

												<div  class="boxvideo__pic boxvideo__pic-2 ">

													<img src="'.$anhnb[$key].'" alt="">

												</div>

												<div class="tt">'.$titlenb[$key].'</div>

											</a>';



											if($i == 4 || $i == $countvid){

												echo '</div>';	

											}

									}

									$i++;

									} 

								?>

							

						</div>

						<div class="boxvideo__listhor">

							<?php 

								 $tieude = get_field('tieu-de-1');

								 $titvideo = get_field('title-video-1');

								 $title = explode("\n", str_replace("\r", "", $titvideo));

								 $linkvideo = get_field('list-link-1');

								 $link = explode("\n", str_replace("\r", "", $linkvideo));

								 $linkimages = get_field('list-anh-1');

								 $linkimg = explode("\n", str_replace("\r", "", $linkimages));

								 $i = 1;

								 $countlink = count(array_filter($link));



								if ($tieude !='') {

									echo '

										<div  class="boxvideo__subtt">

											'.$tieude.'

										</div>

									';

									foreach ($link as $vidurl) {

										$url = $vidurl;
										preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

										$idvideo= $matches[1];

										if ($i==1 ||  $i % 4 == 1) {

											echo '<div class="row">';

											

										}

										$keys = $i-1;

										if($vidurl != ''){

											echo '

											<div class="col-md-3 col-6">

												<a href="'.$vidurl.'" class="fancybox-media ct">

													<div class="boxvideo__pic boxvideo__pic-3 ">

														<img src="'.$linkimg[$keys].'" alt="">

													</div>

													<div class="tt">'.$title[$keys].'</div>

												</a>

											</div>

										';	

										}

										

										if($i%4 == 0|| $i == $countlink) {

											echo '</div>';

										}

										$i++;

									}

								}

							?>

						</div>

						<div class="boxvideo__listhor">

							<?php 

								 $tieude = get_field('tieu-de-2');

								 $titvideo = get_field('title-video-2');

								 $title = explode("\n", str_replace("\r", "", $titvideo));

								 $linkvideo = get_field('list-link-2');

								 $link = explode("\n", str_replace("\r", "", $linkvideo));

								 $linkimages = get_field('list-anh-2');

								 $linkimg = explode("\n", str_replace("\r", "", $linkimages));

								 $i = 1;

								 $countlink = count(array_filter($link));



								if ($tieude !='') {

									echo '

										<div  class="boxvideo__subtt">

											'.$tieude.'

										</div>

									';

									foreach ($link as $vidurl) {
										
										$url = $vidurl;
										preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

										$idvideo= $matches[1];

										if ($i==1 ||  $i % 4 == 1) {

											echo '<div class="row">';

											

										}

										$keys = $i-1;

										if($vidurl != ''){

											echo '

											<div class="col-md-3 col-6">

												<a href="'.$vidurl.'" class="fancybox-media ct">

													<div class="boxvideo__pic boxvideo__pic-3 ">

														<img src="'.$linkimg[$keys].'" alt="">

													</div>

													<div class="tt">'.$title[$keys].'</div>

												</a>

											</div>

										';	

										}

										

										if($i%4 == 0|| $i == $countlink) {

											echo '</div>';

										}

										$i++;

									}

								}

							?>

						</div>

						<div class="boxvideo__listhor">

							<?php 

								 $tieude = get_field('tieu-de-3');

								 $titvideo = get_field('title-video-3');

								 $title = explode("\n", str_replace("\r", "", $titvideo));

								 $linkvideo = get_field('list-link-3');

								 $link = explode("\n", str_replace("\r", "", $linkvideo));

								 $linkimages = get_field('list-anh-3');

								 $linkimg = explode("\n", str_replace("\r", "", $linkimages));

								 $i = 1;

								 $countlink = count(array_filter($link));



								if ($tieude !='') {

									echo '

										<div  class="boxvideo__subtt">

											'.$tieude.'

										</div>

									';

									foreach ($link as $vidurl) {

										$url = $vidurl;
										preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

										$idvideo= $matches[1];

										if ($i==1 ||  $i % 4 == 1) {

											echo '<div class="row">';

											

										}

										$keys = $i-1;

										if($vidurl != ''){

											echo '

											<div class="col-md-3 col-6">

												<a href="'.$vidurl.'" class="fancybox-media ct">

													<div class="boxvideo__pic boxvideo__pic-3 ">

														<img src="'.$linkimg[$keys].'" alt="">

													</div>

													<div class="tt">'.$title[$keys].'</div>

												</a>

											</div>

										';	

										}

										

										if($i%4 == 0|| $i == $countlink) {

											echo '</div>';

										}

										$i++;

									}

								}

							?>

						</div>

						<div class="boxvideo__listhor">

							<?php 

								 $tieude = get_field('tieu-de-4');

								 $titvideo = get_field('title-video-4');

								 $title = explode("\n", str_replace("\r", "", $titvideo));

								 $linkvideo = get_field('list-link-4');

								 $link = explode("\n", str_replace("\r", "", $linkvideo));

								 $linkimages = get_field('list-img-4');

								 $linkimg = explode("\n", str_replace("\r", "", $linkimages));

								 $i = 1;

								 $countlink = count(array_filter($link));



								if ($tieude !='') {

									echo '

										<div  class="boxvideo__subtt">

											'.$tieude.'

										</div>

									';

									foreach ($link as $vidurl) {

										$url = $vidurl;
										preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $url, $matches);

										$idvideo= $matches[1];

										if ($i==1 ||  $i % 4 == 1) {

											echo '<div class="row">';

											

										}

										$keys = $i-1;

										if($vidurl != ''){

											echo '

											<div class="col-md-3 col-6">

												<a href="'.$vidurl.'" class="fancybox-media ct">

													<div class="boxvideo__pic boxvideo__pic-3 ">

														<img src="'.$linkimg[$keys].'" alt="">

													</div>

													<div class="tt">'.$title[$keys].'</div>

												</a>

											</div>

										';	

										}


										if($i%4 == 0|| $i == $countlink) {

											echo '</div> ';

										}

										$i++;

									}

								}

							?>

						</div>

					</div>
			    </div>

			
			
		

			</div>
		</div>
	</div>
</div>
<?php the_field('code_form_regist','option'); ?>	
<?php get_footer(); ?>
	