<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_3_5_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_5_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_5_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_5_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_5_0 {
				margin-top: 80px;
			}
			
			.intro_ld_3_5_0_bg {
				position: relative;
			}
			
			.intro_ld_3_5_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_5_0_title img {
				width: auto;
			}
			
			.intro_ld_3_5_0_box {
				position: absolute;
				bottom: 50px;
				right: 0;
				left: 0;
			}
			
			.intro_ld_3_5_0_box .row {
				margin: 0;
			}
			
			.intro_ld_3_5_0_box .row .col-md-6 {
				padding-left: 0;
				padding-right: 0;
			}
			
			.intro_ld_3_5_0_box ul {
				padding-left: 0;
				list-style: none;
			}
			
			.intro_ld_3_5_0_box ul li {
				color: #000;
				font-size: 24px;
			}
			
			.intro_ld_3_5_0_box .form {
				text-align: center;
				background: #fff;
				padding: 5px;
				border: 1px solid #ccc;
				width: 50%;
			}
			
			.intro_ld_3_5_0_box .form p {
				color: #ff5159;
				text-transform: uppercase;
				font-size: 22px;
				margin-bottom: 0;
			}
			
			.intro_ld_3_5_0_box .form input {
				width: 100%;
				border: none;
				background-color: #f0f0f0;
				margin: 2px 0;
				padding: 4px 12px;
			}
			
			.intro_ld_3_5_0_box .form .dkbt {
				background-color: #ff5159;
				margin-top: 3px;
			}
			.intro_ld_3_5_0_box .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_5_0_box .form .dkbt button {
				color: #fff;
				text-transform: uppercase;
				font-size: 18px;
				cursor: pointer;
				display: block;
				padding: 12px 0px;
				width: 100%;
				background: none;
				border: none;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_5_0_title {
					width: 65%;
				}
				.intro_ld_3_5_0_title img {
					width: 100%;
				}
				.intro_ld_3_5_0_box {
					bottom: 10px;
				}
				.intro_ld_3_5_0_box .col-md-6:nth-child(2) {
					margin-left: -30px;
				}
				.intro_ld_3_5_0_box ul {
					margin: 5px 0;
				}
				.intro_ld_3_5_0_box ul li {
					font-size: 18px;
				}
				.intro_ld_3_5_0_box .form {
					width: 40%;
				}
				.intro_ld_3_5_0_box .form p {
					font-size: 18px;
				}
			}
			
			@media (max-width: 1280px) {
			
				.intro_ld_3_5_0_box .form .dkbt button {
					padding: 5px 0px;
				}
				
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_5_0_title {
					width: 55%;
				}
				.intro_ld_3_5_0_box ul li {
					font-size: 15px;
					line-height: 1.2;
				}
				.intro_ld_3_5_0_box .form p {
					font-size: 14px;
				}
				.intro_ld_3_5_0_box .form .dkbt button {
					font-size: 15px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_5_0 {
					margin-bottom: 100px;
				}
				.intro_ld_3_5_0_title {
					width: 85%;
					padding-left: 45%;
				}
				.intro_ld_3_5_0_box {
					bottom: -100px;
				}
				.intro_ld_3_5_0_box .row .col-md-6 {
					flex: 0 0 100%;
					max-width: 100%;
				}
				.intro_ld_3_5_0_box .row .col-md-6:nth-child(2) {
					margin-left: 0;
				}
				.intro_ld_3_5_0_box ul {
					padding-left: 340px;
				}
				.intro_ld_3_5_0_box .form {
					margin: 20px auto 0;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_5_0 {
					margin-bottom: 0px;
				}
				.intro_ld_3_5_0_title {
					width: 90%;
					padding-left: 0;
					margin: 0 auto;
				}
				.intro_ld_3_5_0_title img {
					width: 100%;
				}
				.intro_ld_3_5_0_box {
					bottom: 30px;
				}
				.intro_ld_3_5_0_box ul {
					padding-left: 20px;
				}
				.intro_ld_3_5_0_box ul li {
					font-size: 16px;
				}
				.intro_ld_3_5_0_box .form {
					width: 70%;
					margin: 70px auto 0;
				}
				.intro_ld_3_5_0_box .form p {
					font-size: 18px;
					margin: 0 auto 0;
				}
				
				.intro_ld_3_5_0_box .form .dkbt button {
					font-size: 20px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_5_0_box .form {
					margin: 30px auto 0;
				}
			
			}
			@media (max-width: 320px) {
				.intro_ld_3_5_0_box {
					bottom: 10px;
				}
				.intro_ld_3_5_0_box .form {
					margin: 10px auto;
				}
				.intro_ld_3_5_0_box .form p {
					font-size: 15px;
				}
				.intro_ld_3_5_0_box .form .dkbt button {
					padding: 5px 15px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_5_0.css.map */
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

<div class="intro_ld_3_5_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_5_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->