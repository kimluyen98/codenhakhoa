<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/regist_ld_4_0_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			.regist_ld_4_0_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.regist_ld_4_0_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.regist_ld_4_0_1,
			.regist_ld_4_0_1_box .form h3 {
				font-family: "Roboto Condensed", sans-serif;
			}
			
			.regist_ld_4_0_1_bg {
				position: relative;
			}
			
			.regist_ld_4_0_1_bg img {
				width: 100%;
				display: block;
			}
			
			.regist_ld_4_0_1_box {
				position: absolute;
				bottom: 50px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.regist_ld_4_0_1_box .row {
				margin: 0;
			}
			
			.regist_ld_4_0_1_box .row .col-md-6 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.regist_ld_4_0_1_box .form {
				width: 80%;
				background: #fff;
				border: 1px solid #ccc;
				padding: 8px;
				margin-top: 30px;
			}
			
			.regist_ld_4_0_1_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 7px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
			
			.regist_ld_4_0_1_box .form .dkbt {
				text-align: center;
				background: #ff5159;
				margin-bottom: 5px;
				margin-top: 10px;
			}
			
			.regist_ld_4_0_1_box .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				cursor: pointer;
				display: block;
				padding: 10px 0 5px;
				background: none;
				border: none;
				width: 100%;
			}
			
			.regist_ld_4_0_1_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
			
			.regist_ld_4_0_1_box .form h3 {
				font-size: 24px;
				text-align: center;
				margin: 10px;
				color: #de5259;
				line-height: 1.2;
			}
			
			@media (max-width: 1440px) {
				.regist_ld_4_0_1_title {
					width: 60%;
					margin: 0 auto;
				}
				.regist_ld_4_0_1_title img {
					width: 100%;
				}
				.regist_ld_4_0_1_box {
					bottom: 20px;
				}
				.regist_ld_4_0_1_box .form {
					margin: 10px auto 0;
				}
				.regist_ld_4_0_1_box .form input {
					margin: 4px 0;
					padding: 5px 12px;
				}
				.regist_ld_4_0_1_box .form .dkbt {
					margin-bottom: 3px;
				}
			}
			
			@media (max-width: 1366px) {
				.regist_ld_4_0_1_box {
					bottom: 10px;
				}
			}
			
			@media (max-width: 1280px) {
				.regist_ld_4_0_1_title {
					width: 50%;
				}
			}
			
			@media (max-width: 1024px) {
				.regist_ld_4_0_1_box {
					bottom: 5px;
				}
				.regist_ld_4_0_1_box .form {
					margin: 0 auto;
					padding: 5px;
				}
				.regist_ld_4_0_1_box .form input {
					margin: 2px 0;
					padding: 4px 12px;
				}
				.regist_ld_4_0_1_box .form h3 {
					font-size: 16px;
				}
				
				.regist_ld_4_0_1_box .form .dkbt button {
					font-size: 15px;
				}
			}
			
			@media (max-width: 812px) {
				.regist_ld_4_0_1 {
					min-height: auto;
					background-color: #0057c2;
				}
				.regist_ld_4_0_1_title {
					display: none;
					width: 80%;
				}
				.regist_ld_4_0_1_title img {
					width: 45%;
				}
				.regist_ld_4_0_1_box {
					bottom: auto;
					padding-bottom: 20px;
				}
				.regist_ld_4_0_1_box .col-md-6 {
					flex: 0 0 100%;
					max-width: 100%;
				}
				.regist_ld_4_0_1_box .form {
					width: 90%;
					margin-top: 10px;
					padding: 20px;
				}
				.regist_ld_4_0_1_box .form input {
					padding: 3px 12px;
				}
				.regist_ld_4_0_1_box .form h3 {
					font-size: 22px;
				}
				.regist_ld_4_0_1_box .form .dkbt {
					margin-bottom: 2px;
				}
				.regist_ld_4_0_1_box .form .dkbt button {
					font-size: 18px;
				}
				.regist_ld_4_0_1_box .form .dkbt i {
					font-size: 13px;
				}
				.regist_ld_4_0_1_box .form input {
					padding: 7px 12px;
					margin: 4px 0px;
				}
				.regist_ld_4_0_1_bg img {
					display: none;
				}
				.regist_ld_4_0_1_box {
					position: relative;
					text-align: center;
					padding-top: 20px;
				}
			}
			
			@media (max-width: 414px) {
				.regist_ld_4_0_1 {
					background-color: #006ddd;
					min-height: auto;
				}
				.regist_ld_4_0_1_title {
					width: 90%;
				}
				.regist_ld_4_0_1_title img {
					width: 100%;
				}
				.regist_ld_4_0_1_bg {
					display: none;
				}
				.regist_ld_4_0_1_box {
					position: relative;
					bottom: auto;
					right: auto;
					left: auto;
					border: 1px solid #ccc;
					padding: 20px 20px;
				}
				.regist_ld_4_0_1_box .form {
					width: 100%;
					padding: 0px;
					border: none;
				}
				.regist_ld_4_0_1_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
				.regist_ld_4_0_1_box .form .dkbt {
					margin-top: 4px;
				}
				.regist_ld_4_0_1_box .form .dkbt button {
					font-size: 20px;
				}
				.regist_ld_4_0_1_box .form .dkbt i {
					font-size: 16px;
				}
				.regist_ld_4_0_1_box .form h3 {
					font-size: 18px;
					line-height: 1.5;
					color: #fff;
					text-transform: uppercase;
				}
				.regist_ld_4_0_1_box .form article {
					background-color: #006ddd;
				}
				.regist_ld_4_0_1 .container {
					padding-left: 1px;
					padding-right: 1px;
				}
			}
			
			@media (max-width: 375px) {
				.regist_ld_4_0_1 .form h3 {
					font-size: 16px;
				}
			}
			
			@media (max-width: 320px) {
				.regist_ld_4_0_1 .form h3 {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=regist_ld_4_0_1.css.map */
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

<div class="regist_ld_4_0_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_regist_ld_4_0_1.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->