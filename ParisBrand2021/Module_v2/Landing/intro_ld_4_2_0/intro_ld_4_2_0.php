<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.intro_ld_4_2_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.intro_ld_4_2_0.copy {
				text-align: center;
				padding: 20px 0;
			}
			.intro_ld_4_2_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.intro_ld_4_2_0 {
				margin-top: 80px;
				margin-bottom: 100px;
			
			}
			
			.intro_ld_4_2_0_bg {
				position: relative;
			}
			
			.intro_ld_4_2_0_bg img {
				width: 100%;
				display: block;
			}
			
			.intro_ld_4_2_0_title img {
				width: auto;
				display: block;
			}
			
			.intro_ld_4_2_0_box {
				position: absolute;
				bottom: -90px;
				right: 0;
				left: 0;
				color: #000;
			}
			
			.intro_ld_4_2_0_regist {
				padding: 30px 0 40px;
			}
			
			.intro_ld_4_2_0_regist a {
				background: #ff5159;
				padding: 13px 25px;
				font-size: 24px;
				text-transform: uppercase;
				color: #fff;
				transition: 0.4s;
			}
			.intro_ld_4_2_0_regist a:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 225, 225, 0.1), 0 0 1px 20px rgba(255, 225, 225, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.intro_ld_4_2_0_box2 {
				display: flex;
				justify-content: space-between;
				text-align: center;
				flex-wrap: wrap;
			}
			
			.intro_ld_4_2_0_box2__item {
				background-color: #fff;
				color: #000;
				width: 23%;
				padding: 15px 10px;
				font-size: 24px;
				font-weight: 500;
				transition: 0.3s;
				box-shadow: 0 8px 6px -6px #eee;
			}
			
			.intro_ld_4_2_0_box2__item:hover {
				background-color: #c8f4ff;
				transition: 0.3s;
			}
			
			.intro_ld_4_2_0_box2__item .pic {
				position: relative;
			}
			
			.intro_ld_4_2_0_box2__item .pic::after {
				content: "";
				display: block;
				position: absolute;
				border-bottom: 5px solid #0055a4;
				bottom: -10px;
				left: 40%;
				width: 50px;
			}
			
			.intro_ld_4_2_0_box2__item .text {
				padding-top: 20px;
			}
			
			@media (max-width: 1440px) {
				.intro_ld_4_2_0_title {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_4_2_0_title img {
					width: 50%;
				}
				.intro_ld_4_2_0_box2 {
					width: 80%;
					margin: 0 auto;
				}
				.intro_ld_4_2_0_box2__item {
					font-size: 18px;
				}
				.intro_ld_4_2_0_box2__item .pic::after {
					left: 37%;
				}
				.intro_ld_4_2_0_regist {
					padding: 20px 0 30px;
					width: 80%;
					margin: 0 auto;
				}
			}
			
			@media (max-width: 1024px) {
				.intro_ld_4_2_0_title img {
					width: 50%;
				}
				.intro_ld_4_2_0_box2__item {
					font-size: 16px;
				}
				.intro_ld_4_2_0_box2__item .pic {
					width: 30%;
					margin: 0 auto;
				}
				.intro_ld_4_2_0_box2__item .pic img {
					width: 100%;
				}
				.intro_ld_4_2_0_box2__item .pic::after {
					left: 0;
				}
				.intro_ld_4_2_0_regist {
					padding: 20px 0 20px;
				}
				.intro_ld_4_2_0_regist a {
					padding: 10px 25px;
					font-size: 18px;
				}
			}
			
			@media (max-width: 812px) {
				.intro_ld_4_2_0_box {
					bottom: -80px;
				}
				.intro_ld_4_2_0_box2__item {
					font-size: 14px;
				}
				.intro_ld_4_2_0_box2__item .pic::after {
					border-bottom: 3px solid #0055a4;
					bottom: -5px;
					width: 35px;
				}
				.intro_ld_4_2_0_box2__item .text {
					padding-top: 10px;
				}
				.intro_ld_4_2_0_regist {
					padding: 15px 0;
				}
				.intro_ld_4_2_0_regist a {
					font-size: 15px;
				}
			}
			
			@media (max-width: 414px) {
				.intro_ld_4_2_0 {
					margin-bottom: 0px;
				
				}
				.intro_ld_4_2_0_title {
					width: 80%;
				}
				.intro_ld_4_2_0_title img {
					width: 100%;
				}
				.intro_ld_4_2_0_box {
					bottom: 10px;
				}
				.intro_ld_4_2_0_box2 {
					width: 90%;
				}
				.intro_ld_4_2_0_box2__item {
					width: 49%;
					display: flex;
					justify-content: space-between;
					align-items: center;
					text-align: left;
					margin-bottom: 8px;
					padding: 10px 5px;
					box-shadow: none;
				}
				.intro_ld_4_2_0_box2__item .pic {
					width: 20%;
				}
				.intro_ld_4_2_0_box2__item .pic::after {
					display: none;
				}
				.intro_ld_4_2_0_box2__item .text {
					flex: 1;
					padding-left: 10px;
					padding-top: 0;
				}
				.intro_ld_4_2_0_box2__item .text br {
					display: none;
				}
				.intro_ld_4_2_0_regist {
					width: 90%;
					padding: 0 0 20px;
					margin-top: 85px;
				}
				.intro_ld_4_2_0_regist a {
					padding: 15px 95px;
					font-size: 20px;
				}
			}
			
			@media (max-width: 375px) {
				.intro_ld_4_2_0_regist {
					margin-top: 45px;
					padding-bottom: 15px;
				}
				.intro_ld_4_2_0_regist a {
					padding: 12px 77px;
				}
			}
			
			@media (max-width: 360px) {
				.intro_ld_4_2_0_regist a {
					padding: 12px 70px;
				}
			}
			
			@media (max-width: 320px) {
				.intro_ld_4_2_0_box2__item {
					font-size: 13px;
					margin-bottom: 5px;
					padding: 5px;
				}
				.intro_ld_4_2_0_box2__item .text {
					padding-left: 3px;
				}
				.intro_ld_4_2_0_regist a {
					padding: 12px 50px;
				}
			}
			/*# sourceMappingURL=intro_ld_4_2_0.css.map */
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

<div class="intro_ld_4_2_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_intro_ld_4_2_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->