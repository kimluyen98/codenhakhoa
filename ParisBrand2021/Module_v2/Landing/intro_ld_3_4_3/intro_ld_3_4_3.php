<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_3 {
				font-family: "Roboto Condensed", sans-serif;
			}
			
			.intro_ld_3_4_3 {
				margin-top: 80px;
			}
			.intro_ld_3_4_3.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_3.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.intro_ld_3_4_3_bg {
				position: relative;
			}
			
			.intro_ld_3_4_3_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_3_box {
				position: absolute;
				left: 0;
				right: 0;
				bottom: 150px;
			}
			
			.intro_ld_3_4_3_sub {
				color: #fff;
				font-size: 24px;
				display: flex;
				align-items: center;
				justify-content: space-between;
				width: 40%;
				text-align: center;
				margin: 20px 0;
			}
			
			.intro_ld_3_4_3_sub p {
				margin-bottom: 0;
			}
			
			.intro_ld_3_4_3_sub p:nth-child(1),
			.intro_ld_3_4_3_sub p:nth-child(2) {
				position: relative;
			}
			
			.intro_ld_3_4_3_sub p:nth-child(1)::after,
			.intro_ld_3_4_3_sub p:nth-child(2)::after {
				border-right: 1px solid #fff;
				content: "";
				display: block;
				position: absolute;
				top: 0;
				right: -25px;
				width: 1px;
				height: 70px;
			}
			
			.intro_ld_3_4_3_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.intro_ld_3_4_3_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_3_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_3_4_3_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_3_box {
					bottom: 50px;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_3_title {
					width: 40%;
				}
				.intro_ld_3_4_3_title img {
					width: 100%;
				}
				.intro_ld_3_4_3_box {
					bottom: 30px;
					left: 50px;
				}
				.intro_ld_3_4_3_sub {
					font-size: 18px;
					width: 35%;
					margin: 10px 0;
				}
				.intro_ld_3_4_3_sub p:nth-child(1)::after,
				.intro_ld_3_4_3_sub p:nth-child(2)::after {
					height: 45px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_3_box {
					bottom: 20px;
				}
				.intro_ld_3_4_3_sub {
					font-size: 14px;
					width: 40%;
				}
				.intro_ld_3_4_3_regist {
					width: 220px;
				}
				.intro_ld_3_4_3_regist a {
					font-size: 18px;
				}
				.intro_ld_3_4_3_regist i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_3_title {
					width: 100%;
				}
				.intro_ld_3_4_3_box {
					left: 0;
					width: 90%;
					margin: 0 auto;
					bottom: 10px;
				}
				.intro_ld_3_4_3_sub {
					font-size: 16px;
					width: 90%;
					margin: 0 auto;
				}
				.intro_ld_3_4_3_regist {
					margin: 10px auto 0;
					border-radius: 15px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_3_4_3_title {
					width: 85%;
					margin: 0 auto;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_3_sub {
					font-size: 13px;
				}
				.intro_ld_3_4_3_sub p:nth-child(1)::after,
				.intro_ld_3_4_3_sub p:nth-child(2)::after {
					height: 35px;
				}
				.intro_ld_3_4_3_regist a {
					font-size: 16px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_3.css.map */
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

<div class="intro_ld_3_4_3 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_3.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->