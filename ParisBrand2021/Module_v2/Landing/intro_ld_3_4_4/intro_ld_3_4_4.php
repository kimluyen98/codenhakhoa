<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_4 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_4_4.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_4.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_3_4_4 {
				margin-top: 80px;
			}
			
			.intro_ld_3_4_4_bg {
				position: relative;
			}
			
			.intro_ld_3_4_4_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_4_box {
				position: absolute;
				bottom: 50px;
				left: 0;
				right: 0;
			}
			
			.intro_ld_3_4_4_box ul {
				list-style: none;
				color: #000;
				font-size: 24px;
				padding-left: 0;
			}
			
			.intro_ld_3_4_4_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.intro_ld_3_4_4_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_4_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_3_4_4_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_4_title {
					width: 30%;
				}
				.intro_ld_3_4_4_title img {
					width: 100%;
				}
				.intro_ld_3_4_4_box {
					bottom: 10px;
					left: 50px;
				}
				.intro_ld_3_4_4_box ul {
					font-size: 20px;
					margin: 5px 0;
				}
			}
			@media (max-width: 1280px) {
				.intro_ld_3_4_4_title {
					width: 25%;
				}
				
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_4_title {
					width: 25%;
				}
				.intro_ld_3_4_4_box {
					bottom: 20px;
				}
				.intro_ld_3_4_4_box ul {
					font-size: 15px;
				}
				.intro_ld_3_4_4_regist {
					width: 220px;
				}
				.intro_ld_3_4_4_regist a {
					font-size: 18px;
				}
				.intro_ld_3_4_4_regist i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_4_title {
					width: 26%;
				}
				.intro_ld_3_4_4_box {
					bottom: 10px;
				}
				.intro_ld_3_4_4_box ul {
					font-size: 13px;
					margin: 0 0 5px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_4_title {
					width: 70%;
					margin: 0 auto;
				}
				.intro_ld_3_4_4_box {
					left: 0;
					width: 90%;
					margin: 0 auto;
					bottom: 15px;
				}
				.intro_ld_3_4_4_box ul {
					width: 70%;
					font-size: 15px;
					margin: 0 auto;
				}
				.intro_ld_3_4_4_regist {
					margin: 10px auto 0;
					border-radius: 20px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_4_box ul {
					font-size: 13px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_4.css.map */
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

<div class="intro_ld_3_4_4 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_4.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->