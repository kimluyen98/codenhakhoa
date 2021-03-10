<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_4_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_4_0 {
				margin-top: 80px;
			}
			
			.intro_ld_3_4_0_bg {
				position: relative;
			}
			
			.intro_ld_3_4_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_0_title img {
				width: auto;
			}
			
			.intro_ld_3_4_0_box {
				position: absolute;
				bottom: 120px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_3_4_0_box .row {
				margin: 0;
			}
			
			.intro_ld_3_4_0_box .row .col-md-6 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.intro_ld_3_4_0_box ul {
				padding-left: 0px;
				margin: 15px 0;
				list-style: none;
			}
			
			.intro_ld_3_4_0_box ul li {
				font-size: 24px;
			}
			
			.intro_ld_3_4_0_regist {
				background: #ff5159;
				color: #fff;
				width: 50%;
				text-align: center;
				padding: 7px 5px;
				line-height: 1.2;
			}
			.intro_ld_3_4_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_0_regist a {
				color: #fff;
				font-size: 24px;
				text-transform: uppercase;
				display: block;
				cursor: pointer;
			}
			
			.intro_ld_3_4_0_regist i {
				font-size: 16px;
				font-style: normal;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_0_title {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_3_4_0_title img {
					width: 100%;
				}
				.intro_ld_3_4_0_box {
					bottom: 40px;
				}
				.intro_ld_3_4_0_box ul {
					width: 80%;
					margin: 15px auto;
				}
				.intro_ld_3_4_0_box ul li {
					font-size: 20px;
				}
				.intro_ld_3_4_0_regist {
					margin-left: 60px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_4_0_title {
					width: 65%;
				}
				.intro_ld_3_4_0_box {
					bottom: 20px;
				}
				.intro_ld_3_4_0_box ul {
					width: 65%;
				}
				.intro_ld_3_4_0_regist {
					margin-left: 100px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_0_box {
					bottom: 10px;
				}
				.intro_ld_3_4_0_box ul li {
					font-size: 18px;
				}
				.intro_ld_3_4_0_regist {
					margin-left: 90px;
				}
				.intro_ld_3_4_0_regist a {
					font-size: 20px;
				}
				.intro_ld_3_4_0_regist i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_0_title {
					width: 80%;
				}
				.intro_ld_3_4_0_title img {
					width: 85%;
				}
				.intro_ld_3_4_0_box ul {
					width: 80%;
					margin: 4px auto;
				}
				.intro_ld_3_4_0_box ul li {
					font-size: 15px;
				}
				.intro_ld_3_4_0_regist {
					margin-left: 40px;
					width: 60%;
					padding: 3px 5px;
				}
				.intro_ld_3_4_0_regist a {
					font-size: 15px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_0_title {
					width: 90%;
				}
				.intro_ld_3_4_0_title img {
					width: 100%;
				}
				.intro_ld_3_4_0_box {
					bottom: 8px;
				}
				.intro_ld_3_4_0_box ul {
					display: block;
					width: 90%;
					margin: 10px auto 0;
				}
				.intro_ld_3_4_0_box ul li {
					font-size: 20px;
					line-height: 1.2;
				}
				.intro_ld_3_4_0_regist {
					text-align: center;
					width: 80%;
					margin: 175px auto 0;
					padding: 10px 5px;
				}
				.intro_ld_3_4_0_regist a {
					font-size: 20px;
				}
				.intro_ld_3_4_0_regist i {
					font-size: 16px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_4_0_regist {
					margin: 140px auto 0;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_0_box ul li {
					font-size: 18px;
				}
				.intro_ld_3_4_0_regist {
					margin-top: 115px;
				}
				.intro_ld_3_4_0_regist a {
					font-size: 18px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_0.css.map */
		</style>		
		';	
	}	
	
?>
<!-- Demo HTML -->
<?php 
	$info = $field['info'];
	if(empty($info)):
		echo $css_inline;
		get_template_part("Module/Landing/".$name."/html_id_".$name."");
	else:
		echo $info;
	endif;
?>
<!-- Copy -->

<?php if(isset($_GET['load'])): ?>

<div class="intro_ld_3_4_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->