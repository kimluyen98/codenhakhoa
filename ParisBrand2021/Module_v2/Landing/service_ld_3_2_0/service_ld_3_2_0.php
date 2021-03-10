<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}

			.service_ld_3_2_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.service_ld_3_2_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.service_ld_3_2_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}

			.service_ld_3_2_0 {
				background: #F7F7F7;
				padding: 30px 0;
			}

			.service_ld_3_2_0 .mb {
				display: none;
			}

			.service_ld_3_2_0_pic {
				position: relative;
			}

			.service_ld_3_2_0_sub {
				position: absolute;
				z-index: 1;
				padding-top: 70px;
				color: #000;
			}

			.service_ld_3_2_0_sub ul {
				list-style: none;
				padding: 0;
				margin: 0;
				font-size: 16px;
			}

			.service_ld_3_2_0_title {
				text-transform: uppercase;
				font-size: 32px;
				color: #0055A4;
				line-height: 1.3;
			}

			.service_ld_3_2_0_title p {
				color: #000;
				font-size: 20px;
			}

			.service_ld_3_2_0_regist {
				margin: 15px 0 0;
				color: #fff;
				background-color: #ff5159;
				width: 220px;
				text-align: center;
				transition: 0.4s;
				border-radius: 40px;
			}

			.service_ld_3_2_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}

			.service_ld_3_2_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}

			.service_ld_3_2_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				padding: 10px 0;
				line-height: 1;
			}

			@media (max-width: 1440px) {
				.service_ld_3_2_0_pic {
					width: 90%;
					margin: 0 auto;
				}
				.service_ld_3_2_0_pic img {
					width: 100%;
				}
				.service_ld_3_2_0_sub {
					padding-top: 0;
					left: 80px;
				}
				.service_ld_3_2_0_title {
					font-size: 28px;
				}
				.service_ld_3_2_0_title p {
					font-size: 18px;
				}
			}

			@media (max-width: 1024px) {
				.service_ld_3_2_0_pic {
					width: 100%;
				}
				.service_ld_3_2_0_sub {
					left: 20px;
				}
				.service_ld_3_2_0_sub ul {
					font-size: 14px;
				}
			}

			@media (max-width: 812px) {
				.service_ld_3_2_0 {
					padding: 30px 0 80px;
				}
				.service_ld_3_2_0_title {
					font-size: 20px;
				}
				.service_ld_3_2_0_title p {
					font-size: 15px;
				}
				.service_ld_3_2_0_sub {
					width: 100%;
					padding-left: 20px;
					left: 0;
				}
				.service_ld_3_2_0_sub ul {
					width: 40%;
				}
				.service_ld_3_2_0_regist {
					margin: 200px auto 0;
				}
			}

			@media (max-width: 414px) {
				.service_ld_3_2_0 {
					padding: 20px 0;
				}
				.service_ld_3_2_0 .mb {
					display: block;
				}
				.service_ld_3_2_0 .pc {
					display: none;
				}
				.service_ld_3_2_0_title {
					font-size: 28px;
				}
				.service_ld_3_2_0_title p {
					font-size: 16px;
				}
				.service_ld_3_2_0_pic {
					margin: 20px auto;
				}
				.service_ld_3_2_0_sub {
					position: relative;
					text-align: center;
					padding-left: 0;
				}
				.service_ld_3_2_0_sub ul {
					width: 100%;
				}
				.service_ld_3_2_0_regist {
					margin: 20px auto 0;
					width: 170px;
				}
				.service_ld_3_2_0_regist a {
					font-size: 17px;
				}
			}

			@media (max-width: 320px) {
				.service_ld_3_2_0_title {
					font-size: 23px;
				}
			}

			/*# sourceMappingURL=service_ld_3_2_0.css.map */
		</style>	
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

<div class="service_ld_3_2_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_service_ld_3_2_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->