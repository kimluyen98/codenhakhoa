<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_6 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_4_6.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_6.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.intro_ld_3_4_6 {
				margin-top: 80px;
			}
			
			.intro_ld_3_4_6_bg {
				position: relative;
			}
			
			.intro_ld_3_4_6_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_6_box {
				position: absolute;
				bottom: 65px;
				right: 0;
				left: 0;
			}
			
			.intro_ld_3_4_6_box ul {
				list-style: none;
				padding-left: 0;
			}
			
			.intro_ld_3_4_6_box ul li {
				color: #fff;
				font-size: 20px;
			}
			
			.intro_ld_3_4_6_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.intro_ld_3_4_6_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_6_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_3_4_6_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_6_title img {
					width: 50%;
					display: block;
				}
				.intro_ld_3_4_6_box {
					width: 70%;
					left: 120px;
					bottom: 30px;
				}
				.intro_ld_3_4_6_box ul {
					margin: 10px 0;
				}
				.intro_ld_3_4_6_box ul li {
					font-size: 20px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_4_6_box {
					bottom: 10px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_6_box ul {
					margin: 5px 0;
				}
				.intro_ld_3_4_6_box ul li {
					font-size: 16px;
				}
				.intro_ld_3_4_6_regist {
					font-size: 14px;
					padding: 5px 0;
				}
				.intro_ld_3_4_6_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_6_title img {
					width: 40%;
				}
				.intro_ld_3_4_6_box {
					left: 70px;
					bottom: 10px;
				}
				.intro_ld_3_4_6_box ul li {
					font-size: 14px;
				}
				.intro_ld_3_4_6_regist {
					width: 200px;
				}
				.intro_ld_3_4_6_regist i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_6_title img {
					width: 70%;
					margin: 0 auto;
				}
				.intro_ld_3_4_6_box {
					width: 80%;
					margin: 0 auto;
					left: 0;
					bottom: 10px;
					
				}
				.intro_ld_3_4_6_box ul{
					width: 68%;
					margin: 5px auto;
					
				}
				.intro_ld_3_4_6_regist {
					width: 220px;
					padding: 6px 0;
					border-radius: 10px;
					margin: 10px auto 0;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_4_6_regist a {
					font-size: 15px;
				}
				.intro_ld_3_4_6_regist i {
					font-size: 11px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_6_box ul li {
					font-size: 11px;
				}
				.intro_ld_3_4_6_regist {
					width: 180px;
					padding: 5px 0;
					margin-top: 5px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_6.css.map */
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

<div class="intro_ld_3_4_6 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_6.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->