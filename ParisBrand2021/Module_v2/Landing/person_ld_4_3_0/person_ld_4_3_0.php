<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_3_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.person_ld_4_3_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_3_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.person_ld_4_3_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.person_ld_4_3_0 {
				padding: 30px 0;
				background: #f6f6f6;
			}

			.person_ld_4_3_0 .tns-nav{
				display: none;
			}
			
			.person_ld_4_3_0_title {
				font-size: 36px;
				color: #0055a4;
				text-transform: uppercase;
				text-align: center;
				padding: 10px 0 20px;
			}
			
			.person_ld_4_3_0_title br {
				display: none;
			}
			
			.person_ld_4_3_0_item {
				background: #fff;
				text-align: center;
				font-size: 16px;
				color: #000;
				transition: 0.4s;
				transition: 1s;
			}

			.person_ld_4_3_0_item img{
				width: 100%;
				display: block;
			}
			
			.person_ld_4_3_0_item__pic {
				transition: 1s;
			}
			.person_ld_4_3_0_item__pic img:hover {
				transform: scale(0.95);
				transition: 0.6s;
			}
			
			.person_ld_4_3_0_item__text {
				padding: 10px;
				height: 150px;
			}
			
			.person_ld_4_3_0_item__text p {
				text-transform: uppercase;
				color: #2461a9;
				margin-bottom: 5px;
				border-bottom: 1px solid #ff6e6e;
			}
			
			.person_ld_4_3_0_item__line {
				width: 50%;
				margin: 0 auto;
				padding-bottom: 10px;
			}
			
			.person_ld_4_3_0_item__line img {
				width: 100%;
			}
			
			.person_ld_4_3_0_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				margin: 25px auto 0;
				transition: 0.4s;
				padding: 10px 0;
				border-radius: 40px;
			}
			
			.person_ld_4_3_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.person_ld_4_3_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.person_ld_4_3_0_title {
					font-size: 30px;
				}
				.person_ld_4_3_0_item {
					font-size: 14px;
				}
				.person_ld_4_3_0_item__text {
					height: 130px;
				}
			}
			
			@media (max-width: 812px) {
				.person_ld_4_3_0 {
					padding: 10px 0;
				}
				.person_ld_4_3_0_title {
					font-size: 26px;
				}
				.person_ld_4_3_0_item {
					font-size: 13px;
				}
				.person_ld_4_3_0_regist {
					margin-top: 10px;
				}
				.person_ld_4_3_0 .tns-nav{
					display: block;
				}
			}
			
			@media (max-width: 414px) {
				.person_ld_4_3_0_title {
					font-size: 24px;
				}
				.person_ld_4_3_0_title br {
					display: block;
				}
				.person_ld_4_3_0_item {
					font-size: 14px;
				}
				.person_ld_4_3_0_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 320px) {
				.person_ld_4_3_0_title {
					font-size: 20px;
				}
				.person_ld_4_3_0_item {
					font-size: 12px;
				}
			}
			/*# sourceMappingURL=person_ld_4_3_0.css.map */
		</style>		
		';	

		$js_inline .='
			<script>
			var person_ld_4_3_0_box=tns({container:".person_ld_4_3_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3,nav:!0},1024:{items:5}}});
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

<div class="person_ld_4_3_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_4_3_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->