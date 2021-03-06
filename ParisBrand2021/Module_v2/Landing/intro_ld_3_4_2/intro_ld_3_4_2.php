<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_3_4_2 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_3_4_2.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_3_4_2.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.intro_ld_3_4_2 {
				margin-top: 80px;
			}
			
			.intro_ld_3_4_2_bg {
				position: relative;
			}
			
			.intro_ld_3_4_2_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_3_4_2_box {
				position: absolute;
				bottom: 80px;
				left: 0;
				right: 0;
			}
			
			.intro_ld_3_4_2_sub {
				display: flex;
				font-size: 24px;
				color: #000;
				justify-content: space-between;
				width: 42%;
			}
			
			.intro_ld_3_4_2_sub ul {
				list-style: none;
				text-align: left;
				padding-left: 0;
			}
			
			.intro_ld_3_4_2_sub ul li:nth-child(1) {
				text-decoration: underline;
			}
			
			.intro_ld_3_4_2_sub ul li:nth-child(2),
			.intro_ld_3_4_2_sub ul li:nth-child(3) {
				padding-left: 5px;
			}
			
			.intro_ld_3_4_2_regist {
				color: #fff;
				background-color: #ff5159;
				width: 250px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.intro_ld_3_4_2_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_3_4_2_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.intro_ld_3_4_2_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_3_4_2_title {
					width: 35%;
				}
				.intro_ld_3_4_2_title img {
					width: 100%;
				}
				.intro_ld_3_4_2_box {
					bottom: 30px;
				}
				.intro_ld_3_4_2_sub {
					font-size: 20px;
					width: 35%;
				}
				.intro_ld_3_4_2_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 1280px) {
				.intro_ld_3_4_2_box {
					left: 100px;
				}
				.intro_ld_3_4_2_sub {
					width: 40%;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_3_4_2_sub {
					font-size: 17px;
				}
				.intro_ld_3_4_2_sub ul {
					margin: 7px 0;
				}
				.intro_ld_3_4_2_box {
					left: 60px;
					bottom: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_3_4_2_title {
					width: 30%;
				}
				.intro_ld_3_4_2_sub {
					font-size: 14px;
				}
				.intro_ld_3_4_2_box {
					bottom: 10px;
				}
				.intro_ld_3_4_2_regist {
					width: 220px;
				}
				.intro_ld_3_4_2_regist a {
					font-size: 16px;
				}
				.intro_ld_3_4_2_regist i {
					font-size: 13px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_3_4_2_title {
					width: 100%;
				}
				.intro_ld_3_4_2_box {
					left: 0;
					width: 90%;
					margin: 0 auto;
				}
				.intro_ld_3_4_2_sub {
					width: 100%;
					font-size: 16px;
				}
				.intro_ld_3_4_2_regist {
					margin: 0 auto;
					border-radius: 40px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_3_4_2_sub {
					font-size: 14px;
				}
			}
			/*# sourceMappingURL=intro_ld_3_4_2.css.map */
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

<div class="intro_ld_3_4_2 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_3_4_2.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->