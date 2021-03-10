<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/doctor_4_1_0/css/doctor_4_1_0_css.php"));

        add_action( 'theme_js', 'doctor_4_1_0_js' );
        function doctor_4_1_0_js(){
            echo '
				<script>
					var slide_thumb=tns({container:".slide_thumb",items:1,navContainer:"#thumbnails",navAsThumbnails:!0,controls:!1,autoplay:!1,loop:!1,autoplayTimeout:1e3,gutter:10});
					var thumbnails=tns({container:".thumbnails",items:6,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,mouseDrag:!0,lazyload:!0,lazyloadSelector:".tns-lazy",gutter:0,loop:!1,navPosition:"bottom",controlsPosition:"bottom",responsive:{320:{items:2,mouseDrag:!1,touch:!0,gutter:10},375:{items:3,mouseDrag:!1,touch:!0,gutter:10},768:{items:6}}});
				</script>
            ';
		}
	}
	
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'doctor'):
    	foreach($field->doctor_sub_fields as $doctor_data): 
			if($doctor_data->acf_fc_layout == 'doctor_4_1_0'): 
			$info = $doctor_data->info1; ?>
		
<section class="doctor_4_1_0">
	<div class="container">
		<div class="doctor_4_1_0__box lazy-bg">
			<h2 class="doctor_4_1_0__Title"><?php echo $doctor_data->title ?></h2>

				<div class="slide_thumb" id="slide_thumb">
					<?php
						foreach($info as $key => $value):
							$data = explode("\n", $value->info1_ct);
							echo '
								<div class="slide_item">
									<div class="doctor_4_1_0__item row">
										<div class="col-md-6 doctor_4_1_0__mb">
											<div class="doctor_4_1_0__name">'.$data[0].''.$data[1].'</div>
												'.$value->sub.'
											<a rel="nofollow" href="'.$data[5].'" class="doctor_4_1_0__button">
												<span><b>Khách hàng thành công</b> <i class="icon-angle-double-right"></i></span>
											</a>
										</div>
										<div class="col-md-6">
											<picture>
												<source media="(min-width:600px)" class="lazy" data-srcset="'.$data[2].'">
												<img width="310" height="310" class="lazy" data-src="'.$data[3].'" alt="'.$data[0].' '.$data[1].'">
											</picture>
										</div>
									</div>
								</div>
							';							

						endforeach;
					?>  
				</div>
		
		</div>

	
		<div class="doctor_4_1_0__tab">
			<ul class="thumbnails tabs2" id="thumbnails">
				<?php
					foreach($info as $key => $value):
						$data = explode("\n", $value->info1_ct);
						echo '
							<li class="doctor_4_1_0__tab__item tab">
								<div class="tab-item">
									<img width="127" height="129" class="lazy" data-src="'.$data[4].'" alt="'.$data[0].' '.$data[1].'">
									<div class="info">
										<p>'.$data[0].'<br> <span>'.$data[1].'</span></p>
									</div>
								</div>
							</li>
						';
					endforeach;
				?>  
			</ul>
		</div>
	
	</div>
</section>			

<?php endif; endforeach;
endif; endforeach; ?>  			