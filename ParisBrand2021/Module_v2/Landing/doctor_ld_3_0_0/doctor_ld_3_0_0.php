<?php
$path = get_template_directory_uri();
$path = $path.'/Module_v2/Landing/doctor_ld_3_0_0';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.doctor_ld_3_0_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.doctor_ld_3_0_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.doctor_ld_3_0_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.doctor_ld_3_0_0 {
				background: url('.$path.'/images/doctor_ld_3_0_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 30px 0;
			}
			
			.doctor_ld_3_0_0 .modal-box {
				position: relative;
				width: 50%;
				max-width: 560px;
				margin: 100px auto;
			}
			
			@media (max-width: 414px) {
				.doctor_ld_3_0_0 .modal-box {
					width: 90%;
				}
			}
			
			.doctor_ld_3_0_0 .modal-header {
				padding: 10px 20px;
				background: #0038c8 !important;
				border-radius: 4px 4px 0 0;
				border-bottom: 1px solid #e9ecef !important;
			}
			
			.doctor_ld_3_0_0 .modal-boddy {
				color: #000;
				font-size: 16px;
				min-height: auto !important;
			}
			
			.doctor_ld_3_0_0 .modal-title {
				color: #fff;
				text-transform: uppercase;
			}
			
			.doctor_ld_3_0_0 .modal-close {
				color: #fff;
				margin-top: -30px;
			}
			
			.doctor_ld_3_0_0_title {
				text-transform: uppercase;
				font-size: 36px;
				color: #0055a4;
			}
			
			.doctor_ld_3_0_0_title br {
				display: none;
			}
			
			.doctor_ld_3_0_0_box .row {
				margin: 0;
			}
			
			.doctor_ld_3_0_0_box .row .col-md-5,
			.doctor_ld_3_0_0_box .row .col-md-7 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.doctor_ld_3_0_0_box .row .col-md-5 img,
			.doctor_ld_3_0_0_box .row .col-md-7 img {
				width: 100%;
				display: block;
			}
			
			.doctor_ld_3_0_0_box_tieude {
				font-size: 24px;
				text-transform: uppercase;
				color: #000;
				padding: 20px 0;
			}
			
			.doctor_ld_3_0_0_item {
				position: relative;
				margin-bottom: 10px;
				transition: 0.3s;
			}
			
			.doctor_ld_3_0_0_item:hover .doctor_ld_3_0_0_item__bottom {
				background-color: #31aaf6;
				transition: 0.3s;
			}
			
			.doctor_ld_3_0_0_item__top {
				background-color: #e8f4ff;
				height: 70px;
			}
			
			.doctor_ld_3_0_0_item__bottom {
				background-color: #b9e0ff;
				padding-top: 70px;
				text-align: center;
				padding-bottom: 10px;
				color: #000;
				font-size: 16px;
			}
			
			.doctor_ld_3_0_0_item__name span {
				text-transform: uppercase;
			}
			
			.doctor_ld_3_0_0_item__pic {
				width: 70%;
				position: absolute;
				top: 20px;
				left: 25px;
			}
			
			.doctor_ld_3_0_0_item__pic img {
				border-radius: 100%;
			}
			
			.doctor_ld_3_0_0_regist {
				background-color: #ff5159;
				color: #fff;
				text-align: center;
				width: 50%;
				margin: 0 auto;
				border-radius: 40px;
				padding: 6px 0;
				line-height: 1.1;
				margin-top: 20px;
			}
			
			.doctor_ld_3_0_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
			}
			
			.doctor_ld_3_0_0_regist i {
				font-style: normal;
			}
			
			@media (max-width: 1024px) {
				.doctor_ld_3_0_0 {
					min-height: 490px;
				}
				.doctor_ld_3_0_0_title {
					font-size: 30px;
				}
				.doctor_ld_3_0_0_box_tieude {
					font-size: 18px;
				}
				.doctor_ld_3_0_0_item__bottom {
					padding-top: 50px;
					font-size: 13px;
				}
				.doctor_ld_3_0_0_regist {
					font-size: 13px;
					width: 45%;
					margin-top: 10px;
				}
				.doctor_ld_3_0_0_regist a {
					font-size: 18px;
				}
			}
			
			@media (max-width: 812px) {
				.doctor_ld_3_0_0_title {
					font-size: 24px;
				}
				.doctor_ld_3_0_0_item__top {
					height: 50px;
				}
				.doctor_ld_3_0_0_item__pic {
					top: 13px;
					left: 15px;
				}
				.doctor_ld_3_0_0_item__bottom {
					padding-top: 40px;
					font-size: 11px;
				}
				.doctor_ld_3_0_0_regist {
					font-size: 12px;
					width: 50%;
				}
			}
			
			@media (max-width: 414px) {
				.doctor_ld_3_0_0_title {
					text-align: center;
				}
				.doctor_ld_3_0_0_title br {
					display: block;
				}
				.doctor_ld_3_0_0_box_tieude {
					text-align: center;
					font-size: 16px;
					padding: 10px 0;
				}
				.doctor_ld_3_0_0_item__top {
					height: 70px;
				}
				.doctor_ld_3_0_0_item__pic {
					top: 15px;
					left: 25px;
				}
				.doctor_ld_3_0_0_item__bottom {
					padding-top: 80px;
					font-size: 15px;
				}
				.doctor_ld_3_0_0_regist {
					width: 65%;
				}
			}
			
			@media (max-width: 375px) {
				.doctor_ld_3_0_0_title {
					font-size: 20px;
				}
				.doctor_ld_3_0_0_item__bottom {
					padding-top: 65px;
				}
			}
			
			@media (max-width: 320px) {
				.doctor_ld_3_0_0_title {
					font-size: 18px;
				}
				.doctor_ld_3_0_0_box_tieude {
					font-size: 14px;
				}
				.doctor_ld_3_0_0_item__pic {
					left: 20px;
				}
				.doctor_ld_3_0_0_item__bottom {
					padding-top: 45px;
					font-size: 14px;
				}
				.doctor_ld_3_0_0_regist {
					width: 80%;
				}
			}
			/*# sourceMappingURL=doctor_ld_3_0_0.css.map */
		</style>		
		';	
		$js_inline .='
			<script>
			var doctor_ld_3_0_0_box_right=tns({container:".doctor_ld_3_0_0_box_right",items:4,slideBy:"page",autoplay:!1,autoplayButtonOutput:!1,lazyload:!0,nav:!1,mouseDrag:!1,loop:!1,gutter:10,nav:!1,controls:!1,navPosition:"bottom",lazyloadSelector:".tns-lazy",responsive:{0:{items:2,nav:!0},768:{items:4}}});
			</script>
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

<div class="doctor_ld_3_0_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_doctor_ld_3_0_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->