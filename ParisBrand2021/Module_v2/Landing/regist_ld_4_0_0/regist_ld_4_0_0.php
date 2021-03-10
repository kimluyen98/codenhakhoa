<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/regist_ld_4_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.regist_ld_4_0_0,
			.regist_ld_4_0_0_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.regist_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.regist_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.regist_ld_4_0_0_bg {
				position: relative;
			}
			
			.regist_ld_4_0_0_bg img {
				width: 100%;
				display: block;
			}
			
			.regist_ld_4_0_0_box {
				position: absolute;
				bottom: 100px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.regist_ld_4_0_0_box .row {
				margin: 0;
			}
			
			.regist_ld_4_0_0_box .row .col-md-6 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.regist_ld_4_0_0_box .form {
				width: 80%;
				background: #fff;
				border: 1px solid #ccc;
				padding: 8px;
				margin-top: 30px;
			}
			
			.regist_ld_4_0_0_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 8px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
			
			.regist_ld_4_0_0_box .form .dkbt {
				text-align: center;
				background: #ff5159;
				margin-bottom: 5px;
			}
			
			.regist_ld_4_0_0_box .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1.7;
				cursor: pointer;
				display: block;
				padding: 8px 0 5px;
				background: none;
				width: 100%;
				border: none;
			}
			
			.regist_ld_4_0_0_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
			
			.regist_ld_4_0_0_box .form h3 {
				font-size: 24px;
				text-align: center;
				margin: 10px;
			}
			
			@media (max-width: 1440px) {
				.regist_ld_4_0_0_title {
					width: 60%;
					margin: 0 auto;
				}
				.regist_ld_4_0_0_title img {
					width: 100%;
				}
				.regist_ld_4_0_0_box {
					bottom: 60px;
				}
				.regist_ld_4_0_0_box .form {
					margin: 20px auto 0;
				}
				.regist_ld_4_0_0_box .form input {
					margin: 4px 0;
					padding: 5px 12px;
				}
				.regist_ld_4_0_0_box .form .dkbt {
					margin-bottom: 3px;
				}
			}
			
			@media (max-width: 1366px) {
				.regist_ld_4_0_0_box {
					bottom: 40px;
				}
			}
			
			@media (max-width: 1280px) {
				.regist_ld_4_0_0_box {
					bottom: 30px;
				}
			}
			
			@media (max-width: 1024px) {
				.regist_ld_4_0_0_box {
					bottom: 20px;
				}
				.regist_ld_4_0_0_box .form {
					padding: 5px;
				}
				.regist_ld_4_0_0_box .form input {
					margin: 2px 0;
				}
				.regist_ld_4_0_0_box .form .dkbt button {
					font-size: 17px;
				}
			}
			
			@media (max-width: 812px) {
				.regist_ld_4_0_0 {
					min-height: 400px;
				}
				.regist_ld_4_0_0_title {
					width: 80%;
				}
				.regist_ld_4_0_0_title img {
					width: 45%;
				}
				.regist_ld_4_0_0_box {
					bottom: -90px;
				}
				.regist_ld_4_0_0_box .col-md-6 {
					flex: 0 0 100%;
					max-width: 100%;
				}
				.regist_ld_4_0_0_box .form {
					width: 50%;
					margin-top: 10px;
				}
				.regist_ld_4_0_0_box .form input {
					padding: 3px 12px;
				}
				.regist_ld_4_0_0_box .form .dkbt {
					margin-bottom: 2px;
				}
				.regist_ld_4_0_0_box .form .dkbt button {
					font-size: 15px;
				}
				.regist_ld_4_0_0_box .form .dkbt i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 414px) {
				.regist_ld_4_0_0 {
					min-height: auto;
				}
				.regist_ld_4_0_0_title {
					width: 90%;
				}
				.regist_ld_4_0_0_title img {
					width: 100%;
				}
				.regist_ld_4_0_0_bg {
					display: none;
				}
				.regist_ld_4_0_0_box {
					position: relative;
					bottom: auto;
					right: auto;
					left: auto;
					border: 1px solid #ccc;
					padding: 20px 0;
				}
				.regist_ld_4_0_0_box .form {
					width: 100%;
					padding: 0 8px;
					border: none;
				}
				.regist_ld_4_0_0_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
				.regist_ld_4_0_0_box .form .dkbt {
					margin-top: 4px;
				}
				.regist_ld_4_0_0_box .form .dkbt button {
					font-size: 20px;
				}
				.regist_ld_4_0_0_box .form .dkbt i {
					font-size: 16px;
				}
				.regist_ld_4_0_0 .container {
					padding-left: 1px;
					padding-right: 1px;
				}
			}
			
			@media (max-width: 360px) {
				.regist_ld_4_0_0 .form h3 {
					font-size: 20px;
				}
			}
			/*# sourceMappingURL=regist_ld_4_0_0.css.map */
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

<div class="regist_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_regist_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->