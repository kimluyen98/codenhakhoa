<?php get_header();
$categories = get_the_category();
 ?>

<link rel="stylesheet" href="https://quangcao247.com.vn/kangnam/themes/css/cate-video.css">
<div class="container">
	<div class="boxmain">
		<div class="main">
			<div class="breadcrumb" style="display: none" >
		       <?php
					if ( function_exists('yoast_breadcrumb') ) {
					yoast_breadcrumb('
					<p id="breadcrumbs">','</p>
					');
					}
				?>
		    </div>
			<!---QC-->
			<div class="advtop">
				<div id='polyad_ads_zone3'></div>
			</div>
			<?php 
				if(isset($_GET['test'])) {
					echo '111111111';
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
										<div class="owl-carousel vdsl">
											<?php 
												foreach ($list['danh_sach_video'] as $key => $lis) {
													// var_dump($lis);
													// echo $lis['danh_sach_video_url'];
													echo '
														<div>
															<a href="'.$lis['danh_sach_video_url'].'" class=" fancybox-media">
																<span class="siteAlbumPlay">
																	<img class="lazy_image" src="/rs/?w=175&h=120&src='. $lis['danh_sach_video_thum']['url'].'" alt="">
																</span>
																<div class="siteAlbumVideo-title">'.$lis['danh_sach_video_title'].'</div>
															</a>
														</div>
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
			<div class="cate1" style="padding:15px;">
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

											<div href="#" class="tt">'.$titlenb[$key].'</div>

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
									if (($i==1 ||  $i % 4 == 1 )&& $vidurl != '') {

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

									

									if(($i%4 == 0|| $i == $countlink) && $vidurl != '') {

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
                    
									
                    
									if (($i==1 ||  $i % 4 == 1)&& $vidurl != '') {
                    
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
                    
									
                    
									if(($i%4 == 0|| $i == $countlink) && $vidurl != '') {
                    
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
                    
									
                    
									if (($i==1 ||  $i % 4 == 1) && $vidurl != '') {
                    
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
                    
									
                    
									if(($i%4 == 0|| $i == $countlink) && $vidurl != '') {
                    
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
                    
									
                    
									if (($i==1 ||  $i % 4 == 1) && $vidurl != '') {
                    
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
                    
									
                    
									if(($i%4 == 0|| $i == $countlink) && $vidurl != '') {
                    
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
		<aside class="sidebar">
			 <?php get_sidebar(); ?>
		</aside>
	</div>
</div>

  
<?php get_footer(); ?>
