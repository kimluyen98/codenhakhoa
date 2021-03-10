<?php
	if($check == 0){
		$css_inline .= '
		<style>
			a {
				text-decoration: none;
			}
			
			.doctor_ld_3_1_0 {
				font-family: "Roboto Condensed", sans-serif;
			}
			.doctor_ld_3_1_0.copy {
				text-align: center;
				padding: 20px 0;
				min-height: 0
			}
			.doctor_ld_3_1_0.copy a {
				background: #F36B44;
				color: #fff;
				text-transform: uppercase;
				padding: 10px 30px;
				border-radius: 20px;
				border: 1px solid #fff;
				outline: none;
				cursor: pointer;
			}
			
			.doctor_ld_3_1_0.loaded {
				background: url('.$path.'/images/doctor_ld_3_1_0-bg.jpg) center 0 no-repeat;
				min-height: 700px;
				padding: 30px 0;
			}
			
			.doctor_ld_3_1_0 .modal-box {
				position: relative;
				width: 50%;
				max-width: 560px;
				margin: 100px auto;
			}
			
			@media (max-width: 414px) {
				.doctor_ld_3_1_0 .modal-box {
					width: 90%;
				}
			}
			
			.doctor_ld_3_1_0 .modal-header {
				padding: 10px 20px;
				background: #0038c8 !important;
				border-radius: 4px 4px 0 0;
				border-bottom: 1px solid #e9ecef !important;
			}
			
			.doctor_ld_3_1_0 .modal-boddy {
				color: #000;
				font-size: 16px;
				min-height: auto !important;
			}
			
			.doctor_ld_3_1_0 .modal-title {
				color: #fff;
				text-transform: uppercase;
			}
			
			.doctor_ld_3_1_0 .modal-close {
				color: #fff;
				margin-top: -30px;
			}
			
			.doctor_ld_3_1_0_title {
				text-transform: uppercase;
				text-align: center;
				font-size: 36px;
				color: #3056a0;
			}
			
			.doctor_ld_3_1_0_title p {
				font-size: 24px;
				color: #000000;
			}
			
			.doctor_ld_3_1_0_title br {
				display: none;
			}
			
			.doctor_ld_3_1_0__item {
				margin-right: 20px;
				margin-bottom: 15px;
				display: flex;
				flex-wrap: wrap;
				justify-content: center;
				background-color: #fff;
				border-radius: 15px;
				align-items: center;
				padding: 10px;
			}
			
			.doctor_ld_3_1_0__item:hover {
				background-color: #3d6dd9;
			}
			
			.doctor_ld_3_1_0__item:hover .doctor_ld_3_1_0__ct {
				color: #fff;
			}
			
			.doctor_ld_3_1_0__pic {
				width: 40%;
			}
			
			.doctor_ld_3_1_0__pic img {
				width: 100%;
			}
			
			.doctor_ld_3_1_0__ct {
				width: 60%;
				color: #000000;
				text-transform: uppercase;
				font-size: 16px;
				padding-left: 25px;
			}
			
			.doctor_ld_3_1_0_box .row {
				margin: 0;
			}
			
			.doctor_ld_3_1_0_box .row .col-md-5,
			.doctor_ld_3_1_0_box .row .col-md-7 {
				padding-left: 8px;
				padding-right: 8px;
			}
			
			.doctor_ld_3_1_0_box .row .col-md-5 img,
			.doctor_ld_3_1_0_box .row .col-md-7 img {
				width: 100%;
			}
			
			.doctor_ld_3_1_0_box_tieude {
				font-size: 16px;
				text-transform: uppercase;
				color: #0055a4;
				padding: 20px 0;
				text-align: center;
			}
			
			.doctor_ld_3_1_0__content ul li {
				padding-bottom: 10px;
			}
			
			.doctor_ld_3_1_0 .scrollbar {
				height: 430px;
				width: 355px;
				overflow-y: scroll;
				margin-bottom: 25px;
				margin: 0 auto;
			}
			
			@media (max-width: 1280px) {
				.doctor_ld_3_1_0 .scrollbar {
					width: 333px;
				}
			}
			
			.doctor_ld_3_1_0 .force-overflow {
				min-height: 450px;
			}
			
			.doctor_ld_3_1_0 #style-1::-webkit-scrollbar-track {
				-webkit-box-shadow: inset 0 0 6px rgba(61, 109, 217, 0.3);
				border-radius: 10px;
				background-color: #F5F5F5;
			}
			
			.doctor_ld_3_1_0 #style-1::-webkit-scrollbar {
				width: 8px;
				background-color: #F5F5F5;
			}
			
			.doctor_ld_3_1_0 #style-1::-webkit-scrollbar-thumb {
				border-radius: 10px;
				-webkit-box-shadow: inset 0 0 6px rgba(61, 109, 217, 0.3);
				background-color: #6276a5;
			}
			
			.doctor_ld_3_1_0_regist {
				background-color: #ff5159;
				color: #fff;
				text-align: center;
				width: 380px;
				margin: 0 auto;
				border-radius: 40px;
				padding: 6px 0;
				line-height: 1.1;
				margin-top: 20px;
			}
			
			.doctor_ld_3_1_0_regist a {
				display: block;
				text-transform: uppercase;
				color: #fff;
				font-size: 24px;
				padding: 8px 10px;
			}
			
			.doctor_ld_3_1_0_regist i {
				font-style: normal;
			}
			
			.doctor_ld_3_1_0_registMB {
				display: none;
			}
			
			@media (max-width: 1280px) {
				.doctor_ld_3_1_0 .scrollbar {
					width: 333px;
				}
			}
			
			@media (max-width: 1024px) {
				.doctor_ld_3_1_0.loaded {
					min-height: 490px;
				}
				.doctor_ld_3_1_0_title {
					font-size: 30px;
				}
				.doctor_ld_3_1_0_box_tieude {
					font-size: 18px;
				}
				.doctor_ld_3_1_0_boxGr {
					margin-top: 30px;
				}
				.doctor_ld_3_1_0_boxGr img {
					width: 100%;
				}
				.doctor_ld_3_1_0_regist {
					font-size: 13px;
					width: 45%;
					margin-top: 10px;
					width: 280px;
				}
				.doctor_ld_3_1_0_regist a {
					font-size: 18px;
				}
				.doctor_ld_3_1_0 .scrollbar {
					height: 330px;
				}
			}
			
			@media (max-width: 812px) {
				.doctor_ld_3_1_0_title {
					font-size: 24px;
				}
				.doctor_ld_3_1_0_regist {
					font-size: 12px;
				}
			}
			
			@media (max-width: 414px) {
				.doctor_ld_3_1_0_title {
					text-align: center;
					font-size: 22px;
				}
				.doctor_ld_3_1_0_title br {
					display: block;
				}
				.doctor_ld_3_1_0_title p {
					font-size: 14px;
				}
				.doctor_ld_3_1_0_regist {
					width: 280px;
					margin-top: 20px;
				}
				.doctor_ld_3_1_0_registPC {
					display: none;
				}
				.doctor_ld_3_1_0_registMB {
					display: block;
				}
				.doctor_ld_3_1_0_boxGr {
					margin-top: 10px;
				}
				.doctor_ld_3_1_0__box {
					margin-top: 20px;
					display: flex;
					flex-wrap: wrap;
					align-items: center;
				}
				.doctor_ld_3_1_0_box_tieude {
					width: 40%;
					order: 2;
				}
				.doctor_ld_3_1_0 .scrollbar {
					width: 60%;
					height: 160px;
				}
				.doctor_ld_3_1_0 .col-md-6.doctor_ld_3_1_0_da {
					order: 2;
				}
				.doctor_ld_3_1_0__item {
					flex-wrap: wrap;
					margin-right: 10px;
					margin-bottom: 5px;
				}
				.doctor_ld_3_1_0__pic {
					width: 30%;
				}
				.doctor_ld_3_1_0__pic img {
					width: 100%;
				}
				.doctor_ld_3_1_0_box_tieude {
					font-size: 14px;
				}
				.doctor_ld_3_1_0__ct {
					width: 70%;
					font-size: 12px;
					padding-left: 10px;
				}
			}
			
			@media (max-width: 375px) {
				.doctor_ld_3_1_0_title {
					font-size: 20px;
				}
				.doctor_ld_3_1_0_item__bottom {
					padding-top: 65px;
				}
			}
			
			@media (max-width: 320px) {
				.doctor_ld_3_1_0_title {
					font-size: 18px;
				}
				.doctor_ld_3_1_0_box_tieude {
					font-size: 14px;
				}
				.doctor_ld_3_1_0_item__pic {
					left: 20px;
				}
				.doctor_ld_3_1_0_item__bottom {
					padding-top: 45px;
					font-size: 14px;
				}
				.doctor_ld_3_1_0_regist {
					width: 280px;
				}
			}
			/*# sourceMappingURL=doctor_ld_3_1_0.css.map */
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
<!-- coppy -->
<?php if(isset($_GET['load'])): ?>

<div class="doctor_ld_3_1_0 copy">
    <?php
		echo '
			<a href="'.$path.'/html_id_doctor_ld_3_1_0.php" download>
				Tải code
			</a>
		';
	?>
</div>

<?php endif;?>
<!-- End Demo HTML -->