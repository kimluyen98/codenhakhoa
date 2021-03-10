<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_4_1.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			
			.intro_ld_3_4_1 {
				margin-top: 80px;
			}
			
			.intro_ld_3_4_1_bg {
				position: relative;
			}
			
			.intro_ld_3_4_1_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_1_box {
				position: absolute;
				bottom: 30px;
				right: 0;
				left: 0;
			}
			
			.intro_ld_3_4_1_box ul {
				list-style: none;
				padding-left: 0;
			}
			
			.intro_ld_3_4_1_box ul li {
				color: #fff;
				font-size: 24px;
			}
			
			.intro_ld_3_4_1_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.intro_ld_3_4_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_1_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_3_4_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_1_title img {
					width: 50%;
					display: block;
				}
				.intro_ld_3_4_1_box {
					width: 50%;
					left: 120px;
					bottom: 20px;
				}
				.intro_ld_3_4_1_box ul {
					margin: 5px 0;
				}
				.intro_ld_3_4_1_box ul li {
					font-size: 18px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_4_1_box {
					bottom: 10px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_1_box ul {
					margin: 5px 0;
				}
				.intro_ld_3_4_1_box ul li {
					font-size: 14px;
				}
				.intro_ld_3_4_1_regist {
					font-size: 14px;
					padding: 5px 0;
				}
				.intro_ld_3_4_1_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_1_title img {
					width: 45%;
				}
				.intro_ld_3_4_1_box {
					left: 70px;
				}
				.intro_ld_3_4_1_box ul li {
					font-size: 13px;
				}
				.intro_ld_3_4_1_regist {
					width: 200px;
				}
				.intro_ld_3_4_1_regist i {
					font-size: 12px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_1_title img {
					width: 70%;
				}
				.intro_ld_3_4_1_box {
					width: 90%;
					margin: 0 auto;
					left: 0;
					bottom: 265px;
				}
				.intro_ld_3_4_1_regist {
					padding: 6px 0;
					border-radius: 10px;
					margin-top: 10px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_4_1_box {
					bottom: 230px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_1_box {
					bottom: 190px;
				}
				.intro_ld_3_4_1_box ul li {
					font-size: 13px;
				}
				.intro_ld_3_4_1_regist {
					width: 180px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_1.css.map */
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

<div class="intro_ld_3_4_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->