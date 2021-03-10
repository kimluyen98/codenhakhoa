<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_3_0_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.intro_ld_3_0_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_0_1,
			.intro_ld_3_0_1_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
		
			.intro_ld_3_0_1 {
				margin-top: 80px;
			}
		
			.intro_ld_3_0_1_bg {
				position: relative;
			}
		
			.intro_ld_3_0_1_bg img {
				width: 100%;
				display: block;
			}
		
			.intro_ld_3_0_1_title {
				width: 80%;
			}
		
			.intro_ld_3_0_1_title img {
				max-width: 100%;
			}
		
			.intro_ld_3_0_1_box {
				position: absolute;
				bottom: 50px;
				right: 0;
				left: 0;
				color: #000;
			}
		
			.intro_ld_3_0_1_box .row {
				margin: 0;
			}
		
			.intro_ld_3_0_1_box .row .col-md-7,
			.intro_ld_3_0_1_box .row .col-md-5 {
				padding-left: 8px;
				padding-right: 8px;
			}
		
			.intro_ld_3_0_1_box ul {
				list-style: none;
				padding-left: 0;
			}
		
			.intro_ld_3_0_1_box ul li {
				font-size: 22px;
			}
		
			.intro_ld_3_0_1_box .form {
				width: 80%;
				background: #0055A4;
				text-align: center;
				border-radius: 5px;
			}
		
			.intro_ld_3_0_1_box .form h3 {
				text-transform: uppercase;
				margin: 0;
				padding: 5px;
				background-color: #4AA3D9;
				color: #fff;
				border-radius: 5px 5px 0 0;
			}
		
			.intro_ld_3_0_1_box .form .fct {
				padding: 10px 15px;
			}
		
			.intro_ld_3_0_1_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 8px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
		
			.intro_ld_3_0_1_box .form .dkbt {
				text-align: center;
				margin-bottom: 5px;
				color: #fff;
			}
		
			.intro_ld_3_0_1_box .form .dkbt button {
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
		
			.intro_ld_3_0_1_box .form .dkbt button:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(225, 225, 225, 0.1), 0 0 1px 20px rgba(225, 225, 225, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
		
			.intro_ld_3_0_1_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
		
			@media (max-width: 1440px) {
				.intro_ld_3_0_1_title {
					width: 60%;
				}
		
				.intro_ld_3_0_1_box {
					bottom: 20px;
				}
		
				.intro_ld_3_0_1_box ul {
					width: 60%;
					margin: 10px 0;
				}
		
				.intro_ld_3_0_1_box ul li {
					font-size: 18px;
				}
		
				.intro_ld_3_0_1_box .form {
					width: 70%;
				}
		
				.intro_ld_3_0_1_box .form .fct {
					padding: 5px 15px 2px;
				}
		
				.intro_ld_3_0_1_box .form h3 {
					font-size: 22px;
				}
		
				.intro_ld_3_0_1_box .form input {
					margin: 3px 0;
					padding: 5px 12px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt {
					margin-bottom: 3px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt i {
					font-size: 14px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt button {
					font-size: 20px;
					padding: 6px 20px;
				}
			}
		
			@media (max-width: 1280px) {
				.intro_ld_3_0_1_box {
					bottom: 10px;
				}
				.intro_ld_3_0_1_box ul {
					margin: 5px 0;
				}
				.intro_ld_3_0_1_box .form input {
					padding: 3px 12px;
				}
		
				.intro_ld_3_0_1_box .form h3 {
					font-size: 20px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt button {
					margin-top: 5px;
					font-size: 18px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt i {
					font-size: 14px;
				}
			}
		
			@media (max-width: 1024px) {
				.intro_ld_3_0_1_title {
					width: 60%;
				}
		
				.intro_ld_3_0_1_box ul {
					margin: 2px 0;
				}
		
				.intro_ld_3_0_1_box ul li {
					font-size: 15px;
				}
		
				.intro_ld_3_0_1_box .form h3 {
					font-size: 16px;
				}
		
				.intro_ld_3_0_1_box .form input {
					margin: 2px 0;
					padding: 2px 12px;
				}
				.intro_ld_3_0_1_box .form .dkbt {
					margin-bottom: 0px;
				}
				.intro_ld_3_0_1_box .form .dkbt button {
					font-size: 15px;
				}
			}
		
			@media (max-width: 812px) {
				.intro_ld_3_0_1 {
					margin-bottom: 110px;
				}
				.intro_ld_3_0_1_title {
					width: 100%;
					padding-left: 400px;
				}
		
				.intro_ld_3_0_1_title img {
					max-width: 70%;
				}  
		
				.intro_ld_3_0_1_box {
					bottom: -120px;
				}
		
				.intro_ld_3_0_1_box ul {
					width: 100%;
					margin-top: 10px;
					padding-left: 400px;
				}
		
				.intro_ld_3_0_1_box .col-md-7,
				.intro_ld_3_0_1_box .col-md-5 {
					flex: 0 0 100%;
					max-width: 100%;
				}
		
				.intro_ld_3_0_1_box .form {
					width: 50%;
					margin: 10px auto 0;
				}
		
				.intro_ld_3_0_1_box .form input {
					padding: 3px 12px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt {
					padding: 3px 0 0px;
					margin-bottom: 2px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt button {
					font-size: 15px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt i {
					font-size: 13px;
				}
			}
		
			@media (max-width: 414px) {
				.intro_ld_3_0_1 {
					margin-bottom: 90px;
				}
				.intro_ld_3_0_1_title {
					width: 90%;
					padding-left: 0;
				}
		
				.intro_ld_3_0_1_title img {
					width: 100%;
				}
		
				.intro_ld_3_0_1_box {
					bottom: -100px;
				}
		
				.intro_ld_3_0_1_box ul {
					display: block;
					width: 90%;
					margin: 10px auto;
					padding-left: 0;
				}
		
				.intro_ld_3_0_1_box .form {
					width: 80%;
					margin-top: 60px;
				}
		
				.intro_ld_3_0_1_box .form h3 {
					font-size: 18px;
				}
		
				.intro_ld_3_0_1_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
		
				.intro_ld_3_0_1_box .form .dkbt button {
					font-size: 20px;
					padding: 7px 20px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt i {
					font-size: 16px;
				}
			}
		
			@media (max-width: 375px) {
				.intro_ld_3_0_1_title img {
					width: 70%;
				}
		
				.intro_ld_3_0_1_box {
					bottom: -80px;
				}
		
				.intro_ld_3_0_1_box ul li {
					font-size: 13px;
				}
		
				.intro_ld_3_0_1_box .form .fct {
					padding: 5px 7px 2px;
				}
		
				.intro_ld_3_0_1_box .form input {
					padding: 5px 12px;
					margin: 3px 0;
				}
		
				.intro_ld_3_0_1_box .form .dkbt button {
					font-size: 16px;
				}
		
				.intro_ld_3_0_1_box .form .dkbt i {
					font-size: 12px;
				}
			}
		
			@media (max-width: 320px) {
				.intro_ld_3_0_1_box {
					bottom: -110px;
				}
			}
		
			/*# sourceMappingURL=intro_ld_3_0_1.css.map */
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

<div class="intro_ld_3_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_0_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->