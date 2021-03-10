<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module_v2/Landing/doctor_ld_3_1_1';
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.doctor_ld_3_1_1 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.doctor_ld_3_1_1.copy {
				text-align: center;
				padding: 20px 0;
				min-height:0;
			}
			.doctor_ld_3_1_1.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.doctor_ld_3_1_1 {
				padding-bottom: 30px;
			}
			.doctor_ld_3_1_1 .mb {
			display: none;
			}
			.doctor_ld_3_1_1 .modal-box {
			position: relative;
			width: 50%;
			max-width: 560px;
			margin: 100px auto;
			}
			@media (max-width: 414px) {
			.doctor_ld_3_1_1 .modal-box {
				width: 90%;
			}
			}
			.doctor_ld_3_1_1 .modal-header {
			padding: 10px 20px;
			background: #0038c8 !important;
			border-radius: 4px 4px 0 0;
			border-bottom: 1px solid #e9ecef !important;
			}
			.doctor_ld_3_1_1 .modal-boddy {
			color: #000;
			font-size: 16px;
			min-height: auto !important;
			}
			.doctor_ld_3_1_1 .modal-title {
			color: #fff;
			text-transform: uppercase;
			}
			.doctor_ld_3_1_1 .modal-close {
			color: #fff;
			margin-top: -30px;
			}
			
			.doctor_ld_3_1_1_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
			}
			
			.doctor_ld_3_1_1_title p {
				font-size: 24px;
				color: #000000;
			}
			
			.doctor_ld_3_1_1_box {
				margin-top: 30px;
			}
			
			.doctor_ld_3_1_1__item {
				margin-bottom: 15px;
				margin-right: 20px;
			}
			
			.doctor_ld_3_1_1__item a {
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				border-radius: 15px;
				align-items: center;
				padding: 10px 0;
			}
			
			.doctor_ld_3_1_1__item.tns-nav-active {
				background-color: #eeeeee;
				border-radius: 15px;
			}
			
			.doctor_ld_3_1_1__ct {
				width: 80%;
				color: #477dfb;
				text-transform: uppercase;
				font-size: 24px;
				padding-left: 10px;
			}
			
			.doctor_ld_3_1_1__ct ul {
				line-height: 20px;
				padding: 0;
				margin: 0;
			}
			
			.doctor_ld_3_1_1__ct ul li {
				text-transform: capitalize;
				list-style: none;
				font-size: 16px;
				color: #000000;
			}
			
			.doctor_ld_3_1_1__pic {
				width: 12%;
				line-height: 0;
			}
			
			.doctor_ld_3_1_1__pic img {
				width: 100%;
				border-radius: 100%;
			}
			
			.doctor_ld_3_1_1_content {
				padding: 30px 30px;
				box-shadow: -4px 7px 15px 0px #eee;
			}
			
			.doctor_ld_3_1_1 .scrollbar {
				height: 360px;
				width: 540px;
				overflow-y: scroll;
				margin-bottom: 25px;
				margin: 0 auto;
			}
			
			@media (max-width: 1280px) {
				.doctor_ld_3_1_1 .scrollbar {
					width: 450px;
				}
			}
			
			.doctor_ld_3_1_1 .force-overflow {
				min-height: 450px;
			}
			
			.doctor_ld_3_1_1 #style-1::-webkit-scrollbar-track {
				-webkit-box-shadow: inset 0 0 6px rgba(61, 109, 217, 0.3);
				border-radius: 10px;
				background-color: #F5F5F5;
			}
			
			.doctor_ld_3_1_1 #style-1::-webkit-scrollbar {
				width: 8px;
				background-color: #F5F5F5;
			}
			
			.doctor_ld_3_1_1 #style-1::-webkit-scrollbar-thumb {
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(61, 109, 217, 0.3);
				background-color: #6276a5;
			}
			
			.doctor_ld_3_1_1_regist {
				border-radius: 40px;
				margin: 30px auto 0;
				color: #fff;
				background-color: #ff5159;
				width: 320px;
				text-align: center;
				transition: 0.4s;
				padding: 7px 0;
			}
			
			.doctor_ld_3_1_1_regist:hover {
				box-shadow: 0 0 1px 3px rgba(255, 15, 0, 0.8), 0 0 1px 10px rgba(255, 15, 0, 0.1), 0 0 1px 20px rgba(255, 15, 0, 0.1);
				border-radius: 40px;
				transition: 0.4s;
			}
			
			.doctor_ld_3_1_1_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				line-height: 1;
				padding: 8px 10px;
			}
			
			.doctor_ld_3_1_1_registMB {
				display: none;
			}
		
			
			@media (max-width: 1280px) {
				.doctor_ld_3_1_1 .scrollbar {
					height: 360px;
				}
			}
			
			@media (max-width: 1024px) {
				.doctor_ld_3_1_1 {
					min-height: 490px;
				}
				.doctor_ld_3_1_1_title {
					font-size: 30px;
				}
				.doctor_ld_3_1_1_box_tieude {
					font-size: 18px;
				}
				.doctor_ld_3_1_1_boxGr {
					margin-top: 30px;
				}
				.doctor_ld_3_1_1_boxGr img {
					width: 100%;
				}
				.doctor_ld_3_1_1_regist {
					font-size: 13px;
					width: 45%;
					margin-top: 40px;
					width: 280px;
				}
				.doctor_ld_3_1_1_regist a {
					font-size: 18px;
				}
				.doctor_ld_3_1_1 .scrollbar {
					height: 330px;
				}
			}
			
			@media (max-width: 812px) {
				.doctor_ld_3_1_1 .pc {
					display: none;
				}
				.doctor_ld_3_1_1 .mb {
					display: block;
				}
				.doctor_ld_3_1_1_title {
					font-size: 24px;
				}
				.doctor_ld_3_1_1_boxOwl {
					display: none !important;
				}
				.doctor_ld_3_1_1 .scrollbar {
					width: 650px;
				}
				.doctor_ld_3_1_1__ct {
					font-size: 18px;
				}
				.doctor_ld_3_1_1__ct ul li {
					font-size: 15px;
				}
				
			}
			
			@media (max-width: 414px) {
				.doctor_ld_3_1_1_title {
					text-align: center;
					font-size: 22px;
				}
				.doctor_ld_3_1_1_title br {
					display: none;
				}
				.doctor_ld_3_1_1_title p {
					font-size: 14px;
				}
				.doctor_ld_3_1_1__ct ul li {
					font-size: 14px;
				}
				.doctor_ld_3_1_1_content {
					padding: 20px 30px;
				}
				.doctor_ld_3_1_1 .scrollbar {
					width: 100%;
					height: 350px;
				}
				.doctor_ld_3_1_1_box {
					margin-top: 10px;
				}
				.doctor_ld_3_1_1__box {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
				}
				.doctor_ld_3_1_1_box_tieude {
					width: 40%;
					order: 2;
				}
				.doctor_ld_3_1_1 .col-md-6.doctor_ld_3_1_1_da {
					order: 2;
				}
				.doctor_ld_3_1_1__item {
					flex-wrap: wrap;
					margin-right: 10px;
					margin-bottom: 5px;
				}
				.doctor_ld_3_1_1__pic {
					width: 20%;
				}
				.doctor_ld_3_1_1__pic img {
					width: 100%;
				}
				.doctor_ld_3_1_1_box_tieude {
					font-size: 14px;
				}
				.doctor_ld_3_1_1__ct {
					width: 80%;
					font-size: 16px;
					padding-left: 10px;
				}
				.doctor_ld_3_1_1__regist {
					margin: 10px auto 0;
					width: 250px;
				}
			}
			
			@media (max-width: 375px) {
				.doctor_ld_3_1_1_title {
					font-size: 20px;
				}
				.doctor_ld_3_1_1_content {
					padding: 20px;
				}
			}
			
			@media (max-width: 320px) {
				.doctor_ld_3_1_1_title {
					font-size: 18px;
				}
				.doctor_ld_3_1_1_box_tieude {
					font-size: 14px;
				}
				.doctor_ld_3_1_1_item__pic {
					left: 20px;
				}
				.doctor_ld_3_1_1_item__bottom {
					padding-top: 45px;
					font-size: 14px;
				}
				.doctor_ld_3_1_1_regist {
					width: 240px;
				}
			}
			/*# sourceMappingURL=doctor_ld_3_1_1.css.map */
		</style>	
		';	
		$js_inline .='
			<script>
			var doctor_ld_3_1_1_boxOwl=tns({container:".doctor_ld_3_1_1_boxOwl",items:1,navContainer:"#doctor_ld_3_1_1_tabs2",navAsThumbnails:!0,autoplay:!1,autoplayTimeout:1e3,gutter:10,controls:!1});
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

<div class="doctor_ld_3_1_1 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_doctor_ld_3_1_1.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->