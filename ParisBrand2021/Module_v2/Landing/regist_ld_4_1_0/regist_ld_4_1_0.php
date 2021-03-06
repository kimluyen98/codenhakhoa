<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/regist_ld_4_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.regist_ld_4_1_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.regist_ld_4_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.regist_ld_4_1_0,
			.regist_ld_4_1_0_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.regist_ld_4_1_0 {
				margin-top: 80px;
			}
		
			.regist_ld_4_1_0_bg {
				position: relative;
			}
		
			.regist_ld_4_1_0_bg img {
				width: 100%;
				display: block;
			}
		
			.regist_ld_4_1_0_title {
				width: 80%;
			}
		
			.regist_ld_4_1_0_title img {
				max-width: 100%;
			}
		
			.regist_ld_4_1_0_box {
				position: absolute;
				bottom: 100px;
				right: 0;
				left: 0;
				color: #000;
			}
		
			.regist_ld_4_1_0_box .row {
				margin: 0;
			}
		
			.regist_ld_4_1_0_box .row .col-md-7,
			.regist_ld_4_1_0_box .row .col-md-5 {
				padding-left: 8px;
				padding-right: 8px;
			}
		
			.regist_ld_4_1_0_box .form {
				width: 80%;
				background: #0055A4;
				text-align: center;
				border-radius: 5px;
				margin-top: 30px;
			}
		
			.regist_ld_4_1_0_box .form h3 {
				text-transform: uppercase;
				margin: 0;
				padding: 5px;
				background-color: #4AA3D9;
				color: #fff;
				border-radius: 5px 5px 0 0;
			}
		
			.regist_ld_4_1_0_box .form .fct {
				padding: 10px 15px;
			}
		
			.regist_ld_4_1_0_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 8px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
		
			.regist_ld_4_1_0_box .form .dkbt {
				text-align: center;
				margin-bottom: 5px;
				color: #fff;
			}
		
			.regist_ld_4_1_0_box .form .dkbt button {
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
		
			.regist_ld_4_1_0_box .form .dkbt button:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(225, 225, 225, 0.1), 0 0 1px 20px rgba(225, 225, 225, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.regist_ld_4_1_0_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
		
			@media (max-width: 1440px) {
				.regist_ld_4_1_0_title {
					width: 75%;
				}
		
				.regist_ld_4_1_0_box {
					bottom: 50px;
				}
		
				.regist_ld_4_1_0_box .form {
					width: 70%;
				}
		
				.regist_ld_4_1_0_box .form .fct {
					padding: 5px 15px 2px;
				}
		
				.regist_ld_4_1_0_box .form h3 {
					font-size: 22px;
				}
		
				.regist_ld_4_1_0_box .form input {
					margin: 3px 0;
					padding: 5px 12px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt {
					margin-bottom: 3px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt i {
					font-size: 14px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					font-size: 20px;
					padding: 6px 20px;
				}
			}
		
			@media (max-width: 1280px) {
				.regist_ld_4_1_0_box {
					bottom: 40px;
				}
		
				.regist_ld_4_1_0_box .form input {
					padding: 3px 12px;
				}
		
				.regist_ld_4_1_0_box .form h3 {
					font-size: 20px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					margin-top: 5px;
					font-size: 18px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 1024px) {
				.regist_ld_4_1_0_title {
					width: 70%;
				}
		
				.regist_ld_4_1_0_box {
					bottom: 20px;
				}
		
				.regist_ld_4_1_0_box .form {
					margin-top: 15px;
				}
		
				.regist_ld_4_1_0_box .form h3 {
					font-size: 16px;
				}
		
				.regist_ld_4_1_0_box .form input {
					margin: 2px 0;
					padding: 2px 12px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					font-size: 15px;
				}
			}
		
			@media (max-width: 812px) {
				.regist_ld_4_1_0 {
					background-color: #E7F8F9;
				}
		
				.regist_ld_4_1_0_bg img {
					display: none;
				}
		
				.regist_ld_4_1_0_title {
					width: 50%;
					margin: 0 auto;
				}
		
				.regist_ld_4_1_0_box {
					bottom: 0px;
					position: relative;
					padding: 20px 0;
				}
		
				.regist_ld_4_1_0_box .col-md-7,
				.regist_ld_4_1_0_box .col-md-5 {
					flex: 0 0 100%;
					max-width: 100%;
				}
		
				.regist_ld_4_1_0_box .form {
					width: 70%;
					margin: 10px auto 0;
				}
		
				.regist_ld_4_1_0_box .form h3 {
					font-size: 24px;
				}
		
				.regist_ld_4_1_0_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
		
				.regist_ld_4_1_0_box .form .dkbt {
					padding: 3px 0 0px;
					margin-bottom: 2px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					font-size: 18px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt i {
					font-size: 13px;
				}
			}
		
			@media (max-width: 414px) {
				.regist_ld_4_1_0_title {
					width: 90%;
					padding-left: 0;
				}
		
				.regist_ld_4_1_0_title img {
					width: 100%;
				}
		
				.regist_ld_4_1_0_box .form {
					width: 100%;
					margin-top: 20px;
				}
		
				.regist_ld_4_1_0_box .form h3 {
					font-size: 20px;
				}
		
				.regist_ld_4_1_0_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					font-size: 20px;
					padding: 7px 20px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt i {
					font-size: 16px;
				}
			}
		
			@media (max-width: 375px) {
				.regist_ld_4_1_0_box .form .fct {
					padding: 5px 7px 2px;
				}
		
				.regist_ld_4_1_0_box .form input {
					padding: 5px 12px;
					margin: 3px 0;
				}
		
				.regist_ld_4_1_0_box .form .dkbt button {
					font-size: 18px;
				}
		
				.regist_ld_4_1_0_box .form .dkbt i {
					font-size: 13px;
				}
			}
		
			/*# sourceMappingURL=regist_ld_4_1_0.css.map */
		</style>
		';	
		add_action('wp_footer', 'regist_ld_4_1_0');
		function regist_ld_4_1_0(){ 
			echo '
			';           

		};
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

<div class="regist_ld_4_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_regist_ld_4_1_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->