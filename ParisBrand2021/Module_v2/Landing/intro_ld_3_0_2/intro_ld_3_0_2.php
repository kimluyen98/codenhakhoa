<?php

	$data = explode("\n",  $field['data_img']);
	if($check == 0){
		$css_inline .= '
		<style>
		.intro_ld_3_0_2.copy {
			text-align: center;
			padding: 20px 0;
		}
		.intro_ld_3_0_2.copy a {
			background: #F36B44;
			color: #fff;
			text-transform: uppercase;
			padding: 10px 30px;
			border-radius: 20px;
			border: 1px solid #fff;
			outline: none;
			cursor: pointer;
		}
			a {
				text-decoration: none;
			}
		
			.intro_ld_3_0_2,
			.intro_ld_3_0_2_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.intro_ld_3_0_2 {
				margin-top: 80px;
				background: url('.$data[0].') center 0 no-repeat;
				background-size: 100%;
				min-height: 695px;
				padding: 20px 0;
				display: flex;
				align-items: center;
			}
		
			.intro_ld_3_0_2 .row {
				margin: 0;
				align-items: center;
			}
		
			.intro_ld_3_0_2_box {
				color: #000;
				padding-left: 10px;
				font-size: 18px;
				line-height: 1.3;
				color: #00EBFF;
			}
		
			.intro_ld_3_0_2_box ul {
				padding-left: 0px;
				margin: 10px 0;
				list-style: none;
			}
		
			.intro_ld_3_0_2_box ul li br {
				display: none;
			}
		
			.intro_ld_3_0_2_box .form {
				width: 80%;
				background: #0055A4;
				text-align: center;
				border-radius: 5px;
			}
		
			.intro_ld_3_0_2_box .form h3 {
				text-transform: uppercase;
				margin: 0;
				padding: 5px;
				background-color: #4AA3D9;
				color: #fff;
				border-radius: 5px 5px 0 0;
			}
		
			.intro_ld_3_0_2_box .form .fct {
				padding: 10px 15px;
			}
		
			.intro_ld_3_0_2_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 8px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
		
			.intro_ld_3_0_2_box .form .dkbt {
				text-align: center;
				margin-bottom: 5px;
				color: #fff;
			}
		
			.intro_ld_3_0_2_box .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1.2;
				display: block;
				padding: 8px 15px;
				border-radius: 40px;
				background: #ff5159;
				border: none;
				margin: 10px auto 5px;
				cursor: pointer;
				transition: 0.4s;
			}
		
			.intro_ld_3_0_2_box .form .dkbt button:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(225, 225, 225, 0.1), 0 0 1px 20px rgba(225, 225, 225, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.intro_ld_3_0_2_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
		
			@media (max-width: 1440px) {
				.intro_ld_3_0_2 {
					min-height: 610px;
					background-size: 1670px;
				}
			}
		
			@media (max-width: 1366px) {
				.intro_ld_3_0_2 {
					min-height: auto;
				}
			}
		
			@media (max-width: 1280px) {
				.intro_ld_3_0_2_title img {
					width: 70%;
				}
		
				.intro_ld_3_0_2_box {
					font-size: 18px;
				}
			}
		
			@media (max-width: 1024px) {
				.intro_ld_3_0_2 {
					background-size: 1400px;
				}
		
				.intro_ld_3_0_2_title img {
					width: 70%;
				}
		
				.intro_ld_3_0_2_box {
					font-size: 16px;
				}
		
				.intro_ld_3_0_2_box ul {
					margin-top: 0;
				}
		
				.intro_ld_3_0_2_box .form .dkbt button {
					font-size: 18px;
				}
		
				.intro_ld_3_0_2_box .form .dkbt i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 812px) {
				.intro_ld_3_0_2 {
					background-size: 1200px;
				}
		
				.intro_ld_3_0_2_box {
					font-size: 14px;
				}
		
				.intro_ld_3_0_2_box .form .fct {
					padding: 5px 10px;
				}
		
				.intro_ld_3_0_2_box .form h3 {
					font-size: 20px;
				}
		
				.intro_ld_3_0_2_box .form input {
					margin: 2px 0;
					padding: 6px 12px;
				}
		
				.intro_ld_3_0_2_box .form .dkbt i {
					font-size: 12px;
				}
			}
		
			@media (max-width: 414px) {
				.intro_ld_3_0_2 {
					background: url('.$data[1].') center 0 no-repeat;
					min-height: 700px;
					align-items: flex-end;
					padding-top: 0;
					background-color: #0052A6;
				}
		
				.intro_ld_3_0_2_box {
					padding-left: 0;
					font-size: 15px;
					text-align: center;
				}
		
				.intro_ld_3_0_2_box ul li br {
					display: block;
				}
		
				.intro_ld_3_0_2_box .form {
					margin: 0 auto;
					background: #0181FF;
				}
		
				.intro_ld_3_0_2_title img {
					width: 85%;
				}
			}
		
			@media (max-width: 375px) {
				.intro_ld_3_0_2 {
					min-height: 690px;
				}
		
				.intro_ld_3_0_2_box {
					font-size: 13px;
				}
		
				.intro_ld_3_0_2_box .form {
					width: 100%;
				}
			}
		
			@media (max-width: 360px) {
				.intro_ld_3_0_2 {
					min-height: 660px;
				}
			}
		
			@media (max-width: 320px) {
				.intro_ld_3_0_2 {
					min-height: 640px;
				}
		
				.intro_ld_3_0_2_box {
					font-size: 12px;
				}
			}
		
			/*# sourceMappingURL=intro_ld_3_0_2.css.map */
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

<div class="intro_ld_3_0_2 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_0_2.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->