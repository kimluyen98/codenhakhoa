<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_4_4_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_4_4_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_4_4_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_4_4_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_4_4_0 {
				margin-top: 80px;
				margin-bottom: 90px;
			}
			
			.intro_ld_4_4_0_bg {
				position: relative;
			}
			
			.intro_ld_4_4_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_4_0_box {
				position: absolute;
				left: 0;
				right: 0;
				bottom: -90px;
			}
			
			.intro_ld_4_4_0_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
				margin: 15px 0;
			}
			
			.intro_ld_4_4_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_4_4_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_4_4_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			.intro_ld_4_4_0_box1 {
				width: 80%;
				margin: 0 auto;
			}
			
			.intro_ld_4_4_0_box1 img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_4_0_item {
				text-align: center;
				color: #000;
				font-size: 18px;
				background-color: #fff;
				padding: 5px;
				border: 1px solid #eee;
			}
			
			.intro_ld_4_4_0_item:hover {
				transition: 0.3s;
			}
			
			.intro_ld_4_4_0_item:hover .intro_ld_4_4_0_item__sub {
				background-color: #0061cf;
				color: #fff;
				transition: 0.3s;
			}
			
			.intro_ld_4_4_0_item__sub {
				padding: 15px 0;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_4_4_0_top {
					width: 70%;
					margin: 0 auto;
				}
				.intro_ld_4_4_0_title {
					width: 50%;
				}
				.intro_ld_4_4_0_title img {
					width: 70%;
					display: block;
				}
				.intro_ld_4_4_0_regist {
					font-size: 15px;
				}
				.intro_ld_4_4_0_regist a {
					font-size: 20px;
				}
				.intro_ld_4_4_0_box1 {
					width: 70%;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_4_4_0 {
					margin-bottom: 120px;
				}
				.intro_ld_4_4_0_box {
					bottom: -140px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_4_4_0_item {
					font-size: 15px;
				}
				.intro_ld_4_4_0_item__sub {
					padding: 10px 0;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_4_4_0_title img {
					width: 80%;
				}
				.intro_ld_4_4_0_item {
					font-size: 13px;
				}
				.intro_ld_4_4_0_box {
					bottom: -120px;
				}
				.intro_ld_4_4_0_regist {
					width: 200px;
					padding: 5px 0;
					margin: 5px 0;
				}
				.intro_ld_4_4_0_regist a {
					font-size: 18px;
				}
				.intro_ld_4_4_0_regist i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_4_4_0 {
					margin-bottom: 100px;
				}
				.intro_ld_4_4_0_top {
					width: 85%;
				}
				.intro_ld_4_4_0_title {
					width: 80%;
				}
				.intro_ld_4_4_0_title img {
					width: 100%;
				}
				.intro_ld_4_4_0_box {
					bottom: -110px;
				}
				.intro_ld_4_4_0_regist {
					margin: 10px auto;
					border-radius: 20px;
				}
				.intro_ld_4_4_0_box1 {
					width: 90%;
				}
			}
			
			@media (max-width: 360px) {
				.intro_ld_4_4_0_item__sub {
					height: 70px;
				}
				.intro_ld_4_4_0_item__sub br {
					display: none;
				}
			}
			/*# sourceMappingURL=intro_ld_4_4_0.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var intro_ld_4_4_0_box1=tns({container:".intro_ld_4_4_0_box1",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3}}});
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

<div class="intro_ld_4_4_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_4_4_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->