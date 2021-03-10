<?php
	if($check == 0){
		include(locate_template("Module_v2/Home/person_2_5_0/css/person_2_5_0_css.php"));

        add_action( 'theme_js', 'person_2_5_0_js' );
        function person_2_5_0_js(){
            echo '
				<script>
					var person_2_5_0_slider=tns({container:".person_2_5_0_slider",items:6,slideBy:"page",autoplay:!1,loop:!1,autoplayButtonOutput:!1,mouseDrag:!0,lazyload:!0,lazyloadSelector:".tns-lazy",gutter:20,loop:!1,navPosition:"bottom",controlsPosition:"bottom",nav:!1,responsive:{0:{items:1,mouseDrag:!1,touch:!0,gutter:20},768:{items:2},1024:{items:2}}});
				</script>
            ';
		}		
	}
?>
<?php foreach($page_json as $field): 
    	if($field->acf_fc_layout == 'person'):
    	foreach($field->person_sub_fields as $person_data): 
			if($person_data->acf_fc_layout == 'person_2_5_0'): 
			$info = $person_data->info; ?>

<section class="person_2_5_0">
	<div class="container lazy-bg">
		<h2 class="person_2_5_0__title"><?php echo $person_data->title ?></h2>
		<div class="person_2_5_0_box">
			<div class="person_2_5_0_slider">
			<?php
				foreach($info as $key => $value):
					$data = explode("\n", $value->content);
					echo'
						<div class="person_2_5_0__item">
							<a href="'.$data[3].'">
								<img width="560" height="560" class="lazy" data-src="/rs/?w=570&h=570&src='.$data[2].'" alt="'.$data[0].'">
								<div class="person_2_5_0__ct">
									<b>'.$data[0].'</b><br>
									<span>'.$data[1].'</span>
								</div>
							</a>
						</div>
						
					';
				endforeach;
			?>
			</div>
		</div>
	</div>
</section>

<?php endif; endforeach;
endif; endforeach; ?>