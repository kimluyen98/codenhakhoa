<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_3_1_2';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_1_2 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_1_2.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_1_2.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_1_2 {
				margin-top: 80px;
			}
			
			.intro_ld_3_1_2_bg {
				position: relative;
			}
			
			.intro_ld_3_1_2_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_1_2_box {
				position: absolute;
				bottom: 30px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_3_1_2_box .row {
				margin: 0;
			}
			
			.intro_ld_3_1_2_box .row .col-md-6 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.intro_ld_3_1_2_box ul {
				list-style: none;
				padding-left: 0;
			}
			
			.intro_ld_3_1_2_box ul li {
				font-size: 24px;
			}
			
			.intro_ld_3_1_2_box .form {
				width: 60%;
				background: #fff;
				border: 1px solid #ccc;
				padding: 8px;
			}
			
			.intro_ld_3_1_2_box .form input {
				width: 100%;
				border: none;
				margin: 5px 0;
				padding: 8px 12px;
				border-radius: 8px;
				background-color: #f0f0f0;
			}
			
			.intro_ld_3_1_2_box .form .dkbt {
				text-align: center;
				background: #ff5159;
				
				margin-bottom: 5px;
			}
			.intro_ld_3_1_2_box .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_1_2_box .form .dkbt button {
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				padding: 8px 0 5px;
				line-height: 1.2;
				cursor: pointer;
				display: block;
				width: 100%;
				background: none;
				border: none;
			}
			
			.intro_ld_3_1_2_box .form .dkbt i {
				font-style: normal;
				text-transform: none;
				font-size: 16px;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_1_2_title {
					width: 60%;
					margin: 0 auto;
				}
				.intro_ld_3_1_2_title img {
					width: 100%;
				}
				.intro_ld_3_1_2_box {
					bottom: 20px;
				}
				.intro_ld_3_1_2_box ul {
					width: 60%;
					margin: 6px auto;
				}
				.intro_ld_3_1_2_box ul li {
					font-size: 18px;
					line-height: 1.3;
				}
				.intro_ld_3_1_2_box .form {
					width: 50%;
					margin-left: 120px;
				}
				.intro_ld_3_1_2_box .form input {
					margin: 4px 0;
					padding: 5px 12px;
				}
				.intro_ld_3_1_2_box .form .dkbt {
					
					margin-bottom: 3px;
				}
				.intro_ld_3_1_2_box .form .dkbt button {
					font-size: 20px;
					line-height: 1;
					padding: 6px 0 3px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_1_2_box {
					bottom: 10px;
				}
				.intro_ld_3_1_2_box ul {
					margin: 3px auto;
				}
				.intro_ld_3_1_2_box ul li {
					font-size: 18px;
				}
				.intro_ld_3_1_2_box .form .dkbt i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_1_2_title {
					width: 50%;
				}
				.intro_ld_3_1_2_box ul {
					width: 50%;
					margin: 2px auto;
				}
				.intro_ld_3_1_2_box ul li {
					font-size: 16px;
				}
				.intro_ld_3_1_2_box .form {
					padding: 5px;
					width: 55%;
				}
				.intro_ld_3_1_2_box .form input {
					margin: 2px 0;
					padding: 4px 12px;
				}
				.intro_ld_3_1_2_box .form .dkbt button {
					font-size: 17px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_1_2 {
					margin-bottom: 100px;
				}
				.intro_ld_3_1_2_title {
					width: 80%;
				}
				.intro_ld_3_1_2_title img {
					width: 45%;
				}
				.intro_ld_3_1_2_box {
					bottom: -90px;
				}
				.intro_ld_3_1_2_box ul {
					width: 80%;
					margin-top: 10px;
				}
				.intro_ld_3_1_2_box .col-md-6 {
					flex: 0 0 100%;
					max-width: 100%;
				}
				.intro_ld_3_1_2_box .form {
					width: 40%;
					margin: 0 auto;
				}
				.intro_ld_3_1_2_box .form input {
					padding: 3px 12px;
				}
				.intro_ld_3_1_2_box .form .dkbt {
					
					margin-bottom: 2px;
				}
				.intro_ld_3_1_2_box .form .dkbt button {
					font-size: 15px;
					padding: 6px 0 5px;
				}
				.intro_ld_3_1_2_box .form .dkbt i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_1_2 {
					margin-bottom: 0px;
				}
				.intro_ld_3_1_2_title {
					width: 70%;
					margin: 0 auto;
				}
				.intro_ld_3_1_2_title img {
					width: 100%;
				}
				.intro_ld_3_1_2_box {
					bottom: 10px;
				}
				.intro_ld_3_1_2_box ul {
					display: flex;
					width: 90%;
					margin: 5px auto;
					justify-content: center;
					flex-wrap: wrap;
				}
				.intro_ld_3_1_2_box ul li {
					width: 50%;
				}
				.intro_ld_3_1_2_box .form {
					width: 80%;
					padding: 8px;
					margin-top: 160px;
				}
				.intro_ld_3_1_2_box .form input {
					padding: 8px 12px;
					margin: 4px 0;
				}
				
				.intro_ld_3_1_2_box .form .dkbt button {
					font-size: 20px;
					padding: 10px 0 8px;
				}
				.intro_ld_3_1_2_box .form .dkbt i {
					font-size: 16px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_1_2_box ul li {
					font-size: 14px;
				}
				.intro_ld_3_1_2_box .form input {
					padding: 4px 12px;
					margin: 2px 0;
				}
				
				.intro_ld_3_1_2_box .form .dkbt button {
					font-size: 18px;
					padding: 5px 0 3px;
				}
				.intro_ld_3_1_2_box .form .dkbt i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_1_2_box ul li {
					font-size: 12px;
				}
				.intro_ld_3_1_2_box .form {
					margin-top: 115px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_1_2.css.map */
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

<div class="intro_ld_3_1_2 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_1_2.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->