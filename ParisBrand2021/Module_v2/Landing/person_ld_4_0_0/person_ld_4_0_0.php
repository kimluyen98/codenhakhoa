<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.person_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.person_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.person_ld_4_0_0 {
				background-color: #13439f;
				padding: 30px 0;
			}
			
			.person_ld_4_0_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #fff;
			}
			
			.person_ld_4_0_0_title br {
				display: none;
			}
			
			.person_ld_4_0_0_title p {
				font-size: 24px;
				color: #fff;
			}
			
			.person_ld_4_0_0_box1 {
				margin: 30px auto 0;
			}
			
			.person_ld_4_0_0_box2 {
				display: none !important;
			}
			
			.person_ld_4_0_0__ct {
				padding: 5px 5px;
				font-size: 16px;
				color: #fff;
				text-align: center;
				background-color: #05b6fd;
			}
			
			.person_ld_4_0_0__pic {
				transition: 0.9s;
			}
			.person_ld_4_0_0__pic img:hover{
				transform: scale(1.01);
				transition: 0.6s;
			}
			.person_ld_4_0_0__ct span {
				display: block;
				text-transform: uppercase;
				font-size: 24px;
			}
			.person_ld_4_0_0 .tns-nav{
				display: none;
				margin: 0;
			}
			.person_ld_4_0_0__item img {
				width: 100%;
				display: block;
			}
			.person_ld_4_0_0__item1 {
				margin-bottom: 30px;
			}
			
			.person_ld_4_0_0_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 6px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 300px;
				margin: 20px auto 0;
				transition: 0.4s;
			}
			.person_ld_4_0_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(225, 225, 225, 0.1), 0 0 1px 20px rgba(225, 225, 225, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.person_ld_4_0_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
				padding: 8px 10px;
			}
			
			.person_ld_4_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.person_ld_4_0_0_title {
					font-size: 30px;
				}
				.person_ld_4_0_0_title p {
					font-size: 20px;
				}
				.person_ld_4_0_0__ct {
					font-size: 13px;
					height: 80px;
				}
				.person_ld_4_0_0__ct span {
					font-size: 22px;
				}
				.person_ld_4_0_0_regist {
					width: 250px;
				}
				.person_ld_4_0_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 414px) {
				.person_ld_4_0_0 .tns-nav{
					display: block;
				}
				.person_ld_4_0_0 {
					padding-bottom: 20px;
				}
				.person_ld_4_0_0_title {
					font-size: 24px;
				}
				.person_ld_4_0_0_title br {
					display: block;
				}
				.person_ld_4_0_0_title p {
					font-size: 16px;
				}
				.person_ld_4_0_0_box1 {
					display: none !important;
				}
				.person_ld_4_0_0_box2 {
					margin: 20px auto 0;
					display: block !important;
				}
				.person_ld_4_0_0__ct {
					font-size: 16px;
					height: auto;
				}
				.person_ld_4_0_0__ct span {
					font-size: 24px;
				}
				.person_ld_4_0_0_regist {
					width: 200px;
				}
				.person_ld_4_0_0_regist a {
					font-size: 17px;
				}
				.person_ld_4_0_0 .owl-theme .owl-nav.disabled+.owl-dots {
					margin-top: 0;
				}
			}
			
			@media (max-width: 360px) {
				.person_ld_4_0_0_title {
					font-size: 22px;
				}
			}
			@media (max-width: 320px) {
				.person_ld_4_0_0_title {
					font-size: 20px;
				}
				.person_ld_4_0_0__ct {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=person_ld_4_0_0.css.map */
		</style>		
		';	

		$js_inline .='
			<script>
			var person_ld_4_0_0_box1=tns({container:".person_ld_4_0_0_box1",items:4,center:!0,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!1},768:{mouseDrag:!1,items:3}}});
			var person_ld_4_0_0_box2=tns({container:".person_ld_4_0_0_box2",items:4,center:!0,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,mouseDrag:!1,gutter:10,swipeAngle:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1},414:{items:1}}});
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

<div class="person_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->