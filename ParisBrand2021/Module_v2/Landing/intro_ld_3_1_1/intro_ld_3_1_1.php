<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_1_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_1_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_1_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_1_1 {
				margin-top: 80px;
			}
			
			.intro_ld_3_1_1 .mb {
				display: none;
			}
			
			.intro_ld_3_1_1_bg {
				position: relative;
			}
			
			.intro_ld_3_1_1_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_1_1_box {
				position: absolute;
				bottom: 60px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_3_1_1_box .row {
				margin: 0;
				align-items: center;
			}
			
			.intro_ld_3_1_1_box .row .col-md-6 {
				padding-left: 8px;
				padding-right: 8px;
			}
			.intro_ld_3_1_1_mau{
			transition: 1s;
			}
			.intro_ld_3_1_1_mau img:hover {
			transform: scale(1.02);
			transition: 0.6s;
			}
			
			.intro_ld_3_1_1_box ul {
				padding-left: 0px;
				margin: 15px 0;
				list-style: none;
			}
			
			.intro_ld_3_1_1_box ul li {
				font-size: 24px;
			}
			
			.intro_ld_3_1_1_regist a {
				background: #ff5159;
				color: #fff;
				padding: 12px 25px;
				font-size: 24px;
				text-transform: uppercase;
			}
			.intro_ld_3_1_1_regist a:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_1_1_title {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_3_1_1_title img {
					width: 100%;
				}
				.intro_ld_3_1_1_mau {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_3_1_1_mau img {
					width: 100%;
					display: block;
				}
				.intro_ld_3_1_1_box {
					bottom: 40px;
				}
				.intro_ld_3_1_1_box ul {
					width: 80%;
					margin: 15px auto;
				}
				.intro_ld_3_1_1_box ul li {
					font-size: 20px;
				}
				.intro_ld_3_1_1_regist {
					width: 80%;
					margin: 0 auto;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_1_1_box {
					bottom: 20px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_1_1_box {
					bottom: 20px;
				}
				.intro_ld_3_1_1_box ul li {
					font-size: 18px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_1_1_title {
					width: 65%;
				}
				.intro_ld_3_1_1_title img {
					width: 100%;
				}
				.intro_ld_3_1_1_box {
					bottom: 17px;
				}
				.intro_ld_3_1_1_box ul {
					width: 65%;
					margin-top: 10px;
				}
				.intro_ld_3_1_1_box ul li {
					font-size: 16px;
				}
				.intro_ld_3_1_1_regist {
					width: 65%;
				}
				.intro_ld_3_1_1_regist a {
					padding: 10px 20px;
					font-size: 15px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_1_1 .pc {
					display: none;
				}
				.intro_ld_3_1_1 .mb {
					display: block;
				}
				.intro_ld_3_1_1_title {
					width: 90%;
				}
				.intro_ld_3_1_1_title img {
					width: 100%;
				}
				.intro_ld_3_1_1_mau {
					width: 90%;
				}
				.intro_ld_3_1_1_box {
					bottom: 20px;
				}
				.intro_ld_3_1_1_box ul {
					display: flex;
					width: 100%;
					margin: 10px auto;
					flex-wrap: wrap;
					text-align: center;
					justify-content: center;
				}
				.intro_ld_3_1_1_box ul li {
					width: 50%;
				}
				.intro_ld_3_1_1_regist {
					text-align: center;
					width: 100%;
					margin-top: -30px;
				}
				.intro_ld_3_1_1_regist a {
					font-size: 20px;
					padding: 13px 90px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_1_1_box ul li {
					font-size: 15px;
				}
				.intro_ld_3_1_1_regist a {
					padding: 13px 70px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_1_1_box ul li {
					font-size: 13px;
				}
				.intro_ld_3_1_1_regist a {
					padding: 9px 46px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_1_1.css.map */
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

<div class="intro_ld_3_1_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_1_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->