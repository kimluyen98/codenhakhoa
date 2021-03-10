<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/video_ld_3_1_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
		
			.video_ld_3_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.video_ld_3_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.video_ld_3_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
		
			.video_ld_3_1_0 {
				background: url('.$path.'/images/video_ld_3_1_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 30px 0;
			}
		
			.video_ld_3_1_0_title {
				text-align: center;
				text-transform: uppercase;
				font-size: 32px;
				color: #fff;
				background-color: #00358c;
				padding: 15px 0;
				width: 65%;
			}
		
			.video_ld_3_1_0_box {
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
				margin: 0 auto;
			}
		
			.video_ld_3_1_0_boxL {
				width: 65%;
			}
		
			.video_ld_3_1_0_boxL p {
				color: #fff;
				font-size: 24px;
				background-color: #00358c;
				padding: 20px 0;
				text-align: center;
				width: 100%;
				height: 220px;
			}
		
			.video_ld_3_1_0_boxR {
				width: 35%;
				padding-left: 20px;
			}
		
			.video_ld_3_1_0_box img {
				width: 100%;
				display: block;
			}
		
			.video_ld_3_1_0_item p {
				margin: 10px 0;
				font-size: 24px;
			}
		
			.video_ld_3_1_0_regist {
				background-color: #ff5159;
				padding: 6px 0;
				width: 60%;
				border-radius: 40px;
				margin: 10px 0;
				text-align: center;
				line-height: 1;
				color: #fff;
			}
		
			.video_ld_3_1_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
			}
		
			.video_ld_3_1_0_regist i {
				font-style: normal;
			}
		
			@media (max-width: 1024px) {
				.video_ld_3_1_0_title {
					font-size: 26px;
				}
		
				.video_ld_3_1_0_regist {
					font-size: 14px;
				}
		
				.video_ld_3_1_0_regist a {
					font-size: 18px;
				}
		
				.video_ld_3_1_0_boxL p {
					font-size: 18px;
				}
		
				.video_ld_3_1_0_item p {
					font-size: 18px;
				}
			}
		
			@media (max-width: 414px) {
				.video_ld_3_1_0 {
					background: #00358c;
					min-height: 570px;
				}
		
				.video_ld_3_1_0_title {
					width: 100%;
					font-size: 20px;
					text-align: center;
				}
		
				.video_ld_3_1_0_box {
					padding: 0 15px;
					background-color: #00358c;
				}
		
				.video_ld_3_1_0_boxL {
					width: 100%;
				}
		
				.video_ld_3_1_0_boxL p {
					font-size: 16px;
					margin: 10px 0 20px;
					background-color: #00358c;
					color: #fff;
					height: auto;
					padding: 0;
					text-align: left;
				}
		
				.video_ld_3_1_0_boxR {
					width: 100%;
					display: flex;
					flex-wrap: wrap;
					justify-content: space-between;
					padding-left: 0;
				}
		
				.video_ld_3_1_0_item {
					width: 48%;
				}
		
				.video_ld_3_1_0_item p {
					font-size: 16px;
					color: #fff;
				}
		
				.video_ld_3_1_0_kh {
					display: none;
				}
		
				.video_ld_3_1_0_regist {
					margin: 10px auto;
					font-size: 13px;
					width: 65%;
				}
		
				.video_ld_3_1_0_regist a {
					font-size: 16px;
				}
			}
		
			@media (max-width: 375px) {
				.video_ld_3_1_0 {
					min-height: 530px;
				}
		
				.video_ld_3_1_0_right_item .item_video::before {
					width: 30px;
					height: 30px;
					font-size: 22px;
					line-height: 1.4;
				}
		
				.video_ld_3_1_0_right_item .item_name {
					font-size: 13px;
				}
		
				.video_ld_3_1_0_regist {
					width: 70%;
				}
			}
		
			@media (max-width: 360px){
				.video_ld_3_1_0_title {
					font-size: 17px;
				}
			}
		
			@media (max-width: 320px) {
				.video_ld_3_1_0 {
					min-height: 500px;
				}
		
				.video_ld_3_1_0_right_item .item_video::before {
					top: 20px;
					left: 50px;
				}
		
				.video_ld_3_1_0_right_item .item_name {
					font-size: 12px;
				}
		
				.video_ld_3_1_0_regist {
					font-size: 12px;
					width: 75%;
				}
			}
		
			/*# sourceMappingURL=video_ld_3_1_0.css.map */
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

<div class="video_ld_3_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_video_ld_3_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->