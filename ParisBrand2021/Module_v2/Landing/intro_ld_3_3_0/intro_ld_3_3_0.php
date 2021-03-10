<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_3_3_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_3_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_3_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_3_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_3_0 {
				margin-top: 80px;
			}
			
			.intro_ld_3_3_0_bg {
				position: relative;
			}
			
			.intro_ld_3_3_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_3_0_title {
				text-align: center;
			}
			
			.intro_ld_3_3_0_title img {
				width: auto;
			}
			
			.intro_ld_3_3_0_box {
				position: absolute;
				bottom: 70px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_3_3_0 ul {
				list-style: none;
				display: flex;
				justify-content: space-between;
				width: 60%;
				margin: 10px auto 20px;
			}
			
			.intro_ld_3_3_0 ul li {
				color: #000;
				font-size: 20px;
			}
			
			.intro_ld_3_3_0 .form {
				width: 30%;
				margin: 170px auto 0;
				background: #fff;
				border: 1px solid #ccc;
				padding: 8px;
			}
			
			.intro_ld_3_3_0 .form input {
				width: 100%;
				border: none;
				margin: 4px 0;
				padding: 6px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
			
			.intro_ld_3_3_0 .form .dkbt {
				text-align: center;
				background: #ff5159;
				margin-bottom: 5px;
			}
			.intro_ld_3_3_0 .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_3_0 .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1.2;
				cursor: pointer;
				display: block;
				padding: 8px 0 5px;
				width: 100%;
				border: none;
				background: none;
			}
			
			.intro_ld_3_3_0 .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_3_0_title {
					width: 50%;
					margin: 0 auto;
				}
				.intro_ld_3_3_0_title img {
					width: 100%;
				}
				.intro_ld_3_3_0_box {
					bottom: 20px;
				}
				.intro_ld_3_3_0_box ul {
					width: 50%;
				}
				.intro_ld_3_3_0_box ul li {
					font-size: 16px;
				}
				.intro_ld_3_3_0_box .form {
					width: 25%;
					margin-top: 112px;
				}
			}
			
			@media (max-width: 1366px) {
				.intro_ld_3_3_0_box {
					bottom: 10px;
				}
			}
			@media (max-width: 1280px) {
				.intro_ld_3_3_0_title {
					width: 45%;
				}
				.intro_ld_3_3_0_box {
					bottom: 5px;
				}
				.intro_ld_3_3_0_box .form {
					margin-top: 95px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_3_0_box ul {
					width: 55%;
				}
				.intro_ld_3_3_0_box .form {
					margin-top: 55px;
				}
				.intro_ld_3_3_0_box .form input {
					margin: 3px 0;
					padding: 6px 12px;
				}
				.intro_ld_3_3_0_box .form .dkbt button {
					font-size: 18px;
				}
				.intro_ld_3_3_0_box .form .dkbt i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_3_0 {
					margin-bottom: 100px;
				}
				.intro_ld_3_3_0_box {
					bottom: -90px;
				}
				.intro_ld_3_3_0_box ul {
					width: 60%;
				}
				.intro_ld_3_3_0_box ul li {
					font-size: 13px;
				}
				.intro_ld_3_3_0_box .form {
					width: 33%;
					margin-top: 85px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_3_0 {
					margin-bottom: 0px;
				}
				.intro_ld_3_3_0_title {
					width: 90%;
				}
				.intro_ld_3_3_0_box {
					bottom: 60px;
				}
				.intro_ld_3_3_0_box ul {
					padding-left: 0;
					width: 100%;
					flex-wrap: wrap;
					justify-content: center;
					text-align: center;
					margin: 10px auto;
				}
				.intro_ld_3_3_0_box ul li {
					width: 42%;
					font-size: 15px;
				}
				.intro_ld_3_3_0_box .form {
					width: 80%;
					margin-top: 130px;
				}
				.intro_ld_3_3_0_box .form input {
					padding: 10px 12px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_3_0_box {
					bottom: 25px;
				}
				.intro_ld_3_3_0_box ul li {
					width: 50%;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_3_0_box ul li {
					font-size: 14px;
				}
				.intro_ld_3_3_0_box .form {
					margin-top: 90px;
				}
				.intro_ld_3_3_0_box .form input {
					padding: 6px 12px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_3_0.css.map */
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

<div class="intro_ld_3_3_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_3_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->