<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.video_ld_2_0_0_right_item .item_video::before {
				font-family: "fontello";
				font-style: normal;
				font-weight: 400;
				speak: none;
				display: inline-block;
				text-decoration: inherit;
				width: 1em;
				margin-right: .2em;
				text-align: center;
				font-variant: normal;
				text-transform: none;
				line-height: 1em;
				margin-left: .2em;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
			}
			
			.video_ld_2_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.video_ld_2_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.video_ld_2_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.video_ld_2_0_0 {
				background: url('.$path.'/images/video_ld_2_0_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 30px 0;
			}
			
			.video_ld_2_0_0_title {
				text-transform: uppercase;
				text-align: left;
				font-size: 36px;
				color: #0055a4;
				padding: 15px 0;
				line-height: 1.2;
			}
			
			.video_ld_2_0_0_box {
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
				background-color: #f5f6fa;
				border: 12px solid #ffff;
			}
			
			.video_ld_2_0_0_box p {
				margin-bottom: 0;
			}
			
			.video_ld_2_0_0_box img {
				width: 100%;
				display: block;
			}
			
			.video_ld_2_0_0_left {
				width: 49%;
			}
			
			.video_ld_2_0_0_left_image {
				position: relative;
			}
			
			.video_ld_2_0_0_left_bottom {
				position: absolute;
				top: 40px;
				left: 60px;
				background-color: #00a2ff;
				padding: 30px 25px;
				color: #fff;
				text-align: center;
				border-radius: 8px;
				cursor: pointer;
			}
			
			.video_ld_2_0_0_left_bottom i {
				background-color: #0083da;
				font-size: 50px;
				border-radius: 50px;
				padding: 6px 12px;
				font-style: normal;
			}
			
			.video_ld_2_0_0_left_name {
				position: absolute;
				bottom: 12px;
				background-color: rgba(225, 225, 225, 0.8);
				width: 46%;
				color: #000;
				padding: 8px 20px;
				font-size: 16px;
			}
			
			.video_ld_2_0_0_right {
				width: 49%;
				padding-right: 20px;
			}
			
			.video_ld_2_0_0_right_ct {
				display: flex;
				flex-wrap: wrap;
				justify-content: space-between;
			}
			
			.video_ld_2_0_0_right_item {
				margin-bottom: 15px;
				width: 48%;
			}
			
			.video_ld_2_0_0_right_item .item_video {
				position: relative;
				transition: 0.3s;
				cursor: pointer;
			}
			
			.video_ld_2_0_0_right_item .item_video::before {
				content: "???";
				position: absolute;
				top: 50px;
				left: 100px;
				width: 50px;
				height: 48px;
				color: #fff;
				font-size: 40px;
				border-radius: 50px;
				line-height: 1.2;
				background-color: #0083da;
				z-index: 2;
			}
			
			.video_ld_2_0_0_right_item .item_video::after {
				content: "";
				background-color: rgba(0, 162, 255, 0.6);
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				transition: 0.3s;
				opacity: 0;
				z-index: 1;
			}
			
			.video_ld_2_0_0_right_item .item_video:hover::after {
				opacity: 1;
			}
			
			.video_ld_2_0_0_right_item .item_name {
				color: #000;
				font-size: 16px;
				padding-top: 10px;
			}
			
			.video_ld_2_0_0_regist {
				background-color: #ff5159;
				padding: 6px 0;
				width: 60%;
				border-radius: 40px;
				margin: 10px 0;
				text-align: center;
				line-height: 1;
				color: #fff;
			}
			
			.video_ld_2_0_0_regist a {
				display: block;
				color: #fff;
				text-transform: uppercase;
				font-size: 24px;
			}
			
			.video_ld_2_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.video_ld_2_0_0_title {
					font-size: 30px;
				}
				.video_ld_2_0_0_regist {
					font-size: 14px;
				}
				.video_ld_2_0_0_regist a {
					font-size: 18px;
				}
				.video_ld_2_0_0_left_bottom {
					top: 30px;
					left: 60px;
					padding: 20px 15px;
				}
				.video_ld_2_0_0_left_bottom i {
					font-size: 30px;
				}
				.video_ld_2_0_0_left_name {
					font-size: 14px;
				}
				.video_ld_2_0_0_right_item .item_name {
					font-size: 14px;
				}
				.video_ld_2_0_0_right_item .item_video::before {
					top: 40px;
					left: 80px;
					width: 40px;
					height: 38px;
					font-size: 30px;
					line-height: 1.3;
				}
			}
			
			@media (max-width: 414px) {
				.video_ld_2_0_0 {
					background: #0154a2;
					min-height: 570px;
				}
				.video_ld_2_0_0_title {
					font-size: 24px;
					text-align: center;
				}
				.video_ld_2_0_0_box {
					border: none;
					padding: 10px;
				}
				.video_ld_2_0_0_left {
					display: none;
				}
				.video_ld_2_0_0_right {
					width: 100%;
					padding-right: 0;
				}
				.video_ld_2_0_0_right_item .item_video::before {
					top: 30px;
					left: 60px;
				}
				.video_ld_2_0_0_regist {
					margin: 10px auto;
					font-size: 13px;
					width: 65%;
				}
				.video_ld_2_0_0_regist a {
					font-size: 16px;
				}
			}
			
			@media (max-width: 375px) {
				.video_ld_2_0_0 {
					min-height: 530px;
				}
				.video_ld_2_0_0_right_item .item_video::before {
					width: 30px;
					height: 30px;
					font-size: 22px;
					line-height: 1.4;
				}
				.video_ld_2_0_0_right_item .item_name {
					font-size: 13px;
				}
				.video_ld_2_0_0_regist {
					width: 70%;
				}
			}
			
			@media (max-width: 320px) {
				.video_ld_2_0_0 {
					min-height: 500px;
				}
				.video_ld_2_0_0_title {
					font-size: 20px;
				}
				.video_ld_2_0_0_right_item .item_video::before {
					top: 20px;
					left: 50px;
				}
				.video_ld_2_0_0_right_item .item_name {
					font-size: 12px;
				}
				.video_ld_2_0_0_regist {
					font-size: 12px;
					width: 75%;
				}
			}
			/*# sourceMappingURL=video_ld_2_0_0.css.map */
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

<?php if(isset($_GET['load'])): ?>

<div class="video_ld_2_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_video_ld_2_0_0.php" download>
				T???i code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->