<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/service_ld_3_3_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.service_ld_3_3_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.service_ld_3_3_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.service_ld_3_3_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.service_ld_3_3_0 {
				background: url('.$path.'/images/service_ld_3_3_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 30px 0;
			}
			.serive_ld_3_3_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.serive_ld_3_3_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.service_ld_3_3_0_title {
				color: #fff;
				text-transform: uppercase;
				font-size: 36px;
				text-align: center;
				padding: 20px 0 0;
			}
		
			.service_ld_3_3_0_title p {
				font-size: 24px;
			}
		
			.service_ld_3_3_0_pic {
				padding: 0 50px;
			}
		
			.service_ld_3_3_0-ct {
				text-align: center;
				color: #aefeff;
				font-size: 24px;
				margin-bottom: 20px;
			}
		
			.service_ld_3_3_0-ct span {
				display: block;
				color: #fff;
				font-size: 16px;
			}
			.service_ld_3_3_0_item img{
				width: 100%;
				display: block;
			}
			.service_ld_3_3_0_item {
				-webkit-transition: 0.8s ease;
			}
		
			.service_ld_3_3_0_item:hover .service_ld_3_3_0_pic img {
				transform: scale(1.05);
				transition: 0.8s ease;
				-webkit-transition: 0.8s ease;
			}
		
			.service_ld_3_3_0_item:hover .service_ld_3_3_0-pic2 img {
				transform: scale(0.95);
				transition: 0.8s ease;
				-webkit-transition: 0.8s ease;
			}
		
			.service_ld_3_3_0_regist {
				text-align: center;
				transition: 0.4s;
				margin: 30px auto 0;
			}
		
			.service_ld_3_3_0_regist:hover a {
				box-shadow: 0 0 1px 3px rgba(174, 254, 255, 0.8), 0 0 1px 10px rgba(174, 254, 255, 0.1), 0 0 1px 20px rgba(174, 254, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.service_ld_3_3_0_regist a {
				display: inline-block;
				text-transform: uppercase;
				color: #fff;
				padding: 12px 30px;
				font-size: 24px;
				line-height: 1;
				background-color: #ff5159;
				color: #fff;
				border-radius: 40px;
			}
		
			@media (max-width: 1024px) {
				.service_ld_3_3_0_title {
					font-size: 28px;
				}
		
				.service_ld_3_3_0_title p {
					font-size: 20px;
				}
		
				.service_ld_3_3_0_item__sub {
					font-size: 20px;
				}
		
				.service_ld_3_3_0-ct {
					font-size: 20px;
				}
		
				.service_ld_3_3_0_regist {
					width: 250px;
				}
		
				.service_ld_3_3_0_regist a {
					font-size: 18px;
					line-height: 1.2;
				}
		
				.service_ld_3_3_0_regist i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 414px) {
				.service_ld_3_3_0_title {
					font-size: 24px;
				}
		
				.service_ld_3_3_0_title p {
					font-size: 16px;
				}
		
				.service_ld_3_3_0-pic2 {
					position: absolute;
					top: 230px;
				}
		
				.service_ld_3_3_0-pic2 img {
					width: 50%;
					margin: 0 auto;
				}
		
				.service_ld_3_3_0-ct {
					margin-top: 60px;
				}
		
				.service_ld_3_3_0_regist {
					margin: 10px auto;
				}
		
				.service_ld_3_3_0_regist a {
					font-size: 16px;
				}
		
				.service_ld_3_3_0_regist i {
					font-size: 13px;
				}
			}
		
			@media (max-width: 375px) {
				.service_ld_3_3_0_title {
					font-size: 24px;
				}
		
				.service_ld_3_3_0_title p {
					font-size: 18px;
				}
		
				.service_ld_3_3_0-pic2 {
					top: 200px;
				}
		
				.service_ld_3_3_0-ct {
					margin-top: 50px;
				}
			}
		
			@media (max-width: 320px) {
				.service_ld_3_3_0-pic2 {
					top: 150px;
				}
		
				.service_ld_3_3_0-ct {
					margin-top: 20px;
				}
			}
		
			/*# sourceMappingURL=service_ld_3_3_0.css.map */
		</style>
		';	
		$js_inline .='
			<script>
			var service_ld_3_3_0_box=tns({container:".service_ld_3_3_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1,nav:!0},768:{items:3}}});
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

<div class="service_ld_3_3_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_service_ld_3_3_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->