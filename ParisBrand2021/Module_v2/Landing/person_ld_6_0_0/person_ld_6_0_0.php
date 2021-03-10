<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/person_ld_6_0_0';
	if($check == 0){
		$css_inline .= '
			<style>
				.person_ld_6_0_0__title,
				.person_ld_6_0_0__tab .tab,
				.person_ld_6_0_0__img .item .text,
				.person_ld_6_0_0__regist a {
						font-family: "Roboto Condensed", -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
				.person_ld_6_0_0.copy {
					text-align: center;
					padding: 20px 0;
					min-height: 0
				}
				.person_ld_6_0_0.copy a {
					background: #F36B44;
					color: #fff;
					text-transform: uppercase;
					padding: 10px 30px;
					border-radius: 20px;
					border: 1px solid #fff;
					outline: none;
					cursor: pointer;
				}
				.person_ld_6_0_0 img{
					width: 100%;
					display: block;
				}
				a {
						text-decoration: none;
				}

				a {
						text-decoration: none;
				}

				.person_ld_6_0_0 {
						padding: 30px 0;
						background: url('.$path.'/images/per6-bg.jpg) center 0 no-repeat;
				}

				.person_ld_6_0_0__title {
						color: #3056a0;
						text-align: center;
						font-size: 34px;
						text-transform: uppercase;
				}

				.person_ld_6_0_0__box {
						display: flex;
						flex-wrap: wrap;
						justify-content: space-between;
						width: 90%;
						margin: 20px auto 0;
				}

				.person_ld_6_0_0__tab {
						width: 40%;
						display: flex;
						flex-direction: column;
				}

				.person_ld_6_0_0__tab .tab {
						background: #DAEEFF;
						margin-bottom: 10px;
						padding: 14px 80px;
						font-size: 18px;
						text-transform: uppercase;
						color: #000;
						cursor: pointer;
						outline: none;
				}
				

				.person_ld_6_0_0__tab .tab:nth-child(2n+2) {
						background: #F0F0F0;
				}

				.person_ld_6_0_0__tab .tab.tns-nav-active {
						background: #00AEFF;
						color: #fff;
				}
				.person_ld_6_0_0__tab.mb {
						display: none;
				}

				.person_ld_6_0_0__img {
						width: 58%;
				}

				.person_ld_6_0_0__img .item .text {
						background: #00AEFF;
						text-align: center;
						color: #fff;
						font-size: 20px;
						padding: 10px 5px;
				}

				.person_ld_6_0_0__regist {
						text-align: center;
						margin-top: 30px;
				}

				.person_ld_6_0_0__regist a {
						padding: 10px 30px;
						background: #FF5259;
						color: #fff;
						font-size: 22px;
						border-radius: 50px;
				}

				@media (max-width: 1024px) {
						.person_ld_6_0_0__title {
								font-size: 26px;
						}

						.person_ld_6_0_0__box {
								width: 100%;
						}

						.person_ld_6_0_0__tab .tab {
								font-size: 16px;
								padding: 13px 60px;
						}

						.person_ld_6_0_0__img .item .text {
								font-size: 16px;
						}

						.person_ld_6_0_0__regist a {
								font-size: 18px;
						}
				}

				@media (max-width: 812px) {
						.person_ld_6_0_0__title {
								font-size: 22px;
						}

						.person_ld_6_0_0__tab .tab {
								font-size: 14px;
								padding: 8px 30px;
						}
				}

				@media (max-width: 414px) {
						.person_ld_6_0_0__title {
								font-size: 22px;
						}

						.person_ld_6_0_0__title br {
								display: none;
						}

						.person_ld_6_0_0__box {
								display: block;
								margin-top: 10px;
						}

						.person_ld_6_0_0__tab {
								width: 100%;
						}

						.person_ld_6_0_0__tab .tab {
								font-size: 14px;
								padding: 5px;
								margin: 5px;
								display: block;
								text-transform: initial;
								text-align: center;
								background: #f0f0f0;
								border-radius: 50px;
						}

						.person_ld_6_0_0__tab.pc {
								display: none;
						}

						.person_ld_6_0_0__tab.mb {
								display: flex;
								flex-wrap: wrap;
								flex-direction: row;
								justify-content: center;
								margin-bottom: 10px;
						}

						.person_ld_6_0_0__img {
								width: 100%;
						}

						.person_ld_6_0_0__regist {
								margin-top: 20px;
						}
				}

				@media (max-width: 375px) {
						.person_ld_6_0_0__title {
								font-size: 18px;
						}

						.person_ld_6_0_0__regist a {
								font-size: 16px;
						}

						.person_ld_6_0_0__img .item .text {
								font-size: 14px;
						}

						.person_ld_6_0_0__tab .tab {
								margin: 5px 3px;
						}
				}

				@media (max-width: 320px) {
						.person_ld_6_0_0__title {
								font-size: 16px;
						}

						.person_ld_6_0_0__img .item .text {
								font-size: 12px;
						}

						.person_ld_6_0_0__tab .tab {
								margin: 5px 3px;
								font-size: 12px;
						}
				}
			</style>
		';	
		$js_inline .='
			<script>
				var person_ld_6_0_0__slider = tns({
					container: ".person_ld_6_0_0__slider",
					items: 1,
					navContainer: "#customize-thumbnails",
					navAsThumbnails: true,
					autoplay: false,
					autoplayTimeout: 1000,
					gutter: 10,
					controls: false,
				});
				var person_ld_6_0_0__slider1 = tns({
					container: ".person_ld_6_0_0__slider",
					items: 1,
					navContainer: "#customize-thumbnails1",
					navAsThumbnails: true,
					autoplay: false,
					autoplayTimeout: 1000,
					gutter: 10,
					controls: false,
				});
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

<div class="person_ld_6_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/index.html" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->