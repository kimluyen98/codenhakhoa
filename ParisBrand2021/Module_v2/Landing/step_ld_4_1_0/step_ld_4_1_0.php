<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/step_ld_4_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.step_ld_4_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.step_ld_4_1_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.step_ld_4_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.step_ld_4_1_0 {
				background: #f1f1f1;
				padding: 30px 0;
			}
			
			.step_ld_4_1_0_title {
				color: #0055a4;
				text-transform: uppercase;
				font-size: 36px;
				text-align: center;
				padding: 20px 0;
			}
			
			.step_ld_4_1_0_title p {
				color: #000;
				font-size: 24px;
			}
			
			.step_ld_4_1_0_title br {
				display: none;
			}
			
			.step_ld_4_1_0_item {
				text-align: center;
			}
			
			.step_ld_4_1_0_item__pic {
				margin-bottom: -120px;
			}
			.step_ld_4_1_0_item__pic img{
				width: 100%;
				display: block;
			}
			
			.step_ld_4_1_0_item__text {
				background-color: #0861c5;
				color: #fff;
				font-size: 16px;
				height: 200px;
				padding: 130px 10px 0;
				border-radius: 15px 15px 10px 10px;
				transition: 0.4s;
			}
			
			.step_ld_4_1_0_item__text:hover {
				background-color: #00a2ff;
				transition: 0.4s;
			}
			
			.step_ld_4_1_0_regist {
				color: #fff;
				background-color: #ff5159;
				width: 280px;
				text-align: center;
				transition: 0.4s;
				padding: 12px 0;
				border-radius: 40px;
				margin: 30px auto 20px;
			}
			
			.step_ld_4_1_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.step_ld_4_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.step_ld_4_1_0 {
					padding: 10px 0;
				}
				.step_ld_4_1_0_title {
					font-size: 30px;
				}
				.step_ld_4_1_0_title p {
					font-size: 20px;
				}
				.step_ld_4_1_0_item__text {
					padding: 120px 10px 0;
				}
				.step_ld_4_1_0_regist {
					width: 230px;
				}
				.step_ld_4_1_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.step_ld_4_1_0_item__text {
					font-size: 13px;
					height: 185px;
				}
			}
			
			@media (max-width: 414px) {
				.step_ld_4_1_0_title {
					font-size: 22px;
				}
				.step_ld_4_1_0_title br {
					display: block;
				}
				.step_ld_4_1_0_title p {
					font-size: 18px;
				}
				.step_ld_4_1_0 .owl-theme .owl-dots .owl-dot.active span,
				.step_ld_4_1_0 .owl-theme .owl-dots .owl-dot:hover span {
					background: #00aeff;
				}
				.step_ld_4_1_0_item__text {
					font-size: 14px;
					height: 180px;
				}
				.step_ld_4_1_0_regist {
					margin: 10px auto 20px;
				}
				.step_ld_4_1_0_regist a {
					font-size: 16px;
				}
			}
			
			@media (max-width: 360px) {
				.step_ld_4_1_0_title {
					font-size: 20px;
				}
				.step_ld_4_1_0_title p {
					font-size: 16px;
				}
				.step_ld_4_1_0_item__text {
					height: 200px;
				}
			}
			
			@media (max-width: 320px) {
				.step_ld_4_1_0_title {
					font-size: 18px;
				}
				.step_ld_4_1_0_title p {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=step_ld_4_1_0.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var step_ld_4_1_0_box=tns({container:".step_ld_4_1_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,loop:!1,gutter:20,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:5}}});
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

<div class="step_ld_4_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_4_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->