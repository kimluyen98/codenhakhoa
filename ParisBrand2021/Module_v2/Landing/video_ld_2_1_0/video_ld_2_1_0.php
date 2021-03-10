<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.video_ld_2_1_0_right_item .item_video::before {
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
			
			.video_ld_2_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.video_ld_2_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.video_ld_2_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			.video_ld_2_1_0 {
				background: url(images/video_ld_2_1_0-bg.jpg) center 0 no-repeat;
				min-height: 600px;
				padding: 30px 0;
			}
			
			.video_ld_2_1_0_title {
				text-transform: uppercase;
				text-align: left;
				font-size: 36px;
				color: #0055a4;
				padding: 15px 0;
				line-height: 1.2;
			}
			
			.video_ld_2_1_0_title1 {
				display: none;
			}
			
			.video_ld_2_1_0_box {
				display: flex;
				justify-content: space-between;
				flex-wrap: wrap;
				background-color: #f5f6fa;
				border: 12px solid #ffff;
			}
			
			.video_ld_2_1_0_box p {
				margin-bottom: 0;
				text-transform: uppercase;
				font-size: 24px;
			}
			
			.video_ld_2_1_0_box img {
				width: 100%;
				display: block;
			}
			
			.video_ld_2_1_0_left {
				width: 49%;
			}
			
			.video_ld_2_1_0_left_image {
				position: relative;
			}
			
			.video_ld_2_1_0_left_bottom {
				position: absolute;
				top: 40px;
				left: 60px;
				background-color: #3d6dd9;
				padding: 30px 25px;
				color: #fff;
				text-align: center;
				border-radius: 8px;
				cursor: pointer;
			}
			
			.video_ld_2_1_0_left_bottom i {
				background-color: #0083da;
				font-size: 50px;
				border-radius: 50px;
				padding: 6px 12px;
				font-style: normal;
			}
			
			.video_ld_2_1_0_left_name {
				position: absolute;
				bottom: 12px;
				background-color: rgba(35, 130, 228, 0.8);
				width: 46.7%;
				color: #fff;
				padding: 8px 20px;
				font-size: 16px;
			}
			
			.video_ld_2_1_0_right {
				width: 49%;
				padding-right: 20px;
				padding-top: 30px;
			}
			
			.video_ld_2_1_0_right_item {
				margin-bottom: 25px;
				display: flex;
			}
			
			.video_ld_2_1_0_right_item .item_video {
				position: relative;
				transition: 0.3s;
				cursor: pointer;
			}
			
			.video_ld_2_1_0_right_item .item_video::before {
				content: "▶";
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
			
			.video_ld_2_1_0_right_item .item_video::after {
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
			
			.video_ld_2_1_0_right_item .item_video:hover::after {
				opacity: 1;
			}
			
			.video_ld_2_1_0_right_item .item_name {
				color: #000;
				font-size: 16px;
				padding-top: 30px;
				padding-left: 20px;
			}
			
			.video_ld_2_1_0_right_item .item_name p {
				text-transform: uppercase;
			}
			
			.video_ld_2_1_0_right_ct {
				padding-top: 10px;
			}
			
			.video_ld_2_1_0_regist {
				border-radius: 40px;
				margin: 0 auto;
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.video_ld_2_1_0_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.video_ld_2_1_0_regist i {
				font-style: normal;
				font-size: 16px;
				text-transform: none;
			}
			
			.video_ld_2_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
			}
			
			@media (max-width: 1024px) {
				.video_ld_2_1_0_title {
					font-size: 22px;
				}
				.video_ld_2_1_0_regist {
					font-size: 14px;
				}
				.video_ld_2_1_0_regist a {
					font-size: 18px;
				}
				.video_ld_2_1_0_left_bottom {
					top: 30px;
					left: 60px;
					padding: 20px 15px;
				}
				.video_ld_2_1_0_left_bottom i {
					font-size: 30px;
				}
				.video_ld_2_1_0_left_name {
					font-size: 14px;
				}
				.video_ld_2_1_0_right {
					padding-top: 30px;
				}
				.video_ld_2_1_0_right_item .item_name {
					font-size: 14px;
				}
				.video_ld_2_1_0_right_item .item_video {
					width: 50%;
				}
				.video_ld_2_1_0_right_item .item_video::before {
					top: 40px;
					left: 80px;
					width: 40px;
					height: 38px;
					font-size: 30px;
					line-height: 1.3;
				}
			}
			
			@media (max-width: 812px) {
				.video_ld_2_1_0 {
					min-height: 380px;
				}
				.video_ld_2_1_0_right {
					padding-top: 0;
				}
				.video_ld_2_1_0_right_item {
					flex-wrap: wrap;
				}
				.video_ld_2_1_0_right_item .item_name {
					font-size: 14px;
					width: 49%;
					padding-top: 0px;
					padding-left: 10px;
				}
				.video_ld_2_1_0_right_item .item_video {
					width: 50%;
				}
				.video_ld_2_1_0_right_item .item_video::before {
					top: 40px;
					left: 80px;
					width: 40px;
					height: 38px;
					font-size: 30px;
					line-height: 1.3;
				}
			}
			
			@media (max-width: 414px) {
				.video_ld_2_1_0 {
					background: #0154a2;
					min-height: 570px;
				}
				.video_ld_2_1_0_title {
					display: none;
				}
				.video_ld_2_1_0_title1 {
					text-transform: uppercase;
					text-align: center;
					font-size: 22px;
					color: #0055a4;
					padding: 15px 0;
					line-height: 1.2;
					display: block;
				}
				.video_ld_2_1_0_box {
					border: none;
					padding: 10px;
					display: block;
				}
				.video_ld_2_1_0_box p {
					font-size: 17px;
				}
				.video_ld_2_1_0_left {
					width: 100%;
				}
				.video_ld_2_1_0_left_bottom {
					top: 110px;
					left: 50px;
				}
				.video_ld_2_1_0_left_name {
					margin-top: -67px;
					margin-left: 7px;
					position: relative;
					width: 96.7%;
					bottom: auto;
				}
				.video_ld_2_1_0_right {
					width: 100%;
					padding-right: 0;
				}
				.video_ld_2_1_0_right_ct {
					display: flex;
				}
				.video_ld_2_1_0_right_item {
					display: block;
					margin-bottom: 5px;
				}
				.video_ld_2_1_0_right_item .item_video {
					width: 100%;
				}
				.video_ld_2_1_0_right_item .item_video::before {
					top: 30px;
					left: 60px;
				}
				.video_ld_2_1_0_right_item .item_name {
					width: 100%;
				}
				.video_ld_2_1_0_regist {
					margin: 10px auto;
					font-size: 13px;
					width: 280px;
				}
				.video_ld_2_1_0_regist a {
					font-size: 18px;
				}
				.video_ld_2_1_0_regist i {
					font-size: 14px;
				}
			}
			
			@media (max-width: 375px) {
				.video_ld_2_1_0 {
					min-height: 530px;
				}
				.video_ld_2_1_0_right_item .item_video::before {
					width: 30px;
					height: 30px;
					font-size: 22px;
					line-height: 1.4;
				}
				.video_ld_2_1_0_right_item .item_name {
					font-size: 13px;
				}
			}
			
			@media (max-width: 320px) {
				.video_ld_2_1_0 {
					min-height: 500px;
				}
				.video_ld_2_1_0_title {
					font-size: 20px;
				}
				.video_ld_2_1_0_right_item .item_video::before {
					top: 20px;
					left: 50px;
				}
				.video_ld_2_1_0_right_item .item_name {
					font-size: 12px;
				}
				.video_ld_2_1_0_left_bottom {
					top: 140px;
				}
				.video_ld_2_1_0_regist {
					font-size: 12px;
					width: 270px;
				}
			}
			/*# sourceMappingURL=video_ld_2_1_0.css.map */
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

<div class="video_ld_2_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_video_ld_2_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->