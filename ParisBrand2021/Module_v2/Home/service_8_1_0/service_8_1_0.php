<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/service_8_1_0/css/service_8_1_0_css.php"));
		
        add_action( 'theme_js', 'service_8_1_0_js' );
        function service_8_1_0_js(){
            echo '
				<script>
					for (var sliders = [], containers = document.querySelectorAll(".service_8_1_0_slider"), i = 0, l = containers.length; i < l; i++) sliders.push(tns({
						container: containers[i],
						axis: "horizontal",
						items: 4,
						gutter: 10,
						nav: !1,
						controls: !1,
						loop: !1,
						responsive: {
							0: {
								items: 1,
								mouseDrag: !1,
								touch: !0,
								controls: !0
							},
							768: {
								items: 4
							}
						}
					}));
					var service_8_1_0_slide_thumb = tns({
						container: ".service_8_1_0_slide_thumb",
						items: 1,
						navContainer: "#service_8_1_0_tabs2",
						navAsThumbnails: !0,
						autoplay: !1,
						autoplayTimeout: 1e3,
						loop: !1,
						controls: !1
					});
				</script>
            ';
		}
	}
	
?>

<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'service'):
    	foreach($field->service_sub_fields as $service_data): 
			if($service_data->acf_fc_layout == 'service_8_1_0'): 
			$info = $service_data->info; ?>

<section class="service_8_1_0">
	<div class="container lazy-bg">
		<h2 class="service_8_1_0__title"><?php echo $service_data->title ?></h2>
		<ul class="tabs service_8_1_0_tabs2" id="service_8_1_0_tabs2">
			<?php
				foreach($info as $key => $value):
					$data = explode("\n", $value->info_service_name);
					echo'
						<li class="tab">
							<div class="lazy-bg service_8_1_0__box1__item s'.$data[1].'">
								'.$data[0].'
							</div>
						</li>
					';
				endforeach;
			?>
		</ul>
		<div class="service_8_1_0__box2">

			<div class="service_8_1_0_slide_thumb" id="service_8_1_0_slide_thumb">
				<?php foreach($info as $key => $value): ?>
				<div class="service_8_1_0__box2__box">
					<div class="service_8_1_0_slider service_8_1_0__box2_content">
						<?php foreach($value->info_service_data as  $value2):
							$data2 = explode("\n", $value2->content);
							echo'
								<a rel="nofollow" href="'.$data2[1].'">
									<img width="277" height="378" class="lazy" data-src="'.$data2[0].'" alt="">
								</a>

							';
						endforeach; ?>
						</div>
					</div>
				<?php  endforeach; ?>

			</div>
	
		</div>
		<div class="service_8_1_0__regist">
			<a class="btnnkkm">Đăng ký ưu đãi <i class=" icon-angle-double-right"></i></a>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>  