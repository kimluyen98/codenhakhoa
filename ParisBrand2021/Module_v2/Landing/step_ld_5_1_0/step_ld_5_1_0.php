<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/step_ld_5_1_0';
  if($check == 0){
    $css_inline .= '
		<style>
				a {
						text-decoration: none;
				}

				.step_ld_5_1_0 {
						font-family: "Roboto Condensed", sans-serif;
				}
				.step_ld_5_1_0.copy {
					text-align: center;
					padding: 20px 0;
					min-height: 0
				}
				.step_ld_5_1_0.copy a {
					background: #F36B44;
					color: #fff;
					text-transform: uppercase;
					padding: 10px 30px;
					border-radius: 20px;
					border: 1px solid #fff;
					outline: none;
					cursor: pointer;
				}

				.step_ld_5_1_0 {
						background: url('.$path.'/images/step_ld_5_1_0-bg.jpg) center 0 no-repeat;
						padding: 30px 0;
				}

				.step_ld_5_1_0_title {
						text-transform: uppercase;
						text-align: center;
						font-size: 36px;
						color: #fff;
				}

				.step_ld_5_1_0_title p {
						font-size: 24px;
				}

				.step_ld_5_1_0_box {
						margin-top: 20px;
						display: flex;
						flex-wrap: wrap;
				}

				.step_ld_5_1_0__item {
						position: relative;
						transition: 0.8s ease;
						-webkit-transition: 0.8s ease;
				}

				.step_ld_5_1_0__item:hover .step_ld_5_1_0__pic img {
						transform: scale(0.95);
						transition: 0.8s ease;
						-webkit-transition: 0.8s ease;
				}

				.step_ld_5_1_0__item:hover .step_ld_5_1_0_bgText {
						background-color: #de5259;
						color: #fff;
				}

				.step_ld_5_1_0__item:hover .step_ld_5_1_0_bgText img {
						opacity: 0;
				}

				.step_ld_5_1_0__item:hover .step_ld_5_1_0__des {
						color: #fff;
				}

				.step_ld_5_1_0__item:hover .step_ld_5_1_0__des ul li {
						color: #fff;
				}

				.step_ld_5_1_0__des {
						color: #26478f;
						font-size: 22px;
						position: absolute;
						z-index: 2;
						padding: 20px 30px;
				}

				.step_ld_5_1_0__des ul {
						font-size: 20px;
						padding: 0;
				}

				.step_ld_5_1_0__des ul li {
						color: #000;
						list-style: none;
				}

				.step_ld_5_1_0_bgText {
						position: relative;
				}

				.step_ld_5_1_0__picSpec {
						order: 2;
				}

				.step_ld_5_1_0__pic img {
						width: 100%;
						display: block;
				}

				.step_ld_5_1_0__itemSpec {
						display: flex;
						flex-wrap: wrap;
				}

				@media (max-width: 1024px) {
						.step_ld_5_1_0_title {
								font-size: 30px;
						}

						.step_ld_5_1_0_title p {
								font-size: 20px;
						}

						.step_ld_5_1_0__des {
								font-size: 18px;
						}

						.step_ld_5_1_0__des ul {
								font-size: 16px;
						}
				}

				@media (max-width: 812px) {
						.step_ld_5_1_0_title {
								font-size: 28px;
						}
				}

				@media (max-width: 414px) {
						.step_ld_5_1_0 {
								padding-bottom: 20px;
						}

						.step_ld_5_1_0_title {
								font-size: 24px;
						}

						.step_ld_5_1_0_title br {
								display: block;
						}

						.step_ld_5_1_0_title p {
								font-size: 16px;
						}

						.step_ld_5_1_0_title span {
								display: none;
						}

						.step_ld_5_1_0__picSpec {
								order: 0;
						}

						.step_ld_5_1_0_bgText {
								height: 230px;
						}

						.step_ld_5_1_0__des {
								top: 330px;
								font-size: 24px;
						}

						.step_ld_5_1_0__des ul {
								font-size: 16px;
						}

						.step_ld_5_1_0 .owl-theme .owl-dots .owl-dot.active span,
						.step_ld_5_1_0 .owl-theme .owl-dots .owl-dot:hover span {
								background: #006cff;
						}
				}

				@media (max-width: 375px) {
						.step_ld_5_1_0__des {
								top: 290px;
						}

						.step_ld_5_1_0__des ul {
								margin: 0;
						}
				}

				@media (max-width: 320px) {
						.step_ld_5_1_0__des {
								top: 250px;
								font-size: 18px;
						}
				}

				/*# sourceMappingURL=step_ld_5_1_0.css.map */
		</style>
			';
		$js_inline .='
			<script>
			var step_ld_5_1_0_box=tns({container:".step_ld_5_1_0_box",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,loop:!1,gutter:0,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:1,nav:!0},768:{items:2,nav:!0},1024:{items:3}}});
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

<div class="step_ld_5_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_step_ld_5_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->




 