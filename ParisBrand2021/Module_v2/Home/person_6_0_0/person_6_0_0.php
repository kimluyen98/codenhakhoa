<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/person_6_0_0/css/person_6_0_0_css.php"));

        add_action( 'theme_js', 'person_6_0_0_js' );
        function person_6_0_0_js(){
            echo '
				<script>
					for (var sliders = [], containers = document.querySelectorAll(".person_6_0_0__box2_slider"), i = 0, l = containers.length; i < l; i++) sliders.push(tns({
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
					var person_6_0_0__box_item = tns({
						container: ".person_6_0_0__box_item",
						items: 1,
						navContainer: "#person_6_0_0_tabs2",
						navAsThumbnails: !0,
						autoplay: !1,
						autoplayTimeout: 1e3,
						controls: !1,
						loop: !1
					});
				</script>
            ';
		}
	}
	
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'person'):
    	foreach($field->person_sub_fields as $person_data): 
			if($person_data->acf_fc_layout == 'person_6_0_0'): 
			$info = $person_data->info; ?>

<section class="peron_6_0_0">
	<div class="container lazy-bg">
		<h2 class="peron_6_0_0__title"><?php echo $person_data->title ?></h2>
		<ul class="peron_6_0_0_tabs2" id="person_6_0_0_tabs2">
			<?php
				foreach($info as $key => $value):
					$data = explode("\n",  $value->info_service_name);
					echo'
						<li class="tab">
							<div class="peron_6_0_0__box1__item s'.$data[1].' lazy-bg">
								'.$data[0].'
							</div>
						</li>
					';
				endforeach;
			?>
		</ul>

		<div class="person_6_0_0__box_item" id="person_6_0_0__box_item">
			<?php foreach($info as $key => $value): ?>
			<div class="peron_6_0_0__box2__box">
			<div class="person_6_0_0__box2_slider person_6_0_0__boxt_ct">
				<?php
					foreach($value->info_person_data as  $value2):
						$data2 = explode("\n", $value2->content);
							echo'
							<div class="peron_6_0_0__box2__box__item">
								<img style="width:100%; height:100%" width="277" height="277" class="lazy" data-src="'.$data2[2].'" alt="'.$data2[0].'">
								<div class="item__info">
									'.$data2[0].'<br>
									<span>'.$data2[1].'</span>
								</div>
							</div>
							';
					endforeach;
					echo'</div></div>';
				endforeach;
			?>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>  