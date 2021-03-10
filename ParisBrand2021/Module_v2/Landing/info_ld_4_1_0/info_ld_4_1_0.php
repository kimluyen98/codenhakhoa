<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/info_ld_4_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.info_ld_4_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.info_ld_4_1_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.info_ld_4_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.info_ld_4_1_0.loaded {
				background: url('.$path.'/images/info_ld_4_1_0-bg.jpg) center 0 no-repeat;
				background-size: 130%;
				padding: 30px 0;
			}
			
			.info_ld_4_1_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
			}
			
			.info_ld_4_1_0_title br {
				display: none;
			}
			
			.info_ld_4_1_0_box {
				margin-top: 20px;
			}
			.info_ld_4_1_0__item img{
				width: 100%;
				display: block;
			}
			.info_ld_4_1_0__item {
				margin: 0 3px;
				transition: 0.4s;
			}
			
			.info_ld_4_1_0__item:hover {
				transform: scale(1.05);
				transition: 0.6s;
			}
			
			.info_ld_4_1_0__item:hover .info_ld_4_1_0__pic img {
				transform: 3s;
				scale: 1.1;
			}
			
			.info_ld_4_1_0__ct {
				padding-top: 10px;
				position: relative;
				text-align: center;
				font-size: 16px;
				background-color: #fff;
				height: 80px;
				padding-left: 20px;
			}
			
			.info_ld_4_1_0__ct p {
				font-size: 24px;
				margin: 0;
				line-height: 1;
			}
			
			.info_ld_4_1_0__number {
				position: absolute;
				bottom: 0;
				left: 0;
				color: #fff;
				background-color: #076cca;
				font-size: 45px;
				line-height: 1.2;
				padding: 8px 5px 5px 8px;
			}
			
			.info_ld_4_1_0_regist {
				border-radius: 40px;
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.info_ld_4_1_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.info_ld_4_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				padding: 8px 10px;
			}
			
			@media (max-width: 1440px) {
				.info_ld_4_1_0.loaded {
					background-size: 150%;
				}
			}
			
			@media (max-width: 1366px) {
				.info_ld_4_1_0.loaded {
					background-size: 170%;
				}
			}
			
			@media (max-width: 1024px) {
				.info_ld_4_1_0.loaded {
					background-size: 200%;
				}
				.info_ld_4_1_0_title {
					font-size: 30px;
				}
				.info_ld_4_1_0_title p {
					font-size: 20px;
				}
				.info_ld_4_1_0__item img {
					width: 100%;
				}
				.info_ld_4_1_0__ct {
					height: 80px;
					padding-left: 40px;
					font-size: 14px;
				}
				.info_ld_4_1_0_regist {
					width: 280px;
				}
				.info_ld_4_1_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.info_ld_4_1_0.loaded {
					background-size: 280%;
				}
				.info_ld_4_1_0__ct {
					padding-left: 35px;
					font-size: 13px;
				}
				.info_ld_4_1_0_regist {
					margin: 10px auto 0;
				}
			}
			
			@media (max-width: 414px) {
				.info_ld_4_1_0.loaded {
					background-color: #f6f9fa;
					padding-bottom: 20px;
				}
				.info_ld_4_1_0_title {
					font-size: 22px;
				}
				.info_ld_4_1_0_title br {
					display: block;
				}
				.info_ld_4_1_0_title p {
					font-size: 14px;
				}
				.info_ld_4_1_0_regist {
					margin: 10px auto 0;
					width: 250px;
				}
				.info_ld_4_1_0_regist a {
					font-size: 17px;
				}
				.info_ld_4_1_0__number {
					padding: 8px 5px 5px 8px;
				}
				.info_ld_4_1_0__ct {
					font-size: 16px;
					height: 82px;
				}
			}
			
			@media (max-width: 375px) {
				.info_ld_4_1_0__ct {
					font-size: 13px;
					height: 75px;
				}
				.info_ld_4_1_0__ct p {
					font-size: 20px;
				}
			}
			
			@media (max-width: 360px) {
				.info_ld_4_1_0__ct {
					font-size: 12px;
					height: 72px;
				}
			}
			
			@media (max-width: 320px) {
				.info_ld_4_1_0_title {
					font-size: 18px;
				}
				.info_ld_4_1_0__ct {
					font-size: 10px;
				}
			}
			/*# sourceMappingURL=info_ld_4_1_0.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var info_ld_4_1_0_box=tns({container:".info_ld_4_1_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:5}}});
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

<div class="info_ld_4_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_info_ld_4_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->