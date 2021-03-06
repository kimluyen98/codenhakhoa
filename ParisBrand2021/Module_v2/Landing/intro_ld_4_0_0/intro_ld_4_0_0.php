<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/intro_ld_4_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_4_0_0 {
				margin-top: 80px;
			}
			
			.intro_ld_4_0_0 .mb {
				display: none;
			}
			
			.intro_ld_4_0_0_bg {
				position: relative;
			}
			
			.intro_ld_4_0_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_0_0_box {
				position: absolute;
				bottom: -20px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_4_0_0_box1 {
				display: flex;
				justify-content: space-between;
				align-items: center;
			}
			
			.intro_ld_4_0_0_box1 .form {
				text-align: center;
				width: 28%;
				background: #fff;
				padding: 7px;
				border: 1px solid #ccc;
			}
			
			.intro_ld_4_0_0_box1 .form p {
				color: #ff5159;
				text-transform: uppercase;
				font-size: 24px;
				margin-bottom: 0;
			}
			
			.intro_ld_4_0_0_box1 .form input {
				width: 100%;
				border: none;
				background-color: #f0f0f0;
				margin: 4px 0;
				padding: 6px 12px;
			}
			
			.intro_ld_4_0_0_box1 .form .dkbt {
				background-color: #ff5159;
				margin-top: 5px;
				transition: 0.4s;
			}
			.intro_ld_4_0_0_box1 .form .dkbt:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_4_0_0_box1 .form .dkbt button {
				color: #fff;
				text-transform: uppercase;
				font-size: 18px;
				padding: 12px 0px;
				cursor: pointer;
				display: block;
				background: none;
				width: 100%;
				border: none;
			}
			
			.intro_ld_4_0_0_box2 {
				display: flex;
				justify-content: space-between;
				text-align: center;
				flex-wrap: wrap;
				margin-top: 80px;
			}
			
			.intro_ld_4_0_0_box2__item {
				background-color: #fff;
				color: #000;
				width: 23%;
				padding: 30px 10px;
				font-size: 20px;
				font-weight: 500;
				transition: 0.3s;
				box-shadow: 0 8px 6px -6px #eee;
			}
			
			.intro_ld_4_0_0_box2__item:hover {
				background-color: #c8f4ff;
				transition: 0.3s;
			}
			
			.intro_ld_4_0_0_box2__item .pic {
				position: relative;
			}
			
			.intro_ld_4_0_0_box2__item .pic::after {
				content: "";
				display: block;
				position: absolute;
				border-bottom: 5px solid #0055a4;
				bottom: -10px;
				left: 40%;
				width: 50px;
			}
			
			.intro_ld_4_0_0_box2__item .text {
				padding-top: 20px;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_4_0_0_title img {
					width: 80%;
				}
				.intro_ld_4_0_0_box1 {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_4_0_0_box1 .form {
					width: 30%;
				}
				.intro_ld_4_0_0_box1 .form p {
					font-size: 20px;
				}
				.intro_ld_4_0_0_box2 {
					width: 80%;
					margin: 30px auto 0;
				}
				.intro_ld_4_0_0_box2__item {
					padding: 20px 10px;
					font-size: 18px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_4_0_0_title img {
					width: 60%;
				}
				.intro_ld_4_0_0_box1 .form p {
					font-size: 15px;
					margin-bottom: 0;
				}
				.intro_ld_4_0_0_box1 .form input {
					margin: 3px 0;
					padding: 6px 12px;
				}
				.intro_ld_4_0_0_box1 .form .dkbt {
					margin-top: 5px;
				}
				.intro_ld_4_0_0_box1 .form .dkbt button {
					font-size: 16px;
				}
				.intro_ld_4_0_0_box2 {
					margin-top: 20px;
				}
				.intro_ld_4_0_0_box2__item {
					font-size: 16px;
					padding: 20px 10px 10px;
				}
				.intro_ld_4_0_0_box2__item .pic {
					width: 30%;
					margin: 0 auto;
				}
				.intro_ld_4_0_0_box2__item .pic img {
					width: 100%;
				}
				.intro_ld_4_0_0_box2__item .pic::after {
					left: 0;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_4_0_0_box {
					bottom: -70px;
				}
				.intro_ld_4_0_0_box1 .form {
					width: 35%;
				}
				.intro_ld_4_0_0_box2__item {
					font-size: 14px;
					padding: 15px 10px 10px;
				}
				.intro_ld_4_0_0_box2__item .pic::after {
					border-bottom: 3px solid #0055a4;
					bottom: -5px;
					width: 35px;
				}
				.intro_ld_4_0_0_box2__item .text {
					padding-top: 10px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_4_0_0 {
					margin-bottom: 100px;
				}
				.intro_ld_4_0_0 .mb {
					display: block;
				}
				.intro_ld_4_0_0 .pc {
					display: none;
				}
				.intro_ld_4_0_0_title {
					width: 60%;
				}
				.intro_ld_4_0_0_title img {
					width: 100%;
				}
				.intro_ld_4_0_0_box {
					bottom: -100px;
				}
				.intro_ld_4_0_0_box1 {
					display: block;
					width: 90%;
				}
				.intro_ld_4_0_0_box1 .form {
					width: 100%;
				}
				.intro_ld_4_0_0_box1 .form p {
					font-size: 20px;
				}
				.intro_ld_4_0_0_box1 .form .dkbt {
					margin-top: 7px;
				}
				.intro_ld_4_0_0_box1 .form .dkbt button{
					font-size: 18px;
				}
				.intro_ld_4_0_0_box2 {
					width: 100%;
				}
				.intro_ld_4_0_0_box2__item {
					width: 48%;
					display: flex;
					justify-content: space-between;
					align-items: center;
					text-align: left;
					margin-bottom: 13px;
					padding: 10px 5px;
				}
				.intro_ld_4_0_0_box2__item .pic::after {
					display: none;
				}
				.intro_ld_4_0_0_box2__item .text {
					flex: 1;
					padding-left: 10px;
					padding-top: 0;
				}
				.intro_ld_4_0_0_box2__item .text br {
					display: none;
				}
			}
			
			@media (max-width: 360px) {
				.intro_ld_4_0_0_box1 .form p {
					font-size: 18px;
				}
			
				.intro_ld_4_0_0_box2 {
					margin-top: 10px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_4_0_0_box2__item {
					font-size: 13px;
					margin-bottom: 10px;
				}
				.intro_ld_4_0_0_box2__item .text {
					padding-left: 3px;
				}
				.intro_ld_4_0_0_box1 .form p {
					font-size: 16px;
				}
			}
			/*# sourceMappingURL=intro_ld_4_0_0.css.map */
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

<div class="intro_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_4_0_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->