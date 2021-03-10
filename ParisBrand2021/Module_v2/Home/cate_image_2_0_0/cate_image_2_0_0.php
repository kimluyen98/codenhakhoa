<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/cate_image_2_0_0/css/cate_image_2_0_0_css.php"));
		
        add_action( 'theme_js', 'cate_image_2_0_0_js' );
        function cate_image_2_0_0_js(){
            echo '
				<script>
					var cate_image_2_0_0_doctor_slider=tns({container:"#cate_image_2_0_0_doctor_slider",items:1,navContainer:"#cate_image_2_0_0__tabs",navAsThumbnails:!0,autoplay:!1,loop:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
					var cate_image_2_0_0_KH=tns({container:"#cate_image_2_0_0_KH",items:1,navContainer:"#cate_image_2_0_0__tabs",navAsThumbnails:!0,autoplay:!1,loop:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
					var cate_image_2_0_0__tabs=tns({container:"#cate_image_2_0_0__tabs",items:6,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,lazyload:!0,lazyloadSelector:".tns-lazy",gutter:20,loop:!1,navPosition:"bottom",controlsPosition:"bottom",nav:!1,responsive:{0:{items:2,mouseDrag:!1,touch:!0,gutter:10},768:{items:6}}});
				</script>
            ';
		}
	}
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'cate'):
    	foreach($field->cate_sub_fields as $cate_data): 
			if($cate_data->acf_fc_layout == 'cate_image_2_0_0'): 
			$title =  explode("\n",  $cate_data->title);
			$info = $cate_data->info; ?>

<section class="cate_image_2_0_0">
	<div class="container">
		<div class="cate_image_2_0_0_doctor__Title">
			<h2><?php echo $title[0]; ?></h2>
		</div>
		<div class="cate_image_2_0_0_doctor pc">
			<div class="cate_image_2_0_0_doctor_slider" id="cate_image_2_0_0_doctor_slider">
			<?php
				foreach($info as $key => $value):
					$data = explode("\n",  $value->info_doctor_content);
					echo '
						<div class="cate_image_2_0_0_doctor_box">
							<div class="cate_image_2_0_0_doctor__item row">
								<div class="col-md-6">
									<div class="cate_image_2_0_0_doctor__ct">
										<div class="cate_image_2_0_0_doctor__name">'.$data[0].''.$data[1].'</div>
											'.$value->sub.'
									</div>
								</div>
								<div class="col-md-6">
									<picture>
										<source media="(min-width:600px)" srcset="'.$data[2].'">
										<img src="'.$data[3].'" alt="">
									</picture>
								</div>
							</div>
						</div>
					';
				endforeach;
			?>  
				
			</div>
		</div>
		<div class="cate_image_2_0_0__tab">
			<ul class="cate_image_2_0_0__tabs tabs" id="cate_image_2_0_0__tabs">
				<?php
					foreach($info as $key => $value):
						$data = explode("\n",  $value->info_doctor_content);
						echo '
							<li class="tab">
								<div class="cate_image_2_0_0__tab__item">
									<div class="pic">
										<img src="'.$data[4].'" alt="">
									</div>
									<div class="info">
										<p>'.$data[0].'<br> <b>'.$data[1].'</b></p>
									</div>
								</div>
							</li>
						';
					endforeach;
				?>  
			</ul>
		</div>
		<div class="cate_image_2_0_0_KH">
			<div class="cate_image_2_0_0_KH__title">
				<?php echo $title[1]; ?>
			</div>
			<div class="cate_image_2_0_0_KH" id="cate_image_2_0_0_KH">
			<?php
				foreach($info as $value):
					echo'<div class="cate_image_2_0_0_KH__box"><div class="mb">';
						foreach($value->info_image_data as $key => $value_1):
							$data2 = explode("\n",  $value_1->info_KH_content);
							if ($key == 0):
							echo'
								<div class="pic">
									<img class="lazy" data-src="'.$data2[0].'" alt="">
								</div>
								<div class="sub">
									<b>'.$data2[1].'</b>
									<p>'.$data2[2].'</p>
								</div>
							';
							endif;
						endforeach;
					echo' </div><div class="row"> ';
						foreach($value->info_image_data as $key => $value_1):
							$data2 = explode("\n",  $value_1->info_KH_content);
							if ($key > 0):
							echo'
								<div class="col-md-3">
									<div class="pic">
										<img class="lazy" data-src="'.$data2[0].'" alt="">
									</div>
									<div class="sub">
										<b>'.$data2[1].'</b>
										<p>'.$data2[2].'</p>
									</div>
								</div>
							';
							endif;
						endforeach;
					echo' </div></div> ';
				endforeach;
			?>
			
			</div>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>  