<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_4_0_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.person_ld_4_0_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.person_ld_4_0_1.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0;
			}
			.person_ld_4_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.person_ld_4_0_1.loaded {
				background: url('.$path.'/images/person_ld_4_0_1-bg.jpg) center 0 no-repeat;
				padding: 30px 0;
			}
			
			.person_ld_4_0_1_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #fff;
			}
			
			.person_ld_4_0_1_title p {
				font-size: 24px;
				color: #fff;
			}
			
			.person_ld_4_0_1_box {
				margin: 30px auto 0;
			}
			
			.person_ld_4_0_1__ct {
				padding: 5px 5px;
				font-size: 16px;
				color: #000000;
				text-align: center;
				background-color: #fff;
				text-transform: uppercase;
			}
			
			.person_ld_4_0_1__pic {
				transition: 0.9s;
			}
			.person_ld_4_0_1__pic img{
				width: 100%;
				display: block;
			}
			.person_ld_4_0_1__pic img:hover {
				transform: scale(1.01);
				transition: 0.6s;
			}
			.person_ld_4_0_1__ct span {
				display: block;
				text-transform: uppercase;
				font-size: 24px;
				color: #0078fe;
			}
			
			.person_ld_4_0_1__item1 {
				margin-bottom: 20px;
			}
			
			.person_ld_4_0_1_regist {
				background-color: #ff5159;
				color: #fff;
				padding: 6px 0 0px;
				border-radius: 40px;
				text-align: center;
				width: 300px;
				margin: 20px auto 0;
			}
			
			.person_ld_4_0_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 255, 255, 0.1), 0 0 1px 20px rgba(255, 255, 255, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.person_ld_4_0_1_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
				padding: 8px 10px;
			}
			
			.person_ld_4_0_1_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.person_ld_4_0_1_title {
					font-size: 30px;
				}
				.person_ld_4_0_1_title p {
					font-size: 20px;
				}
				.person_ld_4_0_1__ct {
					font-size: 13px;
				}
				.person_ld_4_0_1__ct span {
					font-size: 22px;
				}
				.person_ld_4_0_1_regist {
					width: 250px;
				}
				.person_ld_4_0_1_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 414px) {
				.person_ld_4_0_1.loaded {
					padding-bottom: 20px;
				}
				.person_ld_4_0_1_title {
					font-size: 24px;
				}
				.person_ld_4_0_1_title br {
					display: block;
				}
				.person_ld_4_0_1_title p {
					font-size: 16px;
				}
				.person_ld_4_0_1__ct {
					padding: 10px;
					font-size: 16px;
				}
				.person_ld_4_0_1__ct span {
					font-size: 16px;
					display: initial;
				}
				.person_ld_4_0_1_regist {
					margin: 10px auto 0;
					width: 200px;
				}
				.person_ld_4_0_1_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 375px) {
				.person_ld_4_0_1_title {
					font-size: 20px;
				}
				.person_ld_4_0_1__ct {
					font-size: 14px;
				}
				.person_ld_4_0_1__ct span {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=person_ld_4_0_1.css.map */
		</style>		
		';	

		$js_inline .='
			<script>
			var person_ld_4_0_1_box=tns({container:".person_ld_4_0_1_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:3}}});
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

<div class="person_ld_4_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_person_ld_4_0_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->