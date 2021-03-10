<?php
	include(locate_template("Module_v2/Home/video_4_1_0/css/video_4_1_0_css.php"));
?>

<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'video'):
    	foreach($field->video_sub_fields as $video_data): 
			if($video_data->acf_fc_layout == 'video_4_1_0'): 
			$data = explode("\n", $video_data->info1);
			$info2 = $video_data->info2; ?>

<section class="video_4_1_0">
	<div class="container lazy-bg">
		<h2 class="video_4_1_0__title"><?php echo $video_data->title ?></h2>
		<div class="row">
			<div class="video_4_1_0__box1 col-md-8">
			<?php
				$linkID = getIDvideo($data[2]);
				$linkID = substr($linkID, 0,-1);
				echo '
					<a rel="noffollow">
						<div class="video_4_1_0__box1__item modal-clip" data-video="'.$linkID.'" onclick="counterFn()">
							<div class="pic">
								<img width="750" height="421" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
							</div>
							<div class="text">
								<b>'.$data[1].'</b><br>
								<span>Lượt xem:'.$data[3].'</span>
							</div>
						</div>
					</a>
				'; 
			?>
				
			</div>
			<div class="video_4_1_0__box2 col-md-4">
				<div class="scrollbar" id="style-1">
					<div class="force-overflow">
					<?php
						foreach($info2 as $key => $value):
							$data = explode("\n",  $value->content);
							$linkID = getIDvideo($data[2]);
							echo'
								<div class="video_4_1_0__box2__item modal-clip" data-video="'.$linkID.'" onclick="counterFn'.$key.'()" onload="load'.$key.'()">
									<a rel="noffollow">
										<div class="pic">
											<img width="200" height="112" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
										</div>
										<div class="ct">
											<b>'.$data[1].'</b><br>
											<span>Lượt xem:'.$data[3].'</span>
										</div>
									</a>
								</div>
							';
						endforeach;
					?>
					</div>
				</div>
				<div class="mb">
					<div class="video_4_1_0__box2__mb">
					<?php
						foreach($info2 as $key => $value):
							$data = explode("\n",  $value->content);
							$linkID = getIDvideo($data[2]);
	
							if($key < 2):
							echo'
								<div class="video_4_1_0__box2__item modal-clip" data-video="'.$linkID.'" onclick="counterFn'.$key.'()" onload="load'.$key.'()">
									<a rel="nofollow">
										<div class="pic">
											<img width="169" height="94" class="lazy" data-src="'.$data[0].'" alt="'.$data[1].'">
										</div>
										<div class="ct">
											<b>'.$data[1].'</b><br>
											<span>Lượt xem:'.$data[3].'</span>
										</div>
									</a>
								</div>
							';
							endif;
						endforeach;
					?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>  