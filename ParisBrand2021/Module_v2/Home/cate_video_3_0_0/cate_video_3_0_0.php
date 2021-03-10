<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/cate_video_3_0_0/css/cate_video_3_0_0_css.php"));

        add_action( 'theme_js', 'cate_video_3_0_0_js' );
        function cate_video_3_0_0_js(){
            echo '
				<script>
					var cate_video_3_0_0__box2__slider=tns({container:".cate_video_3_0_0__box2__slider",items:1,navContainer:"#cate_video_3_0_0_tabs2",navAsThumbnails:!0,autoplay:!1,loop:!1,autoplayTimeout:1e3,controls:!1,gutter:0,mouseDrag:!1,touch:!1});
					var cate_video_3_0_0_tabs=document.querySelectorAll("#cate_video_3_0_0_tabs2_mb li");for(let i=0;i<cate_video_3_0_0_tabs.length;i++)cate_video_3_0_0_tabs[i].addEventListener("click",()=>{cate_video_3_0_0__box2__slider.goTo(_)});
					var cate_video_3_0_0_tabs2=tns({container:"#cate_video_3_0_0_tabs2",items:6,swipeAngle:!1,speed:400,autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,gutter:10,loop:!1,nav:!1});
					for(var sliders=[],containers=document.querySelectorAll(".cate_video_3_0_0__box2_item__Right__mb"),i=0,l=containers.length;i<l;i++)sliders.push(tns({container:containers[i],axis:"horizontal",items:3,gutter:10,nav:!1,loop:!1,controls:!1,responsive:{0:{items:2,mouseDrag:!1,touch:!0,nav:!0},768:{items:4}}}));
				</script>
            ';
		}
	}
	
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'cate'):
    	foreach($field->cate_sub_fields as $cate_data): 
			if($cate_data->acf_fc_layout == 'cate_video_3_0_0'): 
			$info = $cate_data->info; ?>

