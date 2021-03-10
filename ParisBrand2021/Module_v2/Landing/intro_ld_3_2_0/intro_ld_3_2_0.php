<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_3_2_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_2_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_2_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_2_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.intro_ld_3_2_0 {
				margin-top: 80px;
			}
			
			.intro_ld_3_2_0_bg {
				position: relative;
			}
			
			.intro_ld_3_2_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_2_0_title img {
				width: auto;
			}
			
			.intro_ld_3_2_0_box {
				position: absolute;
				bottom: 100px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_3_2_0_box1 {
				display: flex;
				justify-content: space-between;
			}
			
			.intro_ld_3_2_0_box1 ul {
				list-style: none;
			}
			
			.intro_ld_3_2_0_box1 ul li {
				color: #fff;
				font-size: 20px;
			}
			
			.intro_ld_3_2_0_box1 .form {
				text-align: center;
				background: #fff;
				padding: 7px;
				border: 1px solid #ccc;
				margin-top: -80px;
				width: 28%;
			}
			
			.intro_ld_3_2_0_box1 .form p {
				color: #ff5159;
				text-transform: uppercase;
				font-size: 24px;
				margin-bottom: 0;
			}
			
			.intro_ld_3_2_0_box1 .form input {
				width: 100%;
				border: none;
				background-color: #f0f0f0;
				margin: 4px 0;
				padding: 6px 12px;
			}
			
			.intro_ld_3_2_0_box1 .form .dkbt {
				background-color: #ff5159;
				margin-top: 5px;
			}
			.intro_ld_3_2_0_box1 .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_2_0_box1 .form .dkbt button {
				color: #fff;
				text-transform: uppercase;
				font-size: 18px;
				cursor: pointer;
				display: block;
				padding: 12px 0px;
				background: none;
				width: 100%;
				border: none;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_2_0_title {
					width: 35%;
					padding-left: 140px;
				}
				.intro_ld_3_2_0_title img {
					width: 100%;
				}
				.intro_ld_3_2_0_box {
					bottom: 60px;
				}
				.intro_ld_3_2_0_box1 {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_3_2_0_box1 .form {
					width: 30%;
					margin-top: -70px;
				}
				.intro_ld_3_2_0_box1 .form p {
					font-size: 20px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_2_0_box1 .form p {
					font-size: 17px;
					margin-bottom: 5px;
				}
				.intro_ld_3_2_0_box1 .form input {
					margin: 3px 0;
					padding: 5px 12px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt {
					margin-top: 5px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_2_0_title {
					width: 40%;
				}
				.intro_ld_3_2_0_box {
					bottom: 20px;
				}
				.intro_ld_3_2_0_box1 ul {
					margin: 0;
				}
				.intro_ld_3_2_0_box1 ul li {
					font-size: 16px;
				}
				.intro_ld_3_2_0_box1 .form {
					margin-top: -80px;
				}
				.intro_ld_3_2_0_box1 .form p {
					font-size: 15px;
					margin-bottom: 0;
				}
				.intro_ld_3_2_0_box1 .form input {
					margin: 3px 0;
					padding: 6px 12px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt {
					margin-top: 5px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt button {
					font-size: 16px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_2_0_title {
					padding-left: 100px;
				}
				.intro_ld_3_2_0_box {
					bottom: 10px;
				}
				.intro_ld_3_2_0_box1 .form {
					width: 35%;
					padding: 5px;
				}
				.intro_ld_3_2_0_box1 .form input {
					margin: 2px 0;
					padding: 3px 12px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt {
					margin-top: 2px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_2_0_title {
					width: 80%;
					padding-left: 20px;
				}
				.intro_ld_3_2_0_title img {
					width: 100%;
				}
				.intro_ld_3_2_0_box {
					bottom: 30px;
				}
				.intro_ld_3_2_0_box1 {
					display: block;
					width: 90%;
				}
				.intro_ld_3_2_0_box1 ul {
					margin: 5px 0 20px;
					padding-left: 28px;
				}
				.intro_ld_3_2_0_box1 .form {
					width: 100%;
					margin-top: 0;
				}
				.intro_ld_3_2_0_box1 .form p {
					font-size: 20px;
				}
				.intro_ld_3_2_0_box1 .form input {
					margin: 3px 0;
					padding: 6px 12px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt {
					margin-top: 7px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt button {
					font-size: 18px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_2_0_box {
					bottom: 0;
				}
				.intro_ld_3_2_0_box1 ul {
					margin-bottom: 10px;
				}
			}
			
			@media (max-width: 360px) {
				.intro_ld_3_2_0_box1 .form p {
					font-size: 18px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_2_0_box1 ul {
					padding-left: 15px;
				}
				.intro_ld_3_2_0_box1 .form p {
					font-size: 15px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt {
					margin-top: 3px;
				}
				.intro_ld_3_2_0_box1 .form .dkbt button {
					font-size: 16px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_2_0.css.map */
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

<div class="intro_ld_3_2_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_2_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->