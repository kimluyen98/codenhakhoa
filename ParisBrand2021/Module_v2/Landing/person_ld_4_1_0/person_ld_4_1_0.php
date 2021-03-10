<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.person_ld_4_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0;
			}
			.person_ld_4_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.person_ld_4_1_0.loaded {
				background: url('.$path.'/images/person_ld_4_1_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 20px 0;
			}
			.person_ld_4_1_0 .tns-nav{
				display: none;
			}
		
			.person_ld_4_1_0_title {
				color: #fff;
				text-transform: uppercase;
				font-size: 36px;
				text-align: center;
				padding: 20px 0;
			}
		
			.person_ld_4_1_0_title br {
				display: none;
			}
		
			.person_ld_4_1_0_item img {
				margin-bottom: 20px;
				-webkit-transition: 0.4s ease;
				transition: 0.4s ease;
			}
		
			.person_ld_4_1_0_item img:hover {
				-webkit-transform: scale(0.98);
				transform: scale(0.92);
			}
		
			.person_ld_4_1_0_box_mb {
				display: none;
			}
			.person_ld_4_1_0_box img{
				width: 100%;
				display: block;
			}
			.person_ld_4_1_0_regist {
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				margin: 20px auto 0;
				padding: 6px 0;
				border-radius: 40px;
			}
		
			.person_ld_4_1_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.person_ld_4_1_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
		
			.person_ld_4_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1.2;
			}
		
			@media (max-width: 1024px) {
				.person_ld_4_1_0_title {
					font-size: 30px;
				}
				.person_ld_4_1_0_regist {
					width: 270px;
				}
				.person_ld_4_1_0_regist i {
					font-size: 13px;
				}
				.person_ld_4_1_0_regist a {
					font-size: 20px;
				}
			}
		
			@media (max-width: 812px) {
				.person_ld_4_1_0.loaded {
					min-height: 570px;
				}
				.person_ld_4_1_0_title {
					font-size: 26px;
				}
			}
		
			@media (max-width: 414px) {
				.person_ld_4_1_0.loaded {
					background: #0056b1;
					padding: 10px 0;
					min-height: 520px;
				}
				.person_ld_4_1_0_title {
					font-size: 24px;
				}
				.person_ld_4_1_0_title br {
					display: block;
				}
				.person_ld_4_1_0_box_pc {
					display: none;
				}
				.person_ld_4_1_0_box_mb {
					display: block;
				}
				.person_ld_4_1_0_item img {
					margin-bottom: 0;
				}
				.person_ld_4_1_0_regist {
					margin: 10px auto 0;
				}
			}
		
			@media (max-width: 375px) {
				.person_ld_4_1_0.loaded {
					min-height: auto;
				}
				.person_ld_4_1_0_title {
					font-size: 20px;
				}
				.person_ld_4_1_0_regist {
					margin: 10px auto;
					width: 230px;
				}
				.person_ld_4_1_0_regist i {
					font-size: 12px;
				}
				.person_ld_4_1_0_regist a {
					font-size: 16px;
				}
			}
			/*# sourceMappingURL=person_ld_4_1_0.css.map */
		</style>	
		';	

		$js_inline .='
			<script>
			var person_ld_4_1_0_box_pc=tns({container:".person_ld_4_1_0_box_pc",items:4,center:!0,nav:!1,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!1},768:{mouseDrag:!1,items:3}}});
			var person_ld_4_1_0_box_mb=tns({container:".person_ld_4_1_0_box_mb",items:4,center:!0,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1,nav:!0},414:{items:1,nav:!0}}});
			</script>
		';
	}	
	
?>
<!-- Demo HTML -->
<?php 
	$info = $field['info'];
	if(empty($info)):
		echo $css_inline;
		get_template_part("Module_v2/Landing/".$name."/html_id_".$name."");
	else:
		echo $info;
	endif;
?>
<!-- Copy -->

<?php if(isset($_GET['load'])): ?>

<div class="person_ld_4_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_4_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->