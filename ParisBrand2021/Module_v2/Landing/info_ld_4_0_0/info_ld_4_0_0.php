<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.info_ld_4_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.info_ld_4_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.info_ld_4_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.info_ld_4_0_0_bg {
				position: relative;
			}
			
			.info_ld_4_0_0_bg img {
				width: 100%;
				display: block;
			}
			
			.info_ld_4_0_0_title {
				text-transform: uppercase;
				text-align: left;
				font-size: 36px;
				color: #0055a4;
			}
			
			.info_ld_4_0_0_title p {
				font-size: 24px;
				color: #000;
			}
			
			.info_ld_4_0_0_box {
				position: absolute;
				left: 0;
				right: 0;
				bottom: 240px;
			}
			
			.info_ld_4_0_0_box ul {
				list-style: none;
				padding-left: 0;
			}
			
			.info_ld_4_0_0_box ul li {
				font-size: 24px;
				color: #000;
			}
			
			.info_ld_4_0_0_box ul li i {
				color: #0055a4;
			}
			
			.info_ld_4_0_0_regist {
				width: 320px;
				background-color: #ff5159;
				color: #fff;
				padding: 5px 0;
				border-radius: 40px;
				text-align: center;
				transition: 0.4s;
			}
			.info_ld_4_0_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(239, 65, 61, 0.1), 0 0 1px 20px rgba(239, 65, 61, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.info_ld_4_0_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
			}
			
			@media (max-width: 1440px) {
				.info_ld_4_0_0_box {
					bottom: 120px;
				}
			}
			
			@media (max-width: 1280px) {
				.info_ld_4_0_0_box {
					bottom: 60px;
					left: 70px;
				}
			}
			
			@media (max-width: 1024px) {
				.info_ld_4_0_0_title {
					font-size: 28px;
				}
				.info_ld_4_0_0_box ul {
					margin: 7px 0;
				}
				.info_ld_4_0_0_box ul li {
					font-size: 18px;
				}
				.info_ld_4_0_0_regist {
					font-size: 13px;
					width: 250px;
				}
				.info_ld_4_0_0_regist a {
					font-size: 20px;
				}
			}
			
			@media (max-width: 812px) {
				.info_ld_4_0_0_title {
					font-size: 24px;
				}
				.info_ld_4_0_0_box {
					left: 30px;
					bottom: 30px;
				}
				.info_ld_4_0_0_box ul li {
					font-size: 16px;
				}
				.info_ld_4_0_0_regist {
					width: 220px;
				}
				.info_ld_4_0_0_regist a {
					font-size: 17px;
				}
			}
			
			@media (max-width: 414px) {
				.info_ld_4_0_0_title {
					padding-left: 20px;
				}
				.info_ld_4_0_0_box {
					bottom: 10px;
					left: 0;
				}
				.info_ld_4_0_0_box ul {
					padding-left: 20px;
				}
				.info_ld_4_0_0_regist {
					margin: 320px auto 0;
				}
			}
			
			@media (max-width: 375px) {
				.info_ld_4_0_0_regist {
					margin: 270px auto 0;
				}
			}
			
			@media (max-width: 320px) {
				.info_ld_4_0_0_title {
					font-size: 20px;
				}
				.info_ld_4_0_0_box ul li {
					font-size: 14px;
				}
				.info_ld_4_0_0_regist {
					margin: 230px auto 0;
					width: 190px;
					font-size: 12px;
				}
				.info_ld_4_0_0_regist a {
					font-size: 13px;
				}
			}
			/*# sourceMappingURL=info_ld_4_0_0.css.map */
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

<div class="info_ld_4_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_info_ld_4_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->