<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_2_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.person_ld_4_2_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_2_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.person_ld_4_2_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.person_ld_4_2_0 {
				padding-bottom: 30px;
				background-color: #fff;
			}
			.person_ld_4_2_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3661cc;
			}
			.person_ld_4_2_0_title p {
				font-size: 24px;
				color: #fff;
			}
			.person_ld_4_2_0__item {
				transition: 0.3s;
			}
			.person_ld_4_2_0__item:hover {
				transition: 0.3s;
			}
			.person_ld_4_2_0__item:hover .person_ld_4_2_0__pic img {
				transform: scale(1.05);
				transition: 0.6s;
			}
			.person_ld_4_2_0__pic img{
				width: 100%;
				display: block;
			}
			.person_ld_4_2_0_box {
				margin: 30px auto 0;
			}
			.person_ld_4_2_0__ct {
				width: 100%;
				padding: 10px 5px;
				font-size: 15px;
				height: 50px;
				color: #fff;
				text-align: center;
				background-image: linear-gradient(to right, #3661cc, #0f1ba7);
			}
			.person_ld_4_2_0__content {
				padding: 30px;
				box-shadow: -4px 7px 15px 0px #eee;
			}
			.person_ld_4_2_0_regist {
				margin: 20px auto 0;
				border-radius: 40px;
				color: #fff;
				background-color: #ff5159;
				width: 480px;
				text-align: center;
				transition: 0.4s;
				padding: 10px 0;
			}
			.person_ld_4_2_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			.person_ld_4_2_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			.person_ld_4_2_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
		
			@media (max-width: 1440px) {
				.person_ld_4_2_0__ct {
					font-size: 15px;
				}
			}
			@media (max-width: 1024px) {
				.person_ld_4_2_0_title {
					font-size: 28px;
				}
				.person_ld_4_2_0_title p {
					font-size: 20px;
				}
				.person_ld_4_2_0__ct {
					font-size: 15px;
				}
				.person_ld_4_2_0_regist {
					width: 500px;
				}
				.person_ld_4_2_0_regist a {
					font-size: 20px;
				}
			}
			@media (max-width: 414px) {
				.person_ld_4_2_0 {
					padding-bottom: 20px;
				}
				.person_ld_4_2_0_title {
					font-size: 24px;
				}
				.person_ld_4_2_0_title br {
					display: block;
				}
				.person_ld_4_2_0_title p {
					font-size: 16px;
				}
				.person_ld_4_2_0__ct {
					padding: 10px 0;
					font-size: 14px;
					height: 40px;
				}
				.person_ld_4_2_0__ct span {
					font-size: 14px;
					display: initial;
				}
				.person_ld_4_2_0_regist {
					margin: 10px auto 0;
					width: 290px;
				}
				.person_ld_4_2_0_regist a {
					font-size: 17px;
				}
				.person_ld_4_2_0_regist i {
					font-size: 15px;
				}
			}
			@media (max-width: 375px) {
				.person_ld_4_2_0_title {
					font-size: 20px;
				}
				.person_ld_4_2_0__ct {
					font-size: 11px;
				}
				.person_ld_4_2_0__ct span {
					font-size: 14px;
				}
			}
			@media (max-width: 360px) {
				.person_ld_4_2_0_regist {
					width: 230px;
				}
				.person_ld_4_2_0_regist i {
					font-size: 13px;
				}
			}
			@media (max-width: 320px) {
				.person_ld_4_2_0_regist {
					width: 210px;
				}
				.person_ld_4_2_0_regist i {
					font-size: 12px;
				}
			}
		
			/*# sourceMappingURL=person_ld_4_2_0.css.map */
		
		</style>		
		';	
		
		$js_inline .='
			<script>
			var person_ld_4_2_0_box=tns({container:".person_ld_4_2_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:4},1024:{items:4},1280:{items:6}}});
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

<div class="person_ld_4_2_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_4_2_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->