<section class="cate_video_3_0_0">
	<div class="container">
		<div class="cate_video_3_0_0__box1">
			<div class="pc">
				<ul class="cate_video_3_0_0_tabs2" id="cate_video_3_0_0_tabs2">
					<?php
						foreach($info as $value):
							$data = explode("\n",  $value->info_video_name);
							echo'
								<li class="tab">
									<div class="cate_video_3_0_0__box1__item vd'.$data[1].'">
										'.$data[0].'
									</div>
								</li>
							';
						endforeach;
					?>
				</ul>
			</div>
			<div class="mb">
				<ul class="cate_video_3_0_0_tabs2" id="cate_video_3_0_0_tabs2_mb">
					<?php
						foreach($info as $value):
							$data = explode("\n",  $value->info_video_name);
							echo'
								<li class="tab">
									<div class="cate_video_3_0_0__box1__item vd'.$data[1].'">
										'.$data[0].'
									</div>
								</li>
							';
						endforeach;
					?>
				</ul>
			</div>
		</div>
		<div class="cate_video_3_0_0__box2">
			<div class="cate_video_3_0_0__box2__slider" id="cate_video_3_0_0__box2__slider">
			<?php foreach($info as $key1 => $value_0): 
				if($key1 == 0): ?>
				<div class="cate_video_3_0_0__box2_item">
					<div class="row">
						<div class="col-md-8">
						<?php
						foreach($value_0->info_video_data as $key => $value):
							$data2 = explode("\n",  $value->info1);
							$linkID = getIDvideo($data2[3]);
							if ($key == 0):
							echo'
								<div class="cate_video_3_0_0__box2_item__Left">
									<div class="cate_video_3_0_0__box2_item__Left_ct modal-clip" data-video="'.$linkID.'" onclick="counterFn()">
										<div class="pic">
											<img src="'.$data2[0].'">
										</div>
										<div class="text">
											<b>'.$data2[1].'</b><br>
											<span>Lượt xem:'.$data2[2].'</span><span id="counterValue"></span>
										</div>
									</div>
								</div>
							';
							endif;
						endforeach; 
						?>
						</div>
						<div class="col-md-4">
							<div class="cate_video_3_0_0__box2_item__Right">
								<div class="scrollbar pc" id="style-video">
									<div class="force-overflow">
									<?php 
									foreach($value_0->info_video_data as $key => $value):
										$data2 = explode("\n",  $value->info1);
										$linkID = getIDvideo($data2[3]);
										if ($key > 0):
										echo '<div class="cate_video_3_0_0__box2_item__Right_ct modal-clip" data-video="'.$linkID.'">
											<a>
												<div class="pic">
													<img src="/rs/?w=200&h=112&src='.$data2[0].'">
												</div>
												<div class="sub">
													<b>'.$data2[1].'</b><br>
													<span>Lượt xem: '.$data2[2].'</span>
												</div>
											</a>
										</div>
										';
										endif;
									endforeach; 
									?>
									</div>
								</div>
								<div class="mb">
									<div class="cate_video_3_0_0__box2_item__Right__mb" id="cate_video_3_0_0__box2_item__Right__mb">
									<?php 
									foreach($value_0->info_video_data as $key => $value):
										$data2 = explode("\n",  $value->info1);
										$linkID = getIDvideo($data2[3]);
										if ($key > 0):
										echo'
											<div class="cate_video_3_0_0__box2_item__Right_ct modal-clip" data-video="'.$linkID.'">
												<a>
													<div class="pic">
														<img class="lazy" data-src="/rs/?w=200&h=112&src='.$data2[0].'">
													</div>
													<div class="sub">
														<b>'.$data2[1].'</b><br>
														<span>Lượt xem:'.$data2[2].'</span>
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
				</div>

				<?php else: ?>
				<div class="cate_video_3_0_0__box2_item">
					<div class="row">
						<div class="col-md-8">
						<?php 
						foreach($value_0->info_video_data as $key => $value):
							$data2 = explode("\n",  $value->info1);
							$linkID = getIDvideo($data2[3]);
							if ($key == 0):
							echo'
								<div class="cate_video_3_0_0__box2_item__Left">
									<div class="cate_video_3_0_0__box2_item__Left_ct modal-clip" data-video="'.$linkID.'" onclick="counterFn()">
										<div class="pic">
											<img src="'.$data2[0].'">
										</div>
										<div class="text">
											<b>'.$data2[1].'</b><br>
											<span>Lượt xem:'.$data2[2].'</span><span id="counterValue"></span>
										</div>
									</div>
								</div>
							';
							endif;
						endforeach; 
						?>
						</div>
						<div class="col-md-4">
							<div class="cate_video_3_0_0__box2_item__Right">
								<div class="scrollbar pc" id="style-video">
									<div class="force-overflow">
									<?php 
									foreach($value_0->info_video_data as $key => $value):
										$data2 = explode("\n",  $value->info1);
										$linkID = getIDvideo($data2[3]);
										if ($key > 0):
										echo'
										<div class="cate_video_3_0_0__box2_item__Right_ct modal-clip" data-video="'.$linkID.'">
											<a>
												<div class="pic">
													<img class="lazy" data-src="/rs/?w=200&h=112&src='.$data2[0].'">
												</div>
												<div class="sub">
													<b>'.$data2[1].'</b><br>
													<span>Lượt xem: '.$data2[2].'</span>
												</div>
											</a>
										</div>
										';
										endif;
									endforeach; 
									?>
									</div>
								</div>
								<div class="mb">
									<div class="cate_video_3_0_0__box2_item__Right__mb" id="cate_video_3_0_0__box2_item__Right__mb">
									<?php 
									foreach($value_0->info_video_data as $key => $value):
										$data2 = explode("\n",  $value->info1);
										$linkID = getIDvideo($data2[3]);
										if ($key > 0):
											echo'
												<div class="cate_video_3_0_0__box2_item__Right_ct modal-clip" data-video="'.$linkID.'">
													<a>
														<div class="pic">
															<img class="lazy" data-src="/rs/?w=200&h=112&src='.$data2[0].'">
														</div>
														<div class="sub">
															<b>'.$data2[1].'</b><br>
															<span>Lượt xem:'.$data2[2].'</span>
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
				</div>
				<?php endif; endforeach;?>
			</div>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>  