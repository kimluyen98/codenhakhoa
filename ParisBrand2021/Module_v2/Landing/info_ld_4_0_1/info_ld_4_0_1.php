<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/info_ld_4_0_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.info_ld_4_0_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.info_ld_4_0_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.info_ld_4_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.info_ld_4_0_1 {
				background: url(images/info_ld_4_0_1-bg.jpg) center 0 no-repeat;
				padding: 30px 0;
			}
			
			.info_ld_4_0_1_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
			}
			
			.info_ld_4_0_1_title br {
				display: none;
			}
			
			.info_ld_4_0_1_title p {
				font-size: 24px;
				color: #000000;
			}
			.info_ld_4_0_1__item img{
				width: 100%;
				display: block;
			}
			.info_ld_4_0_1__item {
				padding-top: 30px;
				transition: 0.8s;
			}
			
			.info_ld_4_0_1__item:hover {
				margin-top: -40px;
				transition: 0.8s;
			}
			
			.info_ld_4_0_1__item:hover .info_ld_4_0_1__ct {
				background-color: #3d6dd9;
				color: #fff;
			}
			
			.info_ld_4_0_1__item:hover .info_ld_4_0_1__ct span {
				color: #fff;
			}
			
			.info_ld_4_0_1__ct {
				padding: 5px 5px;
				font-size: 16px;
				height: 170px;
				color: #000000;
				background-color: #fff;
				padding: 30px 20px;
			}
			
			.info_ld_4_0_1__ct span {
				display: block;
				text-transform: uppercase;
				font-size: 24px;
				color: #3056a0;
			}
			
			.info_ld_4_0_1_regist {
				margin: 30px auto 0;
				border-radius: 40px;
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.info_ld_4_0_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.info_ld_4_0_1_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.info_ld_4_0_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.info_ld_4_0_1_title {
					font-size: 30px;
				}
				.info_ld_4_0_1_title p {
					font-size: 20px;
				}
				.info_ld_4_0_1__ct {
					font-size: 13px;
				}
				.info_ld_4_0_1__ct span {
					font-size: 22px;
				}
				.info_ld_4_0_1_regist {
					width: 280px;
				}
				.info_ld_4_0_1_regist a {
					font-size: 20px;
				}
				.info_ld_4_0_1__item {
					padding-top: 30px;
				}
				.info_ld_4_0_1__item:hover {
					margin-top: -20px;
					transition: 0.8s;
				}
			}
			
			@media (max-width: 414px) {
				.info_ld_4_0_1 {
					padding-bottom: 20px;
				}
				.info_ld_4_0_1_title {
					font-size: 22px;
				}
				.info_ld_4_0_1_title br {
					display: block;
				}
				.info_ld_4_0_1_title p {
					font-size: 14px;
				}
				.info_ld_4_0_1__ct {
					font-size: 14px;
					height: 120px;
					padding: 20px 15px;
				}
				.info_ld_4_0_1__ct span {
					font-size: 16px;
				}
				.info_ld_4_0_1_regist {
					width: 250px;
				}
				.info_ld_4_0_1_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.info_ld_4_0_1 {
					padding-bottom: 20px;
				}
				.info_ld_4_0_1__ct {
					height: 140px;
					padding: 20px 10px;
				}
			}
			
			@media (max-width: 320px) {
				.info_ld_4_0_1__ct {
					padding: 10px 5px;
					height: 160px;
				}
			}
			/*# sourceMappingURL=info_ld_4_0_1.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var info_ld_4_0_1_box=tns({container:".info_ld_4_0_1_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:4}}});
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

<div class="info_ld_4_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_info_ld_4_0_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->