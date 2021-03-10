<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/info_ld_4_0_2';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.info_ld_4_0_2 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.info_ld_4_0_2.copy {
				text-align: center;
				padding: 20px 0;
			}
			.info_ld_4_0_2.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.info_ld_4_0_2.loaded {
				background: url('.$path.'/images/info_ld_4_0_2-bg.jpg) center 0 no-repeat;
				padding: 30px 0;
			}
			
			.info_ld_4_0_2_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #fff;
			}
			
			.info_ld_4_0_2_title br {
				display: none;
			}
			
			.info_ld_4_0_2_box {
				margin-top: 30px;
			}
			
			.info_ld_4_0_2__li {
				display: flex;
				flex-wrap: wrap;
				transition: 0.4s;
			}
			
			.info_ld_4_0_2__li:hover .info_ld_4_0_2__desc {
				color: #fff;
				background-color: #3d6dd9;
				transition: 0.4s;
			}
			.info_ld_4_0_2__pic img{
				width: 100%;
				display: block;
			}
			.info_ld_4_0_2__pic {
				width: 45%;
			}
			
			.info_ld_4_0_2__desc {
				color: #000000;
				background-color: #fff;
				width: 55%;
				font-size: 16px;
				text-transform: uppercase;
				padding: 30px 15px;
			}
			
			.info_ld_4_0_2__li1 {
				padding-bottom: 20px;
			}
			
			.info_ld_4_0_2_regist {
				border-radius: 40px;
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.info_ld_4_0_2_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.info_ld_4_0_2_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				padding: 8px 10px;
			}
			
			@media (max-width: 1024px) {
				.info_ld_4_0_2_title {
					font-size: 30px;
				}
				.info_ld_4_0_2_title p {
					font-size: 20px;
				}
				.info_ld_4_0_2_regist {
					width: 280px;
				}
				.info_ld_4_0_2_regist a {
					font-size: 20px;
				}
				.info_ld_4_0_2__desc {
					padding: 20px 15px 10px;
				}
			}
			
			@media (max-width: 812px) {
				.info_ld_4_0_2__desc {
					padding: 10px 15px 5px;
					font-size: 15px;
				}
			}
			
			@media (max-width: 414px) {
				.info_ld_4_0_2.loaded {
					padding-bottom: 20px;
				}
				.info_ld_4_0_2_title {
					font-size: 22px;
				}
				.info_ld_4_0_2_title br {
					display: block;
				}
				.info_ld_4_0_2_title p {
					font-size: 14px;
				}
				.info_ld_4_0_2__pic {
					width: 48%;
				}
				.info_ld_4_0_2__desc {
					width: 52%;
				}
				.info_ld_4_0_2_regist {
					margin: 10px auto 0;
					width: 250px;
				}
				.info_ld_4_0_2_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.info_ld_4_0_2.loaded {
					padding-bottom: 20px;
				}
				.info_ld_4_0_2__desc {
					padding: 10px 15px 5px;
					font-size: 14px;
				}
			}
			
			@media (max-width: 360px) {
				.info_ld_4_0_2__desc {
					font-size: 13px;
				}
			}
			
			@media (max-width: 320px) {
				.info_ld_4_0_2__desc {
					font-size: 11px;
				}
			}
			/*# sourceMappingURL=info_ld_4_0_2.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var info_ld_4_0_2_box=tns({container:".info_ld_4_0_2_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:20,swipeAngle:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1,nav:!0},768:{items:2}}});
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

<div class="info_ld_4_0_2 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_info_ld_4_0_2.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->